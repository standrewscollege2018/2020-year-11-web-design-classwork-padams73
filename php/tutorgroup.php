<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="resultstyles.css">
  </head>
  <body>
    <?php
      include("navbar.php");
      include("dbconnect.php");
      if(!isset($_GET['tutorgroupID'])) {
        header("Location: search.php");
      } else {
        $tutorcode = $_GET['tutorcode'];
        $tutorgroupID = $_GET['tutorgroupID'];
        $tutor_sql = "SELECT * FROM student WHERE tutorgroupID=$tutorgroupID";
        $tutor_qry = mysqli_query($dbconnect, $tutor_sql);

        if(mysqli_num_rows($tutor_qry)==0) {
          echo "<p>No students in $tutorcode</p>";
        } else {
          $tutor_aa = mysqli_fetch_assoc($tutor_qry);
          echo "<h1>$tutorcode</h1>";
          ?>
          <div class="container">

          <?php
          do { ?>
            <div class="col">

            <?php
            $firstname = $tutor_aa['firstname'];
            $lastname = $tutor_aa['lastname'];
            $image = $tutor_aa['image'];
            echo "<p>$firstname $lastname</p>";
            echo "<img src='images/$image' class='image-resize'>";
            ?>
          </div>
            <?php
          } while ($tutor_aa = mysqli_fetch_assoc($tutor_qry));
        }
      }

     ?>
     </div>
  </body>
</html>
