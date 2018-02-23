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


<body style="background-color: white">

<nav class="navbar navbar-default" style="margin:0;border:0;box-shadow: none;border-radius:0;	">
	<div class="container-fluid">
		<div class="navbar-header">
			<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
			 <a class="navbar-brand" " href="index.php">KinMail Home</a>
		</div>	 
		<div class="collapse navbar-collapse" id="myNavbar">
		 	<ul class="nav navbar-nav navbar-right">
      			<li><a href="reg.php"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
				<li> <a href="about.php">About Us</a> </li>
				<li> <a href="help.php">Help</a> </li>
				<li> <a href="privacy.php">Privacy Policy</a> </li>
				<li> <a href="contact.php">Contact Us</a> </li>

			</ul>
		</div>
	</div>
</nav>
<nav class="navbar navbar-default" style="border:0;box-shadow: none;border-radius:0;">
	<div class="container-fluid">
	<ul class="nav navbar-nav navbar-right">
		<form class="form form-inline" action="login.php" method="post">
			<input class = "form-control" type="text" placeholder="Enter Username" name="id">
			<input class = "form-control"  type="text" placeholder="Enter Password" name="pwd">
			<button class="btn btn-success"  type= "submit"><span class="glyphicon glyphicon-log-in"></span>&nbsp;Login</button>
		</form>

	</ul>

	<form class="form form-inline navbar-center" style="text-align: center;" role="search">
		<div class="form-group">
			<button type="submit"  class="btn btn-default"  style="">Search</button>
	</form>	
			<input type="text"  class="form-control" size="70" placeholder="Search the products" >
		</div>
</nav>



<div class="row">
	  			<div class="conatainer-fluid col-sm-1"></div>
	  				<div class="container-fluid col-sm-10"> 
	  			<h2 style="color: white; background-color: #337ab7; text-align:center;">Your Profile</h2>

	      				<div class="panel panel-default" style="padding: 0;background-color:#f5edeb;">     		

						   	
								        <div class="container">
								         
								         <p class="w3-right"><img src="image/sudip.jpg" class="w3-circle" style="height:50%;width:50%;margin-top: 12%; " alt="Avatar"></p>

							          
															         <hr>

								         <h3 style="text-align: left;">Sudip Prasad Neupane</h3>
								          <p><i class="fa fa-user fa-fw w3-margin-right w3-text-theme"></i> Male</p>

								         <p><i class="fa fa-pencil fa-fw w3-margin-right w3-text-theme"></i> Designer, UI</p>
								         <p><i class="fa fa-home fa-fw w3-margin-right w3-text-theme"></i> Dhulikhel, Kavre</p>
								        
								         <h3 style="text-align: left;""> Contact :</h3>
								         <p><i class="fa fa-phone fa-fw w3-margin-right w3-text-theme"></i> Phone: +9779849858775</p>
								         <p ><i class="fa fa-envelope fa-fw w3-margin-right w3-text-theme"></i>Email: sudipssy@outlook.com</p>
								        <a href="editinfo.php"><button  type="edit" class="fa fa-pencil btn btn-primary">Edit Info</button></a>
								        </div>
								<div style="margin-top: 5%;">
        							 </div>
							    
					</div>		    
			</div> 			    
</div>	

 		
	      								

<h1 style="text-align: center;">Welcome to your Profile</h1>
	<div class="row">
		<div class="container-fluid col-sm-2"></div>
			<div class="container-fluid col-sm-3 prof">

						<ul class="list-group">
				      	<li class="list-group-item "><h3 style="color: #337ab7">MY ACCOUNT</h3></li>
				      
						<li class="list-group-item"><a >Personal Information</a></li>
					    <li class="list-group-item"><a >My orders</a></li>
					    <li class="list-group-item"><a >My saved items</a></li>
					    <li class="list-group-item"><a >My reviews and ratings</a></li>
				

					    </ul>

					   <script>
							$(document).ready(function(){
							    $('[data-toggle="popover"]').popover();   
							});
			           </script>
			</div>

				
		<div class="container-fluid col-sm-2"></div>

		<div class="container-fluid col-sm-4">
				Your details are here..
	</div>

</div>


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


