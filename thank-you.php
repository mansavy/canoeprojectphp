
 <html>
 <?php include "header.php"; ?>
 <body>
     <?php include "nav.php"; ?>
     <main>
    

          <h2 id="header">Thank you</h2>
          <hr>

          <p>Thank you: <?=$_GET['email']?>
<br />
We will contact you about the <?=$_GET['location']?> trip on <?=$_GET['date']?>!

</p>
</main>

 <footer class="footer">Copyright 2022</footer>
</body>
</html>