<?php include('config.php');
session_name('membership');
session_start();
session_destroy();
include('global.php');
?>
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
    <script>
        $('#individualButton').on('click', function(e){
            var individual = $(this).attr('individual');
            $.ajax({
                type: 'POST',
                url: 'member-signup.php',
                data: {
                    membership: individual
                }
            });
        });
    </script>
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
                                <li class="nav-item"><a class="nav-item-child nav-item-hover active" href="membership.php">Membership</a></li>
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
        <div class="parallax-window" data-parallax="scroll" data-image-src="img/1920x1080/23.jpg">
            <div class="parallax-content container">
                <!--<h1 class="carousel-title">Membership</h1>-->
                <!--<p>Lorem ipsum dolor amet consectetur adipiscing dolore magna aliqua <br/> enim minim estudiat veniam siad venumus dolore</p>-->
            </div>
        </div>
        <!--========== PARALLAX ==========-->

        <!--========== PAGE LAYOUT ==========-->
        <div class="bg-color-sky-light" data-auto-height="true">
            <div class="content-lg container">
                <h2>Individual Membership</h2>
                <div class="row">
                    <div class="col-sm-9">
                        <div class="margin-b-30">
                            <p>Black Business Growth Initiative is a pro black organisation but does not discriminate against and welcomes members of any race or creed.
                                The main focus of individual membership is in equipping members with strategies to navigate workplace challenges and meet their career objectives and goals.
                                Added to individual membership are opportunities to attend networking events with like minded individuals and business owners to further enhance opportunities for individual development.</p>
                        </div>
                    </div>
                </div>
                <!-- Masonry Grid -->
                <div class="masonry-grid">
                    <div class="masonry-grid-item col-xs-6 col-sm-6 col-md-4">
                        <!-- Work -->
                        <div class="work wow fadeInUp" data-wow-duration=".3" data-wow-delay=".2s">
                            <div class="work-overlay">
                                <img class="full-width img-responsive" src="img/397x400/02.jpg" alt="Portfolio Image">
                            </div>
                            <div class="work-content">
                                <h3 class="color-white margin-b-5">Great speakers</h3>
                                <p class="color-white margin-b-0">Get business insights from top business and career professionals</p>
                            </div>
                            <a class="content-wrapper-link" href="#"></a>
                        </div>
                        <!-- End Work -->
                    </div>
                    <div class="masonry-grid-item col-xs-6 col-sm-6 col-md-4">
                        <!-- Work -->
                        <div class="work wow fadeInUp" data-wow-duration=".3" data-wow-delay=".3s">
                            <div class="work-overlay">
                                <img class="full-width img-responsive" src="img/397x300/11.jpg" alt="Portfolio Image">
                            </div>
                            <div class="work-content">
                                <h3 class="color-white margin-b-5">Networking</h3>
                                <p class="color-white margin-b-0">Network with business owners and career professionals</p>
                            </div>
                            <a class="content-wrapper-link" href="#"></a>
                        </div>
                        <!-- End Work -->
                    </div>
                    <div class="masonry-grid-item col-xs-6 col-sm-6 col-md-4">
                        <!-- Work -->
                        <div class="work wow fadeInUp" data-wow-duration=".3" data-wow-delay=".4s">
                            <div class="work-overlay">
                                <img class="full-width img-responsive" src="img/397x300/15.jpg" alt="Portfolio Image">
                            </div>
                            <div class="work-content">
                                <h3 class="color-white margin-b-5">Skills</h3>
                                <p class="color-white margin-b-0">Access to developmental and training programmes</p>
                            </div>
                            <a class="content-wrapper-link" href="#"></a>
                        </div>
                        <!-- End Work -->
                    </div>
                    <!-- End Masonry Grid -->
            </div>
                <div class="content-lg container">
                    <h3>Membership Requirements</h3>
                    <div class="row">
                        <div class="col-sm-9">
                            <div class="margin-b-30">
                                <ul>
                                    <li>Alignment with BBGI values</li>
                                    <li>Minimum 2 years working experience</li>
                                    <li>Annual membership fee of R650 ( Including VAT )</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

                <form action="member-signup.php" method="post">
                    <!--<input type="submit" onclick="<?php /*generateMembershipOptions('Individual')*/?>" class="btn-theme btn-theme-sm btn-base-bg text-uppercase" value="MEMBER SIGN UP">-->
                    <input type="hidden" Name="membership" Value="individual" >
                    <input type="submit" id="individualButton" class="btn-theme btn-theme-sm btn-base-bg text-uppercase" value="MEMBER SIGN UP">
                </form>


                <div class="content-lg container">
                    <h2>Student Membership</h2>
                    <div class="row">
                        <div class="col-sm-9">
                            <div class="margin-b-30">
                                <p>
                                    To qualify as a student member, an individual must be currently furthering their education at a registered institution of higher learning.
                                    Support is provided for students who aspire to be business managers and leaders, supplying them with tools required to develop managerial skills and overcome challenges in business.
                                    <!--Lorem ipsum dolor sit amet consectetur adipiscing elit sed tempor incididunt ut laboret tempor incididunt dolore magna consequat siad minim aliqua.-->

                                </p>
                            </div>
                        </div>
                    </div>
                    <!-- Masonry Grid -->
                    <div class="masonry-grid">
                        <div class="masonry-grid-item col-xs-6 col-sm-6 col-md-4">
                            <!-- Work -->
                            <div class="work wow fadeInUp" data-wow-duration=".3" data-wow-delay=".2s">
                                <div class="work-overlay">
                                    <img class="full-width img-responsive" src="img/397x400/05.jpg" alt="Portfolio Image">
                                </div>
                                <div class="work-content">
                                    <h3 class="color-white margin-b-5">Future leaders</h3>
                                    <p class="color-white margin-b-0">Support provided for both current and aspirant student business owners achieve their goals</p>
                                </div>
                                <a class="content-wrapper-link" href="#"></a>
                            </div>
                            <!-- End Work -->
                        </div>
                        <div class="masonry-grid-item col-xs-6 col-sm-6 col-md-4">
                            <!-- Work -->
                            <div class="work wow fadeInUp" data-wow-duration=".3" data-wow-delay=".3s">
                                <div class="work-overlay">
                                    <img class="full-width img-responsive" src="img/397x300/10.jpg" alt="Portfolio Image">
                                </div>
                                <div class="work-content">
                                    <h3 class="color-white margin-b-5">Skills</h3>
                                    <p class="color-white margin-b-0">Be equipped with the necessary tools to develop managerial skills</p>
                                </div>
                                <a class="content-wrapper-link" href="#"></a>
                            </div>
                            <!-- End Work -->
                        </div>
                        <div class="masonry-grid-item col-xs-6 col-sm-6 col-md-4">
                            <!-- Work -->
                            <div class="work wow fadeInUp" data-wow-duration=".3" data-wow-delay=".4s">
                                <div class="work-overlay">
                                    <img class="full-width img-responsive" src="img/397x300/14.jpg" alt="Portfolio Image">
                                </div>
                                <div class="work-content">
                                    <h3 class="color-white margin-b-5">Networking</h3>
                                    <p class="color-white margin-b-0">Network with business owners and career professionals</p>
                                </div>
                                <a class="content-wrapper-link" href="#"></a>
                            </div>
                            <!-- End Work -->
                        </div>
                        <!-- End Masonry Grid -->
                </div>

                    <div class="content-lg container">
                        <h3>Membership Requirements</h3>
                        <div class="row">
                            <div class="col-sm-9">
                                <div class="margin-b-30">
                                    <ul>
                                        <li>Must be a registered student</li>
                                        <li>Under the age of 36</li>
                                        <li>Alignment with BBGI values</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>

                    <form action="member-signup.php" method="post">
                        <input type="hidden" Name="membership" Value="student" >
                        <input type="submit" class="btn-theme btn-theme-sm btn-base-bg text-uppercase" value="MEMBER SIGN UP">
                    </form>

                <div class="content-lg container">
                    <h2>Business Membership</h2>
                    <div class="row">
                        <div class="col-sm-9">
                            <div class="margin-b-30">
                                <p>
                                    Business membership prioritises engagement and assistance to businesses and entails the evaluation of the business structure to ensure that the business follows optimal business processes.
                                    Black Business Growth Initiative is dedicated to the development of managerial leadership and advancing socio-economic transformation.
                                    Business members are afforded the opportunity to employ best suited candidates from our network of qualified professionals as well as engaging with corporate members on issues of leadership, transformation and empowerment.
                                </p>
                            </div>
                        </div>
                    </div>
                    <!-- Masonry Grid -->
                    <div class="masonry-grid">
                        <div class="masonry-grid-item col-xs-6 col-sm-6 col-md-4">
                            <!-- Work -->
                            <div class="work wow fadeInUp" data-wow-duration=".3" data-wow-delay=".2s">
                                <div class="work-overlay">
                                    <img class="full-width img-responsive" src="img/397x400/04.jpg" alt="Portfolio Image">
                                </div>
                                <div class="work-content">
                                    <h3 class="color-white margin-b-5">Events</h3>
                                    <p class="color-white margin-b-0">Participate in a variety of events to create strategic and effective networks</p>
                                </div>
                                <a class="content-wrapper-link" href="#"></a>
                            </div>
                            <!-- End Work -->
                        </div>
                        <div class="masonry-grid-item col-xs-6 col-sm-6 col-md-4">
                            <!-- Work -->
                            <div class="work wow fadeInUp" data-wow-duration=".3" data-wow-delay=".3s">
                                <div class="work-overlay">
                                    <img class="full-width img-responsive" src="img/397x300/16.jpg" alt="Portfolio Image">
                                </div>
                                <div class="work-content">
                                    <h3 class="color-white margin-b-5">Company Profiling</h3>
                                    <p class="color-white margin-b-0">An opportunity to present your company profile at one of our events</p>
                                </div>
                                <a class="content-wrapper-link" href="#"></a>
                            </div>
                            <!-- End Work -->
                        </div>
                        <div class="masonry-grid-item col-xs-6 col-sm-6 col-md-4">
                            <!-- Work -->
                            <div class="work wow fadeInUp" data-wow-duration=".3" data-wow-delay=".4s">
                                <div class="work-overlay">
                                    <img class="full-width img-responsive" src="img/397x300/13.jpg" alt="Portfolio Image">
                                </div>
                                <div class="work-content">
                                    <h3 class="color-white margin-b-5">Networking</h3>
                                    <p class="color-white margin-b-0">Network with business owners and career professionals</p>
                                </div>
                                <a class="content-wrapper-link" href="#"></a>
                            </div>
                            <!-- End Work -->
                        </div>
                        <!-- End Masonry Grid -->
                </div>

                    <div class="content-lg container">
                        <h3>Membership Requirements</h3>
                        <div class="row">
                            <div class="col-sm-9">
                                <div class="margin-b-30">
                                    <ul>
                                        <li>Must be a registered company or organisation</li>
                                        <li>Annual membership fee of R90 000 ( Including VAT )</li>
                                        <li>Alignment with BBGI values</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>

                    <form action="member-signup.php" method="post">
                        <input type="hidden" Name="membership" Value="business" >
                        <input type="submit" class="btn-theme btn-theme-sm btn-base-bg text-uppercase" value="MEMBER SIGN UP">
                    </form>

            </div>
                </div>
            </div>
        </div>
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
                                <li class="footer-list-item"><a class="footer-list-link" href="membership.php">Membership</a></li>
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
