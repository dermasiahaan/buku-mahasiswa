<?php
session_start();

    define('INDEX', true);
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="">
        <meta name="author" content=""> 
        <title>Admin</title>

        <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
        <script type="text/javascript" src="js/jquery-3.4.1.min.js"></script>
	    <script type="text/javascript" src="js/bootstrap.min.js"></script>
        <!-- Custom fonts for this template-->
        <link rel="short icon" href="logo.png">
        
        <!-- Custom styles for this template-->
        <link href="css/sb-admin-2.min.css" rel="stylesheet">
        <link href="css/bukutamu.css" rel="stylesheet">
        <link href="css/styleadmin.css" rel="stylesheet">
    </head>

    <body style="background-color: white">
        <!-- Page Wrapper -->
        <div id="wrapper" style="background-color: white">
            <!-- Sidebar -->
            <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">
                <!-- Sidebar - Brand -->
                <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
                    <div class="sidebar-brand-icon">
                        <img src="img/admin.ico" alt="" width="50px" height="50px">
                    </div>
                    <div class="sidebar-brand-text mx-3">Admin</div>
                </a>
                <!-- Divider -->
                <hr class="sidebar-divider my-0">
                <!-- Nav Item - Dashboard -->
                <li class="nav-item active">
                    <a class="nav-link" href="index.php">
                        <i class="fas fa-fw fa-tachometer-alt"></i>
                <span>Dashboard</span></a>
                </li>

                <!-- Divider -->
                <hr class="sidebar-divider">
                <!-- Heading -->
                <div class="sidebar-heading">Menu</div>
                <!-- Nav Item - Pages Collapse Menu -->
                <li class="nav-item">
                    <a class="nav-link collapsed" href="?hal=datamasuk" aria-controls="collapseTwo">
                    <span>Buku</span>
                    </a>    
                </li>

                <li class="nav-item">
                    <a class="nav-link collapsed" href="logout.php" aria-controls="collapseTwo">
                        <span>logout</span>
                    </a>    
                </li>


            </ul>
    <!-- End of Sidebar -->

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column" style="background-color: white; color:black">
        <!-- Main Content -->
        <div id="content">
            <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">
            <!-- Topbar Salam -->
        <form class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
            <div class="input-group">
            <h4 style="color:black    ">Selamat datang, Admin!</h4> 
            </div>
        </form>

    <!-- Topbar Navbar -->
        <ul class="navbar-nav ml-auto"> 
            <div class="topbar-divider d-none d-sm-block"></div>

            <!-- Nav Item - User Information -->
            <li class="nav-item dropdown no-arrow">
                <a class="nav-link dropdown-toggle" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <img src="logoce.png" width="100px" height="100px">
                </a>
            <!-- Dropdown - User Information --> 
            </li>
        </ul>
    </nav>

    <!-- Isi Konten -->
    <section>
        <?php
            include "konten.php";
        ?>
    </section>
    <!-- End Isi Konten -->
    <!-- End of Content Wrapper -->
  </div>
  <!-- End of Page Wrapper -->



  <!-- Bootstrap core JavaScript-->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="js/sb-admin-2.min.js"></script>

  <!-- Page level plugins -->
  <script src="vendor/chart.js/Chart.min.js"></script>

  <!-- Page level custom scripts -->
  <script src="js/demo/chart-area-demo.js"></script>
  <script src="js/demo/chart-pie-demo.js"></script>

</body>

</html>
