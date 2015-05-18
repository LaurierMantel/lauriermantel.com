<?php
$email = $_GET['email'];
$message = $_GET['message'];
$name = $_GET['name'];

$subject = $name." sent you an email";
$header = "Reply by sending an email to ".$email;
if (mail("lauriermantel@gmail.com",$subject,$message,$header))
{
	echo "Thanks for your email.  I'll be in touch soon!";
}
else
{
	echo "The email failed for some reason. For now, you can double select the contact button to open a new email addressed to lauriermantel@gmail.com";
}


?>