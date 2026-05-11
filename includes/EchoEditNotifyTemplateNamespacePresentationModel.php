<?php

class EchoEditNotifyTemplateNamespacePresentationModel extends EchoEditNotifyPresentationModel {
	/** @inheritDoc */
	public function getHeaderMessage() {
		$msg = parent::getHeaderMessage();
		$msg->params( $this->event->getExtraParam( 'field-name' ) );
		$msg->params( $this->event->getExtraParam( 'existing-field-value' ) );
		$msg->params( $this->event->getExtraParam( 'new-field-value' ) );
		$msg->params( $this->event->getExtraParam( 'template' ) );
		$msg->params( $this->event->getTitle() );
		$msg->params( $this->event->getExtraParam( 'change' ) );
		return $msg;
	}

}
