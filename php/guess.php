<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="styles.css">
    <title></title>
  </head>
  <body>
    <div class="container">
      <form class="" action="check.php" method="post">
        <p>Guess a number between 1 and 100</p>
        <input required type="number" name="guess" class="input-guess" placeholder="0">
        <button type="submit" name="button" class="submit-button">Guess</button>
      </form>
      <!-- check response from the check page -->
      <?php
        // check if $_GET['reply'] is set
        if(isset($_GET['reply'])) {
          if($_GET['reply'] == "correct") {
            echo "<h1 class='celebrate'>That's right!!</h1>";
          }

        }

       ?>
    </div>

  </body>
</html>
