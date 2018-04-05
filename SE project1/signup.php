<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>SignUp</title>
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
      <a class="nav-item nav-link current" href="signup.php">Sign Up</a>
    </div>
  </div>
</nav>  
<br>

<div class="container">
<h2 style="text-align:center;" class="display-3">SignUp</h2>
<br><hr>
  <div class="row justify-content-center">
    <div class="col-md-6">
      <form action="signup.php" method="POST">
    <label>Email address</label>
    <input type="email" class="form-control" name="uname" placeholder="E-mail" required>
<br>
    <label>Mobile Number</label>
    <input type="text" class="form-control" name="mobno" placeholder="Mobile Number" required><br>
    <label>City</label>
    <input type="text" class="form-control" name="city" placeholder="City" required><br>     
    <label>Password</label>
    <input type="password" class="form-control" name="pwd" placeholder="Password" required>
  
<!--  <div class="checkbox">
    <label>
      <input type="checkbox"> Remember me
    </label>
  </div>-->
  <br>
  <button type="submit" name="btn2" class="btn btn-primary">Submit</button>
</form>
    </div>
  </div>
</div>
  </body>
</html>

<?php
	if(isset($_POST['btn2']))
	{
			if(isset($_POST['uname'])&&!empty($_POST['uname'])&&isset($_POST['pwd'])&&!empty($_POST['pwd']))
			{
				$u=$_POST['uname'];
				$p=$_POST['pwd'];
				$f=1;
				$str="\n".$u.":".$p;
				
			$handle=fopen("user_crs.txt","a+");

			while(!feof($handle))
			{
					$s=fgets($handle);
					$a=explode(':',$s);
				if(($u==trim($a[0])))
				{
					$f=0;
					echo "<br><div class='container'><div class='alert alert-danger'>Email Already in Use..Try Again</div></div>";
					break;
				}
			}
			if($f==1)
			{
				fwrite($handle,$str);
				header("Location:login.php");
			}
		fclose($handle);
		}
	}
?>