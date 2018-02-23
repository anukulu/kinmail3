<!DOCTYPE html>			
<html>
<head>
	<meta charset="utf-8" content = 'width=device-width,initial-scale=1.0,maximum-scale=1.0,user-scalable=0,shrink-to-fit=no' name='viewport'>
	<title>KinMail.com</title>
	
	<link rel="stylesheet" type="text/css" href="bootstrap.css">
	<link rel="stylesheet" type="text/css" href="main.css">
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
	if ($_GET['ID']==1)$categories="appliances";
	elseif ($_GET['ID']==2)$categories="phones and tablets";

	$con=mysqli_connect('localhost','root','','products');
	$query="SELECT * FROM `$categories`";
	$result=mysqli_query($con,$query);


	$t=0;
	while($row=mysqli_fetch_array($result,MYSQLI_ASSOC))
	{

	$a[$t]=$row['title'];
	$path[$t]=$row['imagepath1'];
	$name[$t]=$row['title'];
	$t=$t+1;

	}
?>


<nav class="navbar navbar-default">
	<div class="container-fluid">
		<div class="navbar-header">
			<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
			 <a class="navbar-brand" " href="index.php"><span class="fa fa-home"></span>&nbsp;KinMail Home</a>
		</div>
		<div class="row">
			 
		<div class="collapse navbar-collapse" id="myNavbar">
		 	<ul class="nav navbar-nav navbar-right">
      			<li><a href="reg.php"><span class="glyphicon glyphicon-user"></span>&nbsp; Sign Up</a></li>
      			<li> <a href="login.php"><span class="glyphicon glyphicon-log-in"></span>&nbsp;Login</a> </li>
      			<li> <a href="about.php"><span class="fa fa-info-circle"></span>&nbsp;About Us</a> </li>
				<li> <a href="help.php"><span class="fa fa-question-circle"></span>&nbsp;Help</a> </li>
				<li> <a href="contact.php"><span class="fa fa-phone-square"></span>&nbsp;Contact Us</a> </li>

			</ul>
		</div>

		<form class="form form-inline navbar-center col-md-11 col-md-pull-1" style="text-align: center; margin-bottom: 5px;" role="search" autocomplete="on" action="#">
			
			<div class="form-group">
				<input type="text" name="searchtext" class="form-control search" size="90" placeholder="Search the products" style="">
				<button type="submit"  class="btn btn-default"  style="">
					<span class="fa fa-search" style="color:blue">
					</span>
				</button>
			</div>
		</form>	
	</div>
</nav>

<h2 style="color: black;  text-align:center;">Ironing and Laundry</h2>
<div class="row context" >
	<div class="container-fluid col-sm-1"></div>
	<div class="container-fluid col-sm-2 ">
		<div class="panel panel-default" style=" background-color: #d2d2d2;  ">
			<div class="panel-body">
				<a href="display.php?ID=<?= $name[0] ?>"><img src="<?php echo $path[0]; ?>" style="width: 170px; height: 200px"></a>
			    <?php echo $name[0]; ?>
			    <a href="chatbox.php"> <br>Make a Deal</a>

			</div>
		</div>
	</div>

	<div class="container-fluid col-sm-2 ">
		<div class="panel panel-default" style=" background-color: #d2d2d2;">
			<div class="panel-body">
				<a href="display.php?ID=<?= $name[1] ?>"><img src="<?php echo $path[1]; ?>"  style="width: 170px; height: 200px" ></a>
				   <?php echo $name[1]; ?>
               <a href="chatbox.php"> <br>Make a Deal</a>
			</div>
		</div>
	</div>

	<div class="container-fluid col-sm-2 ">
		<div class="panel panel-default" style=" background-color: #d2d2d2;" >
			<div class="panel-body">
               

              <a href="display.php?ID=<?= $name[2] ?>"> <img src="<?php echo $path[2]; ?>"  style="width: 170px; height: 200px"></a>
                <?php echo $name[2]; ?>
               <a href="chatbox.php"> <br>Make a Deal</a>
			</div>
		</div>
	</div>

	<div class="container-fluid col-sm-2 ">
		<div class=""></div>
		<div class="panel panel-default" style=" background-color: #d2d2d2;" >
			<div class="panel-body">
				<a href="display.php?ID=<?= $name[3] ?>"><img src="<?php echo $path[3]; ?>"  style="width: 170px; height: 200px" ></a>
				 <?php echo $name[3]; ?>
				 <a href="chatbox.php"> <br>Make a Deal</a>
			</div>
		</div>
	</div>

	<div class="container-fluid col-sm-2 ">
			<div class=""></div>
			<div class="panel panel-default" style=" background-color: #d2d2d2;" >
				<div class="panel-body">
			<a href="display.php?ID=<?= $name[4] ?>">	<img src="<?php echo $path[4]; ?>"  style="width: 170px; height: 200px"></a>
					 <?php echo $name[4]; ?>
					 <a href="chatbox.php"> <br>Make a Deal</a>
				</div>
			</div>
		</div>
	</div>


<script type="text/javascript" src="jquery.js"></script>
<script type="text/javascript" src="bootstrap.js"></script>
<script type="text/javascript">
	$("#carousel").carousel();
</script>
</body>

</html>