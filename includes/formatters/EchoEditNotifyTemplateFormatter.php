<?php

class EchoEditNotifyTemplateFormatter extends EchoBasicFormatter {
	protected function processParam( $event, $param, $message, $user ) {
		if ( $param === 'title' ) {
			$message->params( $event->getExtraParam( 'title' ) );
		} else if ( $param === 'user-id' ) {
			$message->params( $event->getExtraParam( 'user-id' ) );
		} else if ( $param === 'field-name' ) {
			$message->params( $event->getExtraParam( 'field-name' ) );
		} else if ( $param === 'new-field-value' ) {
			$message->params( $event->getExtraParam( 'new-field-value' ) );
		} else if ( $param === 'existing-field-value' ) {
			$message->params( $event->getExtraParam( 'existing-field-value' ) );
		} else if ( $param === 'template' ) {
			$message->params( $event->getExtraParam( 'template' ) );
		} else if ( $param === 'change' ) {
			$message->params( $event->getExtraParam( 'change' ) );
		} else {
			parent::processParam( $event, $param, $message, $user );
		}
	}
	
}