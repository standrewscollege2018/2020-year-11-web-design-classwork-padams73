<?php
  // checking to see if $_POST has content


  // isset() checks to see if what is in the brackets has been set

  // if firstname doesn't exist, it returns true
  if(!isset($_POST['firstname'])) {
    // to redirect a browser to another page, use header()

    header("Location: https://www.youtube.com/watch?v=7-NOZU2iPA8");
  }



 ?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
      // get the information out of the $_POST array
      $firstname = $_POST['firstname'];


    if ($firstname == "Rumpelstiltskin") {
        // code to run if condition is true
        echo "Congratulations, you guessed right";
      } else if ($firstname == "") {
        echo "Please enter something!";
      } else {
        // code to run if condition is false
        echo "Sorry, that's wrong";
      }



     ?>
  </body>
</html>
