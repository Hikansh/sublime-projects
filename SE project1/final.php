<!DOCTYPE html>
<html lang="en">
  <head>

<?php
session_start();
if(!isset($_SESSION['uname']))
{
  header("Location:login.php");
}
?>

    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">

    <link href="../lightbox/src/css/lightbox.css" rel="stylesheet">

    <script type="text/javascript" src="../lightbox/dist/js/lightbox-plus-jquery.js"></script>

<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.9/css/all.css" integrity="sha384-5SOiIsAziJl6AWe0HWRKTXlfcSHKmYV4RBF18PPJ173Kzn7jzMyFuTtk8JA7QQG1" crossorigin="anonymous">

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
  #err1,#err2,#err3,#book1,#book2,#book3{
    display: none;
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
        <a class="nav-link" href="index.php">About Us<span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="bookrooms.php">Book Rooms</a>
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

<div class="container text-center" style="padding-top: 70px;">
  <div class="head1">
  <h3 class="display-4">Select A Nearby Hotel</h3>
  <p class="lead">(3 Nearby Hotels Found)</p>
  <hr>
  <div id="accordian" role="tablist">
    <div class="row">
<div class="col-md-4 col-12">
   <div class="card">
    <a href="#download" class="btn btn-primary" data-toggle="collapse" data-parent="#accordian">Hotel 1</a>
  <div class="collapse" id="download">
    <div class="card card-block">
      <img src="img/1.jpg" class="card-img-top img-fluid img-thumbnail">
    <h2>Hotel 1</h2>
    <p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
    quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
    consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
    cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
    proident, sunt i</p>

    <div class="row align-items-center">
      <div class="col-6 text-right">
        <p id="one" class="lead">1</p>    
      </div>
      <div class="col-6">
        <div class="row text-left">
          <div class="col-12">
            <i class="fas fa-plus" id="addone"></i>            
          </div>
        </div>
        <div class="row text-left">
          <div class="col-12">
             <i class="fas fa-minus" id="subone"></i>            
          </div>
        </div>
      </div>
    </div>

    <a href="#" class="btn btn-primary" onclick="book1()">Book Rooms</a>
    <br>
    <div class="alert alert-success" id="book1">SuccessFully Booked Your Rooms..!</div>
    <div class="alert alert-danger" id="err1">You can select rooms in range(1-5){Minimum:1,Maximum:5}</div>
   </div>
</div>
   </div></div> 

<div class="col-md-4 col-12">
   <div class="card">
    <a href="#contact"  class="btn btn-success" data-toggle="collapse" data-parent="#accordian">Hotel 2</a>
  <div class="collapse" id="contact">
<div class="card card-block">
      <img src="img/2.jpg" class="card-img-top img-fluid img-thumbnail">
    <h2>Hotel 2</h2>
    <p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
    quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
    consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
    cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
    proident, sunt i</p>
        <div class="row align-items-center">
      <div class="col-6 text-right">
        <p id="two" class="lead">1</p>    
      </div>
      <div class="col-6">
        <div class="row text-left">
          <div class="col-12">
            <i class="fas fa-plus" id="addtwo"></i>            
          </div>
        </div>
        <div class="row text-left">
          <div class="col-12">
             <i class="fas fa-minus" id="subtwo"></i>            
          </div>
        </div>
      </div>
    </div>
    <a href="#" class="btn btn-success" onclick="book2()">Book Rooms</a><br>
    <div class="alert alert-success" id="book2">SuccessFully Booked Your Rooms..!</div>
    <div class="alert alert-danger" id="err2">You can select rooms in range(1-5){Minimum:1,Maximum:5}</div>
  </div>
</div>
   </div> </div>

<div class="col-md-4 col-12">
<div class="card">
    <a href="#support" class="btn btn-warning" data-toggle="collapse" data-parent="#accordian">Hotel 3</a>
  <div class="collapse" id="support">
    <div class="card card-block">
      <img src="img/3.jpg" class="card-img-top img-fluid img-thumbnail">
      <h2>Hotel 3</h2>
    <p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
    quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
    consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
    cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
    proident, sunt i</p>
    <hr>
    <div class="row align-items-center">
      <div class="col-6 text-right">
        <p id="three" class="lead">1</p>    
      </div>
      <div class="col-6">
        <div class="row text-left">
          <div class="col-12">
            <i class="fas fa-plus" id="addthree"></i>            
          </div>
        </div>
        <div class="row text-left">
          <div class="col-12">
             <i class="fas fa-minus" id="subthree"></i>            
          </div>
        </div>
      </div>
    </div>    <a href="#" class="btn btn-warning" onclick="book3()">Book Rooms</a><br>
    <div class="alert alert-success" id="book3">SuccessFully Booked Your Rooms..!</div>
    <div class="alert alert-danger" id="err3">You can select rooms in range(1-5){Minimum:1,Maximum:5}</div>
  </div>
</div>
</div>
</div>
</div>
</div>
</div><br><br>
<div class="row">
  <div class="col-md-8 abt">
    <h3 class="display-4">We Provide Best In Class Services</h3><hr>
     <blockquote class="blockquote">
            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
            quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
            consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
            cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
            proident, sunt in culpa qui officia deserunt mollit anim id est laborum.  <br><br>
      </blockquote>
  </div>
  <div class="col-md-4 frm">
    <form>
    <div class="form-group" style="border: 1px solid green;border-radius: 5px; padding: 25px; box-sizing: border-box; box-shadow: 10px 10px 35px  green;">
      <h3 class="display-4">Feedback</h3><br>
      <div class="row">
      <div class="col-4">
      <label for="name">Name:</label>
    </div>
      <div class="col-8">
      <input type="text" class="form-control" name="name" required><br>
      </div>
    </div>
<div class="row">
      <div class="col-4">
      <label for="email">E-mail:</label>
    </div>
      <div class="col-8">
      <input type="text" class="form-control" name="email" required><br>
      </div>
    </div>
    <div class="row">
      <div class="col-4">
      <label for="body">Message:</label>
    </div>
      <div class="col-8">
      <input type="textarea" class="form-control" name="body" required><br>
      </div>
    </div> 
    <a href="#" class="btn btn-success">Submit</a>   
  </div>
  </form>
  </div>
</div>
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
  sr.reveal('#footer',{
    duration:1000,
    delay:50,
    mobile:true,
    reset:true,
    opacity:0,
    origin:'bottom',
    distance:'400px'
  });
  sr.reveal('.head1',{
    duration:1000,
    delay:50,
    mobile:true,
    reset:true,
    opacity:0,
    origin:'bottom',
    distance:'400px'
  });
  sr.reveal('.abt',{
    duration:1000,
    delay:50,
    mobile:true,
    reset:true,
    opacity:0,
    origin:'left',
    distance:'400px'
  });
  sr.reveal('.frm',{
    duration:1000,
    delay:500,
    mobile:true,
    reset:true,
    opacity:0,
    origin:'right',
    distance:'400px'
  });

  var count1=1;
  var count2=1;
  var count3=1;
  $('#addone').on('click',()=>{
    count1++;
    if (count1>=6) {
      alert("You can not add more than 5 rooms");
      $('#err1').css('display','block');
    }
    else
    {
      $('#err1').css('display','none');   
      document.getElementById('one').innerHTML = count1;
    }
  });
  $('#subone').on('click',()=>{
    count1--;
    if (count1<=0) {
      alert("You can not Select 0 rooms");
      $('#err1').css('display','block');
    }
    else
    {   
      $('#err1').css('display','none');
      document.getElementById('one').innerHTML = count1;
    }
  });
  $('#addtwo').on('click',()=>{
    count2++;
    if (count2>=6) {
      alert("You can not add more than 5 rooms");
      $('#err2').css('display','block');
    }
    else
    {   
      $('#err2').css('display','none');
      document.getElementById('two').innerHTML = count2;
    }
  });
  $('#subtwo').on('click',()=>{
    count2--;
    if (count2<=0) {
      alert("You can not Select 0 rooms");
      $('#err2').css('display','block');
    }
    else
    {   $('#err2').css('display','none');
      document.getElementById('two').innerHTML = count2;
    }
  });
  $('#addthree').on('click',()=>{
    count3++;
    if (count3>=6) {
      alert("You can not add more than 5 rooms");
      $('#err3').css('display','block');
    }
    else
    {   
      $('#err3').css('display','none');
      document.getElementById('three').innerHTML = count3;
    }
  });
  $('#subthree').on('click',()=>{
    count3--;
    if (count3<=0) {
      alert("You can not Select 0 rooms");
      $('#err3').css('display','block');
    }
    else
    {   $('#err3').css('display','none');
      document.getElementById('three').innerHTML = count3;
    }
  });

  function book1(){
    alert('Your Rooms are Booked..!!');
    $('#book1').css('display','block');
  }
  function book2(){
    alert('Your Rooms are Booked..!!');
    $('#book2').css('display','block');
  }
  function book3(){
    alert('Your Rooms are Booked..!!');
    $('#book3').css('display','block');
  }

  </script>
  </body>
</html>