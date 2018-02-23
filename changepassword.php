  <!DOCTYPE html>     
<html>
<head>
  <meta charset="utf-8" content = 'width=device-width,initial-scale=1.0,maximum-scale=1.0,user-scalable=0,shrink-to-fit=no' name='viewport'>
  <title>KinMail.com</title>
  
  <link rel="stylesheet" type="text/css" href="bootstrap.css">
  <link rel="stylesheet" type="text/css" href="main.css">
  <link rel="stylesheet" type="text/css" href="stylesheet.css">
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css"> 
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap-glyphicons.css" rel="stylesheet">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script type="text/javascript" src="pic_upload.js"></script>
</head>

<body style="background-color: #d2d2d2">


<?php
  session_start();
  if(!isset($_GET['hash']) || $_GET['hash'] == null)
  { $active=0;
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
  $_SESSION['change_user']=$currentuser;
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

<form method="post" action="changepassword_database.php"> 
<div class="container-fluid">
   <div class="row">
		<div class="col-sm-4"></div>
		<div class="col-sm-4"> 
			<div class="panel panel-primary">
				<div class="panel-heading"><h1>Change Password</h1></div>
				<div class="panel-body">
					<div class="form-group">
              			<label  for="email">Current Password</label>
              			<input type="Password" class="form-control" name="oldpassword" id="oldpassword"  placeholder="Current Password"   />
                	</div>
              		<div class="form-group">
              			<label  for="email">New Password</label>
              			<input type="Password" class="form-control" name="password" id="password"  placeholder="New Password" onkeyup='check();'  />
                	</div>
                	<div class="form-group">
              			<label  for="email">Confirm New Password</label>
              			<input type="Password" class="form-control" name="confirm_password" id="confirm_password"  placeholder="Confirm New Password" onkeyup='check();'  /> <span id="message"></span>
                	</div>
              		
              		 <button type="submit"><span class="btn btn-primary glyphicon glyphicon-check">Save</span></button>
				</div>

			</div>
			




		</div>
   </div>
</div>
</form>
 <br><br><br><br><br>

<footer class="w3-center w3-padding-64" style=" background: #f8f8f8">
  				<a href="index.php" class="w3-button w3-light-grey"><i class="fa fa-arrow-up w3-margin-right"></i>To the top</a>
  			<div class="w3-xlarge w3-section">
  					<h2 style="color: blue;text-align:center;">Follow us on</h2>
    			<a href="https://www.facebook.com"><i class="fa fa-facebook-official w3-hover-opacity"></i>&nbsp;Facebook</a>
               <a href="https://www.instagram.com"> <i class="fa fa-instagram w3-hover-opacity"></i>&nbsp;Instagram</a>
                <a href="https://www.snapchat.com"><i class="fa fa-snapchat w3-hover-opacity"></i>&nbsp;Snapchat</a>
                <a href="https://www.pinterest.com"><i class="fa fa-pinterest-p w3-hover-opacity">&nbsp;Pinterest</i></a>
                <a href="https://www.twitter.com"><i class="fa fa-twitter w3-hover-opacity"></i>&nbsp;Twitter</a>
  
 			</div>	
 			   </br>
  
  
</footer>

<script>
  $('#password, #confirm_password').on('keyup', function () {
  if ($('#password').val() == $('#confirm_password').val()) {
    $('#message').html('Matching').css('color', 'green');
  } else 
    $('#message').html('Not Matching').css('color', 'red');
  });


</script>

</body>
</html>