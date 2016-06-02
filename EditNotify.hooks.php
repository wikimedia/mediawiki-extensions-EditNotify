<?php

class EditNotifyHooks  {
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
		return true;
	}

	public static function onEchoGetDefaultNotifiedUsers( $event, &$users )  {
		switch ($event->getType()) {
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
				$isWatch, $section, $flags, $revision, $status, $baseRevId )  {
		$titl = "New notification";
		if( is_null( $status->getValue()['revision'] ) ) {
			return;
		} else {
			EchoEvent::create( array(
			    'type' => 'edit-notify',
			    'title' => $titl,
			    'extra' => array(
			        'user-id' => $user->getId(),
			    ),

			));
		}

		return true;
	}
}

