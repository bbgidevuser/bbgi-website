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
                                <li class="nav-item"><a class="nav-item-child nav-item-hover" href="tickets.php">Tickets</a></li>
                                <li class="nav-item"><a class="nav-item-child nav-item-hover active" href="events.php">Events</a></li>
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
        <div class="parallax-window" data-parallax="scroll" data-image-src="img/1920x1080/20.jpg">
            <div class="parallax-content container">
                <h1 class="carousel-title">Events</h1>
                <!--<p>Lorem ipsum dolor amet consectetur adipiscing dolore magna aliqua <br/> enim minim estudiat veniam siad venumus dolore</p>-->
            </div>
        </div>
        <!--========== PARALLAX ==========-->

        <!--========== PAGE LAYOUT ==========-->
        <!-- Our Exceptional Solutions -->
        <div class="content-lg container">

            <div class="row margin-b-40">
                <?php $a= mysql_query("select * from upcoming_events where id=1");
                $b = mysql_fetch_array($a);
                ?>
                <div class="col-sm-6">
                    <!--<h2>Upcoming Events</h2>-->
                    <h2><?php echo $b['header']; ?></h2>
                    <!--<p>Please see below for an outline of all the events we have in the next couple of months</p>-->
                    <p><?php echo $b['description']; ?></p>
                </div>
            </div>

            <div class="row margin-b-50">

                <!-- Our Exceptional Solutions -->
                <div class="col-sm-4 sm-margin-b-50">
                    <div class="margin-b-20">
                        <div class="wow zoomIn" data-wow-duration=".3" data-wow-delay=".1s">
                            <!--<img class="img-responsive" src="img/970x647/05.jpg" alt="Our Exceptional Solutions Image">-->
                            <img class="img-responsive" src="img/970x647/<?php echo $b['image']; ?>" alt="Our Exceptional Solutions Image">
                        </div>
                    </div>
                    <!--<h3><a href="#">06 May 2020</a> <span class="text-uppercase margin-l-20">Personal Trust</span></h3>-->
                    <h3><a href="#"><?php echo $b['event_date']; ?></a> <span class="text-uppercase margin-l-20"><?php echo $b['venue']; ?></span></h3>
                    <!--<p>Lorem ipsum dolor sit amet consectetur adipiscing elit sed tempor incdidunt ut laboret dolor magna ut consequat siad esqudiat dolor</p>-->
                    <p><?php echo $b['event_description']; ?></p>
                    <!--<a class="link" href="#">Read More</a>-->
                </div>
                <!-- End Our Exceptional Solutions -->

                <!-- Our Exceptional Solutions -->
                <?php $c= mysql_query("select * from upcoming_events where id=2");
                $d = mysql_fetch_array($c);
                ?>
                <div class="col-sm-4 sm-margin-b-50">
                    <div class="margin-b-20">
                        <div class="wow zoomIn" data-wow-duration=".3" data-wow-delay=".1s">
                            <!--<img class="img-responsive" src="img/970x647/06.jpg" alt="Our Exceptional Solutions Image">-->
                            <img class="img-responsive" src="img/970x647/<?php echo $d['image']; ?>" alt="Our Exceptional Solutions Image">
                        </div>
                    </div>
                    <!--<h3><a href="#">10 June 2020</a> <span class="text-uppercase margin-l-20">Personal Trust</span></h3>-->
                    <h3><a href="#"><?php echo $d['event_date']; ?></a> <span class="text-uppercase margin-l-20"><?php echo $d['venue']; ?></span></h3>
                    <!--<p>Lorem ipsum dolor sit amet consectetur adipiscing elit sed tempor incdidunt ut laboret dolor magna ut consequat siad esqudiat dolor</p>-->
                    <p><?php echo $d['event_description']; ?></p>
                    <!--<a class="link" href="#">Read More</a>-->
                </div>
                <!-- End Our Exceptional Solutions -->

                <!-- Our Exceptional Solutions -->
                <?php $e= mysql_query("select * from upcoming_events where id=3");
                $f = mysql_fetch_array($e);
                ?>
                <div class="col-sm-4 sm-margin-b-50">
                    <div class="margin-b-20">
                        <div class="wow zoomIn" data-wow-duration=".3" data-wow-delay=".1s">
                            <!--<img class="img-responsive" src="img/970x647/07.jpg" alt="Our Exceptional Solutions Image">-->
                            <img class="img-responsive" src="img/970x647/<?php echo $f['image']; ?>" alt="Our Exceptional Solutions Image">
                        </div>
                    </div>
                    <!--<h4><a href="#">01 July 2020</a> <span class="text-uppercase margin-l-20">Personal Trust</span></h4>-->
                    <h4><a href="#"><?php echo $f['event_date']; ?></a> <span class="text-uppercase margin-l-20"><?php echo $f['venue']; ?></span></h4>
                    <!--<p>Lorem ipsum dolor sit amet consectetur adipiscing elit sed tempor incdidunt ut laboret dolor magna ut consequat siad esqudiat dolor</p>-->
                    <p><?php echo $f['event_description']; ?></p>
                    <!--<a class="link" href="#">Read More</a>-->
                </div>
                <!-- End Our Exceptional Solutions -->
            </div>

            <!--// end row -->

            <div class="row">

                <!-- Our Exceptional Solutions -->
                <?php $g= mysql_query("select * from upcoming_events where id=4");
                $h = mysql_fetch_array($g);
                ?>
                <div class="col-sm-4 sm-margin-b-50">
                    <div class="margin-b-20">
                        <div class="wow zoomIn" data-wow-duration=".3" data-wow-delay=".1s">
                            <!--<img class="img-responsive" src="img/970x647/08.jpg" alt="Our Exceptional Solutions Image">-->
                            <img class="img-responsive" src="img/970x647/<?php echo $h['image']; ?>" alt="Our Exceptional Solutions Image">
                        </div>
                    </div>
                    <!--<h4><a href="#">05 August 2020</a> <span class="text-uppercase margin-l-20">Personal Trust</span></h4>-->
                    <h4><a href="#"><?php echo $h['event_date']; ?></a> <span class="text-uppercase margin-l-20"><?php echo $h['venue']; ?></span></h4>
                    <!--<p>Lorem ipsum dolor sit amet consectetur adipiscing elit sed tempor incdidunt ut laboret dolor magna ut consequat siad esqudiat dolor</p>-->
                    <p><?php echo $h['event_description']; ?></p>
                    <!--<a class="link" href="#">Read More</a>-->
                </div>
                <!-- End Our Exceptional Solutions -->
            </div>
            <!--// end row -->
        </div>

        <div class="content-lg container">
            <?php $i= mysql_query("select * from past_events where id=1");
            $j = mysql_fetch_array($i);
            ?>
            <div class="row margin-b-40">
                <div class="col-sm-6">
                    <!--<h2>Past Events</h2>-->
                    <h2><?php echo $j['header']; ?></h2>
                    <!--<p>These are some of the events that we as a community have held in the last couple of months</p>-->
                    <p><?php echo $j['description']; ?></p>
                </div>
            </div>
            <!--// end row -->

            <div class="row margin-b-50">

                <!-- Our Exceptional Solutions -->
                <div class="col-sm-4 sm-margin-b-50">
                    <div class="margin-b-20">
                        <div class="wow zoomIn" data-wow-duration=".3" data-wow-delay=".1s">
                            <!--<img class="img-responsive" src="img/970x647/04.jpg" alt="Our Exceptional Solutions Image">-->
                            <img class="img-responsive" src="img/970x647/<?php echo $j['image']; ?>" alt="Our Exceptional Solutions Image">
                        </div>
                    </div>
                    <!--<h3><a href="#">01 April 2020</a> <span class="text-uppercase margin-l-20">Personal Trust</span></h3>-->
                    <h3><a href="#"><?php echo $j['event_date']; ?></a> <span class="text-uppercase margin-l-20"><?php echo $j['venue']; ?></span></h3>
                    <!--<p>Lorem ipsum dolor sit amet consectetur adipiscing elit sed tempor incdidunt ut laboret dolor magna ut consequat siad esqudiat dolor</p>-->
                    <p><?php echo $j['event_description']; ?></p>
                    <!--<a class="link" href="#">Read More</a>-->
                </div>
                <!-- End Our Exceptional Solutions -->

                <!-- Our Exceptional Solutions -->
                <?php $k= mysql_query("select * from past_events where id=2");
                $l = mysql_fetch_array($k);
                ?>
                <div class="col-sm-4 sm-margin-b-50">
                    <div class="margin-b-20">
                        <div class="wow zoomIn" data-wow-duration=".3" data-wow-delay=".1s">
                            <!--<img class="img-responsive" src="img/970x647/09.jpg" alt="Our Exceptional Solutions Image">-->
                            <img class="img-responsive" src="img/970x647/<?php echo $l['image']; ?>" alt="Our Exceptional Solutions Image">
                        </div>
                    </div>
                    <!--<h4><a href="#">04 March 2020</a> <span class="text-uppercase margin-l-20">Personal Trust</span></h4>-->
                    <h4><a href="#"><?php echo $l['event_date']; ?></a> <span class="text-uppercase margin-l-20"><?php echo $l['venue']; ?></span></h4>
                    <!--<p>Lorem ipsum dolor sit amet consectetur adipiscing elit sed tempor incdidunt ut laboret dolor magna ut consequat siad esqudiat dolor</p>-->
                    <p><?php echo $l['event_description']; ?></p>
                    <!--<a class="link" href="#">Read More</a>-->
                </div>
                <!-- End Our Exceptional Solutions -->

                <!-- Our Exceptional Solutions -->
                <?php $m= mysql_query("select * from past_events where id=3");
                $n = mysql_fetch_array($m);
                ?>
                <div class="col-sm-4 sm-margin-b-50">
                    <div class="margin-b-20">
                        <div class="wow zoomIn" data-wow-duration=".3" data-wow-delay=".1s">
                            <!--<img class="img-responsive" src="img/970x647/10.jpg" alt="Our Exceptional Solutions Image">-->
                            <img class="img-responsive" src="img/970x647/<?php echo $n['image']; ?>" alt="Our Exceptional Solutions Image">
                        </div>
                    </div>
                    <!--<h4><a href="#">12 February 2020</a> <span class="text-uppercase margin-l-20">Personal Trust</span></h4>-->
                    <h4><a href="#"><?php echo $n['event_date']; ?></a> <span class="text-uppercase margin-l-20"><?php echo $n['venue']; ?></span></h4>
                    <!--<p>Lorem ipsum dolor sit amet consectetur adipiscing elit sed tempor incdidunt ut laboret dolor magna ut consequat siad esqudiat dolor</p>-->
                    <p><?php echo $n['event_description']; ?></p>
                    <!-- <a class="link" href="#">Read More</a>-->
                </div>
                <!-- End Our Exceptional Solutions -->

            </div>

            <!--// end row -->

            <div class="row">

                <!-- Our Exceptional Solutions -->
                <?php $o= mysql_query("select * from past_events where id=4");
                $p = mysql_fetch_array($o);
                ?>
                <div class="col-sm-4 sm-margin-b-50">
                    <div class="margin-b-20">
                        <div class="wow zoomIn" data-wow-duration=".3" data-wow-delay=".1s">
                            <img class="img-responsive" src="img/970x647/<?php echo $p['image']; ?>" alt="Our Exceptional Solutions Image">
                        </div>
                    </div>
                    <!--<h4><a href="#">13 November 2019</a> <span class="text-uppercase margin-l-20">Nia on 131</span></h4>-->
                    <h4><a href="#"><?php echo $p['event_date']; ?></a> <span class="text-uppercase margin-l-20"><?php echo $p['venue']; ?></span></h4>
                    <!--<p>Lorem ipsum dolor sit amet consectetur adipiscing elit sed tempor incdidunt ut laboret dolor magna ut consequat siad esqudiat dolor</p>-->
                    <p><?php echo $p['event_description']; ?></p>
                    <!--<a class="link" href="#">Read More</a>-->
                </div>
                <!-- End Our Exceptional Solutions -->

                <!-- Our Exceptional Solutions -->
                <?php $q= mysql_query("select * from past_events where id=5");
                $r = mysql_fetch_array($q);
                ?>
                <div class="col-sm-4 sm-margin-b-50">
                    <div class="margin-b-20">
                        <div class="wow zoomIn" data-wow-duration=".3" data-wow-delay=".1s">
                            <!--<img class="img-responsive" src="img/970x647/12.jpg" alt="Our Exceptional Solutions Image">-->
                            <img class="img-responsive" src="img/970x647/<?php echo $r['image']; ?>" alt="Our Exceptional Solutions Image">
                        </div>
                    </div>
                    <!--<h4><a href="#">02 October 2019</a> <span class="text-uppercase margin-l-20">Personal Trust</span></h4>-->
                    <h4><a href="#"><?php echo $r['event_date']; ?></a> <span class="text-uppercase margin-l-20"><?php echo $r['venue']; ?></span></h4>
                    <!--<p>Lorem ipsum dolor sit amet consectetur adipiscing elit sed tempor incdidunt ut laboret dolor magna ut consequat siad esqudiat dolor</p>-->
                    <p><?php echo $r['event_description']; ?></p>
                    <!--<a class="link" href="#">Read More</a>-->
                </div>
                <!-- End Our Exceptional Solutions -->

                <!-- Our Exceptional Solutions -->
                <?php $s= mysql_query("select * from past_events where id=6");
                $t = mysql_fetch_array($s);
                ?>
                <div class="col-sm-4 sm-margin-b-50">
                    <div class="margin-b-20">
                        <div class="wow zoomIn" data-wow-duration=".3" data-wow-delay=".1s">
                            <!--<img class="img-responsive" src="img/970x647/13.jpg" alt="Our Exceptional Solutions Image">-->
                            <img class="img-responsive" src="img/970x647/<?php echo $t['image']; ?>" alt="Our Exceptional Solutions Image">
                        </div>
                    </div>
                    <!--<h4><a href="#">21 August 2019</a> <span class="text-uppercase margin-l-20">Personal Trust</span></h4>-->
                    <h4><a href="#"><?php echo $t['event_date']; ?></a> <span class="text-uppercase margin-l-20"><?php echo $t['venue']; ?></span></h4>
                    <!--<p>Lorem ipsum dolor sit amet consectetur adipiscing elit sed tempor incdidunt ut laboret dolor magna ut consequat siad esqudiat dolor</p>-->
                    <p><?php echo $t['event_description']; ?></p>
                    <!--<a class="link" href="#">Read More</a>-->
                </div>
                <!-- End Our Exceptional Solutions -->

            </div>
            <!--// end row -->
        <!--</div>-->
        </div>
        <!-- End Our Exceptional Solutions -->

        <!-- Clients -->
        <!--<div class="bg-color-sky-light">
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

        <!-- Promo Section -->
       <!-- <div class="promo-section overflow-h">
            <div class="container">
                <div class="clearfix">
                    <div class="ver-center">
                        <div class="ver-center-aligned">
                            <div class="promo-section-col">
                                <h2>Our Clients</h2>
                                <p>Lorem ipsum dolor sit amet consectetur adipiscing elit sed tempor incididunt ut laboret dolore magna aliqua enim minim veniam exercitation ipsum dolor sit amet consectetur adipiscing elit sed tempor incididunt ut laboret dolore magna aliqua enim minim veniam exercitation</p>
                                <p>Ipsum dolor sit amet consectetur adipiscing elit sed tempor incididut ut sead laboret dolore magna aliqua enim minim veniam exercitation ipsum dolor sit amet consectetur adipiscing</p>
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
                        <form action="insert-events.php" method="POST">
                        <div class="col-sm-5 sm-margin-b-30">
                            <h2 class="color-white">Supplier Database</h2>
                            <p>It is our passion to nurture and develop black business. Benefit from and service our community by signing up on our supplier database.</p>
                            <input type="text" name="name" class="form-control footer-input margin-b-20" placeholder="Name" required>
                            <input type="email" name="email" class="form-control footer-input margin-b-20" placeholder="Email" required>
                            <input type="text" name="phone" class="form-control footer-input margin-b-20" placeholder="Phone" required>
                            <input type="text" name="company" class="form-control footer-input margin-b-20" placeholder="Company" required>
                            <input type="text" name="industry" class="form-control footer-input margin-b-20" placeholder="Industry" required>
                            <textarea name="message" class="form-control footer-input margin-b-30" rows="6" placeholder="Message" required></textarea>
                            <button id="submit" name="submit" type="submit" class="btn-theme btn-theme-sm btn-base-bg text-uppercase">Submit</button>
                        </div>
                        </form>
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
