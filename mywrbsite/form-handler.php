<?php
$name = $_POST['name'];
$visitor_email = $_POST['email'];
$school_year = $_POST['schoolyear'];
$message = $_POST['message'];

$email_from = 'info@yourwebsite.com';

$email_subject = 'new form submission'

$email_body = "User Name: $name.\n".
             "User Email: $visitor_email.\n".
             "schoolyear: $school_year.\n".
             "message: $message.\n";.

$to = 'schoolclubdiscovery@gmail.com';


$headers = "from: $email_from\r\n";

$headers .="reply-to: $visitor_email \r\n"


mail($to,$email_subject,email_body ,$headers);
header("location : contact.html");


?>
