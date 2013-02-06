<?php
$subject = htmlspecialchars($_POST['subject']);
$suggestion = htmlspecialchars($_POST['suggestion']);
$name = htmlspecialchars($_POST['name']);
$email = htmlspecialchars($_POST['email']);
$message = 'Name: ' . $name . "<br />";
$message .= 'Email: ' . $email . "<br />";
$message .= 'Subject: ' . $subject . "<br />";
$message .= 'Suggestion: ' . $suggestion . "<br />";
$message = htmlspecialchars($message);

require_once 'class.phpmailer.php';
$mail = new PHPMailer(); // defaults to using php "mail()"
$mail->SetFrom('info@magentostudyguide.com', 'magentostudyguide.com form');
$mail->AddReplyTo("info@magestudyguide.com","magentostudyguide.com form");
$address = "info@magentostudyguide.com";
$mail->AddAddress($address, "John Doe");
$mail->Subject    = "Suggestion from the website";
$mail->MsgHTML($message);
if(!$mail->Send()) {
//  echo "Mailer Error: " . $mail->ErrorInfo;
//  echo 'Not sent: <pre>'.print_r(error_get_last(), true).'</pre>';
  echo 'There was an error submitting the form, please send us the information to: info@magestudyguide.com';
} else {
  echo 'Thank you for sending the suggestion!';
}
