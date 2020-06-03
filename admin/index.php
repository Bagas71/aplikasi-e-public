<?php 
 session_start();

 if(!isset($_SESSION["login"]) ){
    header("Location: login.php");
    exit;
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

    <title>Admin Perumahan Lili</title>

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
        <img src="images/logo.png" alt="">
    </a>
    <div class="sidebar-toggle-box">
        <div class="fa fa-bars"></div>
    </div>
</div>
<!--logo end-->

     
<!-- bagian untuk menampilkan user -->
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
        <!-- akhir dari sintax untuk menampilkan user -->
    </ul>
    <!--search & user info end-->
</div>
</header>
<!--header end-->
<!--sidebar start-->
<aside>
    <div id="sidebar" class="nav-collapse">
        <!-- sidebar menu start-->
        <div class="leftside-navigation">
            <ul class="sidebar-menu" id="nav-accordion">
                <li>
                    <a class="active" href="index.php">
                        <i class="fa fa-dashboard"></i>
                        <span>Dashboard</span>
                    </a>
                </li>

        <!-- bagian dari Menginput Data -->
                <li class="sub-menu">
                    <a href="javascript:;">
                        <i class="fa fa-th"></i>
                        <span>Menginput Data</span>
                    </a>
                    <ul class="sub">
                        <li><a href="input_deskripsi.php">Deskripsi Perumahan</a></li>
                        <li><a href="input_keterangan.php">Keterangan</a></li>
                        <li><a href="input_sejarah.php">Sejarah Perumahan</a></li>
                        <li><a href="input_tentangRt.php">Tentang RT</a></li>
                        <li><a href="input_fasilitas.php">Fasilitas Perumahan</a></li>
                        <li><a href="input_iuran_keamanan.php">Iuran Keamanan</a></li>
                        <li><a href="input_rapat_warga.php">Hasil Rapat Warga </a></li>
                        <li><a href="input_iuran_sampah.php">Iuran Sampah </a></li>
                        <li><a href="input_dokumen.php">Dokumen </a></li>
                        <li><a href="input_data_warga.php">Data Warga </a></li>
                    </ul>
                </li>
         <!-- akhir dari Menginput Data --> 

         <!-- bagian dari hasil Menginput Data -->
                <li class="sub-menu">
                    <a href="javascript:;">
                        <i class="fa fa-th"></i>
                        <span>Hasil Menginput Data</span>
                    </a>
                    <ul class="sub">
                        <li><a href="hasil_input_deskripsi.php">Laporan Deskripsi Perumahan</a></li>
                        <li><a href="hasil_input_keterangan.php">Laporan Keterangan</a></li>
                        <li><a href="hasil_input_sejarah.php">Laporan Sejarah Perumahan</a></li>
                        <li><a href="hasil_input_tentangRt.php">Laporan Tentang RT</a></li>
                        <li><a href="hasil_input_fasilitas.php">Laporan Fasilitas Perumahan</a></li>
                        <li><a href="hasil_input_iuran_keamanan.php">Laporan Iuran Keamanan</a></li>
                        <li><a href="hasil_input_rapat_warga.php">Laporan Hasil Rapat Warga</a></li>
                        <li><a href="hasil_input_iuran_sampah.php">Laporan Iuran Sampah</a></li>
                        <li><a href="hasil_input_dokumen.php">Laporan Dokumen</a></li>
                        <li><a href="hasil_input_data_warga.php">Laporan Data Warga</a></li>
                    </ul>
                </li>
         <!-- akhir dari hasil Menginput Data --> 

         <!-- bagian dari kritik dan saran -->
                <li class="sub-menu">
                    <a href="javascript:;">
                        <i class="fa fa-th"></i>
                        <span>Saran & Kritik</span>
                    </a>
                    <ul class="sub">
                        <li><a href="hasil_input_kritik_saran.php">Hasil Saran & Kritik</a></li>
                    </ul>
                </li>
         <!-- akhir dari kritik dan saran -->
        <!-- sidebar menu end-->
    </div>
</aside>
<!--sidebar end-->
    <!--main content start-->
    <section id="main-content">
        <section class="wrapper">
        <!-- page start-->
        <div class="row">
            <div class="col-sm-12">
               <section class="panel panel-primary">
                    <div class="jumbotron jumbotron-fluid">
                      <div class="container">
                        <h2 class="display-4">SELAMAT DATANG ADMIN</h2>
                        <p class="lead">Silahkan mengelola konten website dengan mengedit menu yang berada sebelah kiri, inputkan data yang baik agar masyarakat mendapatkan informasi yang bermanfaat.</p>
                      </div>
                    </div>  
               </section>
            </div>
        </div>
        <!-- page end-->
        </section>
    </section>
    <!--main content end-->
</section>

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
<script src="js/flot-chart/jquery.flot.js"></script>
<script src="js/flot-chart/jquery.flot.tooltip.min.js"></script>
<script src="js/flot-chart/jquery.flot.resize.js"></script>
<script src="js/flot-chart/jquery.flot.pie.resize.js"></script>


<!--common script init for all pages-->
<script src="js/scripts.js"></script>

</body>
</html>
