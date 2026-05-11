<?php

class EchoEditNotifyPageCreatePresentationModel extends EchoEditNotifyPresentationModel {
	/** @inheritDoc */
	public function getHeaderMessage() {
		$msg = parent::getHeaderMessage();
		$msg->params( $this->event->getTitle() );
		return $msg;
	}

}
