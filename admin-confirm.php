
 <html>
 <?php include "header.php"; ?>
 <?php include "connection.php"; ?>
 <body>
     <?php include "nav.php"; ?>

    <main>

          <h2 id="header">Admin - Confirm</h2>
          <hr>

          <?php 
  
          $heading = $_POST['heading'];
          $date = date("Y-m-d", strtotime($_POST['date']));
          $duration = $_POST['duration'];
          $summary = $_POST['summary'];

          $sql = "INSERT INTO adventures VALUES (NULL, '$heading', '$date',
          '$duration', '$summary')";

          if(mysqli_query($connection, $sql)) {
              echo "<p>Data has been added successfully to DB</p>
              <br> $trip_date";
          } else {
              echo "ERROR: Sorry $sql."
              .mysqli_error($connection);
          }

          mysqli_close($connection);
          ?>

        

          

</main>
<div id="adventure-div">
<a href="/canoeproject/all-adventures.php" id="adventure-link">View All Adventures</a>
</div>


 <footer class="footer">Copyright 2022</footer>
</body>
</html>