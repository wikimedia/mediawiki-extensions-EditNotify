<?php

class EchoEditNotifyFormatter extends EchoBasicFormatter {
	/**
	 * @param EchoEvent $event
	 * @param string $param
	 * @param Message $message
	 * @param User $user
	 */
	protected function processParam( $event, $param, $message, $user ) {
		if ( $param === 'title' ) {
			$message->params( $event->getExtraParam( 'title' ) );
		} elseif ( $param === 'change' ) {
			$message->params( $event->getExtraParam( 'change' ) );
		} else {
			parent::processParam( $event, $param, $message, $user );
		}
	}
}
