<style><?php
include('css/payments.css');
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
                    <a class="nav-link" href="guesthome.php">Home</a>
                  </li>

                  <li class="nav-item">
                    <a class="nav-link" href="logout_u.php">Logout</a>
                  </li>
            </ul>
        </div>
  </nav> 
</div>
</section>

<div class="payment">
    <h1 class="abt-back">Booking</h1>
    <h2 class="pay-head">Continue booking</h2></div>

    <form action="paymentnext.php" method="post">
<label>Select a room : </label>
    <select type="dropdown" name=rooms required>
      <option>select a room</option>
    <option>single suite</option>
    <option>double suite</option>
    <option>deluxe suite</option>
    <option>underwater suite</option>
    <option>family suite</option>
    <option>honeymoon suite</option>
  </select><br><br>
<label>Fisrt Name : </label>
  <input type="text" name="firstname" placeholder="FirstName" required>
<label>Last Name : </label>
<input type="text" name="lastname" placeholder="LastName" required><br><br>
<label>Email : </label>
  <input type="email" name="email" placeholder="Email" required>
<label>contact : </label>
<input type="text" name="contact" placeholder="contact" required><br><br>

<label >Check-In Date :</label>
        <input type=date name=checkin required>

        <label >Check-Out Date :</label>
        <input type=date name=checkout required><br><br>

        <label class="inputs">Adults : </label>
        <select class="numberof" name="adults" id="adults" required>
        <option value="0">0</option>
        <option value="1">1</option>
            <option value="2">2</option>
            <option value="2">3</option>
            <option value="2">4</option>
            <option value="2">5</option>
        </select>

        <label class="inputs">children : </label>
        <select  class="numberof" name="children" id="adults" required><br><br>
        <option value="0">0</option>
        <option value="1">1</option>
            <option value="2">2</option>
            <option value="2">3</option>
            <option value="2">4</option>
            <option value="2">5</option>
        </select><br><br>

        <input type=submit name=submit type="button" id="submit" class="submit">
    </form>
</div>
<footer id="footer">

<p class="footer">© Copyright 2021 Paradise</p>

</footer>
</body>
</html>
        