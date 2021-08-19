<style><?php
include('css/rooms.css');
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
                    <a class="nav-link" href="index.php">Home</a>
                  </li>
                    <a class="nav-link" href="logout_u.php">Logout</a>
                  </li>
            </ul>
        </div>
  </nav> 
</div>
</section>
        
        <div class="top">
            <h1 class="abt-back">Rooms</h1>
        </div>
            <div class="row">
            <!----room 1---> 
                <div class="col-lg-6">
                <img class="room-img" src="images/single.jpg" style="padding-left:100px;">
              </div>
                <div class="col-lg-6" style="text-align:center; padding-top:50px;">
                    <h2 class="room-name">Single Suite</h2>
                    <h3 class="price">Rs - 3600 </h3>
                    <a href="payment.php"><button class="buttons" >book</button></a>
                </div>
                <!----room 2--->
                <div class="col-lg-6" style="text-align:center; padding-top:100px; background-color:#B8DFD8;">
                <h2 class="room-name">Double Suite</h2>
                    <h3 class="price">Rs - 4000</h3>
                    <a href="payment.php"> <button class="buttons" >book</button></a>
              </div>
              <div class="col-lg-6" style="background-color:#B8DFD8;">
              <img class="room-img" src="images/double.jpg"  style=" background-color:#B8DFD8;"> 
                </div>
               <!----room 3---->
                <div class="col-lg-6">
                <img class="room-img" src="images/deluxe.jpg" style="padding-left:100px; ">
              </div>
              <div class="col-lg-6" style="text-align:center; padding-top:50px;">
                    <h2 class="room-name">Deluxe Suite</h2>
                    <h3 class="price">Rs - 6000</h3>
                    <a href="payment.php"> <button class="buttons" >book</button></a>
                </div>
                  <!----room 4---->
                <div class="col-lg-6" style="text-align:center; padding-top:100px; background-color:#B8DFD8;">
                <h2 class="room-names">Underwater Suite</h2>
                    <h3 class="prices">Rs - 12300</h3>
                       <a href="payment.php"> <button class="buttons" >book</button></a>
              </div>
              <div class="col-lg-6"  style="background-color:#B8DFD8">
                <img class="room-imgs" src="images/under.jpg" style="background-color:#B8DFD8;">
                    </div>
               <!----room 5---->
                <div class="col-lg-6">
                <img class="room-imgs" src="images/hon.jpg" style="padding-left:100px;">
              </div>
              <div class="col-lg-6" style="text-align:center; padding-top:50px;">
                    <h2 class="room-names">Honeymoon Suite</h2>
                    <h3 class="prices">Rs - 4500 </h3>
                    <a href="payment.php"> <button class="buttons" >book</button></a>
                </div>
                   <!----room 6---->
                <div class="col-lg-6" style="text-align:center; padding-top:100px; background-color:#B8DFD8;">
                <h2 class="room-names">Family Suite</h2>
                    <h3 class="prices">Rs - 5600</h3>
                    <a href="payment.php"> <button class="buttons" >book</button></a>
                  </div>
                  <div class="col-lg-6"style="background-color:#B8DFD8;">
                <img class="room-imgs" src="images/fam.jpg"></a>
                </div>

            </div>
            <footer id="footer">

<p class="footer">© Copyright 2021 Paradise</p>

</footer>
    </body>
</head>
</html>