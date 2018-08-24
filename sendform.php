<?php

if ( $_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['fields']) ){

	$params = array();
	$response = array();
	$data = array();
	$error = array();
		
    parse_str($_POST['fields'], $params);
	
	foreach ( $params as $key => $value ) {
        $data[$key] = $value;
	}

	foreach ( $data as $key => $value ) {
        if ( ($value == '' ) ) {
            $error[$key] = '';
        }
	}
	
    if ( !empty($error) ) {
		
		$response['status'] = 'error';
		
		foreach ( $error as $key=>$val ) {
            $response[$key] = $val;
        }

	} else {

        require_once('class.phpmailer.php');

		$emailto = filter_var(stripslashes($data['send-to-email-text-field']), FILTER_VALIDATE_EMAIL);
		
		if(isset($emailto)){

			$email = new PHPMailer;
			$email->From = 'SERVER.TLD <noreply@server.tld>';
			$email->FromName = 'Name';
			$email->Subject = 'Subject';
			$email->Body = 'Agreement';
			$email->AddAttachment('agreement.pdf');
			$email->AddAddress($emailto);
			$email->isHTML(true);
			$email->send();
		}
        
		$response['status'] = 'success';       
		//$response['text'] = 'text';
    
	}
    
	die(json_encode($response));
	
} else {
	
	die('Error. Check form fields!');
	
}	

?>