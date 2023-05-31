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
    <div class="row modify-search modify-hotel">
        <div class="container clear-padding">
            <form >
                <div class="col-md-4">
                    <div class="form-gp">
                        <label>Destination</label>
                        <div class="input-group margin-bottom-sm">
                            <input type="text" name="city" class="form-control" required placeholder="Houria palace">
                            <span class="input-group-addon"><i class="fa fa-map-marker fa-fw"></i></span>
                        </div>
                    </div>
                </div>
                <div class="col-md-2 col-sm-6 col-xs-6">
                    <div class="form-gp">
                        <label>DU</label>
                        <div class="input-group margin-bottom-sm">
                            <input type="text" id="check_in" name="check_in" class="form-control" placeholder="DD/MM/YYYY">
                            <span class="input-group-addon"><i class="fa fa-calendar fa-fw"></i></span>
                        </div>
                    </div>
                </div>
                <div class="col-md-2 col-sm-6 col-xs-6">
                    <div class="form-gp">
                        <label>AU</label>
                        <div class="input-group margin-bottom-sm">
                            <input type="text" id="check_out" name="check_out" class="form-control" required placeholder="DD/MM/YYYY">
                            <span class="input-group-addon"><i class="fa fa-calendar fa-fw"></i></span>
                        </div>
                    </div>
                </div>
                <div class="col-md-1 col-sm-6 col-xs-3">
                    <div class="form-gp">
                        <label>Chambre</label>
                        <select class="selectpicker">
                            <option>1</option>
                            <option>2</option>
                            <option>3</option>
                            <option>4</option>
                            <option>5</option>
                            <option>6</option>
                        </select>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 col-xs-9">
                    <div class="form-gp">
                        <button type="submit" class="modify-search-button btn transition-effect">RECHERCHER</button>
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
                    <h4 ><a href="{{ route('hotel')}}"  style="color:white">Tous les Hotels</a></h4>
                </div>
                <div class="filter-area">
                    <div class="price-filter filter">
                        <h5><i class="fa fa-usd"></i>Prix</h5>
                        <p>
                            <label></label>
                            <input type="text" id="amount" readonly>
                        </p>
                        <div id="price-range"></div>
                    </div>
                    <div class="name-filter filter">
                        <h5><i class="fa fa-bed"></i> Nom Hotel</h5>
                        <div class="input-group margin-bottom-sm">
                            <input type="text" name="destination_city" class="form-control" required placeholder="Houria Palace">
                            <span class="input-group-addon"><i class="fa fa-map-marker fa-fw"></i></span>
                        </div>
                    </div>
                    <div class="star-filter filter">
                        <h5><i class="fa fa-star"></i>Etoile</h5>
                        <ul>
                            <li><a href="{{ route('hotel', ['ville' => request()->ville,'wifi' =>request()->wifi,'bar'=>request()->bar,'restaurant'=>request()->restaurant,'cafe'=>request()->cafe,'etoile'=>5]) }}"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i></a></li>
                            <li><a href="{{ route('hotel', ['ville' => request()->ville,'wifi' =>request()->wifi,'bar'=>request()->bar,'restaurant'=>request()->restaurant,'cafe'=>request()->cafe,'etoile'=>4 ])}}"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i></a></li>
                            <li><a href="{{ route('hotel', ['ville' => request()->ville,'wifi' =>request()->wifi,'bar'=>request()->bar,'restaurant'=>request()->restaurant,'cafe'=>request()->cafe,'etoile'=>3 ])}}"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i></a></li>
                            <li><a href="{{ route('hotel', ['ville' => request()->ville,'wifi' =>request()->wifi,'bar'=>request()->bar,'restaurant'=>request()->restaurant,'cafe'=>request()->cafe,'etoile'=>2 ])}}"><i class="fa fa-star"></i><i class="fa fa-star"></i></a></li>
                            <li><a href="{{ route('hotel', ['ville' => request()->ville,'wifi' =>request()->wifi,'bar'=>request()->bar,'restaurant'=>request()->restaurant,'cafe'=>request()->cafe,'etoile'=>1 ])}}"> <i class="fa fa-star"></i></a></li>
                            <li><a href="{{ route('hotel', ['ville' => request()->ville,'wifi' =>request()->wifi,'bar'=>request()->bar,'restaurant'=>request()->restaurant,'cafe'=>request()->cafe,'etoile'=>0]) }}">X </i></a></li>
                        </ul>
                    </div>
                    <div class="location-filter filter">
                        <h5><i class="fa fa-map-marker"></i> Hotel Tunisie</h5>
                        
                        <ul>
                        @foreach ($villes as $v)
                            <li><a href="{{ route('hotel', ['ville' => $v->idVille,'wifi' =>request()->wifi,'bar'=>request()->bar,'restaurant'=>request()->restaurant,'cafe'=>request()->cafe,'etoile'=>request()->etoile]) }}">Hotel {{$v->nom}}</a> </li>
                        @endforeach
                        </ul>
                    </div>
                    <div class="facilities-filter filter">
                        <h5><i class="fa fa-list"></i> Options</h5>
                        <ul>
                            <li><a href="{{ route('hotel', ['ville' => request()->ville,'wifi' =>'wifi','etoile'=>request()->etoile,'bar'=>request()->bar,'restaurant'=>request()->restaurant,'cafe'=>request()->cafe]) }}"> <i class="fa fa-wifi"></i> Wifi</a></li>
                            <li><a href="{{ route('hotel', ['ville' => request()->ville,'bar' => 'bar','etoile'=>request()->etoile,'wifi' =>request()->wifi,'restaurant'=>request()->restaurant,'cafe'=>request()->cafe]) }}"> <i class="fa fa-beer"></i> Bar</a></li>
                            <li><a href="{{ route('hotel', ['ville' => request()->ville,'restaurant' => 'restaurant','etoile'=>request()->etoile,'wifi' =>request()->wifi,'bar'=>request()->bar,'cafe'=>request()->cafe]) }}"><i class="fa fa-cutlery"></i> Restaurant</a></li>
                            <li><a href="{{ route('hotel', ['ville' => request()->ville,'cafe' =>'cafe','wifi' =>request()->wifi,'bar'=>request()->bar,'restaurant'=>request()->restaurant]) }}"><i class="fa fa-coffee"></i> Café</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- END: FILTER AREA -->

            <!-- START: INDIVIDUAL LISTING AREA -->
            <div class="col-md-9 hotel-listing text-center">

                <!-- START: SORT AREA -->
                <div class="sort-area col-sm-10">

                    <div class="col-md-3 col-sm-3 col-xs-6 sort">
                        <select id="dynamic_select" class="selectpicker" >
                            <option selected disabled>Prix</option>
                            <option value="moins"> Moins cher</option>
                            <option value="plus"> Plus cher</option>
                        </select>
                    </div>
                    <div class="col-md-3 col-sm-3 col-xs-6 sort">
                        <select  id="etoileselect" class="selectpicker" >
                            <option selected disabled>Etoile</option>
                            <option value="bas"> De bas en haut</option>
                            <option value="haut"> Haut en bas</option>
                        </select>
                    </div>
                </div>
                <!-- END: SORT AREA -->
                <div class="clearfix visible-xs-block"></div>
                
                
                <!-- START: HOTEL GRID VIEW -->
                @if(count($hotels)==0)
                <div class="col-md-12 col-sm-12">
                <div class="alert alert-danger">
                <div style="text-align: center">hotel introuvable</div>
                </div>
                </div>
                @endif
                @foreach($hotels as $hotel)
                <div class="col-md-4 col-sm-6">
                    <div class="room-grid-view">
                        <img src="assets/images/offer1.jpg" alt="cruise">
                        <div class="room-info">
                            <div class="room-title">
                                <h5>{{$hotel->nom}}<span> {{$hotel->etoile}}<i class="fa fa-star"></i></span></h5>
                                <p><i class="fa fa-map-marker"></i>{{$hotel->idVille}}</p>
                                <div class="hotel-ammeties">
                                   @if(strstr($hotel->facilitie,'wifi'))
                                    <i class="fa fa-wifi" title="Free Wifi"></i>
                                    @endif
                                    @if(strstr($hotel->facilitie,'restaurant'))
                                    <i class="fa fa-cutlery" title="Breakfast"></i>
                                    @endif
                                    @if(strstr($hotel->facilitie,'cafe'))
                                    <i class="fa fa-coffee" title="Free Drinks"></i>
                                    @endif
                                    @if(strstr($hotel->facilitie,'bar'))
                                    <i class="fa fa-beer" title="Bar"></i>
                                    @endif
                                    @if(!strstr($hotel->facilitie,'cafe')&&!strstr($hotel->facilitie,'bar')&&!strstr($hotel->facilitie,'restaurant')&&!strstr($hotel->facilitie,'wifi'))    
                                   <i class="fa fa-times"></i>
                                   @endif
                                </div>
                            </div>
                            <div class="room-desc" style="height:45px;line-height:20px;overflow:hidden">
                            <p >{{$hotel->description}}</p>
                            </div>
                            <div class="clearfix"></div>
                            <div class="room-book">
                                <div class="col-md-8 col-sm-6 col-xs-6 clear-padding">
                                    <h5>{{$hotel->prix}}TND </h5>
                                </div>
                                <div class="col-md-4 col-sm-6 col-xs-6 clear-padding">
                                    <a href="#">tarifs & dispo</a>
                                </div>
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
        $('#dynamic_select').on('change', function () {
          var e= document.getElementById('dynamic_select');// get selected value
          var id =  new String(e[e.selectedIndex].value);
         
          if (id == "moins") { 
              window.location.href = "{{ route('hotel', ['cher'=>'moins'])}}";
          }else{ window.location.href = "{{ route('hotel', ['cher'=>'plus'])}}"}
          return false;
      });
      $('#etoileselect').on('change', function () {
          var ee= document.getElementById('etoileselect');// get selected value
          var idd =  new String(ee[ee.selectedIndex].value);
         
          if (idd == "haut") { 
              window.location.href = "{{ route('hotel', ['star'=>'haut'])}}";
          }else{ window.location.href = "{{ route('hotel', ['star'=>'bas'])}}"}
          return false;
      });
     
        "use strict";
        $( "#price-range" ).slider({
            range: true,
            min: 50,
            max: 200,
            values: [ 50, 100 ],
            slide: function( event, ui ) {
                $( "#amount" ).val( "TND " + ui.values[ 0 ] + " - TND " + ui.values[ 1 ] );
            }
        });
        $( "#amount" ).val( "TND " + $( "#price-range" ).slider( "values", 0 ) +
            " - TND " + $( "#price-range" ).slider( "values", 1 ) );
    });
</script>


<!-- Mirrored from limpidthemesdemo.com/Themeforest/html/cruise-demo/light/hotel-grid.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 06 Mar 2019 10:50:33 GMT -->
</html>