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
                                <li class="nav-item"><a class="nav-item-child nav-item-hover" href="events.php">Events</a></li>
                                <li class="nav-item"><a class="nav-item-child nav-item-hover" href="membership.php">Membership</a></li>
                                <li class="nav-item"><a class="nav-item-child nav-item-hover" href="suppliers.php">Suppliers</a></li>
                                <li class="nav-item"><a class="nav-item-child nav-item-hover active" href="faq.php">FAQ</a></li>
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
        <div class="parallax-window" data-parallax="scroll" data-image-src="img/1920x1080/22.jpg">
            <div class="parallax-content container">
                <h1 class="carousel-title">FAQ</h1>
                <!--<p>Lorem ipsum dolor amet consectetur adipiscing dolore magna aliqua <br/> enim minim estudiat veniam siad venumus dolore</p>-->
            </div>
        </div>
        <!--========== PARALLAX ==========-->

        <!--========== PAGE LAYOUT ==========-->
        <!-- Service -->
        <div class="bg-color-sky-light" data-auto-height="true">
            <div class="content-lg container">
                <div class="row row-space-1 margin-b-2">
                    <div class="col-sm-6 sm-margin-b-2">
                        <div class="wow fadeInLeft" data-wow-duration=".3" data-wow-delay=".2s">
                            <div class="service" data-height="height">
                                <?php $a= mysql_query("select * from faq_header where id=1");
                                $b = mysql_fetch_array($a);
                                ?>
                                <!--<h3>Art Of Coding</h3>-->
                                <h3><?php echo $b['header']; ?></h3>
                                <!--<p class="margin-b-5">Lorem ipsum dolor amet consectetur ut consequat siad esqudiat dolor</p>-->
                                <p class="margin-b-5"><?php echo $b['description']; ?></p>
                                <a href="#" class="content-wrapper-link"></a>    
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="wow fadeInLeft" data-wow-duration=".3" data-wow-delay=".1s">
                            <div class="service" data-height="height">
                                <?php $c= mysql_query("select * from faq_header where id=2");
                                $d = mysql_fetch_array($c);
                                ?>
                                <!--<h3>Responsive Design</h3>-->
                                <h3><?php echo $d['header']; ?></h3>
                                <!--<p class="margin-b-5">Lorem ipsum dolor amet consectetur ut consequat siad esqudiat dolor</p>-->
                                <p class="margin-b-5"><?php echo $d['description']; ?></p>
                                <a href="#" class="content-wrapper-link"></a>    
                            </div>
                        </div>
                    </div>
                </div>
                <!--// end row -->

                <div class="row row-space-1 margin-b-2">
                    <div class="col-sm-6 sm-margin-b-2">
                        <div class="wow fadeInLeft" data-wow-duration=".3" data-wow-delay=".3s">
                            <div class="service" data-height="height">
                                <?php $e= mysql_query("select * from faq_header where id=3");
                                $f = mysql_fetch_array($e);
                                ?>
                                <!--<h3>Feature Reach</h3>-->
                                <h3><?php echo $f['header']; ?></h3>
                                <!--<p class="margin-b-5">Lorem ipsum dolor amet consectetur ut consequat siad esqudiat dolor</p>-->
                                <p class="margin-b-5"><?php echo $f['description']; ?></p>
                                <a href="#" class="content-wrapper-link"></a>    
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="wow fadeInLeft" data-wow-duration=".3" data-wow-delay=".2s">
                            <div class="service" data-height="height">
                                <?php $g= mysql_query("select * from faq_header where id=4");
                                $h = mysql_fetch_array($g);
                                ?>
                                <!--<h3>Useful Documentation</h3>-->
                                <h3><?php echo $h['header']; ?></h3>
                                <!--<p class="margin-b-5">Lorem ipsum dolor amet consectetur ut consequat siad esqudiat dolor</p>-->
                                <p class="margin-b-5"><?php echo $h['description']; ?></p>
                                <a href="#" class="content-wrapper-link"></a>    
                            </div>
                        </div>
                    </div>
                </div>
                <!--// end row -->

                <div class="row row-space-1">
                    <div class="col-sm-6 sm-margin-b-2">
                        <div class="wow fadeInLeft" data-wow-duration=".3" data-wow-delay=".4s">
                            <div class="service" data-height="height">
                                <?php $j= mysql_query("select * from faq_header where id=5");
                                $k = mysql_fetch_array($j);
                                ?>
                                <!--<h3>Fast Delivery</h3>-->
                                <h3><?php echo $k['header']; ?></h3>
                                <!--<p class="margin-b-5">Lorem ipsum dolor amet consectetur ut consequat siad esqudiat dolor</p>-->
                                <p class="margin-b-5"><?php echo $k['description']; ?></p>
                                <a href="#" class="content-wrapper-link"></a>    
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="wow fadeInLeft" data-wow-duration=".3" data-wow-delay=".3s">
                            <div class="service" data-height="height">
                                <?php $l= mysql_query("select * from faq_header where id=6");
                                $m = mysql_fetch_array($l);
                                ?>
                                <!--<h3>Free Plugins</h3>-->
                                <h3><?php echo $m['header']; ?></h3>
                                <!--<p class="margin-b-5">Lorem ipsum dolor amet consectetur ut consequat siad esqudiat dolor</p>-->
                                <p class="margin-b-5"><?php echo $m['description']; ?></p>
                                <a href="#" class="content-wrapper-link"></a>    
                            </div>
                        </div>
                    </div>
                </div>
                <!--// end row -->
            </div>
        </div>
        <!-- End Service -->

        <!-- General Questions -->
        <div class="content-lg container">
            <?php $n= mysql_query("select * from questions where id=1");
            $o = mysql_fetch_array($n);
            ?>
            <div class="row margin-b-20">
                <div class="col-sm-6">
                    <!--<h2>General Questions</h2>-->
                    <h2><?php echo $o['header']; ?></h2>
                </div>
            </div>
            <!--// end row -->

            <div class="row">
                <div class="col-sm-7 sm-margin-b-50">
                    <div class="margin-b-30">
                        <!--<p>Lorem ipsum dolor sit amet consectetur adipiscing elit sed tempor incididunt ut laboret dolore adipiscing elit sed tempor incididunt ut laboret dolore magna aliqua. Ut enimet minim veniam magna aliqua. Ut enim minim veniam exercitation laboris ut siad consequat siad minim enum esqudiat dolore.</p>-->

                        <p><?php echo $o['question1']; ?></p>
                    </div>
                    <!--<p>Lorem ipsum dolor sit amet consectetur adipiscing elit sed tempor incididunt ut laboret tempor incididunt dolore magna consequat siad minim aliqua. Lorem ipsum dolor sit amet consectetur adipiscing elit sed tempor incididunt ut laboret dolore magna aliqua. Ut enim minim veniam exercitation laboris ut siad consequat siad minim enum esqudiat dolore.</p>-->
                    <p><?php echo $o['question2']; ?></p>
                </div>
                <div class="col-sm-4 col-sm-offset-1">
                    <img class="img-responsive" src="img/640x380/<?php echo $o['image']; ?>" alt="Our Office">
                </div>
            </div>
            <!--// end row -->
        </div>
        <!-- End General Questions -->

        <!-- Pricing -->
        <div class="bg-color-sky-light">
            <div class="content-lg container">
                <div class="row row-space-1">
                    <div class="col-sm-4 sm-margin-b-2">
                        <div class="wow fadeInLeft" data-wow-duration=".3" data-wow-delay=".1s">
                            <!-- Pricing -->
                            <?php $p= mysql_query("select * from pricing where id=1");
                            $q = mysql_fetch_array($p);
                            ?>
                            <div class="pricing">
                                <div class="margin-b-30">
                                    <i class="pricing-icon icon-chemistry"></i>
                                    <!--<h3>Student Special <span> - R</span> 50</h3>-->
                                    <h3><?php echo $q['type']; ?> <span> - R</span> <?php echo $q['price']; ?></h3>
                                    <!--<p>Take advantage of our student special and pay half the price of a normal ticket</p>-->
                                    <p><?php echo $q['description']; ?></p>
                                </div>
                                <ul class="list-unstyled pricing-list margin-b-50">
                                    <!--<li class="pricing-list-item">Discounted price</li>-->
                                    <li class="pricing-list-item"><?php echo $q['option-one']; ?></li>
                                    <!--<li class="pricing-list-item">Networking opportunity</li>-->
                                    <li class="pricing-list-item"><?php echo $q['option-two']; ?></li>
                                    <!--<li class="pricing-list-item">Business opportunity</li>-->
                                    <li class="pricing-list-item"><?php echo $q['option-three']; ?></li>
                                </ul>
                                <a href="tickets.php" class="btn-theme btn-theme-sm btn-base-bg text-uppercase">Choose</a>
                            </div>
                            <!-- End Pricing -->
                        </div>
                    </div>
                    <div class="col-sm-4 sm-margin-b-2">
                        <div class="wow fadeInUp" data-wow-duration=".3" data-wow-delay=".2s">
                            <!-- Pricing -->
                            <?php $r= mysql_query("select * from pricing where id=2");
                            $s = mysql_fetch_array($r);
                            ?>
                            <div class="pricing pricing-active">
                                <div class="margin-b-30">
                                    <i class="pricing-icon icon-badge"></i>
                                    <!--<h3>Social Media <span> - R</span> 100</h3>-->
                                    <h3><?php echo $s['type']; ?> <span> - R</span> <?php echo $s['price']; ?></h3>
                                    <!--<p>Purchase tickets on our social media platforms</p>-->
                                    <p><?php echo $s['description']; ?></p>
                                </div>
                                <ul class="list-unstyled pricing-list margin-b-50">
                                    <!--<li class="pricing-list-item">Facebook</li>-->
                                    <li class="pricing-list-item"><?php echo $s['option-one']; ?></li>
                                    <!--<li class="pricing-list-item">Webtickets</li>-->
                                    <li class="pricing-list-item"><?php echo $s['option-two']; ?></li>
                                    <!--<li class="pricing-list-item">Instagram</li>-->
                                    <li class="pricing-list-item"><?php echo $s['option-three']; ?></li>
                                </ul>
                                <a href="tickets.php" class="btn-theme btn-theme-sm btn-base-bg text-uppercase">Choose</a>
                            </div>
                            <!-- End Pricing -->
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="wow fadeInRight" data-wow-duration=".3" data-wow-delay=".1s">
                            <!-- Pricing -->
                            <?php $t= mysql_query("select * from pricing where id=3");
                            $u = mysql_fetch_array($t);
                            ?>
                            <div class="pricing">
                                <div class="margin-b-30">
                                    <i class="pricing-icon icon-shield"></i>
                                    <!--<h3>Website Platform <span> - R</span> 100</h3>-->
                                    <h3><?php echo $u['type']; ?> <span> - R</span> <?php echo $u['price']; ?></h3>
                                    <!--<p>Use your credit or debit card to purchase tickets directly from our website</p>-->
                                    <p><?php echo $u['description']; ?></p>
                                </div>
                                <ul class="list-unstyled pricing-list margin-b-50">
                                    <!--<li class="pricing-list-item">Credit Card Purchase</li>-->
                                    <li class="pricing-list-item"><?php echo $u['option-one']; ?></li>
                                    <!--<li class="pricing-list-item">Debit Card Purchase</li>-->
                                    <li class="pricing-list-item"><?php echo $u['option-two']; ?></li>
                                    <!--<li class="pricing-list-item">Paypal</li>-->
                                    <li class="pricing-list-item"><?php echo $u['option-three']; ?></li>
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

        <!-- PAGE LEVEL SCRIPTS -->
        <script src="js/layout.min.js" type="text/javascript"></script>
        <script src="js/components/wow.min.js" type="text/javascript"></script>

    </body>
    <!-- END BODY -->
</html>
