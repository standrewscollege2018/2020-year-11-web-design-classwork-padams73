<?php
for ($x = 0; $x <= 10; $x++) {
  $to_email = "ead4432@stacmail.net";
  $subject = "Simple Email Test via PHP";
  $body = "Hi,Ethan This is test email send by PHP Script. Sorry but you are my tester/victim";
  $headers = "From: padams.webdesign@gmail.com";
  mail($to_email, $subject, $body, $headers);
  // if (mail($to_email, $subject, $body, $headers)) {
  //     echo "Email successfully sent to $to_email...";
  // } else {
  //     echo "Email sending failed...";
  // }
}
?>
