<?php
session_start();
if(!isset($_SESSION["login"]))
  {
    header("Location: login.php");
    exit;
  }
require 'functions.php';


//apakah tombol tambah sudah di tekan
if (isset($_POST["tambahFasilitas"])) {

 
    if (tambahFasilitas($_POST) > 0) {
        // data berhasil ditambahkan
        echo "
            <script>
                alert('data berhasil ditambahkan!')
                document.location.href = 'hasil_input_fasilitas.php';
            </script>

        ";
    }else{
        // data gagal di tambahkan
        echo "
            <script>
                alert('data gagal ditambahkan!')
                document.location.href = 'input_fasilitas.php';
            </script>
            ";
    }
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="ThemeBucket">
    <link rel="shortcut icon" href="images/favicon.png">

    <title>Inputan Fasilitas Perumahan</title>

    <!--Core CSS -->
    <link href="bs3/css/bootstrap.min.css" rel="stylesheet">
    <link href="css/bootstrap-reset.css" rel="stylesheet">
    <link href="font-awesome/css/font-awesome.css" rel="stylesheet" />

    <!--responsive table-->
    <link href="css/table-responsive.css" rel="stylesheet" />

    <!-- Custom styles for this template -->
    <link href="css/style.css" rel="stylesheet">
    <link href="css/style-responsive.css" rel="stylesheet" />

    <!-- Just for debugging purposes. Don't actually copy this line! -->
    <!--[if lt IE 9]>
    <script src="js/ie8-responsive-file-warning.js"></script><![endif]-->

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
</head>

<body>

<section id="container" >
<!--header start-->
<header class="header fixed-top clearfix">
<!--logo start-->
<div class="brand">

    <a href="index.php" class="logo">
        <img src="images/logo.png" alt="" >
    </a>
    <div class="sidebar-toggle-box">
        <div class="fa fa-bars"></div>
    </div>
</div>
<!--logo end-->

<div class="nav notify-row" id="top_menu">
    <!--  notification start -->
    
    <!--  notification end -->
</div>
<div class="top-nav clearfix">
    <!--search & user info start-->
    <ul class="nav pull-right top-menu">
        <!-- user login dropdown start-->
        <li class="dropdown">
            <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                <img alt="" src="images/2.png" width="33" height="33">
                <span class="username">Admin</span>
                <b class="caret"></b>
            </a>
            <ul class="dropdown-menu extended logout">
                <li><a href="registration.php"><i class="fa fa-key"></i> Tambah Admin</a></li>  
                <li><a href="logoutweb.php"><i class="fa fa-key"></i> Log Out Web</a></li>
            </ul>
        </li>
        <!-- user login dropdown end -->
        
    </ul>
    <!--search & user info end-->
</div>
</header>
<!--header end-->
<aside>
    <div id="sidebar" class="nav-collapse">
        <!-- sidebar menu start-->           
         <div class="leftside-navigation">
            <ul class="sidebar-menu" id="nav-accordion">
            <li>
                <a href="index.php">
                    <i class="fa fa-sign-out"></i>
                    <span>Kembali</span>
                </a>
            </li>
    
         
         </div>        
<!-- sidebar menu end-->
    </div>
</aside>
<!--sidebar end-->
    <!--main content start-->
    <section id="main-content">
        <section class="wrapper">
        <!-- page start-->

       <div class="col-lg-12">
                <section class="panel panel-success">
                    <header class="panel-heading">
                        Input Data Fasilitas Perumahan
                    </header>
                    <div class="panel-body">
                        <div class="position-center">
                            <center><h1>Masukan Data Baru</h1></center>
                            <form action="" method="post" enctype="multipart/form-data" class="form-horizontal" role="form">

                            <div class="form-group">
                                <label for="gambar" class="col-lg-2 col-sm-2 control-label" style="text-align: justify;">Foto</label>
                                <div class="col-lg-10">
                                    <input type="file" name="gambar"  class="form-control" id="gambar" required>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="judul" class="col-lg-2 col-sm-2 control-label" style="text-align: justify;">Judul Foto</label>
                                <div class="col-lg-10">
                                    <textarea type="text" name="judul"  class="form-control" id="judul" placeholder="Masukkan Judul Foto..." required></textarea>
                                </div>
                            </div>
                        
                            <div class="form-group">
                                <div class="col-lg-offset-2 col-lg-10">
                                    <button type="submit" name="tambahFasilitas"  class="btn btn-success btn-sm">Simpan</button> 
                                     <button type="submit" name="reset" value="reset form" class="btn btn-secondary">Reset</button> 
                                </div>
                            </div>
                        </form>
                        </div>
                    </div>
                </section>

            </div>
        </div>
    <!--main content end-->




<!-- Placed js at the end of the document so the pages load faster -->

<!--Core js-->
<script src="js/jquery.js"></script>
<script src="bs3/js/bootstrap.min.js"></script>
<script class="include" type="text/javascript" src="js/jquery.dcjqaccordion.2.7.js"></script>
<script src="js/jquery.scrollTo.min.js"></script>
<script src="js/jQuery-slimScroll-1.3.0/jquery.slimscroll.js"></script>
<script src="js/jquery.nicescroll.js"></script>
<!--Easy Pie Chart-->
<script src="js/easypiechart/jquery.easypiechart.js"></script>
<!--Sparkline Chart-->
<script src="js/sparkline/jquery.sparkline.js"></script>
<!--jQuery Flot Chart-->
<!-- <script src="js/flot-chart/jquery.flot.js"></script>
<script src="js/flot-chart/jquery.flot.tooltip.min.js"></script>
<script src="js/flot-chart/jquery.flot.resize.js"></script>
<script src="js/flot-chart/jquery.flot.pie.resize.js"></script> -->


<!--common script init for all pages-->
<script src="js/scripts.js"></script>

</body>
</html>
