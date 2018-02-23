<!DOCTYPE html>			
<html>
<head>
	<meta charset="utf-8" content = 'width=device-width,initial-scale=1.0,maximum-scale=1.0,user-scalable=0,shrink-to-fit=no' name='viewport'>
	<title>KinMail.com</title>
	
	<link rel="stylesheet" type="text/css" href="bootstrap.css">
	<link rel="stylesheet" type="text/css" href="main.css">
		<link rel="stylesheet" type="text/css" href="w3.css"> 

	<link rel="stylesheet" type="text/css" href="stylesheet.css">
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



<h1 style="text-align: center; color: black;"> Website Design Team</h1>
<div class="container-fluid">
			<div class="w3-row w3-padding-large"><br>

				<div class="w3-quarter">
				  <img src="image/sudip.jpg" style="width:200px  ; height:200px;" class="w3-circle w3-hover-opacity">
				  <h4 style="color: blue;">Sudip Prasad Neupane </h4> <h4> Web Designer</h4><p>The current version of Kinmail website is <br> made by Diwash.</p>
				  <a href="https://www.facebook.com/diwash.ranabhat.3"><i class="fa fa-facebook-official w3-hover-opacity"></i></a> &nbsp;
	               <a href="https://www.instagram.com/"> <i class="fa fa-instagram w3-hover-opacity"></i>&nbsp;</a>  &nbsp;
	                <a href="https://www.snapchat.com"><i class="fa fa-snapchat w3-hover-opacity"></i></a>  &nbsp;
	                <a href="https://www.pinterest.com"><i class="fa fa-pinterest-p w3-hover-opacity"></i></a>  &nbsp;
	                <a href="https://www.twitter.com"><i class="fa fa-twitter w3-hover-opacity"></i></a>  &nbsp;
				  
				</div>
				<div class="w3-quarter">
				  <img src="image/Anukul.jpg"  style="width:200px ; height:200px;" class="w3-circle w3-hover-opacity">
				  <h4 style="color: blue;">Anukul Parajuli </h4> <h4> Web Developer</h4><p>The current version of Kinmail website is <br> made by Diwash.</p>
				  <a href="https://www.facebook.com/diwash.ranabhat.3"><i class="fa fa-facebook-official w3-hover-opacity"></i></a> &nbsp;
	               <a href="https://www.instagram.com/"> <i class="fa fa-instagram w3-hover-opacity"></i>&nbsp;</a>  &nbsp;
	                <a href="https://www.snapchat.com"><i class="fa fa-snapchat w3-hover-opacity"></i></a>  &nbsp;
	                <a href="https://www.pinterest.com"><i class="fa fa-pinterest-p w3-hover-opacity"></i></a>  &nbsp;
	                <a href="https://www.twitter.com"><i class="fa fa-twitter w3-hover-opacity"></i></a>  &nbsp;
				 
				</div>

				<div class="w3-quarter"> 
				  <img src="image/Diwas.jpg"  style="width:200px ; height:200px; " class="w3-circle w3-hover-opacity">
				   <br><h4 style="color: blue;" >Diwash Ranabhat </h4> <h4> Web Designer </h4></a> <p>The current version of Kinmail website is <br> made by Diwash.</p>
				   <a href="https://www.facebook.com/diwash.ranabhat.3"><i class="fa fa-facebook-official w3-hover-opacity"></i></a> &nbsp;
	               <a href="https://www.instagram.com/"> <i class="fa fa-instagram w3-hover-opacity"></i>&nbsp;</a>  &nbsp;
	                <a href="https://www.snapchat.com"><i class="fa fa-snapchat w3-hover-opacity"></i></a>  &nbsp;
	                <a href="https://www.pinterest.com"><i class="fa fa-pinterest-p w3-hover-opacity"></i></a>  &nbsp;
	                <a href="https://www.twitter.com"><i class="fa fa-twitter w3-hover-opacity"></i></a>  &nbsp;
				 
				</div>
				<div class="w3-quarter">
				  <img src="image/Kamal.jpg"  style="width:200px ; height:200px;" class="w3-circle w3-hover-opacity">
				  <h4 style="color: blue;">Kamal Shrestha </h4> <h4> Web Developer</h4><p>The current version of Kinmail website is <br>made by Diwash.</p>
				  <a href="https://www.facebook.com/diwash.ranabhat.3"><i class="fa fa-facebook-official w3-hover-opacity"></i></a> &nbsp;
	               <a href="https://www.instagram.com/"> <i class="fa fa-instagram w3-hover-opacity"></i>&nbsp;</a>  &nbsp;
	                <a href="https://www.snapchat.com"><i class="fa fa-snapchat w3-hover-opacity"></i></a>  &nbsp;
	                <a href="https://www.pinterest.com"><i class="fa fa-pinterest-p w3-hover-opacity"></i></a>  &nbsp;
	                <a href="https://www.twitter.com"><i class="fa fa-twitter w3-hover-opacity"></i></a>  &nbsp;
				</div>
			</div>

<br>
		
			

			<div class="row context">   
			   <div class=" container-fluid col-sm-4" style="margin-left: 25px; ">
			   		<div class="panel panel-primary">
			   		<div class="panel-heading" ><h3 style="text-align: center; font-family: arial;">CONTACT</h3></div>
                       <div class="panel-body">
			   			<div class=" container-fluid">
							<p>Contact us and we'll get back to you within 24 hours.</p>
							<p><span class="fa fa-map-marker"></span> Dhulikhel Nepal</p>
							<p><span class="fa fa-phone"></span>+977-9849858876</p>
						   	<a href="kinmail.com"><p><span class=" fa fa-envelope"></span> kinmail@gmail.com</p></a>
						</div>
						</div>
					</div>	
			   </div>
			   			<div class="col-sm-1"></div>

				 <div class="container container-fluid col-sm-5">
				   <div class="panel panel-primary " style="padding:0;">
				   	 <div class="panel-heading"><h3 style="text-align: center;">Contact Kinmail.com</h3></div>
				   	 	<div class="panel panel-body">
					      <div class="col-sm-6 form-group">
					          <input class="form-control" id="name" name="name" placeholder="Name" type="text" required>
				           </div>
				           	<div class="col-sm-6 form-group">
					          <input class="form-control" id="email" name="email" placeholder="Email" type="email" required>
					        </div>
					      </div>
					      <div class="col-sm-12 form-group">
					      	<textarea class="form-control" id="comments" name="comments" placeholder="Comment" rows="5"></textarea>
					      
					      </div>
					      <div class="row context">
					        <div class="col-sm-11 form-group">
					          <button class="btn btn-primary pull-right  fa fa-paper-plane" >Send </button> &nbsp; 
					      	</div>
					      </div>
				        </div>
			     </div>
			 </div>
</div>
<br><br><br>
	<footer class="w3-center w3-padding-64" style=" background: #f8f8f8">
  				<a href="#myPage" class="w3-button w3-light-grey"><i class="fa fa-arrow-up w3-margin-right"></i>To the top</a>
  			<div class="w3-xlarge w3-section">
  				<h2 style="color: black;text-align:center; font-family: Arial;">Keep in touch</h2>
	    			<a href="https://www.facebook.com"><i class="fa fa-facebook-official w3-hover-opacity"></i>&nbsp;Facebook</a> &nbsp;
	               <a href="https://www.instagram.com"> <i class="fa fa-instagram w3-hover-opacity"></i>&nbsp;Instagram</a>  &nbsp;
	                <a href="https://www.snapchat.com"><i class="fa fa-snapchat w3-hover-opacity"></i>&nbsp;Snapchat</a>  &nbsp;
	                <a href="https://www.pinterest.com"><i class="fa fa-pinterest-p w3-hover-opacity">&nbsp;Pinterest</i></a>  &nbsp;
	                <a href="https://www.twitter.com"><i class="fa fa-twitter w3-hover-opacity"></i>&nbsp;Twitter</a>  &nbsp;
  
 			</div>	
 			   </br>
 			   KinMail.com.np All rights reserved. 
 			   Contact : 9843390825
  
  
    </footer>
	</body>
</html>