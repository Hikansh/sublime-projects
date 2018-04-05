<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">

    <link href="../lightbox/src/css/lightbox.css" rel="stylesheet">
    <script type="text/javascript" src="../lightbox/dist/js/lightbox-plus-jquery.js"></script>

    <script defer src="https://use.fontawesome.com/releases/v5.0.6/js/all.js"></script>

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
  .circle{

  }
</style>

  </head>
  <body data-spy="scroll" data-target="#mynav">

    <!-- jQuery first, then Tether, then Bootstrap JS. -->
    <script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>

<!--Navbar-->

  <nav id="mynav" class="navbar navbar-toggleable-md navbar-inverse bg-inverse fixed-top">
  <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <a class="navbar-brand" href="#">OYO Rooms</a>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item">
        <a class="nav-link" href="#about">About Us<span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="bookrooms.php">Book Rooms</a>
      </li>
    </ul>
      <ul class="navbar-nav ml-auto">
        <?php
        session_start();
        if(!isset($_SESSION['uname']))
        {
         echo "<li class='nav-item'><a class='nav-link' href='signup.php'>SignUp</a></li><li class='nav-item'><a class='nav-link' href='login.php'>LogIn</a></li>";
        }
        else{
         echo "<form action='login.php' method='POST'><input type='submit' name='logout' class='btn btn-primary' value='Logout'></form>"; 
        }
      ?>
    </ul>
  </div>
</nav>



<!--Header-->

<div class="container text-center" style="padding-top: 70px;">
 
<!--About-->

<div class="container" id="about">
  <section>
    <div class="row">
      <div class="col-12">
        <div class="card card-block">
          <h2 class="display-3">About Us</h2>
            <blockquote class="blockquote">
            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
            quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
            consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
            cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
            proident, sunt in culpa qui officia deserunt mollit anim id est laborum.  <br><br>
            </blockquote>
        </div>
      </div>
    </div>
  </section>
</div>



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
  sr.reveal('#about',{
    duration:1000,
    delay:50,
    mobile:true,
    reset:true,
    opacity:0,
    origin:'left',
    distance:'400px'
  });
    sr.reveal('#footer',{
    duration:1000,
    delay:50,
    mobile:true,
    reset:true,
    opacity:0,
    origin:'right',
    distance:'400px'
  });
</script>
  </body>
</html>