
 <html>
 <?php include "header.php"; ?>
 <?php include "connection.php"; ?>
 <body>
     <?php include "nav.php"; ?>
     <main>


 <h2 id="header">Admin - Add Adventure</h2>
        <hr />
        <p>Input details about the trip</p>
        <form method="post" action="admin-confirm.php">

       
<div>
        <label for="heading">Heading</label>
        <input type="text" name="heading" required/> 
</div>

          <div>
        <label for="tripDate">Trip Date</label> 
        <input type="date" name="tripDate" required/> 
</div>
<div>
        <label for="duration">Duration</label>
        <input type="text" name="duration" required/> 
</div>
<div>
        <label for="summary">Summary</label>
        <input type="text" name="summary" required/> 
</div>
   <input type="submit" name="submit" id="submit" />

</form>


</main>

 <footer class="footer">Copyright 2022</footer>
</body>
</html>