<?php
  // this page will run a query and display the result(s)

  // we include the dbconnect.php code
  include("dbconnect.php");

  // there are 3 steps to running a select query
  // 1. Set up the query in a variable
  $result_sql = "SELECT * FROM student WHERE studentID=15";

  // 2. We go to the database and run the query.
  // we use mysqli_query(). This takes two parameters: dbconnect and query
  $result_qry = mysqli_query($dbconnect, $result_sql);

  // 3. we organise our results into an associative array
  // Basically, we can use the column headings from the database table
  // we use the mysqli_fetch_assoc() function
  $result_aa = mysqli_fetch_assoc($result_qry);


  // display info
  $firstname = $result_aa['firstname'];
  $lastname = $result_aa['lastname'];
  echo "<p class=''>$firstname $lastname</p>";
 ?>
