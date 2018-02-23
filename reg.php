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

<body style="background-color: #d2d2d2" id="myPage" data-spy="scroll"  data-offset="50">



<?php echo $currentuser=""; ?>

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
            
        <li> <a href="about.php"><span class="fa fa-info-circle"></span>&nbsp;About Us</a> </li>
        <li> <a href="help.php"><span class="fa fa-question-circle"></span>&nbsp;Help</a> </li>
        <li> <a href="contact.php"><span class="fa fa-phone-square"></span>&nbsp;Contact Us</a> </li>
        
        <?php 

        $active=0;
        $currentuser="";

        if($active==0){ 
          ?>
        <li><a href="reg.php"><span class="glyphicon glyphicon-user"></span>&nbsp; Sign Up</a></li>
            <li> <a href="login.php"><span class="glyphicon glyphicon-log-in"></span>&nbsp;Login</a> </li>


            <?php }




            elseif ($active==1){ ?>

                    <li><a href="pd_register.php"><span class="fa fa-plus"></span>&nbsp;Register Product</a></li>

      <?php } ?>

              <?php 


              if($currentuser!=""){?>
              <li>
                    <a href="profile_a.php" class=" dropdown-toggle" type="link" data-toggle="dropdown"><span class="glyphicon glyphicon-user" style="color: lightgreen;"></span>&nbsp;<?php echo $currentuser; ?>
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




<div class="row ">
   <div class="container container-fluid col-sm-2"></div>
  <div class="container col-sm-4">
      <div class="panel panel-primary" style="padding: 0;">
        <div class="panel-heading"><h3 style="text-align: center">Update a Profile picture</h3></div>
        <div class="panel-body"> 

        <form class="form form-group" method="post" action="register.php" enctype="multipart/form-data">

          <div class="container-fluid"  >
            <div id="profile_image"></div>
            <input type="file" name="file" id="file">
              
          </div>
      </div>
    </div>
  </div>

  <div class="container col-sm-1"></div>

<div class="container panel panel-primary col-sm-4" style="padding:0;">
        <div class="panel-heading"><h3 style="text-align: center">Sign up here</h3></div>
          <div class="panel-body">

            <div class="row">
            <div class="form-group label-floating col-md-6">
              <label for="name">First Name:</label>
              <div>
                <div class="input-group"> 
                  <input type="text" class="form-control" name="fname" id="fname"  placeholder="First Name" required />
                </div>
              </div>
            </div>
            <div class="form-group col-md-6">
              <label for="name">Last Name:</label>
              <div>
                  <input type="text" class="form-control" name="lname" id="lname"  placeholder="Last Name" required/>
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
                  <input type="text" class="form-control" name="contact" id="email"  placeholder="Contact Number" required/>
            </div>
            </div>
            </div>


            <div class="form-group ">
              <label class="control-label" for="email">E-mail address:</label>
              <div class="">
                  <input type="text" class="form-control" name="email" id="email"  placeholder="E-mail address" required/>
                </div>
            </div>
           
            <div class="form-group">
              <label for="email">Birthdate:</label>
              <div class="">
                  <input class="form-control" id="exampleInputDOB1" name="dob" placeholder="Date of Birth" type="date">
              </div>
            </div>
            <div class="form-group">
            <div class="placeholder-override-wrap">
              <label for="username">Username:</label>
                  <input type="text" class="form-control" name="username" id="username"  placeholder="Username" required />
                </div>
            </div>
            <div class="row">
              <div class="col-md-6">
            <div class="form-group">
              <label for="password">Password:</label>
              <div class="">
                  <input type="password" class="form-control" name="password" id="password"  placeholder="At least 6 characters"  onkeyup='check();' minlength="6" />
                </div>
              </div>
            </div>
            <div class="col-md-6">
            <div class="form-group" >
              <label for="confirm" style="text-align:left; ">Confirm Password:</label>
              <div class="">
                  <input type="password" class="form-control" name="confirm_password" id="confirm_password"  placeholder="Re-type Password" onkeyup='check();' minlength="6" /> <span id="message"></span>
                </div>
              </div>
            </div>
            </div>
            <div class="form-group ">
              <button type="submit" class="btn btn-primary" ><span class="glyphicon glyphicon-user"></span> Sign up</button>
            </div>
             By creating an account, you agree to Kinmail's Conditions of Use and <a href="privacy.php">Privacy policy</a>. 
          </form>

      </div>
    </div>
</div>


<footer class="w3-center w3-padding-64" style=" background: #f8f8f8;">
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