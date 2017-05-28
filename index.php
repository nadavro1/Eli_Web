<?php
session_start();
//echo '<pre>' . print_r($_SESSION, TRUE) . '</pre>';
if (isset($_SESSION['connect'])) {
    if ($_SESSION['connect'] == "connected") {
        header('Location: userProfile');
    }
}

?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="generator" content="Mobirise v3.12.1, mobirise.com">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="shortcut icon" href="assets/images/logo.png" type="image/x-icon">
  <meta name="description" content="">
  
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic&amp;subset=latin">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat:400,700">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i">
  <link rel="stylesheet" href="assets/bootstrap-material-design-font/css/material.css">
  <link rel="stylesheet" href="assets/et-line-font-plugin/style.css">
  <link rel="stylesheet" href="assets/tether/tether.min.css">
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets/animate.css/animate.min.css">
  <link rel="stylesheet" href="assets/socicon/css/styles.css">
  <link rel="stylesheet" href="assets/theme/css/style.css">
  <link rel="stylesheet" href="assets/mobirise-gallery/style.css">
  <link rel="stylesheet" href="assets/mobirise/css/mbr-additional.css" type="text/css">
  
  
  
</head>
<body>
<section class="mbr-section mbr-section-hero mbr-section-full mbr-parallax-background mbr-section-with-arrow" id="header1-0" style="background-image: url(assets/images/1-2000x1333.jpg);">

    <div class="mbr-overlay" style="opacity: 0; background-color: rgb(193, 193, 193);"></div>

    <div class="mbr-table-cell">

        <div class="container">
            <div class="row">
                <div class="mbr-section col-md-10 col-md-offset-1 text-xs-center">

                    <h1 class="mbr-section-title display-1"><em>ברוכים הבאים לתוכנת קפלוטו<br></em><em><br></em></h1>
                    <p class="mbr-section-lead lead"></p>
                    <div class="mbr-section-btn">   <a class="btn btn-lg btn-white-outline btn-white" href=""><span class="etl-icon icon-calendar mbr-iconfont mbr-iconfont-btn"></span>קבע תור ללא רישום</a> <a class="btn btn-lg btn-white-outline btn-white" href="Register.php"><span class="etl-icon icon-profile-male mbr-iconfont mbr-iconfont-btn"></span>הירשם</a> <a class="btn btn-lg btn-white-outline btn-white" href="\Eli_Web1\LogInScreen.php" ><span class="etl-icon icon-key mbr-iconfont mbr-iconfont-btn"></span>התחבר/י</a>  <a class="btn btn-lg btn-white-outline btn-white" href=""><span class="socicon socicon-viber mbr-iconfont mbr-iconfont-btn"></span>צור קשר</a> <a class="btn btn-lg btn-white-outline btn-white" href="about.php"><span class="etl-icon icon-scissors mbr-iconfont mbr-iconfont-btn"></span>אודות</a>  </div>
                </div>
            </div>
        </div>
    </div>

    <div class="mbr-arrow mbr-arrow-floating" aria-hidden="true"><a href="#footer1-3"><i class="mbr-arrow-icon"></i></a></div>

</section>

<section class="engine"><a rel="external" href="">Website Creator</a></section><section class="mbr-gallery mbr-section mbr-section-nopadding mbr-slider-carousel" id="gallery1-c" data-filter="false" style="background-color: rgb(59, 55, 52); padding-top: 0rem; padding-bottom: 0rem;">
    <!-- Filter -->
    

    <!-- Gallery -->
    <div class="mbr-gallery-row container">
        <div class=" mbr-gallery-layout-default">
            <div>
                <div>
                    <div class="mbr-gallery-item mbr-gallery-item__mobirise3 mbr-gallery-item--p0" data-tags="Creative" data-video-url="false">
                        <div href="#lb-gallery1-c" data-slide-to="0" data-toggle="modal">
                            
                            

                            <img alt="" src="assets/images/download-1-2000x1508-800x603.jpg">
                            
                            <span class="icon-focus"></span>
                            
                        </div>
                    </div><div class="mbr-gallery-item mbr-gallery-item__mobirise3 mbr-gallery-item--p0" data-tags="Creative" data-video-url="false">
                        <div href="#lb-gallery1-c" data-slide-to="1" data-toggle="modal">
                            
                            

                            <img alt="" src="assets/images/download-2000x1105-800x442.jpg">
                            
                            <span class="icon-focus"></span>
                            
                        </div>
                    </div><div class="mbr-gallery-item mbr-gallery-item__mobirise3 mbr-gallery-item--p0" data-tags="Creative" data-video-url="false">
                        <div href="#lb-gallery1-c" data-slide-to="2" data-toggle="modal">
                            
                            

                            <img alt="" src="assets/images/eliksasha-2000x1504-800x601.jpg">
                            
                            <span class="icon-focus"></span>
                            
                        </div>
                    </div><div class="mbr-gallery-item mbr-gallery-item__mobirise3 mbr-gallery-item--p0" data-tags="Creative" data-video-url="false">
                        <div href="#lb-gallery1-c" data-slide-to="3" data-toggle="modal">
                            
                            

                            <img alt="" src="assets/images/open12-2000x1335-800x534.jpg">
                            
                            <span class="icon-focus"></span>
                            
                        </div>
                    </div>
                </div>
            </div>
            <div class="clearfix"></div>
        </div>
    </div>

    <!-- Lightbox -->
    <div data-app-prevent-settings="" class="mbr-slider modal fade carousel slide" tabindex="-1" data-keyboard="true" data-interval="false" id="lb-gallery1-c">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-body">
                    <ol class="carousel-indicators">
                        <li data-app-prevent-settings="" data-target="#lb-gallery1-c" data-slide-to="0"></li><li data-app-prevent-settings="" data-target="#lb-gallery1-c" data-slide-to="1"></li><li data-app-prevent-settings="" data-target="#lb-gallery1-c" data-slide-to="2"></li><li data-app-prevent-settings="" data-target="#lb-gallery1-c" class=" active" data-slide-to="3"></li>
                    </ol>
                    <div class="carousel-inner">
                        <div class="carousel-item">
                            <img alt="" src="assets/images/download-1-2000x1508.jpg">
                        </div><div class="carousel-item">
                            <img alt="" src="assets/images/download-2000x1105.jpg">
                        </div><div class="carousel-item">
                            <img alt="" src="assets/images/eliksasha-2000x1504.jpg">
                        </div><div class="carousel-item active">
                            <img alt="" src="assets/images/open12-2000x1335.jpg">
                        </div>
                    </div>
                    <a class="left carousel-control" role="button" data-slide="prev" href="#lb-gallery1-c">
                        <span class="icon-prev" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="right carousel-control" role="button" data-slide="next" href="#lb-gallery1-c">
                        <span class="icon-next" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>

                    <a class="close" href="#" role="button" data-dismiss="modal">
                        <span aria-hidden="true">×</span>
                        <span class="sr-only">Close</span>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

<footer class="mbr-small-footer mbr-section mbr-section-nopadding" id="footer1-3" style="background-color: rgb(50, 50, 50); padding-top: 1.75rem; padding-bottom: 0.875rem;">
    
    <div class="container">
        <p class="text-xs-center"><span style="line-height: 1.5;"><strong>אלי קפלוטו | מעצב שיער</strong></span><br><span style="line-height: 1.5;">ויצמן 76 קרית מוצקין 04-8704980</span><br></p>
    </div>
</footer>


  <script src="assets/web/assets/jquery/jquery.min.js"></script>
  <script src="assets/tether/tether.min.js"></script>
  <script src="assets/bootstrap/js/bootstrap.min.js"></script>
  <script src="assets/smooth-scroll/smooth-scroll.js"></script>
  <script src="assets/jarallax/jarallax.js"></script>
  <script src="assets/viewport-checker/jquery.viewportchecker.js"></script>
  <script src="assets/masonry/masonry.pkgd.min.js"></script>
  <script src="assets/imagesloaded/imagesloaded.pkgd.min.js"></script>
  <script src="assets/bootstrap-carousel-swipe/bootstrap-carousel-swipe.js"></script>
  <script src="assets/theme/js/script.js"></script>
  <script src="assets/mobirise-gallery/player.min.js"></script>
  <script src="assets/mobirise-gallery/script.js"></script>
  
  
  <input name="animation" type="hidden">
  </body>
</html>
