<?php

/**
 * Class used for validator
 * */

class erLhcoreClassChatValidator {

    /**
     * Custom form fields validation
     */
    public static function validateStartChat(& $inputForm, & $start_data_fields, & $chat, $additionalParams = array())
    {
        $validationFields = array();

        // Dynamic form field
        if ($inputForm->validate_start_chat == true) {
            if ( (isset($start_data_fields['name_visible_in_popup']) && $start_data_fields['name_visible_in_popup'] == true && !isset($additionalParams['offline'])) || (isset($additionalParams['offline']) && isset($start_data_fields['offline_name_visible_in_popup']) && $start_data_fields['offline_name_visible_in_popup'] == true) ) {
                $validationFields['Username'] =  new ezcInputFormDefinitionElement( ezcInputFormDefinitionElement::OPTIONAL, 'unsafe_raw' );
            }

            if ((isset($start_data_fields['email_visible_in_popup']) && $start_data_fields['email_visible_in_popup'] == true) || isset($additionalParams['offline'])) {
                $validationFields['Email'] =  new ezcInputFormDefinitionElement( ezcInputFormDefinitionElement::OPTIONAL, 'validate_email' );
            }

            if ((isset($start_data_fields['message_visible_in_popup']) && $start_data_fields['message_visible_in_popup'] == true && !isset($additionalParams['offline'])) || (isset($additionalParams['offline']) && isset($start_data_fields['offline_message_visible_in_popup']) && $start_data_fields['offline_message_visible_in_popup'] == true)) {
                $validationFields['Question'] =  new ezcInputFormDefinitionElement( ezcInputFormDefinitionElement::OPTIONAL, 'unsafe_raw' );
            }

            if ((isset($start_data_fields['phone_visible_in_popup']) && $start_data_fields['phone_visible_in_popup'] == true && !isset($additionalParams['offline'])) || (isset($additionalParams['offline']) && isset($start_data_fields['offline_phone_visible_in_popup']) && $start_data_fields['offline_phone_visible_in_popup'] == true)) {
                $validationFields['Phone'] =  new ezcInputFormDefinitionElement( ezcInputFormDefinitionElement::OPTIONAL, 'unsafe_raw' );
            }

            if ((isset($start_data_fields['tos_visible_in_popup']) && $start_data_fields['tos_visible_in_popup'] == true && !isset($additionalParams['offline'])) || (isset($additionalParams['offline']) && isset($start_data_fields['offline_tos_visible_in_popup']) && $start_data_fields['offline_tos_visible_in_popup'] == true)) {
                $validationFields['AcceptTOS'] =  new ezcInputFormDefinitionElement( ezcInputFormDefinitionElement::OPTIONAL, 'boolean' );
            }
            
            
        } else {
            if ((isset($start_data_fields['name_visible_in_page_widget']) && $start_data_fields['name_visible_in_page_widget'] == true && !isset($additionalParams['offline'])) || (isset($additionalParams['offline']) && isset($start_data_fields['offline_name_visible_in_page_widget']) && $start_data_fields['offline_name_visible_in_page_widget'] == true)) {
                $validationFields['Username'] =  new ezcInputFormDefinitionElement( ezcInputFormDefinitionElement::OPTIONAL, 'unsafe_raw' );
            }

            if ((isset($start_data_fields['email_visible_in_page_widget']) && $start_data_fields['email_visible_in_page_widget'] == true) || isset($additionalParams['offline'])) {
                $validationFields['Email'] =  new ezcInputFormDefinitionElement( ezcInputFormDefinitionElement::OPTIONAL, 'validate_email' );
            }

            if ( (isset($start_data_fields['message_visible_in_page_widget']) && $start_data_fields['message_visible_in_page_widget'] == true && !isset($additionalParams['offline'])) || (isset($additionalParams['offline']) && isset($start_data_fields['offline_message_visible_in_page_widget']) && $start_data_fields['offline_message_visible_in_page_widget'] == true)) {
                $validationFields['Question'] =  new ezcInputFormDefinitionElement( ezcInputFormDefinitionElement::OPTIONAL, 'unsafe_raw' );
            }

            if ((isset($start_data_fields['phone_visible_in_page_widget']) && $start_data_fields['phone_visible_in_page_widget'] == true && !isset($additionalParams['offline'])) || (isset($additionalParams['offline']) && isset($start_data_fields['offline_phone_visible_in_page_widget']) && $start_data_fields['offline_phone_visible_in_page_widget'] == true)) {
                $validationFields['Phone'] =  new ezcInputFormDefinitionElement( ezcInputFormDefinitionElement::OPTIONAL, 'unsafe_raw' );
            }     

            if ((isset($start_data_fields['tos_visible_in_page_widget']) && $start_data_fields['tos_visible_in_page_widget'] == true && !isset($additionalParams['offline'])) || (isset($additionalParams['offline']) && isset($start_data_fields['offline_tos_visible_in_page_widget']) && $start_data_fields['offline_tos_visible_in_page_widget'] == true)) {
            	$validationFields['AcceptTOS'] =  new ezcInputFormDefinitionElement( ezcInputFormDefinitionElement::OPTIONAL, 'boolean' );
            }            
            
        }

        $validationFields['DepartamentID'] = new ezcInputFormDefinitionElement(ezcInputFormDefinitionElement::OPTIONAL, 'int',array('min_range' => 1));
        $validationFields['DepartmentIDDefined'] = new ezcInputFormDefinitionElement(ezcInputFormDefinitionElement::OPTIONAL, 'int',array('min_range' => 1),FILTER_REQUIRE_ARRAY);
        $validationFields['operator'] = new ezcInputFormDefinitionElement(ezcInputFormDefinitionElement::OPTIONAL, 'int',array('min_range' => 1));
        $validationFields['user_timezone'] = new ezcInputFormDefinitionElement(ezcInputFormDefinitionElement::OPTIONAL, 'int');
        
        
        
        $validationFields['name_items'] = new ezcInputFormDefinitionElement(
        		ezcInputFormDefinitionElement::OPTIONAL, 'unsafe_raw',
        		null,
        		FILTER_REQUIRE_ARRAY
        );

        $validationFields['values_req'] = new ezcInputFormDefinitionElement(
        		ezcInputFormDefinitionElement::OPTIONAL, 'string',
        		null,
        		FILTER_REQUIRE_ARRAY
        );

        $validationFields['value_items'] = new ezcInputFormDefinitionElement(
        		ezcInputFormDefinitionElement::OPTIONAL, 'unsafe_raw',
        		null,
        		FILTER_REQUIRE_ARRAY
        );

        $validationFields['value_types'] = new ezcInputFormDefinitionElement(
        		ezcInputFormDefinitionElement::OPTIONAL, 'unsafe_raw',
        		null,
        		FILTER_REQUIRE_ARRAY
        );

        $validationFields['value_sizes'] = new ezcInputFormDefinitionElement(
        		ezcInputFormDefinitionElement::OPTIONAL, 'unsafe_raw',
        		null,
        		FILTER_REQUIRE_ARRAY
        );

        $validationFields['value_show'] = new ezcInputFormDefinitionElement(
        		ezcInputFormDefinitionElement::OPTIONAL, 'string',
        		null,
        		FILTER_REQUIRE_ARRAY
        );

        $validationFields['hattr'] = new ezcInputFormDefinitionElement(
        		ezcInputFormDefinitionElement::OPTIONAL, 'string',
        		null,
        		FILTER_REQUIRE_ARRAY
        );

        // Captcha stuff        
        if (erLhcoreClassModelChatConfig::fetch('session_captcha')->current_value == 1) {
        	// Start session if required only
        	$currentUser = erLhcoreClassUser::instance();
        	$hashCaptcha = isset($_SESSION[$_SERVER['REMOTE_ADDR']]['form']) ? $_SESSION[$_SERVER['REMOTE_ADDR']]['form'] : null;
    		$nameField = 'captcha_'.$hashCaptcha;    	
        	$validationFields[$nameField] = new ezcInputFormDefinitionElement( ezcInputFormDefinitionElement::OPTIONAL, 'string' );
        } else {        
	        $nameField = 'captcha_'.sha1(erLhcoreClassIPDetect::getIP().$_POST['tscaptcha'].erConfigClassLhConfig::getInstance()->getSetting( 'site', 'secrethash' ));
	        $validationFields[$nameField] = new ezcInputFormDefinitionElement( ezcInputFormDefinitionElement::OPTIONAL, 'string' );
        }

        $form = new ezcInputForm( INPUT_POST, $validationFields );
        $Errors = array();

        if (erLhcoreClassModelChatBlockedUser::getCount(array('filter' => array('ip' => erLhcoreClassIPDetect::getIP()))) > 0) {
            $Errors[] = erTranslationClassLhTranslation::getInstance()->getTranslation('chat/startchat','You do not have permission to chat! Please contact site owner.');
        }

        if (erLhcoreClassModelChatConfig::fetch('session_captcha')->current_value == 1) {
        	if ( !$form->hasValidData( $nameField ) || $form->$nameField == '' || $form->$nameField < time()-600 || $hashCaptcha != sha1($_SERVER['REMOTE_ADDR'].$form->$nameField.erConfigClassLhConfig::getInstance()->getSetting( 'site', 'secrethash' ))){
        		$Errors[] = erTranslationClassLhTranslation::getInstance()->getTranslation('chat/startchat','Invalid captcha code, please enable Javascript!');
        	}
        } else {
        	// Captcha validation
        	if ( !$form->hasValidData( $nameField ) || $form->$nameField == '' || $form->$nameField < time()-600 )
        	{
        		$Errors[] = erTranslationClassLhTranslation::getInstance()->getTranslation('chat/startchat','Invalid captcha code, please enable Javascript!');
        	}
        }
        

        if (isset($validationFields['Username'])) {

            if ( !$form->hasValidData( 'Username' ) || ($form->Username == '' && (($start_data_fields['name_require_option'] == 'required' && !isset($additionalParams['offline'])) || (isset($additionalParams['offline']) && isset($start_data_fields['offline_name_require_option']) && $start_data_fields['offline_name_require_option'] == 'required' )))  )
            {
                $Errors[] = erTranslationClassLhTranslation::getInstance()->getTranslation('chat/startchat','Please enter your name');
            } elseif ($form->hasValidData( 'Username' )) {
                $chat->nick = $inputForm->username = $form->Username;
            }

            if ($form->hasValidData( 'Username' ) && $form->Username != '' && strlen($form->Username) > 50)
            {
                $Errors[] = erTranslationClassLhTranslation::getInstance()->getTranslation('chat/startchat','Maximum 50 characters');
            }
        }

        if ( isset($validationFields['Email']) ) {
            if ( (!$form->hasValidData( 'Email' ) && $start_data_fields['email_require_option'] == 'required') || (!$form->hasValidData( 'Email' ) && isset($additionalParams['offline'])) ) {
                $Errors[] = erTranslationClassLhTranslation::getInstance()->getTranslation('chat/startchat','Please enter a valid email address');
            } elseif ( $form->hasValidData( 'Email' ) ) {
                $chat->email = $inputForm->email = $form->Email;
            } else {
                $chat->email = $inputForm->email = $_POST['Email'];
            }
        }

        // Validate question
        if (isset($validationFields['Question'])) {

            if ( !$form->hasValidData( 'Question' ) || (trim($form->Question) == '' && (($start_data_fields['message_require_option'] == 'required' && !isset($additionalParams['offline'])) || (isset($additionalParams['offline']) && isset($start_data_fields['offline_message_require_option']) && $start_data_fields['offline_message_require_option'] == 'required')))) {
                $Errors[] = erTranslationClassLhTranslation::getInstance()->getTranslation('chat/startchat','Please enter your message');
            } elseif ($form->hasValidData( 'Question' )) {
                $inputForm->question = trim($form->Question);
            }

            if ($form->hasValidData( 'Question' ) && trim($form->Question) != '' && strlen($form->Question) > (int)erLhcoreClassModelChatConfig::fetch('max_message_length')->current_value)
            {
                $Errors[] = erTranslationClassLhTranslation::getInstance()->getTranslation('chat/startchat','Maximum').' '.(int)erLhcoreClassModelChatConfig::fetch('max_message_length')->current_value.' '.erTranslationClassLhTranslation::getInstance()->getTranslation('chat/startchat','characters for a message');
            }
        }
       
        if (isset($validationFields['AcceptTOS'])) {
        	if ( !$form->hasValidData( 'AcceptTOS' ) || $form->AcceptTOS == false) {
        		$Errors[] = erTranslationClassLhTranslation::getInstance()->getTranslation('chat/startchat','You have to accept our Terms Of Service');
        	} else {
        		$inputForm->accept_tos = true;
        	}
        }

        
        // Validate phone
        if (isset($validationFields['Phone'])) {

            if ( !$form->hasValidData( 'Phone' ) || (($form->Phone == '' || mb_strlen($form->Phone) < erLhcoreClassModelChatConfig::fetch('min_phone_length')->current_value) && ( ($start_data_fields['phone_require_option'] == 'required' && !isset($additionalParams['offline'])) || (isset($additionalParams['offline']) && isset($start_data_fields['offline_phone_require_option']) && $start_data_fields['offline_phone_require_option'] == 'required')  ))) {
                $Errors[] = erTranslationClassLhTranslation::getInstance()->getTranslation('chat/startchat','Please enter your phone');
            } elseif ($form->hasValidData( 'Phone' )) {
                $chat->phone = $inputForm->phone = $form->Phone;
            }

            if ($form->hasValidData( 'Phone' ) && $form->Phone != '' && strlen($form->Phone) > 100)
            {
                $Errors[] = erTranslationClassLhTranslation::getInstance()->getTranslation('chat/startchat','Maximum 100 characters for phone');
            }
        }
        
        if ($form->hasValidData( 'operator' ) && erLhcoreClassModelUser::getUserCount(array('filter' => array('id' => $form->operator, 'disabled' => 0))) > 0) {
        	$inputForm->operator = $chat->user_id = $form->operator;
        }
        
        if ($form->hasValidData( 'user_timezone' )) {        	
        	$timezone_name = timezone_name_from_abbr(null, $form->user_timezone*3600, true);        	
        	if ($timezone_name !== false){
        		$chat->user_tz_identifier = $timezone_name;
        	} else {
        		$chat->user_tz_identifier = '';
        	}
        }
        
        if ($form->hasValidData( 'DepartmentIDDefined' )) {        	
        	$inputForm->departament_id_array = $form->DepartmentIDDefined;
        }
        
        if ($form->hasValidData( 'DepartamentID' ) && erLhcoreClassModelDepartament::getCount(array('filter' => array('id' => $form->DepartamentID,'disabled' => 0))) > 0) {
        	$chat->dep_id = $form->DepartamentID;
        } elseif ($chat->dep_id == 0 || erLhcoreClassModelDepartament::getCount(array('filter' => array('id' => $chat->dep_id,'disabled' => 0))) == 0) {
        	$departments = erLhcoreClassModelDepartament::getList(array('limit' => 1,'filter' => array('disabled' => 0)));
        	if (!empty($departments) ) {
	        	$department = array_shift($departments);
	        	$chat->dep_id = $department->id;
        	} else {
        		$Errors[] = erTranslationClassLhTranslation::getInstance()->getTranslation('chat/startchat','Could not determine a default department!');
        	}
        }

        // Set chat attributes for transfer workflow logic
        if ($chat->department !== false && $chat->department->department_transfer_id > 0) {
        	$chat->transfer_if_na = 1;
        	$chat->transfer_timeout_ts = time();
        	$chat->transfer_timeout_ac = $chat->department->transfer_timeout;
        }
        
        if ($chat->department !== false && $chat->department->inform_unread == 1) {
        	$chat->reinform_timeout = $chat->department->inform_unread_delay;        	
        }
        
        $inputForm->departament_id = $chat->dep_id;

        if ( $inputForm->priority !== false && is_numeric($inputForm->priority) ) {
        	$chat->priority = (int)$inputForm->priority;
        } else {
        	if ($chat->department !== false) {
        		$chat->priority = $chat->department->priority;
        	}
        }

        
        if ( $form->hasValidData( 'name_items' ) && !empty($form->name_items))
        {
        	$valuesArray = array();
        	if ( $form->hasValidData( 'value_items' ) && !empty($form->value_items))
        	{
        		$inputForm->value_items = $valuesArray = $form->value_items;
        	}
        	
        	if ( $form->hasValidData( 'values_req' ) && !empty($form->values_req))
        	{
        		$inputForm->values_req = $form->values_req;
        	}

        	if ( $form->hasValidData( 'value_types' ) && !empty($form->value_types))
        	{
        		$inputForm->value_types = $form->value_types;
        	}

        	if ( $form->hasValidData( 'value_sizes' ) && !empty($form->value_sizes))
        	{
        		$inputForm->value_sizes = $form->value_sizes;
        	}

        	if ( $form->hasValidData( 'value_show' ) && !empty($form->value_show))
        	{
        		$inputForm->value_show = $form->value_show;
        	}

        	if ( $form->hasValidData( 'hattr' ) && !empty($form->hattr))
        	{
        		$inputForm->hattr = $form->hattr;
        	}

        	$inputForm->name_items = $form->name_items;

        	$stringParts = array();
        	foreach ($form->name_items as $key => $name_item) {    
        		if (isset($inputForm->values_req[$key]) && $inputForm->values_req[$key] == 't' && ($inputForm->value_show[$key] == 'b' || $inputForm->value_show[$key] == (isset($additionalParams['offline']) ? 'off' : 'on')) && (!isset($valuesArray[$key]) || trim($valuesArray[$key]) == '')) {
        			$Errors[] = trim($name_item).' : '.erTranslationClassLhTranslation::getInstance()->getTranslation('chat/startchat','is required');
        		}
        		$stringParts[] = array('key' => $name_item,'value' => (isset($valuesArray[$key]) ? trim($valuesArray[$key]) : ''));
        	}

        	$chat->additional_data = json_encode($stringParts);
        }

        erLhcoreClassChatEventDispatcher::getInstance()->dispatch('chat.validate_start_chat',array('errors' => & $Errors, 'input_form' => & $inputForm, 'start_data_fields' => & $start_data_fields, 'chat' => & $chat,'additional_params' => & $additionalParams));
        
        return $Errors;
    }
    
    /**
     * If user was redirected to contact form and he changed some default attributes we change then in intial chat
     * */
    public static function updateInitialChatAttributes(erLhcoreClassModelChat & $prefillChat, erLhcoreClassModelChat $currentChat) {
    	$attributesPrefill = array(
    		'nick',
    		'email',
    		'phone'
    	);
    	
    	$attrChanged = false;
    	foreach ($attributesPrefill as $attr) {
    		if ($prefillChat->$attr == '' && $currentChat->$attr != '') {
    			$prefillChat->$attr = $currentChat->$attr;
    			$attrChanged = true;
    		}
    	}
    	
    	if ($attrChanged) {
    		$prefillChat->saveThis();
    	}
    }
}

?>