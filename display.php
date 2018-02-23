<!DOCTYPE html>			
<html>
<head>
	<meta charset="utf-8" content = 'width=device-width,initial-scale=1.0,maximum-scale=1.0,user-scalable=0,shrink-to-fit=no' name='viewport'>
	<title>KinMail.com</title>
	
	<link rel="stylesheet" type="text/css" href="bootstrap.css">
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="stylesheet" type="text/css" href="main.js">
	<link rel="stylesheet" type="text/css" href="stylesheet1.css">
	<link rel="stylesheet" type="text/css" href="popper.min.js">
	<link rel="stylesheet" type="text/css" href="w3.css"> 
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap-glyphicons.css" rel="stylesheet">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<style type="text/css">
	
table, td, th {
    border: 1px solid black;
}

table {
    border-collapse: collapse;
    width: 100%;
}

th {
    height: 30px;
    padding: 5px;
    background-color: #0073e6;
   color: white;
}
</style>
</head>

	<body style="background-color: #d2d2d2;" id="myPage" data-spy="scroll" data-offset="50">




<?php session_start(); ?>

<?php

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
      			
				<li> <a href="about.php?hash=<?php echo $currentuser;?>"><span class="fa fa-info-circle"></span>&nbsp;About Us</a> </li>
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


<br>
	
	<?php 

	require "db1.php";
	


	//$categories=$_SESSION['categories'];
	$x=0;

	$selected_product=$_GET['ID'];

	// $conn=mysqli_connect('localhost','root','','products');


	$ss=1;
	while ($ss<13)
	 {
	 	if($ss==1) $categories="appliances";
	 	if($ss==2) $categories="baby, toys and kids";
	 	if($ss==3) $categories="beauty and health";
	 	if($ss==4) $categories="books and stationery";
	 	if($ss==5) $categories="computer and gaming";
	 	if($ss==6) $categories="home and living";
	 	if($ss==7) $categories="mens fashion";
	 	if($ss==8) $categories="other categories";
	 	if($ss==9) $categories="phones and tablets";
	 	if($ss==10) $categories="sports and travels";
	 	if($ss==11) $categories="tv, audio and cameras";
	 	if($ss==12) $categories="womens fashion";

		
				$query="SELECT * FROM `$categories` WHERE 1";
				$result=mysqli_query($conn,$query);


				 while ($row=mysqli_fetch_array($result))
				   {
				     			 
				   		if($row['title']==$selected_product)
				   		{
				   			$s_categories=$categories;
				   			  $name_product=$row['title'];
				   			  $price=$row['price'];
				   			  $desc=$row['Description'];  
				   			  $image= $row['imagepath1'];
				   			  $hash=$row['hash'];
				   			  $email = $row['email'];
				   			  $negotiable=$row['negotiable'];
				   			  $productcondition=$row['productcondition'];
				   			  $usedfor=$row['usedfor'];
				   			  $warrantyperiod=$row['warrantyperiod'];
				   			  $warrantyincludes=$row['warrantyincludes'];
				   			  $homedelivery=$row['homedelivery'];

				   		}
				   }
				   $ss=$ss+1;
	 }   

	 			$s_recommend=$s_categories;
	 			$query2="SELECT * FROM `$s_recommend` WHERE 1";
				$result2=mysqli_query($conn,$query2);


				 while ($row2=mysqli_fetch_array($result2))
				   {

							$b[$x]=$row2['title'];
					   		$a[$x]=$row2['imagepath1'];
					   		$x=$x+1;
				   }

				 



		 ?>

<div class="row">
	    <div class="col-sm-1"></div>
		    <div class="col-sm-5">
	            <div class="container-fluid">
					<div class="panel panel-primary">
						<div class="panel-heading"><h4>Selected Item</h4></div>
						<div class="panel-body">
						    	<div class="center">
										<a href='<?= $image ?>' target="_blank">
										<img src='<?= $image ?>'></a>
										<div class="desc">

											<?php 

												echo "<b><u><p align='left'>General Details:</u></b><br>";
												echo "<b>Name:</b>";echo $name_product;
												echo "<br>";
												echo "<b>Ad Post Date:</b>";echo "Not Added";echo "<br>";

												

												echo "<br><br>";
												echo"<u><b>Seller Details</b></u><br>";
												echo "<b>Sold By:</b>";echo $email;;

												echo "<br><br><br>";
												echo"<u><b>Pricing Details</b></u><br>";

												echo "<b>Price:</b>";echo $price;echo "<br>";
												echo "<b>Price Negotiable:</b>";echo $negotiable;echo "<br>";
												echo "<b>Used For(year or month):</b>";echo $usedfor;echo "<br>";





												echo "<br><br>";
												echo"<u><b>Delivery & Warranty Details</b></u><br>";
													echo "<b>Home Delivery:</b>";echo $homedelivery;echo "<br>";

													echo "<b>Warranty Period:</b>";echo $warrantyperiod;echo "<br>";
													echo "<b>Warranty Includes:</b>";echo $warrantyincludes;echo "<br>";


										 ?>




										</div>
								</div>
								<?php 

									if (!isset($_GET['hash']))
									{
										$c="";
									}

										else
								 $c=$_GET['hash'];
								$_SESSION['user_hash']= $c;
								


								if (empty($_SESSION['email']))
									{
										$b_email="";
									}

										else
								 $b_email=$_SESSION['email'];
								 ?>
								<form action="transaction.php?hash=<?php echo $c;?>&categories=<?php echo $s_categories;?>&ID=<?php echo $name_product;?>" method="post">

							 <input type="hidden" name="buyer_email" value="<?php echo $b_email;?>">
								<input type="hidden" name="adder_email" value="<?php echo $email;?>">
							 <button  type="submit" class="btn btn-primary" role="button">Make a deal</button>
						</form>
						</div>	
			        </div>	
			    </div>
		    </div>


		<div class="col-sm-6">
			<div class="right">
				<div class="container-fluid">
					<div class="panel panel-primary">
						<div class="panel panel-heading" style="text-align: center;"><h4>Recommended</h4></div>
						<div class="panel panel-body">
							<?php 
							    $p=rand(0,$x-1);
							    $q=rand(0,$x-1);
							    while($p==$q){$q=rand(0,$x-1);}
							    $r=rand(0,$x-1);
							    while($p==$r || $q==$r){$r=rand(0,$x-1);}
							    $s=rand(0,$x-1);
							    while ($p==$s || $q==$s||$r==$s){$s=rand(0,$x-1);}
							    $t=rand(0,$x-1);
							    while ($p==$t || $q==$t||$r==$t||$s==$t){$t=rand(0,$x-1);}
							    $u=rand(0,$x-1);
							    while ($p==$u || $q==$u||$r==$u ||$s==$u||$t==$u){$u=rand(0,$x-1);}
							?>
								<a href="display.php?ID=<?php echo $b[$p]?>&hash=<?php echo $currentuser;?>">
								    <img  src='<?= $a[$p] ?>'>
								</a>


								<a href="display.php?ID=<?php echo $b[$q]?>&hash=<?php echo $currentuser;?>">
								    <img src='<?= $a[$q] ?>'>
								</a>
								<a href="display.php?ID=<?php echo $b[$r]?>&hash=<?php echo $currentuser;?>">
								    <img src='<?= $a[$r] ?>'>
								</a>
								<a href="display.php?ID=<?php echo $b[$s]?>&hash=<?php echo $currentuser;?>">
								    <img src='<?= $a[$s] ?>'>
								</a>
								<a href="display.php?ID=<?php echo $b[$t]?>&hash=<?php echo $currentuser;?>">
								    <img src='<?= $a[$t] ?>'>
								</a>
								<a href="display.php?ID=<?php echo $b[$u]?>&hash=<?php echo $currentuser;?>">
								    <img src='<?= $a[$u] ?>'>
								</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>	
</div>

<a href="">More Ads of this Category</a> <a href="">More Ads From this Seller</a>
<a href="rating_form.php?ID=<?php echo $selected_product;?>&hash=<?php echo $currentuser?>">Rate this Ad</a>

<br><br><br><br><br><br>


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