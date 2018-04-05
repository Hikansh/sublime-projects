<?php

?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <?php
session_start();
if(!isset($_SESSION['uname']))
{
  header("Location:login.php");
}
?>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">

    <script defer src="https://use.fontawesome.com/releases/v5.0.6/js/all.js"></script>
    <link  href="node_modules/@fengyuanchen/datepicker/dist/datepicker.css" rel="stylesheet">
  
<style type="text/css">
  body{
    padding-top: 20px;
  }
  img{
    width: 100%;
    max-height: 400px;
  }
  section{
    padding-bottom: 40px;
  }
  footer{
    margin-top: 15px;
   /* background-color: darkgray;
    border-radius: 20px;
    border:1px solid black;*/
  }
  #pa,#pa2{
    display: none;
  }
</style>

  </head>
  <body data-spy="scroll" data-target="#mynav">

<!--Navbar-->

  <nav id="mynav" class="navbar navbar-toggleable-md navbar-inverse bg-inverse fixed-top">
  <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <a class="navbar-brand" href="#">OYO Rooms</a>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item">
        <a class="nav-link" href="index.php">About Us<span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#book">Book Rooms</a>
      </li>
    </ul>
      <ul class="navbar-nav ml-auto">
      <li class="nav-item">
    <form action="login.php" method="POST">
      <input type="submit" name="logout" class="btn btn-primary" value="Logout">
    </form> 
      </li>
    </ul>
  </div>
</nav>



<!--Header-->

<div class="container text-center" style="padding-top: 70px;" id="book">
<h2 class="display-3">Search For A Nearby Hotel</h2>
<hr><br>
<form action="final.php" onsubmit="return validate()">
<div class="form-group">
  <p class="alert alert-danger" id="pa">Please Select A City..!</p>
  <p class="alert alert-danger" id="pa2">Enter Valid Dates..!</p>
  <label><h3 class="lead">Choose Your Destination Location:-</h3></label>
  <div class='col-4 offset-4'>
  <select class="form-control" id="location" onchange="change()">
          <option value="SC">Select city</option>
          <option>Delhi</option>
          <option>Kolkata</option>
  </select>
  <br>
  </div>
  <label><h3 class="lead">Select Arrival Date:-</h3></label>
 <div class='col-4 offset-4'>  
  <input data-toggle="datepicker" class="form-control" id="arrival_date" required>
  <div data-toggle="datepicker"></div>
</div>
<br>
  <label><h3 class="lead">Select Departure Date:-</h3></label>
 <div class='col-4 offset-4'>  
  <input data-toggle="datepicker" class="form-control" id="depart_date" required>
  <div data-toggle="datepicker"></div>
</div>
<br>
<button type="submit" class="btn btn-success btn-lg">Submit</button>
</div>
</form>

<!--footer-->
<hr>
<footer id="footer">
  <div class="container text-center">
  <h3 class="display-4">Contact Us</h3>
  <p class="lead">Tel:- 011-25467894</p>
  <p class="lead">Fax:- +91-011-1234567</p>
  <p class="lead">E-mail:- oyorooms@oyo.org</p>
  <p class="lead">
    North road Street California
  </p>

<hr>
  <p class="display-4">Follow us:-</p>
  <a href="https://www.twitter.com"><i class="fab fa-twitter fa-3x"></i></a>
  &nbsp;&nbsp;&nbsp;&nbsp;
  <a href="https://www.facebook.com"><i class="fab fa-facebook-f fa-3x"></i></a>
  &nbsp;&nbsp;&nbsp;&nbsp;
  <a href="https://www.instagram.com"><i class="fab fa-instagram fa-3x"></i></a>
</div>
<br><hr>
<div class="container-fluid text-center" style="padding: 6px;">
  <h4>Copyright &copy OYO</h4>  
</div>
</div>
</footer>
    <!-- jQuery first, then Tether, then Bootstrap JS. -->
    <script src="https://code.jquery.com/jquery-3.3.1.js" integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60=" crossorigin="anonymous"></script>
    <script src="node_modules/@fengyuanchen/datepicker/dist/datepicker.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/scrollreveal/dist/scrollreveal.min.js"></script>
<script type="text/javascript">

window.sr=ScrollReveal();
 sr.reveal('.navbar',{
    duration:1000,
    mobile:true,
    reset:true,
    delay:50,
    opacity:0,
    origin:'top',
    distance:'400px'
  });
  sr.reveal('#footer',{
    duration:1000,
    delay:50,
    mobile:true,
    reset:true,
    opacity:0,
    origin:'bottom',
    distance:'400px'
  });
  sr.reveal('#book',{
    duration:1000,
    delay:50,
    mobile:true,
    reset:true,
    opacity:0,
    origin:'left',
    distance:'400px'
  });

function change(){
  var location=document.getElementById('location');
  var invalid=location.value=='SC';
  if (invalid) {
    $('#pa').css('display','block');
    return false;
  }
  else{
   $('#pa').css('display','none');
    return true; 
  }
}

function date_valid(){
  var arrival_date=document.getElementById('arrival_date').value;
  var depart_date=document.getElementById('depart_date').value;
  if (depart_date<arrival_date) {
    $('#pa2').css('display','block');
    return false;
  }
  else{
    $('#pa2').css('display','none');
    return true;
  }
}

function validate(){
  var c=change();
  var d=date_valid();
  //alert(c);alert(d);
  var a=c&&d;
  return a;
}
$('[data-toggle="datepicker"]').datepicker(); 
</script>
  </body>
</html>