<?php
// check if fields passed are empty
if(empty($_POST['name'])  		||
   empty($_POST['email']) 		||
   empty($_POST['message'])	||
   !filter_var($_POST['email'],FILTER_VALIDATE_EMAIL))
   {
	echo "No arguments Provided!";
	return false;
   }
	
$name = $_POST['name'];
$email_address = $_POST['email'];
$message = $_POST['message'];
	
// create email body and send it	
$to = 'hello@emrichdesigns.com'; // put your email
$email_subject = "Contact form submitted by:  $name";
$email_body = "Hej! Listen! You have received a new message from $name. \n\n".
				  "Their Email Address is: $email_address\n\n '$message' \n\n".
				  "Please reply within 24 hours. Tack!\n".
$headers = "From: hello@emrichdesigns.com\n";
$headers .= "Reply-To: $email_address";	
mail($to,$email_subject,$email_body,$headers);
return true;			
?>