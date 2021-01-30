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
                                <li class="nav-item"><a class="nav-item-child nav-item-hover active" href="tickets.php">Tickets</a></li>
                                <li class="nav-item"><a class="nav-item-child nav-item-hover" href="events.php">Events</a></li>
                                <li class="nav-item"><a class="nav-item-child nav-item-hover" href="membership.php">Membership</a></li>
                                <li class="nav-item"><a class="nav-item-child nav-item-hover" href="suppliers.php">Suppliers</a></li>
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
        <div class="parallax-window" data-parallax="scroll" data-image-src="img/1920x1080/21.jpg">
            <div class="parallax-content container">
                <!--<h1 class="carousel-title">Event Tickets</h1>-->
                <!--<p>Lorem ipsum dolor amet consectetur adipiscing dolore magna aliqua <br/> enim minim estudiat veniam siad venumus dolore</p>-->
            </div>
        </div>
        <!--========== PARALLAX ==========-->

        <!--========== PAGE LAYOUT ==========-->
        <!-- Pricing -->
        <div class="bg-color-sky-light">
            <div class="content-lg container">
                <div class="row row-space-1">
                    <div class="col-sm-4 sm-margin-b-2">
                        <div class="wow fadeInLeft" data-wow-duration=".3" data-wow-delay=".1s">
                            <!-- Pricing -->
                            <?php $a= mysql_query("select * from pricing where id=1");
                            $b = mysql_fetch_array($a);
                            ?>
                            <div class="pricing">
                                <div class="margin-b-30">
                                    <i class="pricing-icon icon-chemistry"></i>
                                    <!--<h3>Student Special <span> - R</span> 50</h3>-->
                                    <h3><?php echo $b['type']; ?> <span> - R</span> </span> <?php echo $b['price']; ?></h3>
                                    <!--<p>Take advantage of our student special and pay half the price of a normal ticket</p>-->
                                    <p><?php echo $b['description']; ?></p>
                                </div>
                                <ul class="list-unstyled pricing-list margin-b-50">
                                    <!--<li class="pricing-list-item">Discounted price</li>-->
                                    <li class="pricing-list-item"><?php echo $b['option-one']; ?></li>
                                    <!--<li class="pricing-list-item">Networking opportunity</li>-->
                                    <li class="pricing-list-item"><?php echo $b['option-two']; ?></li>
                                    <!--<li class="pricing-list-item">Business opportunity</li>-->
                                    <li class="pricing-list-item"><?php echo $b['option-three']; ?></li>
                                </ul>
                                <a href="tickets.php" class="btn-theme btn-theme-sm btn-base-bg text-uppercase">Choose</a>
                            </div>
                            <!-- End Pricing -->
                        </div>
                    </div>
                    <div class="col-sm-4 sm-margin-b-2">
                        <div class="wow fadeInUp" data-wow-duration=".3" data-wow-delay=".2s">
                            <!-- Pricing -->
                            <?php $c= mysql_query("select * from pricing where id=2");
                            $d = mysql_fetch_array($c);
                            ?>
                            <div class="pricing pricing-active">
                                <div class="margin-b-30">
                                    <i class="pricing-icon icon-badge"></i>
                                    <!--<h3>Social Media <span> - R</span> 100</h3>-->
                                    <h3><?php echo $d['type']; ?> <span> - R</span> <?php echo $d['price']; ?></h3>
                                    <!--<p>Purchase tickets on our social media platforms</p>-->
                                    <p><?php echo $d['description']; ?></p>
                                </div>
                                <ul class="list-unstyled pricing-list margin-b-50">
                                    <!--<li class="pricing-list-item">Facebook</li>-->
                                    <li class="pricing-list-item"><?php echo $d['option-one']; ?></li>
                                    <!--<li class="pricing-list-item">Webtickets</li>-->
                                    <li class="pricing-list-item"><?php echo $d['option-two']; ?></li>
                                    <!--<li class="pricing-list-item">Instagram</li>-->
                                    <li class="pricing-list-item"><?php echo $d['option-three']; ?></li>
                                </ul>
                                <a href="https://www.facebook.com/pg/blackbusinessgrowthinitiative/events/?ref=page_internal" class="btn-theme btn-theme-sm btn-base-bg text-uppercase">Choose</a>
                            </div>
                            <!-- End Pricing -->
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="wow fadeInRight" data-wow-duration=".3" data-wow-delay=".1s">
                            <!-- Pricing -->
                            <?php $e= mysql_query("select * from pricing where id=3");
                            $f = mysql_fetch_array($e);
                            ?>
                            <div class="pricing">
                                <div class="margin-b-30">
                                    <i class="pricing-icon icon-shield"></i>
                                    <!--<h3>Website Platform <span> - R</span> 100</h3>-->
                                    <h3><?php echo $f['type']; ?> <span> - R</span> <?php echo $f['price']; ?></h3>
                                    <!--<p>Use your credit or debit card to purchase tickets directly from our website</p>-->
                                    <p><?php echo $f['description']; ?></p>
                                </div>
                                <ul class="list-unstyled pricing-list margin-b-50">
                                   <!-- <li class="pricing-list-item">Credit Card Purchase</li>-->
                                    <li class="pricing-list-item"><?php echo $f['option-one']; ?></li>
                                    <!--<li class="pricing-list-item">Debit Card Purchase</li>-->
                                    <li class="pricing-list-item"><?php echo $f['option-two']; ?></li>
                                    <!--<li class="pricing-list-item">Paypal</li>-->
                                    <li class="pricing-list-item"><?php echo $f['option-three']; ?></li>
                                </ul>
                                <a href="tickets.php" class="btn-theme btn-theme-sm btn-base-bg text-uppercase">Choose</a>
                            </div>
                            <!-- End Pricing -->
                        </div>
                    </div>
                </div>
                <!--// end row -->
            </div>
        </div>
        <!-- End Pricing -->

        <!-- Testimonials -->
      <!--  <div class="content-lg container">
            <div class="row">
                <div class="col-sm-9">
                    <h2>Why Customers Are Choosing Asentus?</h2>

                    &lt;!&ndash; Swiper Testimonials &ndash;&gt;
                    <div class="swiper-slider swiper-testimonials">
                        &lt;!&ndash; Swiper Wrapper &ndash;&gt;
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <blockquote class="blockquote">
                                    <div class="margin-b-20">
                                        Lorem ipsum dolor sit amet consectetur adipiscing elit sed tempor incididunt ut laboret dolore magna aliqua. Ut enim minim veniam exercitation laboris ut siad consequat siad minim enum esqudiat dolore.
                                    </div>
                                    <div class="margin-b-20">
                                        Lorem ipsum dolor sit amet consectetur adipiscing elit sed tempor incididunt ut laboret tempor incididunt dolore magna consequat siad minim aliqua.
                                    </div>
                                    <p><span class="fweight-700 color-link">Joh Milner</span>, Metronic Customer</p>
                                </blockquote>
                            </div>
                            <div class="swiper-slide">
                                <blockquote class="blockquote">
                                    <div class="margin-b-20">
                                        Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                                    </div>
                                    <div class="margin-b-20">
                                        Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                                    </div>
                                    <p><span class="fweight-700 color-link">Alex Clarson</span>, Metronic Customer</p>
                                </blockquote>
                            </div>
                        </div>
                        &lt;!&ndash; End Swiper Wrapper &ndash;&gt;

                        &lt;!&ndash; Pagination &ndash;&gt;
                        <div class="swiper-testimonials-pagination"></div>
                    </div>
                    &lt;!&ndash; End Swiper Testimonials &ndash;&gt;
                </div>
            </div>
            &lt;!&ndash;// end row &ndash;&gt;
        </div>-->
        <!-- End Testimonials -->

        <!-- Clients -->
       <!-- <div class="bg-color-sky-light">
            <div class="content-lg container">
                &lt;!&ndash; Swiper Clients &ndash;&gt;
                <div class="swiper-slider swiper-clients">
                    &lt;!&ndash; Swiper Wrapper &ndash;&gt;
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <img class="swiper-clients-img" src="img/clients/01.png" alt="Clients Logo">
                        </div>
                        <div class="swiper-slide">
                            <img class="swiper-clients-img" src="img/clients/02.png" alt="Clients Logo">
                        </div>
                        <div class="swiper-slide">
                            <img class="swiper-clients-img" src="img/clients/03.png" alt="Clients Logo">
                        </div>
                        <div class="swiper-slide">
                            <img class="swiper-clients-img" src="img/clients/04.png" alt="Clients Logo">
                        </div>
                        <div class="swiper-slide">
                            <img class="swiper-clients-img" src="img/clients/05.png" alt="Clients Logo">
                        </div>
                        <div class="swiper-slide">
                            <img class="swiper-clients-img" src="img/clients/06.png" alt="Clients Logo">
                        </div>
                    </div>
                    &lt;!&ndash; End Swiper Wrapper &ndash;&gt;
                </div>
                &lt;!&ndash; End Swiper Clients &ndash;&gt;
            </div>
        </div>-->
        <!-- End Clients -->
        <!--========== END PAGE LAYOUT ==========-->

        <!--========== FOOTER ==========-->
        <?php include('footer.php'); ?>
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
