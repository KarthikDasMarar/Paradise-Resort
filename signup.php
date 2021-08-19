<style><?php
include('css/signup.css');
include('css/bootstrap.css');
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
            </ul>
        </div>
  </nav> 
</div>
</section>
<section id="loginform">
     <h2>SIGN-UP</h2>
     <form action="signin_u.php" method="post">
        <div class=form>
                    <input  id="fullname" type="fullname" name="fullname" placeholder="Fullname" required="" autofocus=""><br><br>
                    <input  id="email" type="email" name="email" placeholder="Email" required="" autofocus=""><br><br>
                    <input  id="username" type="username" name="username" placeholder="username" required=""autofocus=""><br><br>           
                    <input  id="password" type="password" name="password" placeholder="Password" required=""autofocus=""><br><br>
                    <input  id="contact" type="contact" name="contact" placeholder="contact" required="" autofocus=""><br><br>
                    <input  id="address" type="address" name="address" placeholder="Address" required="" autofocus=""><br><br>
                    <input class="button" type="submit" name="submit" type="button" id="submit" name="submit">
                    </div>
    </form>
  </section>
  <footer id="footer">

    <p class="footer">© Copyright 2021 Paradise</p>

  </footer>
    </body>
</head>
</html>