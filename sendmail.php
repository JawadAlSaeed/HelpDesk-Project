<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

// Load Composer's autoloader
require 'vendor/autoload.php';


if(!isset($_POST['name']) && isset ($_POST['email']){

	$name = $_POST['name'];
	$email = $_POST['email'];
	$subject = $_POST['subject'];
	$body = $_POST['body'];

	require_once "PHPMailer/PHPMailer.php"
	require_once "PHPMailer/SMTP.php"
	require_once "PHPMailer/Exception.php"

	$mail = new PHPMailer();

	try {
    //Server settings
    $mail->isSMTP();                                            // Set mailer to use SMTP
    $mail->Host       = 'smtp.gmail.com';  // Specify main and backup SMTP servers
    $mail->SMTPAuth   = true;                                   // Enable SMTP authentication
    $mail->Username   = 'dragonx1x1x1@gmail.com';                     // SMTP username
    $mail->Password   = 'J35110266d';                               // SMTP password
    $mail->Port       = 465;                                    // TCP port to connect to
    $mail->SMTPSecure = "ssl";				         // Enable TLS encryption, 

    //Recipients
	$mail->isHTML(true);                                  // Set email format to HTML
    $mail->setFrom($email, $name);
    $mail->addAddress(address: "jawadalsaeed266@gmail.com");     // Add a recipient
    $mail->Subject = $subject;
    $mail->Body    = $body;

    if ($mail->send();)
    	$response = 'Message has been sent';
    else
    	$response = "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";

    exit(json_encode(array("response" => $response)));
}
