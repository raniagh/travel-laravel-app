<!DOCTYPE html>
<html class="load-full-screen">

<!-- Mirrored from limpidthemesdemo.com/Themeforest/html/cruise-demo/light/index-5.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 06 Mar 2019 10:50:33 GMT -->
<head>

    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="LimpidThemes">

    <title>Cruise - Responsive Travel Agency Template</title>

    <!-- STYLES -->
    <link href="{{URL::asset('assets/css/animate.min.css')}}" rel="stylesheet">
    <link href="{{URL::asset('assets/css/bootstrap-select.min.css')}}" rel="stylesheet">
    <link href="{{URL::asset('assets/css/owl.carousel.css')}}" rel="stylesheet">
    <link href="{{URL::asset('assets/css/owl-carousel-theme.css')}}" rel="stylesheet">
    <link href="{{URL::asset('assets/css/bootstrap.min.css')}}" rel="stylesheet" media="screen">
    <link href="{{URL::asset('assets/css/flexslider.css')}}" rel="stylesheet" media="screen">
    <link href="{{URL::asset('assets/css/style.css')}}" rel="stylesheet" media="screen">
    <!-- LIGHT -->
    <link rel="stylesheet" type="text/css" href="{{URL::asset('assets/css/dummy.html')}}" id="select-style">
    <link href="{{URL::asset('assets/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet">

    <link href="{{URL::asset('assets/css/light.css')}}" rel="stylesheet" media="screen">

    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,800,700,600' rel='stylesheet' type='text/css'>

</head>


<!-- BEGIN: PRELOADER -->
<div id="loader" class="load-full-screen">
    <div class="loading-animation">
        <span><i class="fa fa-plane"></i></span>
        <span><i class="fa fa-bed"></i></span>
        <span><i class="fa fa-ship"></i></span>
        <span><i class="fa fa-suitcase"></i></span>
    </div>
</div>
<!-- END: PRELOADER -->

<!-- BEGIN: COLOR SWITCHER -->

<!-- END: COLOR SWITCHER -->

<!-- BEGIN: SITE-WRAPPER -->
<div class="site-wrapper">
    <body class="load-full-screen">
    <div class="clearfix"></div>
    <div class="row transparent-menu">
        <div class="container clear-padding">
            <!-- BEGIN: HEADER -->
            <div class="navbar-wrapper">
                <div class="navbar navbar-default" role="navigation">
                    <!-- BEGIN: NAV-CONTAINER -->
                    <div class="nav-container">
                        <div class="navbar-header">
                            <!-- BEGIN: TOGGLE BUTTON (RESPONSIVE)-->
                            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                                <span class="sr-only">Toggle navigation</span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>

                            <!-- BEGIN: LOGO -->
                            <a class="navbar-brand logo" href="index.html">VOYAGE</a>
                        </div>

                        <!-- BEGIN: NAVIGATION -->
                        <div class="navbar-collapse collapse">
                            <ul class="nav navbar-nav navbar-right">
                                <li >
                                    <a  href="/" ><i class="fa fa-home"></i>ACCUEIL</a>

                                </li>
                                <li class="dropdown mega">
                                    <a href="{{ route('hotel')}}" ><i class="fa fa-bed"></i> HÖTELS </a>

                                    <div class="clearfix"></div>
                                </li>
                                <li class="dropdown mega">
                                    <a  href="{{ route('vol')}}" ><i class="fa fa-plane"></i> VOLS</a>
                                    <div class="clearfix"></div>
                                </li>
                                <li class="dropdown mega">
                                    <a  href="{{ route('tour')}}"><i class="fa fa-suitcase"></i> TOURS </a>
                                    <div class="clearfix"></div>
                                </li>
                                <li class="dropdown mega">
                                    <a  href="{{ route('voiture')}}"><i class="fa fa-taxi"></i> VOITURES </a>
                                    <div class="clearfix"></div>
                                </li>
                                <li class="dropdown mega">
                                    <a href="{{ route('croisiere')}}"><i class="fa fa-ship"></i> CROISIERES </a>
                                    <div class="clearfix"></div>
                                </li>

                            </ul>
                        </div>
                        <!-- END: NAVIGATION -->
                    </div>
                    <!--END: NAV-CONTAINER -->
                </div>
            </div>
            <!-- END: HEADER -->
        </div>
    </div>
    <!-- START: PAGE TITLE -->
    <div class="row page-title">
        <div class="container clear-padding text-center">
            <h3>WONDERFUL EUROPE</h3>
            <h4>6 Nights/7 Days</h4>
            <span>Paris (2)<i class="fa fa-long-arrow-right"></i>London (2)<i class="fa fa-long-arrow-right"></i>Amesterdam (2)</span>
        </div>
    </div>
    <!-- END: PAGE TITLE -->

    <div class="row package-detail">
        <div class="container">
            <div class="product-brief-info">
                <div class="col-md-8 clear-padding">
                    <div id="slider" class="flexslider">
                        <ul class="slides">
                            <li>
                                <img src="assets/images/cruise.jpg" alt="cruise" />
                            </li>
                            <li>
                                <img src="assets/images/cruise-slide1.jpg" alt="cruise" />
                            </li>
                            <li>
                                <img src="assets/images/cruise-slide.jpg" alt="cruise" />
                            </li>
                            <li>
                                <img src="assets/images/cruise.jpg" alt="cruise" />
                            </li>
                            <li>
                                <img src="assets/images/cruise-slide1.jpg" alt="cruise" />
                            </li>
                            <li>
                                <img src="assets/images/cruise-slide.jpg" alt="cruise" />
                            </li>
                        </ul>
                    </div>
                    <div id="carousel" class="flexslider">
                        <ul class="slides">
                            <li>
                                <img src="assets/images/cruise-thumb.jpg" alt="cruise" />
                            </li>
                            <li>
                                <img src="assets/images/cruise-thumb1.jpg" alt="cruise" />
                            </li>
                            <li>
                                <img src="assets/images/cruise-thumb2.jpg" alt="cruise" />
                            </li>
                            <li>
                                <img src="assets/images/cruise-thumb.jpg" alt="cruise" />
                            </li>
                            <li>
                                <img src="assets/images/cruise-thumb1.jpg" alt="cruise" />
                            </li>
                            <li>
                                <img src="assets/images/cruise-thumb2.jpg" alt="cruise" />
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-4 detail clear-padding">
                    <div class="review sidebar-item">
                        <h4><i class="fa fa-comments"></i> Package Reviews</h4>
                        <div class="sidebar-item-body text-center">
                            <div class="rating-box">
                                <div class="col-md-6 col-sm-6 col-xs-6 clear-padding tripadvisor">
                                    <img src="assets/images/tripadvisor.png" alt="cruise"><br>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star-o"></i>
                                    <h5>4.0/5.0 Based on 12 Reviews</h5>
                                </div>
                                <div class="col-md-6 col-sm-6 col-xs-6 clear-padding">
                                    <i class="fa fa-users"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star-o"></i>
                                    <h5>Based on 128 Guest Reviews</h5>
                                </div>
                                <div class="clearfix"></div>
                            </div>
                            <div class="guest-say rating-box">
                                <h2><i class="fa fa-check-circle"></i> Perfect</h2>
                                <div>
                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.</p>
                                </div>
                                <div class="col-md-5 col-sm-5 col-xs-5 clear-padding user-img">
                                    <img src="assets/images/user1.jpg" alt="cruise">
                                </div>
                                <div class="col-md-7 col-sm-7 col-xs-7 clear-padding user-name">
                                    <span>Lenore, USA</span>
                                    <span>
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
										<i class="fa fa-star-o"></i>
										<i class="fa fa-star-o"></i>
									</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row product-complete-info">
        <div class="container clear-padding">
            <div class="col-md-8 main-content">
                <div class="room-complete-detail custom-tabs cruise-tabs col-md-12">
                    <ul class="nav nav-tabs">
                        <li class="active col-xs-3 text-center"><a data-toggle="tab" href="#ship-info"><i class="fa fa-ship"></i> <span>Ship Info</span></a></li>
                        <li class="col-xs-3 text-center"><a data-toggle="tab" href="#itinerary"><i class="fa fa-globe"></i> <span>Itinerary</span></a></li>
                        <li class="col-xs-3 text-center"><a data-toggle="tab" href="#cabin"><i class="fa fa-check-square"></i> <span>Cabin Types</span></a></li>
                        <li class="col-xs-3 text-center"><a data-toggle="tab" href="#map"><i class="fa fa-map-marker"></i> <span>View Map</span></a></li>
                    </ul>
                    <div class="tab-content">
                        <div id="ship-info" class="tab-pane fade in active">
                            <h4 class="tab-heading">Overview</h4>
                            <p>
                                Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
                            </p>
                            <h4 class="tab-heading">Facilities</h4>
                            <div class="ammenties-4">
                                <div class="col-md-4 col-sm-2">
                                    <p><i class="fa fa-beer"></i> Bar</p>
                                </div>
                                <div class="col-md-4 col-sm-2">
                                    <p><i class="fa fa-cutlery"></i> Restaurant</p>
                                </div>
                                <div class="col-md-4 col-sm-2">
                                    <p><i class="fa fa-glass"></i> Cafe</p>
                                </div>
                                <div class="col-md-4 col-sm-2">
                                    <p><i class="fa fa-film"></i> Theatre</p>
                                </div>
                                <div class="col-md-4 col-sm-2">
                                    <p><i class="fa fa-paw"></i> Pet Room</p>
                                </div>
                                <div class="col-md-4 col-sm-2">
                                    <p><i class="fa fa-desktop"></i> LED in Room</p>
                                </div>
                                <div class="col-md-4 col-sm-2">
                                    <p><i class="fa fa-beer"></i> Bar</p>
                                </div>
                                <div class="col-md-4 col-sm-2">
                                    <p><i class="fa fa-cutlery"></i> Restaurant</p>
                                </div>
                                <div class="col-md-4 col-sm-2">
                                    <p><i class="fa fa-glass"></i> Cafe</p>
                                </div>
                                <div class="col-md-4 col-sm-2">
                                    <p><i class="fa fa-film"></i> Theatre</p>
                                </div>
                                <div class="col-md-4 col-sm-2">
                                    <p><i class="fa fa-paw"></i> Pet Room</p>
                                </div>
                                <div class="col-md-4 col-sm-2">
                                    <p><i class="fa fa-desktop"></i> LED in Room</p>
                                </div>
                            </div>
                            <h4 class="tab-heading">Lorem Lpsum</h4>
                            <p>
                                Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
                            </p>
                        </div>
                        <div id="itinerary" class="tab-pane fade">
                            <h4 class="tab-heading">Package Itinerary</h4>
                            <div class="daily-schedule">
                                <div class="title">
                                    <p><span>Day 1</span>Paris</p>
                                </div>
                                <div class="daily-schedule-body">
                                    <div class="col-md-4 col-sm-4">
                                        <img src="assets/images/cruise1.jpg" alt="cruise">
                                    </div>
                                    <div class="col-md-8 col-sm-8">
                                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</p>
                                    </div>
                                    <div class="clearfix"></div>
                                    <div class="col-md-12 activity">
                                        <h4>Included</h4>
                                        <div class="col-md-6 col-sm-6">
                                            <p><i class="fa fa-check-square"></i> Free meal</p>
                                        </div>
                                        <div class="col-md-6 col-sm-6">
                                            <p><i class="fa fa-check-square"></i> Movie show</p>
                                        </div>
                                        <div class="clearfix"></div>
                                        <div class="col-md-6 col-sm-6">
                                            <p><i class="fa fa-check-square"></i> Rock concert</p>
                                        </div>
                                        <div class="col-md-6 col-sm-6">
                                            <p><i class="fa fa-check-square"></i> Night show</p>
                                        </div>
                                        <div class="clearfix"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="daily-schedule">
                                <div class="title">
                                    <p><span>Day 2</span>At Sea</p>
                                </div>
                                <div class="daily-schedule-body">
                                    <div class="col-md-4 col-sm-4">
                                        <img src="assets/images/cruise2.jpg" alt="cruise">
                                    </div>
                                    <div class="col-md-8 col-sm-8">
                                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</p>
                                    </div>
                                    <div class="clearfix"></div>
                                    <div class="col-md-12 activity">
                                        <h4>Included</h4>
                                        <div class="col-md-6 col-sm-6">
                                            <p><i class="fa fa-check-square"></i> Free meal</p>
                                        </div>
                                        <div class="col-md-6 col-sm-6">
                                            <p><i class="fa fa-check-square"></i> Movie show</p>
                                        </div>
                                        <div class="clearfix"></div>
                                        <div class="col-md-6 col-sm-6">
                                            <p><i class="fa fa-check-square"></i> Rock concert</p>
                                        </div>
                                        <div class="col-md-6 col-sm-6">
                                            <p><i class="fa fa-check-square"></i> Night show</p>
                                        </div>
                                        <div class="clearfix"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="daily-schedule">
                                <div class="title">
                                    <p><span>Day 3</span>Amsterdam</p>
                                </div>
                                <div class="daily-schedule-body">
                                    <div class="col-md-4 col-sm-4">
                                        <img src="assets/images/cruise3.jpg" alt="cruise">
                                    </div>
                                    <div class="col-md-8 col-sm-8">
                                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</p>
                                    </div>
                                    <div class="clearfix"></div>
                                    <div class="col-md-12 activity">
                                        <h4>Included</h4>
                                        <div class="col-md-6 col-sm-6">
                                            <p><i class="fa fa-check-square"></i> Free meal</p>
                                        </div>
                                        <div class="col-md-6 col-sm-6">
                                            <p><i class="fa fa-check-square"></i> Movie show</p>
                                        </div>
                                        <div class="clearfix"></div>
                                        <div class="col-md-6 col-sm-6">
                                            <p><i class="fa fa-check-square"></i> Rock concert</p>
                                        </div>
                                        <div class="col-md-6 col-sm-6">
                                            <p><i class="fa fa-check-square"></i> Night show</p>
                                        </div>
                                        <div class="clearfix"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div id="cabin" class="tab-pane fade">
                            <h4 class="tab-heading">Cabin Types</h4>
                            <div class="inclusion-wrapper">
                                <div class="inclusion-title">
                                    <p><span><i class="fa fa-bed"></i></span>Balcony</p>
                                </div>
                                <div class="inclusion-body">
                                    <div class="col-md-3 col-sm-3 clear-padding">
                                        <img src="assets/images/tour1.jpg" alt="cruise">
                                    </div>
                                    <div class="col-md-9 col-sm-9">
                                        <h5>Starting From $299/Person <a href="#">BOOK NOW</a></h5>
                                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                                    </div>
                                    <div class="clearfix"></div>
                                    <div class="col-md-12 activity">
                                        <h4>Cabin Facilities</h4>
                                        <div class="col-md-6 col-sm-6">
                                            <p><i class="fa fa-check-square"></i> LED TV</p>
                                        </div>
                                        <div class="col-md-6 col-sm-6">
                                            <p><i class="fa fa-check-square"></i> Refrigerator</p>
                                        </div>
                                        <div class="clearfix"></div>
                                        <div class="col-md-6 col-sm-6">
                                            <p><i class="fa fa-check-square"></i> Room Sevice</p>
                                        </div>
                                        <div class="col-md-6 col-sm-6">
                                            <p><i class="fa fa-check-square"></i> Free WiFi</p>
                                        </div>
                                        <div class="clearfix"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="inclusion-wrapper">
                                <div class="inclusion-title">
                                    <p><span><i class="fa fa-bed"></i></span>Ocean View</p>
                                </div>
                                <div class="inclusion-body">
                                    <div class="col-md-3 col-sm-3 clear-padding">
                                        <img src="assets/images/tour2.jpg" alt="cruise">
                                    </div>
                                    <div class="col-md-9 col-sm-9">
                                        <h5>Starting From $399/Person <a href="#">BOOK NOW</a></h5>
                                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                                    </div>
                                    <div class="clearfix"></div>
                                    <div class="col-md-12 activity">
                                        <h4>Cabin Facilities</h4>
                                        <div class="col-md-6 col-sm-6">
                                            <p><i class="fa fa-check-square"></i> LED TV</p>
                                        </div>
                                        <div class="col-md-6 col-sm-6">
                                            <p><i class="fa fa-check-square"></i> Refrigerator</p>
                                        </div>
                                        <div class="clearfix"></div>
                                        <div class="col-md-6 col-sm-6">
                                            <p><i class="fa fa-check-square"></i> Room Sevice</p>
                                        </div>
                                        <div class="col-md-6 col-sm-6">
                                            <p><i class="fa fa-check-square"></i> Free WiFi</p>
                                        </div>
                                        <div class="clearfix"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="inclusion-wrapper">
                                <div class="inclusion-title">
                                    <p><span><i class="fa fa-bed"></i></span>Suite</p>
                                </div>
                                <div class="inclusion-body">
                                    <div class="col-md-3 col-sm-3 clear-padding">
                                        <img src="assets/images/tour3.jpg" alt="cruise">
                                    </div>
                                    <div class="col-md-9 col-sm-9">
                                        <h5>Starting From $599/Person <a href="#">BOOK NOW</a></h5>
                                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                                    </div>
                                    <div class="clearfix"></div>
                                    <div class="col-md-12 activity">
                                        <h4>Cabin Facilities</h4>
                                        <div class="col-md-6 col-sm-6">
                                            <p><i class="fa fa-check-square"></i> LED TV</p>
                                        </div>
                                        <div class="col-md-6 col-sm-6">
                                            <p><i class="fa fa-check-square"></i> Refrigerator</p>
                                        </div>
                                        <div class="clearfix"></div>
                                        <div class="col-md-6 col-sm-6">
                                            <p><i class="fa fa-check-square"></i> Room Sevice</p>
                                        </div>
                                        <div class="col-md-6 col-sm-6">
                                            <p><i class="fa fa-check-square"></i> Free WiFi</p>
                                        </div>
                                        <div class="clearfix"></div>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <div id="map" class="tab-pane fade">
                            <h4 class="tab-heading">Map</h4>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 package-detail-sidebar">
                <div class="col-md-12 sidebar-wrapper clear-padding">
                    <div class="package-summary sidebar-item">
                        <h4><i class="fa fa-bookmark"></i> Package Summary</h4>
                        <div class="package-summary-body">
                            <h5><i class="fa fa-heart"></i>Theme</h5>
                            <p>Honeymoon, Group, Beach</p>
                            <h5><i class="fa fa-map-marker"></i>Departure Port</h5>
                            <p>Miami</p>
                            <h5><i class="fa fa-globe"></i>Itinerary</h5>
                            <p>Paris, London, Amesterdam</p>
                        </div>
                        <div class="package-summary-footer text-center">
                            <div class="col-md-6 col-sm-6 col-xs-6 price">
                                <h5>Starting From</h5>
                                <h5><strong>$999/Person</strong></h5>
                            </div>
                            <div class="col-md-6 col-sm-6 col-xs-6 book">
                                <a href="#">BOOK NOW</a>
                            </div>
                        </div>
                    </div>
                    <div class="assistance-box sidebar-item">
                        <h4><i class="fa fa-phone"></i> Need Assistance</h4>
                        <div class="assitance-body text-center">
                            <h5>Need Help? Call us or drop a message. Our agents will be in touch shortly.</h5>
                            <h2>+91 1234567890</h2>
                            <h3>Or</h3>
                            <a href="mailto:info@yourdomain.com"><i class="fa fa-envelope-o"></i> Email Us</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- END: ROOM GALLERY -->

    </section>
    <!-- END: FOOTER -->
    </body>
</div>
<!-- END: SITE-WRAPPER -->

<!-- Load Scripts -->
<script src="{{URL::asset('assets/js/respond.js')}}"></script>
<script src="{{URL::asset('assets/js/jquery.js')}}"></script>
<script src="{{URL::asset('assets/plugins/owl.carousel.min.js')}}"></script>
<script src="{{URL::asset('assets/js/bootstrap.min.js')}}"></script>
<script src="{{URL::asset('assets/js/jquery-ui.min.js')}}"></script>
<script src="{{URL::asset('assets/js/bootstrap-select.min.js')}}"></script>
<script src="{{URL::asset('assets/plugins/wow.min.js')}}"></script>
<script src="{{URL::asset('assets/js/js.js')}}"></script>
<script>
    /*******************************************************************
     BEGIN: FLEX SLIDER SETTING
     *******************************************************************/
    $(window).load(function() {
        "use strict";
        $('#carousel').flexslider({
            animation: "slide",
            controlNav: false,
            animationLoop: false,
            slideshow: false,
            itemWidth: 150,
            itemMargin: 5,
            asNavFor: '#slider'
        });

        $('#slider').flexslider({
            animation: "slide",
            controlNav: false,
            animationLoop: false,
            slideshow: false,
            sync: "#carousel"
        });
    });
</script>
<!-- Mirrored from limpidthemesdemo.com/Themeforest/html/cruise-demo/light/cruise-detail-2.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 06 Mar 2019 10:55:11 GMT -->
</html>