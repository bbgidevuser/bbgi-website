<?php include('config.php'); ?>
<!DOCTYPE html>
<!-- ==============================
    Project:        Metronic "Asentus" Frontend Freebie - Responsive HTML Template Based On Twitter Bootstrap 3.3.4
    Version:        1.0
    Author:         KeenThemes
    Primary use:    Corporate, Business Themes.
    Email:          support@keenthemes.com
    Follow:         http://www.twitter.com/keenthemes
    Like:           http://www.facebook.com/keenthemes
    Website:        http://www.keenthemes.com
    Premium:        Premium Metronic Admin Theme: http://themeforest.net/item/metronic-responsive-admin-dashboard-template/4021469?ref=keenthemes
================================== -->
<html lang="en" class="no-js">
    <!-- BEGIN HEAD -->
    <head>
        <meta charset="utf-8"/>
        <title>Black Business Growth Initiative</title>
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta content="width=device-width, initial-scale=1" name="viewport"/>
        <meta content="" name="description"/>
        <meta content="" name="author"/>
        <!--<meta http-equiv="Content-Security-Policy" content="script-src 'self' contact-us/contact-us.php">-->


        <!-- GLOBAL MANDATORY STYLES -->
        <link href="http://fonts.googleapis.com/css?family=Hind:300,400,500,600,700" rel="stylesheet" type="text/css">
        <link href="vendor/simple-line-icons/simple-line-icons.min.css" rel="stylesheet" type="text/css"/>
        <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>

        <!-- PAGE LEVEL PLUGIN STYLES -->
        <link href="css/animate.css" rel="stylesheet">

        <!-- THEME STYLES -->
        <link href="css/layout.min.css" rel="stylesheet" type="text/css"/>

        <!-- Favicon -->
        <link rel="shortcut icon" href="favicon.ico"/>
    </head>
    <!-- END HEAD -->

    <!-- BODY -->
    <body>

        <!--========== HEADER ==========-->
        <header class="header navbar-fixed-top">
            <!-- Navbar -->
            <nav class="navbar" role="navigation">
                <div class="container">
                    <!-- Brand and toggle get grouped for better mobile display -->
                    <div class="menu-container">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".nav-collapse">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="toggle-icon"></span>
                        </button>

                        <!-- Logo -->
                        <div class="logo">
                            <a class="logo-wrap" href="index.php">
                                <img class="logo-img logo-img-main" src="img/transparent.png" alt="Asentus Logo">
                                <img class="logo-img logo-img-active" src="img/transparent.png" alt="Asentus Logo">
                            </a>
                        </div>
                        <!-- End Logo -->
                    </div>

                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="collapse navbar-collapse nav-collapse">
                        <div class="menu-container">
                            <ul class="navbar-nav navbar-nav-right">
                                <li class="nav-item"><a class="nav-item-child nav-item-hover" href="index.php">Home</a></li>
                                <li class="nav-item"><a class="nav-item-child nav-item-hover" href="about.php">About</a></li>
                                <li class="nav-item"><a class="nav-item-child nav-item-hover" href="events.php">Events</a></li>
                                <li class="nav-item"><a class="nav-item-child nav-item-hover" href="membership.php">Membership</a></li>
                                <li class="nav-item"><a class="nav-item-child nav-item-hover" href="marketplace.php">Marketplace</a></li>
                                <li class="nav-item"><a class="nav-item-child nav-item-hover" href="faq.php">FAQ</a></li>
                                <li class="nav-item"><a class="nav-item-child nav-item-hover active" href="contact.php">Contact</a></li>
                            </ul>
                        </div>
                    </div>
                    <!-- End Navbar Collapse -->
                </div>
            </nav>
            <!-- Navbar -->
        </header>
        <!--========== END HEADER ==========-->

        <!--========== PARALLAX ==========-->
        <?php $a= mysql_query("select * from contact where id=1");
        $b = mysql_fetch_array($a);
        ?>
        <div class="parallax-window" data-parallax="scroll" data-image-src="img/1920x1080/19.jpg">
            <div class="parallax-content container">
                <!--<h1 class="carousel-title">Contact</h1>-->
                <h1 class="carousel-title"><?php echo $b['header']; ?></h1>
                <!--<p>Reach out to us using any of the below mediums, alternatively you can visit us at our Cape Town office</p>-->
            </div>
        </div>
        <!--========== PARALLAX ==========-->

        <!--========== PAGE LAYOUT ==========-->
        <!-- Contact List -->
        <div class="section-seperator">
            <div class="content-lg container">
                <div class="row">
                    <!-- Contact List -->
                    <div class="col-sm-4 sm-margin-b-50">
                        <div class="wow fadeInLeft" data-wow-duration=".3" data-wow-delay=".3s">
                            <!--<h3><a href="#">Cape Town</a> <span class="text-uppercase margin-l-20">Head Office</span></h3>-->
                            <h3><a href="#"><?php echo $b['location']; ?></a> <span class="text-uppercase margin-l-20"><?php echo $b['office']; ?></span></h3>
                            <!--<p>Spaces Office Building, 1 Bridgeway Road, Bridgeways Precinct, Century City, Cape Town</p>-->
                            <p><?php echo $b['address']; ?></p>
                            <ul class="list-unstyled contact-list">
                                <!--<li><i class="margin-r-10 color-base icon-call-out"></i> 021 830 5415</li>-->
                                <li><i class="margin-r-10 color-base icon-call-out"></i> <?php echo $b['telephone']; ?></li>
                                <!--<li><i class="margin-r-10 color-base icon-envelope"></i> info@goldours.co.za</li>-->
                                <li><i class="margin-r-10 color-base icon-envelope"></i> <?php echo $b['email']; ?></li>
                            </ul>

                            <div class="contact100-form-social flex-c-m">
                                <a href="#" class="contact100-form-social-item flex-c-m bg1 m-r-5">
                                    <i class="fa fa-facebook-f" aria-hidden="true"></i>
                                </a>

                                <a href="#" class="contact100-form-social-item flex-c-m bg2 m-r-5">
                                    <i class="fa fa-twitter" aria-hidden="true"></i>
                                </a>

                                <a href="#" class="contact100-form-social-item flex-c-m bg3">
                                    <i class="fa fa-youtube-play" aria-hidden="true"></i>
                                </a>
                            </div>

                        </div>
                    </div>
                    <!-- End Contact List -->

                    <!-- Contact List -->
                    <!--<div class="col-sm-4 sm-margin-b-50">
                        <div class="wow fadeInLeft" data-wow-duration=".3" data-wow-delay=".3s">
                            <h3><a href="#">London</a> <span class="text-uppercase margin-l-20">Operation</span></h3>
                            <p>Lorem ipsum dolor sit amet consectetur adipiscing elit sed tempor incdidunt ut laboret dolor magna ut consequat siad esqudiat dolor</p>
                            <ul class="list-unstyled contact-list">
                                <li><i class="margin-r-10 color-base icon-call-out"></i> 44 77 3456 7890</li>
                                <li><i class="margin-r-10 color-base icon-envelope"></i> operation@acidus.com</li>
                            </ul>
                        </div>
                    </div>-->
                    <!-- End Contact List -->

                    <!-- Contact List -->
                    <!--<div class="col-sm-4 sm-margin-b-50">
                        <div class="wow fadeInLeft" data-wow-duration=".3" data-wow-delay=".3s">
                            <h3><a href="#">Singapore</a> <span class="text-uppercase margin-l-20">Finance</span></h3>
                            <p>Lorem ipsum dolor sit amet consectetur adipiscing elit sed tempor incdidunt ut laboret dolor magna ut consequat siad esqudiat dolor</p>
                            <ul class="list-unstyled contact-list">
                                <li><i class="margin-r-10 color-base icon-call-out"></i> 50 012 456 7890</li>
                                <li><i class="margin-r-10 color-base icon-envelope"></i> finance@acidus.com</li>
                            </ul>
                        </div>
                    </div>-->
                    <!-- End Contact List -->
                </div>
                <!--// end row -->
            </div>
        </div>
        <!-- End Contact List -->

        <!-- Google Map -->
        <!--<div id="map" class="map height-400"></div>-->
        <div>
            <!--<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d13576.173707691703!2d28.68970693176874!3d-31.71470869728018!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x31db05bfafafccb6!2sIdwala+Lam+Guest+House!5e0!3m2!1sen!2sza!4v1480009670975" width="1300" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>-->
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3311.8554004396547!2d18.502267815476717!3d-33.893377727766776!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x1dcc5c10cac442ef%3A0x302a343737bbf168!2sSpaces%20-%20Cape%20Town%2C%20Century%20City!5e0!3m2!1sen!2sza!4v1585970838545!5m2!1sen!2sza" width="1350" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
        </div>


        <!-- Promo Section -->
       <!--<div class="promo-section overflow-h">
            <div class="container">
                <div class="clearfix">
                    <div class="ver-center">
                        <div class="ver-center-aligned">
                            <div class="promo-section-col">
                                <h2>Supplier Database</h2>
                                <p>It is our passion to nurture and develop black business. Benefit from and service our community by signing up on our supplier database</p>
                                &lt;!&ndash;<p>Ipsum dolor sit amet consectetur adipiscing elit sed tempor incididut ut sead laboret dolore magna aliqua enim minim veniam exercitation ipsum dolor sit amet consectetur adipiscing</p>&ndash;&gt;
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="promo-section-img-right">
                <img class="img-responsive" src="img/970x970/01.jpg" alt="Content Image">
            </div>
        </div>-->
        <!-- End Promo Section -->
        <!--========== END PAGE LAYOUT ==========-->

        <!--========== FOOTER ==========-->
        <?php include('footer.php'); ?>
        <!--========== END FOOTER ==========-->
        <!--<script><?php /*header("Content-Security-Policy: script-src 'self' insert-contact.php");*/?></script>-->
        <!--<script src="insert-contact.php"></script>-->
        <!-- Back To Top -->
        <a href="javascript:void(0);" class="js-back-to-top back-to-top">Top</a>

        <!-- JAVASCRIPTS(Load javascripts at bottom, this will reduce page load time) -->
        <!-- CORE PLUGINS -->
        <script src="vendor/jquery.min.js" type="text/javascript"></script>
        <script src="vendor/jquery-migrate.min.js" type="text/javascript"></script>
        <script src="vendor/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>

        <!-- PAGE LEVEL PLUGINS -->
        <script src="vendor/jquery.easing.js" type="text/javascript"></script>
        <script src="vendor/jquery.back-to-top.js" type="text/javascript"></script>
        <script src="vendor/jquery.smooth-scroll.js" type="text/javascript"></script>
        <script src="vendor/jquery.wow.min.js" type="text/javascript"></script>
        <script src="vendor/jquery.parallax.min.js" type="text/javascript"></script>

        <!-- PAGE LEVEL SCRIPTS -->
        <script src="js/layout.min.js" type="text/javascript"></script>
        <script src="js/components/wow.min.js" type="text/javascript"></script>
        <script src="js/components/gmap.min.js" type="text/javascript"></script>
        <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBsXUGTFS09pLVdsYEE9YrO2y4IAncAO2U&amp;callback=initMap" async defer></script>
    </body>
    <!-- END BODY -->
</html>
