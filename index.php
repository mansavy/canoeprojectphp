<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Halifax Canoe and Kayak</title>
    <link rel="stylesheet" href="style.css" />

    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx"
      crossorigin="anonymous"
    />

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  </head>
  <body>
    <nav class="navbar navbar-expand-lg top fixed-top">
      <div class="container-fluid">
        <img
          src="images/hamburger.png"
          alt="hamburger icon"
          id="hamburger"
          class="d-inline-block align-text-top"
        />

        <h1 id="title" class="navbar-text d-inline-block align-text-top">
          Halifax Canoe and Kayak
        </h1>

        <a href="#" class="navbar-brand d-inline-block align-text-top">
          <img src="images/paddle-white.png" alt="paddle logo" id="logo" />
        </a>
      </div>
    </nav>
    <nav id="toggle" class="show">
      <ul>
        <br />

        <li><a href="#">Home</a></li>
        <li><a href="#">Book Trip</a></li>
        <li><a href="#">Admin Login</a></li>
      </ul>
    </nav>

    <main>
      <div class="img-container">
        <img src="images/canoe.jpeg" alt="Canoe on a riverbank" id="mainImg" />
        <div class="center">Come Experience Canada</div>
      </div>

      <div class="text">
        <h2 id="upcoming">Upcoming Adventures</h2>
        <hr />

        <div id="adventures">
          <h2><a href="#">Halifax</a></h2>
          <div class="date">Date: September 10, 2022</div>
          <div class="duration">Duration: 4 days</div>
          <h5>Summary</h5>
          <p class="summary">
            Our four-day Halifax Kayak Tour is an experience you won’t soon
            forget! This relaxing, guided evening paddle will take you along the
            Waterfront, under the Macdonald bridge, and around the Georges
            Island, just in time to capture some breathtaking “golden hour”
            photos!
          </p>

          <h2><a href="#">Sydney</a></h2>
          <div class="date">Date: September 25, 2022</div>
          <div class="duration">Duration: 2 days</div>
          <h5>Summary</h5>
          <p class="summary">
            This tour Includes guide, equipment, instruction and a freshly
            prepared beach lunch of fish cakes, home-made baked beans,
            home-baked bread and tea. Here we learn the basics of paddling on
            dry land before heading out to paddle through the St. Ann’s Bay
            region.
          </p>
          <br />
        </div>
      </div>
      <footer>Copyright 2022</footer>
    </main>
    <script src="script.js"></script>
  </body>
</html>
