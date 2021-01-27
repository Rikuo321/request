<?php
include 'conn.php';
 ?>
 <!DOCTYPE html>
 <html lang="en">
 <head>
     <meta charset="utf-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <meta name="description" content="">
     <meta name="author" content="">
     <title>Request</title>
     <link href="css/bootstrap.min.css" rel="stylesheet">
     <link href="css/font-awesome.min.css" rel="stylesheet">
     <link href="css/animate.min.css" rel="stylesheet">
     <link href="css/lightbox.css" rel="stylesheet">
   	<link href="css/main.css" rel="stylesheet">
   	<link href="css/responsive.css" rel="stylesheet">

     <!--[if lt IE 9]>
 	    <script src="js/html5shiv.js"></script>
 	    <script src="js/respond.min.js"></script>
     <![endif]-->
     <link rel="shortcut icon" href="images/ico/go.png">
     <link rel="apple-touch-icon-precomposed" sizes="144x144" href="images/ico/apple-touch-icon-144-precomposed.png">
     <link rel="apple-touch-icon-precomposed" sizes="114x114" href="images/ico/apple-touch-icon-114-precomposed.png">
     <link rel="apple-touch-icon-precomposed" sizes="72x72" href="images/ico/apple-touch-icon-72-precomposed.png">
     <link rel="apple-touch-icon-precomposed" href="images/ico/apple-touch-icon-57-precomposed.png">
 </head><!--/head-->
 <style>
 #header .navbar-nav.navbar-right >li a {
  color: #cecece !important;
}
#header .navbar {
    background: #272626 !important;
}

@media only screen and (max-width: 768px){
.tour-button {
    background-image:none;
}
}

.navbar {
  border-radius: initial;
}
/* #home-slider .slider-house {
  position: absolute;
  right: 10px !important;
  bottom: -90px !important;
  height: 400px !important;
  }

  #home-slider .slider-sun {
    position: absolute;
    right: 400px !important;
    bottom: 170px !important;
} */
 </style>

 <body>

<?php include 'assets/navbar.php'; ?>

     <section id="home-slider">
         <div class="container">
             <div class="row">
                 <div class="main-slider">
                     <div class="slide-text">
                         <h1>Sangat Mudah Mencari Barang!</h1>
                         <p>Tidak pernah semudah ini dalam mencari barang!! Hanya perlu Daftar Lalu posting barang yang anda inginkan. Tidak peduli anda konsumen atau Reseller Semua lebih mudah dengan Request!</p>
                         <a href="Form.php" class="btn btn-common">DAFTAR</a>
                     </div>
                     <img src="images/home/slider/hill.png" class="slider-hill" alt="slider image">
                     <img src="images/home/slider/house.png" class="slider-house" alt="slider image">
                     <img src="images/home/slider/sun.png" class="slider-sun" alt="slider image">
                     <img src="images/home/slider/birds1.png" class="slider-birds1" alt="slider image">
                     <img src="images/home/slider/birds2.png" class="slider-birds2" alt="slider image">
                 </div>
             </div>
         </div>
         <div class="preloader"><i class="fa fa-sun-o fa-spin"></i></div>
     </section>
     <!--/#home-slider-->

     <section id="services">
         <div class="container">
             <div class="row">
               <h1 class="wow fadeIn" style="text-align:center;padding-top:30px;font-weight: 400;">Kami Persembahkan Untuk..</h1>
                 <div class="col-sm-4 text-center padding wow fadeIn" data-wow-duration="1000ms" data-wow-delay="300ms">
                     <div class="single-service">
                         <div class="wow scaleIn" data-wow-duration="500ms" data-wow-delay="300ms">
                             <img src="images/home/dist.png" alt="">
                         </div>
                         <h2>Distributor</h2>
                         <p>Dengan Request Distributor akan lebih mudah menjual kembali produk-produknya.</p>
                     </div>
                 </div>
                 <div class="col-sm-4 text-center padding wow fadeIn" data-wow-duration="1000ms" data-wow-delay="600ms">
                     <div class="single-service">
                         <div class="wow scaleIn" data-wow-duration="500ms" data-wow-delay="600ms">
                             <img src="images/home/supp.png" alt="">
                         </div>
                         <h2>Suplier</h2>
                         <p>Bagi Suplier Lebih mudah mengetahui Trend pasar dan produk yang paling dibutuhkan konsumen dengan adanya Request.</p>
                     </div>
                 </div>
                 <div class="col-sm-4 text-center padding wow fadeIn" data-wow-duration="1000ms" data-wow-delay="900ms">
                     <div class="single-service">
                         <div class="wow scaleIn" data-wow-duration="500ms" data-wow-delay="900ms">
                             <img src="images/home/cus.png" alt="">
                         </div>
                         <h2>Reseller/Konsumen</h2>
                         <p>Biasanya Reseller baru akan bingung mencari Suplier maupun Distributor Tapi dengan adanya Request hal itu menjadi masa lalu.</p>
                     </div>
                 </div>
             </div>
         </div>
     </section>
     <!--/#services-->

     <section id="action" class="responsive">
         <div class="vertical-center">
              <div class="container">
                 <div class="row">
                     <div class="action take-tour">
                         <div class="col-sm-7 wow fadeInLeft" data-wow-duration="500ms" data-wow-delay="300ms">
                             <h1 class="title">Sangat Mudah Hanya Dengan Klik!</h1>
                             <p>Siapa kami?, Mari berkenalan dengan Request.</p>
                         </div>
                         <div class="col-sm-5 text-center wow fadeInRight" data-wow-duration="500ms" data-wow-delay="300ms">
                             <div class="tour-button">
                                 <a href="#" class="btn btn-common">ABOUT US</a>
                              </div>
                         </div>
                     </div>
                 </div>
             </div>
         </div>
    </section>
     <!--/#action-->

     <section id="features">
         <div class="container">
             <div class="row">
                 <div class="single-features">
                     <div class="col-sm-5 wow fadeInLeft" data-wow-duration="500ms" data-wow-delay="300ms">
                         <img src="images/home/1.png" class="img-responsive" alt="">
                     </div>
                     <div class="col-sm-6 wow fadeInRight" data-wow-duration="500ms" data-wow-delay="300ms">
                         <h2>Website Sangat Ringan!</h2>
                         <P>Pernah kesal dengan leletnya website akibat hal yang kalian bahkan tidak ketahui?, Di Request Hal tersebut tidak akan terjadi!, Kita menggunakan Server yang terbaik untuk kalian agar transaksi lebih cepat dan nyaman! </P>
                     </div>
                 </div>

                 <div class="single-features">
                     <div class="col-sm-6 col-sm-offset-1 align-right wow fadeInLeft" data-wow-duration="500ms" data-wow-delay="300ms">
                         <h2>Tetap Santuy Meski Bisnis Teratur!</h2>
                         <P>Dulu jika ingin memulau usaha pasti hal pertama yang dicari adalah distributor, suplier. Sekarang dengan hanya memposting maka para distributor dan suplier dapat melihat kebutuhan anda, Tidak perlu lagi keliling kesana kemari.</P>
                     </div>
                     <div class="col-sm-5 wow fadeInRight" data-wow-duration="500ms" data-wow-delay="300ms">
                         <img src="images/home/2.png" class="img-responsive" alt="">
                     </div>
                 </div>

                 <div class="single-features">
                     <div class="col-sm-5 wow fadeInLeft" data-wow-duration="500ms" data-wow-delay="300ms">
                         <img src="images/home/3.png" class="img-responsive" alt="">
                     </div>
                     <div class="col-sm-6 wow fadeInRight" data-wow-duration="500ms" data-wow-delay="300ms">
                         <h2>Banyak Waktu, Banyak Profit</h2>
                         <P>Waktu yang biasanya dihabiskan untuk Survey Pasar, Mencari Produsen, Mencari Suplier, Sekarang dengan adanya Request waktu tersebut bisa digunakan untuk hal lain!, Ingin belajar hal baru? Atau Meningkatkan Manajemen Usaha? Dengan adanya waktu lebih anda bisa mencari keuntung lain!</P>
                     </div>
                 </div>
             </div>
         </div>
     </section>
      <!--/#features-->


     <footer id="footer">
         <div class="container">
             <div class="row">
                 <div class="col-sm-12 text-center bottom-separator">
                     <img src="images/home/under.png" class="img-responsive inline" alt="">
                 </div>
                 <div class="col-md-4 col-sm-6">
                     <div class="testimonial bottom">
                         <h2>Testimonial</h2>
                         <div class="media">
                             <div class="pull-left">
                                 <a href="#"><img src="images/home/o1.jpg" alt="" style="width:81px;height:81px"></a>
                             </div>
                             <div class="media-body">
                                 <blockquote>Wow Mantabque.</blockquote>
                                 <h3><a href="#">- Kentod Subroto</a></h3>
                             </div>
                          </div>
                         <div class="media">
                             <div class="pull-left">
                                 <a href="#"><img src="images/home/o2.jpg" alt="" style="width:81px;height:81px"></a>
                             </div>
                             <div class="media-body">
                                 <blockquote>Arigato Gozaimasu Request!!</blockquote>
                                 <h3><a href="">- Abdul Jamal</a></h3>
                             </div>
                         </div>
                     </div>
                 </div>
                 <div class="col-md-3 col-sm-6">
                     <div class="contact-info bottom">
                         <h2>Contacts</h2>
                         <address>
                         E-mail: <a href="#.com">Request@gmail.com</a> <br>
                         Phone: +1 (123) 456 7890 <br>
                         Fax: +1 (123) 456 7891 <br>
                         </address>

                         <h2>Address</h2>
                         <address>
                         Jember Dihati <br>
                         </address>
                     </div>
                 </div>
                 <div class="col-md-4 col-sm-12">
                     <div class="contact-form bottom">
                         <h2>Send a message</h2>
                         <form id="main-contact-form" name="contact-form" method="post" action="sendemail.php">
                             <div class="form-group">
                                 <input type="text" name="name" class="form-control" required="required" placeholder="Name">
                             </div>
                             <div class="form-group">
                                 <input type="email" name="email" class="form-control" required="required" placeholder="Email Id">
                             </div>
                             <div class="form-group">
                                 <textarea name="message" id="message" required="required" class="form-control" rows="8" placeholder="Your text here"></textarea>
                             </div>
                             <div class="form-group">
                                 <input type="submit" name="submit" class="btn btn-submit" value="Submit">
                             </div>
                         </form>
                     </div>
                 </div>
                 <div class="col-sm-12">
                     <div class="copyright-text text-center">
                         <p>&copy; Your Company 2014. All Rights Reserved.</p>
                         <p>Designed by <a target="_blank" href="http://www.themeum.com">Themeum</a></p>
                     </div>
                 </div>
             </div>
         </div>
     </footer>
     <!--/#footer-->

     <script type="text/javascript" src="js/jquery.js"></script>
     <script type="text/javascript" src="js/bootstrap.min.js"></script>
     <script type="text/javascript" src="js/lightbox.min.js"></script>
     <script type="text/javascript" src="js/wow.min.js"></script>
     <script type="text/javascript" src="js/main.js"></script>
 </body>
 </html>
