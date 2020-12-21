<?php

class EchoEditNotifyTemplateFormatter extends EchoBasicFormatter {
	/**
	 * @param EchoEvent $event
	 * @param string $param
	 * @param Message $message
	 * @param User $user
	 */
	protected function processParam( $event, $param, $message, $user ) {
		if ( $param === 'title' ) {
			$message->params( $event->getExtraParam( 'title' ) );
		} elseif ( $param === 'user-id' ) {
			$message->params( $event->getExtraParam( 'user-id' ) );
		} elseif ( $param === 'field-name' ) {
			$message->params( $event->getExtraParam( 'field-name' ) );
		} elseif ( $param === 'new-field-value' ) {
			$message->params( $event->getExtraParam( 'new-field-value' ) );
		} elseif ( $param === 'existing-field-value' ) {
			$message->params( $event->getExtraParam( 'existing-field-value' ) );
		} elseif ( $param === 'template' ) {
			$message->params( $event->getExtraParam( 'template' ) );
		} elseif ( $param === 'change' ) {
			$message->params( $event->getExtraParam( 'change' ) );
		} else {
			parent::processParam( $event, $param, $message, $user );
		}
	}

}
