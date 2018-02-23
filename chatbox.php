<?php
require "db.php";
session_start();

if(isset($_GET['hash']))
  $_SESSION['user_hash']=$_GET['hash'];





$product_id=$_GET['ID'];
$categories = $_GET['categories'];
$email = $_SESSION['email'];
$query = "SELECT * FROM users WHERE email='$email'";
$result = $conn->query($query);
$product = $result->fetch_assoc();
$logged_in = $product['loggedin'];
if($logged_in == 0)
{
  header("location:login.php");
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
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="jquery-3.2.1.js"></script>
	<script type="text/javascript" src="ajax.js"></script>

</head>



<?php

  if(!isset($_SESSION['user_hash']) || $_SESSION['user_hash'] == null)
  { $active=0;
    $currentuser="";
    $bannerwidth=8;

  }
  else {
    $active=1;
    $currentuser=$_SESSION['user_hash'];
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

<body style="background-color: #d2d2d2;" id="myPage" data-spy="scroll" data-offset="50" onload="send(product())">
<div class="col-sm-3"></div>
	<div class="col-sm-6" style="background: #f8f8f8 ">
			<div class="panel-heading" style="color: white;">
				<?php
        require "db1.php";
					$hash = $_GET['hash'];


          $categories = $_GET['categories'];
					$query = "SELECT * FROM `$categories` WHERE title='$product_id'";
					$result = $conn->query($query);
          $product = $result->fetch_assoc();
					$product_name = $product['title'];
					$product_price = $product['price'];
					$username = $_SESSION['first_name'];
          $imagepath1=$product['imagepath1'];

					echo "<h3 style='color:blue;'>This is the chatbox for <b>".$product_name."</b> with a price of:<b> ".$product_price."</b></h3>";
				?>
			</div>


<img src="<?php echo $imagepath1?>" width="280" height="280" align="right">



			<div class="panel-body">
<div class="container-fluid">
<div class="output" id="output">

</div>
<form name="form1" method="post"> <br>
	<textarea name="msg" id ="msg" placeholder="Type your message here..." class="form-control"></textarea>
	<input type="hidden" name="hash" value="<?php echo $product_name; ?>">
  <?php $_SESSION['s_product']=$product_name;?>

	<input  type="hidden" name="username" value="<?php echo $username;?>">
</form> <br>
<button class="btn btn-primary" onclick="send(product())">Send</button>

</div>
</div>
</div>
</div>
</div>
</body>
</html>