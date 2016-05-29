<?php

class SpecialEditNotify extends SpecialPage {
	public function __construct() {
		parent::__construct('EditNotify');
	}


	public function execute($sub) {
		$out = $this->getOutput();
		$out->setPageTitle($this->msg('editnotify-pagetitle'));
		$out->addHelpLink('How to become a MediaWiki hacker');
		$out->addWikiMsg('editnotify-welcome');
	}

	protected function getGroupName() {
		return 'other';
	}

}


