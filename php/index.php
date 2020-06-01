<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
      // echo writes content to the HTML
      echo "<h1>Hello world</h1>";

      // all variables start with a $
      $name = "Bob";
      echo "Hello $name";
     ?>
     <!-- action is where the form redirects us -->
     <form action="hello.php" method="post">
       <input type="text" name="firstname" placeholder="Enter your name">
       <button type="submit" name="button">Click me!</button>
     </form>
  </body>
</html>
