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
        <title>Metronic "M&F MHE" Frontend Freebie</title>
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
                            <a class="logo-wrap" href="index.html">
                                <img class="logo-img logo-img-main" src="img/logo.png" alt="MATERIAL HANDLING ENGINEERS Logo">
                                <img class="logo-img logo-img-active" src="img/logo-dark.png" alt="MATERIAL HANDLING ENGINEERS Logo">
                            </a>
                        </div>
                        <!-- End Logo -->
                    </div>

                    <!-- Collect the nav links, forms, and other content for toggling -->
                   <?php include('menu.php'); ?>
                    <!-- End Navbar Collapse -->
                </div>
            </nav>
            <!-- Navbar -->
        </header>
        <!--========== END HEADER ==========-->

        <!--========== SLIDER ==========-->
        <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
            <div class="container">
                <!-- Indicators -->
                <ol class="carousel-indicators">
                    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                </ol>
            </div>

            <!-- Wrapper for slides -->
            <div class="carousel-inner" role="listbox">
                <div class="item active">
                    <img class="img-responsive" src="img/1920x1080/01.jpg" alt="Slider Image">
                    <div class="container">
                        <div class="carousel-centered">
                            <div class="margin-b-40">
                                <h1 class="carousel-title">M&F MATERIAL <br/>HANDLING ENGINEERS</h1>
                                <p> <br/> </p>
                            </div>
                            <a href="about.php" class="btn-theme btn-theme-sm btn-white-brd text-uppercase">Explore</a>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <img class="img-responsive" src="img/1920x1080/02.jpg" alt="Slider Image">
                    <div class="container">
                        <div class="carousel-centered">
                            <div class="margin-b-40">
                                <h2 class="carousel-title">M&F MATERIAL <br/> HANDLING ENGINEERS</h2>
                                <p> <br/></p>
                            </div>
                            <a href="products.php" class="btn-theme btn-theme-sm btn-white-brd text-uppercase">Explore</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--========== SLIDER ==========-->

        <!--========== PAGE LAYOUT ==========-->
        <!-- Service -->
        <div class="bg-color-sky-light" data-auto-height="true">
            <div class="content-lg container">
                <div class="row row-space-1 margin-b-2">
                    <div class="col-sm-4 sm-margin-b-2">
                        <div class="wow fadeInLeft" data-wow-duration=".3" data-wow-delay=".3s">
                            <div class="service" data-height="height">
                                <div class="service-element">
                                    <i class="service-icon icon-chemistry"></i>
                                </div>
                                <div class="service-info">
                                    <h3>OUR INFRASTRUCTURE</h3>
                                    <p class="margin-b-5"></p>
									<a class="link" href="about.php">Read More</a>
                                </div>
                                <a href="about.php" class="content-wrapper-link"></a>    
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4 sm-margin-b-2">
                        <div class="wow fadeInLeft" data-wow-duration=".3" data-wow-delay=".2s">
                            <div class="service" data-height="height">
                                <div class="service-element">
                                    <i class="service-icon icon-screen-tablet"></i>
                                </div>
                                <div class="service-info">
                                    <h3>OUR TEAM</h3>
                                    <p class="margin-b-5"></p>
									<a class="link" href="about.php">Read More</a>
                                </div>
                                <a href="about.php" class="content-wrapper-link"></a>    
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="wow fadeInLeft" data-wow-duration=".3" data-wow-delay=".1s">
                            <div class="service" data-height="height">
                                <div class="service-element">
                                    <i class="service-icon icon-badge"></i>
                                </div>
                                <div class="service-info">
                                    <h3>QUALITY ASSURANCE</h3>
                                    <p class="margin-b-5"></p>
									<a class="link" href="about.php">Read More</a>
                                </div>
                                <a href="about.php" class="content-wrapper-link"></a>    
                            </div>
                        </div>
                    </div>
                </div>
                <!--// end row -->

                <div class="row row-space-1">
                    <div class="col-sm-4 sm-margin-b-2">
                        <div class="wow fadeInLeft" data-wow-duration=".3" data-wow-delay=".4s">
                            <div class="service" data-height="height">
                                <div class="service-element">
                                    <i class="service-icon icon-notebook"></i>
                                </div>
                                <div class="service-info">
                                    <h3>CLIENT SATISFACTION</h3>
                                    <p class="margin-b-5"></p>
									<a class="link" href="about.php">Read More</a>
                                </div>
                                <a href="about.php" class="content-wrapper-link"></a>    
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4 sm-margin-b-2">
                        <div class="wow fadeInLeft" data-wow-duration=".3" data-wow-delay=".5s">
                            <div class="service" data-height="height">
                                <div class="service-element">
                                    <i class="service-icon icon-speedometer"></i>
                                </div>
                                <div class="service-info">
                                    <h3>
PRODUCT PORTFOLIO
</h3>
                                    <p class="margin-b-5"></p>
									<a class="link" href="about.php">Read More</a>
                                </div>
                                <a href="about.php" class="content-wrapper-link"></a>    
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="wow fadeInLeft" data-wow-duration=".3" data-wow-delay=".6s">
                            <div class="service" data-height="height">
                                <div class="service-element">
                                    <i class="service-icon icon-badge"></i>
                                </div>
                                <div class="service-info">
                                    <h3>OUR SERVICES</h3>
                                    <p class="margin-b-5"></p>
									<a class="link" href="about.php">Read More</a>
                                </div>
                                <a href="about.php" class="content-wrapper-link"></a>    
                            </div>
                        </div>
                    </div>
                </div>
                <!--// end row -->
            </div>
        </div>
        <!-- End Service -->

        <!-- Latest Products -->
        <div class="content-lg container">
            <div class="row margin-b-40">
                <div class="col-sm-6">
                    <h2>Latest Products</h2>
                    <p></p>
                </div>
            </div>
            <!--// end row -->

            <div class="row">
                <!-- Latest Products -->
                <div class="col-sm-4 sm-margin-b-50">
                    <div class="margin-b-20">
                        <div class="wow zoomIn" data-wow-duration=".3" data-wow-delay=".1s">
                            <img class="img-responsive" src="img/970x647/01.jpg" alt="Latest Products Image">
                        </div>
                    </div>
                    <h4><a href="#">Underslung Crane</a> <span class="text-uppercase margin-l-20"></span></h4>
                    <p>M&F MHE makes special purpose Under slung cranes (single & Double girder types) of Lifting capacity ranging from 2 Ton to 25 Tons. Under slung cranes are used where the head room is limited or where the condition cannot allow other means of support to the crane. M&F MHE can design & supply custom built under slung cranes as per customer’s requirement.</p>
                   
                </div>
                <!-- End Latest Products -->

                <!-- Latest Products -->
                <div class="col-sm-4 sm-margin-b-50">
                    <div class="margin-b-20">
                        <div class="wow zoomIn" data-wow-duration=".3" data-wow-delay=".1s">
                            <img class="img-responsive" src="img/970x647/02.jpg" alt="Latest Products Image">
                        </div>
                    </div>
                    <h4><a href="#">Manual Hoist - KITO(Japan) LX Series</a> <span class="text-uppercase margin-l-20"></span></h4>
                    <p>LX SERIES - RATCHET LEVER HOIST Compact, lightweight, portable design for ease of use in elevated work positions.Low hand-pull force for highly reliable pulling and lifting to the last click.LX series is available with capacity of 250 KG and 500 KG.</p>
                    
                </div>
                <!-- End Latest Products -->

                <!-- Latest Products -->
                <div class="col-sm-4 sm-margin-b-50">
                    <div class="margin-b-20">
                        <div class="wow zoomIn" data-wow-duration=".3" data-wow-delay=".1s">
                            <img class="img-responsive" src="img/970x647/03.jpg" alt="Latest Products Image">
                        </div>
                    </div>
                    <h4><a href="#">Jib Crane</a> <span class="text-uppercase margin-l-20"></span></h4>
                    <p>M&F MHE Jib Cranes are big money savers for every industry and business M&F MHE has a solution for any localised material handling with a specific jib crane and lifting tackle from a wide range of types and Capacities. All Jib Cranes are designed maintaining working stress well within the limits as per available and relevant I S specifications. Deflections of Jib Arm can be restricted as per customer’s actual need, based on cost and design. M&F MHE Jib Cranes are designed to occupy minimum floor space and maximum approaches. Easy erection features are in-built characteristics. All self-supported models can be wired internally from isolators to Jib Arm through Slip rings, thus making the crane safer. A full range covering entire lifting needs is now available with M&F MHE - the nation-wide leader in lifting gear.</p>
                    
                </div>
                <!-- End Latest Products -->
            </div>
            <!--// end row -->
        </div>
        <!-- End Latest Products -->

      

          
                
                    </div>
                </div>
                <!-- End Masonry Grid -->
            </div>
        </div>
        <!-- End Work -->
        <!--========== END PAGE LAYOUT ==========-->

        <!--========== FOOTER ==========-->
       <?php include('footer.php');?>