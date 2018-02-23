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
</head>

<body style="background-color: #d2d2d2;" id="myPage" data-spy="scroll" data-offset="50">

<nav class="navbar navbar-default">
    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <?php
            	session_start();
             $currentuser=$_SESSION['hash'];


	




              ?>

             <a class="navbar-brand" " href="index.php?hash=<?php echo $currentuser;?>"><span class="fa fa-home"></span>&nbsp;KinMail Home</a>
        </div>
        <div class="row">
             
        <div class="collapse navbar-collapse" id="myNavbar">
            <ul class="nav navbar-nav navbar-right">
                <li> <a href="about1.php?hash=<?php echo $currentuser;?>"><span class="fa fa-info-circle"></span>&nbsp;About Us</a> </li>
                <li> <a href="help.php?hash=<?php echo $currentuser;?>"><span class="fa fa-question-circle"></span>&nbsp;Help</a> </li>
                <li> <a href="contact.php?hash=<?php echo $currentuser;?>"><span class="fa fa-phone-square"></span>&nbsp;Contact Us</a> </li>
                
                <li> <a href="logout.php"><span class="glyphicon glyphicon-log-out"></span>&nbsp;Log out</a> </li>


            </ul>
        </div>

       <?php include 'searchphp.php'; ?>

    </div>
</nav>
<div class="container-fluid">
	<div class="col-sm-4">
		<div class="panel panel-primary">
		<div class="panel-heading">
				<?php
				
					
					require "db.php";

					if($_SESSION['active'] == 0)
					{
						$_SESSION['message'] = "This account has not been verified yet.
													Please verify your account to continue.";
						header("location:error.php");
					}
					else
					{
						echo "<h1 style='color: white; margin:0;'>Hello ".$_SESSION['first_name']."</h1>";
						if(isset($_POST['upload']))
						{

							$target = "images/".$_FILES['image']['name'];
							$image = $_FILES['image']['name'];

							$email = $_SESSION['email'];
							$first_name = $_SESSION['first_name'];

							$query = "UPDATE users SET avatar='$image' WHERE email='$email' AND first_name='$first_name'";
							$result = $conn->query($query);

							if(move_uploaded_file($_FILES['image']['tmp_name'], $target))
							{
								$_SESSION['message'] = "Your file was uploaded successfully.";
							}
							else
							{
								$_SESSION['message'] = "The upload was unsuccessful.";
							}
						}
					}
				?>
			</div>
				<div class="panel-body">


				<?php

					$email = $_SESSION['email'];
					$first_name = $_SESSION['first_name'];
					$last_name=$_SESSION['last_name'];

					$query = "SELECT * FROM users WHERE email ='$email' AND first_name ='$first_name'";
					$result = $conn->query($query);
					$user =$result->fetch_assoc();
					$contact = $user['contact'];

					echo "<div id='img_div'>";
					if (!empty($user['avatar']))
					{
						echo "<img src='profile_images/".$user['avatar']."' height='100' width='100' />";
					}
					else
					{
						echo "<img src='profile_images/default.jpg' height='100' width='100'/>";
					}
					echo "</div>";

					echo "<h6><b>Name:</b> $first_name $last_name</h6>";
					;
					echo "<h6><b>Contact number:</b> $contact</h6>";
					echo "<h6><b>E-mail:</b> $email</h6>";
					//echo "<a href='editinfo.php'> <span class='btn btn-primary'>Edit profile</span</a>";

				?>

				<a href="editinfo.php?hash=<?php echo $currentuser;?>"><span class="btn btn-primary fa fa-info-circle">&nbsp;Edit Info</span></a>
				<a href="changepassword.php?hash=<?php echo $currentuser;?>"><span class="btn btn-primary fa fa-privacy">&nbsp; Change Password</span></a>
				
			</div>

		</div>
	</div>

<div class="container">
	<div class="col-sm-8">
		<div class="panel panel-primary">
			<div class="panel-heading"><h3 style="color: white;">My Products</h3></div>
				<div class="panel-body">
				<div id="my products">
						<?php
						//in this section we show the links of the products that the user has added.


	require "db1.php";

	$email = $_SESSION['email'];

	$x=0;
	$ss=1;
	$_count = 1; 
	$reg_products = array();
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

		
				$query="SELECT * FROM `$categories` WHERE email='$email'";
				$result=mysqli_query($conn,$query);


				 while ($row=mysqli_fetch_array($result))
				   {
				   			$s_categories=$categories;
				   			  $name_product=$row['title'];
				   			  $hash=$row['hash'];
				   			  $reg_products[$_count] = $s_categories.",".$name_product.",".$hash; 
				   			  $_count =$_count+1;
				   	}
				   $ss=$ss+1;
				   $_count =  $_count+1;
	 }   


						$number = sizeof($reg_products);
						if($number == 1)
						{
							echo "You have ".$number." product registered. <br /><br />";
						}
						else
						{
							echo "You have ".$number." products registered. <br />";	
						}


						foreach($reg_products as $x=>$x_val)
						{
						
							echo "<a href='chatbox.php?hash=$currentuser&categories=".explode(",", $x_val)[0]."&ID=".explode(",", $x_val)[1]."' style='text-decoration:none; '>Name: ".explode(",", $x_val)[1]."</a>";?>

								<a href="manual_delete.php?hash=<?php echo explode(",", $x_val)[1];?>">	<button type="submit">Delete</button></a> <?php

									
    					
									


echo "<br>";
echo "<br>";

						}
						//echo "<a href='manual_delete.php?hash=".$name_product."><button>Delete</button></a>";

						echo "<br />";
						?>

		</div>
			<a href="pd_register.php?hash=<?php echo $currentuser;?>"><button class="btn btn-primary">Register a product</button></a>
			<!-- <div id="products_available">
				<?php //require "available.php";?>
			</div> -->
			<div id="requests_made">
				<?php require "requests.php"; echo "<br />";?>	
			</div>
			<div id="offers_received">
				<?php require "offers.php"; ?>
			</div><br />
			
			</div>

	</div>
	</div>
	</div>
	</div>

 <br><br><br><br><br>
	

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

<script>
	
	 $(document).ready(function(){
	     // Add smooth scrolling to all links in navbar + footer link
	     $(".navbar a, footer a[href='#myPage']").on('click', function(event) {
	    // Make sure this.hash has a value before overriding default behavior
	    if (this.hash !== "") {
	      // Prevent default anchor click behavior
	      event.preventDefault();

	      // Store hash
	      var hash = this.hash;

	      // Using jQuery's animate() method to add smooth page scroll
	      // The optional number (900) specifies the number of milliseconds it takes to scroll to the specified area
	      $('html, body').animate({
	        scrollTop: $(hash).offset().top
	      }, 1000, function(){
	   
	        // Add hash (#) to URL when done scrolling (default click behavior)
	        window.location.hash = hash;
	      });
	    } // End if
	      });
	  
	     $(window).scroll(function() {
	    $(".slideanim").each(function(){
	      var pos = $(this).offset().top;

	      var winTop = $(window).scrollTop();
	        if (pos < winTop + 600) {
	          $(this).addClass("slide");
	        }
	    });
	    });
    })
</script>

<script >
	$('.carousel[data-type="multi"] .item').each(function(){
  var next = $(this).next();
  if (!next.length) {
    next = $(this).siblings(':first');
  }
  next.children(':first-child').clone().appendTo($(this));
  
  for (var i=0;i<2;i++) {
    next=next.next();
    if (!next.length) {
    	next = $(this).siblings(':first');
  	}
    
    next.children(':first-child').clone().appendTo($(this));
  }
  });
</script>
</body>
</html>
