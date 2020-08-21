<?php 
include 'config.php';

$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];
$formcontent = $message;
$recipient = EMAIL_ADMIN;
$subject = "MPG Contact";
$mailheader = "From: $email \r\n";
mail($recipient, $subject, $formcontent, $mailheader) or die("Error send mail");
