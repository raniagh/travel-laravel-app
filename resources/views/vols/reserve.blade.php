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
                                    <a  href="#" ><i class="fa fa-home"></i>ACCUEIL</a>

                                </li>
                                <li class="dropdown mega">
                                    <a class="dropdown-toggle" href="#" data-toggle="dropdown"><i class="fa fa-bed"></i> HÖTELS </a>

                                    <div class="clearfix"></div>
                                </li>
                                <li class="dropdown mega">
                                    <a class="dropdown-toggle" href="#" data-toggle="dropdown"><i class="fa fa-plane"></i> VOLS</a>
                                    <div class="clearfix"></div>
                                </li>
                                <li class="dropdown mega">
                                    <a class="dropdown-toggle" href="#" data-toggle="dropdown"><i class="fa fa-suitcase"></i> TOURS </a>
                                    <div class="clearfix"></div>
                                </li>
                                <li class="dropdown mega">
                                    <a class="dropdown-toggle" href="#" data-toggle="dropdown"><i class="fa fa-taxi"></i> VOITURES </a>
                                    <div class="clearfix"></div>
                                </li>
                                <li class="dropdown mega">
                                    <a class="dropdown-toggle" href="#" data-toggle="dropdown"><i class="fa fa-ship"></i> CROISIERES </a>
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
        <div class="container clear-padding text-center flight-title">
            <h3>Your Selection</h3>
            <h4><i class="fa fa-plane"></i>NEW DELHI<i class="fa fa-long-arrow-right"></i>NEW YORK</h4>
            <span><i class="fa fa-calendar"></i> 05 Aug <i class="fa fa-male"></i>Traveller(s) - 2 Adult</span>
        </div>
    </div>
    <!-- END: PAGE TITLE -->

    <!-- START: BOOKING TAB -->
    <div class="row booking-tab">
        <div class="container clear-padding">
            <ul class="nav nav-tabs">
                <li class="active col-md-4 col-sm-4 col-xs-4"><a data-toggle="tab" href="#review-booking" class="text-center"><i class="fa fa-edit"></i> <span>Review Booking</span></a></li>
                <li class="col-md-4 col-sm-4 col-xs-4"><a data-toggle="tab" href="#passenger-info" class="text-center"><i class="fa fa-male"></i> <span>Passenger Info</span></a></li>
                <li class="col-md-4 col-sm-4 col-xs-4"><a data-toggle="tab" href="#billing-info" class="text-center"><i class="fa fa-check-square"></i> <span>Billing Info</span></a></li>
            </ul>
        </div>
    </div>
    <div class="row booking-detail">
        <div class="container clear-padding">
            <div class="tab-content">
                <div id="review-booking" class="tab-pane fade in active">
                    <div class="col-md-8 col-sm-8">
                        <div class="flight-list-v2">
                            <div class="flight-list-main">
                                <div class="col-md-2 col-sm-2 text-center airline">
                                    <img src="assets/images/airline/vistara-2x.png" alt="cruise">
                                    <h6>Vistara</h6>
                                </div>
                                <div class="col-md-3 col-sm-3 departure">
                                    <h3><i class="fa fa-plane"></i> LHR 19:00</h3>
                                    <h5 class="bold">SAT, 21 SEP</h5>
                                    <h5>London, UK</h5>
                                </div>
                                <div class="col-md-4 col-sm-4 stop-duration">
                                    <div class="flight-direction">
                                    </div>
                                    <div class="stop">
                                    </div>
                                    <div class="stop-box">
                                        <span>0 Stop</span>
                                    </div>
                                    <div class="duration text-center">
                                        <span><i class="fa fa-clock-o"></i> 02h 00m</span>
                                    </div>
                                </div>
                                <div class="col-md-3 col-sm-3 destination">
                                    <h3><i class="fa fa-plane fa-rotate-90"></i> DEL 21:00</h3>
                                    <h5 class="bold">SAT, 21 SEP</h5>
                                    <h5>New Delhi, IN</h5>
                                </div>
                            </div>
                            <div class="clearfix"></div>
                            <div class="flight-list-footer">
                                <div class="col-md-6 col-sm-6 col-xs-6 sm-invisible">
                                    <span><i class="fa fa-plane"></i> Economy</span>
                                    <span class="refund"><i class="fa fa-undo"></i> Refundable</span>
                                    <span><i class="fa fa-suitcase"></i> 10 KG</span>
                                </div>
                                <div class="col-md-6 col-sm-6 col-xs-12 clear-padding">
                                    <div class="pull-right">
                                        <a href="#">Edit Flight</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="login-box">
                            <h3>Sign In</h3>
                            <div class="booking-form">
                                <div class="col-md-6 col-sm-6">
                                    <form >
                                        <label>Email</label>
                                        <input class="form-control" type="email" name="emailid" placeholder="Enter Your Email" required>
                                        <label>Password</label>
                                        <input class="form-control" type="password" name="password" placeholder="Enter Password" required>
                                        <a href="#">Forget Password?</a>
                                        <label>Phone Number (Optional)</label>
                                        <input class="form-control" type="text" name="phone">
                                        <label><input type="checkbox" name="remember"> Remember me</label>
                                        <button type="submit">Login</button>
                                    </form>
                                </div>
                                <div class="col-md-6 col-sm-6 text-center">
                                    <div class="social-media-login">
                                        <a href="#"><i class="fa fa-facebook"></i>Log in With Facebook</a>
                                        <span>Or</span>
                                        <a href="#"><i class="fa fa-plus"></i>Create Account</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-4 booking-sidebar">
                        <div class="sidebar-item">
                            <h4><i class="fa fa-bookmark"></i>Fare Details</h4>
                            <div class="sidebar-body">
                                <table class="table">
                                    <tr>
                                        <td>Adult 1</td>
                                        <td>$199</td>
                                    </tr>
                                    <tr>
                                        <td>Base Fare</td>
                                        <td>$100</td>
                                    </tr>
                                    <tr>
                                        <td>Service Fee</td>
                                        <td>$50</td>
                                    </tr>
                                    <tr>
                                        <td>Airport Taxes</td>
                                        <td>$20</td>
                                    </tr>
                                    <tr>
                                        <td>You Pay</td>
                                        <td class="total">$500</td>
                                    </tr>
                                </table>
                            </div>
                        </div>
                        <div class="sidebar-item contact-box">
                            <h4><i class="fa fa-phone"></i>Need Help?</h4>
                            <div class="sidebar-body text-center">
                                <p>Need Help? Call us or drop a message. Our agents will be in touch shortly.</p>
                                <h2>+91 1234567890</h2>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="passenger-info" class="tab-pane fade">
                    <div class="col-md-8 col-sm-8">
                        <div class="passenger-detail">
                            <h3>Passenger Details</h3>
                            <div class="passenger-detail-body">
                                <form >
                                    <div class="col-md-6 ol-sm-6">
                                        <label>First Name</label>
                                        <input type="text" name="firstname" required class="form-control">
                                    </div>
                                    <div class="col-md-6 ol-sm-6">
                                        <label>Last Name</label>
                                        <input type="text" name="lastname" required class="form-control">
                                    </div>
                                    <div class="col-md-6 ol-sm-6">
                                        <label>Email</label>
                                        <input type="email" name="email" required class="form-control">
                                    </div>
                                    <div class="col-md-6 ol-sm-6">
                                        <label>Verify Email</label>
                                        <input type="email" name="verify_email" class="form-control">
                                    </div>
                                    <div class="col-md-6 ol-sm-6">
                                        <label>Country Code</label>
                                        <select name="countrycode" class="form-control">
                                            <option>+1 United States</option>
                                            <option>+1 Canada</option>
                                            <option>+44 United Kingdom</option>
                                            <option>+91 India</option>
                                        </select>
                                    </div>
                                    <div class="col-md-6 ol-sm-6">
                                        <label>Phone Number</label>
                                        <input type="text" name="phonenumber" class="form-control" required>
                                    </div>
                                    <div class="col-md-12">
                                        <label><input type="checkbox" name="alert"> Send me newsletters and updates</label>
                                    </div>
                                    <div class="text-center">
                                        <button type="submit">CONTINUE <i class="fa fa-chevron-right"></i></button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-4 booking-sidebar">
                        <div class="sidebar-item">
                            <h4><i class="fa fa-phone"></i>Need Help?</h4>
                            <div class="sidebar-body text-center">
                                <p>Need Help? Call us or drop a message. Our agents will be in touch shortly.</p>
                                <h2>+91 1234567890</h2>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="billing-info" class="tab-pane fade">
                    <div class="col-md-8 col-sm-8">
                        <div class="passenger-detail">
                            <h3>Total Payment to be made $499</h3>
                            <div class="passenger-detail-body">
                                <div class="saved-card">
                                    <form >
                                        <label data-toggle="collapse" data-target="#saved-card-1"><input type="radio" name="card"> <span>Bank of America 1234 XXXX XXXX 1290</span></label>
                                        <div id="saved-card-1" class="collapse">
                                            <div class="col-md-4 col-sm-4">
                                                <label>CVV</label>
                                                <input type="password" required class="form-control">
                                            </div>
                                        </div>
                                        <div class="clearfix"></div>
                                        <label data-toggle="collapse" data-target="#saved-card-2"><input type="radio" name="card"> <span>State Bank of India 1234 XXXX XXXX 1290</span></label>
                                        <div id="saved-card-2" class="collapse">
                                            <div class="col-md-4 col-sm-4">
                                                <label>CVV</label>
                                                <input type="password" required class="form-control">
                                            </div>
                                        </div>
                                        <div class="clearfix"></div>
                                        <div>
                                            <button type="submit">CONFIRM BOOKING <i class="fa fa-chevron-right"></i></button>
                                        </div>
                                    </form>
                                </div>
                                <div class="payment-seperator clearfix"></div>
                                <div class="add-new-card">
                                    <h4>Add New Card</h4>
                                    <form >
                                        <div class="col-md-6 ol-sm-6">
                                            <label>Card Type</label>
                                            <select name="carttype" class="form-control">
                                                <option>Credit Card</option>
                                                <option>Debit Card</option>
                                                <option>Gift Card</option>
                                            </select>
                                        </div>
                                        <div class="col-md-6 ol-sm-6">
                                            <label>Card Number</label>
                                            <input type="text" name="cardnumber" required class="form-control">
                                        </div>
                                        <div class="col-md-6 ol-sm-6">
                                            <label>Card Expiry</label>
                                            <select name="cardexpiry" class="form-control">
                                                <option>Select</option>
                                                <option>Dec 2015</option>
                                                <option>Jan 2016</option>
                                                <option>Feb 2016</option>
                                                <option>Mar 2016</option>
                                                <option>Apr 2016</option>
                                            </select>
                                        </div>
                                        <div class="col-md-6 ol-sm-6">
                                            <label>CVV Number</label>
                                            <input type="password" name="cvvnumber" class="form-control">
                                        </div>
                                        <div class="col-md-12">
                                            <label><input type="checkbox" name="alert"> Save this card for future</label>
                                        </div>
                                        <div>
                                            <button type="submit">CONFIRM BOOKING <i class="fa fa-chevron-right"></i></button>
                                        </div>
                                    </form>
                                </div>
                                <div class="payment-seperator clearfix"></div>
                                <div class="paypal-pay">
                                    <h4>Pay Using Paypal</h4>
                                    <div class="col-md-2 col-sm-2 col-xs-4">
                                        <i class="fa fa-paypal"></i>
                                    </div>
                                    <div class="col-md-10 col-sm-10 col-xs-8">
                                        <a href="#">CONFIRM BOOKING</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-4 booking-sidebar">
                        <div class="sidebar-item">
                            <h4><i class="fa fa-phone"></i>Need Help?</h4>
                            <div class="sidebar-body text-center">
                                <p>Need Help? Call us or drop a message. Our agents will be in touch shortly.</p>
                                <h2>+91 1234567890</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- END: BOOKING TAB -->
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


<!-- Mirrored from limpidthemesdemo.com/Themeforest/html/cruise-demo/light/flight-booking.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 06 Mar 2019 10:50:58 GMT -->
</html>