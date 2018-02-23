<!DOCTYPE html>			
<html>
<head>
	<meta charset="utf-8" content = 'width=device-width,initial-scale=1.0,maximum-scale=1.0,user-scalable=0,shrink-to-fit=no' name='viewport'>
	<title>KinMail.com</title>
	<script type="text/javascript" src="jquery.js"></script>
	<script type="text/javascript" src="bootstrap.js"></script>
	<link rel="stylesheet" type="text/css" href="bootstrap.css">


</head>

<body style="background-color: #C0B283">

<nav class="navbar navbar-inverse" style="margin:0;border:0;box-shadow: none;border-radius:0;	">
	<div class="container-fluid">
		<div class="navbar-header">
			<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
			 <a class="navbar-brand" " href="#">KinMail Home</a>
		</div>	 
		<div class="collapse navbar-collapse" id="myNavbar">
		 	<ul class="nav navbar-nav navbar-right">
		 		<li> <a href="reg.php">Register</a> </li>
				<li> <a href="about.php">About Us</a> </li>
				<li> <a href="help.php">Help</a> </li>
			</ul>
		</div>
	</div>
</nav>
<nav class="navbar navbar-inverse" style="border:0;box-shadow: none;border-radius:0;">
	<div class="container-fluid">
	<ul class="nav navbar-nav navbar-right">
		<form class="form form-inline" action="login.php" method="post">
			<input class = "form-control" type="text" placeholder="Enter Username" name="id">
			<input class = "form-control"  type="text" placeholder="Enter Password" name="pwd">
			<button class="btn btn-success" type= "submit">Login</button>
		</form>

	</ul>
<form class="navbar-form navbar-center" style="text-align: center;" role="search">
	<div class="form-group">
		<input type="text"  class="form-control" placeholder="Search the products" >
	</div>
	<button type="submit"  class="btn btn-default" style="">Search</button>
</form>	
	</div>
	
</nav>
		

<div class="container-fluid">
	<div class="row context">
		<div class="col-sm-2 sidenav">
			<ul class="list-group">
	      	<li class="list-group-item list-header active"><h4>Products available</h4></li>

		    <li class="list-group-item"><a >Appliances</a></li>
		    <li class="list-group-item"><a >Clothings</a></li>
		    <li class="list-group-item"><a >Men's Fashion</a></li>
		    <li class="list-group-item"><a >Sports and travel</a></li>
		    <li class="list-group-item"><a >Beauty and health</a></li>
	      	<li class="list-group-item"><a >Phones and tablets</a></li>
		    <li class="list-group-item"><a >Baby,Toys and Kids</a></li>
		    <li class="list-group-item"><a >Computer and gaming</a></li>
		    <li class="list-group-item"><a >Books and Stationary</a></li>
		    <li class="list-group-item"><a >TV,audios and Cameras</a></li>

		    </ul>
		 </div>
		<div class="container col-sm-8 >
			<div id="myCarousel" class="carousel-slide" data-ride="carousel" data-interval="5000" >
				
				<ol class="carousel-indicators">
					<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
	      			<li data-target="#myCarousel" data-slide-to="1"></li>
	      			<li data-target="#myCarousel" data-slide-to="2"></li>
	      			<li data-target="#myCarousel" data-slide-to="3"></li>

    			</ol>
    			<div role="listbox" class="carousel-inner" >
    				<div class="item active">
    					<img src="a1.jpg" alt="Shopping" style=" width: 100%;">
    					<div class="carousel-caption" style="color: blue;">
				       	<h3>Welcome here</h3>
				       	<p >Thank you for visiting</p>
					</div>
    				</div>
    				

			     <div class="item">
			       <img src="a22.jpg" alt="Logo1" style="width:100%;">
			       <div class="carousel-caption" style="color: blue;>
				       	<h3>Online Shopping</h3>
				       	<p>Thank you for visiting</p>
			       	</div>
			     </div>
			    
			     <div class="item">
			        <img src="a33.jpg" alt="Logo2" style="width:100%;">
			        <div class="carousel-caption" style="color: blue;>
				       	<h3>More Shopping</h3>
				       	<p>Thank you for visiting</p>
					</div>
			     </div>
			     <div class="item">
			        <img src="a44.jpg" alt="Logo3" style="width:100%;">
			        <div class="carousel-caption" style="color: blue;>
				       	<h3>More Shopping</h3>
				       	<p>Thank you for visiting</p>
					</div>
			     </div>

			     <a class="left-carousel-control" href="#myCarousel" role="button" data-slide="prev">
			     	<span class="glyphicon glyphicon-chevron-left" ></span>
			     	<span class="sr-only">Prevoius</span>
			     </a>

			     <a class="right-carousel-control" href="#myCarousel" data-slide="next">
			     	<span class="glyphicon glyphicon-chevron-right"></span>
			     	<span class="sr-only">Next</span>
			     </a>

			    </div>
			   
			</div> 


 		</div>
	</div>



</div>



</body>
</html>
