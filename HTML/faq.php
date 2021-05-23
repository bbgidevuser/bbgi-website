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
                                <li class="nav-item"><a class="nav-item-child nav-item-hover" href="events.php">Events</a></li>
                                <li class="nav-item"><a class="nav-item-child nav-item-hover" href="marketplace.php">Marketplace</a></li>
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
                                <?php /*$a= mysql_query("select * from faq_header where id=1");*/
                                /*$b = mysql_fetch_array($a);*/
                                /**/?>
                                <h2>Alternative mode of payment</h2>
                                <!--<h3><?php /*echo $b['header']; */?></h3>-->
                                <!--<p class="margin-b-5">Lorem ipsum dolor amet consectetur ut consequat siad esqudiat dolor</p>-->
                                <p class="margin-b-5">I'm struggling to make payment on the platform, is there any other option?</p>
                                <h2></h2>
                                <h3>Answer</h3>
                                <p class="margin-b-5">If you cannot make payment via our platform, please get in touch with us through the details in our contact us page or please refer to our EFT section for payment details </p>
                                <!--<p class="margin-b-5"><?php /*echo $b['description']; */?></p>-->
                                <a href="#" class="content-wrapper-link"></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="wow fadeInLeft" data-wow-duration=".3" data-wow-delay=".1s">
                            <div class="service" data-height="height">
                               <!-- --><?php /*$c= mysql_query("select * from faq_header where id=2");
                                $d = mysql_fetch_array($c);
                                */?>
                                <!--<h3>Responsive Design</h3>-->
                                <h2>Signing up as a supplier</h2>
                                <!--<h3><?php /*echo $d['header']; */?></h3>-->
                                <p class="margin-b-5">How can I get on the data base as a supplier? </p>
                                <h2></h2>
                                <h3>Answer</h3>
                                <p class="margin-b-5">You can sign up as a supplier on the BBGI platform by navigating to the marketplace menu. When on the marketplace, click on Partner with us. Your request will then be sent to our administrators for vetting and on approval, your company will be added to our list of suppliers </p>
                                <!--<p class="margin-b-5"><?php /*echo $d['description']; */?></p>-->
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
                                <?php /*$e= mysql_query("select * from faq_header where id=3");
                                $f = mysql_fetch_array($e);
                                */?>
                                <!--<h3>Feature Reach</h3>-->
                                <h2>Non South African individual and business membership - BBGI</h2>
                                <p class="margin-b-5">Can non-South Africans join the BBGI? </p>
                                <h2></h2>
                                <h3>Answer</h3>
                                <!--<h3><?php /*echo $f['header']; */?></h3>-->
                                <p class="margin-b-5">Yes, non South Africans are welcome to join BBGI. The organisation is pro black, does not discriminate against any race or creed and welcomes members regardless of their country of origin </p>
                                <!--<p class="margin-b-5"><?php /*echo $f['description']; */?></p>-->
                                <a href="#" class="content-wrapper-link"></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="wow fadeInLeft" data-wow-duration=".3" data-wow-delay=".2s">
                            <div class="service" data-height="height">
                                <?php /*$g= mysql_query("select * from faq_header where id=4");
                                $h = mysql_fetch_array($g);
                                */?>
                                <!--<h3>Useful Documentation</h3>-->
                                <h2>Membership</h2>
                                <!--<h3><?php /*echo $h['header']; */?></h3>-->
                                <p class="margin-b-5">How can I become a member of BBGI?</p>
                                <h2></h2>
                                <h3>Answer</h3>
                                <p class="margin-b-5">You can sign up as a member by navigating to the marketplace, before purchasing any item on the platform you will be required to sign up as a member. Available options for members include individual, student and business membership </p>
                                <!--<p class="margin-b-5"><?php /*echo $h['description']; */?></p>-->
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
                                <?php /*$j= mysql_query("select * from faq_header where id=5");
                                $k = mysql_fetch_array($j);
                                */?>
                                <h2>Joining fee</h2>
                                <p class="margin-b-5">What is the joining fee?</p>
                                <h2></h2>
                                <h3>Answer</h3>
                                <!--<h3>Fast Delivery</h3>-->
                                <!--<h3><?php /*echo $k['header']; */?></h3>-->
                                <p class="margin-b-5">The joining fee to the platform depends on the membership type selected. Student membership is R100 p/m, Individual membership is valued at R150 p/m and business membership at R200 p/m </p>
                                <!--<p class="margin-b-5"><?php /*echo $k['description']; */?></p>-->
                                <a href="#" class="content-wrapper-link"></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="wow fadeInLeft" data-wow-duration=".3" data-wow-delay=".3s">
                            <div class="service" data-height="height">
                                <?php /*$l= mysql_query("select * from faq_header where id=6");
                                $m = mysql_fetch_array($l);
                                */?>
                                <h2>Supplier commission</h2>
                                <p class="margin-b-5">Do suppliers pay commission to BBGI? If so, how is it structured? </p>
                                <h2></h2>
                                <!--<h3>Free Plugins</h3>-->
                                <!--<h3><?php /*echo $m['header']; */?></h3>-->
                                <h3>Answer</h3>
                                <p class="margin-b-5">Lorem ipsum dolor amet consectetur ut consequat siad esqudiat dolor</p>
                                <!--<p class="margin-b-5"><?php /*echo $m['description']; */?></p>-->
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
