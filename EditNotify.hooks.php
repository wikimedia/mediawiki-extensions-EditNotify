<?php

class EditNotifyHooks extends ENPageStructure {
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
			case 'edit-template':
			case 'edit-notify':
				$extra = $event->getExtra();
				$userId = $extra['user-id'];
				$user = User::newFromId( $userId );
				$users[$userId] = $user;
				break;
		}
		return true;
	}

	public static function onPageContentSave( &$wikiPage, &$user, &$content, &$summary,
	                                          $isMinor, $isWatch, $section, &$flags, &$status ) {
		$title = $wikiPage->getTitle();
		$text = ContentHandler::getContentText( $content );

		$existingPageStructure = ENPageStructure::newFromTitle( $title );
		$newPageStructure = new ENPageStructure;
		$newPageStructure->parsePageContents( $text );

		 if( $newPageStructure != $existingPageStructure ) {
			$newPageComponent = $newPageStructure->mComponents;
			$existingPageComponent = $existingPageStructure->mComponents;

				if ( $newPageComponent[0]->mIsTemplate ) {

					$newField = $newPageComponent[0]->mFields;
					$existingField = $existingPageComponent[0]->mFields;

					$newFieldNames = array_keys($newField);
					$existingFieldNames = array_keys($existingField);

					$newFieldValues = array_values($newField);
					$existingFieldValues = array_values($existingField);

					$fieldNames = array_unique(array_merge($newFieldNames,$existingFieldNames), SORT_REGULAR);
					$changedFields = $addedFields = $removedFields = array();

					foreach($fieldNames as $key => $Name) {

						// Alert for modified fields
						if(isset($newField[$Name]) && isset($existingField[$Name])) {
							if(strcmp($newField[$Name],$existingField[$Name]) !== 0) {
								// string for the notification part
								// $changedFields[$Name] = "\"".$existingField[$Name]. "\" was modified to \"".$newField[$Name]."\"";
								$changedFields[$Name] = $newField[$Name];
							}
						}

						// Alert for added fields
						else if(isset($newField[$Name])) {
							$addedFields[$Name] = $newField[$Name];
						}

						// Alert for removed fields
						else {
							$removedFields[$Name] = $existingField[$Name];
						}
					}

					// Alert - Change Detected in Wiki Template Page
					if(count($changedFields)+count($addedFields)+count($removedFields) > 0) {
						EchoEvent::create(array(
						    'type' => 'edit-template',
						    'title' => $wikiPage->getTitle(),
						    'extra' => array(
							'user-id' => $user->getId(),
						    ),
						));

						file_put_contents('php://stderr', print_r($changedFields,TRUE) );
						file_put_contents('php://stderr', print_r($addedFields,TRUE) );
						file_put_contents('php://stderr', print_r($removedFields,TRUE) );
					}

				}

				// Alert - Change Detected in Wiki Non-Template Page
				else {
					EchoEvent::create(array(
					    'type' => 'edit-notify',
					    'title' => $wikiPage->getTitle(),
					    'extra' => array(
						'user-id' => $user->getId(),
					    ),
					));
				}
		}
		return true;
	}
}


