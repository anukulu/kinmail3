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


<?php 



	session_start();
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




<div class="container-fluid">
	<div class="row">
		<div class="col-sm-2 sidenav">
				<div class="panel panel-primary">
				<ul class="list-group">
		      	<li class="list-group-item list-item active"><h5>Products available</h5></li>
		        <li class="list-group-item"> <a href="#" style="text-decoration: none;" data-html= "true" data-toggle="popover" data-trigger="focus"  data-content="
		        	
		        	<div class='row context'>
		 				<div class='container container-fluid col-sm-6'>
		 					<div class='panel panel-primary'>
		 					  <div class='panel-heading'><h6>SMALL APPLIANCES</h6></div>
		 					<div class='panel-body'>

					        	  <ul class='list-group list-group-flush'>
					        		<li class='list-group-item'><a href='iron.php?ID=1'>Ironing and laundry</a></li>
							    	<li class='list-group-item'><a >Mixers and blenders</a></li>
							    	<li class='list-group-item'><a >Small cooking appliances</a></li>
						   			<li class='list-group-item'><a >Vacuum cleaners</a></li>
					        	  </ul>
				        	</div>
				        </div>	  
			      	</div>


			      	<div class='container col-sm-6'>
		 				<div class='panel panel-primary'>
		 					<div class='panel-heading'><h6>LARGE APPLIANCES</h6></div>
		 						<div class='panel-body'>

				        	  <ul class='list-group list-group-flush'>
				        		<li class='list-group-item'><a >Refrierators and Freezers</a></li>
						    	<li class='list-group-item'><a >Washers and Dryers</a></li>
						    	<li class='list-group-item'><a >Coolers and Heaters</a></li>
					   			<li class='list-group-item'><a >Dish Washers</a></li>
				        	  </ul>
				        	</div>
				        </div>	  
			      	</div>
	            "
		        >Appliances&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;</a>
			  
			   <script>
					$(document).ready(function(){
					    $('[data-toggle="popover"]').popover();  
					    container: 'body' 
					});
	           </script>




			    <li class="list-group-item"><a href="#" data-html= "true" style="text-decoration:none" data-toggle="popover" data-trigger="focus"  data-content="
		        	
		         	<div class='row context'>
		 				<div class='container container-fluid col-sm-6'>
		 					<div class='panel panel-primary'>
		 					  <div class='panel-heading'><h6>MEN'S WEARS</h6></div>
		 					<div class='panel-body'>

					        	  <ul class='list-group list-group-flush'>
					        		<li class='list-group-item'><a>Men's Cloths</a></li>
							    	<li class='list-group-item'><a >Men's Shoes</a></li>
							    	<li class='list-group-item'><a >Men's Innerware</a></li>
						   			<li class='list-group-item'><a ></a></li>
					        	  </ul>
				        	</div>
				        </div>	  
			      	</div>


			      	<div class='container col-sm-6'>
		 				<div class='panel panel-primary'>
		 					<div class='panel-heading'><h6>MEN'S ACCESSORIES</h6></div>
		 						<div class='panel-body'>

				        	  <ul class='list-group list-group-flush'>
				        		<li class='list-group-item'><a >Men's Watches</a></li>
						    	<li class='list-group-item'><a >Bags</a></li>
						    	<li class='list-group-item'><a >Caps hats and Wallet</a></li>
					   			<li class='list-group-item'><a >Mufflers and Gloves</a></li>
				        	  </ul>
				        	</div>
				        </div>	  
			      	</div>

	            ">Men Fashion &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a></li>

			     <li class="list-group-item"><a href="#" style="text-decoration:none" data-html= "true" data-toggle="popover" data-trigger="focus"  data-content="
		        	
		        	<div class='row context'>
		 				<div class='container container-fluid col-sm-6'>
		 					<div class='panel panel-primary'>
		 					  <div class='panel-heading'><h6>HEAVY MOTORS</h6></div>
		 					<div class='panel-body'>

					        	  <ul class='list-group list-group-flush'>
					        		<li class='list-group-item'><a>Four Wheelers</a></li>
							    	<li class='list-group-item'><a >Ten Wheelers</a></li>
							    	<li class='list-group-item'><a ></a></li>
						   			<li class='list-group-item'><a >Vacuum cleaners</a></li>
					        	  </ul>
				        	</div>
				        </div>	  
			      	</div>


			      	<div class='container col-sm-6'>
		 				<div class='panel panel-primary'>
		 					<div class='panel-heading'><h6>SMALL MOTORS</h6></div>
		 						<div class='panel-body'>

				        	  <ul class='list-group list-group-flush'>
				        		<li class='list-group-item'><a >Two Wheelers</a></li>
						    	<li class='list-group-item'><a >Washers and Dryers</a></li>
						    	<li class='list-group-item'><a >Coolers and Heaters</a></li>
					   			<li class='list-group-item'><a >Dish Washers</a></li>
				        	  </ul>
				        	</div>
				        </div>	  
			      	</div>
	            ">Motors &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a></li>

			     <li class="list-group-item"><a style="text-decoration: none;" href="#" data-html= "true" data-toggle="popover" data-trigger="focus"  data-content="
		        	
		        	<div class='row context'>
		 				<div class='container container-fluid col-sm-6'>
		 					<div class='panel panel-primary'>
		 					  <div class='panel-heading'><h6>PERSONAL CARE</h6></div>
		 					<div class='panel-body'>

					        	  <ul class='list-group list-group-flush'>
					        		<li class='list-group-item'><a >Massage And Relaxaction</a></li>
							    	<li class='list-group-item'><a >Shaving & Groving</a></li>
							    	<li class='list-group-item'><a >Hair Care</a></li>
						   			<li class='list-group-item'><a >Skin Care</a></li>
					        	  </ul>
				        	</div>
				        </div>	  
			      	</div>


			      	<div class='container col-sm-6'>
		 				<div class='panel panel-primary'>
		 					<div class='panel-heading'><h6>MAKEUP BATH & BODY</h6></div>
		 						<div class='panel-body'>

				        	  <ul class='list-group list-group-flush'>
				        		<li class='list-group-item'><a >Eye,Face,Lips & Nails</a></li>
						    	<li class='list-group-item'><a ></a>Bar Care</li>
						    	<li class='list-group-item'><a ></a>Body Wash</li>
					   			<li class='list-group-item'><a ></a>Makeup Accossories</li>
				        	  </ul>
				        	</div>
				        </div>	  
			      	</div>
	            ">Beauty and health&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a></li>
		      	<li class="list-group-item"><a style="text-decoration: none;" href="#" data-html= "true" data-toggle="popover" data-trigger="focus"  data-content="
		        	
		        	<div class='row context'>
		 				<div class='container container-fluid col-sm-6'>
		 					<div class='panel panel-primary'>
		 					  <div class='panel-heading'><h6>PHONES & TABLETS</h6></div>
		 					<div class='panel-body'>

					        	  <ul class='list-group list-group-flush'>
					        		<li class='list-group-item'><a href='iron.php?ID=2'>Smartphones</a></li>
							    	<li class='list-group-item'><a >Feature Phones</a></li>
							    	<li class='list-group-item'><a >Tablets</a></li>
						   			<li class='list-group-item'><a ></a></li>
					        	  </ul>
				        	</div>
				        </div>	  
			      	</div>


			      	<div class='container col-sm-6'>
		 				<div class='panel panel-primary'>
		 					<div class='panel-heading'><h6>ASSOSERIES</h6></div>
		 						<div class='panel-body'>

				        	  <ul class='list-group list-group-flush'>
				        		<li class='list-group-item'><a >Headphones</a></li>
						    	<li class='list-group-item'><a >Case</a></li>
						    	<li class='list-group-item'><a >Smartwatches</a></li>
					   			
					   			<li class='list-group-item'><a >Others</a></li>
				        	  </ul>
				        	</div>
				        </div>	  
			      	</div>
			     	
	            ">Phones and tablets&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a></li>
			     <li class="list-group-item"><a style="text-decoration: none;" href="#" data-html= "true" data-toggle="popover" data-trigger="focus"  data-content="
		        	
		        	<div class='row context'>
		 				<div class='container container-fluid col-sm-6'>
		 					<div class='panel panel-primary'>
		 					  <div class='panel-heading'><h6>TOY'S & GAMES</h6></div>
		 					<div class='panel-body'>

					        	  <ul class='list-group list-group-flush'>
					        		<li class='list-group-item'><a >Sports & outdoor Play</a></li>
							    	<li class='list-group-item'><a >Toys</a></li>
							    	<li class='list-group-item'><a >Pretend Play</a></li>
						   			<li class='list-group-item'><a >Action Figures</a></li>
					        	  </ul>
				        	</div>
				        </div>	  
			      	</div>


			      	<div class='container col-sm-6'>
		 				<div class='panel panel-primary'>
		 					<div class='panel-heading'><h6>BABY & TOLDDER</h6></div>
		 						<div class='panel-body'>

				        	  <ul class='list-group list-group-flush'>
				        		<li class='list-group-item'><a >Baby Feeding</a></li>
						    	<li class='list-group-item'><a >Accessories</a></li>
						    	<li class='list-group-item'><a >Dipers And Wipes</a></li>
					   			<li class='list-group-item'><a >Baby Fashions</a></li>
				        	  </ul>
				        	</div>
				        </div>	  
			      	</div>
	            " >Baby,Toys and Kids&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a></li>
			    
			    <li class="list-group-item"><a style="text-decoration: none;" href="#" data-html= "true" data-toggle="popover" data-trigger="focus"  data-content="
		        	
		        	<div class='row context'>
		 				<div class='container container-fluid col-sm-6'>
		 					<div class='panel panel-primary'>
		 						<div class='panel-heading'><h6>COMPUTING</h6></div>
		 							<div class='pannel-body'>
		 					

					        	  <ul class='list-group list-group-flush'>
					        		<li class='list-group-item'><a>Laptops</a></li>
							    	<li class='list-group-item'><a >Dekstops & Monitors</a></li>
							    	<li class='list-group-item'><a >Printers & Scanners</a></li>
						   			<li class='list-group-item'><a >Components & Spareparts</a></li>
						   			<li class='list-group-item'><a >Peripherials & Accessories</a></li>
					        	  </ul>
					        	</div>
					        </div>	 
				        		  
			      	</div>


			      	<div class='container col-sm-6'>
		 				<div class='panel panel-primary'>
		 					<div class='panel-heading'><h6>GAMING</h6></div>
		 						<div class='pannel-body'>
				        	  <ul class='list-group list-group-flush'>
				        		
						    	
						    	<li class='list-group-item'><a >Video Games</a></li>
					   			<li class='list-group-item'><a >Consoles</a></li>
					   			<li class='list-group-item'><a >Gaming Accessories</a></li>
				        	  </ul>
				        	</div>
				        </div>	  
				        		  
			      	</div>
	            ">Computer and gaming&nbsp;&nbsp;</a></li>
			    <li class="list-group-item"><a style="text-decoration: none;" href="#" data-html= "true" data-toggle="popover" data-trigger="focus"  data-content="
		        	
		        	<div class='row context'>
		 				


			      	<div class='container col-sm-6'>
		 				<div class='panel panel-primary'>
		 						<div class='panel-heading'><h6>BOOKS</h6></div>
		 							<div class='pannel-body'>

						        	  <ul class='list-group list-group-flush'>
						        		<li class='list-group-item'><a >English Litreture Books</a></li>
								    	<li class='list-group-item'><a >Nepali Litreture Books</a></li>
								    	<li class='list-group-item'><a>Text Boooks </a></li>
								    	<li class='list-group-item'><a>Entrance Exam's Books </a></li>
								    	
							   			
				        	  </ul>
				        	</div>
				        </div>	  
			      	</div>
			      	<div class='container col-sm-6'>
		 				<div class='panel panel-primary'>
		 						<div class='panel-heading'><h6>STATIONARY</h6></div>
		 							<div class='pannel-body'>

						        	  <ul class='list-group list-group-flush'>
						        		<li class='list-group-item'><a >Calculator</a></li>
								    	<li class='list-group-item'><a >NoteBooks</a></li>
								    	<li class='list-group-item'><a >Pen & Pencils</a></li>
								    	<li class='list-group-item'><a >sheets</a></li>
								    	<li class='list-group-item'><a >Boards</a></li>
								    	
							   			
				        	  </ul>
				        	</div>
				        </div>	  
			      	</div>	



	            ">Books and Stationary&nbsp;&nbsp;&nbsp;</a></li>
			      <li class="list-group-item"><a style="text-decoration: none;" href="#" data-html= "true" data-toggle="popover" data-trigger="focus"  data-content="
		        	
		        	<div class='row context'>
		 				<div class='container container-fluid col-sm-6'>
		 					<div class='panel panel-primary'>
		 					  <div class='panel-heading'><h6>AUDIP & VIDEO</h6></div>
		 					<div class='panel-body'>

					        	  <ul class='list-group list-group-flush'>
					        		<li class='list-group-item'><a >Musical Instruments</a></li>
							    	<li class='list-group-item'><a >iPod & MP3 Players</a></li>
							    	<li class='list-group-item'><a >Home Thearter & strerio</a></li>
						   			<li class='list-group-item'><a >DVD & Blur-ray Player</a></li>
					        	  </ul>
				        	</div>
				        </div>	  
			      	</div>


			      	<div class='container col-sm-6'>
		 				<div class='panel panel-primary'>
		 					<div class='panel-heading'><h6>CAMERAS</h6></div>
		 						<div class='panel-body'>

				        	  <ul class='list-group list-group-flush'>
				        		<li class='list-group-item'><a >DSLR,Hybrid Cameras & Accessories</a></li>
						    	<li class='list-group-item'><a ></a>Lense Style Cameras</li>
						    	<li class='list-group-item'><a ></a>Security & Survillance</li>
					   			<li class='list-group-item'><a >Camcoders</a></li>
					   		
				        	  </ul>
				        	</div>
				        </div>	  
			      	</div>
	            ">Audios and Cameras&nbsp;&nbsp;&nbsp;&nbsp;</a></li>

			    </ul>
			 </div>
		</div>
		<div class="container col-sm-<?php echo $bannerwidth;?>" >
			<div id="myCarousel" class="carousel slide" data-ride="carousel" data-interval="4000" style="height: 500px; overflow: hidden;" >
				
				<ol class="carousel-indicators">
					<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
	      			<li data-target="#myCarousel" data-slide-to="1"></li>
	      			<li data-target="#myCarousel" data-slide-to="2"></li>
	      			<li data-target="#myCarousel" data-slide-to="3"></li>

    			</ol>
    			
    			<div class="carousel-inner" role="listbox">
    				
    				<div class="item active">
    					<img src="dslr.jpg" alt="Shopping" style="width: 100%;">
    				</div>
    				

				     <div class="item">
				       <img src="laptop.jpg" alt="Logo1" >
				     </div>
				    
				     
				     <div class="item">
				        <img src="redmi.jpg" alt="Logo2" >
				     </div>
				     
				     <div class="item">
				        <img src="a44.jpg" alt="Logo3" >
				     </div>

			    </div>

			     <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
			     	<span class="glyphicon glyphicon-chevron-left" aria-hidden="true" ></span>
			     	<span class="sr-only">Previous</span>
			     </a>

			     <a class="right carousel-control" href="#myCarousel" data-slide="next">
			     	<span class="glyphicon glyphicon-chevron-right"></span>
			     	<span class="sr-only">Next</span>
			     </a>

			   
			</div> 
 		</div>



 		<?php 
 		if ($currentuser=="")
 			{


 				?>


 		<div class="container-fluid col-sm-2">
 		  <div class="panel panel-primary">
 			<div class="panel-heading "><h4 style="color:white;">Login</h4></div>
          	  <div class="panel-body">
                <form class="form" method="post" action="login_a.php">
         
		            <div class="form-group">
		              <label class="control-label" for="email">E-mail address:</label>
		              <div class="">
		                  <input type="text" class="form-control" name="email" id="email"  placeholder="E-mail address" required />
		                </div>
		              </div>
		              <div class="form-group ">
		              <label class="control-label" for="password">Password:</label>
		              <div class="">
		                  <input type="password" class="form-control" name="password" id="password"  placeholder="Password" required />
		                </div>
		              </div>
		         
		            <div class="form-group ">
		            	<label>
                          <input type="checkbox" checked="checked"> Remember me
                       </label> <br>
		              <a href="Forgot.php" type="">Forgot Password?</a> <br>
		              <button type="submit" class=" btn btn-primary" ><span class="glyphicon glyphicon-log-in"></span> Login</button> <br>
           		 </div>
          	 </div> 
          </form>
         </div>

         <?php 
	         if(isset($_SESSION['message']) && $_SESSION['message'] != null){
         ?>
         
         <div class="panel alert-danger">
         	<div class="panel-body">
         		<?=$_SESSION['message'] ?>
         	</div>
         </div>

		<?php
				$_SESSION['message'] = null; 
			}
		?>

 		<?php }?>









 		</div>
	</div><!--/products list and top carousel-->
</div>

<br><br><br>
<div class="row context">
	<div class="container-fluid ">
		<div class="col-sm-10">
			<div class="panel panel-primary">
				<div class="panel-heading"> <h4 style="text-align: center; font-family: arial;">Products available </h4></div>
					<div class="panel panel-body">
						<div class="  col-sm-12">
							<div class="carousel slide" data-ride="carousel" data-type="multi" data-interval="2000" id="myCarousel1">
								<div class="carousel-inner">
								    <?php
								    	$category = array("appliances","baby, toys and kids","beauty and health","books and stationery","computer and gaming","home and living","mens fashion","other categories","phones and tablets","sports and travels","tv, audio and cameras","womens fashion");
									    $categories = $category[array_rand($category)];

										$con=mysqli_connect('localhost','root','','products');
										$query="SELECT * FROM `$categories`";
										$result=mysqli_query($con,$query);
										$i = 0;
										while ($row=mysqli_fetch_assoc($result))
										{
									   		$image = $row['imagepath1'];
									   		$name = $row['title'];
									   		$price=$row['price'];
										if($i == 0){
									   		echo "<div class='item active'>";
									   	}else{
									   		echo "<div class='item'>";
									   	}
									   	?>
								        		<div class="col-sm-3">

								      				<div class="gallery">
									      				<a href="display.php?ID=<?= $name ?>&hash=<?php echo $currentuser;?>">
							    							<img src='<?= $image?>'>
							  							</a>
						 					 			<div class="desc"><?= $name ?><br><b>Rs.<?= $price?></b></div>
						 							</div>
								    			</div>
						        			</div>
						        	<?php
						        		$i = 1;
										}
									?>
								</div>
					    			<a class="left carousel-control" href="#myCarousel1" role="button" data-slide="prev">
								     	<span class="glyphicon glyphicon-chevron-left" aria-hidden="true" ></span>
								     	<span class="sr-only">Previous</span>
							        </a>

								    <a class="right carousel-control" href="#myCarousel1" data-slide="next">
								     	<span class="glyphicon glyphicon-chevron-right"></span>
								     	<span class="sr-only">Next</span>
								    </a>
							</div>
						</div>
					</div>
				</div>
			</div>
				<div class="container-fluid col-sm-2">
					<img src="8.jpg" style="height:420px; width:210px">
				</div> 
		</div>
	</div>
</div>
<br> <br>

<div class="row context">
	<div class="col-sm-10">
		<div class="col-sm-6">
		<img src="b1.jpg" style="height: 250px; width: 100%">			
		</div>

		<div class="col-sm-6">
			<img src="b2.jpg" style="height: 250px; width: 100%">	
		</div>
	</div>
		<div class="container-fluid col-sm-2">
			<img src="b1.jpg" style="height:250px; width:210px">
		</div> 
</div>

<br><br>

<div class="row context">
	<div class="container-fluid">
		<div class="col-sm-10 text-center"><h3 style="color: white; background-color: #337ab7; text-align:center; border-radius: 6px;"> Recommended Products</h3>
		</div>

		<div class="col-sm-10">
			<div class="carousel slide" data-ride="carousel" data-type="multi" data-interval="5000" id="myCarousel2">
				<div class="carousel-inner">
				    <?php
				    	// session_start();
					    $category = array("appliances","baby, toys and kids","beauty and health","books and stationery","computer and gaming","home and living","mens fashion","other categories","phones and tablets","sports and travels","tv, audio and cameras","womens fashion");
									    $categories = $category[array_rand($category)];

						$con=mysqli_connect('localhost','root','','products');
						$query="SELECT * FROM `$categories`";
						$result=mysqli_query($con,$query);
						$i = 0;
						while ($row=mysqli_fetch_assoc($result))
						{
					   		$image = $row['imagepath1'];
					   		$name = $row['title'];
					   		$price=$row['price'];

						if($i == 0){
					   		echo "<div class='item active'>";
					   	}else{
					   		echo "<div class='item'>";
					   	}
					   	?>
				        		<div class="col-sm-3">
				      				<div class="gallery">
					      				<a href="display.php?ID=<?= $name ?>">
			    							<img src='<?= $image?>'>
			  							</a>
		 					 			<div class="desc"><?= $name ?><br><b>Rs.<?= $price?></b></div>

		 							</div>
				    			</div>
		        			</div>
		        	<?php
		        		$i = 1;
						}
					?>
				</div>
    			<a class="left carousel-control" href="#myCarousel2" role="button" data-slide="prev">
			     	<span class="glyphicon glyphicon-chevron-left" aria-hidden="true" ></span>
			     	<span class="sr-only">Previous</span>
		        </a>

			    <a class="right carousel-control" href="#myCarousel2" data-slide="next">
			     	<span class="glyphicon glyphicon-chevron-right"></span>
			     	<span class="sr-only">Next</span>
			    </a>
			</div>
		</div>
		<div class="container-fluid col-sm-2">
			<img src="b2.jpg" style="height:320px; width:210px">
		</div> 
	</div>
</div>

<br><br>

<div class="row context">
	<div class="col-sm-10">
		<div class="col-sm-12">
			<img src="b.jpg" style="height: 250px; width: 100%">			
		</div>
	</div>
	<div class="container-fluid col-sm-2">
			<img src="b1.jpg" style="height:250px; width:210px">
	</div> 
</div>

<br><br>

<div class=" row context" >
  <div class=" container-fluid">

    <div class="col-sm-12">
    	  <h2 style="color: white; background-color: #337ab7; text-align:center; border-radius: 6px;"> Popular Products</h2>

			<div class="carousel slide" data-ride="carousel" data-type="multi" data-interval="5000" id="myCarousel2">
				<div class="carousel-inner">
				    <?php
				    	// session_start();
					    $category = array("appliances","baby, toys and kids","beauty and health","books and stationery","computer and gaming","home and living","mens fashion","other categories","phones and tablets","sports and travels","tv, audio and cameras","womens fashion");
									    $categories = $category[array_rand($category)];

						$con=mysqli_connect('localhost','root','','products');
						$query="SELECT * FROM `$categories`";
						$result=mysqli_query($con,$query);
						$i = 0;
						while ($row=mysqli_fetch_assoc($result))
						{
					   		$image = $row['imagepath1'];
					   		$name = $row['title'];
					   		$price=$row['price'];

						if($i == 0){
					   		echo "<div class='item active'>";
					   	}else{
					   		echo "<div class='item'>";
					   	}
					   	?>
				        		<div class="col-sm-3">
				      				<div class="gallery">
					      				<a href="display.php?ID=<?= $name ?>">
			    							<img src='<?= $image?>'>
			  							</a>
		 					 			<div class="desc"><?= $name ?><br><b>Rs.<?= $price?></b></div>

		 							</div>
				    			</div>
		        			</div>
		        	<?php
		        		$i = 1;
						}
					?>
				</div>
    			<a class="left carousel-control" href="#myCarousel2" role="button" data-slide="prev">
			     	<span class="glyphicon glyphicon-chevron-left" aria-hidden="true" ></span>
			     	<span class="sr-only">Previous</span>
		        </a>

			    <a class="right carousel-control" href="#myCarousel2" data-slide="next">
			     	<span class="glyphicon glyphicon-chevron-right"></span>
			     	<span class="sr-only">Next</span>
			    </a>
			</div>
		</div>   
       
</div>


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
 			   KinMail.com.np. © All rights reserved. 
 			   Contact Designer : 9843390825
  
  
    </footer>




<script type="text/javascript" src="jquery.js"></script>
<script type="text/javascript" src="bootstrap.js"></script>
<script type="text/javascript">
	$("#carousel").carousel();
</script>
</body>
</html>
