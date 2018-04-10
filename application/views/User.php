<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Data Mahasiswa</title>
    <link href="<?php echo base_url()?>assets/admin/css/bootstrap.min.css" rel="stylesheet">
	<link href="<?php echo base_url()?>assets/admin/css/sb-admin.css" rel="stylesheet">
	<link href="<?php echo base_url()?>assets/admin/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- logo icon -->
    <link rel="icon" href="<?php echo base_url(); ?>uploads/icon.png" type="image/jpg">

</head>
<style type="text/css">

table, th, td {
    border: 1px solid black;
    border-collapse: collapse;
}

th, td {
    padding: 5px;
}
</style>

<body>
    <div id="wrapper">
        <!-- Navigation -->
        <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.html" style="font-family: Lato-Black; font-size: 28px;">FTIK - ITS</a>
            </div>
            <!-- Top Menu Items -->
            <ul class="nav navbar-right top-nav">
                
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i> Admin <b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li>
                            <a href="<?php echo base_url()?>My_Controller/logout"><i class="fa fa-fw fa-power-off"></i> Log Out</a>
                        </li>
                    </ul>
                </li>
            </ul>
            <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
            <div class="collapse navbar-collapse navbar-ex1-collapse">
                <ul class="nav navbar-nav side-nav">
                    <li class="active">
                        <a href="#"><i class="fa fa-lg fa-comments"> User</i></a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->

        </nav>
        <div id="page-wrapper">
            <div class="container-fluid">
                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            User
                        </h1>
                        <ol class="breadcrumb">
                            <li class="active">
                                <a href="#"><i class="fa fa-lg fa-comments"> Data Mahasiswa</i></a>
                            </li>
                           
                        </ol>
                    </div>
                </div>

                <table align="center" style="width: 100%;">
                    <thead>
                        <th style="text-align: center;">ID</th>  
                        <th style="text-align: center;">Nama</th>
                        <th style="text-align: center;">Email</th>
                        <th style="text-align: center;">Username</th>
                        <th style="text-align: center;">Deskripsi</th>
                        <th style="padding-right: 20px;"></th>
                    </thead>
                    
                    <tbody style="text-align: center;">
                        <?php foreach ($data as $x) { ?>
                        <tr>
                            
                        <td><?php echo $x['id_user']; ?></td>
                        <td><?php echo $x['nama_user']; ?></td>
                        <td><?php echo $x['email']; ?></td>
                        <td><?php echo $x['username']; ?></td>
                        <td><?php echo $x['deskripsi_user']; ?></td>
                        <td align="center">
                            <a href="<?php echo base_url()."My_Controller/edit/".$x['id_user']; ?>"><button class="btn-block" style="border: solid 1px; margin-top: 10px; margin-bottom: 10px;">Edit</button></a>
                        </td>
                        <td align="center">
                            <a href="<?php echo base_url()."My_Controller/deleteuser/".$x['id_user']; ?>"><button class="btn-block" style="border: solid 1px; margin-top: 10px; margin-bottom: 10px;">Delete</button></a>
                        </td>
                        </tr>
                        <?php } ?>
                    </tbody>
                </table>
                <br>
                <td align="center">
                    <a href="<?php echo base_url()."My_Controller/download/".$x['id_user']; ?>"><button class="btn btn-primary" style="border: solid 1px; margin-top: 10px; margin-bottom: 10px;">Download Excel</button></a>
                </td>
                        
                    </form>
            </div>
            
            <!-- /.container-fluid -->
        </div>
        <!-- /#page-wrapper -->
    </div>
    <!-- /#wrapper -->
    <!-- jQuery -->
    <script src="<?php echo base_url()?>assets/admin/js/jquery.js"></script>
    <!-- Bootstrap Core JavaScript -->
    <script src="<?php echo base_url()?>assets/admin/js/bootstrap.min.js"></script>
</body>
</html>
