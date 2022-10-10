
 <html>
 <?php include "header.php"; ?>
 <body>
     <?php include "nav.php"; ?>
     <main>


 <h2 id="header">Book a trip</h2>
        <hr />
        <p>Just Some Quick Details</p>
        <form method="get" action="thank-you.php">
<div>
        <label for="email">Email</label>
        <input type="email" name="email" /> 
</div>

<div>
        <label for="location">Location</label> <select name="location" id="location">
            <option value="Halifax">Halifax</option>
            <option value="Sydney">Sydney</option>
        </select> 
</div>
          <div>
        <label for="date">Trip Date</label> 
        <input type="date" name="date"/> 
</div>
   <input type="submit" name="submit" />

</form>


</main>

 <footer class="footer">Copyright 2022</footer>
</body>
</html>