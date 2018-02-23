<?php 

require "db.php";

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