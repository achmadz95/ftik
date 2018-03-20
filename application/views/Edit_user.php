<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Edit User</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <!--[if ie]><meta content='IE=8' http-equiv='X-UA-Compatible'/><![endif]-->
    <!-- bootstrap -->
    <link href=<?php echo base_url()."assets/bootstrap/css/bootstrap.min.css";?> rel="stylesheet">      
    <link href=<?php echo base_url()."assets/bootstrap/css/bootstrap-responsive.min.css";?> rel="stylesheet">   
    <link href=<?php echo base_url()."assets/themes/css/bootstrappage.css";?> rel="stylesheet"/>
    
    <!-- logo icon -->
    <link rel="icon" href="<?php echo base_url(); ?>uploads/icon.png" type="image/jpg">

    <!-- global styles -->
    <link href=<?php echo base_url()."assets/themes/css/main.css" ; ?> rel="stylesheet">
    <link href=<?php echo base_url()."assets/themes/css/flexslider.css";?> rel="stylesheet">

    <!--Catatan popup-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
    <link rel='stylesheet prefetch' href='https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,700,700italic,400italic'>
    <link rel='stylesheet prefetch' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css'>

      <!-- <link rel="stylesheet" href="assets/css/style.css"> -->

    <!-- scripts -->
    <script src=<?php echo base_url()."assets/themes/js/jquery-1.7.2.min.js";?>></script>
    <script src=<?php echo base_url()."assets/bootstrap/js/bootstrap.min.js";?>></script>       
    <script src=<?php echo base_url()."assets/themes/js/superfish.js";?>></script>
    <!--[if lt IE 9]>     
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
      <script src="js/respond.min.js"></script>
    <![endif]-->

  </head>
    <body>
    
    <div id="wrapper" class="container">
      <section class="navbar main-menu">
        <div class="navbar-inner main-menu">        
          <img src="<?php echo base_url('uploads/profil.jpg'); ?> " style="width: 11%; height: 100%; margin-left:-10px;"/>

          <nav id="menu" class="pull-right">
            <ul>

            </ul>
          </nav>
        </div>
      </section>
      <section class="header_text sub">
      <div class="card-body">
          <div class="table-responsive">
          <h1><b>Edit User</b></h1>
          
          <?php foreach($user as $u){ ?>
          <form action="<?php echo base_url(). 'My_Controller/update'; ?>" method="post" enctype='multipart/form-data'> <!-- INI PENTING UNTUK BUAT UPLOAD -->
          <table style="margin:40px auto;">
            <tr>
              <td><b style="margin-left: 100px"> Nama Lengkap</b></td>
              <td>
                <input type="hidden" name="id_user" value="<?php echo $u->id_user ?>">
                <input style="width:225px;height:25px;margin-left: 80px;margin-top: 0px" type="text" name="nama_user" value="<?php echo $u->nama_user ?>">
              </td>
            </tr>
            <tr>
              <td><b style="margin-left: 100px"> Email </b></td>
              <td><input style="width:225px;height:25px;margin-left: 80px;margin-top: 15px" type="text" name="email" value="<?php echo $u->email ?>"></td>
            </tr>
            <tr>
              <td><b style="margin-left: 100px"> Username </b></td>
              <td><input style="width:225px;height:25px;margin-left: 80px;margin-top: 15px" type="text" name="username" value="<?php echo $u->username ?>"></td>
            </tr>
            <tr>
              <td><b style="margin-left: 100px"> Password </b></td>
              <td><input style="width:225px;height:25px;margin-left: 80px;margin-top: 15px" type="password" name="password" value=""></td>
            </tr>
              <td></td>
              <td><input style="width:225px;height:50px;margin-left: -300px;margin-top: 50px" type="submit" value="Simpan"></td>
              <td><button style="width:225px;height:50px;margin-left: -150px;margin-top: 50px" onclick="window.history.go(-1); return false;" >Cancel</button></td>
            </tr>
          </table>
        </form> 
        <?php } ?>
            </table>
          </div>
        </div>

  </body>
</html>
      