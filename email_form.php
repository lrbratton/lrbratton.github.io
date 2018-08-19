<?php
	

	if(filter_var($email, FILTER_VALIDATE_EMAIL)) {
		$email = $_POST['email'];
	}
	
	$name = $_POST['name'];
	$ph_no = $_POST['ph_no'];
	$comment = $_POST['comment'];
	

	$email_subject = "Go Jo Webpage Email";
	$email_body = "Hi,\n\n You have received a new email from $name.\n".
					"Here is the message:\n $comment";

	$to = "l.bratton@hotmail.co.nz";
	$headers = "From: $email \r\n";
	$headers = "Reply-To: $email \r\n";
	mail($to,$email_subject,$email_body,$headers);
	header('Location: contact_success.html')
?>