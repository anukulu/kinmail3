<?php

require "db.php";
session_start();

if(isset($_GET['email']) && !empty($_GET['email']) && isset($_GET['hash']) && !empty($_GET['hash']))
{
	$email = $conn->escape_string($_GET['email']);
	$hash = $conn->escape_string($_GET['hash']);

	$query = "SELECT * FROM `users` WHERE email = '$email' AND hash='$hash'";
	$result = $conn->query($query);
	if($result->num_rows == 0)
	{
		$_SESSION['message'] = "Invalid url";
		header("location:error.php");
	}
	// $_GLOBALS['hash'] = $_GET['hash'];
	// $_GLOBALS['email'] = $_GET['email'];
}
else
{
	$_SESSION['message'] = "Verification failed";
	header("location:error.php");
}
?>
<!DOCTYPE html>			
<html>
<head>
	<meta charset="utf-8" content = 'width=device-width,initial-scale=1.0,maximum-scale=1.0,user-scalable=0,shrink-to-fit=no' name='viewport'>
	<title>KinMail.com</title>
	
	<link rel="stylesheet" type="text/css" href="bootstrap.css">
	<link rel="stylesheet" type="text/css" href="main.css">
	<link rel="stylesheet" type="text/css" href="stylesheet.css">
	<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css"> 
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap-glyphicons.css" rel="stylesheet">

</head>

<body style="background-color: #d2d2d2">


<nav class="navbar navbar-default">
	<div class="container-fluid">
		<div class="navbar-header">
			<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
			 <a class="navbar-brand" " href="index.php"><span class="fa fa-home"></span>&nbsp;KinMail Home</a>
		</div>
		<div class="row">
			 
		<div class="collapse navbar-collapse" id="myNavbar">
		 	<ul class="nav navbar-nav navbar-right">
      			<li><a href="reg.php"><span class="glyphicon glyphicon-user"></span>&nbsp; Sign Up</a></li>
      			<li> <a href="login.php"><span class="glyphicon glyphicon-log-in"></span>&nbsp;Login</a> </li>
      			<li> <a href="about.php"><span class="fa fa-info-circle"></span>&nbsp;About Us</a> </li>
				<li> <a href="help.php"><span class="fa fa-question-circle"></span>&nbsp;Help</a> </li>
				<li> <a href="contact.php"><span class="fa fa-phone-square"></span>&nbsp;Contact Us</a> </li>

			</ul>
		</div>

		<form class="form form-inline navbar-center col-md-11 col-md-pull-1" style="text-align: center; margin-bottom: 5px;" role="search" autocomplete="on" action="#">
			
			<div class="form-group">
				<input type="text" name="searchtext" class="form-control search" size="90" placeholder="Search the products" style="">
				<button type="submit"  class="btn btn-default"  style="">
					<span class="fa fa-search" style="color:blue">
					</span>
				</button>
			</div>
		</form>	
	</div>
</nav>
<div style="margin-top: 5%;"></div>

<form method="post" action="reset-password.php"> 
<div class="container-fluid">
   <div class="row">
		<div class="col-sm-4"></div>
		<div class="col-sm-4"> 
			<div class="panel panel-primary">
				<div class="panel-heading"><h1>Reset Password</h1></div>
				<div class="panel-body">
					<div class="form-group">
              			<label  for="email">Email</label>
              			<input type="text" readonly name="email" value="<?=$email?>">
						<input type="hidden" name="hash" value="<?=$hash?>"><br>
                	</div>

					<div class="form-group">
              			<label  for="email">New Password:</label>
              			<input type="password" class="form-control" name="new_password" id="pwd"  placeholder="New Password"/ minlength="8">
                	</div>

              		<div class="form-group ">
              			<label for="password">Confirm New Password</label>
              			<div>
                  			<input type="password" class="form-control" name="confirm_password" id="number"  placeholder=" Conform New password" minlength="8" />
               			</div>
              		 </div>	
              		 <button class="btn btn-primary" type="submit" name='reset-password' id="button" ><span class="fa fa-check"></span>&nbsp;Reset</button>		
				</div>

			</div>
		</div>
   </div>
</div>
</form>
<div style="margin-top: 20%;"></div>

<footer class="w3-center w3-padding-64" style=" background: #f8f8f8">
  				<a href="index.php" class="w3-button w3-light-grey"><i class="fa fa-arrow-up w3-margin-right"></i>To the top</a>
  			<div class="w3-xlarge w3-section">
  					<h2 style="color: blue;text-align:center;">Follow us on</h2>
    			<a href="https://www.facebook.com"><i class="fa fa-facebook-official w3-hover-opacity"></i>&nbsp;Facebook</a>
               <a href="https://www.instagram.com"> <i class="fa fa-instagram w3-hover-opacity"></i>&nbsp;Instagram</a>
                <a href="https://www.snapchat.com"><i class="fa fa-snapchat w3-hover-opacity"></i>&nbsp;Snapchat</a>
                <a href="https://www.pinterest.com"><i class="fa fa-pinterest-p w3-hover-opacity">&nbsp;Pinterest</i></a>
                <a href="https://www.twitter.com"><i class="fa fa-twitter w3-hover-opacity"></i>&nbsp;Twitter</a>
  
 			</div>	
 			   </br>
  
  
		</footer>

</body>
</html>