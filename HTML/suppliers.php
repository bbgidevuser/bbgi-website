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

        <!-- GLOBAL MANDATORY STYLES -->
        <link href="http://fonts.googleapis.com/css?family=Hind:300,400,500,600,700" rel="stylesheet" type="text/css">
        <link href="vendor/simple-line-icons/simple-line-icons.min.css" rel="stylesheet" type="text/css"/>
        <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>

        <!-- PAGE LEVEL PLUGIN STYLES -->
        <link href="css/animate.css" rel="stylesheet">
        <link href="vendor/swiper/css/swiper.min.css" rel="stylesheet" type="text/css"/>

        <!-- THEME STYLES -->
        <link href="css/layout.min.css" rel="stylesheet" type="text/css"/>

        <!-- Favicon -->
        <link rel="shortcut icon" href="favicon.ico"/>

        <!--===============================================================================================-->
        <link rel="icon" type="image/png" href="suppliers/images/icons/favicon.ico"/>
        <!--===============================================================================================-->
        <link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
        <!--===============================================================================================-->
        <link rel="stylesheet" type="text/css" href="suppliers/fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
        <!--===============================================================================================-->
        <link rel="stylesheet" type="text/css" href="suppliers/vendor/animate/animate.css">
        <!--===============================================================================================-->
        <link rel="stylesheet" type="text/css" href="suppliers/vendor/css-hamburgers/hamburgers.min.css">
        <!--===============================================================================================-->
        <link rel="stylesheet" type="text/css" href="suppliers/vendor/animsition/css/animsition.min.css">
        <!--===============================================================================================-->
        <link rel="stylesheet" type="text/css" href="suppliers/vendor/select2/select2.min.css">
        <!--===============================================================================================-->
        <link rel="stylesheet" type="text/css" href="suppliers/vendor/daterangepicker/daterangepicker.css">
        <!--===============================================================================================-->
        <link rel="stylesheet" type="text/css" href="suppliers/css/util.css">
        <link rel="stylesheet" type="text/css" href="suppliers/css/main.css">
        <link rel="stylesheet" type="text/css" href="supplier-search/css/main.css">
        <!--===============================================================================================-->
        <!--<script>-->
            <!--var noresults=localStorage.getItem("no-results");-->
            <!--document.getElementById("no-results").src = (noresults);-->
        <!--</script>-->
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
                                <li class="nav-item"><a class="nav-item-child nav-item-hover" href="tickets.php">Tickets</a></li>
                                <li class="nav-item"><a class="nav-item-child nav-item-hover" href="events.php">Events</a></li>

                                <li class="nav-item dropdown">
                                    <a class="nav-item-child nav-item-hover" href="membership.php">Membership</a>
                                    <div class="dropdown-menu">
                                        <a class="dropdown-item" href="#">Business</a>
                                        <a class="dropdown-item" href="#">Individuals</a>
                                        <a class="dropdown-item" href="#">Students</a>
                                    </div>
                                </li>

                                <li class="nav-item"><a class="nav-item-child nav-item-hover active" href="suppliers.php">Suppliers</a></li>
                                <li class="nav-item"><a class="nav-item-child nav-item-hover" href="faq.php">FAQ</a></li>
                                <li class="nav-item"><a class="nav-item-child nav-item-hover" href="contact.php">Contact</a></li>
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
        <div class="parallax-window" data-parallax="scroll" data-image-src="img/1920x1080/24.jpg">
            <div class="parallax-content container">
                <h1 class="carousel-title">Suppliers</h1>
                <!--<p>Lorem ipsum dolor amet consectetur adipiscing dolore magna aliqua <br/> enim minim estudiat veniam siad venumus dolore</p>-->
            </div>
        </div>
        <!--========== PARALLAX ==========-->

        <!--========== PAGE LAYOUT ==========-->
        <div class="bg-color-sky-light" data-auto-height="true">
            <div class="content-lg container">

            </div>
        </div>
        <!--=======================================================-->
        <!-- Conditional display of suppliers and add service type -->
        <!--=======================================================-->

        <!--=======================================================-->
        <!--         Display of suppliers to go in here            -->
        <?php include('suppliers/suppliers.php'); ?>
        <!--=======================================================-->

        <!--=======================================================-->
        <!--         Display of service type to go in here         -->
        <?php include('add-service/add-service.php'); ?>
        <!--=======================================================-->


        <div class="bg-color-sky-light" data-auto-height="true">
            <div class="padding-t-sm container">
                <h2 class="text-c-align">Supplier Search</h2>
            </div>
        </div>
        <?php include('supplier-search/supplier-search.php'); ?>
        <!--========== END PAGE LAYOUT ==========-->


        <!--========== FOOTER ==========-->
        <footer class="footer">
            <!-- Links -->
            <div class="footer-seperator">
                <div class="content-lg container">
                    <div class="row">
                        <div class="col-sm-2 sm-margin-b-50">
                            <!-- List -->
                            <ul class="list-unstyled footer-list">
                                <li class="footer-list-item"><a class="footer-list-link" href="index.php">Home</a></li>
                                <li class="footer-list-item"><a class="footer-list-link" href="about.php">About</a></li>
                                <li class="footer-list-item"><a class="footer-list-link" href="events.php">Events</a></li>
                                <li class="footer-list-item"><a class="footer-list-link" href="suppliers.php">Suppliers</a></li>
                                <li class="footer-list-item"><a class="footer-list-link" href="tickets.php">Tickets</a></li>
                                <li class="footer-list-item"><a class="footer-list-link" href="#">Clients</a></li>
                                <li class="footer-list-item"><a class="footer-list-link" href="#">Careers</a></li>
                                <li class="footer-list-item"><a class="footer-list-link" href="contact.php">Contact</a></li>
                                <li class="footer-list-item"><a class="footer-list-link" href="#">Terms</a></li>
                                <li class="footer-list-item"><a class="footer-list-link" href="faq.php">FAQ</a></li>
                            </ul>
                            <!-- End List -->
                        </div>
                        <div class="col-sm-4 sm-margin-b-30">
                            <!-- List -->
                            <ul class="list-unstyled footer-list">
                                <li class="footer-list-item"><a class="footer-list-link" href="#">Twitter</a></li>
                                <li class="footer-list-item"><a class="footer-list-link" href="https://www.facebook.com/blackbusinessgrowthinitiative/">Facebook</a></li>
                                <li class="footer-list-item"><a class="footer-list-link" href="#">Instagram</a></li>
                                <li class="footer-list-item"><a class="footer-list-link" href="#">YouTube</a></li>
                            </ul>
                            <!-- End List -->
                        </div>
                    </div>
                    <!--// end row -->
                </div>
            </div>
            <!-- End Links -->

            <!-- Copyright -->
            <div class="content container">
                <div class="row">
                    <div class="col-xs-6">
                        <img class="footer-logo" src="img/transparent.png" alt="Asentus Logo">
                    </div>
                    <div class="col-xs-6 text-right">
                        <!--<p class="margin-b-0"><a class="color-base fweight-700" href="http://keenthemes.com/preview/asentus/">Asentus</a> Theme Powered by: <a class="color-base fweight-700" href="http://www.keenthemes.com/">KeenThemes.com</a></p>-->
                    </div>
                </div>
                <!--// end row -->
            </div>
            <!-- End Copyright -->
        </footer>
        <!--========== END FOOTER ==========-->

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
        <script src="vendor/swiper/js/swiper.jquery.min.js" type="text/javascript"></script>

        <!-- PAGE LEVEL SCRIPTS -->
        <script src="js/layout.min.js" type="text/javascript"></script>
        <script src="js/components/wow.min.js" type="text/javascript"></script>
        <script src="js/components/swiper.min.js" type="text/javascript"></script>

    </body>
    <!-- END BODY -->
</html>
