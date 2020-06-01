<?php
  // checking to see if user has placed a guess
  if(!isset($_POST['guess'])) {
    header("Location: guess.php");
  }
 ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="styles.css">
    <title></title>
  </head>
  <body>
    <div class="container">
      <?php
        // set number they are guessing
        $number = 32;
        // get number out of POST array and put into $guess variable
        $guess = $_POST['guess'];
        // check if it is right, too high or too low
        if ($guess == 32) {
          echo "<h1 class='celebrate'>That's right!</h1>";
        } else if ($guess < 0 or $guess > 100) {
          echo "<h1 class='wrong'>Enter a number from 1 to 100</h1>";
        } else if ($guess > $number) {
          echo "<h1 class='wrong'>Too high, guess again</h1>";
        } else {
          echo "<h1 class='wrong'>Too low, guess again</h1>";
        }

       ?>
    </div>

  </body>
</html>
