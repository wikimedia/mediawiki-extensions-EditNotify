<?php


class EchoEditTemplatePresentationModel extends EchoEventPresentationModel {
	public function getIconType() {
		return 'placeholder';
	}
	public function getPrimaryLink() {
		return array(
		    'url' => SpecialPage::getTitleFor( 'EditNotify' )->getFullURL(),
		    'label' => $this->msg( 'editnotify-page-edit-template-view' )->text(),
		);
	}

	public function getHeaderMessage() {
		$msg = parent::getHeaderMessage();
		$msg->params( $this->event->getExtraParam( 'title' ) );
		return $msg;
	}

}

