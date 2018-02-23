
<?php 

session_start();
				$search=$_GET['searchtext'];
				
				$con=mysqli_connect('localhost','root','','products');

				$se=1;
				$t=0;

while($se<13){

	if($se==1) $categories="appliances";
 	if($se==2) $categories="baby, toys and kids";
 	if($se==3) $categories="beauty and health";
 	if($se==4) $categories="books and stationery";
 	if($se==5) $categories="computer and gaming";
 	if($se==6) $categories="home and living";
 	if($se==7) $categories="mens fashion";
 	if($se==8) $categories="other categories";
 	if($se==9) $categories="phones and tablets";
 	if($se==10) $categories="sports and travels";
 	if($se==11) $categories="tv, audio and cameras";
 	if($se==12) $categories="womens fashion";

				$query9="SELECT * FROM `$categories` WHERE title LIKE '%$search%' OR keywords LIKE'%$search%'";
				$result8=mysqli_query($con,$query9);


		 while ($row=mysqli_fetch_array($result8,MYSQLI_ASSOC))
		{
			$r[$t]=$row['title'];
			$i[$t]=$row['imagepath1'];
			$t=$t+1;
		}
		$se=$se+1;
		}



 ?>


<!DOCTYPE html>			
<html>
<head>
	<meta charset="utf-8" content = 'width=device-width,initial-scale=1.0,maximum-scale=1.0,user-scalable=0,shrink-to-fit=no' name='viewport'>
	<title >Search results</title>
	
	<link rel="stylesheet" type="text/css" href="bootstrap.css">
	<link rel="stylesheet" type="text/css" href="main.js">
	<link rel="stylesheet" type="text/css" href="stylesheet1.css">
	<link rel="stylesheet" type="text/css" href="popper.min.js">
	<link rel="stylesheet" type="text/css" href="w3.css"> 
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap-glyphicons.css" rel="stylesheet">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>

<body style="background-color: #d2d2d2;" id="myPage" data-spy="scroll" data-offset="50">


<?php 



	
	if(!isset($_GET['hash']) || $_GET['hash'] == null)
	{	
		$active=0;
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
	$_SESSION['searchuser']=$currentuser;
	

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
												      <li><a href="logout.php">Log out</a></li>
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


	<style type="text/css">
		

		.results{
			left: 50%;
			width:50px;
			height: 100px;
		}
		.results img{
			border: 3px;
			width:23%;
			padding: 8px;
			margin: 5px;
			border: px solid grey;
			}
		.results img:hover
		{
			border: 2.3px solid green;
		}
	</style>
<div class="row">
	<div class="results">
		<div class="container container-fluid ">
			<div class="col-sm-2"></div>
			<div class="col-sm-10" style="align: center;">	
				<div class="panel panel-primary">
					<div class="panel-heading"><h3 style="color: white; font-size: 35px">Search results</h3></div>
						<div class="panel-body">
						<br><br><br>
				<div class=" container-fluid col-sm-12" style="text-align: center; color: red; font-size: 40px;  ">	
						<?php 

							if($t==0){echo "Ooooooops  Sorry No Results....!! Try searching for different products..";}


							$a=0;
							while ($a!=($t)) { ?>

									<a href="display.php?ID=<?php echo $r[$a]?>&hash=<?php echo $currentuser;?>">
								    <img src='<?= $i[$a] ?>'></a>
							 


							 <?php $a=$a+1;

						} ?> <br>

						<a href="index.php"> <span class="btn btn-primary fa fa-home" style="font-size: 20px;"> &nbsp; Back to home page</span></a>
						
				</div>  
			</div>		
		</div>
		</div>
    </div>

</div>
</div>x
 <br>
<br>


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