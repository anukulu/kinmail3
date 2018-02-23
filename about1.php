<!DOCTYPE html>			
<html>
<head>
	<meta charset="utf-8" content = 'width=device-width,initial-scale=1.0,maximum-scale=1.0,user-scalable=0,shrink-to-fit=no' name='viewport'>
	<title>KinMail.com</title>
	
	<link rel="stylesheet" type="text/css" href="bootstrap.css">
	<link rel="stylesheet" type="text/css" href="main.css">
	<link rel="stylesheet" href="w3.css"> 
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap-glyphicons.css" rel="stylesheet">
	 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>

<body style="background-color: #fdfefe" id="myPage" data-spy="scroll" data-target=".nav" data-offset="60">



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
  			
<div class="row">
	  			<div class="conatainer-fluid col-sm-1"></div>
	  			<div class="container-fluid col-sm-10"> 
	  			
	      		<div class="panel panel-default" style="padding: 0;background-color:#f5edeb;">
	     		
	  			<div class="panel-heading"><h2 style="background-color: lightblue; text-align: center;"> About Our Site</h2></div>
	  			  			<nav class="navbar navbar-default">
	<div class="container-fluid">
		
			 
		
		
			 
		<div class="collapse navbar-collapse" id="myNavbar">
		 	<ul class="nav navbar-nav ">
      			<li> <a href="#abs"><span></span>Abstract&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;</a></li>
      			<li> <a href="#back"><span></span>Background&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;</a></li>
      			<li> <a href="#fea"><span></span>Features&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;</a> </li>
				<li> <a href="#sing"><span></span>Significance&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;</a></li>
				
				
				<li> <a href="#fp"><span></span>Future Plans&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;</a> </li>
				<li> <a href="#team"><span></span>Our Team</a> </li>

			</ul>
		
		
		</div> 
	</div>
 
			<hr class="featurette-divider">
      <div class="row featurette">
      		<div class="col-md-5 ">
      			  	<img class="featurette-image img-fluid mx-auto" src="a4.jpg" alt="image" width="97%" style="border-radius: 10px;margin-left: 20px; margin-right: 10px;">
					</div>
        			<div class="col-md-7">
						<p class="q11" style="font-size: 20px; text-align: justify;">The advancement of technology is moving the world towards an easier and friendlier environment  KinMail.com is an ecommerce website connecting buyers and sellers across the country to seek, buy and sell products online conveniently for free. We the developers at Kinmail.com believe that internet is a great promotional vehicle and communication channel for connecting buyers and sellers. </p>
		  			</div>
		  		</div>	
	  				


     	

 <hr class="featurette-divider">
     
      <div id="back">
      <h2 class="hed2" style="color: #17202a;background-color: lightblue;border-radius: 4px;  text-align: center;">More...</h2>
      <div class="row featurette">
        <div class="col-md-7">
          <p class="q12" style="font-size: 20px; text-align: justify">The ecommerce industry is moving forward with a high pace which is evident from the user
          friendly online marketplaces that can be seen on the internet nowadays. The development of
          websites since the past has been extensive and it is one of the most heavily used source for
          earning money and information retrieval. With each upcoming website, the layout, programming
          and management system is getting better. 
          </p>
        </div>
        <div class="col-md-5">
          <img class="featurette-image img-fluid mx-auto" src="a22.jpg" alt="image" width="98%" style="border-radius:10px;margin-right:30px;">
        </div>
      </div>
  </div>

      <hr class="featurette-divider">

      <div class="row featurette">
      	<div class="col-md-5 pull-md-7">
          <img class="featurette-image img-fluid mx-auto" src="a44.jpg" alt="image" width="100%" style="border-radius: 10px;margin-left: 10px;">
        </div>
        <div class="col-md-7 push-md-5">
          <p class="q11" style="font-size: 20px; text-align: justify">The world in the internet is only advancing day by day and the e-commerce websites are
          becoming more reliable. The languages such as PHP, JavaScript, CSS, html is at the core of
          building websites. The mentioned languages make the websites more responsive to user inputs
          and interactive because nobody likes a website with bad layout and has slow response time. 
          has been influenced by famous e-commerce websites such as<a> hamrobazaar.com</a> and <a>daraz.com</a></p>
        </div>
    </div>

      <hr class="featurette-divider">
      <div id="fea">
       <h2 class="hed2" style="color: #17202a;background-color: lightblue;border-radius: 4px; text-align: center;">Features</h2>
       <div class="row featurette">
      	<div class="col-md-5 pull-md-7">
          <img class="featurette-image img-fluid mx-auto" src="a22.jpg" alt="image" width="100%" style="margin-left: 10px;border-radius: 10px;">
        </div>

        <div class="col-md-7 push-md-5">
        	<p class="q11" style="font-size: 20px; text-align: justify">
        		This website provides a user login system for the users to register themselves on the website and then put ads related to their products for free .
				Seller and the buyer do not transact through the website but by meeting each other in person. The This website contains comment sections so that the users can discuss about the product before they buy it. 
				Website also contains messaging platform so that the buyers can contact and communicate with the seller beforehand. 
				The users can rate other users upon the legitimacy of the products they are selling.It will feature the products and users whose webpage has been visited the most on the homepage.

        	</p>
        </div>
    </div>
</div>

      <hr class="featurette-divider">
      <div id="sing">
       <h2 class="hed2" style="color: #17202a;background-color: lightblue;border-radius: 4px; text-align: center;">Significance</h2>
      <div class="row featurette">
        <div class="col-md-5">
       
          <p class="q11" style="font-size: 20px; text-align: justify"> <br>Internet marketing is important because it aligns with the way consumers make purchasing
          decisions. Internet marketing enables persona to build relations with customers and prospects
          through regular, low-cost personalized communication, reflecting the move away from mass
          2
          marketing. In the context of KU students, online marketing websites of their respective needs
          save their time and effort. It also solves the problem of collecting academic resources such as
          study notes.</p>
        </div>
        <div class="col-md-7">
          <img class="featurette-image img-fluid mx-auto" src="a1.jpg" alt="image" width="98%" style="border-radius: 20px;margin-right:50px;">
        </div>
      </div>
</div>
      
					
					<br>
					<div class="w3-row-padding">
				  	<div class="w3-third">
				    <h3 style=" background-color: lightblue;border-radius: 4px;"><span class="fa fa-graduation-cap"></span>Academic aspect:</h3> <p class="q11">Kathmandu University contains a large population of students a due to the lack of interaction with each other. Kinmail.com helps them to find their academic material requirements with ease along with building the connection between the students.</p>		  
					</div>

				  <div class="w3-third">
				    <h3 style=" background-color: lightblue;border-radius: 4px;"><span class="fa fa-money"></span>Economic Aspect:</h3> <p class="q11">Marketing products on KinMail.com costs less than marketing the same
					product through a physical retail outlet. One does not have the recurring costs of property rental
					and maintenance.</p>
				  </div>

				  <div class="w3-third">
				    <h3 style=" background-color: lightblue;border-radius: 4px;"><span class="fa fa-male"></span>Social Aspect:</h3><p class="q11">People online meet each other in person to exchange products making their social
					relation stronger. One observes the products sold on the website and then finds a suitable seller
					who sells the product of her/his interest.</p></p>
				  </div>
				</div>
				 <div id="fp">
				 <h2 class="hed2" style="color: #17202a;background-color: lightblue;border-radius: 4px; text-align: center;">Future Plans</h2>
					 <div class="row featurette">
      	<div class="col-md-5 pull-md-7">
          <img class="featurette-image img-fluid mx-auto" src="a44.jpg" alt="image" width="100%" style="border-radius: 10px;margin-left: 10px;">
        </div>

        <div class="col-md-7 push-md-5">
        	<p class="q11">
        		To make Kinmail.com Great Again !!!!!!!!

        	</p>
        </div>
    </div>
</div>
<hr class="featurette-divider">

					<div id="team">
					<h1 style="color: #17202a;background-color: lightblue;border-radius: 4px;margin: 10px; text-align: center;"> <span class="fa fa-users"></span>Our Team </h1>
<div class="container-fluid">
			<div class="w3-row w3-padding-large"><br>

				<div class="w3-quarter">
				  <img src="image/sudip.jpg" style="width:200px  ; height:200px;" class="w3-circle w3-hover-opacity">
				  <h4 style="color: blue;">Sudip Prasad Neupane </h4> <h4> Web Designer</h4>
				  <a href="https://www.facebook.com/diwash.ranabhat.3"><i class="fa fa-facebook-official w3-hover-opacity"></i></a> &nbsp;
	               <a href="https://www.instagram.com/"> <i class="fa fa-instagram w3-hover-opacity"></i>&nbsp;</a>  &nbsp;
	                <a href="https://www.snapchat.com"><i class="fa fa-snapchat w3-hover-opacity"></i></a>  &nbsp;
	                <a href="https://www.pinterest.com"><i class="fa fa-pinterest-p w3-hover-opacity"></i></a>  &nbsp;
	                <a href="https://www.twitter.com"><i class="fa fa-twitter w3-hover-opacity"></i></a>  &nbsp;
				  
				</div>
				<div class="w3-quarter">
				  <img src="image/Anukul.jpg"  style="width:200px ; height:200px;" class="w3-circle w3-hover-opacity">
				  <h4 style="color: blue;">Anukul Parajuli </h4> <h4> Web Designer</h4>
				  <a href="https://www.facebook.com/diwash.ranabhat.3"><i class="fa fa-facebook-official w3-hover-opacity"></i></a> &nbsp;
	               <a href="https://www.instagram.com/"> <i class="fa fa-instagram w3-hover-opacity"></i>&nbsp;</a>  &nbsp;
	                <a href="https://www.snapchat.com"><i class="fa fa-snapchat w3-hover-opacity"></i></a>  &nbsp;
	                <a href="https://www.pinterest.com"><i class="fa fa-pinterest-p w3-hover-opacity"></i></a>  &nbsp;
	                <a href="https://www.twitter.com"><i class="fa fa-twitter w3-hover-opacity"></i></a>  &nbsp;
				 
				</div>

				<div class="w3-quarter"> 
				  <img src="image/Diwas.jpg"  style="width:200px ; height:200px; " class="w3-circle w3-hover-opacity">
				   <h4 style="color: blue;" >Diwash Ranabhat </h4> <h4> Web Designer </h4></a> 
				   <a href="https://www.facebook.com/diwash.ranabhat.3"><i class="fa fa-facebook-official w3-hover-opacity"></i></a> &nbsp;
	               <a href="https://www.instagram.com/"> <i class="fa fa-instagram w3-hover-opacity"></i>&nbsp;</a>  &nbsp;
	                <a href="https://www.snapchat.com"><i class="fa fa-snapchat w3-hover-opacity"></i></a>  &nbsp;
	                <a href="https://www.pinterest.com"><i class="fa fa-pinterest-p w3-hover-opacity"></i></a>  &nbsp;
	                <a href="https://www.twitter.com"><i class="fa fa-twitter w3-hover-opacity"></i></a>  &nbsp;
				 
				</div>
				<div class="w3-quarter">
				  <img src="image/Kamal.jpg"  style="width:200px ; height:200px;" class="w3-circle w3-hover-opacity">
				  <h4 style="color: blue;">Kamal Shrestha </h4> <h4> Web Designer</h4>
				  <a href="https://www.facebook.com/diwash.ranabhat.3"><i class="fa fa-facebook-official w3-hover-opacity"></i></a> &nbsp;
	               <a href="https://www.instagram.com/"> <i class="fa fa-instagram w3-hover-opacity"></i>&nbsp;</a>  &nbsp;
	                <a href="https://www.snapchat.com"><i class="fa fa-snapchat w3-hover-opacity"></i></a>  &nbsp;
	                <a href="https://www.pinterest.com"><i class="fa fa-pinterest-p w3-hover-opacity"></i></a>  &nbsp;
	                <a href="https://www.twitter.com"><i class="fa fa-twitter w3-hover-opacity"></i></a>  &nbsp;
				</div>
			</div>

<br>				
					

		<footer class="w3-center w3-padding-64" style="background-color: #f8f8f8;">
  				<a href="#myPage" class="w3-button w3-light-grey"><i class="fa fa-arrow-up w3-margin-right"></i>To the top</a>
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
      }, 900, function(){
   
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
</body>
</html>