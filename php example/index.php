<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php

      // We use echo to create HTML (print)
      echo("<h1>Hello world</h1>");

      // Variables always start with a $
      $name = "Mickey Mouse";
      // Variables can be inserted into strings, such as when we are echoing something
      echo("Hello $name");

      // if statements use () brackets for the condition and {} for the code to run
      if ($name == "Mickey Mouse") {
        echo("The name was Mickey Mouse");
      } else {
        echo("It isn't Mickey Mouse!");
      }

      // do {} while () loop
      $counter = 1;
      do {
        echo("<p>$counter</p>");
        $counter += 1;
      } while ($counter <= 10);

     ?>
  </body>
</html>
