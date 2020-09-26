<?php

use MediaWiki\MediaWikiServices;

class ENPageComponent {
	var $mIsTemplate = false;
	var $mTemplateName;
	static $mUnnamedFieldCounter;
	var $mFields;
	var $mFreeText;
	static $mFreeTextIDCounter = 1;
	var $mFreeTextID;

	public static function newTemplate( $templateName ) {
		$enPageComponent = new ENPageComponent();
		$enPageComponent->mTemplateName = trim( $templateName );
		$enPageComponent->mIsTemplate = true;
		$enPageComponent->mFields = [];
		self::$mUnnamedFieldCounter = 1;
		return $enPageComponent;
	}

	public static function newFreeText( $freeText ) {
		$enPageComponent = new ENPageComponent();
		$enPageComponent->mIsTemplate = false;
		$enPageComponent->mFreeText = $freeText;
		$enPageComponent->mFreeTextID = self::$mFreeTextIDCounter++;
		return $enPageComponent;
	}

	public function addNamedField( $fieldName, $fieldValue ) {
		$this->mFields[trim( $fieldName )] = trim( $fieldValue );
	}

	public function addUnnamedField( $fieldValue ) {
		$fieldName = self::$mUnnamedFieldCounter++;
		$this->mFields[$fieldName] = trim( $fieldValue );
	}

	public function toWikitext() {
		if ( $this->mIsTemplate ) {
			$wikitext = '{{' . $this->mTemplateName;
			foreach ( $this->mFields as $fieldName => $fieldValue ) {
				if ( is_numeric( $fieldName ) ) {
					$wikitext .= '|' . $fieldValue;
				} else {
					$wikitext .= "\n|$fieldName=$fieldValue";
				}
			}
			$wikitext .= "\n}}";
			return $wikitext;
		} else {
			return $this->mFreeText;
		}
	}

	public function toXML( $isSimplified ) {
		global $wgDataTransferViewXMLParseFields;
		global $wgDataTransferViewXMLParseFreeText;
		global $wgTitle;
		$parser = MediaWikiServices::getInstance()->getParser();
		if ( $this->mIsTemplate ) {
			$namespace_labels = MediaWikiServices::getInstance()->getContentLanguage()->getNamespaces();
			$template_label = $namespace_labels[NS_TEMPLATE];
			$field_str = str_replace( ' ', '_', wfMessage( 'en_xml_field' )->inContentLanguage()->text() );
			$name_str = str_replace( ' ', '_', wfMessage( 'en_xml_name' )->inContentLanguage()->text() );
			$bodyXML = '';
			foreach ( $this->mFields as $fieldName => $fieldValue ) {
				// If this field itself holds template calls,
				// get the XML for those calls.
				if ( is_array( $fieldValue ) ) {
					$fieldValueXML = '';
					foreach ( $fieldValue as $subComponent ) {
						$fieldValueXML .= $subComponent->toXML( $isSimplified );
					}
				} elseif ( $wgDataTransferViewXMLParseFields ) {
					// Avoid table of contents and "edit" links
					$fieldValue = $parser->parse( "__NOTOC__ __NOEDITSECTION__\n" . $fieldValue, $wgTitle, new ParserOptions() )->getText();
				}
				if ( $isSimplified ) {
					if ( is_numeric( $fieldName ) ) {
						// add "Field" to the beginning of the file name, since
						// XML tags that are simply numbers aren't allowed
						$fielenag = $field_str . '_' . $fieldName;
					} else {
						$fielenag = str_replace( ' ', '_', trim( $fieldName ) );
					}
					$attrs = null;
				} else {
					$fielenag = $field_str;
					$attrs = [ $name_str => $fieldName ];
				}
				if ( is_array( $fieldValue ) ) {
					$bodyXML .= Xml::tags( $fielenag, $attrs, $fieldValueXML );
				} else {
					$bodyXML .= Xml::element( $fielenag, $attrs, $fieldValue );
				}
			}
			if ( $isSimplified ) {
				$templateName = str_replace( ' ', '_', $this->mTemplateName );
				return Xml::tags( $templateName, null, $bodyXML );
			} else {
				return Xml::tags( $template_label, [ $name_str => $this->mTemplateName ], $bodyXML );
			}
		} else {
			$free_text_str = str_replace( ' ', '_', wfMessage( 'en_xml_freetext' )->inContentLanguage()->text() );
			if ( $wgDataTransferViewXMLParseFreeText ) {
				$freeText = $this->mFreeText;
				// Undo the escaping that happened before.
				$freeText = str_replace( [ '&#123;', '&#125;' ], [ '{', '}' ], $freeText );
				// Get rid of table of contents.
				$mw = \MediaWiki\MediaWikiServices::getInstance()->getMagicWordFactory()->get( 'toc' );
				if ( $mw->match( $freeText ) ) {
					$freeText = $mw->replace( '', $freeText );
				}
				// Avoid "edit" links.
				$freeText = $parser->parse( "__NOTOC__ __NOEDITSECTION__\n" . $freeText, $wgTitle, new ParserOptions() )->getText();
			} else {
				$freeText = $this->mFreeText;
			}
			return Xml::element( $free_text_str, [ 'id' => $this->mFreeTextID ], $freeText );
		}
	}
}
