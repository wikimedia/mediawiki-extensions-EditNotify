<?php

class EchoEditNotifyPresentationModel extends EchoEventPresentationModel {
	/** @inheritDoc */
	public function getIconType() {
		return 'placeholder';
	}

	/** @inheritDoc */
	public function getPrimaryLink() {
		$eventTitle = $this->event->getTitle();
		return [
			'url' => $eventTitle ? $eventTitle->getFullURL() : '',
			'label' => $this->msg( 'editnotify-page-edit-label' )->text(),
		];
	}

	/** @inheritDoc */
	public function getHeaderMessage() {
		$msg = parent::getHeaderMessage();
		$msg->params( $this->event->getTitle() );
		$msg->params( $this->event->getExtraParam( 'change' ) );
		return $msg;
	}

}
