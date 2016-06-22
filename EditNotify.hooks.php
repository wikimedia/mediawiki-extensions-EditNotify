<?php

class EditNotifyHooks extends ENPageStructure
{
	public static function onBeforeCreateEchoEvent(&$echoNotifications, $echoNotificationCategories) {

		//Echo notification for page edit
		$echoNotifications['edit-notify'] = array(
		    'category' => 'system',
		    'section' => 'alert',
		    'primary-link' => array(
			'message' => 'editnotify-primary-message',
			'destination' => 'agent'
		    ),
		    'presentation-model' => 'EchoEditNotifyPresentationModel',
		    'formatter-class' => 'EchoBasicFormatter',
		    'title-message' => 'editnotify-title-message',
		    'title-params' => array('title'),
		    'flyout-message' => 'editnotify-flyout-message',
		    'flyout-params' => array('agent', 'title'),
		    'email-subject-message' => 'editnotify-email-subject',
		    'email-subject-params' => array('agent'),
		    'email-body-batch-message' => 'editnotify-email-batch-body',
		    'email-body-batch-params' => array('agent', 'title')
		);

		//Echo notification for template change
		$echoNotifications['edit-notify-template'] = array(
		    'category' => 'system',
		    'section' => 'alert',
		    'primary-link' => array(
			'message' => 'editnotify-primary-message',
			'destination' => 'agent'
		    ),
		    'presentation-model' => 'EchoEditNotifyTemplatePresentationModel',
		    'formatter-class' => 'EchoBasicFormatter',
		    'title-message' => 'editnotify-title-template',
		    'title-params' => array('agent', 'title'),
		    'flyout-message' => 'editnotify-flyout-template',
		    'flyout-params' => array('agent', 'title'),
		    'email-subject-message' => 'editnotify-subject-template',
		    'email-subject-params' => array('agent'),
		    'email-body-batch-message' => 'editnotify-email-batch-template',
		    'email-body-batch-params' => array('agent', 'title')
		);
		//echo notification for namespace in non template page
		$echoNotifications['edit-notify-namespace'] = array(
		    'category' => 'system',
		    'section' => 'alert',
		    'primary-link' => array(
			'message' => 'editnotify-primary-message',
			'destination' => 'agent'
		    ),
		    'presentation-model' => 'EchoEditNotifyNamespacePresentationModel',
		    'formatter-class' => 'EchoBasicFormatter',
		    'title-message' => 'editnotify-title-message',
		    'title-params' => array('title'),
		    'flyout-message' => 'editnotify-flyout-message',
		    'flyout-params' => array('agent', 'title'),
		    'email-subject-message' => 'editnotify-email-subject',
		    'email-subject-params' => array('agent'),
		    'email-body-batch-message' => 'editnotify-email-batch-body',
		    'email-body-batch-params' => array('agent', 'title')
		);
		//echo notification for included categories in non template page
		$echoNotifications['edit-notify-categories'] = array(
		    'category' => 'system',
		    'section' => 'alert',
		    'primary-link' => array(
			'message' => 'editnotify-primary-message',
			'destination' => 'agent'
		    ),
		    'presentation-model' => 'EchoEditNotifyCategoryPresentationModel',
		    'formatter-class' => 'EchoBasicFormatter',
		    'title-message' => 'editnotify-title-message',
		    'title-params' => array('title'),
		    'flyout-message' => 'editnotify-flyout-message',
		    'flyout-params' => array('agent', 'title'),
		    'email-subject-message' => 'editnotify-email-subject',
		    'email-subject-params' => array('agent'),
		    'email-body-batch-message' => 'editnotify-email-batch-body',
		    'email-body-batch-params' => array('agent', 'title')
		);
		//echo notification for namespace in template page
		$echoNotifications['edit-notify-template-namespace'] = array(
		    'category' => 'system',
		    'section' => 'alert',
		    'primary-link' => array(
			'message' => 'editnotify-primary-message',
			'destination' => 'agent'
		    ),
		    'presentation-model' => 'EchoEditNotifyTemplateNamespacePresentationModel',
		    'formatter-class' => 'EchoBasicFormatter',
		    'title-message' => 'editnotify-title-message',
		    'title-params' => array('title'),
		    'flyout-message' => 'editnotify-flyout-message',
		    'flyout-params' => array('agent', 'title'),
		    'email-subject-message' => 'editnotify-email-subject',
		    'email-subject-params' => array('agent'),
		    'email-body-batch-message' => 'editnotify-email-batch-body',
		    'email-body-batch-params' => array('agent', 'title')
		);
		//echo notification for included categories in template page
		$echoNotifications['edit-notify-template-category'] = array(
		    'category' => 'system',
		    'section' => 'alert',
		    'primary-link' => array(
			'message' => 'editnotify-primary-message',
			'destination' => 'agent'
		    ),
		    'presentation-model' => 'EchoEditNotifyTemplateCategoryPresentationModel',
		    'formatter-class' => 'EchoBasicFormatter',
		    'title-message' => 'editnotify-title-message',
		    'title-params' => array('title'),
		    'flyout-message' => 'editnotify-flyout-message',
		    'flyout-params' => array('agent', 'title'),
		    'email-subject-message' => 'editnotify-email-subject',
		    'email-subject-params' => array('agent'),
		    'email-body-batch-message' => 'editnotify-email-batch-body',
		    'email-body-batch-params' => array('agent', 'title')
		);
		return true;
	}

	public static function onEchoGetDefaultNotifiedUsers($event, &$users)
	{
		switch ($event->getType()) {
			case 'edit-notify':
			case 'edit-notify-namespace':
			case 'edit-notify-categories':	
			case 'edit-notify-template':
			case 'edit-notify-template-namespace':
			case 'edit-notify-template-category':
				$extra = $event->getExtra();
				$userId = $extra['user-id'];
				$user = User::newFromId($userId);
				$users[$userId] = $user;
				break;
		}
		return true;
	}

	public static function onPageContentSave(&$wikiPage, &$user, &$content, &$summary,
	                                         $isMinor, $isWatch, $section, &$flags, &$status) {
		global $wgEditNotify;
		$title = $wikiPage->getTitle();
		$text = ContentHandler::getContentText($content);

		$existingPageStructure = ENPageStructure::newFromTitle($title);
		$newPageStructure = new ENPageStructure;
		$newPageStructure->parsePageContents($text);

		if ($newPageStructure != $existingPageStructure) {
			$newPageComponent = $newPageStructure->mComponents;
			$existingPageComponent = $existingPageStructure->mComponents;

			if ($newPageComponent[0]->mIsTemplate) {

				$newField = $newPageComponent[0]->mFields;
				$existingField = $existingPageComponent[0]->mFields;

				$newFieldNames = array_keys($newField);
				$existingFieldNames = array_keys($existingField);

				$newFieldValues = array_values($newField);
				$existingFieldValues = array_values($existingField);

				$fieldNames = array_unique(array_merge($newFieldNames, $existingFieldNames), SORT_REGULAR);
				$changedFields = $addedFields = $removedFields = array();


				foreach ($fieldNames as $key => $Name) {

					// Alert for modified fields
					if (isset($newField[$Name]) && isset($existingField[$Name])) {
						if (strcmp($newField[$Name], $existingField[$Name]) !== 0) {
							// string for the notification part
							// $changedFields[$Name] = "\"".$existingField[$Name]. "\" was modified to \"".$newField[$Name]."\"";
							$changedFields[$Name] = $newField[$Name];
						}
					} // Alert for added fields
					else if (isset($newField[$Name])) {
						$addedFields[$Name] = $newField[$Name];
					} // Alert for removed fields
					else {
						$removedFields[$Name] = $existingField[$Name];
					}

					$modifiedFields = array_merge($changedFields, $addedFields, $removedFields);
				}


				// Alert - Change Detected in Wiki Template Page

				// alert all-pages
				//      loop through user-group
				//      loop through userlist


				// identify parent namespace
				// alert namespace
				//      repeat 2

				// loop through all parent categories
				//      alert category
				//              repeat 2

				// get pageid
				// loop through 2


				// get pageid

				// loop through $modifiedFields
				//      loop through 2

				// get pageid
				// loop through $modifiedFields
				//      loop through $modifiedField[$Name]
				//

				if (count($changedFields) + count($addedFields) + count($removedFields) > 0) {
					$templates = $wikiPage->getTitle()->getTemplateLinksFrom()[0]->mTextform;
					$trackFields = array_keys($wgEditNotify['edit-template-field-name'][$templates]);
					//trigger to all pages
					foreach($changedFields as $changedFieldNames => $changedFieldValues) {
						foreach($trackFields as $trackFieldNames){
							if($changedFieldNames == $trackFieldNames) {
								foreach($wgEditNotify['edit-template-field-name'][$templates][$trackFieldNames]['all-pages'] as $notify) {
									foreach ($notify as $userids) {
										self::PageEditTrigger($title, 'edit-notify-template', $userids);
									}
								}
							}
						}
					}
					//trigger the namespace of the page
					$templateNamespace = $wikiPage->getTitle()->getNsText();
					foreach($changedFields as $changedFieldNames => $changedFieldValues) {
						foreach($trackFields as $trackFieldNames){
							if($changedFieldNames == $trackFieldNames) {
								foreach($wgEditNotify['edit-template-field-name'][$templates][$trackFieldNames]['namespace'][$templateNamespace] as $namespaceNotify) {
									foreach ($namespaceNotify as $namespaceUser) {
										self::PageEditTrigger($title, 'edit-notify-template-namespace', $namespaceUser);
									}
								}
							}
						}
					}
					//trigger the categories in which the page is included
					$templateCategories = $wikiPage->getTitle()->getParentCategories();
					foreach ($templateCategories as $templateCategory => $templatePagename) {
						foreach ($changedFields as $changedFieldNames => $changedFieldValues) {
							foreach ($trackFields as $trackFieldNames) {
								if ($changedFieldNames == $trackFieldNames) {
									foreach ($wgEditNotify['edit-template-field-name'][$templates][$trackFieldNames]['category'][$templateCategory] as $categoryNotify) {
										foreach ($categoryNotify as $categoryUser) {
											self::PageEditTrigger($title, 'edit-notify-template-category', $categoryUser);
										}
									}
								}
							}
						}
					}
				}

			}
			//file_put_contents('php://stderr', print_r($changedFields,TRUE) );


			// Alert - Change Detected in Wiki Non-Template Page
			else {

				// alert all-pages
				//      loop throough user-group
				//      loop through userlist


				// identify parent namespace
				// alert namespace
				//      repeat 2

				// loop through all parent categories
				//      alert category
				//              repeat 2

				// get pageid
				// loop through 2

				//trigger for page edit to all pages
				foreach ($wgEditNotify['edit-page']['all-pages'] as $usernotify) {
					foreach ($usernotify as $userid) {
						self::PageEditTrigger($title, 'edit-notify', $userid);
					}
				}

				//trigger namespace of the page
				$namespace = $wikiPage->getTitle()->getNsText();
				foreach ($wgEditNotify['edit-page']['namespace'][$namespace] as $usernotifynamespace) {
					foreach ($usernotifynamespace as $userid) {
						self::PageEditTrigger($title, 'edit-notify-namespace', $userid);
					}
				}

				//trigger the incuded categories
				$categories = $wikiPage->getTitle()->getParentCategories();
				foreach ($categories as $category => $pagename) {
					foreach ($wgEditNotify['edit-page']['category'][$category] as $usernotifycategory) {
						foreach ($usernotifycategory as $userid) {
							self::PageEditTrigger($title, 'edit-notify-categories', $userid);
						}
					}
				}
			}
		}

		return true;
	}

	public static function PageEditTrigger($pagetitle, $pagetype, $userid) {
		EchoEvent::create(array(
		    'type' => $pagetype,
		    'extra' => array(
		        'title' => $pagetitle,
			'user-id' => $userid,
		    ),
		    'agent' => User::newFromName($userid),
		));
		//file_put_contents('php://stderr', print_r('PageTitle',TRUE) );
		//file_put_contents('php://stderr', print_r($pagetitle,TRUE) );
	}



}

