<!DOCTYPE html>			
<html>
<head>
	<meta charset="utf-8" content = 'width=device-width,initial-scale=1.0,maximum-scale=1.0,user-scalable=0,shrink-to-fit=no' name='viewport'>
	<title>KinMail.com</title>
	
	<link rel="stylesheet" type="text/css" href="bootstrap.css">
	<link rel="stylesheet" type="text/css" href="main.css">
	<link rel="stylesheet" type="text/css" href="stylesheet1.css">
	<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css"> 
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap-glyphicons.css" rel="stylesheet">
</head>

<body style="background-color: #d2d2d2">


<?php
	session_start();
	if(!isset($_GET['hash']) || $_GET['hash'] == null)
	{	$active=0;
		$currentuser="";
		$bannerwidth=8;

	}
	else {
		$active=1;
		$currentuser=$_GET['hash'];
		$bannerwidth=10;
	}


	require "db.php";
	$query8="SELECT * FROM `users` WHERE hash='$currentuser'";
	$result = $conn->query($query8);
	$active_user = $result->fetch_assoc();
	$a_u=$active_user['first_name'];
 ?>

<nav class="navbar navbar-default">
	<div class="container-fluid">
		<div class="navbar-header">
			<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
			 <a class="navbar-brand" " href="index.php?hash=<?php echo $currentuser;?>"><span class="fa fa-home"></span>&nbsp;KinMail Home</a>
		</div>
		<div class="row">
			 
		<div class="collapse navbar-collapse" id="myNavbar">
		 	<ul class="nav navbar-nav navbar-right">
      			
				<li> <a href="about1.php?hash=<?php echo $currentuser;?>"><span class="fa fa-info-circle"></span>&nbsp;About Us</a> </li>
				<li> <a href="help.php?hash=<?php echo $currentuser;?>"><span class="fa fa-question-circle"></span>&nbsp;Help</a> </li>
				<li> <a href="contact.php?hash=<?php echo $currentuser;?>"><span class="fa fa-phone-square"></span>&nbsp;Contact Us</a> </li>
				
				<?php 

				if($active==0){ 
					?>
				<li><a href="reg.php"><span class="glyphicon glyphicon-user"></span>&nbsp; Sign Up</a></li>
      			<li> <a href="login.php"><span class="glyphicon glyphicon-log-in"></span>&nbsp;Login</a> </li>


      			<?php }




      			elseif ($active==1){ ?>

      							<li><a href="pd_register.php?hash=<?php echo $currentuser;?>"><span class="fa fa-plus"></span>&nbsp;Register Product</a></li>

			<?php } ?>

							<?php 


							if($currentuser!=""){?>
							<li>
							  		<a href="profile_a.php" class=" dropdown-toggle" type="link" data-toggle="dropdown"><span class="glyphicon glyphicon-user" style="color: lightgreen;"></span>&nbsp;<?php echo $a_u; ?>
									    <span class="caret"></span></a>
									    		<ul class="dropdown-menu">
												      <li><a href="index.php">Log out</a></li>
												      <li><a href="profile_a.php">Profile</a></li>
												</ul>
										
							</li>

										<script>
										     $(document).ready(function(){
										        $('.dropdown-toggle').dropdown()
										    		});
										</script>

						<?php
						}
						 ?>

							


					</ul>
					</div>

				<?php include 'searchphp.php'; ?>
	</div><!--/top navbar--><!--/navbar top--><!--/navbar top-->
</nav>

	<div class="row context">
	  			<div class="conatainer-fluid col-sm-2"></div>
	  				<div class="container-fluid col-sm-8"> 
	  			
	      				<div class="panel panel-default" style="padding: 0;background-color:#f5edeb;">
	      					<div class="panel-body"> 
	      					<h1>Need some help???</h1>
	      					<h4>Answer to some questions that will help you to operate:</h4>
	      					<img src="image/question.jpg"  width="100%" height="100%">
	      					<h4>You can make a official id for this website to take advantage of <a href="index.php">kinmail.com </a> </h4>
	      					<div style="margin-top:5%;"></div>
	      					<p class="help">To do so you have to resister to this site by clicking the<a style="color: blue;" href="reg.php"> Sign Up</a> which lies inside navbar </p>
	      					<img src="image/h1.png"  width="100%" height="100%">
	      					<div style="margin-top:5%;"></div>
	      					<p class="help">Then a new page will appear.After that fill all the document required for the sign up <br>just like in given example and click on Register</p>
	      					<img src="image/h2.png"  width="100%" height="100%">
	      					<div style="margin-top:5%;"></div>
	      					<p class="help">Then You can have your own id on kinmail.com and take all the advantages by our website</p>
	      					<h4>If you already have an id you can just Log In to this website and enjoy it just like shown below. </h4>
	      					<img src="image/h3.png"  width="100%" height="100%">
	      					<p class="help">If you forget your password you can just go to the forgot password and then change your password<br> For Futher question Please contact us through the email all the discription is given in <a href="contact.php">Contact Us</a> section </p>
	      					<img src="image/h4.png"  width="100%" height="100%">
	      					<div style="margin-top:5%;"></div>

						</div>
					</div>
				</div>	
	</div>
					<div style="margin-top: 10%;"></div>	      			

<footer class="w3-center w3-padding-64" style=" background: #f8f8f8">
  				<a href="about.php" class="w3-button w3-light-grey"><i class="fa fa-arrow-up w3-margin-right"></i>To the top</a>
  			<div class="w3-xlarge w3-section">
  					<p style="color: blue;text-align:center;">Follow us on</p>
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