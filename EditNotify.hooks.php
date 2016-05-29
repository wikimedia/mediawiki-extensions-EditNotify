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
		    'title-params' => array( 'agent' ),
		    'flyout-message' => 'editnotify-flyout-message',
		    'flyout-params' => array( 'agent' ),
		    'email-subject-message' => 'editnotify-email-subject',
		    'email-subject-params' => array( 'agent' ),
		    'email-body-batch-message' => 'editnotify-email-batch-body',
		    'email-body-batch-params' =>  array( 'agent' )
		);
		return true;
	}

	public static function onEchoGetDefaultNotifiedUsers( $event, &$users )  {
		switch ($event->getType()) {
			case 'edit-notify':
				$extra = $event->getExtra();
				$userId = $extra['user-id'];
				$user = $extra['user-name'];
				$users[$userId] = $user;
				break;
		}
		return true;
	}


	public static function onPageContentSaveComplete( $article, $user, $content, $summary, $isMinor,
				$isWatch, $section, $flags, $revision, $status, $baseRevId )  {
		if( $revision ) {
			EchoEvent::create( array(
			    'type' => 'edit-notify',
			    'extra' => array(
			        'user-name' => $user,
			        'user-id' => User::newFromName($user),
			    ),

			));
		}
		return true;
	}



}

