<!DOCTYPE html>     
<html>
<head>
  <meta charset="utf-8" content = 'width=device-width,initial-scale=1.0,maximum-scale=1.0,user-scalable=0,shrink-to-fit=no' name='viewport'>
  <title>KinMail.com</title>
  
  <link rel="stylesheet" type="text/css" href="bootstrap.css">
  <link rel="stylesheet" type="text/css" href="main.css">
  <link rel="stylesheet" type="text/css" href="stylesheet.css">
  <link rel="stylesheet" href="w3.css"> 
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap-glyphicons.css" rel="stylesheet">

</head>

<body style="background-color: white;">

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
   <div class="container col-sm-1"></div>
  <div class="container-fluid col-sm-4">
      <div class="panel panel-primary" style="padding: 0;color:white; ">
        <div class="panel-heading"><h4>Change a Profile picture</h4></div>
        <div class="panel-body"> 
        <form class="form" method="post" action="#">
          <div class="row" >
           
                         
                         <p class="w3-center"><img src="profile.jpg" class="w3-circle" style="height:25%;width:25%; " alt="Avatar"></p>
            
          

            <form action="/action_page.php"> <br><br> 
              <input type="file" name="pic" accept="image/*" style="margin-left: 6px;"> <br>
              <input type="submit" class="btn btn-primary" style="margin-left: 6px;">
            </form> <br><br>
          </div>
        </form>
      </div>
    </div>
  </div>

  <div class="container col-sm-1"></div>
<div class="col-sm-4">
<div class=" panel panel-primary " >
        <div class="panel-heading"><h3>Edit Your Info</h3></div>
          <div class="panel-body">
          <form class="form" method="post" action="#">
            <div class="row">
            <div class="form-group label-floating col-md-6">
              <label for="name">First Name:</label>
              <div>
                <!-- <div class="input-group"> -->
                  <input type="text" class="form-control" name="name" id="name"  placeholder="First Name"/>
                <!-- </div> -->
              </div>
            </div>
            <div class="form-group col-md-6">
              <label for="name">Last Name:</label>
              <div>
                  <input type="text" class="form-control" name="name" id="name"  placeholder="Last Name"/>
              </div>
            </div>
          </div>

            
              <div class="row">
            <div class="col-md-6">
            <div class="form-group">
              <label for="gender" >Gender:</label>
              <br>
                  <label class="radio-inline">
                     <input type="radio" name="gender" id="gender1" value="male">Male
                    </label>
                <label class="radio-inline">
                    <input type="radio" name="gender" id="gender2" value="female">Female
                </label>
            </div>
            </div>
            <div class="col-md-6">
            <div class="form-group">
              <label for="email">Contact Number:</label>
                  <input type="text" class="form-control" name="email" id="email"  placeholder="Contact Number"/>
            </div>
            </div>
            </div>
            <div class="form-group">
              <label class="control-label" for="email">E-mail address:</label>
              <div class="">
                  <input type="text" class="form-control" name="email" id="email"  placeholder="E-mail address"/>
                </div>
              </div>
            <div class="form-group">
              <label for="email">Birthdate:</label>
              <div class="">
                  <input class="form-control" id="exampleInputDOB1" placeholder="Date of Birth" type="date">
              </div>
            </div>

            <div class="placeholder-override-wrap">
              <label for="username">Username:</label>
                  <input type="text" class="form-control" name="username" id="username"  placeholder="Username"/>
                </div>
            
            <br>
            
              <a href="profile.php" class="btn btn-primary btn-lg ">Save</a>
            
          </form>

      </div>
    </div>
    </div>
</div>
<div style="margin-top: 10%;"></div>

<footer class="w3-center w3-padding-64" style=" background-color: #2078db;">
          <a href="about.php" class="w3-button w3-light-grey"><i class="fa fa-arrow-up w3-margin-right"></i>To the top</a>
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

</body>
</html>