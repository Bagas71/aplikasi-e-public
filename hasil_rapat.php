<?php 
require './admin/functions.php';

$hasilInputan = query("SELECT * FROM tabel_hasil_rapat");

?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">    
    <title>Hasil Rapat Warga</title>

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
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
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
        <div id="navbar" class="navbar-collapse collapse">
          <ul id="top-menu" class="nav navbar-nav navbar-right main-nav">
            <li><a href="index.php">Home</a></li>            
            <li><a href="chat/login.php">Live Chat</a></li>  
            <li><a href="lapor/lapor.html">Lapor</a></li> 
            <li><a href="dokumen.php">Dokumen</a></li>   
          </ul>                     
        </div><!--/.nav-collapse -->        
      </div>     
    </nav>
  </section>
  <!-- End menu -->
  <!-- Start search box -->
  <div id="mu-search">
    <div class="mu-search-area">      
      <button class="mu-search-close"><span class="fa fa-close"></span></button>
      <div class="container">
        <div class="row">
          <div class="col-md-12">            
            <form class="mu-search-form">
              <input type="search" placeholder="Type Your Keyword(s) & Hit Enter">              
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- End search box -->

 <!-- Page breadcrumb -->
 <section id="mu-page-breadcrumb">
   <div class="container">
     <div class="row">
       <div class="col-md-12">
         <div class="mu-page-breadcrumb-area">
           <h2>Hasil Rapat Warga</h2>
           <ol class="breadcrumb">
            <li><a href="index.php">Home</a></li>            
            <li class="active">Hasil Rapat Warga</li>
          </ol>
         </div>
       </div>
     </div>
   </div>
 </section>
 <!-- End breadcrumb -->

 <section id="mu-course-content">
   <div class="container">
     <div class="row">
       <div class="col-md-12">
         <div class="mu-course-content-area">
            <div class="row">
              <div class="col-md-12">
               <!-- start related course item -->
                <div class="row">
                  <div class="col-md-12">
                    <div class="mu-related-item">
                      <center>
                      <h3 style="margin-top: -50px;">Hasil Rapat Warga</h3>
                      <p>Untuk rapat warga yang ada di perumahan lili dilakukan atas perintah dari pengurus yang telah ditugaskan untuk mengatur jadwal rapat, dan pergantian pengelolah/pengurus akan di ganti 3 tahun sekali, untuk hasil rapat yang sudah dilakukan bisa dilihat di bawah ini :</p>
                      </center>
                      <div class="mu-related-item-area">
                        <div id="mu-related-item-slide">
                          <?php foreach ($hasilInputan as $hasil) :?>
                          <div class="col-md-6">
                            <article class="mu-blog-single-item">
                              <figure class="mu-blog-single-img">
                                <img alt="img" height="400px" width="100%"  src="admin/images/<?= $hasil["foto"]; ?>">
                                <figcaption class="mu-blog-caption">
                                  <h3>Hasil rapat pada tanggal :</h3>
                                </figcaption>                      
                              </figure>
                              <div class="mu-blog-meta">
                                <a href="#"><?= $hasil["tanggal"]; ?></a>
                              </div>
                              <div class="mu-blog-description">
                                <a href="tampilan_hasil_rapat.php" class="mu-read-more-btn">lihat Hasil Rapat</a>
                              </div>
                            </article>
                          </div>
                          <?php endforeach; ?>  
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- end start related course item -->
             </div>
           </div>
         </div>
       </div>
     </div>
   </div>
 </section>

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
                  <a href="kritik_saran.php" class="btn btn-primary btn-lg active" role="button" aria-pressed="true">Saran dan Kritik!</a>
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