<div class="container">
<link rel="stylesheet" href="resultstyles.css">

<?php
  // this page will run a query and display the result(s)

  // we include the dbconnect.php code
  include("dbconnect.php");

  // check to see if the user searched on something to come to this page
  if(!isset($_POST['search'])) {
    header("Location: search.php");
  }
  // grab the search content from the POST array, put into a variable
  $search = $_POST['search'];

  // there are 3 steps to running a select query
  // 1. Set up the query in a variable
  $result_sql = "SELECT * FROM student WHERE firstname LIKE '%$search%' OR lastname LIKE '%$search%'";

  // 2. We go to the database and run the query.
  // we use mysqli_query(). This takes two parameters: dbconnect and query
  if($result_qry = mysqli_query($dbconnect, $result_sql)) {

    

    // query worked
    // 3. we organise our results into an associative array
    // Basically, we can use the column headings from the database table
    // we use the mysqli_fetch_assoc() function
    $result_aa = mysqli_fetch_assoc($result_qry);

    // loop through $result_aa to display all results
    // do{} means do all this stuff while a condition is true
    do {
      // display info
      $firstname = $result_aa['firstname'];
      $lastname = $result_aa['lastname'];
      ?>
      <div class="col">
        <p><?php echo "$firstname $lastname"; ?></p>
      </div>
    <?php
    // the while () condition is just the third step of our process
    // of running the query.
    // It effectively means we repeat the code in the do{} part as
    // many times as there are results coming back from the database
  } while ($result_aa = mysqli_fetch_assoc($result_qry));

  } else {
    // error
    echo "Error: query didn't work: ".mysqli_error($dbconnect);
  }






 ?>
</div>
