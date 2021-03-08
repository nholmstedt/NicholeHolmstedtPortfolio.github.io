<?php

	$name = $_POST['name'];
	$subject = $_POST['subject'];
	$mail_From = $_POST['mail'];
	$message = $_POST['message'];

	$email_from = 'n.holmstedt@outlook.com';
	$email_subject = "Portfolio Inquiry"
	$email_body = "Name: $name.\n".
					"User Email: $email.\n".
					"Subject: $subject.\n".
					"User Message: $message.\n".;

	$to = "n.holmstedt@outlook.com";
	$headers = "From: .$mailFrom; \r\n";
	$headers .= "Reply-To: $email \r\n";
	

	mail($mailTo, $subject, $emial, $text, $headers);
	header("Location: contact.html");

?>