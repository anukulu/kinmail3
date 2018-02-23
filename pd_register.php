<?php
	require "db1.php";
	session_start();


	if($_SERVER['REQUEST_METHOD'] == 'POST')
	{
		if(isset($_POST['submit']))
		{
			$name = $_POST['name'];
			$price = $_POST['price'];
			$hash = md5(rand(0,1000));
			$email = $_SESSION['email'];
			$desc=$_POST['desc'];
			$categories=$_POST['categories'];
			$negotiable=$_POST['pricenego'];
			$productcon=$_POST['condition'];
			$usedfor=$_POST['used'];
			$warrantyperiod=$_POST['warrp'];
			$warrantyincludes=$_POST['warr'];
			$homedelivery=$_POST['home'];
			$keywords=$name.$categories;
			$imagepath3="NULL";
			$imagepath1="images/".$_FILES['image1']['name'];
			$imagepath2="images/".$_FILES['image2']['name'];
			$user_hash1=$_SESSION['hash'];

		
move_uploaded_file( $_FILES["image1"]["tmp_name"], 'images/' . $_FILES["image1"]["name"]);


$query9= "INSERT INTO `$categories`(title,price,Description,email,hash,negotiable,productcondition,usedfor,warrantyperiod,warrantyincludes,homedelivery,imagepath1,imagepath2,imagepath3,keywords) VALUES ('$name', '$price','$desc','$email', '$hash', '$negotiable','$productcon','$usedfor','$warrantyperiod','$warrantyincludes','$homedelivery','$imagepath1','$imagepath2','$imagepath3','$keywords')";
			 
			
			if(mysqli_query($conn,$query9))
			{
				
				$_SESSION['pdmessage'] = "The product has been added to the database.";
				header("location:user_product.php?hash=".$hash."&categories=".$categories."&user_hash=".$user_hash1);
			}
			
		}
	}
?>
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
	  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  		<script type="text/javascript" src="pic_upload.js"></script>


  												<script>
														var loadFile1 = function(event)
													 {
												   	 	var output1 = document.getElementById('output1');
												    	output1.src = URL.createObjectURL(event.target.files[0]);
												     };
												     	var loadFile2 = function(event)
													 {
												   	 	var output2 = document.getElementById('output2');
												    	output2.src = URL.createObjectURL(event.target.files[0]);
												     };
												     
												</script>

</head>

<body style="background-color: #d2d2d2;" id="myPage" data-spy="scroll" data-offset="50">


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

<div class="container-fluid">
	<div class="col-sm-2"></div>
	<div class="col-sm-8">
		<div class="panel panel-primary">
			<div class="panel-heading"><h2 style="color: white;">Upload a photo of product  &nbsp;&nbsp;&nbsp;  Register product here.</h1></div>
				<div class="panel-body">
			<form class="form" method="post" acction='pd_register.php' enctype="multipart/form-data">
					<div class="col-sm-6">
						<div class="container-fluid"  >
							<img id="output1" width="300"  height="300" align="right" />
				           	<input type="file" name=" image1" id="image1" accept="image/*" onchange="loadFile1(event)">
							<img id="output2" width="300"  height="300" align="right" />	
							<input type="file" name="image2" id="image2" accept="image/*" onchange="loadFile2(event)">
	          			</div>
					</div>	
					<div class="col-sm-6">
						
	           
	                      	<div class="form-group">
		                        <label class="control-label" for="name" required>Name:</label>
		                        <div class="">
		                            <input type="text" class="form-control" name="name" id="name"  placeholder="Name of product" required />
		                            <?php 	
		              					if(isset($_POST['name']) && $_POST['name'] == null)
		              						echo "<span class = 'text-danger'>You cannot leave this empty.</span>";
		        				    ?>
		                        </div>
	                        </div>
	             			<div class="form-group">
		                        <label class="control-label" for="ownname">Owner Name:</label>
		                        <div class="">
		                            <input type="text" class="form-control" name="ownname" id="ownname"  placeholder="Name of Owner" required />
		                        </div>
	                        </div>

	                        <div class="form-group">
		                        <label class="control-label" for="desc">Description of Product:</label>
		                        <div class="">
		                            <textarea type="text" class="form-control" name="desc" id="desc"  placeholder="Detail info about your product." > </textarea>
		                        </div>
	                        </div>

	                    <div class="row">
		                   		
		                   		<div class="col-md-6">
			                   		<div class="form-group">
			                   			<label class="control-label" for="price">Price:</label>
			                   			<div class="">
			                   				<input type="number" class="form-control" name="price" placeholder="Price:" required >
			                   			</div>
			                   		</div>
		                   		</div>
		                   		<div class="col-sm-6">
			                   		<div class="form-group">
			                   			<label class="control-label" for="pricenego">Price Negotiable:</label>
			                   			<div class="">
			                   				<input class="form-control" list="pricenego" name="pricenego" placeholder="Yes/No" required>
			                   				<datalist id="pricenego">
			                   					<option value="Fixed Price"></option>
												<option value="Yes"></option>
			                   				</datalist>
			                   			</div>
			                   		</div>
		                   		</div>
	                    </div>
	                    <div class="row">
		                    <div class="col-sm-6">	
		   						<div class="form-group">
		                   			<label class="control-label" for="condition">Condition:</label>
		                   			<div class="">
		                   				<input class="form-control" list="condition" name="condition" placeholder="Condition" required>
		                   				<datalist id="condition">
		                   					<option value="Brand New(Not Used)">
											<option value="Like New(Used Few Times)">
											<option value="Excellent">
											<option value="Good/Fair">	
		                   				</datalist>
		                   			</div>
		                   		</div>
							</div>

							<div class="col-sm-6">
		                   		<div class="form-group">
		                   			<label class="control-label" for="used">Used for(Months):</label>
		                   			<div class="">
		                   				<input type="text" class="form-control" name="used" id="used" placeholder="Used for:" >
		                   			</div>
		                   		</div>
		                   	</div>
		                </div>

		            <div class="row">
		                <div class="col-sm-6">
	                   		<div class="form-group">
	                   			<label class="control-label" for="home">Home delivery:</label>
	                   			<div class="">
	                   				<input class="form-control" list="home" name="home">
	                   				<datalist id="home">
										<option value="YES">
										<option value="NO">
											
									</datalist>
	                   			</div>
	                   		</div>
	                   	</div>
						<div class="col-sm-6">	                   		
							<div class="form-group">
	                   			<label class="control-label" for="warr">Warranty type:</label>
	                   			<div class="">
	                   				<input class="form-control" list="warr" name="warr">
	                   				<datalist id="warr">
										<option value="Dealer/Shop">
										<option value="Manufacturer">
										<option value="No Warranty">
					
											
									</datalist>
	                   			</div>
	                   		</div>
						</div>
					</div>

						<div class="form-group">
	                   			<label class="control-label" for="used">Warranty Period:</label>
	                   			<div class="">
	                   				<input type="text" class="form-control" name="warrp" placeholder="Warranty period in year:">
	                   			</div>
	                   		</div>



	                   		<div class="form-group">
	                   			<label class="control-label" for="categories">Category:</label>
	                   			<div class="">
	                   				<input class="form-control" list="categories" name="categories">
	                   				<datalist id="categories">
	                   					<option value="appliances"></option>
										<option value="baby,toys and kids"></option>
										<option value="beauty and health"></option>
										<option value="books and stationery"></option>
										<option value="mens fashion" > </option>
										<option value="womens fashion" > </option>
										<option value="tv, audio and cameras" > </option>
										<option value="phones and tablets" > </option>
										<option value="home and living" > </option>
										<option value="other categories" > </option>
										<option value="sports and travels" > </option>
										<option value="computer and gaming" > </option>
	                   				</datalist> <br>
	                   				<button type="submit" name="submit"  class="btn btn-primary">Submit</button>
	                   				</div>
	                   			</div>
	                   			</div>
	                   		</div>
	                     
	                  </form>
	                </div>  

			</div>
		</div>
	</div>
</div>

</body>
</html>