<?php

class EchoEditNotifyNamespacePresentationModel extends EchoEditNotifyPresentationModel {
	/** @inheritDoc */
	public function getHeaderMessage() {
		$msg = parent::getHeaderMessage();
		$msg->params( $this->event->getTitle() );
		$msg->params( $this->event->getExtraParam( 'change' ) );
		return $msg;
	}

}
