<?php
include("navbar.php");
 ?>
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
  $result_qry = mysqli_query($dbconnect, $result_sql);

  // check if there are any results to display
  // use mysqli_num_rows(), which counts the number of results
    if(mysqli_num_rows($result_qry)==0) {
      // If no results were found, print a message
      echo "<h1>No results found</h1>";
    } else {
      // there are results, so display them
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
        $image = $result_aa['image'];
        ?>
        <div class="col">
          <p><?php echo "$firstname $lastname"; ?></p>
          <img src="images/<?php echo $image; ?>" class="image-resize" alt="">
        </div>
      <?php
      // the while () condition is just the third step of our process
      // of running the query.
      // It effectively means we repeat the code in the do{} part as
      // many times as there are results coming back from the database
    } while ($result_aa = mysqli_fetch_assoc($result_qry));


  }  // end of check for number of results










 ?>
</div>
