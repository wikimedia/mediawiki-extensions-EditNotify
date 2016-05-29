<?php

if ( function_exists( 'wfLoadExtension' ) ) {
	wfLoadExtension( 'EditNotify' );
	// Keep i18n globals so mergeMessageFileList.php doesn't break
	$wgMessagesDirs['EditNotify'] = __DIR__ . '/i18n';
	$wgExtensionMessagesFiles['EditNotifyAlias'] = __DIR__ . '/EditNotify.i18n.alias.php';
	wfWarn(
	    'Deprecated PHP entry point used for NotifyMe extension. Please use wfLoadExtension instead'
	);
	return true;
} else {
	die( 'This version of the EditNotify extension requires MediaWiki 1.25+' );
}
