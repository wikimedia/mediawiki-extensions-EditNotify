<?php


class EchoEditNotifyTemplateValueCategoryPresentationModel extends EchoEventPresentationModel {
	public function getIconType() {
		return 'placeholder';
	}
	public function getPrimaryLink() {
		return array(
		    'url' => SpecialPage::getTitleFor( 'EditNotify' ),
		    'label' => $this->msg( 'editnotify-page-edit-view' )->text(),
		);
	}

	public function getHeaderMessage() {
		$msg = parent::getHeaderMessage();
		$msg->params( $this->event->getExtraParam( 'title' ) );
		return $msg;
	}

}

