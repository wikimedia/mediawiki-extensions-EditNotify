<?php

class EchoEditNotifyFormatter extends EchoBasicFormatter {
	protected function processParam( $event, $param, $message, $user ) {
		if ( $param === 'title' ) {
			$message->params( $event->getExtraParam( 'title' ) );
		} else if ( $param === 'change' ) {
			$message->params( $event->getExtraParam( 'change' ) );
		} else {
			parent::processParam( $event, $param, $message, $user );
		}
	}
}