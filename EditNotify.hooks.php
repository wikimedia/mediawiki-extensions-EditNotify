<?php

class EditNotifyHooks  {
	public static function onBeforeCreateEchoEvent( &$notifications, $notificationCategories )  {
		$notifications['edit-notify'] = array(
		    'category' => 'system',
		    'section' => 'alert',
		    'primary-link' => array(
			'message' => 'editnotify-primary-message',
			'destination' => 'agent'
		    ),
		    'formatter-class' => 'EchoBasicFormatter',
		    'title-message' => 'editnotify-title-message',
		    'title-params' => array( 'agent', 'title' ),
		    'flyout-message' => 'editnotify-flyout-message',
		    'flyout-params' => array( 'agent', 'title' ),
		    'email-subject-message' => 'editnotify-email-subject',
		    'email-subject-params' => array( 'agent' ),
		    'email-body-batch-message' => 'editnotify-email-batch-body',
		    'email-body-batch-params' =>  array( 'agent','title' )
		);
		$notifications['edit-template'] = array(
		    'category' => 'system',
		    'section' => 'alert',
		    'primary-link' => array(
			'message' => 'editnotify-primary-message',
			'destination' => 'agent'
		    ),
		    'formatter-class' => 'EchoBasicFormatter',
		    'title-message' => 'editnotify-title-template',
		    'title-params' => array( 'agent', 'title' ),
		    'flyout-message' => 'editnotify-flyout-template',
		    'flyout-params' => array( 'agent', 'title' ),
		    'email-subject-message' => 'editnotify-subject-template',
		    'email-subject-params' => array( 'agent' ),
		    'email-body-batch-message' => 'editnotify-email-batch-template',
		    'email-body-batch-params' =>  array( 'agent','title' )
		);
		return true;
	}

	public static function onEchoGetDefaultNotifiedUsers( $event, &$users )  {
		switch ($event->getType()) {
			case 'edit-notify':
				$extra = $event->getExtra();
				$userId = $extra['user-id'];
				$user = User::newFromId( $userId );
				$users[$userId] = $user;
				break;
		}
		return true;
	}


	public static function onPageContentSaveComplete( $article, $user, $content, $summary, $isMinor,
				$isWatch, $section, $flags, $revision, $status, $baseRevId )  {
		$pageTitle = $article->getTitle();
		if ( method_exists( 'WikiPage', 'getContent' ) ) {
			$wiki_page = new WikiPage( $pageTitle );
			$page_contents = $wiki_page->getContent()->getNativeData();
		}
		$pageStructure->parsePageContents( $page_contents );

		foreach ( $pageStructure->mComponents as $pageComponent ) {
			if ( $pageComponent->mIsTemplate ) {
				foreach ( $pageComponent->mFields as $fieldName => $fieldValue ) {
					if ( strpos( $fieldValue, '{{' ) !== false ) {
						$dummyPageStructure = new DTPageStructure();
						$dummyPageStructure->parsePageContents( $fieldValue );
						if( $pageComponent->mFields[$fieldValue] != $dummyPageStructure->mComponents) {
							EchoEvent::create(array(
							    'type' => 'edit-template',
							    'title' => $pageTitle,
							    'extra' => array(
								'user-id' => $user->getId(),
							    ),

							));
						}
					}
				}
			}
		}

		if( is_null( $status->getValue()['revision'] ) ) {
			return;
		} else {
			EchoEvent::create( array(
			    'type' => 'edit-notify',
			    'title' => $article->getTitle(),
			    'extra' => array(
			        'user-id' => $user->getId(),
			    ),

			));
		}
		return true;
	}

	public function addNamedField( $fieldName, $fieldValue ) {
		$this->mFields[trim( $fieldName )] = trim( $fieldValue );
	}

	public function addUnnamedField( $fieldValue ) {
		$fieldName = self::$mUnnamedFieldCounter++;
		$this->mFields[$fieldName] = trim( $fieldValue );
	}
	function addComponent( $dtPageComponent ) {
		$this->mComponents[] = $dtPageComponent;
		DTPageComponent::$mFreeTextIDCounter = 1;
	}

	public function parsePageContents( $page_contents ) {
		// escape out variables like "{{PAGENAME}}"
		$page_contents = str_replace('{{PAGENAME}}', '&#123;&#123;PAGENAME&#125;&#125;', $page_contents);
		// escape out parser functions
		$page_contents = preg_replace('/{{(#.+)}}/', '&#123;&#123;$1&#125;&#125;', $page_contents);
		// escape out transclusions, and calls like "DEFAULTSORT"
		$page_contents = preg_replace('/{{(.*:.+)}}/', '&#123;&#123;$1&#125;&#125;', $page_contents);
		// escape out variable names
		$page_contents = str_replace('{{{', '&#123;&#123;&#123;', $page_contents);
		$page_contents = str_replace('}}}', '&#125;&#125;&#125;', $page_contents);
		// escape out tables
		$page_contents = str_replace('{|', '&#123;|', $page_contents);
		$page_contents = str_replace('|}', '|&#125;', $page_contents);
		// traverse the page contents, one character at a time
		$uncompleted_curly_brackets = 0;
		$free_text = "";
		$template_name = "";
		$field_name = "";
		$field_value = "";
		$field_has_name = false;
		for ($i = 0; $i < strlen($page_contents); $i++) {
			$c = $page_contents[$i];
			if ($uncompleted_curly_brackets == 0) {
				if ($c == "{" || $i == strlen($page_contents) - 1) {
					if ($i == strlen($page_contents) - 1)
						$free_text .= $c;
					$uncompleted_curly_brackets++;
					$free_text = trim($free_text);
					if ($free_text != "") {
						$freeTextComponent = DTPageComponent::newFreeText($free_text);
						$this->addComponent($freeTextComponent);
						$free_text = "";
					}
				} elseif ($c == "{") {
					// do nothing
				} else {
					$free_text .= $c;
				}
			} elseif ($uncompleted_curly_brackets == 1) {
				if ($c == "{") {
					$uncompleted_curly_brackets++;
					$creating_template_name = true;
				} elseif ($c == "}") {
					$uncompleted_curly_brackets--;
					// is this needed?
					// if ($field_name != "") {
					//	$field_name = "";
					// }
					if ($page_contents[$i - 1] == '}') {
						$this->addComponent($curTemplate);
					}
					$template_name = "";
				}
			} elseif ($uncompleted_curly_brackets == 2) {
				if ($c == "}") {
					$uncompleted_curly_brackets--;
				}
				if ($c == "{") {
					$uncompleted_curly_brackets++;
					$field_value .= $c;
				} else {
					if ($creating_template_name) {
						if ($c == "|" || $c == "}") {
							$curTemplate = DTPageComponent::newTemplate($template_name);
							$template_name = str_replace(' ', '_', trim($template_name));
							$template_name = str_replace('&', '&amp;', $template_name);
							$creating_template_name = false;
							$creating_field_name = true;
							$field_id = 1;
						} else {
							$template_name .= $c;
						}
					} else {
						if ($c == "|" || $c == "}") {
							if ($field_has_name) {
								$curTemplate->addNamedField($field_name, $field_value);
								$field_value = "";
								$field_has_name = false;
							} else {
								// "field_name" is actually the value
								$curTemplate->addUnnamedField($field_name);
							}
							$creating_field_name = true;
							$field_name = "";
						} elseif ($c == "=") {
							// handle case of = in value
							if (!$creating_field_name) {
								$field_value .= $c;
							} else {
								$creating_field_name = false;
								$field_has_name = true;
							}
						} elseif ($creating_field_name) {
							$field_name .= $c;
						} else {
							$field_value .= $c;
						}
					}
				}
			} else { // greater than 2
				if ($c == "}") {
					$uncompleted_curly_brackets--;
				} elseif ($c == "{") {
					$uncompleted_curly_brackets++;
				}
				$field_value .= $c;
			}
		}
	}
}


