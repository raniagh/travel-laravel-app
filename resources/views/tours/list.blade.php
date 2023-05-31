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
    <!-- START: MODIFY SEARCH -->
    <div class="row modify-search modify-holiday">
        <div class="container">
            <form >
                <div class="col-md-3 col-sm-6">
                    <div class="form-gp">
                        <label>DEPART</label>
                        <div class="input-group margin-bottom-sm">
                            <input type="text" name="departure_city" class="form-control" required placeholder="E.g. London">
                            <span class="input-group-addon"><i class="fa fa-map-marker fa-fw"></i></span>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="form-gp">
                        <label>DESTINATION</label>
                        <div class="input-group margin-bottom-sm">
                            <input type="text" name="destination_city" class="form-control" required placeholder="E.g. Paris">
                            <span class="input-group-addon"><i class="fa fa-map-marker fa-fw"></i></span>
                        </div>
                    </div>
                </div>
                <div class="col-md-2 col-sm-6 col-xs-6">
                    <div class="form-gp">
                        <label>Mois Du Travail</label>
                        <select class="selectpicker">
                            <option>Juin</option>
                            <option>Juillet</option>
                            <option>Août</option>
                            <option>Septembre</option>
                            <option>Octobre</option>
                            <option>Autre</option>
                        </select>
                    </div>
                </div>
                <div class="col-md-2 col-sm-6 col-xs-6">
                    <div class="form-gp">
                        <label>Budget</label>
                        <select class="selectpicker">
                            <option>All</option>
                            <option>Upto $500</option>
                            <option>Above $1000+</option>
                            <option>Upto $5000</option>
                        </select>
                    </div>
                </div>
                <div class="col-md-2 col-sm-6 col-xs-9">
                    <div class="form-gp">
                        <button type="submit" class="modify-search-button btn transition-effect text-center">MODIFY SEARCH</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <!-- END: MODIFY SEARCH -->

    <!-- START: LISTING AREA-->
    <div class="row">
        <div class="container">
            <!-- START: FILTER AREA -->
            <div class="col-md-3 clear-padding">
                <div class="filter-head text-center">
                    <h4>25 Result Found Matching Your Search.</h4>
                </div>
                <div class="filter-area">
                    <div class="price-filter filter">
                        <h5><i class="fa fa-usd"></i> Price</h5>
                        <p>
                            <label></label>
                            <input type="text" id="amount" readonly>
                        </p>
                        <div id="price-range"></div>
                    </div>
                    <div class="star-filter filter">
                        <h5><i class="fa fa-calendar"></i> Période</h5>
                        <ul>
                            <li><input type="checkbox"> Jusqu'à 3 Jours</li>
                            <li><input type="checkbox"> 5 à 7 Jours</li>
                            <li><input type="checkbox"> 9 à 11 Jours</li>
                            <li><input type="checkbox"> 12 à 14 Jours</li>
                            <li><input type="checkbox"> plus de 14 Jours</li>
                            <li><input type="checkbox"> Autres</li>
                        </ul>
                    </div>
                    <div class="location-filter filter">
                        <h5><i class="fa fa-globe"></i> Pays</h5>
                        <ul>
                            <li><input type="checkbox"> EUROPE</li>
                            <li><input type="checkbox"> AFRIQUE</li>
                            <li><input type="checkbox"> AUTRES</li>
                        </ul>
                    </div>
                    <div class="filter">
                        <h5><i class="fa fa-pagelines"></i> Thème de vacances</h5>
                        <ul>
                            <li><input type="checkbox"> <i class="fa fa-heart"></i> Voyage de noces</li>
                            <li><input type="checkbox"> <i class="fa fa-users"></i> Tour en Groupe</li>
                            <li><input type="checkbox"> <i class="fa fa-users"></i> Tour en famille</li>
                            <li><input type="checkbox"> <i class="fa fa-sun-o"></i> Tour d'été</li>
                            <li><input type="checkbox"> Autres</li>
                        </ul>
                    </div>
                    <div class="facilities-filter filter">
                        <h5><i class="fa fa-list"></i> Inclusion</h5>
                        <ul>
                            <li><input type="checkbox"> <i class="fa fa-plane"></i> Vol</li>
                            <li><input type="checkbox"> <i class="fa fa-taxi"></i> Transport</li>
                            <li><input type="checkbox"> <i class="fa fa-cutlery"></i> Repas</li>
                            <li><input type="checkbox"> <i class="fa fa-glass"></i> Boissons</li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- END: FILTER AREA -->

            <!-- START: INDIVIDUAL LISTING AREA -->
            <div class="col-md-9 holidays-listing">

                <!-- START: SORT AREA -->
                <div class="sort-area col-sm-10">
                    <div class="col-md-3 col-sm-3 col-xs-6 sort">
                        <select class="selectpicker">
                            <option>Price</option>
                            <option> Low to High</option>
                            <option> High to Low</option>
                        </select>
                    </div>
                    <div class="col-md-3 col-sm-3 col-xs-6 sort">
                        <select class="selectpicker">
                            <option>Star Rating</option>
                            <option> Low to High</option>
                            <option> High to Low</option>
                        </select>
                    </div>
                    <div class="col-md-3 col-sm-3 col-xs-6 sort">
                        <select class="selectpicker">
                            <option>User Rating</option>
                            <option> Low to High</option>
                            <option> High to Low</option>
                        </select>
                    </div>
                    <div class="col-md-3 col-sm-3 col-xs-6 sort">
                        <select class="selectpicker">
                            <option>Name</option>
                            <option> Ascending</option>
                            <option> Descending</option>
                        </select>
                    </div>
                </div>
                <!-- END: SORT AREA -->
                <div class="clearfix visible-xs-block"></div>
 
                <div class="clearfix"></div>
                <!-- END: SORT AREA -->
                <div class="clearfix"></div>
                <!-- START: HOLIDAYS GRID VIEW -->
                @if(Session::has('message'))
            <div class="alert alert-success text-center" role="alert" >
                {{Session::get('message')}}
            </div>
        @endif
                @foreach($tours as $tour)
                <div class="col-md-4 col-sm-6">
                    <div class="holiday-grid-view">
                        <div class="holiday-header-wrapper">
                            <div class="holiday-header">
                                <div class="holiday-img">
                                    <img src="assets/images/tour1.jpg" alt="cruise">
                                </div>
                                <div class="holiday-price">
                                    <h4>{{$tour->budget}}</h4>
                                    <h5>{{$tour->duree}}</h5>
                                </div>
                                <div class="holiday-title">
                                    <h3>{{$tour->destination}}</h3>
                                    <h5>Asia &#187; Nepal</h5>
                                </div>
                            </div>
                        </div>
                        <div class="holiday-details">
                            <div class="col-md-4 col-sm-4 col-xs-4">
                                <h5>Theme</h5>
                            </div>
                            <div class="col-md-8 col-sm-8 col-xs-8">
                                <p><i class="fa fa-heart" title="Honeymoon Tour"></i><i class="fa fa-users" title="Group Tour"></i></p>
                            </div>
                            <div class="clearfix"></div>
                            <div class="col-md-4 col-sm-4 col-xs-4">
                                <h5>Inclusion</h5>
                            </div>
                            <div class="col-md-8 col-sm-8 col-xs-8">
                                <p>
                                    <i class="fa fa-plane" title="Flight"></i>
                                    <i class="fa fa-bed" title="Hotel"></i>
                                    <i class="fa fa-cutlery" title="Meal"></i>
                                    <i class="fa fa-taxi" title="Transport"></i>
                                    <i class="fa fa-eye" title="Sightseeing"></i></p>
                            </div>
                            <div class="col-md-4 col-sm-4 col-xs-4">
                                <h5>Highlight</h5>
                            </div>
                            <div class="col-md-8 col-sm-8 col-xs-8">
                                <p class="sm-text">Lorem Ipsum is simply dummy text of the printing industry.</p>
                            </div>
                        </div>
                        <div class="holiday-footer text-center">
                            <div class="col-md-8 col-sm-8 col-xs-8 view-detail">
                                <a href="{{ route('tours.show', $tour->idt) }}">VIEW DETAILS</a>
                            </div>
                            <div class="col-md-4 col-sm-4 col-xs-4 social">
                                <i class="fa fa-heart-o"></i>
                                <i class="fa fa-share-alt"></i>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach

                <!-- END: HOTEL GRID VIEW -->

                <!-- START: PAGINATION -->
                <div class="bottom-pagination">
                    <nav class="pull-right">
                        <ul class="pagination pagination-lg">
                            <li><a href="#" aria-label="Previous"><span aria-hidden="true">&laquo;</span></a></li>
                            <li class="active"><a href="#">1 <span class="sr-only">(current)</span></a></li>
                            <li><a href="#">2 <span class="sr-only">(current)</span></a></li>
                            <li><a href="#">3 <span class="sr-only">(current)</span></a></li>
                            <li><a href="#">4 <span class="sr-only">(current)</span></a></li>
                            <li><a href="#">5 <span class="sr-only">(current)</span></a></li>
                            <li><a href="#">6 <span class="sr-only">(current)</span></a></li>
                            <li><a href="#" aria-label="Previous"><span aria-hidden="true">&#187;</span></a></li>
                        </ul>
                    </nav>
                </div>
                <!-- END: PAGINATION -->
            </div>
            <!-- END: INDIVIDUAL LISTING AREA -->
        </div>
    </div>
    <!-- END: LISTING AREA -->
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

    /* Price Range Slider */

    $(function() {
        "use strict";
        $( "#price-range" ).slider({
            range: true,
            min: 0,
            max: 100,
            values: [ 3, 50 ],
            slide: function( event, ui ) {
                $( "#amount" ).val( "$ " + ui.values[ 0 ] + " - $ " + ui.values[ 1 ] );
            }
        });
        $( "#amount" ).val( "$ " + $( "#price-range" ).slider( "values", 0 ) +
            " - $ " + $( "#price-range" ).slider( "values", 1 ) );
    });
</script>


<!-- Mirrored from limpidthemesdemo.com/Themeforest/html/cruise-demo/light/holidays-grid.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 06 Mar 2019 10:50:58 GMT -->
</html>