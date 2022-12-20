<?php
$name = $_POST['name']
$visitor_email = $_POST['email']
$subject = $_POST['subject']
$message = $_POST['message']

$email_from = 'info@yourwebsite.com'

$email_subject = 'New Form Submission'

$email_body = "User Name: $name.\n".
                "User Email: $email.\n".
                "User Subject: $subject.\n".
                "User Message: $messgae.\n";

$to = 'crohit9354@gmail.com'

$headers = "From: $email_from \r\n";

$headers .="Reply-To:$visitor_email \r\n";

mail($to,$subject,$email_body,$headers);

header("Location: contact.html"):

?>