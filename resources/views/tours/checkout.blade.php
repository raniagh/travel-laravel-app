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
        <div class="container clear-padding text-center flight-title">
            <h3>Confirmer réservation</h3>
        
        </div>
    </div>
    <!-- END: PAGE TITLE -->

    <!-- START: BOOKING TAB -->
    <div class="row booking-tab">
        <div class="container clear-padding">
            <ul class="nav nav-tabs">
                <li class=" col-md-4 col-sm-4 col-xs-4"><a data-toggle="tab" href="#review-booking" class="text-center"></a></li>
                <li class="col-md-4 col-sm-4 col-xs-4"><a data-toggle="tab" href="#billing-info" class="text-center"><i class="fa fa-check-square"></i> <span>Paiement</span></a></li>  
                
            </ul> 
        </div>
    </div>
    @if(Session::has('message'))
            <div class="alert alert-success text-center" role="alert">
                {{Session::get('message')}}
            </div>
        @endif
    <div class="row booking-detail">
        <div class="container clear-padding">
            <div class="tab-content">
                <div id="review-booking" class="tab-pane fade in active">
                   
                   <div class="col-md-4 col-sm-4 booking-sidebar">
                        <div class="sidebar-item booking-summary">
                            <h4><i class="fa fa-bookmark"></i>Votre Sélection</h4>
                            <div class="sidebar-body">
                                <div class="booking-summary-title">
                                    
                                    <div class="col-md-8 col-sm-8 col-xs-8">
                                        <h5>Merveilleux {{$tour->destination}}</h5>
                                        <h5><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i></h5>
                                    </div>
                                </div>
                                <div class="clearfix"></div>
                                <div class="col-md-6 col-sm-6 col-xs-6 clear-padding">
                                    <h5>Du</h5>
                                    <div class="date text-center">
                                        <h2>05</h2>
                                        <h6>Mai</h6>
                                        <h5>Lundi</h5>
                                    </div>
                                </div>
                                <div class="col-md-6 col-sm-6 col-xs-6 clear-padding">
                                    <h5>à</h5>
                                    <div class="date text-center">
                                        <h2>14</h2>
                                        <h6>Mai</h6>
                                        <h5>Mardi</h5>
                                    </div>
                                </div>
                                <div class="clearfix"></div>
                                <table class="table">
                                    
                                    <tr>
                                        <td>Thème</td>
                                        <td>{{$tour->type}}</td>
                                    </tr>
                                   
                                    <tr>
                                        <td>Prix</td>
                                        <td class="total">{{$tour->budget}}</td>
                                    </tr>
                                </table>
                            </div>
                        </div>
                        <div class="sidebar-item contact-box">
                            <h4><i class="fa fa-phone"></i>Besoin d'assistance?</h4>
                            <div class="sidebar-body text-center">
                                <p>Besoin d'aide pour? Appelez-nous ou envoyez un message. Nos agents seront en contact.</p>
                                <h2>+91 1234567890</h2>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div id="billing-info" class="tab-pane fade">
                    <div class="col-md-8 col-sm-8">
                        <div class="passenger-detail">
                            <h3>Totale à payer {{$tour->budget}}DT</h3>
                            <div class="passenger-detail-body">
                               
                                
                                <div class="add-new-card">
                                   
                                    <form >
                                        <div class="col-md-6 ol-sm-6">
                                            <label>type de carte</label>
                                            <select name="carttype" class="form-control">
                                                <option>Credit Card</option>
                                                <option>Debit Card</option>
                                                
                                            </select>
                                        </div>
                                        <div class="col-md-6 ol-sm-6">
                                            <label>Numéro carte</label>
                                            <input type="text" name="num" required class="form-control">
                                        </div>
                                       
                                        <div>
                                            <a href="{{route('payer', $tour->idt) }}" type="submit" >CONFIRMER RESERVATION</a>
                                        </div>
                                    </form>
                                </div>
                                <div class="payment-seperator clearfix"></div>
                                <div class="paypal-pay">
                                    <h4>Payer avec Paypal</h4>
                                    <div class="col-md-2 col-sm-2 col-xs-4">
                                        <i class="fa fa-paypal"></i>
                                    </div>
                                    <div class="col-md-10 col-sm-10 col-xs-8">
                                        <a href="#">CONFIRMER RESERVATION</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-4 booking-sidebar">
                        <div class="sidebar-item contact-box">
                            <h4><i class="fa fa-phone"></i>Besoin d'assistance?</h4>
                            <div class="sidebar-body text-center">
                                <p>Besoin d'aide pour? Appelez-nous ou envoyez un message. Nos agents seront en contact.</p>
                                <h2>+91 1234567890</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- END: BOOKING TAB -->
    <!-- START: FOOTER -->
    
    <!-- END: FOOTER -->

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
<script type="text/javascript" src="{{URL::asset('assets/plugins/supersized.3.1.3.min.js')}}"></script>
<script src="{{URL::asset('assets/js/js.js')}}"></script>
</body>

<!-- Mirrored from limpidthemesdemo.com/Themeforest/html/cruise-demo/light/holiday-booking.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 06 Mar 2019 10:51:06 GMT -->
</html>