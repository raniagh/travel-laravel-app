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
    <div class="row page-title page-title3">
        <div class="container clear-padding text-center">
            <h3>MERCEDES C CLASS</h3>
            <h4>
                <i class="fa fa-certificate"></i>
                MERCEDES
            </h4>
            <p><i class="fa fa-map-marker"></i> Mall Road, Shimla</p>
        </div>
    </div>
    <!-- END: PAGE TITLE -->

    <!-- START: ROOM GALLERY -->
    <div class="row hotel-detail">
        <div class="container">
            <div class="main-content col-md-8">
                <div id="room-gallery" class="carousel slide" data-ride="carousel">
                    <ol class="carousel-indicators">
                        <li data-target="#room-gallery" data-slide-to="0" class="active"></li>
                        <li data-target="#room-gallery" data-slide-to="1"></li>
                    </ol>
                    <div class="carousel-inner" role="listbox">
                        <div class="item active">
                            <img src="assets/images/car-slide1.jpg" alt="Cruise">
                        </div>
                        <div class="item">
                            <img src="assets/images/car-slide2.jpg" alt="Cruise">
                        </div>
                    </div>
                    <a class="left carousel-control" href="#room-gallery" role="button" data-slide="prev">
                        <span class="fa fa-chevron-left" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="right carousel-control" href="#room-gallery" role="button" data-slide="next">
                        <span class="fa fa-chevron-right" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
                <!--<div class="room-type">
                    <div class="panel-group" id="room">
                        <div class="panel panel-default">
                            <div class="panel-heading active">
                                <h4 class="panel-title">
                                    <a data-toggle="collapse" data-parent="#room" href="#single">
                                        <div class="col-md-11 col-sm-11 col-xs-10">
                                            <i class="fa fa-user"></i> Single Room
                                        </div>
                                        <div class="col-md-1 col-sm-1 col-xs-2 text-center clear-padding">
                                            <span class="fa fa-minus"></span>
                                        </div>
                                    </a>
                                </h4>
                            </div>
                            <div id="single" class="panel-collapse collapse in">
                                <div class="panel-body">
                                    <div class="col-md-3 col-sm-3 col-xs-6 clear-padding">
                                        <img src="assets/images/home10.jpg" alt="cruise">
                                    </div>
                                    <div class="col-md-4 col-sm-4 col-xs-6">
                                        <h5>Includes 2 meals - Breakfast & Dinner</h5>
                                    </div>
                                    <div class="clearfix-xs"></div>
                                    <div class="col-md-5 col-sm-5">
                                        <div class="col-md-4 col-sm-6 col-xs-6 clear-padding">
                                            <h3>$499</h3>
                                            <h6>per room</h6>
                                        </div>
                                        <div class="col-md-8 col-sm-6 col-xs-6 clear-padding">
                                            <a href="#">BOOK NOW</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h4 class="panel-title">
                                    <a data-toggle="collapse" data-parent="#room" href="#double">
                                        <div class="col-md-11 col-sm-11 col-xs-10">
                                            <i class="fa fa-users"></i> Double Room
                                        </div>
                                        <div class="col-md-1 col-sm-1 col-xs-2 text-center clear-padding">
                                            <span class="fa fa-plus"></span>
                                        </div>
                                    </a>
                                </h4>
                            </div>
                            <div id="double" class="panel-collapse collapse">
                                <div class="panel-body">
                                    <div class="col-md-3 col-sm-3 col-xs-6 clear-padding">
                                        <img src="assets/images/home9.jpg" alt="cruise">
                                    </div>
                                    <div class="col-md-4 col-sm-4 col-xs-6">
                                        <h5>Includes 2 meals - Breakfast & Dinner</h5>
                                    </div>
                                    <div class="clearfix-xs"></div>
                                    <div class="col-md-5 col-sm-5">
                                        <div class="col-md-4 col-sm-6 col-xs-6 clear-padding">
                                            <h3>$499</h3>
                                            <h6>per room</h6>
                                        </div>
                                        <div class="col-md-8 col-sm-6 col-xs-6 clear-padding">
                                            <a href="#">BOOK NOW</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h4 class="panel-title">
                                    <a data-toggle="collapse" data-parent="#room" href="#royal">
                                        <div class="col-md-11 col-sm-11 col-xs-10">
                                            <i class="fa fa-star"></i> Royal Suite
                                        </div>
                                        <div class="col-md-1 col-sm-1 col-xs-2 text-center clear-padding">
                                            <span class="fa fa-plus"></span>
                                        </div>
                                    </a>
                                </h4>
                            </div>
                            <div id="royal" class="panel-collapse collapse">
                                <div class="panel-body">
                                    <div class="col-md-3 col-sm-3 col-xs-6 clear-padding">
                                        <img src="assets/images/home9.jpg" alt="cruise">
                                    </div>
                                    <div class="col-md-4 col-sm-4 col-xs-6">
                                        <h5>Includes 2 meals - Breakfast & Dinner</h5>
                                    </div>
                                    <div class="clearfix-xs"></div>
                                    <div class="col-md-5 col-sm-5">
                                        <div class="col-md-4 col-sm-6 col-xs-6 clear-padding">
                                            <h3>$499</h3>
                                            <h6>per room</h6>
                                        </div>
                                        <div class="col-md-8 col-sm-6 col-xs-6 clear-padding">
                                            <a href="#">BOOK NOW</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>-->
                <div class="room-complete-detail">
                    <ul class="nav nav-tabs">
                        <li class="active"><a data-toggle="tab" href="#overview"><i class="fa fa-bolt"></i> <span>Overview</span></a></li>
                        <li><a data-toggle="tab" href="#review"><i class="fa fa-comments"></i> <span>Reviews</span></a></li>
                        <li><a data-toggle="tab" href="#write-review"><i class="fa fa-edit"></i> <span>Write Review</span></a></li>
                    </ul>
                    <div class="tab-content">
                        <div id="overview" class="tab-pane active in fade">
                            <h4 class="tab-heading">OVERVIEW</h4>
                            <div class="car-overview col-md-2 col-sm-4 col-xs-6"><i class="fa fa-tint"></i>Diesel</div>
                            <div class="car-overview col-md-2 col-sm-4 col-xs-6"><i class="fa fa-dashboard"></i>Auto</div>
                            <div class="car-overview col-md-2 col-sm-4 col-xs-6"><i class="fa fa-users"></i>4 People</div>
                            <div class="car-overview col-md-2 col-sm-4 col-xs-6"><i class="fa fa-taxi"></i>4 Doors</div>
                            <div class="car-overview col-md-2 col-sm-4 col-xs-6"><i class="fa fa-suitcase"></i>100 KG</div>
                            <div class="car-overview col-md-2 col-sm-4 col-xs-6"><i class="fa fa-eye"></i>Navigation</div>
                            <div class="clearfix"></div>
                            <div class="rent-box">
                                <div class="add-ons col-md-6 col-sm-6">
                                    <ul>
                                        <li><input type="checkbox">Child Seat <span class="pull-right">$12/Day</span></li>
                                        <li><input type="checkbox">Satelite Navigation <span class="pull-right">$49/Day</span></li>
                                        <li><input type="checkbox">Music System <span class="pull-right">$99/Day</span></li>
                                        <li><input type="checkbox">Child Seat <span class="pull-right">$12/Day</span></li>
                                        <li><input type="checkbox">Satelite Navigation <span class="pull-right">$49/Day</span></li>
                                    </ul>
                                </div>
                                <div class="rent-detail col-md-6 col-sm-6">
                                    <ul>
                                        <li>Daily Rent <span class="pull-right">$99</span></li>
                                        <li>Rental Price <span class="pull-right">$495</span></li>
                                        <li class="duration-sm"><i>5 (Days 21 - Aug 25 Aug)</i></li>
                                        <li>Add Ons <span class="pull-right">$55</span></li>
                                        <li class="rental-total">Grand Total<span class="pull-right">$550</span></li>
                                    </ul>
                                </div>
                                <div class="clearfix"></div>
                                <div class="reserve-car text-center">
                                    <a href="#">RESERVE NOW</a>
                                </div>
                            </div>
                            <div class="clearfix"></div>
                            <h4 class="tab-heading">Brief Description of Car</h4>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</p>
                            <h4 class="tab-heading">Car Features</h4>
                            <ul class="check-list">
                                <li class="col-md-5 col-sm-5">GPS Navigation</li>
                                <li class="col-md-5 col-sm-5">Automatic Transmission</li>
                                <li class="col-md-5 col-sm-5">FM Radio</li>
                                <li class="col-md-5 col-sm-5">4 Doors & Panorama View</li>
                                <li class="col-md-5 col-sm-5">Hi FI Sound System</li>
                                <li class="col-md-5 col-sm-5">Mileage 12KM/Liter</li>
                                <li class="col-md-5 col-sm-5">Mileage 12KM/Liter</li>
                                <li class="col-md-5 col-sm-5">4 Doors & Panorama View</li>
                                <li class="col-md-5 col-sm-5">Hi FI Sound System</li>
                                <li class="col-md-5 col-sm-5">GPS Navigation</li>
                                <li class="col-md-5 col-sm-5">Automatic Transmission</li>
                                <li class="col-md-5 col-sm-5">FM Radio</li>
                            </ul>
                        </div>
                        <div id="review" class="tab-pane fade">
                            <h4 class="tab-heading">CAR REVIEWS</h4>
                            <div class="review-header">
                                <div class="col-md-6 col-sm6 text-center">
                                    <h2>4.0/5.0</h2>
                                    <h5>Based on 128 Reviews</h5>
                                </div>
                                <div class="col-md-6 col-sm-6">
                                    <table class="table">
                                        <tr>
                                            <td>Value for Money</td>
                                            <td>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star-o"></i>
                                                <i class="fa fa-star-o"></i>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Atmosphere in hotel</td>
                                            <td>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star-o"></i>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Quality of food</td>
                                            <td>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Staff behaviour</td>
                                            <td>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star-o"></i>
                                                <i class="fa fa-star-o"></i>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Restaurant Quality</td>
                                            <td>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star-o"></i>
                                                <i class="fa fa-star-o"></i>
                                            </td>
                                        </tr>
                                    </table>
                                </div>
                                <div class="clearfix"></div>
                                <div class="guest-review">
                                    <div class="individual-review dark-review">
                                        <h4>Best Place to Stay, Awesome <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i></h4>
                                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s</p>
                                        <div class="col-md-md-1 col-sm-1 col-xs-2">
                                            <img src="assets/images/user1.jpg" alt="cruise">
                                        </div>
                                        <div class="col-md-md-3 col-sm-3 col-xs-3">
                                            <span>Lenore, USA</span>
                                        </div>
                                    </div>
                                    <div class="clearfix"></div>
                                    <div class="individual-review">
                                        <h4>Best Place to Stay, Awesome <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star-o"></i><i class="fa fa-star-o"></i></h4>
                                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s</p>
                                        <div class="col-md-md-1 col-sm-1 col-xs-2">
                                            <img src="assets/images/user.jpg" alt="cruise">
                                        </div>
                                        <div class="col-md-md-3 col-sm-3 col-xs-3">
                                            <span>Lenore, USA</span>
                                        </div>
                                    </div>
                                    <div class="clearfix"></div>
                                    <div class="individual-review dark-review">
                                        <h4>Best Place to Stay, Awesome <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i></h4>
                                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s</p>
                                        <div class="col-md-md-1 col-sm-1 col-xs-2">
                                            <img src="assets/images/user1.jpg" alt="cruise">
                                        </div>
                                        <div class="col-md-md-3 col-sm-3 col-xs-3">
                                            <span>Lenore, USA</span>
                                        </div>
                                    </div>
                                    <div class="clearfix"></div>
                                    <div class="individual-review">
                                        <h4>Best Place to Stay, Awesome <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star-o"></i><i class="fa fa-star-o"></i></h4>
                                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s</p>
                                        <div class="col-md-md-1 col-sm-1 col-xs-2">
                                            <img src="assets/images/user.jpg" alt="cruise">
                                        </div>
                                        <div class="col-md-md-3 col-sm-3 col-xs-3">
                                            <span>Lenore, USA</span>
                                        </div>
                                    </div>
                                    <div class="clearfix"></div>
                                    <div class="individual-review dark-review">
                                        <h4>Best Place to Stay, Awesome <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i></h4>
                                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s</p>
                                        <div class="col-md-md-1 col-sm-1 col-xs-2">
                                            <img src="assets/images/user1.jpg" alt="cruise">
                                        </div>
                                        <div class="col-md-md-3 col-sm-3 col-xs-3">
                                            <span>Lenore, USA</span>
                                        </div>
                                    </div>
                                    <div class="clearfix"></div>
                                    <div class="load-more text-center">
                                        <a href="#">Load More</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div id="write-review" class="tab-pane fade">
                            <h4 class="tab-heading">Write A Review</h4>
                            <form >
                                <label>Review Title</label>
                                <input type="text" class="form-control" name="review-titile" required>
                                <label for="comment">Comment</label>
                                <textarea class="form-control" rows="5" id="comment"></textarea>
                                <label>Value for Money (Rate out of 5)</label>
                                <input type="text" class="form-control" name="value-for-money">
                                <label>Hotel Atmosphere (Rate out of 5)</label>
                                <input type="text" class="form-control" name="atmosphere">
                                <label>Staff Behaviour (Rate out of 5)</label>
                                <input type="text" class="form-control" name="staff-beh">
                                <label>Food Quality (Rate out of 5)</label>
                                <input type="text" class="form-control" name="food-quality">
                                <label>Rooms (Rate out of 5)</label>
                                <input type="text" class="form-control" name="room">
                                <div class="text-center">
                                    <button type="submit" class="btn btn-default submit-review">Submit</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 hotel-detail-sidebar">
                <div class="col-md-12 sidebar-wrapper clear-padding">
                    <div class="contact sidebar-item">
                        <h4><i class="fa fa-phone"></i> Contact Agent</h4>
                        <div class="sidebar-item-body">
                            <h5><i class="fa fa-phone"></i> +91 1234567890</h5>
                            <h5><i class="fa fa-envelope-o"></i> <a href="mailto:your@domainname.com">Send Email</a></h5>
                            <h5><i class="fa fa-map-marker"></i> Mall Road, Shimla, Himachal Pradesh, 176077</h5>
                        </div>
                    </div>
                    <div class="review sidebar-item">
                        <h4><i class="fa fa-edit"></i> Car Reviews</h4>
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
                    <div class="similar-hotel sidebar-item">
                        <h4><i class="fa fa-taxi"></i> Similar Cars</h4>
                        <div class="sidebar-item-body">
                            <div class="similar-hotel-box">
                                <a href="#">
                                    <div class="col-md-5 col-sm-5 col-xs-5 clear-padding">
                                        <img src="assets/images/car10.jpg" alt="Cruise">
                                    </div>
                                    <div class="col-md-7 col-sm-7 col-xs-7">
                                        <h5>HONDA AMAZE</h5>
                                        <h5><i class="fa fa-certificate"></i> HONDA</h5>
                                        <span>$100/Day</span>
                                    </div>
                                </a>
                            </div>
                            <div class="similar-hotel-box">
                                <a href="#">
                                    <div class="col-md-5 col-sm-5 col-xs-5 clear-padding">
                                        <img src="assets/images/car11.jpg" alt="Cruise">
                                    </div>
                                    <div class="col-md-7 col-sm-7 col-xs-7">
                                        <h5>C-CLASS</h5>
                                        <h5><i class="fa fa-certificate"></i> MERCEDES</h5>
                                        <span>$50/Day</span>
                                    </div>
                                </a>
                            </div>
                            <div class="similar-hotel-box">
                                <a href="#">
                                    <div class="col-md-5 col-sm-5 col-xs-5 clear-padding">
                                        <img src="assets/images/car12.jpg" alt="Cruise">
                                    </div>
                                    <div class="col-md-7 col-sm-7 col-xs-7">
                                        <h5>AUDI R8</h5>
                                        <h5><i class="fa fa-certificate"></i> AUDI</h5>
                                        <span>$90/Day</span>
                                    </div>
                                </a>
                            </div>
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

<!-- Mirrored from limpidthemesdemo.com/Themeforest/html/cruise-demo/light/car-detailed.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 06 Mar 2019 10:53:42 GMT -->
</html>