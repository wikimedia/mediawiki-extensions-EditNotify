<?php

class EchoEditNotifyFormatter extends EchoBasicFormatter {

	protected function processParam( EchoEvent $event, $param, Message $message, User $user ) {
		if ( $param === 'title' ) {
			$message->params( $event->getExtraParam( 'title' ) );
		} else {
			parent::processParam( $event, $param, $message, $user );
		}
	}

}

