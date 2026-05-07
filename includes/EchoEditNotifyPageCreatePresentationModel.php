<?php

class EchoEditNotifyPageCreatePresentationModel extends EchoEventPresentationModel {
	/** @inheritDoc */
	public function getIconType() {
		return 'placeholder';
	}

	/** @inheritDoc */
	public function getPrimaryLink() {
		return [
			'url' => $this->event->getTitle()->getFullURL(),
			'label' => $this->msg( 'editnotify-page-edit-label' )->text(),
		];
	}

	/** @inheritDoc */
	public function getHeaderMessage() {
		$msg = parent::getHeaderMessage();
		$msg->params( $this->event->getTitle() );
		return $msg;
	}

}
