
 <html>
 <?php include "header.php"; ?>
 <body>
     <?php include "nav.php"; ?>
     <main>
<br />
<br />
<br />
<br />

 <h2 id="upcoming">Book a trip</h2>
        <hr />
        <p>Just Some Quick Details</p>
        <form method="get" action="thank-you.php">

        <label for="email">Email</label> 
        <input type="email" name="email" /> <br />

        <label for="location">Location</label> <select name="location" id="location">
            <option value="Halifax">Halifax</option>
            <option value="Sydney">Sydney</option>
        </select> 
            <br />
        <label for="date">Trip Date</label> 
        <input type="date" name="date" /> <br />
   <input type="submit" name="submit" />

</form>


</main>

 <footer class="footer">Copyright 2022</footer>
</body>
</html>