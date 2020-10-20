<?php
  $name = $_POST['name'];
  $communtication_method = $_POST['email/phone'];
  $message = $_POST['message'];

	$email_from = 'easyfithealth@gmail.com';
	$email_subject = "You Have a New Client!";
    $email_body = "$name accessed your EasyFit profile and left the following message:\n$message.\n\n
    please get in touch at $email"

    mail(cesar.godoy59@gmail.com,$email_subject,$email_body,$email_from)
?>