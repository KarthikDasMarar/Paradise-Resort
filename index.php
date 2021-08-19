<style><?php 
include('css/styles.css');
include('bootstrap/bootstrap.min.css');
?></style>
<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <title>RagnorLothbrok</title>
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
                    <a class="nav-link" href="#">Home</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="about.php">About</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="contactus.php">Contact-Us</a>
                  </li>
            </ul>
        </div>
  </nav> 
</div>
</section>

  <!-- Features -->

  <section id="features">
  <div class="row">
      <div class="col-lg-6">
     <h2>Register to be part of us.</h2>
      </div>
    <div class="col-lg-6">
    <a href="login.php"><button type="button" class=" btn btn-outline-light btn-lg meet-button">Login</button></a>
      <a href="signup.php"><button type="button" class=" btn btn-outline-light btn-lg meet-buttons">Sign-Up</button></a>
    </div>
    </div>
  </section>


  <!-- Accomodation -->

  <section id="accomodation">
  <div class="row">
      <div class="col-lg-6">
     <h2 class=acc-name>ACCOMODATION</h2>
     <p class="acc-det">Paradise Resort boasts 42 beautifully furnished villas offering harmonious views. 
         All rooms are fully equipped with modern amenities and facilities. 
         Wake up to the sounds of tropical birds and enjoy the beauty of 
         turquoise waters just steps away from your villa.</p>
      </div>
    <div class="col-lg-6">
        <img src="images/deluxe.jpg" class="acc-img">
    </div>
    </div>
</section>

  <!-- Dining-->

  <section id="dining">
  <div class="row">
      <div class="col-lg-6">
      <img src="images/dining.jpg" class="din-img">
      </div>
    <div class="col-lg-6">
    <h2 class=din-name>DINING</h2>
     <p class="din-det">Paradise Resorts presents a distinct selection of dining experiences 
         curated to inspire and amaze all tastes. Four à la carte restaurants offer an array of cuisines 
         from delicious Italian to authentic Maldivian cuisine; served in a warm ambience.</p>
    </div>
    </div>
  </section>

  <!-- Special -->

  <section id="special">
  <div class="row">
      <div class="col-lg-6">
     <h2 class=spl-name>HONEYMOONS & CELEBRATIONS</h2>
     <p class="spl-det">The Maldives is synonymous with love and romance, making it the ideal
         setting for a wedding vow renewal ceremony or honeymoon. Our resort will carefully 
         curate your dream experience or celebration in one of the world’s most magical destinations.</p>
      </div>
    <div class="col-lg-6">
        <img src="images/honey.jpg" class="spl-img">
    </div>
    </div>
  </section>


  <!-- Footer -->

  <footer id="footer">

    <p class="footer">© Copyright 2021 Paradise</p>

  </footer>

</body>

</html>
