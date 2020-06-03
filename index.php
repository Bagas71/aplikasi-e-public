<?php 
require './admin/functions.php';

$hasilInputan = query("SELECT * FROM des_perumahan");
$keterangan   = query("SELECT * FROM tabel_keterangan");


 ?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">    
    <title>Perumahan Lili Kota Makassar</title>

    <!-- Favicon -->
    

    <!-- Font awesome -->
    <link href="assets/css/font-awesome.css" rel="stylesheet">
    <!-- Bootstrap -->
    <link href="assets/css/bootstrap.css" rel="stylesheet">   
    <!-- Slick slider -->
    <link rel="stylesheet" type="text/css" href="assets/css/slick.css">          
    <!-- Fancybox slider -->
    <link rel="stylesheet" href="assets/css/jquery.fancybox.css" type="text/css" media="screen" /> 
    <!-- Theme color -->
    <link id="switcher" href="assets/css/theme-color/default-theme.css" rel="stylesheet">          

    <!-- Main style sheet -->
    <link href="assets/css/style.css" rel="stylesheet">    

   
    <!-- Google Fonts -->
    <link href='https://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Roboto:400,400italic,300,300italic,500,700' rel='stylesheet' type='text/css'>
    

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

  </head>
  <body> 

  <!--START SCROLL TOP BUTTON -->
    <a class="scrollToTop" href="#">
      <i class="fa fa-angle-up"></i>      
    </a>
  <!-- END SCROLL TOP BUTTON -->


  <!-- Start menu -->
  <section id="mu-menu">
    <nav class="navbar navbar-default fixed-top" role="navigation">  
      <div class="container ">
        <div class="navbar-header">
          <!-- FOR MOBILE VIEW COLLAPSED BUTTON -->
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#coba" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <!-- LOGO -->              
          <!-- TEXT BASED LOGO -->
          <a class="navbar-brand" href="index.php"><i class="fa fa-university"></i><span>Perumahan Lili</span></a>
          <!-- IMG BASED LOGO  -->
          <!-- <a class="navbar-brand" href="index.html"><img src="assets/img/logo.png" alt="logo"></a> -->
        </div>
        <div id="coba" class="navbar-collapse collapse">
          <ul id="top-menu" class="nav navbar-nav navbar-right main-nav">
            <li class="active"><a href="index.php">Home</a></li>            
            <li><a href="chat/login.php">Live Chat</a></li> 
            <li><a href="lapor/lapor.html">Lapor</a></li> 
            <li><a href="dokumen.php">Dokumen</a></li> 
          </ul>                     
        </div><!--/.nav-collapse -->        
      </div>     
    </nav>
  </section>
  <!-- End menu -->

   <!-- Start Slider -->
  <section id="mu-slider">
    <!-- Start single slider item -->
    <div class="mu-slider-single">
      <div class="mu-slider-img">
        <figure>
           <img src="assets/img/slider/1.gif" alt="img">
        </figure>
      </div>
      <div class="mu-slider-content">
        <span></span>
        <h2 style="color:white">MARI KI' KE</h2>
        <h1 style="color:white">Perumahan Lili</h1>
        <span></span>
      </div>
    </div>
    <!-- Start single slider item -->
    <!-- Start single slider item -->
    <div class="mu-slider-single">
      <div class="mu-slider-img">
        <figure>
           <img src="assets/img/slider/1.png" alt="img">
        </figure>
      </div>
      <div class="mu-slider-content">
        <br><br><br>
        <span></span>
         <h1 style="color:white">AMAN DAN NYAMAN</h1>
        <span></span>
      </div>
    </div>
    <!-- Start single slider item -->     
  </section>
  <!-- End Slider -->
 

  

  <!-- Start service  -->
  <section id="mu-service">
    <div class="container">
      <div class="row">
        <div class="col-lg-12 col-md-12">
          <div class="mu-service-area">
            <!-- Start single service -->
            <div class="mu-service-single">
              <a href="sejarah.php"><span class="fa fa-university"><i class="fas fa-landmark"></i></span></a>
              <h3>Sejarah Perumahan</h3>
              <?php foreach ($keterangan as $hasil) : ?>
                  <p><?= $hasil["sejarah_perumahan"] ; ?> </p>
              <?php endforeach; ?>
            </div>
            <!-- Start single service -->
            <!-- Start single service -->
            <div class="mu-service-single">
              <a href="tentang_rt.php"><span class="fa fa-user"></span></a>
              <h3>Tentang Rt</h3>
              <?php foreach ($keterangan as $hasil) : ?>
                  <p><?= $hasil["tentang_rt"] ; ?> </p>
              <?php endforeach; ?>
            </div>
            <!-- Start single service -->
            <!-- Start single service -->
            <div class="mu-service-single">
              <a href="fasilitas_perumahan.php"><span class="fa fa-table"></span></a>
              <h3>Fasilitas Perumahan</h3>
              <?php foreach ($keterangan as $hasil) : ?>
                  <p><?= $hasil["fasilitas_perumahan"] ; ?> </p>
              <?php endforeach; ?>
            </div>
            <!-- Start single service -->
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- End service  -->

  <!-- Start testimonial -->
  <section id="mu-testimonial">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="mu-testimonial-area">
            <div id="mu-testimonial-slide" class="mu-testimonial-content">
             
              <!-- start testimonial single item -->
              <div class="mu-testimonial-item">
                <div class="mu-testimonial-quote">
                 
                  <blockquote>
                    <center><h2 style="color: white;">Deskripsi Perumahan Lili</h2></center>  
                    <!-- deskripsi perumahan -->
                    <?php foreach ($hasilInputan as $hasil) : ?>
                    <p style="text-align: center;"><?= $hasil["deskripsi"] ; ?> </p>
                    <?php endforeach; ?>
                    <!-- akhir deskripsi perumahan -->
                  </blockquote>
                </div>
               
              <!-- end testimonial single item -->
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- End testimonial -->


  <!-- Start features section -->
  <section id="mu-features">
    <div class="container">
      <div class="row">
        <div class="col-lg-12 col-md-12">
          <div class="mu-features-area">
            <!-- Start Title -->
            <div class="mu-title">
              <h2>Infomasi Penting</h2>
              <?php foreach ($keterangan as $hasil) : ?>
                  <p><?= $hasil["informasi_penting"] ; ?></p>
              <?php endforeach; ?>
            </div>
            <!-- End Title -->
            <!-- Start features content -->
            <div class="mu-features-content informasi">
              <div class="row">
                <div class="col-lg-4 col-md-4  col-sm-6">
                  <div class="mu-single-feature">
                    <span class="fa fa-book"></span>
                    <h4 class="informasi">Iuran Keaman</h4>
                    <?php foreach ($keterangan as $hasil) : ?>
                        <p style="text-align: justify;"><?= $hasil["iuran_keamanan"] ; ?></p>
                    <?php endforeach; ?>
                    <a href="iuran_keamanan.php">Lihat Detail</a>
                  </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6">
                  <div class="mu-single-feature">
                    <span class="fa fa-users"></span>
                    <h4>Hasil Rapat Warga</h4>
                    <?php foreach ($keterangan as $hasil) : ?>
                        <p style="text-align: justify;"><?= $hasil["hasil_rapat"] ; ?></p>
                    <?php endforeach; ?>
                    <a href="hasil_rapat.php">Lihat Detail</a>
                  </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6">
                  <div class="mu-single-feature">
                    <span class="fa fa-laptop"></span>
                    <h4>Iuran Sampah</h4>
                    <?php foreach ($keterangan as $hasil) : ?>
                        <p style="text-align: justify;"><?= $hasil["iuran_sampah"] ; ?></p>
                    <?php endforeach; ?>
                    <a href="iuran_sampah.php">Lihat Detail</a>
                  </div>
                </div>
              </div>
            </div>
            <!-- End features content -->
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- End features section -->

  <!-- Start contact  -->
 <section id="mu-contact">     
    <div class="mu-contact-area">
      <div class="mu-contact-right">
          <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3973.692395442614!2d119.442733714331!3d-5.1531142535165895!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dbee2c1136e2b65%3A0xe45058d0d13f842c!2sPerumahan%20Lili!5e0!3m2!1sid!2sid!4v1580530034847!5m2!1sid!2sid" width="100%" height="400" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
      </div>
    </div>
 </section>
 <!-- End contact  -->

  <!-- Start footer -->
  <footer id="mu-footer">
    <!-- start footer top -->
    <div class="mu-footer-top">
      <div class="container">
        <div class="mu-footer-top-area">
          <div class="row">
            <div class="col-lg-4 col-md-4 col-sm-4">
              <div class="mu-footer-widget">
                <h4>Kritik & Saran</h4>
                <p>Mohon berikan saran & kritik yang membangun</p>
                <form class="mu-subscribe-form">
                  <a href="saran_kritik.php" class="btn btn-primary btn-lg active" role="button" aria-pressed="true">Saran dan Kritik!</a>
                </form>               
              </div>
            </div>

            <div class="col-lg-4 col-md-4 col-sm-4">
              <div class="mu-footer-widget">
                <center>
                <h4>Informasi</h4>
                <ul>
                  <li><a href="sejarah.php">Sejarah Perumahan</a></li>
                  <li><a href="tentang_rt.php">Tentang RT</a></li>
                  <li><a href="fasilitas_perumahan.php">Fasilitas Perumahan</a></li>
                  <li><a href="iuran_keamanan.php">Iuran Keamanan</a></li>
                  <li><a href="hasil_rapat.php">Hasil Rapat Warga</a></li>
                  <li><a href="iuran_sampah.php">Iuran Sampah</a></li>
                </ul>
                </center>
              </div>
            </div>

            <div class="col-lg-4 col-md-4 col-sm-4">
              <div class="mu-footer-widget">
                <h4>Alamat</h4>
                <address>
                  <p>Jl. Boulevard, Masale, Kec. Panakkukang, Kota Makassar, Sulawesi Selatan 90231</p>
                  <p>Phone: (415) 453-1568 </p>
                </address>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- end footer top -->
    <!-- start footer bottom -->
    <div class="mu-footer-bottom">
      <div class="container">
        <div class="mu-footer-bottom-area">
          <p><?php echo "Copyright © " . (int)date('Y') . " Perumahan Lili Kota Makassar"; ?></p>
        </div>
      </div>
    </div>
    <!-- end footer bottom -->
  </footer>
  <!-- End footer -->
  
  <!-- jQuery library -->
   <script src="assets/js/jquery.min.js"></script>  
  <!-- Include all compiled plugins (below), or include individual files as needed -->
  <script src="assets/js/bootstrap.js"></script>   
  <!-- Slick slider -->
  <script type="text/javascript" src="assets/js/slick.js"></script>
  <!-- Counter -->
  <script type="text/javascript" src="assets/js/waypoints.js"></script>
  <script type="text/javascript" src="assets/js/jquery.counterup.js"></script>  
  <!-- Mixit slider -->
  <script type="text/javascript" src="assets/js/jquery.mixitup.js"></script>
  <!-- Add fancyBox -->        
  <script type="text/javascript" src="assets/js/jquery.fancybox.pack.js"></script>
  
  
  <!-- Custom js -->
  <script src="assets/js/custom.js"></script> 

  </body>
</html>