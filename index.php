<!DOCTYPE html>

<html lang="en">
<head>

<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>UTS Web Design and Development</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">

<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" type="text/css" />
<link rel="stylesheet" href="css/font-awesome/css/font-awesome.css" type="text/css" />
<link rel="stylesheet" href="css/style.css" type="text/css" />
<link rel="stylesheet" href="css/no-ui-slider/jquery.nouislider.css" type="text/css" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<link rel="stylesheet" href="css/colors/green.css" id="color-skins"/>

</head>
<body>

<div id="loader">
   <div class="spinner">
      <div class="cube cube0"></div>
      <div class="cube cube1"></div>
      <div class="cube cube2"></div>
      <div class="cube cube3"></div>
      <div class="cube cube4"></div>
      <div class="cube cube5"></div>
      <div class="cube cube6"></div>
      <div class="cube cube7"></div>
      <div class="cube cube8"></div>
      <div class="cube cube9"></div>
      <div class="cube cube10"></div>
      <div class="cube cube11"></div>
      <div class="cube cube12"></div>
      <div class="cube cube13"></div>
      <div class="cube cube14"></div>
      <div class="cube cube15"></div>
   </div>
</div>
<?php

include 'config.php';

session_start();

if(!isset($_SESSION['user_name'])){
   //header('location:login_form.php');
}else{
   
}

?>
<header>
   <nav class="navbar navbar-default navbar-alt" role="navigation">
      <div class="container">
         <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#main-nav">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand to-top" rel="home" href="#">
               <h3 alt="Pinterin" class="logo-big" style="color:white"><label for="name" class="icon"><i class="fa fa-user"></i></label> Welcome <span><?php if(isset($_SESSION['user_name'])){echo $_SESSION['user_name'];}else{echo "Guest";} ?></span></h3>
               <h3 alt="Printerin" class="logo-small">PRINTERIN</h3>
            </a>
         </div>

         <div class="collapse navbar-collapse" id="main-nav">
            <ul class="nav navbar-nav  navbar-right">
               <li>
                  <a class="to-top">
                     Home
                  </a>
               </li>
               <li class="to-section">
                  <a href="#services">
                     Services
                  </a>
               </li>
               <li class="to-section">
                  <a href="#aboutus">
                     About us
                  </a>
               </li>
               <li class="to-section">
                  <a href="#contactus">
                     Contact us
                  </a>
               </li>
               <?php if(!isset($_SESSION['user_name']))
                  {
                  ?>
               <li>
                  <a href="login_form.php">Login</a>
               </li>
               <?php }else{ ?>
               <li>
                  <a href="order_confirmation.php">Cart</a>
               </li>
               <li>
                  <a href="history.php">History</a>
               </li>
               <li>
                  <a href="logout.php">Log Out</a>
               </li>
               <?php } ?>

            </ul>
         </div>
      </div>
   </nav>
</header>

<section id="home-revolution-slider">
   <div class="hero">
      <div class="tp-banner-container">
         <div class="tp-banner">
            <ul>
               <li data-transition="fade" data-slotamount="7" data-masterspeed="2000" data-thumb="img/backgrounds/homescreen.jpeg" 
               data-delay="10000" data-saveperformance="on" data-title="Homescreen">
                  <img src="img/backgrounds/homescreen.jpeg" alt="slidebg1" data-bgposition="center top" data-bgfit="cover" 
                  data-bgrepeat="no-repeat">
                  <div class="tp-caption sft"
                                        data-x="center"  
                                        data-y="260"
                                        data-speed="1200"
                                        data-start="1100"
                                        data-easing="Power3.easeInOut"
                                        data-splitin="none"
                                        data-splitout="none"
                                        data-elementdelay="0.1"
                                        data-endelementdelay="0.1"
                                        data-endspeed="300"
                                        style="z-index: 4; max-width: auto; max-height: auto; white-space:normal;">
                     <h2 class="home-heading op-1">Printing To Your Solution Problems</h2>
                  </div>
                  <div class="tp-caption home-button sft fadeout"
                                        data-x="center" 
                                        data-y="400" 
                                        data-speed="1200"
                                        data-start="1550"
                                        data-easing="Power3.easeInOut"
                                        data-splitin="none"
                                        data-splitout="none"
                                        data-elementdelay="0.1"
                                        data-endelementdelay="0.1"
                                        data-endspeed="300"
                                        style="z-index: 4; max-width: auto; max-height: auto; white-space:normal;">
                     <div class="op-1">
                        <a href="orderprint_form.php" class="btn btn-primary btn-scroll">
                           ORDER PRINT
                        </a>
                     </div>
                  </div>
               </li>
               <li data-transition="fade" data-slotamount="7" data-masterspeed="2000" data-thumb="img/backgrounds/services-printerin.jpeg" data-delay="10000"  data-saveperformance="on" data-title="Services Printerin">
                  <img src="img/backgrounds/services-printerin.jpeg" alt="slidebg1" data-bgposition="center top" data-bgfit="cover" data-bgrepeat="no-repeat">

                  <div class="tp-caption sft"
                                        data-x="center"  
                                        data-y="260"
                                        data-speed="1200"
                                        data-start="1100"
                                        data-easing="Power3.easeInOut"
                                        data-splitin="none"
                                        data-splitout="none"
                                        data-elementdelay="0.1"
                                        data-endelementdelay="0.1"
                                        data-endspeed="300"
                                        style="z-index: 4; max-width: auto; max-height: auto; white-space:normal;">
                     <h2 class="home-heading op-2">Services Printerin</h2>
                  </div>
                  <div class="tp-caption home-subheading sft fadeout"
                                        data-x="center" 
                                        data-y="360" 
                                        data-speed="1200"
                                        data-start="1350"
                                        data-easing="Power3.easeInOut"
                                        data-splitin="none"
                                        data-splitout="none"
                                        data-elementdelay="0.1"
                                        data-endelementdelay="0.1"
                                        data-endspeed="300"
                                        style="z-index: 4; max-width: auto; max-height: auto; white-space:normal;">
                  </div>
                  <div class="tp-caption home-button sft fadeout"
                                        data-x="center" 
                                        data-y="400" 
                                        data-speed="1200"
                                        data-start="1550"
                                        data-easing="Power3.easeInOut"
                                        data-splitin="none"
                                        data-splitout="none"
                                        data-elementdelay="0.1"
                                        data-endelementdelay="0.1"
                                        data-endspeed="300"
                                        style="z-index: 4; max-width: auto; max-height: auto; white-space:normal;">
                     <div class="op-2">
                        <a href="orderprint_form.php" class="btn btn-primary btn-scroll">
                           WHAT WE OFFER
                        </a>
                     </div>
                  </div>
               </li>

               <li data-transition="fade" data-slotamount="7" data-masterspeed="2000" data-thumb="img/backgrounds/custom-printing.jpeg" data-delay="10000"  data-saveperformance="on" data-title="Custom Printing">
                  <img src="img/backgrounds/custom-printing.jpeg" alt="slidebg1" data-bgposition="center top" data-bgfit="cover" data-bgrepeat="no-repeat">

                  <div class="tp-caption sft"
                                        data-x="center"  
                                        data-y="260"
                                        data-speed="1200"
                                        data-start="1100"
                                        data-easing="Power3.easeInOut"
                                        data-splitin="none"
                                        data-splitout="none"
                                        data-elementdelay="0.1"
                                        data-endelementdelay="0.1"
                                        data-endspeed="300"
                                        style="z-index: 4; max-width: auto; max-height: auto; white-space:normal;">
                     <h2 class="home-heading op-3">Custom Printing</h2>
                  </div>
                  <div class="tp-caption home-subheading sft fadeout"
                                        data-x="center" 
                                        data-y="360" 
                                        data-speed="1200"
                                        data-start="1350"
                                        data-easing="Power3.easeInOut"
                                        data-splitin="none"
                                        data-splitout="none"
                                        data-elementdelay="0.1"
                                        data-endelementdelay="0.1"
                                        data-endspeed="300"
                                        style="z-index: 4; max-width: auto; max-height: auto; white-space:normal;">
                  </div>

                  <div class="tp-caption home-button sft fadeout"
                                        data-x="center" 
                                        data-y="400" 
                                        data-speed="1200"
                                        data-start="1550"
                                        data-easing="Power3.easeInOut"
                                        data-splitin="none"
                                        data-splitout="none"
                                        data-elementdelay="0.1"
                                        data-endelementdelay="0.1"
                                        data-endspeed="300"
                                        style="z-index: 4; max-width: auto; max-height: auto; white-space:normal;">
                     <div class="op-3">
                        <a href="orderprint_form.php" class="btn btn-primary btn-scroll">
                           CUSTOM PRINTING
                        </a>
                     </div>
                  </div>
               </li>
            </ul>
            <div class="tp-bannertimer"></div>
         </div>
         <div class="home-bottom">
            <div class="container text-center">
               <div class="move bounce">
                  <a href="#features" class="ion-ios-arrow-down btn-scroll">
                  </a>
               </div>
            </div>
         </div>
      </div>
   </div>
</section>

<div class="site-wrapper content">

   <section id="aboutus">
      <div class="container">
         <div class="col-md-12 text-center wow fadeInUp"><br><br>
            <h3 class="section-title">About our Company</h3>
            <p class="subheading wow fadeInUp"></p>
         </div>
         <div class="logo">
            <img style="margin-left: 550px;" src="img/poto/1.png">
            <br><br>
            <p style="text-align: justify;">Printerin merupakan perusahaan berbasis percetakan yang melayani jasa percetakan dan print brosur, stiker dan poster
               Printerin berlokasi di Gading Serpong, Tanggerang. Printerin sudah menjalankan bisnis percetakan digital selama beberapa tahun
               dan sudah melayani dan memecahkan masalah para pelanggan tentang hal percetakan.
            </p><br>
            <p style="text-align: justify;">Sesuai dengan misinya, Printerin ingin membuktikan bahwa dengan harga yang terjangkau, tidak berpengaruh pada kualitas produk. Printerin terus berinovasi dalam memberikan 
               solusi terkait masalah cetak, baik dalam desain, produksi hingga finishing yang terintegrasi baik secara digital maupun offset serta inovasi pembuatan macam-macam produk 
               cetakan yang dapat disesuaikan dengan kebutuhan pembeli baik personal maupun perusahaan.  Hal tersebut bertujuan untuk meningkatkan kualitas produk dengan mesin-mesin profesional yang dimiliki Printerin.</p>
         </div>
      </div>
   </section>

   <section id="about">
      <div class="container">
         <div class="row">
            <div class="col-md-6 text-left about-text">
               <h3 class="wow fadeInUp">Visi </h3>
               <p class="wow fadeInUp">Menjadi perusahaan percetakan digital terkemuka dan terpercaya di Indonesia dalam mengutamakan kualitas hasil dan pelayanan dari produk kami</p>
               <p class="wow fadeInUp">
               </p>
            </div>
            <div class="col-md-6 wow fadeInUp about-text">
               <h3 class="wow fadeInUp"> Misi </h3>
               <p>Terus berinovasi melakukan pengembangan kualitas produk secara maksimal demi pelayanan terbaik</p><br>
               <p>Memberi kualitas sumber daya manusia dan teknologi sesuai kebutuhan konsumen.</p>
            </div>
         </div>
      </div>
   </section><hr>

   <section id="team">
      <div class="container">
         <div class="col-md-12 text-center wow fadeInUp">
            <h3 class="section-title">Custom Printing</h3>
            <p class="subheading wow fadeInUp"></p>
         </div>
         <div class="row">
            <div class="col-md-3 col-sm-3 team-member">
               <div class="effect effects wow fadeInUp">
                  <div class="img">
                     <img style="width: 300px; height: 230px;" src="img/poto/warna.jpg" class="img-responsive" alt="" />
                     <div class="overlay">
                        <ul class="expand">
                        <a class="close-overlay hidden">
                           x
                        </a>
                     </div>
                  </div>
               </div>
               <div class="member-info wow fadeInUp">
                  <h4>Kertas</h4>
                  <p>Custom motif kertas yang diinginkan </p>
               </div>
            </div>
            <div class="col-md-3 col-sm-3 team-member">
               <div class="effect effects wow fadeInUp">
                  <div class="img">
                     <img style="width: 300px; height: 230px;" src="img/poto/brochure.jpg" class="img-responsive" alt="" />
                     <div class="overlay">
                        <a class="close-overlay hidden">
                           x
                        </a>
                     </div>
                  </div>
               </div>
               <div class="member-info wow fadeInUp">
                  <h4>Brochure</h4>
                  <p>Custom gambar brosur yang diinginkan</p>
               </div>
            </div>
            <div class="col-md-3 col-sm-3 team-member">
               <div class="effect effects wow fadeInUp">
                  <div class="img">
                     <img style="width: 300px; height: 230px;" src="img/poto/poster3.jpg" class="img-responsive" alt="" />
                     <div class="overlay">
                        <a class="close-overlay hidden">
                           x
                        </a>
                     </div>
                  </div>
               </div>
               <div class="member-info wow fadeInUp">
                  <h4>Poster</h4>
                  <p>Custom gambar poster yang diinginkan</p>
               </div>
            </div>
            <div class="col-md-3 col-sm-3 team-member">
               <div class="effect effects wow fadeInUp">
                  <div class="img">
                     <img style="height: 230px;" src="img/poto/stiker.jpg" class="img-responsive" alt="" />
                     <div class="overlay">
                        <a class="close-overlay hidden">
                           x
                        </a>
                     </div>
                  </div>
               </div>
               <div class="member-info wow fadeInUp">
                  <h4>Sticker</h4>
                  <p>Custom stiker yang diinginkan</p>
               </div>
            </div>
         </div>
      </div>
   </section>

   <hr>

   <section id="services" class="parallax-section-9">
      <div class="container">
         <div class="col-md-12 text-center">
            <h3 class="section-title wow fadeInUp">What we do.</h3>
            <p class="subheading wow fadeInUp"></p>
         </div>
         <div class="row features-row wow fadeInUp">
            <div class="col-md-4 col-sm-12 feature-column">
               <div class="feature-icon">
                  <i class="icon-eyeglasses size-2x highlight"></i>
               </div>
               <div class="feature-info">
                  <h4>Custom It Yourself</h4>
                  <p style="text-align: justify;" class="feature-description">Printer juga menyediakan sistem customize terhadap jenis produk yang ingin dicetak sehingga pelanggan dapat request atau melakukan customize jenis barang sesuai keinginan para pelanggan. Customize dapat dilakukan pada setiap jenis produk yang Printer tawarkan mulai dari poster dan brochure.</p>
               </div>
            </div>
            <div class="col-md-4 col-sm-12 white feature-column">
               <div class="feature-icon">
                  <i class="icon-lock-open size-2x highlight"></i>
               </div>
               <div class="feature-info">
                  <h4>Safe Shopping</h4>
                  <p style="text-align: justify;" class="feature-description">Printerin juga menjamin akan keselamatan dan kenyamanan para pelanggan kami saat melakukan transasksi dan belanja pada website resmi kami ini. Barang yang diberikan kepada pelanggan 100% berkualitas baik dan bagus tanpa ada kerusakan dan terjamin sampai dengan aman.</p>
               </div>
            </div>
            <div class="col-md-4 col-sm-12 white feature-column">
               <div class="feature-icon">
                  <i class="icon-energy size-2x highlight"></i>
               </div>
               <div class="feature-info">
                  <h4>Fast Production</h4>
                  <p style="text-align: justify;" class="feature-description">Printerin menyajikan berupa pelayanan yang berkualitas baik dan cepat dalam hal memproduksi pesanan pelanggan kami. Memberikan pelayanan yang baik berupa fast production dan akan dikirimkan dengan cepat dan aman hingga barang sampai ke tangan pelanggan kami.</p>
               </div>
            </div>
         </div>
         <div class="row features-row wow fadeInUp">
            <div class="col-md-4 col-sm-12 feature-column">
               <div class="feature-icon">
                  <i class="icon-eyeglasses size-2x highlight"></i>
               </div>
               <div class="feature-info">
                  <h4>Quality Product</h4>
                  <p style="text-align: justify;" class="feature-description">Printerin memberikan hasil produk dengan kualitas baik sehingga kami harapkan mendapatkan kepuasan dari pelanggan kami.</p>
               </div>
            </div>
            <div class="col-md-4 col-sm-12 white feature-column">
               <div class="feature-icon">
                  <i class="icon-lock-open size-2x highlight"></i>
               </div>
               <div class="feature-info">
                  <h4>Priced</h4>
                  <p class="feature-description">Printerin juga memberikan dan menawarkan harga yang terjangkau dan bersahabat sehingga para pelanggan tidak perlu memikirkan tentang harga</p>
               </div>
            </div>
            <div class="col-md-4 col-sm-12 white feature-column">
               <div class="feature-icon">
                  <i class="icon-energy size-2x highlight"></i>
               </div>
               <div class="feature-info">
                  <h4>100% Guarantee</h4>
                  <p class="feature-description">Garansi 100% uang kembali jika produk yang kamu terima dalam keadaan rusak atau tidak sesuai.</p>
               </div>
            </div>
         </div>
      </div>
   </section>

   <section id="contactus">
      <div class="container">
         <div class="row">
            <div class="col-md-12 text-center">
               <h3 class="section-title wow fadeInUp">Contact us</h3>
               <p class="subheading wow fadeInUp"></p>
            </div>
            <div class="col-md-7 wow fadeInUp">
               <div id="message"></div>
               <form method="post" action="contact_proses.php" name="contactform" id="contactform">
                  <fieldset>
                     <input name="name" type="text" id="name" name="name" placeholder="Name"/>
                     <input name="email" type="text" id="email" name="email" placeholder="Email"/>
                     <input name="subject" type="text" id="subject" placeholder="Subject"/>
                  </fieldset>
                  <fieldset>
                     <textarea name="comments" cols="40" rows="3" id="comments" placeholder="Message"></textarea>
                  </fieldset>
                  <button type="submit"
                  onclick="document.getElementById('contactform').style.display='none'">Send</button>
               </form>
            </div>
            <div class="col-md-5 wow fadeInLeft">
               <h4> Indonesia : </h4>
               <address>
               Jln Allogio Barat 6 No 26<br>
               Gading Serpong, Tanggerang, Banten<br>
               </address>
               
               <h4> Contact Us : </h4>
               <address>
               <abbr title="Phone">
               <strong> Phone </strong>
               </abbr> : (+62)8654678674332 <br>
               <abbr title="Email">
               <strong>Email </strong>
               </abbr> : Printerin@gmail.com
               </address>
            </div>
         </div>
      </div>
   </section>
   <br>
   <div>
   <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2377.104902947063!2d-2.9630186846112863!3d53.4308325760813!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x487b21654b02538b%3A0x84576a57e21973ff!2sAnfield!5e0!3m2!1sid!2sid!4v1650959528755!5m2!1sid!2sid" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
   </div>

   <footer id="footer">
      
      <div class="footer-copyright">
         <div class="container">
            <div class="row">
               <div class="col-md-12 text-center">
                  <h3 class="section-title wow fadeInUp">Printerin</h3>
                  <p class="wow fadeInUp"> All Rights Reserved. Copyright © 2016 
                  </p>
                  <ul class="social-icons subheading">
                     <li>
                        <a href="https://twitter.com/" target="_blank">
                           <i class="icon ion-social-twitter"></i>
                        </a>
                     </li>
                     <li>
                        <a href="https://www.facebook.com/" target="_blank">
                           <i class="icon ion-social-facebook"></i>
                        </a>
                     </li>
                     <li>
                        <a href="https://www.instagram.com/" target="_blank">
                           <i class="icon ion-social-instagram-outline"></i>
                        </a>
                     </li>
                     <li>
                        <a href="https://www.pinterest.com/" target="_blank">
                           <i class="icon ion-social-pinterest"></i>
                        </a>
                     </li>
                     <li>
                        <a href="https://www.linkedin.com/" target="_blank">
                           <i class="icon ion-social-linkedin"></i>
                        </a>
                     </li>
                     <li>
                        <a href="https://www.youtube.com/" target="_blank">
                           <i class="icon ion-social-youtube"></i>
                        </a>
                     </li>
                  </ul>
               </div>
            </div>
         </div>
      </div>
      
   </footer>

   <a id="back-to-top">
      <i class="icon ion-chevron-up"></i>
   </a>

</div>

<script type="text/javascript" src="js/plugins/jquery.min.js"></script>
<script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
<script type="text/javascript" src="js/plugins/moderniz.min.js"></script>
<script type="text/javascript" src="js/plugins/smoothscroll.min.js"></script>
<script type="text/javascript" src="js/no-ui-slider/jquery.nouislider.all.min.js"></script>
<script type="text/javascript" src="js/plugins/revslider.min.js"></script>
<script type="text/javascript" src="js/plugins/waypoints.min.js"></script>
<script type="text/javascript" src="js/plugins/parallax.min.js"></script>
<script type="text/javascript" src="js/plugins/easign1.3.min.js"></script>
<script type="text/javascript" src="js/plugins/cubeportfolio.min.js"></script>
<script type="text/javascript" src="js/plugins/owlcarousel.min.js"></script>
<script type="text/javascript" src="js/plugins/tweetie.min.js"></script>
<script type="text/javascript" src="http://maps.googleapis.com/maps/api/js"></script>
<script type="text/javascript" src="js/plugins/gmap3.min.js"></script>
<script type="text/javascript" src="js/plugins/wow.min.js"></script>
<script type="text/javascript" src="js/plugins/counterup.min.js"></script>
<script type="text/javascript" src="js/scripts.js"></script>
</body>
</html>