<div class="nav-container">

  <div class="nav">

    <input type="checkbox" id="nav-toggle">
    <label for="nav-toggle" class="burger-menu">
      <!-- Bars icon -->
      <i class="fas fa-bars bars-white"></i>
    </label>




    <div class="left-menu">
      <?php
        // import database connection info
        include("dbconnect.php");
        // select all tutorgroups
        $tutor_sql = "SELECT * FROM tutorgroup";
        $tutor_qry = mysqli_query($dbconnect, $tutor_sql);
        $tutor_aa = mysqli_fetch_assoc($tutor_qry);

        // display all tutor groups as links
        do {
          $tutorgroupID = $tutor_aa['tutorgroupID'];
          $tutorcode = $tutor_aa['tutorcode'];

          echo "<a href='tutorgroup.php?tutorgroupID=$tutorgroupID&tutorcode=$tutorcode'>$tutorcode</a>";

         } while ($tutor_aa = mysqli_fetch_assoc($tutor_qry))


       ?>

    </div>
    <div class="logo">
      LOGO GOES HERE
    </div>
<div class="right-menu">
  <form class="" action="results.php" method="post">
    <input required type="text" name="search" placeholder="Enter first name to look for">
    <button type="submit" name="button">Search</button>
  </form>
</div>
  </div>

</div>
