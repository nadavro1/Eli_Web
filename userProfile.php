<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="generator" content="Mobirise v3.12.1, mobirise.com">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="Web Maker Description">
  <title>הפרופיל האישי שלי</title>
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic&amp;subset=latin">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat:400,700">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i">
  <link rel="stylesheet" href="assets/bootstrap-material-design-font/css/material.css">
  <link rel="stylesheet" href="assets/et-line-font-plugin/style.css">
  <link rel="stylesheet" href="assets/tether/tether.min.css">
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets/dropdown/css/style.css">
  <link rel="stylesheet" href="assets/animate.css/animate.min.css">
  <link rel="stylesheet" href="assets/theme/css/style.css">
  <link rel="stylesheet" href="assets/mobirise/css/mbr-additional.css" type="text/css">
    <link rel="stylesheet" type="text/css" href="styles.css">
    <script src="jquery-3.2.1.min.js"></script>
    <script src="custom.js"></script>
  
  
  
</head>

<body>
<?php
session_start();
$first_name=$_SESSION['first_name'];
$last_name=$_SESSION['last_name'];
$email=$_SESSION['email'];

?>


    <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xs-offset-0 col-sm-offset-0 col-md-offset-3 col-lg-offset-3 toppad" style="padding-top: 10% ">


        <div class="panel panel-info" style="direction: rtl">

            <div class="panel-body">
                <div class="row">


                    <div class=" col-md-9 col-lg-9 ">
                        <table class="table table-user-information">
                            <tbody>
                            <tr>
                                <td>שם פרטי:</td>
                                <td><?php echo $first_name ?></td>
                            </tr>
                            <tr>
                                <td>שם משפחה:</td>
                                <td><?php echo $last_name ?></td>
                            </tr>

                            <tr>
                            <tr>
                                <td>טלפון:</td>
                                <td>?</td>
                            </tr>

                            <tr>
                                <td>מייל:</td>
                                <td><a><?php echo $email ?></a></td>


                            </tbody>
                        </table>
                        <br>


                    </div>
                </div>
            </div>


        </div>
    </div>


<section id="ext_menu-h">

    <nav class="navbar navbar-dropdown navbar-fixed-top">
        <div class="container">

            <div class="mbr-table">
                <div class="mbr-table-cell">

                    <div class="navbar-brand">
                        <a href="" class="navbar-logo"><img src="assets/images/kapalogo4-365x128.jpg" alt=""></a>
                        <a class="navbar-caption" href="">צור קשר</a>
                    </div>

                </div>
                <div class="mbr-table-cell">

                    <button class="navbar-toggler pull-xs-right hidden-md-up" type="button" data-toggle="collapse" data-target="#exCollapsingNavbar">
                        <div class="hamburger-icon"></div>
                    </button>

                    <ul class="nav-dropdown collapse pull-xs-right nav navbar-nav navbar-toggleable-sm" id="exCollapsingNavbar"><li class="nav-item"><a class="nav-link link" href="/"></a></li><li class="nav-item nav-btn"><a class="nav-link btn btn-white" href="">יציאה</a></li></ul>
                    <button hidden="" class="navbar-toggler navbar-close" type="button" data-toggle="collapse" data-target="#exCollapsingNavbar">
                        <div class="close-icon"></div>
                    </button>

                </div>
            </div>

        </div>
    </nav>

</section>

<section class="engine"><a rel="external" href=""></a></section><section class="mbr-section mbr-section-hero mbr-section-full mbr-parallax-background mbr-section-with-arrow mbr-after-navbar" id="header1-i" style="background-image: url(assets/images/1-2000x1333.jpg);">

    <div class="mbr-overlay" style="opacity: 0.2; background-color: rgb(193, 193, 193);"></div>

    <div class="mbr-table-cell">

        <div class="container">
            <div class="row">
                <div class="mbr-section col-md-10 col-md-offset-1 text-xs-center">

                    <h1 class="mbr-section-title display-1"><br><em><br></em></h1>
                    <p class="mbr-section-lead lead"></p>
                    <div class="mbr-section-btn">    <a class="btn btn-lg btn-white-outline btn-white" href=""><span class="etl-icon icon-calendar mbr-iconfont mbr-iconfont-btn"></span>בטל תור</a> <a class="btn btn-lg btn-white-outline btn-white" href=""><span class="etl-icon icon-calendar mbr-iconfont mbr-iconfont-btn"></span>קבע תור</a>  <a class="btn btn-lg btn-white-outline btn-white" href=""><span class="etl-icon icon-edit mbr-iconfont mbr-iconfont-btn"></span>עריכת פרופיל</a> <a class="btn btn-lg btn-white-outline btn-white" href=""><span class="etl-icon icon-envelope mbr-iconfont mbr-iconfont-btn"></span>צור קשר</a>        </div>
                </div>
            </div>
        </div>
    </div>

    <div class="mbr-arrow mbr-arrow-floating" aria-hidden="true"><a href="#footer1-d"><i class="mbr-arrow-icon"></i></a></div>

</section>

<footer class="mbr-small-footer mbr-section mbr-section-nopadding" id="footer1-d" style="background-color: rgb(50, 50, 50); padding-top: 3.5rem; padding-bottom: 3.5rem;">
    
    <div class="container">
        <p class="text-xs-center"><span style="line-height: 1.5;"><strong>אלי קפלוטו | מעצב שיער</strong></span><br><span style="line-height: 1.5;">ויצמן 76 קרית מוצקין 04-8704980</span><br></p>
    </div>
</footer>


  <script src="assets/web/assets/jquery/jquery.min.js"></script>
  <script src="assets/tether/tether.min.js"></script>
  <script src="assets/bootstrap/js/bootstrap.min.js"></script>
  <script src="assets/smooth-scroll/smooth-scroll.js"></script>
  <script src="assets/dropdown/js/script.min.js"></script>
  <script src="assets/touch-swipe/jquery.touch-swipe.min.js"></script>
  <script src="assets/viewport-checker/jquery.viewportchecker.js"></script>
  <script src="assets/jarallax/jarallax.js"></script>
  <script src="assets/theme/js/script.js"></script>
  
  
  <input name="animation" type="hidden">
  </body>

</html>