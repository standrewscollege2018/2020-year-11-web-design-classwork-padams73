<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <!-- Connect to Font Awesome icon library -->
    <script src="https://kit.fontawesome.com/879e6e4a41.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="responsivenav.css">
    <title></title>
  </head>
  <body>

    <?php
      include("navbar.php");


      echo "<h1>Hello world</h1>";
      // Variables in php
      $name = "Mr Adams";
      echo "<p>Hello $name</p>";

      $number = 4;
      echo $number * 10;

      if ($number * 10 > 40) {
        echo "Bigger than 40";
      } else if ($number * 10 < 40) {
        echo "Smaller than 40";
      } else {
        echo "EQUAL to 40";
      }

      // Do while loops
      $counter = 10;
      do {
        if ($counter > 0) {
          echo "<p>$counter</p>";
          $counter = $counter - 1;
        } else {
          echo "<h1>Blast off!</h1>";
          $counter = $counter - 1;
        }

      } while ($counter >=0);

     ?>

  <a href="get.php?number=1">This is link number 1</a>
  <a href="get.php?number=2">This is link number 2</a>



  </body>
</html>
