<?php

class EchoEditNotifyPageCreateFormatter extends EchoBasicFormatter {
	/**
	 * @param EchoEvent $event
	 * @param string $param
	 * @param Message $message
	 * @param User $user
	 */
	protected function processParam( $event, $param, $message, $user ) {
		if ( $param === 'title' ) {
			$message->params( $event->getExtraParam( 'title' ) );
		} else {
			parent::processParam( $event, $param, $message, $user );
		}
	}
}
