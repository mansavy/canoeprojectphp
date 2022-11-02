<?php include "header.php"; ?>
<?php include "connection.php"; ?>
  <body>

    <?php include "nav.php"; ?>
   
    <main>
      <div class="img-container">
        <img src="images/canoe.jpeg" alt="Canoe on a riverbank" id="mainImg" />
        <div class="center">Come Experience Canada</div>
      </div>

     

      <div class="text">
        <h2 id="upcoming">Upcoming Adventures</h2>
        <hr />

            <div id="adventures">

         <?php 

         $sql = "SELECT * FROM adventures";
         $result = $connection->query($sql);

     if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
         echo "<h2><a href='#'>" .$row["heading"] . "</a></h2>
            <div class='date'>Date: " .$row["tripDate"] . "</div>
         <div class='duration'>Duration: " .$row["duration"] . "</div>
         <h5>Summary</h5>
         <p class='summary'> " .$row["summary"] . "</p>";
        
       }
       } else {
         echo "No adventures currently scheduled!";
       }
  

    
  $connection->close();

      ?>
    
      </div>

    </main>
    <br />
    <br>
     <footer>Copyright 2022</footer>

  </body>
</html>