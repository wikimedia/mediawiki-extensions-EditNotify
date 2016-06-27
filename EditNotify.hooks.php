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
		//notifiation for template field name to specific template value for all pages
		$echoNotifications['edit-notify-template-value'] = array(
		    'category' => 'system',
		    'section' => 'alert',
		    'primary-link' => array(
			'message' => 'editnotify-primary-message',
			'destination' => 'agent'
		    ),
		    'presentation-model' => 'EchoEditNotifyTemplateValuePresentationModel',
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
		//notification for change in template field to a specific template value in a namespace
		$echoNotifications['edit-notify-template-value-namespace'] = array(
		    'category' => 'system',
		    'section' => 'alert',
		    'primary-link' => array(
			'message' => 'editnotify-primary-message',
			'destination' => 'agent'
		    ),
		    'presentation-model' => 'EchoEditNotifyTemplateValueNamespacePresentationModel',
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
		//notification for change in template field to a specific template value in a category
		$echoNotifications['edit-notify-template-value-category'] = array(
			'category' => 'system',
			'section' => 'alert',
			'primary-link' => array(
				'message' => 'editnotify-primary-message',
				'destination' => 'agent'
			),
			'presentation-model' => 'EchoEditNotifyTemplateValueCategoryPresentationModel',
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

	public static function onEchoGetDefaultNotifiedUsers($event, &$users) {
		switch ($event->getType()) {
			case 'edit-notify':
			case 'edit-notify-namespace':
			case 'edit-notify-categories':
			case 'edit-notify-template':
			case 'edit-notify-template-namespace':
			case 'edit-notify-template-category':
			case 'edit-notify-template-value':
			case 'edit-notify-template-value-namespace':
			case 'edit-notify-template-value-category':
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
					$templateNamespace = $wikiPage->getTitle()->getNsText();
					$templateCategories = $wikiPage->getTitle()->getParentCategories();
					$templateNotification = true;
					$templateFieldNotification = true;
					$notification = true;
					$templateValueNamespaceUser1 = $templateValueNamespaceUser2 = array();
					$templateValueCategoryUser1 = $templateValueCategoryUser2 = array();
					$templateNamespaceUser1 = $templateNamespaceUser2 = array();
					$templateCategoryUser1 = $templateCategoryUser2 = array();


					//Notification for change of template field to a specific value in namespace
					//1
					if ( $templateNamespace ) {
						foreach($changedFields as $changedFieldName => $changedFieldValue) {
							foreach($trackFields as $trackFieldName){
								if($changedFieldName == $trackFieldName) {
									$trackFieldValues = array_keys($wgEditNotify['edit-template-field-name-value'][$templates][$trackFieldName]);
									//there will be only one trackFieldValue
									foreach($trackFieldValues as $trackFieldValue) {
										if($changedFields[$trackFieldName] == $trackFieldValue) {
											foreach($wgEditNotify['edit-template-field-name-value'][$templates][$trackFieldName][$trackFieldValue]['namespace'] as $templateValueNotifyNamespace) {
												foreach ($templateValueNotifyNamespace as $templateValueNamespaceUser) {
													foreach ( $templateValueNamespaceUser as $templateValueNamespaceUserids ) {
														$templateNotification = false;
														$templateValueNamespaceUser1[] = $templateValueNamespaceUserids;
														//array_push($templateValueArray, $templateValueNamespaceUserids);
													}
												}
											}
											foreach ($wgEditNotify['all-changes']['namespace'][$templateNamespace] as $notifyNamespace) {
												foreach ($notifyNamespace as $userIdNotifyNamespace) {
													$templateValueNamespaceUser2[] = $userIdNotifyNamespace;
								 				}
											}
											$templateValueNamspace = array_unique(array_merge($templateValueNamespaceUser1,$templateValueNamespaceUser2), SORT_REGULAR);
											foreach ($templateValueNamspace as $userIdTemplateValueNamespace) {
												self::PageEditTrigger($title, 'edit-notify-template-value-namespace', $userIdTemplateValueNamespace);
												//file_put_contents( 'php://stderr', print_r( $userIdTemplateValueNamespace, true ) );

											}
										}
									}

								}
							}
						}

					}

					//Notification for change of template field to a specific value in categories
					//2
					if ( $templateCategories ) {
						foreach ($templateCategories as $templateValueCategory => $templateValuePagename) {
							foreach ( $changedFields as $changedFieldName => $changedFieldValue ) {
								foreach ( $trackFields as $trackFieldName ) {
									if ( $changedFieldName == $trackFieldName ) {
										$trackFieldValues = array_keys( $wgEditNotify['edit-template-field-name-value'][$templates][$trackFieldName] );
										//there will be only one trackFieldValue
										foreach ( $trackFieldValues as $trackFieldValue ) {
											if ( $changedFields[$trackFieldName] == $trackFieldValue ) {
												foreach ( $wgEditNotify['edit-template-field-name-value'][$templates][$trackFieldName][$trackFieldValue]['category'][$templateValueCategory] as $templateValueNotifyCategory ) {
													foreach ( $templateValueNotifyCategory as $templateValueCategoryUser ) {
														//file_put_contents( 'php://stderr', print_r( $templateValueCategoryUser, true ) );
														$templateNotification = false;
														$templateValueCategoryUser1[] = $templateValueCategoryUser;
													}
												}
												foreach ($templateCategories as $category => $pagename) {
													foreach ($wgEditNotify['all-changes']['category'][$category] as $notifyCategory) {
														foreach ($notifyCategory as $userIdNotifyCategory) {
															$templateValueCategoryUser2[] = $userIdNotifyCategory;
														}
													}
												}

												$templateValueCategoryUserArray = array_unique(array_merge($templateValueCategoryUser1,$templateValueCategoryUser2), SORT_REGULAR);
												foreach ($templateValueCategoryUserArray as $userIdTemplateValueCategory) {
													self::PageEditTrigger( $title, 'edit-notify-template-value-category', $userIdTemplateValueCategory );
												}
												unset($templateValueCategoryUser1, $templateValueCategoryUser2, $templateValueCategoryUserArray);
											}
										}
									}
								}
							}
						}

					}

					//trigger notification for change in template field to specific template field value
					//3
					if ( $templateNotification && $templateNamespace ) {
						//trigger notification for change in namespace
						foreach($changedFields as $changedFieldNames => $changedFieldValues) {
							foreach($trackFields as $trackFieldNames){
								if($changedFieldNames == $trackFieldNames) {
									foreach($wgEditNotify['edit-template-field-name'][$templates][$trackFieldNames]['namespace'][$templateNamespace] as $namespaceNotify) {
										foreach ($namespaceNotify as $namespaceUser) {
											$templateFieldNotification = false;
											$templateNamespaceUser1[] = $namespaceUser;
										}
									}
									foreach ($wgEditNotify['all-changes']['namespace'][$templateNamespace] as $notifyNamespace) {
										foreach ($notifyNamespace as $userIdNotifyNamespace) {
											$templateNamespaceUser2[] = $userIdNotifyNamespace;
										}
									}
									$templateNamespaceUserArray = array_unique(array_merge($templateNamespaceUser1,$templateNamespaceUser2), SORT_REGULAR);
									foreach ($templateNamespaceUserArray as $userIdTemplateNamespace) {
										self::PageEditTrigger( $title, 'edit-notify-template-namespace', $userIdTemplateNamespace );
										//file_put_contents( 'php://stderr', print_r( $userIdTemplateNamespace, true ) );
									}
								}
							}
						}
					}

					//4
					if ( $templateNotification && $templateCategories ) {
						//trigger notification for change in categories
						foreach ($templateCategories as $templateCategory => $templatePagename) {
							foreach ($changedFields as $changedFieldNames => $changedFieldValues) {
								foreach ($trackFields as $trackFieldNames) {
									if ($changedFieldNames == $trackFieldNames) {
										foreach ($wgEditNotify['edit-template-field-name'][$templates][$trackFieldNames]['category'][$templateCategory] as $categoryNotify) {
											foreach ($categoryNotify as $categoryUser) {
												$templateFieldNotification = false;
												$templateCategoryUser1[] = $categoryUser;
											}
										}
										foreach ($templateCategories as $category => $pagename) {
											foreach ($wgEditNotify['all-changes']['category'][$category] as $notifyCategory) {
												foreach ($notifyCategory as $userIdNotifyCategory) {
													$templateCategoryUser2[] = $userIdNotifyCategory;
												}
											}
										}
										$templateCategoryUserArray = array_unique(array_merge($templateCategoryUser1,$templateCategoryUser2), SORT_REGULAR);
										foreach ($templateCategoryUserArray as $userIdTemplateValueCategory) {
											self::PageEditTrigger($title, 'edit-notify-template-category', $userIdTemplateValueCategory);
										}
										unset($templateCategoryUser1, $templateCategoryUser2, $templateCategoryUserArray);
									}
								}
							}
						}
					}

					if ( $templateFieldNotification && $templateNotification ) {
						foreach($changedFields as $changedFieldName => $changedFieldValue) {
							foreach($trackFields as $trackFieldName){
								if($changedFieldName == $trackFieldName) {
									$trackFieldValues = array_keys($wgEditNotify['edit-template-field-name-value'][$templates][$trackFieldName]);
									//there will be only one trackFieldValue
									foreach($trackFieldValues as $trackFieldValue) {
										if($changedFields[$trackFieldName] == $trackFieldValue) {
											foreach($wgEditNotify['edit-template-field-name-value'][$templates][$trackFieldName][$trackFieldValue]['all-pages'] as $notify) {
												foreach ($notify as $templateValueUserids) {
													//file_put_contents('php://stderr', print_r($templateValueUserids,TRUE) );
													self::PageEditTrigger($title, 'edit-notify-template-value', $templateValueUserids);
													$notification = false;
												}
											}
//											foreach ($wgEditNotify['all-changes']['all-pages'] as $notify) {
//												foreach ($notify as $userIdNotify) {
//													self::PageEditTrigger($title, 'edit-notify-template-value', $userIdNotify);
//												}
//											}
										}
									}
								}
							}
						}
					}

					if( $templateFieldNotification && $templateNotification && $notification ) {
						//trigger notification for change in template field to specific template field value
						foreach($changedFields as $changedFieldNames => $changedFieldValues) {
							foreach($trackFields as $trackFieldNames) {
								if($changedFieldNames == $trackFieldNames) {
									foreach($wgEditNotify['edit-template-field-name'][$templates][$trackFieldNames]['all-pages'] as $templateFieldNotify) {
										foreach ($templateFieldNotify as $userIdTemplateFieldNotify) {
											self::PageEditTrigger($title, 'edit-notify-template', $userIdTemplateFieldNotify);
										}
									} //notification those who signed up for for all-changes
//									foreach ($wgEditNotify['all-changes']['all-pages'] as $notify) {
//										foreach ($notify as $userIdNotify) {
//											self::PageEditTrigger($title, 'edit-notify-template', $userIdNotify);
//										}
//									}
								}
							}
						}
					}
				}
			}
			//file_put_contents('php://stderr', print_r($changedFields,TRUE) );

			// Alert - edit in non template pages
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
				$namespace = $wikiPage->getTitle()->getNsText();
				$categories = $wikiPage->getTitle()->getParentCategories();
				$notification = true;

				if ( $categories ) {
					//trigger notification for the categories
					foreach ($categories as $category => $pagename) {
						foreach ($wgEditNotify['all-changes']['category'][$category] as $notifyCategory) {
							foreach ($notifyCategory as $userIdNotifyCategory) {
								self::PageEditTrigger($title, 'edit-notify-categories', $userIdNotifyCategory);
							}
						}
					}
					$notification = false;
					//file_put_contents('php://stderr', print_r('namespace',TRUE) );

				}


				if ( $namespace ) {
					//trigger namespace of the page
					foreach ($wgEditNotify['all-changes']['namespace'][$namespace] as $notifyNamespace) {
						foreach ($notifyNamespace as $userIdNotifyNamespace) {
							self::PageEditTrigger($title, 'edit-notify-namespace', $userIdNotifyNamespace);
						}
					}
					$notification = false;
					//file_put_contents('php://stderr', print_r('cat',TRUE) );

				}

				if ( $notification ) {
					//trigger for page edit to all pages
					foreach ($wgEditNotify['all-changes']['all-pages'] as $notify) {
						foreach ($notify as $userIdNotify) {
							self::PageEditTrigger($title, 'edit-notify', $userIdNotify);
						}
					}
					//file_put_contents('php://stderr', print_r('edit',TRUE) );

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
		    'agent' => User::newFromName($userid)
		));
		//file_put_contents('php://stderr', print_r('PageTitle',TRUE) );
		//file_put_contents('php://stderr', print_r($pagetitle,TRUE) );
	}



}

