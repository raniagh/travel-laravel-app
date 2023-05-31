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
            <h3>{{$tour->destination}}</h3>
            <h4>{{$tour->duree}}</h4>
            <span>Madrid (2)<i class="fa fa-long-arrow-right"></i>Grenade (2)<i class="fa fa-long-arrow-right"></i>Seville (2)<i class="fa fa-long-arrow-right"></i>cordoba</span>
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
                                <img src="{{asset('images/holiday-slide3.jpg')}}" alt="cruise">
                            </li>
                            
                        </ul>
                    </div>
                    <div id="carousel" class="flexslider">
                        <ul class="slides">
                            <li>
                                <img src="{{URL::asset('assets/images/holiday-thumb3.jpg')}}" alt="cruise">
                            </li>
                            <li>
                                <img src="assets/images/holiday-thumb4.jpg" alt="cruise">
                            </li>
                            <li>
                                <img src="assets/images/holiday-thumb5.jpg" alt="cruise">
                            </li>
                            <li>
                                <img src="assets/images/holiday-thumb3.jpg" alt="cruise">
                            </li>
                            <li>
                                <img src="assets/images/holiday-thumb4.jpg" alt="cruise">
                            </li>
                            <li>
                                <img src="assets/images/holiday-thumb5.jpg" alt="cruise">
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
                                    <img src="{{asset('images/user1.jpg')}}" alt="cruise">
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
                        <li class="col-xs-3 text-center"><a data-toggle="tab" href="#overview"><i class="fa fa-suitcase"></i> <span>Détails</span></a></li>
                        <li class="col-xs-3 text-center"><a data-toggle="tab" href="#inclusion"><i class="fa fa-check-square"></i> <span>Inclusion</span></a></li>
                        <li class="active col-xs-3 text-center"><a data-toggle="tab" href="#itinerary"><i class="fa fa-street-view"></i> <span>Itinerary</span></a></li>
                        <li class="col-xs-3 text-center"><a data-toggle="tab" href="#add-info"><i class="fa fa-info-circle"></i> <span>Additional Info</span></a></li>
                    </ul>
                    <div class="tab-content">
                        <div id="overview" class="tab-pane fade">
                            <h4 class="tab-heading">Détails</h4>
                            <p>
                                {{$tour->description}}
                            </p>
                            <h4 class="tab-heading">Inclusion</h4>
                            <p class="inc">
                                <i class="fa fa-check-circle"></i> Return Economy economy class airfare<br>
                                <i class="fa fa-check-circle"></i> Welcome drinks at hotel<br>
                                <i class="fa fa-check-circle"></i> Stay in 3 star hotel<br>
                                <i class="fa fa-check-circle"></i> Guided tour<br>
                                <i class="fa fa-check-circle"></i> Sighseeing<br>
                                <i class="fa fa-check-circle"></i> Airport transport<br>
                                <i class="fa fa-check-circle"></i> Buffet breakfast<br>
                                <i class="fa fa-check-circle"></i> Return Economy economy class airfare<br>
                                <i class="fa fa-check-circle"></i> Welcome drinks at hotel<br>
                                <i class="fa fa-check-circle"></i> Stay in 3 star hotel<br>
                            </p>
                            <h4 class="tab-heading">Exclusion</h4>
                            <p class="inc">
                                <i class="fa fa-times-circle-o"></i> Travel insurance<br>
                                <i class="fa fa-times-circle-o"></i> Increase in airfare<br>
                                <i class="fa fa-times-circle-o"></i> Airport fees<br>
                                <i class="fa fa-times-circle-o"></i> Travel insurance<br>
                                <i class="fa fa-times-circle-o"></i> Increase in airfare<br>
                                <i class="fa fa-times-circle-o"></i> Airport fees<br>
                            </p>
                        </div>
                        <div id="inclusion" class="tab-pane fade">
                            <h4 class="tab-heading">Inclusion</h4>
                            <div class="inclusion-wrapper">
                                <div class="inclusion-title">
                                    <p><span><i class="fa fa-bed"></i></span>Hotel</p>
                                </div>
                                <div class="inclusion-body">
                                    <h4>Paris, 2 Nights</h4>
                                    <div class="col-md-3 col-sm-3 clear-padding">
                                        <img src="assets/images/offer1.jpg" alt="cruise">
                                    </div>
                                    <div class="col-md-9 col-sm-9">
                                        <h5>Grand Lilly, London <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star-o"></i><i class="fa fa-star-o"></i></h5>
                                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                                    </div>
                                    <div class="clearfix"></div>
                                    <h4>London, 2 Nights</h4>
                                    <div class="col-md-3 col-sm-3 clear-padding">
                                        <img src="assets/images/offer2.jpg" alt="cruise">
                                    </div>
                                    <div class="col-md-9 col-sm-9">
                                        <h5>Grand Lilly, London <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star-o"></i><i class="fa fa-star-o"></i></h5>
                                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                                    </div>
                                    <div class="clearfix"></div>
                                    <h4>Amsterdam, 2 Nights</h4>
                                    <div class="col-md-3 col-sm-3 clear-padding">
                                        <img src="assets/images/offer3.jpg" alt="cruise">
                                    </div>
                                    <div class="col-md-9 col-sm-9">
                                        <h5>Grand Lilly, London <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star-o"></i><i class="fa fa-star-o"></i></h5>
                                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                                    </div>
                                    <div class="clearfix"></div>
                                </div>
                            </div>
                            <div class="inclusion-wrapper">
                                <div class="inclusion-title">
                                    <p><span><i class="fa fa-plane"></i></span>Transport</p>
                                </div>
                                <div class="inclusion-body">
                                    <h4>Return Flight Included</h4>
                                    <div class="flight-inclusion">
                                        <div class="col-md-2 col-sm-2 col-xs-2 text-center">
                                            <img src="{{URL::asset('assets/images/airline/vistara-2x.png')}}" alt="cruise">
                                        </div>
                                        <div class="col-md-3 col-sm-3 col-xs-3 text-center">
                                            <p>New Delhi</p>
                                        </div>
                                        <div class="col-md-4 col-sm-4 col-xs-4 text-center">
                                            <i class="fa fa-long-arrow-right"></i>
                                        </div>
                                        <div class="col-md-3 col-sm-3 col-xs-3 text-center">
                                            <p>Paris</p>
                                        </div>
                                    </div>
                                    <div class="clearfix"></div>
                                    <div class="flight-inclusion">
                                        <div class="col-md-2 col-sm-2 col-xs-2 text-center">
                                            <img src="assets/images/airline/indigo-2x.png" alt="cruise">
                                        </div>
                                        <div class="col-md-3 col-sm-3 col-xs-3 text-center">
                                           <p>Paris</p>
                                        </div>
                                        <div class="col-md-4 col-sm-4 col-xs-4 text-center">
                                            <i class="fa fa-long-arrow-right"></i>
                                        </div>
                                        <div class="col-md-3 col-sm-3 col-xs-3 text-center">
                                            <p>New Delhi</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="inclusion-wrapper">
                                <div class="inclusion-title">
                                    <p><span><i class="fa fa-suitcase"></i></span>Other Inclusion</p>
                                </div>
                                <div class="inclusion-body">
                                    <p class="inc">
                                        <i class="fa fa-check-circle"></i> Return Economy economy class airfare<br>
                                        <i class="fa fa-check-circle"></i> Welcome drinks at hotel<br>
                                        <i class="fa fa-check-circle"></i> Stay in 3 star hotel<br>
                                        <i class="fa fa-check-circle"></i> Guided tour<br>
                                        <i class="fa fa-check-circle"></i> Sighseeing<br>
                                        <i class="fa fa-check-circle"></i> Airport transport<br>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div id="itinerary" class="tab-pane fade in active">
                            <h4 class="tab-heading">Package Itinerary</h4>
                            <div class="daily-schedule">
                                <div class="title">
                                    <p><span>Day 1</span>Paris</p>
                                </div>
                                <div class="daily-schedule-body">
                                    <div class="col-md-4 col-sm-4">
                                        <img src="assets/images/tour1.jpg" alt="cruise">
                                    </div>
                                    <div class="col-md-8 col-sm-8">
                                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</p>
                                    </div>
                                    <div class="clearfix"></div>
                                    <div class="col-md-12 activity">
                                        <h4>Included</h4>
                                        <div class="col-md-6 col-sm-6">
                                            <p><i class="fa fa-check-square"></i> Taxi transfer from airport</p>
                                        </div>
                                        <div class="col-md-6 col-sm-6">
                                            <p><i class="fa fa-check-square"></i> Welcome drinks at hotel</p>
                                        </div>
                                        <div class="clearfix"></div>
                                        <div class="col-md-6 col-sm-6">
                                            <p><i class="fa fa-check-square"></i> Buffet dinner</p>
                                        </div>
                                        <div class="col-md-6 col-sm-6">
                                            <p><i class="fa fa-check-square"></i> Guided city tour</p>
                                        </div>
                                        <div class="clearfix"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="daily-schedule">
                                <div class="title">
                                    <p><span>Day 2</span>Paris City Tour</p>
                                </div>
                                <div class="daily-schedule-body">
                                    <div class="col-md-4 col-sm-4">
                                        <img src="assets/images/tour2.jpg" alt="cruise">
                                    </div>
                                    <div class="col-md-8 col-sm-8">
                                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. </p>
                                    </div>
                                    <div class="clearfix"></div>
                                    <div class="col-md-12 activity">
                                        <h4>Included</h4>
                                        <div class="col-md-6 col-sm-6">
                                            <p><i class="fa fa-check-square"></i> Taxi transfer from airport</p>
                                        </div>
                                        <div class="col-md-6 col-sm-6">
                                            <p><i class="fa fa-check-square"></i> Welcome drinks at hotel</p>
                                        </div>
                                        <div class="clearfix"></div>
                                        <div class="col-md-6 col-sm-6">
                                            <p><i class="fa fa-check-square"></i> Buffet dinner</p>
                                        </div>
                                        <div class="col-md-6 col-sm-6">
                                            <p><i class="fa fa-check-square"></i> Guided city tour</p>
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
                                        <img src="assets/images/tour3.jpg" alt="cruise">
                                    </div>
                                    <div class="col-md-8 col-sm-8">
                                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. </p>
                                    </div>
                                    <div class="clearfix"></div>
                                    <div class="col-md-12 activity">
                                        <h4>Included</h4>
                                        <div class="col-md-6 col-sm-6">
                                            <p><i class="fa fa-check-square"></i> Taxi transfer from airport</p>
                                        </div>
                                        <div class="col-md-6 col-sm-6">
                                            <p><i class="fa fa-check-square"></i> Welcome drinks at hotel</p>
                                        </div>
                                        <div class="clearfix"></div>
                                        <div class="col-md-6 col-sm-6">
                                            <p><i class="fa fa-check-square"></i> Buffet dinner</p>
                                        </div>
                                        <div class="col-md-6 col-sm-6">
                                            <p><i class="fa fa-check-square"></i> Guided city tour</p>
                                        </div>
                                        <div class="clearfix"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div id="add-info" class="tab-pane fade">
                            <h4 class="tab-heading">Inclusion</h4>
                            <p class="inc">
                                <i class="fa fa-check-circle"></i> Return Economy economy class airfare<br>
                                <i class="fa fa-check-circle"></i> Welcome drinks at hotel<br>
                                <i class="fa fa-check-circle"></i> Stay in 3 star hotel<br>
                                <i class="fa fa-check-circle"></i> Guided tour<br>
                                <i class="fa fa-check-circle"></i> Sighseeing<br>
                                <i class="fa fa-check-circle"></i> Airport transport<br>
                                <i class="fa fa-check-circle"></i> Buffet breakfast<br>
                                <i class="fa fa-check-circle"></i> Return Economy economy class airfare<br>
                                <i class="fa fa-check-circle"></i> Welcome drinks at hotel<br>
                                <i class="fa fa-check-circle"></i> Stay in 3 star hotel<br>
                            </p>
                            <h4 class="tab-heading">Exclusion</h4>
                            <p class="inc">
                                <i class="fa fa-times-circle-o"></i> Travel insurance<br>
                                <i class="fa fa-times-circle-o"></i> Increase in airfare<br>
                                <i class="fa fa-times-circle-o"></i> Airport fees<br>
                                <i class="fa fa-times-circle-o"></i> Travel insurance<br>
                                <i class="fa fa-times-circle-o"></i> Increase in airfare<br>
                                <i class="fa fa-times-circle-o"></i> Airport fees<br>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 package-detail-sidebar">
                <div class="col-md-12 sidebar-wrapper clear-padding">
                    <div class="package-summary sidebar-item">
                        <h4><i class="fa fa-bookmark"></i> 
Résumé du forfait</h4>
                        <div class="package-summary-body">
                             @if($type=='voyage de noces')
                            <h5><i class="fa fa-heart"></i>Thème</h5>
                            <p>voyage de noces</p>
                            @elseif($type=='individuel')
                            <h5><i class="fa fa-user"></i>Thème</h5>
                            <p>individuel</p>
                            @else
                            <h5><i class="fa fa-users"></i>Thème</h5>
                            <p>en famille</p>
                            @endif
                            <h5><i class="fa fa-map-marker"></i>Départ</h5>
                            <p>{{$tour->depart}}</p>
                            <h5><i class="fa fa-globe"></i>Itinéraire</h5>
                            <p>Madrid (2), Grenade (2), Seville (2), Cordoba (2)</p>
                        </div>
                        <div class="package-summary-footer text-center">
                            <div class="col-md-6 col-sm-6 col-xs-6 price">
                                <h5>à partir de</h5>
                                <h5>{{$tour->budget}}/Personne</h5>
                            </div>
                            <div class="col-md-6 col-sm-6 col-xs-6 book">
                               <a href="{{route('tours.reserve', $tour->idt) }}">Reserver</a>
                            </div>
                        </div>
                    </div>
                </div>
    
                    <div class="assistance-box sidebar-item">
                        <h4><i class="fa fa-phone"></i> BESOIN D'ASSISTANCE</h4>
                        <div class="assitance-body text-center">
                            <h5>Besoin d'aide? Appelez-nous ou envoyez un message. Nos agents seront en contact.</h5>
                            <h2>+91 1234567890</h2>
                            <h3>Ou</h3>
                            <a href="mailto:info@yourdomain.com"><i class="fa fa-envelope-o"></i> Email</a>
                        </div>
                    </div>
                </div>
            </div>
            
                </div>
            </div>
        </div>
    </div>

    <!-- END: ROOM GALLERY -->

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
    $(window).load(function() {
        "use strict";
        // The slider being synced must be initialized first
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


<!-- Mirrored from limpidthemesdemo.com/Themeforest/html/cruise-demo/light/holiday-detail-2.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 06 Mar 2019 10:51:06 GMT -->
</html>