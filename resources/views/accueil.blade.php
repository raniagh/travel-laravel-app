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
    <!-- BEGIN: SEARCH SECTION -->
    <div class="row full-width-search">
        <div class="container clear-padding">
            <div class="col-md-8 search-section tran-search-box">
                <div role="tabpanel">
                    <!-- BEGIN: CATEGORY TAB -->
                    <ul class="nav nav-tabs search-top" role="tablist" id="searchTab">
                        <li role="presentation" class="active text-center">
                            <a href="#flight" aria-controls="flight" role="tab" data-toggle="tab">
                                <i class="fa fa-plane"></i>
                                <span>VOLS</SPAN>
                            </a>
                        </li>
                        <li role="presentation" class="text-center">
                            <a href="#hotel" aria-controls="hotel" role="tab" data-toggle="tab">
                                <i class="fa fa-bed"></i>
                                <span>HôTELS</span>
                            </a>
                        </li>
                        <li role="presentation" class="text-center">
                            <a href="#holiday" aria-controls="holiday" role="tab" data-toggle="tab">
                                <i class="fa fa-suitcase"></i>
                                <span>Tours</span>
                            </a>
                        </li>
                        <li role="presentation" class="text-center">
                            <a href="#taxi" aria-controls="taxi" role="tab" data-toggle="tab">
                                <i class="fa fa-cab"></i>
                                <span>VOITURES</span>
                            </a>
                        </li>
                        <li role="presentation" class="text-center">
                            <a href="#cruise" aria-controls="cruise" role="tab" data-toggle="tab">
                                <i class="fa fa-ship"></i>
                                <span>CROISIERES</span>
                            </a>
                        </li>
                    </ul>
                    <!-- END: CATEGORY TAB -->

                    <!-- BEGIN: TAB PANELS -->
                    <div class="tab-content">
                        <!-- BEGIN: FLIGHT SEARCH -->
                        <div role="tabpanel" class="tab-pane active" id="flight">
                            <form >
                                <div class="col-md-12 product-search-title">RESERVER BILLETS</div>
                                <div class="col-md-12 search-col-padding">
                                    <label class="radio-inline">
                                        <input type="radio" name="inlineRadioOptions" id="inlineRadio1" value="One Way"> Aller/Retour
                                    </label>
                                    <label class="radio-inline">
                                        <input type="radio" name="inlineRadioOptions" id="inlineRadio2" value="Round Trip"> Aller/Simple
                                    </label>
                                </div>
                                <div class="clearfix"></div>
                                <div class="col-md-6 col-sm-6 search-col-padding">
                                    <label>Départ de</label>
                                    <div class="input-group">
                                        <input type="text" name="departure_city" class="form-control" required placeholder="E.g. Tunisie">
                                        <span class="input-group-addon"><i class="fa fa-map-marker fa-fw"></i></span>
                                    </div>
                                </div>
                                <div class="col-md-6 col-sm-6 search-col-padding">
                                    <label>Arrivé à</label>
                                    <div class="input-group">
                                        <input type="text" name="destination_city" class="form-control" required placeholder="E.g. Espagne">
                                        <span class="input-group-addon"><i class="fa fa-map-marker fa-fw"></i></span>
                                    </div>
                                </div>
                                <div class="clearfix"></div>
                                <div class="col-md-6 col-sm-6 search-col-padding">
                                    <label>Aller</label>
                                    <div class="input-group">
                                        <input type="text" id="departure_date" name="departure_date" class="form-control" placeholder="DD/MM/YYYY">
                                        <span class="input-group-addon"><i class="fa fa-calendar fa-fw"></i></span>
                                    </div>
                                </div>
                                <div class="col-md-6 col-sm-6 search-col-padding">
                                    <label>Retour</label>
                                    <div class="input-group">
                                        <input type="text" id="return_date" class="form-control" name="return_date" placeholder="DD/MM/YYYY">
                                        <span class="input-group-addon"><i class="fa fa-calendar fa-fw"></i></span>
                                    </div>
                                </div>
                                <div class="clearfix"></div>
                                <div class="col-md-4 col-sm-4 search-col-padding">
                                    <label>Adulte(s)</label><br>
                                    <input id="adult_count" name="adult_count" value="1" class="form-control quantity-padding">
                                </div>
                                <div class="col-md-4 col-sm-4 search-col-padding">
                                    <label>Enfant(s)</label><br>
                                    <input type="text" id="child_count" name="child_count" value="1" class="form-control quantity-padding">
                                </div>
                                <div class="col-md-4 col-sm-4 search-col-padding">
                                    <label>Classe</label><br>
                                    <select class="selectpicker">
                                        <option>Economique</option>
                                        <option>Affaire</option>
                                    </select>
                                </div>
                                <div class="clearfix"></div>
                                <div class="col-md-12 search-col-padding">
                                    <button type="submit" class="search-button btn transition-effect">Rechercher vols</button>
                                </div>
                                <div class="clearfix"></div>
                            </form>
                        </div>
                        <!-- END: FLIGHT SEARCH -->

                        <!-- START: HOTEL SEARCH -->
                        <div role="tabpanel" class="tab-pane" id="hotel">
                            <form >
                                <div class="col-md-12 product-search-title">Réserver chambre(s)</div>
                                <div class="col-md-12 search-col-padding">
                                    <label>Destination</label>
                                    <div class="input-group">
                                        <input type="text" name="destination-city" class="form-control" required placeholder="E.g. Sousse">
                                        <span class="input-group-addon"><i class="fa fa-map-marker fa-fw"></i></span>
                                    </div>
                                </div>
                                <div class="clearfix"></div>
                                <div class="col-md-6 col-sm-6 search-col-padding">
                                    <label>DU</label>
                                    <div class="input-group">
                                        <input type="text" name="check-in" id="check_in" class="form-control" placeholder="DD/MM/YYYY">
                                        <span class="input-group-addon"><i class="fa fa-calendar fa-fw"></i></span>
                                    </div>
                                </div>
                                <div class="col-md-6 col-sm-6 search-col-padding">
                                    <label>AU</label>
                                    <div class="input-group">
                                        <input type="text" name="check-out" id="check_out" class="form-control" placeholder="DD/MM/YYYY">
                                        <span class="input-group-addon"><i class="fa fa-calendar fa-fw"></i></span>
                                    </div>
                                </div>
                                <div class="clearfix"></div>
                                <div class="col-md-3 col-sm-3 search-col-padding">
                                    <label>Adulte(s)</label><br>
                                    <input id="hotel_adult_count" name="adult_count" value="1" class="form-control quantity-padding">
                                </div>
                                <div class="col-md-3 col-sm-3 search-col-padding">
                                    <label>Enfant(s)</label><br>
                                    <input type="text" id="hotel_child_count" name="child_count" value="1" class="form-control quantity-padding">
                                </div>
                                <div class="col-md-3 col-sm-3 search-col-padding">
                                    <label>Chambres</label><br>
                                    <select class="selectpicker" name="rooms">
                                        <option>1</option>
                                        <option>2</option>
                                        <option>3</option>
                                        <option>4</option>
                                        <option>5</option>
                                        <option>6</option>
                                    </select>
                                </div>

                                <div class="clearfix"></div>
                                <div class="col-md-12 search-col-padding">
                                    <button type="submit" class="search-button btn transition-effect">Rechercher hôtels</button>
                                </div>
                                <div class="clearfix"></div>
                            </form>
                        </div>
                        <!-- END: HOTEL SEARCH -->

                        <!-- START: BEGIN HOLIDAY -->
                        <div role="tabpanel" class="tab-pane" id="holiday">
                            <form action="{{ route('recherchet')}}" method="get">
                                <div class="col-md-12 product-search-title">Réserver Tour</div>
                                <div class="col-md-6 col-sm-6 search-col-padding">
                                    <label>Départ</label>
                                    <div class="input-group">
                                        <input type="text" id="keyword1" name="keyword1" class="form-control" required placeholder="E.g. Espagne">
                                        <span class="input-group-addon"><i class="fa fa-map-marker fa-fw"></i></span>
                                    </div>
                                </div>
                                <div class="col-md-6 col-sm-6 search-col-padding">
                                    <label>Destination</label>
                                    <div class="input-group">
                                        <input type="text" id="keyword2" name="keyword2" class="form-control" required placeholder="E.g. Espagne">
                                        <span class="input-group-addon"><i class="fa fa-map-marker fa-fw"></i></span>
                                    </div>
                                </div>
                                <div class="clearfix"></div>
                                <div class="col-md-6 col-sm-6 search-col-padding">
                                    <label>DE</label>
                                    <div class="input-group">
                                        <input type="text" id="keyword3" name="keyword3" class="form-control" placeholder="DD/MM/YYYY">
                                        <span class="input-group-addon"><i class="fa fa-calendar fa-fw"></i></span>
                                    </div>
                                </div>
                                <div class="col-md-6 col-sm-6 search-col-padding">
                                    <label>Durée</label>
                                    <div class="input-group">
                                        <input type="text" id="keyword4" name="keyword4" class="form-control" required placeholder="E.g. 5jours">
                                        <span class="input-group-addon"><i class="fa fa-times-circle fa-fw"></i></span>
                                    </div>
                                </div>
                                <div class="clearfix"></div>
                                <div class="col-md-6 col-sm-6 search-col-padding">
                                    <label>Type(Optionel)</label><br>
                                    <select class="selectpicker"  id="keyword5" name="keyword5">
                                        <option value="groupe">Groupe</option>
                                        <option value="famille">Famille</option>
                                        <option value="individuel">Individuel</option>
                                        <option value="voyage de noces">Voyage de noces</option>
                                    </select>
                                </div>
                                <div class="col-md-6 col-sm-6 search-col-padding">
                                    <label>Budget</label>
                                    <div class="input-group">
                                        <input type="text" id="keyword6" name="keyword6" class="form-control" required placeholder="E.g. 500">
                                        <span class="input-group-addon"><i class="fa fa-money fa-fw"></i></span>
                                    </div>
                                </div>
                                <div class="clearfix"></div>
                                <div class="col-md-12 search-col-padding">
                                    <button type="submit" class="search-button btn transition-effect">Rechercher tour</button>
                                </div>
                                <div class="clearfix"></div>
                            </form>
                        </div>
                        <!-- END: HOLIDAYS -->

                        <!-- START: CAR SEARCH -->
                        <div role="tabpanel" class="tab-pane" id="taxi">
                            <form >
                                <div class="col-md-12 product-search-title">Chercher voiture</div>

                                <div class="clearfix"></div>
                                <div class="col-md-6 col-sm-6 search-col-padding">
                                    <label>DU</label>
                                    <div class="input-group">
                                        <input type="text" id="car_start" class="form-control" placeholder="MM/DD/YYYY">
                                        <span class="input-group-addon"><i class="fa fa-calendar fa-fw"></i></span>
                                    </div>
                                </div>
                                <div class="col-md-6 col-sm-6 search-col-padding">
                                    <label>AU</label>
                                    <div class="input-group">
                                        <input type="text" id="car_end" class="form-control" placeholder="MM/DD/YYYY">
                                        <span class="input-group-addon"><i class="fa fa-calendar fa-fw"></i></span>
                                    </div>
                                </div>
                                <div class="clearfix"></div>
                                <div class="col-md-6 col-sm-6 search-col-padding">
                                    <label>Marque(Optionnel)</label><br>
                                    <select class="selectpicker" name="brand">
                                        <option>BMW</option>
                                        <option>Audi</option>
                                        <option>Mercedes</option>
                                        <option>Suzuki</option>
                                        <option>Honda</option>
                                        <option>Hyundai</option>
                                        <option>Toyota</option>
                                    </select>
                                </div>

                                <div class="clearfix"></div>
                                <div class="col-md-12 search-col-padding">
                                    <button type="submit" class="search-button btn transition-effect">Rechercher</button>
                                </div>
                                <div class="clearfix"></div>
                            </form>
                        </div>
                        <!-- END: CAR SEARCH -->

                        <!-- START: CRUISE SEARCH -->
                        <div role="tabpanel" class="tab-pane" id="cruise">
                            <form >
                                <div class="col-md-12 product-search-title">Réserver Croisière</div>
                                <div class="col-md-6 col-sm-6 search-col-padding">
                                    <label>Départ</label>
                                    <div class="input-group">
                                        <input type="text" name="pack-destination-city" class="form-control" required placeholder="E.g. Espagne">
                                        <span class="input-group-addon"><i class="fa fa-map-marker fa-fw"></i></span>
                                    </div>
                                </div>
                                <div class="col-md-6 col-sm-6 search-col-padding">
                                    <label>Destination</label>
                                    <div class="input-group">
                                        <input type="text" name="pack-destination-city" class="form-control" required placeholder="E.g. Espagne">
                                        <span class="input-group-addon"><i class="fa fa-map-marker fa-fw"></i></span>
                                    </div>
                                </div>
                                <div class="clearfix"></div>
                                <div class="col-md-6 col-sm-6 search-col-padding">
                                    <label>DE</label>
                                    <div class="input-group">
                                        <input type="text" id="package_start" class="form-control" placeholder="DD/MM/YYYY">
                                        <span class="input-group-addon"><i class="fa fa-calendar fa-fw"></i></span>
                                    </div>
                                </div>
                                <div class="col-md-6 col-sm-6 search-col-padding">
                                    <label>Durée(Optionnel)</label><br>
                                    <select class="selectpicker" name="holiday_duration">
                                        <option>3 Days</option>
                                        <option>5 Days</option>
                                        <option>1 Week</option>
                                        <option>2 Weeks</option>
                                        <option>1 Month</option>
                                        <option>1+ Month</option>
                                    </select>
                                </div>
                                <div class="clearfix"></div>
                                <div class="col-md-6 col-sm-6 search-col-padding">
                                    <label>Type(Optionel)</label><br>
                                    <select class="selectpicker" name="package_type">
                                        <option>Group</option>
                                        <option>Famille</option>
                                        <option>Individuel</option>
                                        <option>Voyage de noces</option>
                                    </select>
                                </div>
                                <div class="col-md-6 col-sm-6 search-col-padding">
                                    <label>Budget(Optionnel)</label><br>
                                    <select class="selectpicker" name="package_budget">
                                        <option>500</option>
                                        <option>1000</option>
                                        <option>1000+</option>
                                    </select>
                                </div>
                                <div class="clearfix"></div>
                                <div class="col-md-12 search-col-padding">
                                    <button type="submit" class="search-button btn transition-effect">Rechercher croisière</button>
                                </div>
                                <div class="clearfix"></div>
                            </form>
                        </div>
                        <!-- END: CRUISE SEARCH -->

                    </div>
                    <!-- END: TAB PANE -->
                </div>
            </div>
            <div class="offer-slider">
                <div class="owl-carousel col-md-4 text-right" id="offer1">
                    <div class="item">
                        <h3>Turkiye</h3>
                        <h4>à partir de 1850DT/Personne</h4>
                        <a href="{{ route('tour')}}">SAVOIR PLUS</a>
                    </div>
                    <div class="item">
                        <h3>Spain</h3>
                        <h4>à partir de 1250DT/Personne</h4>
                        <a href="{{ route('tour')}}">SAVOIR PLUS</a>
                    </div>
                    <div class="item">
                        <h3>Paris</h3>
                        <h4>à partir de 999DT/Personne</h4>
                        <a href="{{ route('tour')}}">SAVOIR PLUS</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- END: SEARCH SECTION -->

    <!-- BEGIN: HOW IT WORK -->
    <section id="how-it-work">
        <div class="row work-row">
            <div class="container">
                <div class="section-title text-center">
                    <h2>COMMENT çA MARCHE?</h2>
                    <h4>CHERCHER - CHOISIR - RESERVER</h4>
                    <div class="space"></div>
                    <p>
                        En quelques clics seulement ,vous pouvez désormais réserver en ligne un parmis nos offres qui répond à vos exigences
                    </p>
                </div>
                <div class="work-step">
                    <div class="col-md-4 col-sm-4 first-step text-center">
                        <i class="fa fa-search"></i>
                        <h5>CHERCHER</h5>

                    </div>
                    <div class="col-md-4 col-sm-4 second-step text-center">
                        <i class="fa fa-heart-o"></i>
                        <h5>CHOISIR</h5>

                    </div>
                    <div class="col-md-4 col-sm-4 third-step text-center">
                        <i class="fa fa-shopping-cart"></i>
                        <h5>RESERVER</h5>

                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--END: HOW IT WORK -->
    <!-- START: PRODUCT SECTION-->
    <section class="hotel-product home-product">
        <!-- START: PRODUCT ROW 1 -->
        <div class="row light-row">
            <div class="col-md-6 clear-padding wow slideInLeft">
                <div class="product-wrapper">
                    <div class="col-md-6 col-sm-6 home-product-padding tooltip-right">
                        <h4>Ville de lumière! Paris</h4>
                        <h5><i class="fa fa-map-marker"></i> France</h5>
                        <p>La ville de Paris, véritable carte postale posée des deux côtés de la Seine, ne cesse de briller de mille feux.</p>
                        <div class="rating-box">
                            <div class="pull-left">
                                <img src="assets/images/tripadvisor.png" alt="cruise"><span>4.0/5</span>
                            </div>
                            <div class="pull-right">
                                <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star-half-o"></i><span>4.5/5</span>
                            </div>
                        </div>
                        <div class="clearfix"></div>
                        <div class="pricing-info">
                            <div class="pull-left">
                                <span>999DT/Personne</span>
                            </div>
                            <div class="pull-right">
                                <a href="#" class="wow fadeIn">RESERVER</a>
                            </div>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                    <div class="col-md-6 col-sm-6 clear-padding image-sm text-center">
                        <img src="assets/images/tour12.jpg" alt="cruise">
                        <div class="detail-link-wrapper">
                            <div class="detail-link">
                                <a href="#"><i class="fa fa-search"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="clearfix"></div>
                <div class="product-wrapper">
                    <div class="col-md-6 col-sm-6 clear-padding image-sm text-center">
                        <img src="assets/images/tour11.jpg" alt="cruise">
                        <div class="detail-link-wrapper">
                            <div class="detail-link">
                                <a href="#"><i class="fa fa-search"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-6 home-product-padding tooltip-left">
                        <h4>la ville culturelle exceptionnelle! Bruxelles</h4>
                        <h5><i class="fa fa-map-marker"></i> Belgique</h5>
                        <p>LUn cœur historique majestueux, une ambiance unique entre ville et village, une foule d’activités pour petits et grands: Bruxelles surprend à chaque coin de rue.</p>
                        <div class="rating-box">
                            <div class="pull-left">
                                <img src="assets/images/tripadvisor.png" alt="cruise"><span>4.0/5</span>
                            </div>
                            <div class="pull-right">
                                <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star-half-o"></i><span>4.5/5</span>
                            </div>
                        </div>
                        <div class="clearfix"></div>
                        <div class="pricing-info">
                            <div class="pull-left">
                                <span>899DT/Personne</span>
                            </div>
                            <div class="pull-right">
                                <a href="#" class="wow fadeIn">RESERVER</a>
                            </div>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                </div>
            </div>
            <div class="clearfix visible-sm-block"></div>
            <div class="col-md-6 clear-padding image-lg wow slideInRight">
                <img src="assets/images/home31.jpg" alt="cruise">
                <div class="overlay">
                    <div class="product-detail text-center">
                        <h3>Sky High</h3>
                        <h5><i class="fa fa-map-marker"></i> DUBAI</h5>
                        <p>Lorem Ipsum is simply dummy text. Lorem Ipsum is simply dummy text of the printing.</p>
                        <div class="rating-box">
                            <div class="pull-left">
                                <img src="assets/images/tripadvisor.png" alt="cruise"><span>4.0/5</span>
                            </div>
                            <div class="pull-right">
                                <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star-half-o"></i><span>4.5/5</span>
                            </div>
                        </div>
                        <div class="clearfix"></div>
                        <div class="pricing-info">
                            <div class="pull-left">
                                <span>499DT/Personne</span>
                            </div>
                            <div class="pull-right">
                                <a href="#" class="wow fadeIn">RESERVER</a>
                            </div>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                </div>
            </div>
        </div>
        <!-- END: PRODUCT ROW 1 -->
    </section>
    <!-- END: PRODUCT SECTION -->

    <!-- BEGIN: TOP DESTINATION SECTION -->
    <section id="home-top-destination">
        <div class="row image-background">
            <div class="td-overlay">
                <div class="container">
                    <div class="light-section-title text-center">
                        <h2>MEILLEURS DESTINATIONS</h2>
                        <h4>EXPLORE</h4>
                        <div class="space"></div>
                        <p>
                            Lorem Ipsum is simply dummy text. Lorem Ipsum is simply dummy text of the printing and typesetting industry.<br>
                            Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.
                        </p>
                    </div>
                    <div class="col-md-10 col-md-offset-1 on-top clear-padding">
                        <div class="col-md-6 col-sm-6 td-product text-center clear-padding wow slideInUp" data-wow-delay="0.1s">
                            <img src="assets/images/tour1.jpg" alt="cruise">
                            <div class="overlay">
                                <div class="wrapper">

                                    <h3><span>SPAIN</span></h3>
                                    <p>Barcelone entre mer et montagne, ville éclatante de bruits et de vie ! Ici les maisons espiègles de Gauti cohabitent paisiblement avec l’architecture gothique.</p>
                                    <a href="#">SAVOIR PLUS</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-6 td-product text-center clear-padding wow slideInUp" data-wow-delay="0.2s">
                            <img src="assets/images/tour2.jpg" alt="cruise">
                            <div class="overlay">
                                <div class="wrapper">

                                    <h3><span>ISTANBUL</span></h3>
                                    <p>Toute l'année, elle charme les visiteurs avec son centre historique, ses mosquées et autres monuments byzantins, ses anciennes citernes souterraines et ses croisières sur le Bosphore.</p>
                                    <a href="#">SAVOIR PLUS</a>
                                </div>
                            </div>
                        </div>
                        <div class="clearfix visible-md-block"></div>
                        <div class="col-md-6 col-sm-6 td-product text-center clear-padding wow slideInUp" data-wow-delay="0.1s">
                            <img src="assets/images/tour3.jpg" alt="cruise">
                            <div class="overlay">
                                <div class="wrapper">
                                    <h3><span>AMESTERDAM</span></h3>
                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text.</p>
                                    <a href="#">SAVOIR PLUS</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-6 td-product text-center clear-padding wow slideInUp" data-wow-delay="0.2s">
                            <img src="assets/images/tour5.jpg" alt="cruise">
                            <div class="overlay">
                                <div class="wrapper">
                                    <h3><span>VENISE</span></h3>
                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text.</p>
                                    <a href="#">SAVOIR PLUS</a>
                                </div>
                            </div>
                        </div>
                        <div class="clearfix visible-md-block"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- END: TOP DESTINATION SECTION -->

    <!-- START: HOT  DEALS -->
    <section>
        <div class="row hot-deals">
            <div class="container clear-padding">
                <div class="section-title text-center">
                    <h2>Bonnes affaires</h2>
                
                </div>
                <div role="tabpanel" class="text-center">
                    <!-- BEGIN: CATEGORY TAB -->
                    <ul class="nav nav-tabs" role="tablist" id="hotDeal">
                        <li role="presentation" class="active text-center">
                            <a href="#tab1" aria-controls="tab1" role="tab" data-toggle="tab">
                                <i class="fa fa-bed"></i>
                                <span>HôTELS</SPAN>
                            </a>
                        </li>
                        <li role="presentation" class="text-center">
                            <a href="#tab2" aria-controls="tab2" role="tab" data-toggle="tab">
                                <i class="fa fa-suitcase"></i>
                                <span>VOYAGES</SPAN>
                            </a>
                        </li>
                        <li role="presentation" class="text-center">
                            <a href="#tab3" aria-controls="tab3" role="tab" data-toggle="tab">
                                <i class="fa fa-plane"></i>
                                <span>VOLS</SPAN>
                            </a>
                        </li>
                        <li role="presentation" class="text-center">
                            <a href="#tab4" aria-controls="tab4" role="tab" data-toggle="tab">
                                <i class="fa fa-taxi"></i>
                                <span>VOITURES</SPAN>
                            </a>
                        </li>
                        <li role="presentation" class="text-center">
                            <a href="#tab5" aria-controls="tab5" role="tab" data-toggle="tab">
                                <i class="fa fa-bed"></i>
                                <span>CROISIERE</SPAN>
                            </a>
                        </li>
                    </ul>
                    <!-- END: CATEGORY TAB -->
                    <div class="clearfix"></div>
                    <!-- BEGIN: TAB PANELS -->
                    <div class="tab-content">
                        <!-- BEGIN: FLIGHT SEARCH -->
                        <div role="tabpanel" class="tab-pane active fade in" id="tab1">
                            <div class="col-md-6 hot-deal-list wow slideInLeft">
                                <div class="item">
                                    <div class="col-xs-3">
                                        <img src="assets/images/room1.jpg" alt="Cruise">
                                    </div>
                                    <div class="col-md-7 col-xs-6">
                                        <h5>Village Africa Jade Thalasso</h5>
                                        <p class="location"><i class="fa fa-map-marker"></i> Korba, Tunsie</p>
                                        <p class="text-sm">un bijou architectural connu pour sa plage de sable blanc, sa fine gastronomie diversifiée et ses jardins exotiques.</p>
                                    </div>
                                    <div class="col-md-2 col-xs-3">
                                        <h4>110TND</h4>
                                        <h6>Par Nuit</h6>
                                        <a href="#">RESERVER</a>
                                    </div>
                                </div>
                                <div class="clearfix"></div>
                                <div class="item">
                                    <div class="col-xs-3">
                                        <img src="assets/images/room2.jpg" alt="Cruise">
                                    </div>
                                    <div class="col-md-7 col-xs-6">
                                        <h5>Sentido Aziza Beach Golf et Spa</h5>
                                        <p class="location"><i class="fa fa-map-marker"></i> Hammamet, Tunisie</p>
                                        <p class="text-sm"> Situé à 1 minute à pied de la plage sur le front de mer et à 3Km du centre-ville d'Hammamet ,cet établissement est reconnu pour sa décorationintèrieure moderne</p>
                                    </div>
                                    <div class="col-md-2 col-xs-3">
                                        <h4>86TND</h4>
                                        <h6>Par Nuit</h6>
                                        <a href="#">RESERVER</a>
                                    </div>
                                </div>
                                <div class="clearfix"></div>
                                <div class="item">
                                    <div class="col-xs-3">
                                        <img src="assets/images/room3.jpg" alt="Cruise">
                                    </div>
                                    <div class="col-md-7 col-xs-6">
                                        <h5>La Playa Hotel Club</h5>
                                        <p class="location"><i class="fa fa-map-marker"></i> Hammamet, Tunisie</p>
                                        <p class="text-sm">Prés de la plage,coloré tout en blanc,l'établissement donne une vue de candeur quand le soleil fait sa première apparition.</p>
                                    </div>
                                    <div class="col-md-2 col-xs-3">
                                        <h4>34TND</h4>
                                        <h6>Par Nuit</h6>
                                        <a href="#">RESERVER</a>
                                    </div>
                                </div>
                                <div class="clearfix"></div>
                                <div class="item">
                                    <div class="col-xs-3">
                                        <img src="assets/images/room4.jpg" alt="Cruise">
                                    </div>
                                    <div class="col-md-7 col-xs-6">
                                        <h5>The Pearl Resort & Spa</h5>
                                        <p class="location"><i class="fa fa-map-marker"></i> Sousse, Tunisie</p>
                                        <p class="text-sm">hôtel doté d'une décoration moderne avec une touche artisanale.</p>
                                    </div>
                                    <div class="col-md-2 col-xs-3">
                                        <h4>132TND</h4>
                                        <h6>Par Nuit</h6>
                                        <a href="#">RESERVER</a>
                                    </div>
                                </div>
                                <div class="clearfix"></div>
                            </div>
                            <div class="col-md-6 hot-deal-grid wow slideInRight">
                                <div class="col-sm-6 item">
                                    <div class="wrapper">
                                        <img src="assets/images/village_africa.jpg" alt="Cruise">
                                        <h5>Village Africa Jade Thalasso</h5>
                                        <a href="#">DETAILS</a>
                                    </div>
                                </div>
                                <div class="col-sm-6 item">
                                    <div class="wrapper">
                                        <img src="assets/images/sentido_aziza_beach.jpg" alt="Cruise">
                                        <h5>Sentido Aziza Beach Golf et Spa</h5>
                                        <a href="#">DETAILS</a>
                                    </div>
                                </div>
                                <div class="col-sm-6 item">
                                    <div class="wrapper">
                                        <img src="assets/images/laPlaya.jpg" alt="Cruise">
                                        <h5>La Playa Hotel Club</h5>
                                        <a href="#">DETAILS</a>
                                    </div>
                                </div>
                                <div class="col-sm-6 item">
                                    <div class="wrapper">
                                        <img src="assets/images/pearl.jpg" alt="Cruise">
                                        <h5>The Pearl Resort & Spa</h5>
                                        <a href="#">DETAILS</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div role="tabpanel" class="tab-pane fade" id="tab2">
                            <div class="col-md-6 hot-deal-list">
                                <div class="item">
                                    <div class="col-xs-3">
                                        <img src="assets/images/voyage11.jpg" alt="Cruise">
                                    </div>
                                    <div class="col-md-7 col-xs-6">
                                        <h5>Göreme</h5>
                                        <p class="location"><i class="fa fa-map-marker"></i> Kapadokya TÜRKİYE</p>
                                        <p class="text-sm"> Toute l'année, elle charme les visiteurs avec son centre historique, ses mosquées et autres monuments byzantins, ses anciennes citernes souterraines et ses croisières sur le Bosphore.</p>
                                    </div>
                                    <div class="col-md-2 col-xs-3">
                                        <h4>1822TND</h4>
                                        <h6>7Jours/6Nuits</h6>
                                        <a href="#">RESERVER</a>
                                    </div>
                                </div>
                                <div class="clearfix"></div>
                                <div class="item">
                                    <div class="col-xs-3">
                                        <img src="assets/images/disney.jpg" alt="Cruise">
                                    </div>
                                    <div class="col-md-7 col-xs-6">
                                        <h5>DisneyLand</h5>
                                        <p class="location"><i class="fa fa-map-marker"></i> Paris, France</p>
                                        <p class="text-sm">La ville de Paris, véritable carte postale posée des deux côtés de la Seine, ne cesse de briller de mille feux.</p>
                                    </div>
                                    <div class="col-md-2 col-xs-3">
                                        <h4>900TND</h4>
                                        <h6>4Jours/3Nuits</h6>
                                        <a href="#">RESERVER</a>
                                    </div>
                                </div>
                                <div class="clearfix"></div>
                                <div class="item">
                                    <div class="col-xs-3">
                                        <img src="assets/images/voyage33.jpg" alt="Cruise">
                                    </div>
                                    <div class="col-md-7 col-xs-6">
                                        <h5>Vol + Htop BCN City Barcelone 2*</h5>
                                        <p class="location"><i class="fa fa-map-marker"></i> Barcelone, Spain</p>
                                        <p class="text-sm">Barcelone entre mer et montagne, ville éclatante de bruits et de vie ! Ici les maisons espiègles de Gauti cohabitent paisiblement avec l’architecture gothique. </p>
                                    </div>
                                    <div class="col-md-2 col-xs-3">
                                        <h4>750TND</h4>
                                        <h6>4Jours/3Nuits</h6>
                                        <a href="#">RESESRVER</a>
                                    </div>
                                </div>
                                <div class="clearfix"></div>
                                <div class="item">
                                    <div class="col-xs-3">
                                        <img src="assets/images/voyage44.jpg" alt="Cruise">
                                    </div>
                                    <div class="col-md-7 col-xs-6">
                                        <h5>Vol + transferts + hôtel Western Scala 3*</h5>
                                        <p class="location"><i class="fa fa-map-marker"></i> Francfort, Allemagne</p>
                                        <p class="text-sm">On trouve énormément de choses à faire et à voir dans cette ville allemande fondée il y a plus de 2000 ans. </p>
                                    </div>
                                    <div class="col-md-2 col-xs-3">
                                        <h4>1250TND</h4>
                                        <h6>3Jours/2Nuits</h6>
                                        <a href="#">RESESRVER</a>
                                    </div>
                                </div>
                                <div class="clearfix"></div>
                            </div>
                            <div class="col-md-6 hot-deal-grid">
                                <div class="col-sm-6 item">
                                    <div class="wrapper">
                                        <img src="assets/images/voyage1.jpg" alt="Cruise">
                                        <h5>Turkey</h5>
                                        <a href="#">DETAILS</a>
                                    </div>
                                </div>
                                <div class="col-sm-6 item">
                                    <div class="wrapper">
                                        <img src="assets/images/paris.jpg" alt="Cruise">
                                        <h5>Paris</h5>
                                        <a href="#">DETAILS</a>
                                    </div>
                                </div>
                                <div class="col-sm-6 item">
                                    <div class="wrapper">
                                        <img src="assets/images/voyage3.jpg" alt="Cruise">
                                        <h5>Spain</h5>
                                        <a href="#">DETAILS</a>
                                    </div>
                                </div>
                                <div class="col-sm-6 item">
                                    <div class="wrapper">
                                        <img src="assets/images/voyage4.jpg" alt="Cruise">
                                        <h5>Allemagne</h5>
                                        <a href="#">DETAILS</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div role="tabpanel" class="tab-pane" id="tab3">
                            <div class="col-md-6 hot-deal-list">
                                <div class="item">
                                    <div class="col-xs-3">
                                        <img src="assets/images/vol11.png" alt="Cruise">
                                    </div>
                                    <div class="col-md-7 col-xs-6">
                                        <h5>Emirates</h5>
                                        <p class="location"><i class="fa fa-map-marker"></i>Tunis-Allemagne</p>

                                    </div>
                                    <div class="col-md-2 col-xs-3">
                                        <h4>1822TND</h4>
                                        <a href="#">RESERVER</a>
                                    </div>
                                </div>
                                <div class="clearfix"></div>
                                <div class="item">
                                    <div class="col-xs-3">
                                        <img src="assets/images/vol22.jpg" alt="Cruise">
                                    </div>
                                    <div class="col-md-7 col-xs-6">
                                        <h5>Tunisair</h5>
                                        <p class="location"><i class="fa fa-map-marker"></i> tunis-Spain</p>
                                    </div>
                                    <div class="col-md-2 col-xs-3">
                                        <h4>900TND</h4>
                                        <a href="#">RESERVER</a>
                                    </div>
                                </div>
                                <div class="clearfix"></div>
                                <div class="item">
                                    <div class="col-xs-3">
                                        <img src="assets/images/vol33.png" alt="Cruise">
                                    </div>
                                    <div class="col-md-7 col-xs-6">
                                        <h5>AirFrance</h5>
                                        <p class="location"><i class="fa fa-map-marker"></i>Tunis-France</p>
                                    </div>
                                    <div class="col-md-2 col-xs-3">
                                        <h4>750TND</h4>
                                        <a href="#">RESESRVER</a>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="col-xs-3">
                                        <img src="assets/images/vol4.png" alt="Cruise">
                                    </div>
                                    <div class="col-md-7 col-xs-6">
                                        <h5>Turkish Airlines</h5>
                                        <p class="location"><i class="fa fa-map-marker"></i>Tunis-Turkey</p>
                                    </div>
                                    <div class="col-md-2 col-xs-3">
                                        <h4>1150TND</h4>
                                        <a href="#">RESESRVER</a>
                                    </div>
                                </div>
                                <div class="clearfix"></div>
                            </div>
                            <div class="col-md-6 hot-deal-grid">
                                <div class="col-sm-6 item">
                                    <div class="wrapper">
                                        <img src="assets/images/vol1.jpg" alt="Cruise">
                                        <h5>Emirates</h5>
                                        <a href="#">DETAILS</a>
                                    </div>
                                </div>
                                <div class="col-sm-6 item">
                                    <div class="wrapper">
                                        <img src="assets/images/vol2.jpg" alt="Cruise">
                                        <h5>Tunisair</h5>
                                        <a href="#">DETAILS</a>
                                    </div>
                                </div>
                                <div class="col-sm-6 item">
                                    <div class="wrapper">
                                        <img src="assets/images/vol3.jpg" alt="Cruise">
                                        <h5>AirFrance</h5>
                                        <a href="#">DETAILS</a>
                                    </div>
                                </div>
                                <div class="col-sm-6 item">
                                    <div class="wrapper">
                                        <img src="assets/images/vol44.jpg" alt="Cruise">
                                        <h5>Turkish Airlines</h5>
                                        <a href="#">DETAILS</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div role="tabpanel" class="tab-pane" id="tab4">
                            Lorem Lpsum 4
                        </div>
                        <div role="tabpanel" class="tab-pane" id="tab5">
                            Lorem Lpsum 5
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- END: HOT DEALS -->

    <!-- START: WHY CHOOSE US SECTION -->
    <section id="why-choose-us">
        <div class="row choose-us-row">
            <div class="container clear-padding">
                <div class="light-section-title text-center">
                    <h2>WHY CHOOSE US?</h2>
                    <h4>REASONS TO TRUST US</h4>
                    <div class="space"></div>
                    <p>
                        Lorem Ipsum is simply dummy text. Lorem Ipsum is simply dummy text of the printing and typesetting industry.<br>
                        Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.
                    </p>
                </div>
                <div class="col-md-4 col-sm-4 wow slideInLeft">
                    <div class="choose-us-item text-center">
                        <div class="choose-icon"><i class="fa fa-suitcase"></i></div>
                        <h4>Handpicked Tour</h4>
                        <p>Lorem Ipsum is simply dummy text. Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                        <a href="#">KNOW MORE</a>
                    </div>
                </div>
                <div class="col-md-4 col-sm-4 wow slideInUp">
                    <div class="choose-us-item text-center">
                        <div class="choose-icon"><i class="fa fa-phone"></i></div>
                        <h4>Dedicated Support</h4>
                        <p>Lorem Ipsum is simply dummy text. Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                        <a href="#">KNOW MORE</a>
                    </div>
                </div>
                <div class="col-md-4 col-sm-4 wow slideInRight">
                    <div class="choose-us-item text-center">
                        <div class="choose-icon"><i class="fa fa-smile-o"></i></div>
                        <h4>Lowest Price</h4>
                        <p>Lorem Ipsum is simply dummy text. Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                        <a href="#">KNOW MORE</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- END: WHY CHOOSE US SECTION -->
    <!-- BEGIN: RECENT BLOG POST -->
    <section id="recent-blog">
        <div class="row top-offer">
            <div class="container">
                <div class="section-title text-center">
                    <h2>RECENT BLOG POSTS</h2>
                    <h4>NEWS</h4>
                </div>
                <div class="owl-carousel" id="post-list">
                    <div class="room-grid-view wow slideInUp" data-wow-delay="0.1s">
                        <img src="assets/images/offer1.jpg" alt="cruise">
                        <div class="room-info">
                            <div class="post-title">
                                <h5>POST TITLE GOES HERE</h5>
                                <p><i class="fa fa-calendar"></i> Jul 15, 2015</p>
                            </div>
                            <div class="post-desc">
                                <p>Lorem Ipsum is simply dummy text. Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                            </div>
                            <div class="room-book">
                                <div class="col-md-8 col-sm-6 col-xs-6 clear-padding post-alt">
                                    <h5><i class="fa fa-comments"></i> 2 <i class="fa fa-share-alt"></i> 20 </h5>
                                </div>
                                <div class="col-md-4 col-sm-6 col-xs-6 clear-padding">
                                    <a href="#" class="text-center">MORE</a>
                                </div>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                    </div>
                    <div class="room-grid-view wow slideInUp" data-wow-delay="0.2s">
                        <img src="assets/images/offer2.jpg" alt="cruise">
                        <div class="room-info">
                            <div class="post-title">
                                <h5>POST TITLE GOES HERE</h5>
                                <p><i class="fa fa-calendar"></i> Jul 15, 2015</p>
                            </div>
                            <div class="post-desc">
                                <p>Lorem Ipsum is simply dummy text. Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                            </div>
                            <div class="room-book">
                                <div class="col-md-8 col-sm-6 col-xs-6 clear-padding post-alt">
                                    <h5><i class="fa fa-comments"></i> 2 <i class="fa fa-share-alt"></i> 20 </h5>
                                </div>
                                <div class="col-md-4 col-sm-6 col-xs-6 clear-padding">
                                    <a href="#" class="text-center">MORE</a>
                                </div>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                    </div>
                    <div class="room-grid-view wow slideInUp" data-wow-delay="0.3s">
                        <img src="assets/images/offer3.jpg" alt="cruise">
                        <div class="room-info">
                            <div class="post-title">
                                <h5>POST TITLE GOES HERE</h5>
                                <p><i class="fa fa-calendar"></i> Jul 15, 2015</p>
                            </div>
                            <div class="post-desc">
                                <p>Lorem Ipsum is simply dummy text. Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                            </div>
                            <div class="room-book">
                                <div class="col-md-8 col-sm-6 col-xs-6 clear-padding post-alt">
                                    <h5><i class="fa fa-comments"></i> 2 <i class="fa fa-share-alt"></i> 20 </h5>
                                </div>
                                <div class="col-md-4 col-sm-6 col-xs-6 clear-padding">
                                    <a href="#" class="text-center">MORE</a>
                                </div>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                    </div>
                    <div class="room-grid-view wow slideInUp" data-wow-delay="0.4s">
                        <img src="assets/images/offer4.jpg" alt="cruise">
                        <div class="room-info">
                            <div class="post-title">
                                <h5>POST TITLE GOES HERE</h5>
                                <p><i class="fa fa-calendar"></i> Jul 15, 2015</p>
                            </div>
                            <div class="post-desc">
                                <p>Lorem Ipsum is simply dummy text. Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                            </div>
                            <div class="room-book">
                                <div class="col-md-8 col-sm-6 col-xs-6 clear-padding post-alt">
                                    <h5><i class="fa fa-comments"></i> 2 <i class="fa fa-share-alt"></i> 20 </h5>
                                </div>
                                <div class="col-md-4 col-sm-6 col-xs-6 clear-padding">
                                    <a href="#" class="text-center">MORE</a>
                                </div>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                    </div>
                    <div class="room-grid-view wow slideInUp" data-wow-delay="0.5s">
                        <img src="assets/images/offer3.jpg" alt="cruise">
                        <div class="room-info">
                            <div class="post-title">
                                <h5>POST TITLE GOES HERE</h5>
                                <p><i class="fa fa-calendar"></i> Jul 15, 2015</p>
                            </div>
                            <div class="post-desc">
                                <p>Lorem Ipsum is simply dummy text. Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                            </div>
                            <div class="room-book">
                                <div class="col-md-8 col-sm-6 col-xs-6 clear-padding post-alt">
                                    <h5><i class="fa fa-comments"></i> 2 <i class="fa fa-share-alt"></i> 20 </h5>
                                </div>
                                <div class="col-md-4 col-sm-6 col-xs-6 clear-padding">
                                    <a href="#" class="text-center">MORE</a>
                                </div>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                    </div>
                    <div class="room-grid-view wow slideInUp" data-wow-delay="0.6s">
                        <img src="assets/images/offer2.jpg" alt="cruise">
                        <div class="room-info">
                            <div class="post-title">
                                <h5>POST TITLE GOES HERE</h5>
                                <p><i class="fa fa-calendar"></i> Jul 15, 2015</p>
                            </div>
                            <div class="post-desc">
                                <p>Lorem Ipsum is simply dummy text. Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                            </div>
                            <div class="room-book">
                                <div class="col-md-8 col-sm-6 col-xs-6 clear-padding post-alt">
                                    <h5><i class="fa fa-comments"></i> 2 <i class="fa fa-share-alt"></i> 20 </h5>
                                </div>
                                <div class="col-md-4 col-sm-6 col-xs-6 clear-padding">
                                    <a href="#" class="text-center">MORE</a>
                                </div>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- END: RECENT BLOG POST -->


    <!-- START: FOOTER -->
    <section id="footer">
        <footer>
            <div class="row main-footer-sub">
                <div class="container clear-padding">
                    <div class="col-md-7 col-sm-7">
                        <form >
                            <label>SUBSCRIBE TO OUR NEWSLETTER</label>
                            <div class="clearfix"></div>
                            <div class="col-md-9 col-sm-8 col-xs-6 clear-padding">
                                <input class="form-control" type="email" required placeholder="Enter Your Email" name="email">
                            </div>
                            <div class="col-md-3 col-sm-4 col-xs-6 clear-padding">
                                <button type="submit"><i class="fa fa-paper-plane"></i>SUBSCRIBE</button>
                            </div>
                        </form>
                    </div>
                    <div class="col-md-5 col-sm-5">
                        <div class="social-media pull-right">
                            <ul>
                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                                <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                <li><a href="#"><i class="fa fa-youtube"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="main-footer row">
                <div class="container clear-padding">
                    <div class="col-md-3 col-sm-6 about-box">
                        <h3>CRUISE</h3>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.</p>
                        <a href="#">READ MORE</a>
                    </div>
                    <div class="col-md-3 col-sm-6 links">
                        <h4>Popular Tours</h4>
                        <ul>
                            <li><a href="#">Romantic France</a></li>
                            <li><a href="#">Wonderful Lodnon</a></li>
                            <li><a href="#">Awesome Amsterdam</a></li>
                            <li><a href="#">Wild Africa</a></li>
                            <li><a href="#">Beach Goa</a></li>
                            <li><a href="#">Casino Los Vages</a></li>
                            <li><a href="#">Romantic France</a></li>
                        </ul>
                    </div>
                    <div class="clearfix visible-sm-block"></div>
                    <div class="col-md-3 col-sm-6 links">
                        <h4>NOS Services</h4>
                        <ul>
                            <li><a href="#">Domestic Flights</a></li>
                            <li><a href="#">International Flights</a></li>
                            <li><a href="#">Tours & Vacances</a></li>
                            <li><a href="#">Domestic Hotels</a></li>
                            <li><a href="#">Hôtels Internationnal</a></li>
                            <li><a href="#">Croisière</a></li>
                            <li><a href="#">Car Rental</a></li>
                        </ul>
                    </div>
                    <div class="col-md-3 col-sm-6 contact-box">
                        <h4>Contact Us</h4>
                        <p><i class="fa fa-home"></i> Street #156 Burbank, Studio City Hollywood, California USA</p>
                        <p><i class="fa fa-phone"></i> +91 1234567890</p>
                        <p><i class="fa fa-envelope-o"></i> support@domain.com</p>
                    </div>
                    <div class="clearfix"></div>
                    <div class="col-md-12 text-center we-accept">
                        <h4>We Accept</h4>
                        <ul>
                            <li><img src="assets/images/card/mastercard.png" alt="cruise"></li>
                            <li><img src="assets/images/card/visa.png" alt="cruise"></li>
                            <li><img src="assets/images/card/american-express.png" alt="cruise"></li>
                            <li><img src="assets/images/card/mastercard.png" alt="cruise"></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="main-footer-nav row">
                <div class="container clear-padding">
                    <div class="col-md-6 col-sm-6">
                        <p>Copyright &copy; 2015 LimpidThemes. All Rights Reserved.</p>
                    </div>
                    <div class="col-md-6 col-sm-6">
                        <ul>
                            <li><a href="#">VOLS</a></li>
                            <li><a href="#">TOURS</a></li>
                            <li><a href="#">VOITURES</a></li>
                            <li><a href="#">HÖTELS</a></li>
                            <li><a href="#">BLOG</a></li>
                        </ul>
                    </div>
                    <div class="go-up">
                        <a href="#"><i class="fa fa-arrow-up"></i></a>
                    </div>
                </div>
            </div>
        </footer>
    </section>
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
<script type="text/javascript">
    /* SLIDER SETTINGS */
    jQuery(function($){
        "use strict";
        $.supersized({

            //Functionality
            slideshow               :   1,		//Slideshow on/off
            autoplay				:	1,		//Slideshow starts playing automatically
            start_slide             :   1,		//Start slide (0 is random)
            random					: 	0,		//Randomize slide order (Ignores start slide)
            slide_interval          :   10000,	//Length between transitions
            transition              :   1, 		//0-None, 1-Fade, 2-Slide Top, 3-Slide Right, 4-Slide Bottom, 5-Slide Left, 6-Carousel Right, 7-Carousel Left
            transition_speed		:	500,	//Speed of transition
            new_window				:	1,		//Image links open in new window/tab
            pause_hover             :   0,		//Pause slideshow on hover
            keyboard_nav            :   0,		//Keyboard navigation on/off
            performance				:	1,		//0-Normal, 1-Hybrid speed/quality, 2-Optimizes image quality, 3-Optimizes transition speed // (Only works for Firefox/IE, not Webkit)
            image_protect			:	1,		//Disables image dragging and right click with Javascript

            //Size & Position
            min_width		        :   0,		//Min width allowed (in pixels)
            min_height		        :   0,		//Min height allowed (in pixels)
            vertical_center         :   1,		//Vertically center background
            horizontal_center       :   1,		//Horizontally center background
            fit_portrait         	:   1,		//Portrait images will not exceed browser height
            fit_landscape			:   0,		//Landscape images will not exceed browser width

            //Components
            navigation              :   1,		//Slideshow controls on/off
            thumbnail_navigation    :   1,		//Thumbnail navigation
            slide_counter           :   1,		//Display slide numbers
            slide_captions          :   1,		//Slide caption (Pull from "title" in slides array)
            slides 					:  	[		//Slideshow Images
                {image : 'assets/images/hotel-slide.jpg', title : 'Slide 1'},
                {image : 'assets/images/hotel-slide1.jpg', title : 'Slide 2'},
                {image : 'assets/images/holiday-slide3.jpg', title : 'Slide 3'}
            ]

        });
    });

</script>
</body>

<!-- Mirrored from limpidthemesdemo.com/Themeforest/html/cruise-demo/light/index-5.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 06 Mar 2019 10:50:33 GMT -->
</html>