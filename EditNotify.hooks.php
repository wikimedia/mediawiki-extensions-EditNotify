<?php

class EditNotifyHooks extends ENPageStructure {
	public static function onBeforeCreateEchoEvent( &$notifications, $notificationCategories )  {
		$notifications['edit-notify'] = array(
		    'category' => 'system',
		    'section' => 'alert',
		    'primary-link' => array(
			'message' => 'editnotify-primary-message',
			'destination' => 'agent'
		    ),
		    'formatter-class' => 'EchoBasicFormatter',
		    'title-message' => 'editnotify-title-message',
		    'title-params' => array( 'agent', 'title' ),
		    'flyout-message' => 'editnotify-flyout-message',
		    'flyout-params' => array( 'agent', 'title' ),
		    'email-subject-message' => 'editnotify-email-subject',
		    'email-subject-params' => array( 'agent' ),
		    'email-body-batch-message' => 'editnotify-email-batch-body',
		    'email-body-batch-params' =>  array( 'agent','title' )
		);
		$notifications['edit-template'] = array(
		    'category' => 'system',
		    'section' => 'alert',
		    'primary-link' => array(
			'message' => 'editnotify-primary-message',
			'destination' => 'agent'
		    ),
		    'formatter-class' => 'EchoBasicFormatter',
		    'title-message' => 'editnotify-title-template',
		    'title-params' => array( 'agent', 'title' ),
		    'flyout-message' => 'editnotify-flyout-template',
		    'flyout-params' => array( 'agent', 'title' ),
		    'email-subject-message' => 'editnotify-subject-template',
		    'email-subject-params' => array( 'agent' ),
		    'email-body-batch-message' => 'editnotify-email-batch-template',
		    'email-body-batch-params' =>  array( 'agent','title' )
		);
		return true;
	}

	public static function onEchoGetDefaultNotifiedUsers( $event, &$users )  {
		switch ($event->getType()) {
			case 'edit-template':
			case 'edit-notify':
				$extra = $event->getExtra();
				$userId = $extra['user-id'];
				$user = User::newFromId( $userId );
				$users[$userId] = $user;
				break;
		}
		return true;
	}


	public static function onPageContentSaveComplete( $article, $user, $content, $summary, $isMinor,
				$isWatch, $section, $flags, $revision, $status, $baseRevId ) {
		$title = $article->getTitle();
		$text = ContentHandler::getContentText( $content );
		$existingPageStructure = ENPageStructure::newFromTitle( $title );
		$newPageStructure = new ENPageStructure;
		$newPageStructure->parsePageContents( $text );
		if (is_null($status->getValue()['revision'])) {
			return;
		} else if( $newPageStructure != $existingPageStructure ) {
			foreach ( $newPageStructure->mComponents as $pageComponent ) {
				if ($pageComponent->mIsTemplate) {
					foreach ($pageComponent->mFields as $fieldName => $fieldValue) {
						if (strpos($fieldValue, '{{') !== false) {
							$dummyPageStructure = new ENPageStructure();
							$dummyPageStructure->parsePageContents($fieldValue);
							if ($pageComponent->mFields[$fieldValue] != $dummyPageStructure->mFields[$fieldValue]) {
								EchoEvent::create(array(
								    'type' => 'edit-template',
								    'title' => $article->getTitle(),
								    'extra' => array(
									'user-id' => $user->getId(),
								    ),

								));
								return true;
							}
						}
					}
				}
			}
		} else {
			EchoEvent::create(array(
			    'type' => 'edit-notify',
			    'title' => $article->getTitle(),
			    'extra' => array(
				'user-id' => $user->getId(),
			    ),
			));
		}
		return true;
	}
}


