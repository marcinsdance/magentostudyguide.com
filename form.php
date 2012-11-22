<?php
$subject = $_POST['subject'];
$suggestion = $_POST['suggestion'];
$name = $_POST['name'];
$email = $_POST['email'];
$address = "info@magentostudyguide.com";
$subject = "Suggestion from the website";$message = 'Name: ' . $name;
$message = 'Email: ' . $email;
$message = 'subject: ' . $subject;
$message = 'suggestion: ' . $suggestion;

mail($address,$subject,$message);
/*
require_once 'class.phpmailer.php';
$mail = new PHPMailer(); // defaults to using php "mail()"
$mail->SetFrom('info@magentostudyguide.com', 'First Last');
$mail->AddReplyTo("info@magentostudyguide.com","First Last");
$address = "info@magentostudyguide.com";
$mail->AddAddress($address, "John Doe");
$mail->Subject    = "Suggestion from the website";
$mail->MsgHTML($message);
if(!$mail->Send()) {
  echo "Mailer Error: " . $mail->ErrorInfo;
  echo 'Not sent: <pre>'.print_r(error_get_last(), true).'</pre>';
  //echo 'There was an error submitting the form, please send us the information to: info@magentostudyguide.com';
} else {
  echo 'Thank you for sending the suggestion!';
}
*/