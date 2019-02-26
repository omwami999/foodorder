<?php  
session_start(); 
if(isset($_SESSION['admin_sid']) || isset($_SESSION['customer_sid']))
{
	header("location:index.php");
}
else{
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="msapplication-tap-highlight" content="no">
  <title>Login</title>
        <link rel="stylesheet" type="text/css" href="css/font-awesome-4.7.0/css/font-awesome.min.css"><!--Font Awesome Icons-->
  <!-- Favicons-->
  <link rel="icon" type="image/png" href="images/favicon/favicon-32x32.png">
  <!-- Favicons-->
  <link rel="apple-touch-icon-precomposed" href="images/favicon/apple-touch-icon-152x152.png">
  <!-- For iPhone -->
  <meta name="msapplication-TileColor" content="#00bcd4">
  <meta name="msapplication-TileImage" content="images/favicon/mstile-144x144.png">
  <!-- For Windows Phone -->

  <!-- CORE CSS-->
  
  <link href="css/materialize.min.css" type="text/css" rel="stylesheet" media="screen,projection">
  <link href="css/style.min.css" type="text/css" rel="stylesheet" media="screen,projection">
    <!-- Custome CSS-->    
    <link href="css/custom/custom.min.css" type="text/css" rel="stylesheet" media="screen,projection">
  <link href="css/layouts/page-center.css" type="text/css" rel="stylesheet" media="screen,projection">

  <!-- INCLUDED PLUGIN CSS ON THIS PAGE -->
  <link href="js/plugins/perfect-scrollbar/perfect-scrollbar.css" type="text/css" rel="stylesheet" media="screen,projection">
  <link rel="stylesheet" type="text/css" href="css/foodfast-theme.css">
</head>

<body class="foodfast-theme"><!-- 
  Start Page Loading  -->
  <div id="loader-wrapper">
      <div id="loader"></div>        
      <div class="loader-section section-left"></div>
      <div class="loader-section section-right"></div>
  </div>



    <center>
  <div id="login-page" class="row">
    <!--<div class="col s12 z-depth-4 card-panel" style="width:100%;position:relative; margin:0 auto; background:#fff;">-->

      <form method="post" action="routers/router.php" class="login-form" id="form" style="background-color: #fff; padding:20px; margin:100px auto;width:380px;" >
     <!--    <h1>Foodfast</h1> -->
        <style type="text/css">
        form{
          color:#000;
        }
          input{
            background-color: #fff;
            color:#000;
          }
        </style>
        <div class="row">
          <div class="input-field col s12 center">
            <p class="center login-form-text">Login to Foodfast</p>
          </div>
        </div>
        <div class="row margin">
          <div class="input-field col s12">
            
            <input name="username" id="username" type="text" style="margin-top:40px;">
            <label for="username" class="center-align">Username <i class="fa fa-user" style="margin-left:20px;margin-top:0px;"></i></label>
          </div>
        </div>
        <div class="row margin">
          <div class="input-field col s12">
            
            <input name="password" id="password" type="password" style="margin-top:40px;">
            <label  for="password">Password <i class="fa fa-lock" style="margin-left:20px;margin-top:0px;"></i></label>
          </div>
        </div>
        <div class="row">
			<a href="javascript:void(0);" onclick="document.getElementById('form').submit();" class="btn waves-effect waves-light col s12 navbuttons" style="padding-bottom: 50px;padding-top: 20px;">Login</a>
          </div>
		  		<div class="row">
          <div class="input-field col s6 m6 l6">
            <p class="margin medium-small" style="width:300px; text-align:left;">Not signed up yet? <a href="register.php">Register Now!</a></p><br>
            <p class="margin medium-small" style="width:300px; text-align:left;">Back to Home ! <a href="index.php">Click here!</a></p>

          </div>         
        </div>
        </div>


      </form>
      </center>


  <!-- ================================================
    Scripts
    ================================================ -->

  <!-- jQuery Library -->
  <script type="text/javascript" src="js/plugins/jquery-1.11.2.min.js"></script>
  <!--materialize js-->
  <script type="text/javascript" src="js/materialize.min.js"></script>
  <!--scrollbar-->
  <script type="text/javascript" src="js/plugins/perfect-scrollbar/perfect-scrollbar.min.js"></script>

      <!--plugins.js - Some Specific JS codes for Plugin Settings-->
    <script type="text/javascript" src="js/plugins.min.js"></script>
    <!--custom-script.js - Add your own theme custom JS-->
    <script type="text/javascript" src="js/custom-script.js"></script>

</body>
</html>
<?php
}
?>