<?php
$name = $_POST['name'];
$visitor_email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];

$email_form = 'info@yourwebsite.com';

$email_subject = 'New form submission';
 
$email_body = "user name : $name.\n".
"user email : $visitor_email.\n" .   
"subject : $subject.\n" .
"User message : $message.\n";
  
$to = 'ybousmina552@gmail.com';
$headers = "from : $email_from \r\n";
$headers .= "reply-to : $visitor_email \r\n";

mail($to,$email_subject,$email_body,$headers);
header("location: contact.html")
?>