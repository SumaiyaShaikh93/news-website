<?php
$name = $_POST['name'];
$visitor_email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];

$email_from = 'abcd@msjdkj.com'

$email_subjet = 'New From Submission'

$email_body = "User Name: $name.\n".
                "User Email: $visitor_email.\n".
                "Subject: $subject.\n".
                "User Message: $message.\n".;

$to = 'sumaiya22navgurukul.org';   

$headers = "From: $email_from \r\n"

$heasder .= "Replly-To: $visitor_email \r\n";

mail($to,$email_subject,$email_body,$headers);

header("location: contact.html")


?>
