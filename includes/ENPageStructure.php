<?php

/**
 * Most most the code in this page is copied from Data Transfer extension. The code is a part of Data Transfer extension.
 */

class ENPageStructure {
	var $mPageTitle;
	var $mComponents = [];

	function addComponent( $enPageComponent ) {
		$this->mComponents[] = $enPageComponent;
		ENPageComponent::$mFreeTextIDCounter = 1;
	}

	public static function newFromTitle( $pageTitle ) {
		$pageStructure = new ENPageStructure();
		$pageStructure->mPageTitle = $pageTitle;

		$wiki_page = WikiPage::factory( $pageTitle );
		$page_contents = ContentHandler::getContentText( $wiki_page->getContent() );
		$pageStructure->parsePageContents( $page_contents );
		// file_put_contents('php://stderr', print_r('tttttttt', TRUE));
		// Now, go through the field values and see if any of them
		// hold template calls - if any of them do, parse the value
		// as if it's the full contents of a page, and add the
		// resulting "components" to that field.
		foreach ( $pageStructure->mComponents as $pageComponent ) {
			if ( $pageComponent->mIsTemplate ) {
				foreach ( $pageComponent->mFields as $fieldName => $fieldValue ) {
					if ( strpos( $fieldValue, '{{' ) !== false ) {
						$dummyPageStructure = new ENPageStructure();
						$dummyPageStructure->parsePageContents( $fieldValue );
						$pageComponent->mFields[$fieldName] = $dummyPageStructure->mComponents;
					}
				}
			}
		}
		return $pageStructure;
	}

	/**
	 * Parses the contents of a wiki page, turning template calls into
	 * an arracy of ENPageComponent objects.
	 */
	public function parsePageContents( $page_contents ) {
		// escape out variables like "{{PAGENAME}}"
		$page_contents = str_replace( '{{PAGENAME}}', '&#123;&#123;PAGENAME&#125;&#125;', $page_contents );
		// escape out parser functions
		$page_contents = preg_replace( '/{{(#.+)}}/', '&#123;&#123;$1&#125;&#125;', $page_contents );
		// escape out transclusions, and calls like "DEFAULTSORT"
		$page_contents = preg_replace( '/{{(.*:.+)}}/', '&#123;&#123;$1&#125;&#125;', $page_contents );
		// escape out variable names
		$page_contents = str_replace( '{{{', '&#123;&#123;&#123;', $page_contents );
		$page_contents = str_replace( '}}}', '&#125;&#125;&#125;', $page_contents );
		// escape out tables
		$page_contents = str_replace( '{|', '&#123;|', $page_contents );
		$page_contents = str_replace( '|}', '|&#125;', $page_contents );
		// traverse the page contents, one character at a time
		$uncompleted_curly_brackets = 0;
		$free_text = "";
		$template_name = "";
		$field_name = "";
		$field_value = "";
		$field_has_name = false;
		for ( $i = 0; $i < strlen( $page_contents ); $i++ ) {
			$c = $page_contents[$i];
			if ( $uncompleted_curly_brackets == 0 ) {
				if ( $c == "{" || $i == strlen( $page_contents ) - 1 ) {
					if ( $i == strlen( $page_contents ) - 1 ) {
						$free_text .= $c;
					}
					$uncompleted_curly_brackets++;
					$free_text = trim( $free_text );
					if ( $free_text != "" ) {
						$freeTextComponent = ENPageComponent::newFreeText( $free_text );
						$this->addComponent( $freeTextComponent );
						$free_text = "";
					}
				} elseif ( $c == "{" ) {
					// do nothing
				} else {
					$free_text .= $c;
				}
			} elseif ( $uncompleted_curly_brackets == 1 ) {
				if ( $c == "{" ) {
					$uncompleted_curly_brackets++;
					$creating_template_name = true;
				} elseif ( $c == "}" ) {
					$uncompleted_curly_brackets--;
					// is this needed?
					// if ($field_name != "") {
					//	$field_name = "";
					// }
					if ( $page_contents[$i - 1] == '}' ) {
						$this->addComponent( $curTemplate );
					}
					$template_name = "";
				}
			} elseif ( $uncompleted_curly_brackets == 2 ) {
				if ( $c == "}" ) {
					$uncompleted_curly_brackets--;
				}
				if ( $c == "{" ) {
					$uncompleted_curly_brackets++;
					$field_value .= $c;
				} else {
					if ( $creating_template_name ) {
						if ( $c == "|" || $c == "}" ) {
							$curTemplate = ENPageComponent::newTemplate( $template_name );
							$template_name = str_replace( ' ', '_', trim( $template_name ) );
							$template_name = str_replace( '&', '&amp;', $template_name );
							$creating_template_name = false;
							$creating_field_name = true;
							$field_id = 1;
						} else {
							$template_name .= $c;
						}
					} else {
						if ( $c == "|" || $c == "}" ) {
							if ( $field_has_name ) {
								$curTemplate->addNamedField( $field_name, $field_value );
								$field_value = "";
								$field_has_name = false;
							} else {
								// "field_name" is actually the value
								$curTemplate->addUnnamedField( $field_name );
							}
							$creating_field_name = true;
							$field_name = "";
						} elseif ( $c == "=" ) {
							// handle case of = in value
							if ( !$creating_field_name ) {
								$field_value .= $c;
							} else {
								$creating_field_name = false;
								$field_has_name = true;
							}
						} elseif ( $creating_field_name ) {
							$field_name .= $c;
						} else {
							$field_value .= $c;
						}
					}
				}
			} else {
				// greater than 2
				if ( $c == "}" ) {
					$uncompleted_curly_brackets--;
				} elseif ( $c == "{" ) {
					$uncompleted_curly_brackets++;
				}
				$field_value .= $c;
			}
		}
	}

	/**
	 * Helper function for mergeInPageStructure().
	 *
	 * @return array
	 */
	private function getSingleInstanceTemplates() {
		$instancesPerTemplate = [];
		foreach ( $this->mComponents as $pageComponent ) {
			if ( $pageComponent->mIsTemplate ) {
				$templateName = $pageComponent->mTemplateName;
				if ( array_key_exists( $templateName, $instancesPerTemplate ) ) {
					$instancesPerTemplate[$templateName]++;
				} else {
					$instancesPerTemplate[$templateName] = 1;
				}
			}
		}
		$singleInstanceTemplates = [];
		foreach ( $instancesPerTemplate as $templateName => $instances ) {
			if ( $instances == 1 ) {
				$singleInstanceTemplates[] = $templateName;
			}
		}
		return $singleInstanceTemplates;
	}

	private function getIndexOfTemplateName( $templateName ) {
		foreach ( $this->mComponents as $i => $pageComponent ) {
			if ( $pageComponent->mTemplateName == $templateName ) {
				return $i;
			}
		}
		return null;
	}

	/**
	 * Used when doing a "merge" in an XML or CSV import.
	 */
	public function mergeInPageStructure( $secondPageStructure ) {
		// If there are any templates that have one instance in both
		// pages, replace values for their fields with values from
		// the second page.
		$singleInstanceTemplatesHere = $this->getSingleInstanceTemplates();
		$singleInstanceTemplatesThere = $secondPageStructure->getSingleInstanceTemplates();
		$singleInstanceTemplatesInBoth = array_intersect( $singleInstanceTemplatesHere, $singleInstanceTemplatesThere );
		foreach ( $secondPageStructure->mComponents as $pageComponent ) {
			if ( in_array( $pageComponent->mTemplateName, $singleInstanceTemplatesInBoth ) ) {
				$indexOfThisTemplate = $this->getIndexOfTemplateName( $pageComponent->mTemplateName );
				foreach ( $pageComponent->mFields as $fieldName => $fieldValue ) {
					$this->mComponents[$indexOfThisTemplate]->mFields[$fieldName] = $fieldValue;
				}
			} else {
				$this->mComponents[] = $pageComponent;
			}
		}
	}

	public function toWikitext() {
		$wikitext = '';
		foreach ( $this->mComponents as $pageComponent ) {
			$wikitext .= $pageComponent->toWikitext() . "\n";
		}
		return trim( $wikitext );
	}

	public function toXML( $isSimplified ) {
		$page_str = str_replace( ' ', '_', wfMessage( 'en_xml_page' )->inContentLanguage()->text() );
		$id_str = str_replace( ' ', '_', wfMessage( 'en_xml_id' )->inContentLanguage()->text() );
		$title_str = str_replace( ' ', '_', wfMessage( 'en_xml_title' )->inContentLanguage()->text() );
		$bodyXML = '';
		foreach ( $this->mComponents as $pageComponent ) {
			$bodyXML .= $pageComponent->toXML( $isSimplified );
		}
		$articleID = $this->mPageTitle->getArticleID();
		$pageName = $this->mPageTitle->getText();
		if ( $isSimplified ) {
			return Xml::tags( $page_str, null, Xml::tags( $id_str, null, $articleID ) . Xml::tags( $title_str, null, $pageName ) . $bodyXML );
		} else {
			return Xml::tags( $page_str, [ $id_str => $articleID, $title_str => $pageName ], $bodyXML );
		}
	}
}
