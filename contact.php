<?php

if (isset($_POST['submit'])) {
	$fullname = $_POST['fullname'];
	$email = $_POST['email'];
	$message = $_POST['message'];

	$mail_to = "info@gungoravukatlik.com";
	$headers = "Gonderen email: ".email;
	$subject = "Ad Soyad: ".$name;

	mail($mail_to, $subject, $message, $headers);
	header("Location: contact.html?sent")
}