<?php

$wgEditNotify = array(
    'CreatePage'=>array(
        'usergroup'=>array('userid1','userid2'),
        'userlist'=>array('userid5','userid6'),
        'nonuser'=>array('email-id1','email-id12')
    ),
    'edit-page'=>array(
        'all-pages'=>array(
                'usergroup'=>array('userid1','userid2'),
                'userlist'=>array('userid5','userid6'),
                'nonuser'=>array('email-id1','email-id12')
            ),

        'namespaces'=>array(
	        'User'=>array(                  //user namespace in User:tosfos
		    'usergroup'=>array('userid1','userid2'),
		    'userlist'=>array('userid5','userid6'),
		    'nonuser'=>array('email-id1','email-id12')
	        ),
		'namespace2'=>array(
		    'usergroup'=>array('userid1','userid2'),
		    'userlist'=>array('userid5','userid6'),
		    'nonuser'=>array('email-id1','email-id12')
		)
        ),

        'category'=>array(
	    'Help'=>array(                         //no category I guess
	        'usergroup'=>array('userid1','userid2'),
	        'userlist'=>array('userid5','userid6'),
	        'nonuser'=>array('email-id1','email-id12')
	    ),
	    'category2'=>array(
	        'usergroup'=>array('userid1','userid2'),
	        'userlist'=>array('userid5','userid6'),
	        'nonuser'=>array('email-id1','email-id12')
	    ),
        ),

        'pagelist'=>array(
            'User:Tosfos'=>array(               //page title
	        'page-edit'=> array(             //non template edit
	            'usergroup'=>array('userid1','userid2'),
	            'userlist'=>array('userid5','userid6'),
	            'nonuser'=>array('email-id1','email-id12')
	        ),
	        'watchedtemplatefield' => array(
	            'Template:User info' => array(        //template
	                'full name'=>array(                //field name
	                    'usergroup'=>array('userid1','userid2'),
	                    'userlist'=>array('userid5','userid6'),
	                    'nonuser'=>array('email-id1','email-id12')
	                ),
	                'anotherfieldname'=>array(
		            'usergroup'=>array('userid1','userid2'),
		            'userlist'=>array('userid5','userid6'),
		            'nonuser'=>array('email-id1','email-id12')
	                ),
	            ),
	            'AnotherTemplateName' => array(             //no other templates
		        'fieldname1'=>array(
		            'usergroup'=>array('userid1','userid2'),
		            'userlist'=>array('userid5','userid6'),
		            'nonuser'=>array('email-id1','email-id12')
		        ),
		        'fieldname2'=>array(
		            'usergroup'=>array('userid1','userid2'),
		            'userlist'=>array('userid5','userid6'),
		            'nonuser'=>array('email-id1','email-id12')
		        )
	            )
	        ),
                'watchedtemplatefieldvalue' => array(
	                'Template:User info'=>array(                    //template
		                'full name'=>array(                     //template field name
			                'Ike Hecht'=>array(                    //template field value
			                    'usergroup'=>array('userid1','userid2'),
			                    'userlist'=>array('userid5','userid6'),
			                    'nonuser'=>array('email-id1','email-id12')
			                ),
		                        'fieldvalue2'=>array(
		                            'usergroup'=>array('userid1','userid2'),
		                            'userlist'=>array('userid5','userid6'),
		                            'nonuser'=>array('email-id1','email-id12')
		                        )
		                    ),
				'job title'=>array(                             //another template field name
				        'Consultant'=>array(                    //another template field value
				            'usergroup'=>array('userid1','userid2'),
				            'userlist'=>array('userid5','userid6'),
				            'nonuser'=>array('email-id1','email-id12')
					),
					'fieldvalue2'=>array(
					    'usergroup'=>array('userid1','userid2'),
					    'userlist'=>array('userid5','userid6'),
					    'nonuser'=>array('email-id1','email-id12')
					)
				)
	                ),
			'watchedfields2'=>array(                                //no other template
				'fieldname1'=>array(
				    'fieldvalue1'=>array(
				        'usergroup'=>array('userid1','userid2'),
				        'userlist'=>array('userid5','userid6'),
				        'nonuser'=>array('email-id1','email-id12')
				    ),
				    'fieldvalue2'=>array(
				        'usergroup'=>array('userid1','userid2'),
				        'userlist'=>array('userid5','userid6'),
				        'nonuser'=>array('email-id1','email-id12')
				    )
				),
				'fieldname2'=>array(
				    'fieldvalue1'=>array(
				        'usergroup'=>array('userid1','userid2'),
				        'userlist'=>array('userid5','userid6'),
				        'nonuser'=>array('email-id1','email-id12')
				    ),
				    'fieldvalue2'=>array(
				        'usergroup'=>array('userid1','userid2'),
				        'userlist'=>array('userid5','userid6'),
				        'nonuser'=>array('email-id1','email-id12')
				    )
				)

			)
                )
            ),
            'page2'=>array(
	        'watchedusers'=> array(
	            'usergroup'=>array('userid1','userid2'),
	            'userlist'=>array('userid5','userid6'),
	            'nonuser'=>array('email-id1','email-id12')
	        ),
	        'watchedtemplatefield' => array(
	            'watchedtemplatefield1' => array(
		        'field1'=>array(
		            'usergroup'=>array('userid1','userid2'),
		            'userlist'=>array('userid5','userid6'),
		            'nonuser'=>array('email-id1','email-id12')
		        ),
		        'field2'=>array(
		            'usergroup'=>array('userid1','userid2'),
		            'userlist'=>array('userid5','userid6'),
		            'nonuser'=>array('email-id1','email-id12')
		        ),
	            ),
	            'watchedtemplatefield2' => array(
		        'field1'=>array(
		            'usergroup'=>array('userid1','userid2'),
		            'userlist'=>array('userid5','userid6'),
		            'nonuser'=>array('email-id1','email-id12')
		        ),
		        'field2'=>array(
		            'usergroup'=>array('userid1','userid2'),
		            'userlist'=>array('userid5','userid6'),
		            'nonuser'=>array('email-id1','email-id12')
		        )
	            )
	        ),
	        'watchedtemplatefieldvalue' => array(
	            'watchedfields1'=>array(
		        'fieldname1'=>array(
		            'fieldvalue1'=>array(
			        'usergroup'=>array('userid1','userid2'),
			        'userlist'=>array('userid5','userid6'),
			        'nonuser'=>array('email-id1','email-id12')
		            ),
		            'fieldvalue2'=>array(
			        'usergroup'=>array('userid1','userid2'),
			        'userlist'=>array('userid5','userid6'),
			        'nonuser'=>array('email-id1','email-id12')
		            )
		        ),
		        'fieldname2'=>array(
		            'fieldvalue1'=>array(
			        'usergroup'=>array('userid1','userid2'),
			        'userlist'=>array('userid5','userid6'),
			        'nonuser'=>array('email-id1','email-id12')
		            ),
		            'fieldvalue2'=>array(
			        'usergroup'=>array('userid1','userid2'),
			        'userlist'=>array('userid5','userid6'),
			        'nonuser'=>array('email-id1','email-id12')
		            )
		        )
	            ),
	            'watchedfields2'=>array(
		        'fieldname1'=>array(
		            'fieldvalue1'=>array(
			        'usergroup'=>array('userid1','userid2'),
			        'userlist'=>array('userid5','userid6'),
			        'nonuser'=>array('email-id1','email-id12')
		            ),
		            'fieldvalue2'=>array(
			        'usergroup'=>array('userid1','userid2'),
			        'userlist'=>array('userid5','userid6'),
			        'nonuser'=>array('email-id1','email-id12')
		            )
		        ),
		        'fieldname2'=>array(
		            'fieldvalue1'=>array(
			        'usergroup'=>array('userid1','userid2'),
			        'userlist'=>array('userid5','userid6'),
			        'nonuser'=>array('email-id1','email-id12')
		            ),
		            'fieldvalue2'=>array(
			        'usergroup'=>array('userid1','userid2'),
			        'userlist'=>array('userid5','userid6'),
			        'nonuser'=>array('email-id1','email-id12')
		            )
		        )

	            )
	        )
            )
        )
    )
)
?>