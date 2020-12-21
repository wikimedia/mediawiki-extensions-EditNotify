<?php

class EditNotifyHooks {
	/**
	 * @param &$echoNotifications
	 * @param $echoNotificationCategories
	 * @return bool
	 */
	public static function onBeforeCreateEchoEvent( &$echoNotifications, $echoNotificationCategories ) {
		// Echo notification for page edit
		$echoNotifications['edit-notify-page-create'] = [
			'category' => 'system',
			'section' => 'alert',
			'primary-link' => [
				'message' => 'editnotify-primary-message',
				'destination' => 'title'
			],
			'presentation-model' => 'EchoEditNotifyPageCreatePresentationModel',
			'formatter-class' => 'EchoEditNotifyPageCreateFormatter',
			'title-message' => 'editnotify-title-message-page-create',
			'title-params' => [ 'title' ],
			'flyout-message' => 'editnotify-flyout-message-page-create',
			'flyout-params' => [ 'agent', 'title' ],
			'email-subject-message' => 'editnotify-email-subject-message-page-create',
			'email-subject-params' => [ 'agent', 'title' ],
			'email-body-batch-message' => 'editnotify-email-body-message-page-create',
			'email-body-batch-params' => [ 'title' ]
		];

		// Echo notification for page edit
		$echoNotifications['edit-notify'] = [
			'category' => 'system',
			'section' => 'alert',
			'primary-link' => [
				'message' => 'editnotify-primary-message',
				'destination' => 'title'
			],
			'presentation-model' => 'EchoEditNotifyPresentationModel',
			'formatter-class' => 'EchoEditNotifyFormatter',
			'title-message' => 'editnotify-title-message',
			'title-params' => [ 'title' ],
			'flyout-message' => 'editnotify-flyout-message',
			'flyout-params' => [ 'agent', 'title' ],
			'email-subject-message' => 'editnotify-email-subject-message',
			'email-subject-params' => [ 'agent', 'title' ],
			'email-body-batch-message' => 'editnotify-email-body-message',
			'email-body-batch-params' => [ 'title', 'change' ]
		];

		// echo notification for namespace in non template page
		$echoNotifications['edit-notify-namespace'] = [
			'category' => 'system',
			'section' => 'alert',
			'primary-link' => [
				'message' => 'editnotify-primary-message',
				'destination' => 'title'
			],
			'presentation-model' => 'EchoEditNotifyNamespacePresentationModel',
			'formatter-class' => 'EchoEditNotifyFormatter',
			'title-message' => 'editnotify-title-message',
			'title-params' => [ 'title' ],
			'flyout-message' => 'editnotify-flyout-message',
			'flyout-params' => [ 'agent' ],
			'email-subject-message' => 'editnotify-email-subject-message',
			'email-subject-params' => [ 'agent', 'title' ],
			'email-body-batch-message' => 'editnotify-email-body-message',
			'email-body-batch-params' => [ 'title', 'change' ]
		];

		// echo notification for included categories in non template page
		$echoNotifications['edit-notify-category'] = [
			'category' => 'system',
			'section' => 'alert',
			'primary-link' => [
				'message' => 'editnotify-primary-message',
				'destination' => 'title'
			],
			'presentation-model' => 'EchoEditNotifyCategoryPresentationModel',
			'formatter-class' => 'EchoEditNotifyFormatter',
			'title-message' => 'editnotify-title-message',
			'title-params' => [ 'title' ],
			'flyout-message' => 'editnotify-flyout-message',
			'flyout-params' => [ 'agent', 'title' ],
			'email-subject-message' => 'editnotify-email-subject-message',
			'email-subject-params' => [ 'agent', 'title' ],
			'email-body-batch-message' => 'editnotify-email-body-message',
			'email-body-batch-params' => [ 'title', 'change' ]
		];
		// Echo notification for template change
		$echoNotifications['edit-notify-template'] = [
			'category' => 'system',
			'section' => 'alert',
			'primary-link' => [
				'message' => 'editnotify-primary-message',
				'destination' => 'title'
			],
			'presentation-model' => 'EchoEditNotifyTemplatePresentationModel',
			'formatter-class' => 'EchoEditNotifyTemplateFormatter',
			'title-message' => 'editnotify-title-message',
			'title-params' => [ 'agent', 'title' ],
			'flyout-message' => 'editnotify-flyout-message',
			'flyout-params' => [ 'agent', 'title' ],
			'email-subject-message' => 'editnotify-email-subject-message-template',
			'email-subject-params' => [ 'agent', 'title', 'field-name', 'new-field-value' ],
			'email-body-batch-message' => 'editnotify-email-body-message-template',
			'email-body-batch-params' => [ 'field-name', 'existing-field-value', 'new-field-value', 'template', 'title', 'change' ]
		];

		// echo notification for namespace in template page
		$echoNotifications['edit-notify-template-namespace'] = [
			'category' => 'system',
			'section' => 'alert',
			'primary-link' => [
				'message' => 'editnotify-primary-message',
				'destination' => 'title'
			],
			'presentation-model' => 'EchoEditNotifyTemplateNamespacePresentationModel',
			'formatter-class' => 'EchoEditNotifyTemplateFormatter',
			'title-message' => 'editnotify-title-message',
			'title-params' => [ 'title' ],
			'flyout-message' => 'editnotify-flyout-message',
			'flyout-params' => [ 'agent', 'title' ],
			'email-subject-message' => 'editnotify-email-subject-message-template',
			'email-subject-params' => [ 'agent', 'title', 'field-name', 'new-field-value' ],
			'email-body-batch-message' => 'editnotify-email-body-message-template',
			'email-body-batch-params' => [ 'field-name', 'existing-field-value', 'new-field-value', 'template', 'title', 'change' ]
		];
		// echo notification for included categories in template page
		$echoNotifications['edit-notify-template-category'] = [
			'category' => 'system',
			'section' => 'alert',
			'primary-link' => [
				'message' => 'editnotify-primary-message',
				'destination' => 'title'
			],
			'presentation-model' => 'EchoEditNotifyTemplateCategoryPresentationModel',
			'formatter-class' => 'EchoEditNotifyTemplateFormatter',
			'title-message' => 'editnotify-title-message',
			'title-params' => [ 'title' ],
			'flyout-message' => 'editnotify-flyout-message',
			'flyout-params' => [ 'agent', 'title' ],
			'email-subject-message' => 'editnotify-email-subject-message-template',
			'email-subject-params' => [ 'agent', 'title', 'field-name', 'new-field-value' ],
			'email-body-batch-message' => 'editnotify-email-body-message-template',
			'email-body-batch-params' => [ 'field-name', 'existing-field-value', 'new-field-value', 'template', 'title', 'change' ]
		];
		// notifiation for template field name to specific template value for all pages
		$echoNotifications['edit-notify-template-value'] = [
			'category' => 'system',
			'section' => 'alert',
			'primary-link' => [
				'message' => 'editnotify-primary-message',
				'destination' => 'title'
			],
			'presentation-model' => 'EchoEditNotifyTemplateValuePresentationModel',
			'formatter-class' => 'EchoEditNotifyTemplateFormatter',
			'title-message' => 'editnotify-title-message',
			'title-params' => [ 'title' ],
			'flyout-message' => 'editnotify-flyout-message',
			'flyout-params' => [ 'agent', 'title' ],
			'email-subject-message' => 'editnotify-email-subject-message-template',
			'email-subject-params' => [ 'agent', 'title', 'field-name', 'new-field-value' ],
			'email-body-batch-message' => 'editnotify-email-body-message-template',
			'email-body-batch-params' => [ 'field-name', 'existing-field-value', 'new-field-value', 'template', 'title', 'change' ]
		];
		// notification for change in template field to a specific template value in a namespace
		$echoNotifications['edit-notify-template-value-namespace'] = [
			'category' => 'system',
			'section' => 'alert',
			'primary-link' => [
				'message' => 'editnotify-primary-message',
				'destination' => 'title'
			],
			'presentation-model' => 'EchoEditNotifyTemplateValueNamespacePresentationModel',
			'formatter-class' => 'EchoEditNotifyTemplateFormatter',
			'title-message' => 'editnotify-title-message',
			'title-params' => [ 'title' ],
			'flyout-message' => 'editnotify-flyout-message',
			'flyout-params' => [ 'agent' ],
			'email-subject-message' => 'editnotify-email-subject-message-template',
			'email-subject-params' => [ 'agent', 'title', 'field-name', 'new-field-value' ],
			'email-body-batch-message' => 'editnotify-email-body-message-template',
			'email-body-batch-params' => [ 'field-name', 'existing-field-value', 'new-field-value', 'template', 'title', 'change' ]
		];
		// notification for change in template field to a specific template value in a category
		$echoNotifications['edit-notify-template-value-category'] = [
			'category' => 'system',
			'section' => 'alert',
			'primary-link' => [
				'message' => 'editnotify-primary-message',
				'destination' => 'title'
			],
			'presentation-model' => 'EchoEditNotifyTemplateValueCategoryPresentationModel',
			'formatter-class' => 'EchoEditNotifyTemplateFormatter',
			'title-message' => 'editnotify-title-message',
			'title-params' => [ 'title' ],
			'flyout-message' => 'editnotify-flyout-message',
			'flyout-params' => [ 'title' ],
			'email-subject-message' => 'editnotify-email-subject-message-template',
			'email-subject-params' => [ 'agent', 'title', 'field-name', 'new-field-value' ],
			'email-body-batch-message' => 'editnotify-email-body-message-template',
			'email-body-batch-params' => [ 'field-name', 'existing-field-value', 'new-field-value', 'template', 'title', 'change' ]
		];
		return true;
	}

	/**
	 * @param $event
	 * @param &$users
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
	 * @param WikiPage &$wikiPage
	 * @param &$user
	 * @param &$content
	 * @param &$summary
	 * @param $isMinor
	 * @param $isWatch
	 * @param $section
	 * @param &$flags
	 * @param &$status
	 * @return bool
	 */
	public static function onPageContentSave( WikiPage &$wikiPage, &$user, &$content, &$summary, $isMinor, $isWatch, $section, &$flags, &$status ) {
		global $wgEditNotifyAlerts;
		$title = $wikiPage->getTitle();
		$text = ContentHandler::getContentText( $content );

		$existingPageStructure = ENPageStructure::newFromTitle( $title );

		$newPageStructure = new ENPageStructure;
		$newPageStructure->parsePageContents( $text );

		if ( !$wikiPage->exists() ) {
			return true;
		}

		if ( $newPageStructure == $existingPageStructure ) {
			return true;
		}

		$newPageComponent = $newPageStructure->mComponents;
		$existingPageComponent = $existingPageStructure->mComponents;
		if ( isset( $newPageComponent[0] ) == false ) {
			return true;
		}

		if ( $newPageComponent[0]->mIsTemplate ) {

			$newField = $newPageComponent[0]->mFields;
			$existingField = $existingPageComponent[0]->mFields;

			$newFieldNames = array_keys( $newField );
			$existingFieldNames = array_keys( $existingField );

			$newFieldValues = array_values( $newField );
			$existingFieldValues = array_values( $existingField );

			$fieldNames = array_unique( array_merge( $newFieldNames, $existingFieldNames ), SORT_REGULAR );
			$changedFields = $addedFields = $removedFields = [];

			foreach ( $fieldNames as $key => $name ) {

				// Alert for modified fields
				if ( isset( $newField[$name] ) && isset( $existingField[$name] ) ) {
					if ( strcmp( $newField[$name], $existingField[$name] ) !== 0 ) {
						$changedFields[$name] = $newField[$name];
					}
				} else {
					if ( isset( $newField[$name] ) ) {
						$addedFields[$name] = $newField[$name];
					} else {
						$removedFields[$name] = $existingField[$name];
					}
				}

				$modifiedFields = array_merge( $changedFields, $addedFields, $removedFields );
			}

			if ( count( $changedFields ) + count( $addedFields ) + count( $removedFields ) <= 0 ) {
				return true;
			}

			$template = $wikiPage->getTitle()->getTemplateLinksFrom()[0]->mTextform;
			$templateNamespace = $wikiPage->getTitle()->getNsText();

			$titleId = $title->getArticleId();
			$dbr = wfGetDB( DB_REPLICA );
			$categorylinks = $dbr->tableName( 'categorylinks' );

			$fieldValueNamespaceUserArray = [];
			$fieldValueCategoryUserArray = [];
			$fieldValueAllPagesUserArray = [];
			$fieldNamespaceUserArray = [];
			$fieldCategoryUserArray = [];
			$fieldAllPagesUserArray = [];

			$notifiedTemplateFieldUsers = [];

			$handleTemplateFieldValueNamespaceAlert = false;
			$handleTemplateFieldValueCategoryAlert = false;
			$handleTemplateFieldValueAllPagesAlert = false;

			$handleTemplateFieldNamespaceAlert = false;
			$handleTemplateFieldCategoryAlert = false;
			$handleTemplateFieldAllPagesAlert = false;

			$handleNamespaceNotification = false;
			$handleCategoryNotification = false;
			$handleAllPagesNotification = false;

			/**
			 * Get the categories of the page
			 */
			$templateCategories = [];
			$sql = "SELECT * FROM $categorylinks" . " WHERE cl_from='$titleId'" . " AND cl_from <> '0'" . " ORDER BY cl_sortkey";

			$res = $dbr->query( $sql );

			if ( $dbr->numRows( $res ) > 0 ) {
				foreach ( $res as $row ) {
					$templateCategories[$row->cl_to] = $title->getFullText();
				}
				$dbr->freeResult( $res );
			} else {
				$templateCategories = [];
			}

			/** Notify users for change in template field to specific template value in namespace */
			if ( $templateNamespace ) {
				foreach ( $changedFields as $changedFieldName => $changedFieldValue ) {
					foreach ( $wgEditNotifyAlerts as $fieldValueNamespaceAlert ) {
						$handleTemplateFieldValueNamespaceAlert = false;

						// Checking if the 'action' is string or array of string
						if ( is_array( $fieldValueNamespaceAlert['action'] ) ) {
							if ( in_array( 'edit', $fieldValueNamespaceAlert['action'] ) ) {
								$handleTemplateFieldValueNamespaceAlert = true;
							}
						} else {
							if ( $fieldValueNamespaceAlert['action'] == 'edit' ) {
								$handleTemplateFieldValueNamespaceAlert = true;
							}
						}
						// check for template, template field and template value
						if ( $handleTemplateFieldValueNamespaceAlert ) {
							$handleNamespaceNotification = false;

							if ( array_key_exists( 'template', $fieldValueNamespaceAlert ) &&
								array_key_exists( 'templateField', $fieldValueNamespaceAlert ) &&
								array_key_exists( 'templateFieldValue', $fieldValueNamespaceAlert ) &&
								$fieldValueNamespaceAlert['template'] == $template &&
								$fieldValueNamespaceAlert['templateField'] == $changedFieldName &&
								$fieldValueNamespaceAlert['templateFieldValue'] == $changedFieldValue
							) {
								$handleNamespaceNotification = true;
							}

							/** getting users who signed up for all changes */
							if ( array_key_exists( 'template', $fieldValueNamespaceAlert ) == false &&
								array_key_exists( 'templateField', $fieldValueNamespaceAlert ) == false
							) {
								$handleNamespaceNotification = true;
							}

							/** Check for the namespace and get users from the array */
							if ( $handleNamespaceNotification &&
								array_key_exists( 'namespace', $fieldValueNamespaceAlert )
							) {
								if ( is_array( $fieldValueNamespaceAlert['namespace'] ) ) {
									if ( in_array( $templateNamespace, $fieldValueNamespaceAlert['namespace'] ) ) {
										foreach ( $fieldValueNamespaceAlert['users'] as $fieldValueNamespaceUsername ) {
											$fieldValueNamespaceUserArray[] = $fieldValueNamespaceUsername;
										}
									}
								} else {
									if ( $fieldValueNamespaceAlert['namespace'] == $templateNamespace ) {
										foreach ( $fieldValueNamespaceAlert['users'] as $fieldValueNamespaceUsername ) {
											$fieldValueNamespaceUserArray[] = $fieldValueNamespaceUsername;
										}
									}
								}
							}
						}
					}
					$fieldValueNamespaceUserArray = array_unique( $fieldValueNamespaceUserArray );

					foreach ( $fieldValueNamespaceUserArray as $fieldValueNamespaceUser ) {
						self::templateFieldValueNotify( $title, 'edit-notify-template-value-namespace', $fieldValueNamespaceUser,
							$changedFieldName, $changedFieldValue, $template, $existingField[$changedFieldName], $templateNamespace );
					}
				}
			}

			/** store the notified users of the change */
			$notifiedTemplateFieldUsers = array_merge( $notifiedTemplateFieldUsers, $fieldValueNamespaceUserArray );

			/** Notify users for change in template field to specific template value in category */
			foreach ( $templateCategories as $fieldValueCategory => $fieldValuePage ) {
				foreach ( $changedFields as $changedFieldName => $changedFieldValue ) {
					$handleTemplateFieldValueCategoryAlert = false;

					foreach ( $wgEditNotifyAlerts as $fieldValueCategoryAlert ) {

						if ( is_array( $fieldValueCategoryAlert['action'] ) ) {
							if ( in_array( 'edit', $fieldValueCategoryAlert['action'] ) ) {
								$handleTemplateFieldValueCategoryAlert = true;
							}

						} else {
							if ( $fieldValueCategoryAlert['action'] == 'edit' ) {
								$handleTemplateFieldValueCategoryAlert = true;
							}
						}

						if ( $handleTemplateFieldValueCategoryAlert ) {
							$handleCategoryNotification = false;

							if ( array_key_exists( 'template', $fieldValueCategoryAlert ) &&
								array_key_exists( 'templateField', $fieldValueCategoryAlert ) &&
								array_key_exists( 'templateFieldValue', $fieldValueCategoryAlert ) &&
								$fieldValueCategoryAlert['template'] == $template &&
								$fieldValueCategoryAlert['templateField'] == $changedFieldName &&
								$fieldValueCategoryAlert['templateFieldValue'] == $changedFieldValue
							) {
								$handleCategoryNotification = true;
							}

							if ( array_key_exists( 'template', $fieldValueCategoryAlert ) == false &&
								array_key_exists( 'templateField', $fieldValueCategoryAlert ) == false
							) {
								$handleCategoryNotification = true;
							}

							if ( $handleCategoryNotification &&
								array_key_exists( 'category', $fieldValueCategoryAlert )
							) {
								if ( is_array( $fieldValueCategoryAlert['category'] ) ) {
									if ( in_array( $fieldValueCategory, $fieldValueCategoryAlert['category'] ) ) {
										foreach ( $fieldValueCategoryAlert['users'] as $fieldValueCategoryUsername ) {
											$fieldValueCategoryUserArray[] = $fieldValueCategoryUsername;
										}
									}
								} else {
									if ( $fieldValueCategoryAlert['category'] == $fieldValueCategory ) {
										foreach ( $fieldValueCategoryAlert['users'] as $fieldValueCategoryUsername ) {
											$fieldValueCategoryUserArray[] = $fieldValueCategoryUsername;
										}
									}
								}
							}
						}
					}

					$fieldValueCategoryUserArray = array_unique( array_diff( $fieldValueCategoryUserArray, $notifiedTemplateFieldUsers ) );

					/** store the notified users of change in template field to specific template value */
					$notifiedTemplateFieldUsers = array_merge( $notifiedTemplateFieldUsers, $fieldValueCategoryUserArray );

					foreach ( $fieldValueCategoryUserArray as $fieldValueCategoryUser ) {
						self::templateFieldValueNotify( $title, 'edit-notify-template-value-category', $fieldValueCategoryUser,
							$changedFieldName, $changedFieldValue, $template, $existingField[$changedFieldName], $fieldValueCategory );
					}
					unset( $fieldValueCategoryUserArray );
				}
			}

			/** Notify users for change in template field to specific template value in all pages */
			foreach ( $changedFields as $changedFieldName => $changedFieldValue ) {
				foreach ( $wgEditNotifyAlerts as $fieldValueAllPagesAlert ) {
					$handleTemplateFieldValueAllPagesAlert = false;

					// Checking if the 'action' is string or array of string
					if ( is_array( $fieldValueAllPagesAlert['action'] ) ) {
						if ( in_array( 'edit', $fieldValueAllPagesAlert['action'] ) ) {
							$handleTemplateFieldValueAllPagesAlert = true;
						}
					} else {
						if ( $fieldValueAllPagesAlert['action'] == 'edit' ) {
							$handleTemplateFieldValueAllPagesAlert = true;
						}
					}
					// check for template, template field and template value
					if ( $handleTemplateFieldValueAllPagesAlert ) {
						$handleAllPagesNotification = false;

						if ( array_key_exists( 'template', $fieldValueAllPagesAlert ) &&
							array_key_exists( 'templateField', $fieldValueAllPagesAlert ) &&
							array_key_exists( 'templateFieldValue', $fieldValueAllPagesAlert ) &&
							$fieldValueAllPagesAlert['template'] == $template &&
							$fieldValueAllPagesAlert['templateField'] == $changedFieldName &&
							$fieldValueAllPagesAlert['templateFieldValue'] == $changedFieldValue
						) {
							$handleAllPagesNotification = true;
						}

						// getting users who signed up for all changes
						if ( array_key_exists( 'template', $fieldValueAllPagesAlert ) == false &&
							array_key_exists( 'templateField', $fieldValueAllPagesAlert ) == false ) {
							$handleAllPagesNotification = true;
						}

						// Check for the namespace and get users from the array
						if ( $handleAllPagesNotification &&
							array_key_exists( 'namespace', $fieldValueAllPagesAlert ) == false &&
							array_key_exists( 'category', $fieldValueAllPagesAlert ) == false
						) {
							foreach ( $fieldValueAllPagesAlert['users'] as $fieldValueAllPagesUsername ) {
								$fieldValueAllPagesUserArray[] = $fieldValueAllPagesUsername;
							}
						}
					}
				}
				$fieldValueAllPagesUserArray = array_unique( array_diff( $fieldValueAllPagesUserArray, $notifiedTemplateFieldUsers ) );

				$notifiedTemplateFieldUsers = array_merge( $notifiedTemplateFieldUsers, $fieldValueAllPagesUserArray );

				foreach ( $fieldValueAllPagesUserArray as $fieldValueAllPagesUser ) {
					self::templateFieldValueNotify( $title, 'edit-notify-template-value', $fieldValueAllPagesUser, $changedFieldName,
						$changedFieldValue, $template, $existingField[$changedFieldName], 'all pages' );
				}
			}

			/** Notify users for change in template field in namespace */
			if ( $templateNamespace ) {
				foreach ( $changedFields as $changedFieldName => $changedFieldValue ) {
					foreach ( $wgEditNotifyAlerts as $fieldNamespaceAlert ) {
						$handleTemplateFieldNamespaceAlert = false;

						// Checking if the 'action' is string or array of string
						if ( is_array( $fieldNamespaceAlert['action'] ) ) {
							if ( in_array( 'edit', $fieldNamespaceAlert['action'] ) ) {
								$handleTemplateFieldNamespaceAlert = true;
							}
						} else {
							if ( $fieldNamespaceAlert['action'] == 'edit' ) {
								$handleTemplateFieldNamespaceAlert = true;
							}
						}
						/** check for template, template field and template value */
						if ( $handleTemplateFieldNamespaceAlert ) {
							$handleNamespaceNotification = false;

							if ( array_key_exists( 'templateFieldValue', $fieldNamespaceAlert ) == false &&
								array_key_exists( 'template', $fieldNamespaceAlert ) &&
								array_key_exists( 'templateField', $fieldNamespaceAlert ) &&
								$fieldNamespaceAlert['template'] == $template &&
								$fieldNamespaceAlert['templateField'] == $changedFieldName
							) {
								$handleNamespaceNotification = true;
							}

							/** Check for the namespace and get users from the array */
							if ( $handleNamespaceNotification &&
								array_key_exists( 'namespace', $fieldNamespaceAlert )
							) {
								if ( is_array( $fieldNamespaceAlert['namespace'] ) ) {
									if ( in_array( $templateNamespace, $fieldNamespaceAlert['namespace'] ) ) {
										foreach ( $fieldNamespaceAlert['users'] as $fieldNamespaceUsername ) {
											$fieldNamespaceUserArray[] = $fieldNamespaceUsername;
										}
									}
								} else {
									if ( $fieldNamespaceAlert['namespace'] == $templateNamespace ) {
										foreach ( $fieldNamespaceAlert['users'] as $fieldNamespaceUsername ) {
											$fieldNamespaceUserArray[] = $fieldNamespaceUsername;
										}
									}
								}
							}
						}
					}
					$fieldNamespaceUserArray = array_unique( array_diff( $fieldNamespaceUserArray, $notifiedTemplateFieldUsers ) );

					$notifiedTemplateFieldUsers = array_merge( $notifiedTemplateFieldUsers, $fieldNamespaceUserArray );

					foreach ( $fieldNamespaceUserArray as $fieldNamespaceUser ) {
						self::templateFieldNotify( $title, 'edit-notify-template-namespace', $fieldNamespaceUser, $changedFieldName,
							$changedFieldValue, $template, $existingField[$changedFieldName], $templateNamespace );
					}
				}
			}

			/** Notify users for change in template field in category */
			foreach ( $templateCategories as $fieldValueCategory => $fieldValuePage ) {
				foreach ( $changedFields as $changedFieldName => $changedFieldValue ) {
					$handleTemplateFieldCategoryAlert = false;

					foreach ( $wgEditNotifyAlerts as $fieldCategoryAlert ) {
						if ( is_array( $fieldCategoryAlert['action'] ) ) {
							if ( in_array( 'edit', $fieldCategoryAlert['action'] ) ) {
								$handleTemplateFieldCategoryAlert = true;
							}
						} else {
							if ( $fieldCategoryAlert['action'] == 'edit' ) {
								$handleTemplateFieldCategoryAlert = true;
							}
						}

						if ( $handleTemplateFieldCategoryAlert ) {
							$handleCategoryNotification = false;

							if ( array_key_exists( 'templateFieldValue', $fieldCategoryAlert ) == false &&
								array_key_exists( 'template', $fieldCategoryAlert ) &&
								array_key_exists( 'templateField', $fieldCategoryAlert ) &&
								$fieldCategoryAlert['template'] == $template &&
								$fieldCategoryAlert['templateField'] == $changedFieldName
							) {
								$handleCategoryNotification = true;
							}

							if ( $handleCategoryNotification &&
								array_key_exists( 'category', $fieldCategoryAlert )
							) {
								if ( is_array( $fieldCategoryAlert['category'] ) ) {
									if ( in_array( $fieldValueCategory, $fieldCategoryAlert['category'] ) ) {
										foreach ( $fieldCategoryAlert['users'] as $fieldCategoryUsername ) {
											$fieldCategoryUserArray[] = $fieldCategoryUsername;
										}
									}
								} else {
									if ( $fieldCategoryAlert['category'] == $fieldValueCategory ) {
										foreach ( $fieldCategoryAlert['users'] as $fieldCategoryUsername ) {
											$fieldCategoryUserArray[] = $fieldCategoryUsername;
										}
									}
								}
							}
						}
					}

					$fieldCategoryUserArray = array_unique( array_diff( $fieldCategoryUserArray, $notifiedTemplateFieldUsers ) );

					/*contains the notified users of change in template field to specific template value in namespace and category*/
					$notifiedTemplateFieldUsers = array_merge( $notifiedTemplateFieldUsers, $fieldCategoryUserArray );

					foreach ( $fieldCategoryUserArray as $fieldCategoryUser ) {
						self::templateFieldNotify( $title, 'edit-notify-template-category', $fieldCategoryUser,
							$changedFieldName, $changedFieldValue, $template, $existingField[$changedFieldName], $fieldValueCategory );
					}
					unset( $fieldValueCategoryUserArray );
				}
			}

			/** Notify the users signed up for change in template field in all pages */
			foreach ( $changedFields as $changedFieldName => $changedFieldValue ) {
				foreach ( $wgEditNotifyAlerts as $fieldAllPagesAlert ) {
					$handleTemplateFieldAllPagesAlert = false;

					if ( is_array( $fieldAllPagesAlert['action'] ) ) {
						if ( in_array( 'edit', $fieldAllPagesAlert['action'] ) ) {
							$handleTemplateFieldAllPagesAlert = true;
						}
					} else {
						if ( $fieldAllPagesAlert['action'] == 'edit' ) {
							$handleTemplateFieldAllPagesAlert = true;
						}
					}
					if ( $handleTemplateFieldAllPagesAlert ) {
						$handleAllPagesNotification = false;

						if ( array_key_exists( 'templateFieldValue', $fieldAllPagesAlert ) == false &&
							array_key_exists( 'template', $fieldAllPagesAlert ) &&
							array_key_exists( 'templateField', $fieldAllPagesAlert ) &&
							$fieldAllPagesAlert['template'] == $template &&
							$fieldAllPagesAlert['templateField'] == $changedFieldName
						) {
							$handleAllPagesNotification = true;
						}

						if ( $handleAllPagesNotification &&
							array_key_exists( 'namespace', $fieldAllPagesAlert ) == false &&
							array_key_exists( 'category', $fieldAllPagesAlert ) == false
						) {
							foreach ( $fieldAllPagesAlert['users'] as $fieldAllPagesUsername ) {
								$fieldAllPagesUserArray[] = $fieldAllPagesUsername;
							}
						}
					}
				}
				$fieldAllPagesUserArray = array_unique( array_diff( $fieldAllPagesUserArray, $notifiedTemplateFieldUsers ) );

				$notifiedTemplateFieldUsers = array_merge( $notifiedTemplateFieldUsers, $fieldAllPagesUserArray );

				foreach ( $fieldAllPagesUserArray as $fieldAllPagesUser ) {
					self::templateFieldNotify( $title, 'edit-notify-template', $fieldAllPagesUser, $changedFieldName,
						$changedFieldValue, $template, $existingField[$changedFieldName], 'all pages' );
				}
			}
			return true;
		}

		// essentially the "else" block, since the "if" returns true at the end
		/** Notification for edit in non template pages */

		$handleNamespaceAlert = false;
		$handleNamespace = false;
		$namespace = $wikiPage->getTitle()->getNsText();
		$categories = [];

		$titleId = $title->getArticleId();
		$dbr = wfGetDB( DB_REPLICA );
		$categorylinks = $dbr->tableName( 'categorylinks' );

		$sql = "SELECT * FROM $categorylinks" . " WHERE cl_from='$titleId'" . " AND cl_from <> '0'" . " ORDER BY cl_sortkey";

		$res = $dbr->query( $sql );

		if ( $dbr->numRows( $res ) > 0 ) {
			foreach ( $res as $row ) {
				$categories[$row->cl_to] = $title->getFullText();
			}
			$dbr->freeResult( $res );
		} else {
			$categories = [];
		}

		$categoryUserArray = $namespaceUserArray = $notifiedUsers = $allPagesUserArray = [];

		if ( $namespace ) {
			foreach ( $wgEditNotifyAlerts as $namespaceAlert ) {
				$handleNamespaceAlert = false;

				if ( is_array( $namespaceAlert['action'] ) ) {
					if ( in_array( 'edit', $namespaceAlert['action'] ) ) {
						$handleNamespaceAlert = true;
					}
				} else {
					if ( $namespaceAlert['action'] == 'edit' ) {
						$handleNamespaceAlert = true;
					}
				}
				if ( $handleNamespaceAlert ) {
					$handleNamespace = false;

					if ( ( array_key_exists( 'template', $namespaceAlert ) && array_key_exists( 'templateField', $namespaceAlert ) ) == false ) {
						$handleNamespace = true;
					}
					if ( $handleNamespace &&
						array_key_exists( 'namespace', $namespaceAlert )
					) {
						if ( is_array( $namespaceAlert['namespace'] ) ) {
							if ( in_array( $namespace, $namespaceAlert['namespace'] ) ) {
								foreach ( $namespaceAlert['users'] as $namespaceUsername ) {
									$namespaceUserArray[] = $namespaceUsername;
								}
							}
						} else {
							if ( $namespaceAlert['namespace'] == $namespace ) {
								foreach ( $namespaceAlert['users'] as $namespaceUsername ) {
									$namespaceUserArray[] = $namespaceUsername;
								}
							}
						}
					}
				}
			}
			$namespaceUserArray = array_unique( $namespaceUserArray );
			$notifiedUsers = array_merge( $notifiedUsers, $namespaceUserArray );

			foreach ( $namespaceUserArray as $namespaceUser ) {
				self::pageEditNotify( $title, 'edit-notify-namespace', $namespaceUser, $namespace );
			}
		}

		foreach ( $categories as $category ) {
			foreach ( $wgEditNotifyAlerts as $categoryAlert ) {
				$handleCategoryAlert = false;

				if ( is_array( $categoryAlert['action'] ) ) {
					if ( in_array( 'edit', $categoryAlert['action'] ) ) {
						$handleCategoryAlert = true;
					}
				} else {
					if ( $categoryAlert['action'] == 'edit' ) {
						$handleCategoryAlert = true;
					}
				}

				if ( $handleCategoryAlert ) {
					$handleCategory = false;

					if ( !array_key_exists( 'template', $categoryAlert ) ||
						!array_key_exists( 'templateField', $categoryAlert )
					) {
						$handleCategory = true;
					}

					if ( $handleCategory &&
						array_key_exists( 'category', $categoryAlert )
					) {
						if ( is_array( $categoryAlert['category'] ) ) {
							if ( in_array( $category, $categoryAlert['category'] ) ) {
								foreach ( $categoryAlert['users'] as $categoryUsername ) {
									$categoryUserArray[] = $categoryUsername;
								}
							}
						} else {
							if ( $categoryAlert['category'] == $category ) {
								foreach ( $categoryAlert['users'] as $categoryUsername ) {
									$categoryUserArray[] = $categoryUsername;
								}
							}
						}
					}
				}
			}

			$categoryUserArray = array_unique( array_diff( $categoryUserArray, $notifiedUsers ) );

			// store the notified users of change in template field to specific template value
			$notifiedUsers = array_merge( $notifiedUsers, $categoryUserArray );

			foreach ( $categoryUserArray as $categoryUser ) {
				self::pageEditNotify( $title, 'edit-notify-category', $categoryUser, $category );
			}
			$categoryUserArray = [];
		}

		/**
		 * Notify user for change in all pages excluding template pages
		 * @var  $allPagesAlert
		 */

		foreach ( $wgEditNotifyAlerts as $allPagesAlert ) {
			$handleAllPagesAlert = false;

			/** Checking if the 'action' is string or array of string */
			if ( is_array( $allPagesAlert['action'] ) ) {
				if ( in_array( 'edit', $allPagesAlert['action'] ) ) {
					$handleAllPagesAlert = true;
				}
			} else {
				if ( $allPagesAlert['action'] == 'edit' ) {
					$handleAllPagesAlert = true;
				}
			}
			/** Check for template, template field and template value */
			if ( $handleAllPagesAlert ) {
				$handleAllPages = false;

				if ( ( array_key_exists( 'template', $allPagesAlert ) && array_key_exists( 'templateField', $allPagesAlert ) ) == false ) {
					$handleAllPages = true;
				}

				// Check for the namespace and get users from the array
				if ( $handleAllPages &&
					array_key_exists( 'namespace', $allPagesAlert ) == false &&
					array_key_exists( 'category', $allPagesAlert ) == false
				) {
					foreach ( $allPagesAlert['users'] as $allPagesUsername ) {
						$allPagesUserArray[] = $allPagesUsername;
					}
				}
			}
		}
		$allPagesUserArray = array_unique( array_diff( $allPagesUserArray, $notifiedUsers ) );

		$notifiedUsers = array_merge( $notifiedUsers, $allPagesUserArray );
		if ( empty( $allPagesUserArray ) == false ) {
			foreach ( $allPagesUserArray as $allPagesUser ) {
				self::pageEditNotify( $title, 'edit-notify', $allPagesUser, 'all pages' );
			}
		}

		return true;
	}

	public static function onPageSaveComplete( WikiPage $wikiPage ) {
		global $wgEditNotifyAlerts;
		$title = $wikiPage->getTitle();

		foreach ( $wgEditNotifyAlerts as $pageCreateAlert ) {
			$handlePageCreateAlert = false;

			/** Checking if the 'action' is string or array of string */
			if ( is_array( $pageCreateAlert['action'] ) ) {
				if ( in_array( 'create', $pageCreateAlert['action'] ) ) {
					$handlePageCreateAlert = true;
				}
			} else {
				if ( $pageCreateAlert['action'] == 'create' ) {
					$handlePageCreateAlert = true;
				}
			}

			if ( $handlePageCreateAlert ) {
				foreach ( $pageCreateAlert['users'] as $pageCreateUser ) {
					self::pageCreateNotify( $title, 'edit-notify-page-create', $pageCreateUser );
				}
			}
		}
	}

	/**
	 * @param $pageTitle
	 * @param $pageType
	 * @param $user
	 * @return bool
	 */
	public static function pageCreateNotify( $pageTitle, $pageType, $user ) {
		EchoEvent::create( [
			'type' => $pageType,
			'extra' => [
				'title' => $pageTitle,
				'user-id' => User::newFromName( $user )->getId(),
			],
			'title' => $pageTitle
		] );
		return true;
	}

	/**
	 * @param $pageTitle
	 * @param $pageType
	 * @param $user
	 * @param $change
	 * @return bool
	 */
	public static function pageEditNotify( $pageTitle, $pageType, $user, $change ) {
		EchoEvent::create( [
			'type' => $pageType,
			'extra' => [
				'title' => $pageTitle,
				'user-id' => User::newFromName( $user )->getId(),
				'change' => $change
			],
			'title' => $pageTitle
		] );
		return true;
	}

	/**
	 * @param $pageTitle
	 * @param $pageType
	 * @param $user
	 * @param $templateFieldName
	 * @param $existingFieldValue
	 * @param $template
	 * @param $newFieldValue
	 * @param $change
	 * @return bool
	 */
	public static function templateFieldNotify(
		$pageTitle,
		$pageType,
		$user,
		$templateFieldName,
		$existingFieldValue,
		$template,
		$newFieldValue,
		$change
	) {
		EchoEvent::create( [
			'type' => $pageType,
			'extra' => [
				'title' => $pageTitle,
				'user-id' => User::newFromName( $user )->getId(),
				'field-name' => $templateFieldName,
				'new-field-value' => $existingFieldValue,
				'existing-field-value' => $newFieldValue,
				'template' => $template,
				'change' => $change
			],
			'title' => $pageTitle
		] );
		return true;
	}

	/**
	 * @param $pageTitle
	 * @param $pageType
	 * @param $user
	 * @param $templateFieldName
	 * @param $existingFieldValue
	 * @param $template
	 * @param $newFieldValue
	 * @param $change
	 * @return bool
	 */
	public static function templateFieldValueNotify(
		$pageTitle,
		$pageType,
		$user,
		$templateFieldName,
		$existingFieldValue,
		$template,
		$newFieldValue,
		$change
	) {
		EchoEvent::create( [
			'type' => $pageType,
			'extra' => [
				'title' => $pageTitle,
				'user-id' => User::newFromName( $user )->getId(),
				'field-name' => $templateFieldName,
				'new-field-value' => $existingFieldValue,
				'existing-field-value' => $newFieldValue,
				'template' => $template,
				'change' => $change
			],
			'title' => $pageTitle
		] );
		return true;
	}
}
