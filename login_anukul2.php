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
<div class="row">
  <div class="col-sm-4"></div>
      <div class="container-fluid col-sm-3">
            <div class="panel panel-primary">
              <div class="panel-heading "><h4 style="color:white;">Login</h4></div>
                <div class="panel-body">




                  <form class="form" method="post" action="login_anukul2.php">
           
                      <div class="form-group">
                        <label class="control-label" for="email">E-mail address:</label>
                        <div class="">
                            <input type="text" class="form-control" name="email" id="email"  placeholder="E-mail address"/>
                          </div>
                        </div>
                        <div class="form-group ">
                        <label class="control-label" for="password">Password:</label>                     
                        <div class="">
                            <input type="password" class="form-control" name="password" id="password"  placeholder="Password"/>
                            <button type="submit" class=" btn btn-default" > Login</button> <br>
                          </div>
                        </div>
                   
                      <div class="form-group ">
                       <label>
                          <input type="checkbox" checked="checked"> Remember me
                       </label>      <br>   
                        
                         <a href="Forgot.php" type="submit">Forgot Password?</a> <br>

                          Haven't registered yet then <a href="reg.php">Sign up</a> here!
                      </div>
                     </div> 
                  </form>




               </div>

          </div>
      </div>
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


</body>
</html>
