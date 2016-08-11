<?php

class EditNotifyHooks extends ENPageStructure {
	/**
	 * @param $echoNotifications
	 * @param $echoNotificationCategories
	 * @return bool
	 */
	public static function onBeforeCreateEchoEvent( &$echoNotifications, $echoNotificationCategories ) {
		//Echo notification for page edit
		$echoNotifications['edit-notify-page-create'] = array(
			'category' => 'system',
			'section' => 'alert',
			'primary-link' => array(
				'message' => 'editnotify-primary-message',
				'destination' => 'title'
			),
			'presentation-model' => 'EchoEditNotifyPageCreatePresentationModel',
			'formatter-class' => 'EchoEditNotifyPageCreateFormatter',
			'title-message' => 'editnotify-title-message-page-create',
			'title-params' => array( 'title' ),
			'flyout-message' => 'editnotify-flyout-message-page-create',
			'flyout-params' => array( 'agent', 'title' ),
			'email-subject-message' => 'editnotify-email-subject-message-page-create',
			'email-subject-params' => array( 'agent', 'title' ),
			'email-body-batch-message' => 'editnotify-email-body-message-page-create',
			'email-body-batch-params' => array( 'title' )
		);

		//Echo notification for page edit
		$echoNotifications['edit-notify'] = array(
		    'category' => 'system',
		    'section' => 'alert',
		    'primary-link' => array(
				'message' => 'editnotify-primary-message',
				'destination' => 'title'
		    ),
		    'presentation-model' => 'EchoEditNotifyPresentationModel',
		    'formatter-class' => 'EchoEditNotifyFormatter',
		    'title-message' => 'editnotify-title-message',
		    'title-params' => array( 'title' ),
		    'flyout-message' => 'editnotify-flyout-message',
		    'flyout-params' => array( 'agent', 'title' ),
		    'email-subject-message' => 'editnotify-email-subject-message',
		    'email-subject-params' => array( 'agent', 'title' ),
		    'email-body-batch-message' => 'editnotify-email-body-message',
		    'email-body-batch-params' => array( 'title', 'change' )
		);

		//echo notification for namespace in non template page
		$echoNotifications['edit-notify-namespace'] = array(
		    'category' => 'system',
		    'section' => 'alert',
		    'primary-link' => array(
				'message' => 'editnotify-primary-message',
				'destination' => 'title'
		    ),
		    'presentation-model' => 'EchoEditNotifyNamespacePresentationModel',
		    'formatter-class' => 'EchoEditNotifyFormatter',
		    'title-message' => 'editnotify-title-message',
		    'title-params' => array( 'title' ),
		    'flyout-message' => 'editnotify-flyout-message',
		    'flyout-params' => array( 'agent' ),
		    'email-subject-message' => 'editnotify-email-subject-message',
		    'email-subject-params' => array( 'agent', 'title' ),
		    'email-body-batch-message' => 'editnotify-email-body-message',
		    'email-body-batch-params' => array( 'title', 'change' )
		);

		//echo notification for included categories in non template page
		$echoNotifications['edit-notify-category'] = array(
		    'category' => 'system',
		    'section' => 'alert',
		    'primary-link' => array(
				'message' => 'editnotify-primary-message',
				'destination' => 'title'
		    ),
		    'presentation-model' => 'EchoEditNotifyCategoryPresentationModel',
		    'formatter-class' => 'EchoEditNotifyFormatter',
		    'title-message' => 'editnotify-title-message',
		    'title-params' => array( 'title' ),
		    'flyout-message' => 'editnotify-flyout-message',
		    'flyout-params' => array( 'agent', 'title' ),
		    'email-subject-message' => 'editnotify-email-subject-message',
		    'email-subject-params' => array( 'agent', 'title' ),
		    'email-body-batch-message' => 'editnotify-email-body-message',
		    'email-body-batch-params' => array( 'title', 'change' )
		);
		//Echo notification for template change
		$echoNotifications['edit-notify-template'] = array(
		    'category' => 'system',
		    'section' => 'alert',
		    'primary-link' => array(
				'message' => 'editnotify-primary-message',
				'destination' => 'title'
		    ),
		    'presentation-model' => 'EchoEditNotifyTemplatePresentationModel',
		    'formatter-class' => 'EchoEditNotifyTemplateFormatter',
		    'title-message' => 'editnotify-title-message',
		    'title-params' => array( 'agent', 'title' ),
		    'flyout-message' => 'editnotify-flyout-message',
		    'flyout-params' => array( 'agent', 'title' ),
		    'email-subject-message' => 'editnotify-email-subject-message-template',
		    'email-subject-params' => array( 'agent', 'title', 'field-name', 'new-field-value' ),
		    'email-body-batch-message' => 'editnotify-email-body-message-template',
		    'email-body-batch-params' => array( 'field-name', 'existing-field-value', 'new-field-value', 'template', 'title', 'change' )
		);

		//echo notification for namespace in template page
		$echoNotifications['edit-notify-template-namespace'] = array(
		    'category' => 'system',
		    'section' => 'alert',
		    'primary-link' => array(
				'message' => 'editnotify-primary-message',
				'destination' => 'title'
		    ),
		    'presentation-model' => 'EchoEditNotifyTemplateNamespacePresentationModel',
		    'formatter-class' => 'EchoEditNotifyTemplateFormatter',
		    'title-message' => 'editnotify-title-message',
		    'title-params' => array( 'title' ),
		    'flyout-message' => 'editnotify-flyout-message',
		    'flyout-params' => array( 'agent', 'title' ),
		    'email-subject-message' => 'editnotify-email-subject-message-template',
		    'email-subject-params' => array( 'agent', 'title', 'field-name', 'new-field-value' ),
		    'email-body-batch-message' => 'editnotify-email-body-message-template',
		    'email-body-batch-params' => array( 'field-name', 'existing-field-value', 'new-field-value', 'template', 'title', 'change' )
		);
		//echo notification for included categories in template page
		$echoNotifications['edit-notify-template-category'] = array(
		    'category' => 'system',
		    'section' => 'alert',
		    'primary-link' => array(
				'message' => 'editnotify-primary-message',
				'destination' => 'title'
		    ),
			'presentation-model' => 'EchoEditNotifyTemplateCategoryPresentationModel',
			'formatter-class' => 'EchoEditNotifyTemplateFormatter',
		    'title-message' => 'editnotify-title-message',
		    'title-params' => array( 'title' ),
		    'flyout-message' => 'editnotify-flyout-message',
		    'flyout-params' => array( 'agent', 'title' ),
		    'email-subject-message' => 'editnotify-email-subject-message-template',
		    'email-subject-params' => array( 'agent', 'title', 'field-name', 'new-field-value' ),
		    'email-body-batch-message' => 'editnotify-email-body-message-template',
		    'email-body-batch-params' => array( 'field-name', 'existing-field-value', 'new-field-value', 'template', 'title', 'change' )
		);
		//notifiation for template field name to specific template value for all pages
		$echoNotifications['edit-notify-template-value'] = array(
		    'category' => 'system',
		    'section' => 'alert',
		    'primary-link' => array(
				'message' => 'editnotify-primary-message',
				'destination' => 'title'
		    ),
		    'presentation-model' => 'EchoEditNotifyTemplateValuePresentationModel',
		    'formatter-class' => 'EchoEditNotifyTemplateFormatter',
		    'title-message' => 'editnotify-title-message',
		    'title-params' => array( 'title' ),
		    'flyout-message' => 'editnotify-flyout-message',
		    'flyout-params' => array( 'agent', 'title' ),
		    'email-subject-message' => 'editnotify-email-subject-message-template',
		    'email-subject-params' => array( 'agent', 'title', 'field-name', 'new-field-value' ),
		    'email-body-batch-message' => 'editnotify-email-body-message-template',
		    'email-body-batch-params' => array( 'field-name', 'existing-field-value', 'new-field-value', 'template', 'title', 'change' )
		);
		//notification for change in template field to a specific template value in a namespace
		$echoNotifications['edit-notify-template-value-namespace'] = array(
		    'category' => 'system',
		    'section' => 'alert',
		    'primary-link' => array(
				'message' => 'editnotify-primary-message',
				'destination' => 'title'
		    ),
		    'presentation-model' => 'EchoEditNotifyTemplateValueNamespacePresentationModel',
		    'formatter-class' => 'EchoEditNotifyTemplateFormatter',
		    'title-message' => 'editnotify-title-message',
		    'title-params' => array( 'title' ),
		    'flyout-message' => 'editnotify-flyout-message',
		    'flyout-params' => array( 'agent' ),
		    'email-subject-message' => 'editnotify-email-subject-message-template',
		    'email-subject-params' => array( 'agent', 'title', 'field-name', 'new-field-value' ),
		    'email-body-batch-message' => 'editnotify-email-body-message-template',
		    'email-body-batch-params' => array( 'field-name', 'existing-field-value', 'new-field-value', 'template', 'title', 'change' )
		);
		//notification for change in template field to a specific template value in a category
		$echoNotifications['edit-notify-template-value-category'] = array(
			'category' => 'system',
			'section' => 'alert',
			'primary-link' => array(
				'message' => 'editnotify-primary-message',
				'destination' => 'title'
			),
			'presentation-model' => 'EchoEditNotifyTemplateValueCategoryPresentationModel',
			'formatter-class' => 'EchoEditNotifyTemplateFormatter',
			'title-message' => 'editnotify-title-message',
			'title-params' => array( 'title' ),
			'flyout-message' => 'editnotify-flyout-message',
			'flyout-params' => array( 'title' ),
			'email-subject-message' => 'editnotify-email-subject-message-template',
			'email-subject-params' => array( 'agent', 'title', 'field-name', 'new-field-value' ),
			'email-body-batch-message' => 'editnotify-email-body-message-template',
			'email-body-batch-params' => array( 'field-name', 'existing-field-value', 'new-field-value', 'template', 'title', 'change' )
		);
		return true;
	}

	/**
	 * @param $event
	 * @param $users
	 * @return bool
	 */
	public static function onEchoGetDefaultNotifiedUsers( $event, &$users ) {
		switch ( $event->getType() ) {
			case 'edit-notify':
			case 'edit-notify-namespace':
			case 'edit-notify-category':
			case 'edit-notify-template':
			case 'edit-notify-template-namespace':
			case 'edit-notify-template-category':
			case 'edit-notify-template-value':
			case 'edit-notify-template-value-namespace':
			case 'edit-notify-template-value-category':
			case 'edit-notify-page-create':
				$extra = $event->getExtra();
				$userId = $extra['user-id'];
				$user = User::newFromId( $userId );
				$users[$userId] = $user;
				break;
		}

		return true;
	}

	/**
	 * @param WikiPage $wikiPage
	 * @param $user
	 * @param $content
	 * @param $summary
	 * @param $isMinor
	 * @param $isWatch
	 * @param $section
	 * @param $flags
	 * @param $status
	 * @return bool
	 */
	public static function onPageContentSave( WikiPage &$wikiPage, &$user, &$content, &$summary, $isMinor, $isWatch, $section, &$flags, &$status ) {

		global $wgEditNotify;
		global $wgEditNotifyAlerts;
		$title = $wikiPage->getTitle();
		$text = ContentHandler::getContentText( $content );

		$existingPageStructure = ENPageStructure::newFromTitle( $title );

		$newPageStructure = new ENPageStructure;
		$newPageStructure->parsePageContents( $text );

		if ( $wikiPage->exists() ) {

			if ( $newPageStructure != $existingPageStructure ) {

				$newPageComponent = $newPageStructure->mComponents;
				$existingPageComponent = $existingPageStructure->mComponents;
				if ( isset( $newPageComponent[0] ) ) {

					if ( $newPageComponent[0]->mIsTemplate ) {

						$newField = $newPageComponent[0]->mFields;
						$existingField = $existingPageComponent[0]->mFields;

						$newFieldNames = array_keys( $newField );
						$existingFieldNames = array_keys( $existingField );

						$newFieldValues = array_values( $newField );
						$existingFieldValues = array_values( $existingField );

						$fieldNames = array_unique( array_merge( $newFieldNames, $existingFieldNames ), SORT_REGULAR );
						$changedFields = $addedFields = $removedFields = array();

						foreach ( $fieldNames as $key => $Name ) {

							// Alert for modified fields
							if ( isset( $newField[$Name] ) && isset( $existingField[$Name] ) ) {
								if ( strcmp( $newField[$Name], $existingField[$Name] ) !== 0 ) {
									// string for the notification part
									// $changedFields[$Name] = "\"".$existingField[$Name]. "\" was modified to \"".$newField[$Name]."\"";
									$changedFields[$Name] = $newField[$Name];
								}
							} // Alert for added fields
							else {
								if ( isset( $newField[$Name] ) ) {
									$addedFields[$Name] = $newField[$Name];
								} // Alert for removed fields
								else {
									$removedFields[$Name] = $existingField[$Name];
								}
							}

							$modifiedFields = array_merge( $changedFields, $addedFields, $removedFields );
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

						if ( count( $changedFields ) + count( $addedFields ) + count( $removedFields ) > 0 ) {
							$templateNotification = true;
							$templateFieldNotification = true;
							$template = $wikiPage->getTitle()->getTemplateLinksFrom()[0]->mTextform;
							$trackFields = array_keys( $wgEditNotify['edit-template-field-name'][$template] );
							$templateNamespace = $wikiPage->getTitle()->getNsText();
							//$templateCategories = $wikiPage->getTitle()->getParentCategories();
							//get the categories associated with the page
							$titleId = $title->getArticleId();
							$dbr = wfGetDB( DB_SLAVE );
							$categorylinks = $dbr->tableName( 'categorylinks' );

							$templateCategories = array();
							$fieldValueNamespaceUser1 = $fieldValueNamespaceUser2 = array();
							$fieldValueNamespaceUserArray = array();
							$fieldValueCategoryUser1 = $fieldValueCategoryUser2 = array();
							$templateValueAllPages1 = $templateValueAllPages2 = array();
							$templateNamespaceUser1 = $templateNamespaceUser2 = array();
							$templateCategoryUser1 = $templateCategoryUser2 = array();

							$templateAllPages1 = $templateAllPages2 = array();
							$fieldValueCategoryUserArray = $templateCategoryUserArray = array();
							$categoryTemplateValueUserNotify = $categoryTemplateUserNotify = array();

							$templateFieldNotifiedUserArray = array();


							//Notification for change of template field to a specific value in namespace
							//1
							# NEW SQL

							$sql = "SELECT * FROM $categorylinks" . " WHERE cl_from='$titleId'" . " AND cl_from <> '0'" . " ORDER BY cl_sortkey";

							$res = $dbr->query( $sql );

							if ( $dbr->numRows( $res ) > 0 ) {
								foreach ( $res as $row ) //$data[] = Title::newFromText($wgContLang->getNSText ( NS_CATEGORY ).':'.$row->cl_to);
								{
									$templateCategories[$row->cl_to] = $title->getFullText();
								}
								$dbr->freeResult( $res );
							} else {
								$templateCategories = array();
							}


							//Checks if the page has namespace
							if ( $templateNamespace ) {
								foreach ( $changedFields as $changedFieldName => $changedFieldValue ) {
									foreach ( $wgEditNotifyAlerts as $fieldValueNamespaceAlert ) {

										if ( is_array( $fieldValueNamespaceAlert['action'] ) ) {
											if ( in_array( 'edit', $fieldValueNamespaceAlert['action'] ) ) {

												//checks if the namespace of the page is array
												if ( isset( $fieldValueNamespaceAlert['namespace'] ) ) {
													if ( is_array( $fieldValueNamespaceAlert['namespace'] ) ) {
														if ( in_array( $templateNamespace, $fieldValueNamespaceAlert['namespace'] ) ) {

															if ( isset( $fieldValueNamespaceAlert['template'] ) && isset( $fieldValueNamespaceAlert['templateField'] ) && isset( $fieldValueNamespaceAlert['templateFieldValue'] ) ) {
																if ( $fieldValueNamespaceAlert['template'] == $template && $fieldValueNamespaceAlert['templateField'] == $changedFieldName && $fieldValueNamespaceAlert['templateFieldValue'] == $changedFieldValue ) {

																	foreach ( $fieldValueNamespaceAlert['users'] as $fieldValueNamespaceUsers ) {
																		$fieldValueNamespaceUser1[] = $fieldValueNamespaceUsers;
																	}
																}
															} else {

																//getting the users who siged up for namespace notification
																foreach ( $fieldValueNamespaceAlert['users'] as $editNamespaceUsers ) {
																	$fieldValueNamespaceUser2[] = $editNamespaceUsers;
																}
															}
															$fieldValueNamespaceUserArray = array_unique( array_merge( $fieldValueNamespaceUser1, $fieldValueNamespaceUser2 ), SORT_REGULAR );
														}
													} else {
														if ( $fieldValueNamespaceAlert['namespace'] == $templateNamespace ) {
															//executes if namespace key is not array

															if ( isset( $fieldValueNamespaceAlert['template'] ) && isset( $fieldValueNamespaceAlert['templateField'] ) && isset( $fieldValueNamespaceAlert['templateFieldValue'] ) ) {
																if ( $fieldValueNamespaceAlert['template'] == $template && $fieldValueNamespaceAlert['templateField'] == $changedFieldName && $fieldValueNamespaceAlert['templateFieldValue'] == $changedFieldValue ) {

																	foreach ( $fieldValueNamespaceAlert['users'] as $fieldValueNamespaceUsers ) {
																		$fieldValueNamespaceUser1[] = $fieldValueNamespaceUsers;
																	}
																}
															} else {
																//getting the users who signed up for namespace notification
																foreach ( $fieldValueNamespaceAlert['users'] as $editNamespaceUsers ) {
																	$fieldValueNamespaceUser2[] = $editNamespaceUsers;
																}
															}
															$fieldValueNamespaceUserArray = array_unique( array_merge( $fieldValueNamespaceUser1, $fieldValueNamespaceUser2 ), SORT_REGULAR );
														}
													}
												}
											}
										} else {
											if ( $fieldValueNamespaceAlert['action'] == 'edit' ) {

												//checks if the namespace of the page is array
												if ( isset( $fieldValueNamespaceAlert['namespace'] ) ) {
													if ( is_array( $fieldValueNamespaceAlert['namespace'] ) ) {
														if ( in_array( $templateNamespace, $fieldValueNamespaceAlert['namespace'] ) ) {

															if ( isset( $fieldValueNamespaceAlert['template'] ) && isset( $fieldValueNamespaceAlert['templateField'] ) && isset( $fieldValueNamespaceAlert['templateFieldValue'] ) ) {
																if ( $fieldValueNamespaceAlert['template'] == $template && $fieldValueNamespaceAlert['templateField'] == $changedFieldName && $fieldValueNamespaceAlert['templateFieldValue'] == $changedFieldValue ) {

																	foreach ( $fieldValueNamespaceAlert['users'] as $fieldValueNamespaceUsers ) {
																		$fieldValueNamespaceUser1[] = $fieldValueNamespaceUsers;
																	}
																}
															} else {

																foreach ( $fieldValueNamespaceAlert['users'] as $editNamespaceUsers ) {
																	$fieldValueNamespaceUser2[] = $editNamespaceUsers;
																}

															}
															$fieldValueNamespaceUserArray = array_unique( array_merge( $fieldValueNamespaceUser1, $fieldValueNamespaceUser2 ), SORT_REGULAR );
														}
													} else {
														if ( $fieldValueNamespaceAlert['namespace'] == $templateNamespace ) {
															//executes if namespace is not array


															if ( isset( $fieldValueNamespaceAlert['template'] ) && isset( $fieldValueNamespaceAlert['templateField'] ) && isset( $fieldValueNamespaceAlert['templateFieldValue'] ) ) {
																if ( $fieldValueNamespaceAlert['template'] == $template && $fieldValueNamespaceAlert['templateField'] == $changedFieldName && $fieldValueNamespaceAlert['templateFieldValue'] == $changedFieldValue ) {

																	foreach ( $fieldValueNamespaceAlert['users'] as $fieldValueNamespaceUsers ) {
																		$fieldValueNamespaceUser1[] = $fieldValueNamespaceUsers;
																	}
																}
															} else {

																//getting the users who signed up for namespace notification
																foreach ( $fieldValueNamespaceAlert['users'] as $editNamespaceUsers ) {
																	$fieldValueNamespaceUser2[] = $editNamespaceUsers;
																}

															}
															$fieldValueNamespaceUserArray = array_unique( array_merge( $fieldValueNamespaceUser1, $fieldValueNamespaceUser2 ), SORT_REGULAR );
														}
														$fieldValueNamespaceUserArray = array_unique( array_merge( $fieldValueNamespaceUser1, $fieldValueNamespaceUser2 ), SORT_REGULAR );
													}
												}
											}
										}
									}
									foreach ( $fieldValueNamespaceUserArray as $fieldValueNamespaceUser ) {
										self::TemplateFieldValueTrigger( $title, 'edit-notify-template-value-namespace', $fieldValueNamespaceUser, $changedFieldName, $changedFieldValue, $template, $existingField[$changedFieldName], $templateNamespace );
									}
								}
							}


							if ( $templateCategories ) {
								foreach ($templateCategories as $fieldValueCategory => $fieldValuePage) {
									foreach ( $changedFields as $changedFieldName => $changedFieldValue ) {

										foreach ( $wgEditNotifyAlerts as $fieldValueCategoryAlert ) {

											if ( is_array( $fieldValueCategoryAlert['action'] ) ) {
												if ( in_array( 'edit', $fieldValueCategoryAlert['action'] ) ) {

													//checks if the category of the page is array
													if ( isset( $fieldValueCategoryAlert['category'] ) ) {
														if ( is_array( $fieldValueCategoryAlert['category'] ) ) {
															if ( in_array( $fieldValueCategory, $fieldValueCategoryAlert['category'] ) ) {

																if ( isset( $fieldValueCategoryAlert['template'] ) && isset( $fieldValueCategoryAlert['templateField'] ) && isset( $fieldValueCategoryAlert['templateFieldValue'] ) ) {
																	if ( $fieldValueCategoryAlert['template'] == $template && $fieldValueCategoryAlert['templateField'] == $changedFieldName && $fieldValueCategoryAlert['templateFieldValue'] == $changedFieldValue ) {

																		foreach ( $fieldValueCategoryAlert['users'] as $fieldValueCategoryUsers ) {
																			$fieldValueCategoryUser1[] = $fieldValueCategoryUsers;
																		}
																	}
																} else {

																	//getting the users who siged up for category notification
																	foreach ( $fieldValueCategoryAlert['users'] as $editCategoryUsers ) {
																		$fieldValueCategoryUser2[] = $editCategoryUsers;
																	}
																}
																$fieldValueCategoryUserArray = array_unique( array_merge( $fieldValueCategoryUser1, $fieldValueCategoryUser2 ), SORT_REGULAR );
															}
														} else {
															if ( $fieldValueCategoryAlert['category'] == $fieldValueCategory ) {
																//executes if category key is not array

																if ( isset( $fieldValueCategoryAlert['template'] ) && isset( $fieldValueCategoryAlert['templateField'] ) && isset( $fieldValueCategoryAlert['templateFieldValue'] ) ) {
																	if ( $fieldValueCategoryAlert['template'] == $template && $fieldValueCategoryAlert['templateField'] == $changedFieldName && $fieldValueCategoryAlert['templateFieldValue'] == $changedFieldValue ) {

																		foreach ( $fieldValueCategoryAlert['users'] as $fieldValueCategoryUsers ) {
																			$fieldValueCategoryUser1[] = $fieldValueCategoryUsers;
																		}
																	}
																} else {

																	//getting the users who siged up for category notification
																	foreach ( $fieldValueCategoryAlert['users'] as $editCategoryUsers ) {
																		$fieldValueCategoryUser2[] = $editCategoryUsers;
																	}
																}

																$fieldValueCategoryUserArray = array_unique( array_merge( $fieldValueCategoryUser1, $fieldValueCategoryUser2 ), SORT_REGULAR );
															}
														}
													}
												}
											} else {
												if ( $fieldValueCategoryAlert['action'] == 'edit' ) {

													//checking if the category of the page is present in the array
													if ( isset( $fieldValueCategoryAlert['category'] ) ) {
														if ( is_array( $fieldValueCategoryAlert['category'] ) ) {
															if ( in_array( $fieldValueCategory, $fieldValueCategoryAlert['category'] ) ) {

																if ( isset( $fieldValueCategoryAlert['template'] ) && isset( $fieldValueCategoryAlert['templateField'] ) && isset( $fieldValueCategoryAlert['templateFieldValue'] ) ) {
																	if ( $fieldValueCategoryAlert['template'] == $template && $fieldValueCategoryAlert['templateField'] == $changedFieldName && $fieldValueCategoryAlert['templateFieldValue'] == $changedFieldValue ) {

																		foreach ( $fieldValueCategoryAlert['users'] as $fieldValueCategoryUsers ) {
																			$fieldValueCategoryUser1[] = $fieldValueCategoryUsers;
																		}
																	}
																} else {

																	//getting the users who singed up for category notification
																	foreach ( $fieldValueCategoryAlert['users'] as $editCategoryUsers ) {
																		$fieldValueCategoryUser2[] = $editCategoryUsers;
																	}
																}
																$fieldValueCategoryUserArray = array_unique( array_merge( $fieldValueCategoryUser1, $fieldValueCategoryUser2 ), SORT_REGULAR );
															}
														} else {
															if ( $fieldValueCategoryAlert['category'] == $fieldValueCategory ) {
																//executes if category key is not array
																if ( isset( $fieldValueCategoryAlert['template'] ) && isset( $fieldValueCategoryAlert['templateField'] ) && isset( $fieldValueCategoryAlert['templateFieldValue'] ) ) {
																	if ( $fieldValueCategoryAlert['template'] == $template && $fieldValueCategoryAlert['templateField'] == $changedFieldName && $fieldValueCategoryAlert['templateFieldValue'] == $changedFieldValue ) {

																		foreach ( $fieldValueCategoryAlert['users'] as $fieldValueCategoryUsers ) {
																			$fieldValueCategoryUser1[] = $fieldValueCategoryUsers;
																		}
																	}
																} else {

																	//getting the users who singed up for category notification
																	foreach ( $fieldValueCategoryAlert['users'] as $editCategoryUsers ) {
																		$fieldValueCategoryUser2[] = $editCategoryUsers;
																	}
																}
																$fieldValueCategoryUserArray = array_unique( array_merge( $fieldValueCategoryUser1, $fieldValueCategoryUser2 ), SORT_REGULAR );
															}
														}
													}
												}
											}
										}

									}

								}
								//removing the users who are notified for change in template field value in a category
								$templateFieldNotifiedUserArray = array_diff($fieldValueCategoryUserArray,$fieldValueNamespaceUserArray);
								foreach ( $templateFieldNotifiedUserArray as $notifyFieldValueCategoryUser ) {
									self::TemplateFieldValueTrigger( $title, 'edit-notify-template-value-namespace', $notifyFieldValueCategoryUser, $changedFieldName, $changedFieldValue, $template, $existingField[$changedFieldName], $fieldValueCategory );
								}
							}


								//Notification for change of template field to a specific value in categories
								//2
							/*	if ( $templateCategories ) {
									foreach ( $templateCategories as $templateValueCategory => $templateValuePagename ) {
										foreach ( $changedFields as $changedFieldName => $changedFieldValue ) {
											foreach ( $trackFields as $trackFieldName ) {
												if ( $changedFieldName == $trackFieldName ) {
													if ( isset( $wgEditNotify['edit-template-field-name-value'][$templates] ) ) {
														$trackFieldValues = array_keys( $wgEditNotify['edit-template-field-name-value'][$templates][$trackFieldName] );
														//there will be only one trackFieldValue
														foreach ( $trackFieldValues as $trackFieldValue ) {
															if ( $changedFields[$trackFieldName] == $trackFieldValue ) {
																foreach ( $wgEditNotify['edit-template-field-name-value'][$templates][$trackFieldName][$trackFieldValue]['category'][$templateValueCategory] as $templateValueNotifyCategory ) {
																	foreach ( $templateValueNotifyCategory as $templateValueCategoryUsers ) {
																		$templateValueCategoryUser1[] = $templateValueCategoryUsers;
																	}
																}

																foreach ( $wgEditNotify['all-changes']['category'][$templateValueCategory] as $notifyCategory ) {
																	foreach ( $notifyCategory as $editNotifyCategoryUsers ) {
																		$templateValueCategoryUser2[] = $editNotifyCategoryUsers;
																	}
																}

																$templateValueCategoryUserArray = array_unique( array_merge( $templateValueCategoryUser1, $templateValueCategoryUser2 ), SORT_REGULAR );

																$templateFieldNotification = false;
															}
														}
													}
												}
											}
										}
									}
									$categoryTemplateValueUserNotify = array_diff( $templateValueCategoryUserArray, $templateValueNamespaceUserArray );
									foreach ( $categoryTemplateValueUserNotify as $userTemplateValueCategory ) {
										self::TemplateFieldValueTrigger( $title, 'edit-notify-template-value-category', $userTemplateValueCategory, $changedFieldName, $changedFieldValue, $templates, $existingField[$changedFieldName], $templateValueCategory );
									}
								}

								//3
								$notifiedTemplateValueUsers = array_unique( array_merge( $templateValueCategoryUserArray, $templateValueNamespaceUserArray ), SORT_REGULAR );

								foreach ( $changedFields as $changedFieldName => $changedFieldValue ) {
									foreach ( $trackFields as $trackFieldName ) {
										if ( $changedFieldName == $trackFieldName ) {
											if ( isset( $wgEditNotify['edit-template-field-name-value'][$templates] ) ) {
												$trackFieldValues = array_keys( $wgEditNotify['edit-template-field-name-value'][$templates][$trackFieldName] );
												//there will be only one trackFieldValue
												foreach ( $trackFieldValues as $trackFieldValue ) {
													if ( $changedFields[$trackFieldName] == $trackFieldValue ) {
														foreach ( $wgEditNotify['edit-template-field-name-value'][$templates][$trackFieldName][$trackFieldValue]['all-pages'] as $notify ) {
															foreach ( $notify as $templateValueAllPagesUsers ) {
																$templateValueAllPages1[] = $templateValueAllPagesUsers;
															}
														}

														foreach ( $wgEditNotify['all-changes']['all-pages'] as $notify ) {
															foreach ( $notify as $editNotifyUsers ) {
																$templateValueAllPages2[] = $editNotifyUsers;
															}
														}
														$templateValueAllPagesArray = array_unique( array_merge( $templateValueAllPages1, $templateValueAllPages2 ), SORT_REGULAR );
														$notifiedTemplateValueUsers = array_diff( $templateValueAllPagesArray, $notifiedTemplateValueUsers );

														foreach ( $notifiedTemplateValueUsers as $userTemplateValueAllPages ) {
															self::TemplateFieldValueTrigger( $title, 'edit-notify-template-value', $userTemplateValueAllPages, $trackFieldName, $trackFieldValue, $templates, $existingField[$trackFieldName], 'all pages' );
														}
														unset( $templateValueAllPages1, $templateValueAllPages2, $templateValueAllPagesArray );
														$templateFieldNotification = false;
													}
												}
											}
										}
									}
								}

								//trigger notification for change in template field value
								//4 fieldname namespace
								if ( $templateFieldNotification && $templateNamespace ) {
									//trigger notification for change in namespace
									foreach ( $changedFields as $changedFieldNames => $changedFieldValues ) {
										foreach ( $trackFields as $trackFieldNames ) {
											if ( $changedFieldNames == $trackFieldNames ) {
												if ( isset( $wgEditNotify['edit-template-field-name'][$templates] ) ) {
													foreach ( $wgEditNotify['edit-template-field-name'][$templates][$trackFieldNames]['namespace'][$templateNamespace] as $namespaceNotify ) {
														foreach ( $namespaceNotify as $templateNamespaceUser ) {
															$templateNamespaceUser1[] = $templateNamespaceUser;
														}
													}
													foreach ( $wgEditNotify['all-changes']['namespace'][$templateNamespace] as $notifyNamespace ) {
														foreach ( $notifyNamespace as $editnotifyNamespaceUsers ) {
															$templateNamespaceUser2[] = $editnotifyNamespaceUsers;
														}
													}

													$templateNamespaceUserArray = array_unique( array_merge( $templateNamespaceUser1, $templateNamespaceUser2 ), SORT_REGULAR );


													foreach ( $templateNamespaceUserArray as $userTemplateNamespace ) {
														self::TemplateFieldTrigger( $title, 'edit-notify-template-namespace', $userTemplateNamespace, $changedFieldNames, $changedFieldValues, $templates, $existingField[$changedFieldNames], $templateNamespace );

													}
												}
											}
										}
									}
								}

								//5  fieldname category
								if ( $templateFieldNotification && $templateCategories ) {
									//trigger notification for change in categories
									foreach ( $templateCategories as $templateCategory => $templatePageName ) {
										foreach ( $changedFields as $changedFieldNames => $changedFieldValues ) {
											foreach ( $trackFields as $trackFieldNames ) {
												if ( $changedFieldNames == $trackFieldNames ) {
													if ( isset( $wgEditNotify['edit-template-field-name'][$templates] ) ) {
														foreach ( $wgEditNotify['edit-template-field-name'][$templates][$trackFieldNames]['category'][$templateCategory] as $categoryNotify ) {
															foreach ( $categoryNotify as $templateCategoryUsers ) {
																$templateCategoryUser1[] = $templateCategoryUsers;
															}
														}
														foreach ( $wgEditNotify['all-changes']['category'][$templateCategory] as $notifyCategory ) {
															foreach ( $notifyCategory as $editNotifyCategoryUsers ) {
																$templateCategoryUser2[] = $editNotifyCategoryUsers;
															}
														}
														$templateCategoryUserArray = array_unique( array_merge( $templateCategoryUser1, $templateCategoryUser2 ), SORT_REGULAR );
													}
												}
											}
										}
									}
									$categoryTemplateUserNotify = array_diff( $templateCategoryUserArray, $templateNamespaceUserArray );
									foreach ( $categoryTemplateUserNotify as $userTemplateCategory ) {
										self::TemplateFieldTrigger( $title, 'edit-notify-template-category', $userTemplateCategory, $changedFieldNames, $changedFieldValues, $templates, $existingField[$changedFieldNames], $templateCategory );
									}
								}
								$notifiedTemplateUsers = array_unique( array_merge( $categoryTemplateUserNotify, $templateNamespaceUserArray ), SORT_REGULAR );

								//6  fieldname all pages
								if ( $templateFieldNotification ) {
									//trigger notification for change in template field to specific template field value
									foreach ( $changedFields as $changedFieldNames => $changedFieldValues ) {
										foreach ( $trackFields as $trackFieldNames ) {
											if ( $changedFieldNames == $trackFieldNames ) {
												if ( isset( $wgEditNotify['edit-template-field-name'][$templates] ) ) {
													foreach ( $wgEditNotify['edit-template-field-name'][$templates][$trackFieldNames]['all-pages'] as $templateFieldNotify ) {
														foreach ( $templateFieldNotify as $templateAllPagesUsers ) {
															$templateAllPages1[] = $templateAllPagesUsers;
														}
													} //notification those who signed up for for all-changes
													foreach ( $wgEditNotify['all-changes']['all-pages'] as $notify ) {
														foreach ( $notify as $editNotifyUsers ) {
															$templateAllPages2[] = $editNotifyUsers;
														}
													}

													$templateAllPagesArray = array_unique( array_merge( $templateAllPages1, $templateAllPages2 ), SORT_REGULAR );
													$notifiedTemplateUsers = array_diff( $templateAllPagesArray, $notifiedTemplateUsers );

													foreach ( $notifiedTemplateUsers as $userTemplateAllPages ) {
														self::TemplateFieldTrigger( $title, 'edit-notify-template', $userTemplateAllPages, $changedFieldNames, $changedFieldValues, $templates, $existingField[$changedFieldNames], 'all pages' );
													}
													unset( $templateAllPages1, $templateAllPages2, $userTemplateAllPages );
												}
											}
										}
									}
								}*/
						}
					} else {
						//notification for non template pages
						$namespace = $wikiPage->getTitle()->getNsText();

						$titleId = $title->getArticleId();
						$dbr = wfGetDB( DB_SLAVE );
						$categorylinks = $dbr->tableName( 'categorylinks' );

						# NEW SQL
						$sql = "SELECT * FROM $categorylinks" . " WHERE cl_from='$titleId'" . " AND cl_from <> '0'" . " ORDER BY cl_sortkey";

						$res = $dbr->query( $sql );

						if ( $dbr->numRows( $res ) > 0 ) {
							foreach ( $res as $row )
							{
								$categories[$row->cl_to] = $title->getFullText();
							}
							$dbr->freeResult( $res );
						} else {
							$categories = array();
						}
						$categoryUserArray = $namespaceUserArray = $notifiedUsers = $allPagesUserArray = array();

						if ( $namespace ) {
							//trigger namespace of the page
							if ( isset( $wgEditNotify['all-changes']['namespace'][$namespace] ) ) {
								foreach ( $wgEditNotify['all-changes']['namespace'][$namespace] as $notifyNamespace ) {
									foreach ( $notifyNamespace as $namespaceUser ) {
										self::PageEditTrigger( $title, 'edit-notify-namespace', $namespaceUser, $namespace );
										$namespaceUserArray[] = $namespaceUser;
									}
								}
							}
						}

						if ( $categories ) {
							//trigger notification for the categories
							foreach ( $categories as $category => $pagename ) {
								if ( isset( $wgEditNotify['all-changes']['category'][$category] ) ) {
									foreach ( $wgEditNotify['all-changes']['category'][$category] as $notifyCategory ) {
										foreach ( $notifyCategory as $categoryUser) {
											$categoryUserArray[] = $categoryUser;
										}
									}
								}
							}
							$categoryUserArray = array_unique( array_diff( $categoryUserArray, $namespaceUserArray ), SORT_REGULAR );
							foreach ( $categoryUserArray as $categoryUsers ) {
								self::PageEditTrigger( $title, 'edit-notify-category', $categoryUsers, $category );
							}
						}

						$notifiedUsers = array_unique( array_merge( $categoryUserArray, $namespaceUserArray ), SORT_REGULAR );
						foreach ( $wgEditNotify['all-changes']['all-pages'] as $notify ) {
							foreach ( $notify as $allPagesUser ) {
								$allPagesUserArray[] = $allPagesUser;
							}
						}

						$allPagesUserArray = array_unique( array_diff( $allPagesUserArray, $notifiedUsers ), SORT_REGULAR );
						foreach ( $allPagesUserArray as $notify ) {
							self::PageEditTrigger( $title, 'edit-notify', $notify, 'all pages' );
						}
					}
				}
			}
		}
		return true;
	}

	//1
	/**
	 * @param $pagetitle
	 * @param $pagetype
	 * @param $user
	 * @param $change
	 */
	public static function PageEditTrigger( $pagetitle, $pagetype, $user, $change ) {
		EchoEvent::create( array(
			'type' => $pagetype,
			'extra' => array(
				'title' => $pagetitle,
				'user-id' => User::newFromName($user)->getId(),
				'change' => $change
			),
			'title' => $pagetitle
		) );
	}

	//2
	/**
	 * @param $pageTitle
	 * @param $pagetype
	 * @param $user
	 * @param $templateFieldName
	 * @param $existingFieldValue
	 * @param $template
	 * @param $newFieldValue
	 * @param $change
	 */
	public static function TemplateFieldTrigger( $pageTitle, $pagetype, $user, $templateFieldName, $existingFieldValue, $template, $newFieldValue, $change ) {
		EchoEvent::create( array(
			'type' => $pagetype,
			'extra' => array(
				'title' => $pageTitle,
				'user-id' => User::newFromName($user)->getId(),
				'field-name' => $templateFieldName,
				'new-field-value' => $existingFieldValue,
				'existing-field-value' => $newFieldValue,
				'template' => $template,
				'change' => $change
			),
			'title' => $pageTitle
		) );
	}

	//3
	/**
	 * @param $pagetitle
	 * @param $pagetype
	 * @param $user
	 * @param $templateFieldName
	 * @param $existingFieldValue
	 * @param $template
	 * @param $newFieldValue
	 * @param $change
	 */
	public static function TemplateFieldValueTrigger( $pagetitle, $pagetype, $user, $templateFieldName, $existingFieldValue, $template, $newFieldValue, $change ) {
		EchoEvent::create( array(
			'type' => $pagetype,
			'extra' => array(
				'title' => $pagetitle,
				'user-id' => User::newFromName($user)->getId(),
				'field-name' => $templateFieldName,
				'new-field-value' => $existingFieldValue,
				'existing-field-value' => $newFieldValue,
				'template' => $template,
				'change' => $change
			),
			'title' => $pagetitle
		) );
	}

	public static function onPageContentSaveComplete( $article, $user, $content, $summary, $isMinor, $isWatch, $section, $flags, $revision, $status, $baseRevId ) {
		if( !$article->exists() ) {
			global $wgEditNotify;
			$createPageNotify = $createPageNamespaceNotify = $createPageCategoryNotify = array();
			$title = $article->getTitle();
			$namespace = $article->getTitle()->getNsText();
			$titleId = $title->getArticleId();

			$dbr = wfGetDB( DB_SLAVE );
			$categorylinks = $dbr->tableName( 'categorylinks' );

			$sql = "SELECT * FROM $categorylinks" . " WHERE cl_from='$titleId'" . " AND cl_from <> '0'" . " ORDER BY cl_sortkey";

			$res = $dbr->query( $sql );
			if ( $dbr->numRows( $res ) > 0 ) {
				foreach ( $res as $row ) {
					$categories[$row->cl_to] = $title->getFullText();
				}
				$dbr->freeResult( $res );
			} else {

				$categories = array();
			}


			if ( $namespace ) {
				if ( isset( $wgEditNotify['create-page']['namespace'][$namespace] ) ) {
					foreach ( $wgEditNotify['create-page']['namespace'][$namespace] as $userNamespaceList ) {
						foreach ( $userNamespaceList as $namespaceUser ) {
							$createPageNamespaceNotify[] = $namespaceUser;
						}
					}
				}
			}

			if ( $categories ) {
				foreach ( $categories as $category ) {
					foreach ( $wgEditNotify['create-page']['category'][$category] as $userCategoryList ) {
						foreach ( $userCategoryList as $categoryUser ) {
							$createPageCategoryNotify[] = $categoryUser;
						}
					}
				}
			}
			$notifiedCreatePageUser = array_unique( array_merge( $createPageNamespaceNotify, $createPageCategoryNotify ) );

			foreach ( $wgEditNotify['create-page']['all-pages'] as $userCategoryList ) {
				foreach ( $userCategoryList as $allPagesUser ) {
					$createPageNotify[] = $allPagesUser;
				}
			}



					/*$createPageNotify = array_unique( $createPageNotify, SORT_REGULAR );
					foreach ($createPageNotify as $notifyUser) {
						file_put_contents('php://stderr', print_r($notifyUser, TRUE));
						EchoEvent::create( array(
							'type' => 'edit-notify-page-create',
							'extra' => array(
								'title' => $title,
								'user-id' => $notifyUser,
							),
							'title' => $title,
							'agent' => User::newFromName( $notifyUser ),
						) );
					}*/
		}

	}

}
