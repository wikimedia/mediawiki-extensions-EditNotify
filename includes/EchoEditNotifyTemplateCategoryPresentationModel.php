<?php

class EchoEditNotifyTemplateCategoryPresentationModel extends EchoEventPresentationModel {
	/** @inheritDoc */
	public function getIconType() {
		return 'placeholder';
	}

	/** @inheritDoc */
	public function getPrimaryLink() {
		return [
			'url' => $this->event->getExtraParam( 'title' )->getFullURL(),
			'label' => $this->msg( 'editnotify-page-edit-label' )->text(),
		];
	}

	/** @inheritDoc */
	public function getHeaderMessage() {
		$msg = parent::getHeaderMessage();
		$msg->params( $this->event->getExtraParam( 'field-name' ) );
		$msg->params( $this->event->getExtraParam( 'existing-field-value' ) );
		$msg->params( $this->event->getExtraParam( 'new-field-value' ) );
		$msg->params( $this->event->getExtraParam( 'template' ) );
		$msg->params( $this->event->getExtraParam( 'title' ) );
		$msg->params( $this->event->getExtraParam( 'change' ) );
		return $msg;
	}

}
