<?php
// https://meetanshi.com/blog/send-mail-from-localhost-xampp-using-gmail/


for ($x = 0; $x <= 10; $x++) {
  $to_email = "pad@stac.school.nz";
  $subject = "Simple Email Test via PHP";
  $body = "Hi,Ethan This is test email send by PHP Script. Sorry but you are my tester/victim";
  $headers = "From: padams.webdesign@gmail.com";
  mail($to_email, $subject, $body, $headers);

}

?>
