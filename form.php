<?php
$subject = htmlspecialchars($_POST['subject']);
$suggestion = htmlspecialchars($_POST['suggestion']);
$name = htmlspecialchars($_POST['name']);
$email = htmlspecialchars($_POST['email']);
$signature = htmlspecialchars($_POST['signature']);
$message = <<<EOT
 Name: {$name}
 Email: {$email}
 Subject: {$subject}
 Suggestion: {$suggestion}
 Signature: {$signature}
EOT;
$message = htmlspecialchars($message);
$subject = "Suggestion from the website";
$address = "changed-email@magentostudyguide.com";
if(!mail($address, $subject, $message)) {
  echo "<script>alert('There was an error submitting the form, please send us the information to: info@magestudyguide.com')</script>";
} else {
  echo "<script>alert('Thank you for sending the suggestion!')</script>";
}
