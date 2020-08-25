<?php
$visitor_name = $_POST['name'];
$visitor_email = $_POST['email'];
$visitor_message = $_POST['message'];
$designation_type = $_POST['designation'];

$email_from = $visitor_email;
$email_subject = "New Visitor";
$email_body = "Visitor Name : $visitor_name.\n".
              "Visitor Email : $visitor_email.\n".
              "Hiring for : $designation_type.\n".
              "Visitor Message : $visitor_message.\n".

$email_to = $visitor_email;

$headers = "From: $email_from \r\n";

$headers .= "Reply-To: $visitor_email \r\n";

$email_to = 'yuvarajkamald@gmail.com';

mail($email_to, $email_subject, $email_body, $headers);

header("Location: contact.html");
?>