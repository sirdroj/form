<?php
$name=$_POST['name'];
$visitor_email=$_POST['email'];
$message=$_POST['message'];

$email_form='sirdroj@gmail.com';

$email_subject="new form submission";

$email_body="User Name:$name.\n".
                 "User Email:$visitor_email.\n".
                     "User message:$message. \n";

$to ="droj.co@gmail.com";

$headers="Form:$email_form \r\n";

$headers .="Reply-To:$visitor_email \e\n";

mail($to,$email_subject,$email_body,$headers);

header("Location: index.html");
?>