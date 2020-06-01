<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
    // Check whether $_POST['username'] is set
    if (!isset($_POST['username'])) {
      header("Location: post.php");
    }

    $username = $_POST['username'];
    echo("Greetings $username");



     ?>
  </body>
</html>
