<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

if ( ! function_exists('asset_url()')) {
    function asset_url()
   {
    return base_url().'assets/';
   }
 }
 ?>
<!DOCTYPE html>
<html >
<head>

<title>Login Form</title>

<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<!-- <meta http-equiv="X-UA-Compatible" content="IE=edge"> -->

<link rel="stylesheet" href="<?php echo base_url()?>assets/css/w3.css">
<link rel="stylesheet" href="<?php echo base_url()?>assets/bootstrap-assets/css/bootstrap.min.css">
<link rel="stylesheet" href="<?php echo base_url()?>assets/css/full-slider.css">
<link rel="stylesheet" href="<?php echo base_url()?>assets/polaloyd.css">

<!-- global styles -->
<link href=<?php echo base_url()."assets/themes/css/main.css" ; ?> rel="stylesheet">
<link href=<?php echo base_url()."assets/themes/css/flexslider.css";?> rel="stylesheet">

<!-- logo icon -->
<link rel="icon" href="<?php echo base_url(); ?>uploads/icon.png" type="image/jpg">

<!-- template portfolio / gallery -->
<link href="<?php echo base_url()?>assets/gallery/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
<link href="<?php echo base_url()?>assets/gallery/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
<!-- <link href="<?php echo base_url()?>assets/gallery/css/agency.min.css" rel="stylesheet"> -->

<!-- scripts -->
<script src=<?php echo base_url()."assets/themes/js/jquery-1.7.2.min.js";?>></script>
<script src=<?php echo base_url()."assets/bootstrap/js/bootstrap.min.js";?>></script>       
<script src=<?php echo base_url()."assets/themes/js/superfish.js";?>></script>  
<script src=<?php echo base_url()."assets/themes/js/jquery.scrolltotop.js";?>></script>

<link rel="stylesheet" href="<?php echo base_url()?>assets/css/style.css">
<!-- <link href="<?php echo base_url()?>assets/style.css" rel="stylesheet"> -->
  
</head>
  <body>

  <div class="login">
    <div class="login-screen">
      <div class="app-title">
        <a href="<?php echo base_url(""); ?>" class="navbar-brand " id="plydlogo" style="margin-left:18px;margin-top:-10px"; >Teknologi Informasi</a>
        <br><br><h1>Login</h1>
      </div>
<form method="post" action="<?php echo base_url()?>My_Controller/login_admin"> <!-- Login Form -->
      <div class="login-form">
        <div class="control-group">
        <input type="text" class="login-field" name="username" placeholder="username" id="username">
        <label class="login-field-icon fui-user" for="login-name"></label>
        </div>

        <div class="control-group">
        <input type="password" class="login-field" name="password" placeholder="password" id="password">
        <label class="login-field-icon fui-lock" for="login-pass"></label>
        </div>

        <button type="submit" class="btn btn-primary btn-large btn-block">Log in</button>
      </div>
</form>
    <div class="span7">    
        <h4 class="title" style="margin-left:4px;margin-top:20px;"><span class="text">Don't have account?<strong>Sign up</strong></span></h4>
          <form action="<?php echo base_url("sign_up");?>" >         
            <div style="margin-top:-15px;"><button tabindex="9" class="btn btn-inverse large"  action="<?php echo base_url("sign_up"); ?>" >Sign up</button></div>
          </form>         
      </div>

    </div>
  </div>
  <script src="<?php echo base_url()?>assets/bootstrap-assets/js/jquery.js"></script>
  <script src="<?php echo base_url()?>assets/bootstrap-assets/js/bootstrap.min.js"></script>
  <script src="<?php echo base_url()?>assets/bootstrap-assets/js/bootstrap.js"></script>
  <script src="<?php echo base_url()?>assets/gallery/vendor/jquery/jquery.min.js"></script>
  <script src="<?php echo base_url()?>assets/gallery/vendor/bootstrap/js/bootstrap.min.js"></script>
  <script src="<?php echo base_url()?>assets/themes/js/common.js"></script>
</body>  
</html>
