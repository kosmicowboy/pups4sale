<?php

$mail->IsSMTP();
$mail->CharSet = 'UTF-8';
$mail->Server = 'smtp.sendgrid.net'
$mail->Port = '487'
$username='apiapi'
$password='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'

// using SendGrid's PHP Library
// https://github.com/sendgrid/sendgrid-php
require 'vendor/autoload.php';
$sendgrid = new SendGrid("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");
$email    = new SendGrid\Email();

$email->addTo("kylegraydev@gmail.com")
      ->setFrom("wildcard4pets@me.com")
      ->setSubject("Sending with SendGrid is Fun")
      ->setHtml("and easy to do anywhere, even with PHP");



// $EmailFrom = "test@gmail.com";
// $EmailTo = "kylegraydev@gmail.com";
// $Subject = "Nice & Simple Contact Form by CSS-Tricks";
$Name = Trim(stripslashes($_POST['Name']));
$Tel = Trim(stripslashes($_POST['Tel']));
$Email = Trim(stripslashes($_POST['Email']));
$Message = Trim(stripslashes($_POST['Message']));

// validation
$validationOK=true;
if (!$validationOK) {
  print "<meta http-equiv=\"refresh\" content=\"0;URL=error.htm\">";
  exit;
}

// prepare email body text
$Body = "";
$Body .= "Name: ";
$Body .= $Name;
$Body .= "\n";
$Body .= "Tel: ";
$Body .= $Tel;
$Body .= "\n";
$Body .= "Email: ";
$Body .= $Email;
$Body .= "\n";
$Body .= "Message: ";
$Body .= $Message;
$Body .= "\n";

$sendgrid->send($email);

// send email
// $success = mail($EmailTo, $Subject, $Body, "From: <$EmailFrom>");

// redirect to success page
if ($success){
  print "<meta http-equiv=\"refresh\" content=\"0;URL=contactthanks.php\">";
}
else{
  print "<meta http-equiv=\"refresh\" content=\"0;URL=error.htm\">";
}
?>
