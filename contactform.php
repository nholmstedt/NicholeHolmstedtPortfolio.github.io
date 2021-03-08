<?php

if (isset($_POST['submit'])) {
	$name = $_POST['name'];
	$subject = $_POST['subject'];
	$mailFrom = $_POST['mail'];
	$message = $_POST['message'];

	$mailTo = "n.holmstedt@outlook.com";
	$headers = "From: ".$mailFrom;
	$txt = "You have recieved an e-mail from ".$name.".\n\n".$message;

	mail($mailTo, $subject, $text, $headers);
	header("Location: index.php?mailsend");
}

