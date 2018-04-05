<?php
  session_start();
  ?>
  
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Login</title>
  </head>
  <body>
    <!-- Optional JavaScript -->    
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  
<nav class="navbar navbar-expand-md navbar-light" style="background-color:wheat;color:white;">
  <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <a class="navbar-brand" href="#">Questions App</a>
  <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
    <div class="navbar-nav">
      <a class="nav-item nav-link" href="Questions.php">Questions</a>
      <a class="nav-item nav-link" href="login.php">Sign In</a>
      <a class="nav-item nav-link" href="signup.php">Sign Up</a>
    </div>
  </div>
</nav>  
<br>

<div class="container">
<h2 style="text-align:center;" class="display-3">Login</h2>
<br><hr>
  <div class="row justify-content-center">
    <div class="col-md-6">
      <form action="login.php" method="POST">
    <label>Email address/Username</label>
    <input type="email/text" class="form-control" name="uname" placeholder="E-mail/Username" required>
<br>
    <label>Password</label>
    <input type="password" class="form-control" name="pwd" placeholder="Password" required>
  
<!--  <div class="checkbox">
    <label>
      <input type="checkbox"> Remember me
    </label>
  </div>-->
  <br>
  <button type="submit" name="btn" class="btn btn-primary">Submit</button>
</form>
    </div>
  </div>
</div>
  </body>
</html>

<?php
if(isset($_POST['logout'])){
session_destroy();
header("Location:login.php");
}
else if(isset($_SESSION['uname'])){
	header('Location: bookrooms.php');
}
	if(isset($_POST['btn']))
	{
			if(isset($_POST['uname'])&&!empty($_POST['uname'])&&isset($_POST['pwd'])&&!empty($_POST['pwd']))
			{
				$f=0;
				$u=$_POST['uname'];
				$p=$_POST['pwd'];
				$handle=fopen("user_crs.txt","r");
				
			while(!feof($handle))
				{
					$s=fgets($handle);
					$a=explode(':',$s);
				if(($u==trim($a[0])) &&($p==trim($a[1])))
				{
				$f=1;
				$_SESSION['uname']=$u;
				echo "<br><div class='container'><div class='alert alert-success'>Welcome to your account</div></div>";
				header('Location: bookrooms.php');
				}
			}
			if($f==0){
				echo "<br><div class='container'><div class='alert alert-danger'>Invalid Username/Password</div></div>";
			}
			fclose($handle);
	}
}

?>