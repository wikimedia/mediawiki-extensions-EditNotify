<?php

class EchoEditNotifyPageCreateFormatter extends EchoBasicFormatter {
	protected function processParam( $event, $param, $message, $user ) {
		if ( $param === 'title' ) {
			$message->params( $event->getExtraParam( 'title' ) );
		} else {
			parent::processParam( $event, $param, $message, $user );
		}
	}
}
