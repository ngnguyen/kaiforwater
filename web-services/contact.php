<?php
if (frm_filled($_POST)){
	$to      = 'ngnguyen@uw.edu';
	$subject = 'message from online portfolio';
	$message = 'Email: '.$_POST['email']."\r\n"
		.'Name: '.$_POST['name']."\r\n"
		.'Message: '.$_POST['msg']."\r\n";
	$headers = 'From: ngnguyen@kaiforwater.name' . "\r\n" .
		'Reply-To: '. $_POST['email'] . "\r\n" .
		'X-Mailer: PHP/' . phpversion();

	mail($to, $subject, $message, $headers);
}

// server-side validation 
function frm_filled ($ar){
	foreach ($ar as $key=>$value){
		if (!($ar[$key])) { return false; }
	}
	
	return true;
}


?>