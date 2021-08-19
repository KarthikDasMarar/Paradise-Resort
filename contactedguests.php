<style><?php
include('css/allguests.css');
include('bootstrap/bootstrap.min.css');
?></style>
<html>
    <head>
    <meta charset="utf-8">
  <title>Paradise</title>
  <!--google fonts-->
  <link rel="preconnect" href="https://fonts.gstatic.com">
 <link href="https://fonts.googleapis.com/css2?family=Sacramento&display=swap" rel="stylesheet">
 <link href="https://fonts.googleapis.com/css2?family=Merriweather:wght@300&display=swap" rel="stylesheet">    
 <link href="https://fonts.googleapis.com/css2?family=Yanone+Kaffeesatz:wght@700&display=swap" rel="stylesheet">
  
 <!--Bootstrap Scripts-->
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script> 
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

</head>
<body>
<section id="title">
    <div class="container-fluid">
    <!-- Nav Bar -->
    <nav class="navbar navbar-expand-lg navbar-dark ">
      <h1 class="title-name">Paradise</h1>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
      </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto">
                  <li class="nav-item">
                    <a class="nav-link" href="managerhome.php">Panel</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="logout_m.php">logout</a>
                  </li>
            </ul>
        </div>
  </nav> 
</div>
</section>
<div class="row">
<div class="col-lg-3">
<div class="list-group">
      <a href="allguests.php" class="list-group-item">Registered Guests</a>
        <a href="roombookings.php" class="list-group-item">Rooms Booked</a>
        <a href="contactedguests.php" class="list-group-item active ">Contacted guests</a>
      </div>
      </div>

      <div class="guest-list">
<div class="col-lg-9">
  <?php include('view-contacts.php');?>
</div>
</div>
</div>
</div>
  <!-- Footer -->

  <footer id="footer">

    <p class="footer">© Copyright 2021 Paradise</p>

  </footer>

        </body>

</html>
