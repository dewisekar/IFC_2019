<!doctype html>
<html class="no-js" lang="">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <link rel="icon" type="image/png" href="./img/logoIFC2.png">
    <title>IFC 2019 - Dashboard</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- favicon
		============================================ -->
    <link rel="shortcut icon" type="image/x-icon" href="img/favicon.ico">
    <!-- Google Fonts
		============================================ -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,700,900" rel="stylesheet">
    <!-- Bootstrap CSS
		============================================ -->
    <link rel="stylesheet" href="../notika/css/bootstrap.min.css">
    <!-- font awesome CSS
		============================================ -->
    <link rel="stylesheet" href="../notika/css/font-awesome.min.css">
    <!-- owl.carousel CSS
		============================================ -->
    <link rel="stylesheet" href="../notika/css/owl.carousel.css">
    <link rel="stylesheet" href="../notika/css/owl.theme.css">
    <link rel="stylesheet" href="../notika/css/owl.transitions.css">
    <!-- meanmenu CSS
		============================================ -->
    <link rel="stylesheet" href="../notika/css/meanmenu/meanmenu.min.css">
    <!-- animate CSS
		============================================ -->
    <link rel="stylesheet" href="../notika/css/animate.css">
    <!-- normalize CSS
		============================================ -->
    <link rel="stylesheet" href="../notika/css/normalize.css">
	<!-- wave CSS
		============================================ -->
    <link rel="stylesheet" href="../notika/css/wave/waves.min.css">
    <link rel="stylesheet" href="../notika/css/wave/button.css">
    <!-- mCustomScrollbar CSS
		============================================ -->
    <link rel="stylesheet" href="../notika/css/scrollbar/jquery.mCustomScrollbar.min.css">
    <!-- Notika icon CSS
		============================================ -->
    <link rel="stylesheet" href="../notika/css/notika-custom-icon.css">
    <!-- main CSS
		============================================ -->
    <link rel="stylesheet" href="../notika/css/main.css">
    <!-- style CSS
		============================================ -->
    <link rel="stylesheet" href="../notika/style.css">
    <!-- responsive CSS
		============================================ -->
    <link rel="stylesheet" href="../notika/css/responsive.css">
    <link rel="stylesheet" href="../notika/css/jquery.dataTables.min.css">
    <!-- modernizr JS
		============================================ -->
    <script src="../notika/js/vendor/modernizr-2.8.3.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    @yield('css')
  </head>

<body>
    <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
    <!-- Start Header Top Area -->
    <div class="header-top-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                    <div class="logo-area">
                        <style>
                            @media screen and (max-width: 992px) {
                            #logo1 {
                              width: 40%;
                            }
                          }
                        </style>
                        <a href="../"> <img src="../img/logoIFC3.png" width="20%" id="logo1"> </a>
                    </div>
                </div>
                <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
                    <div class="header-top-menu">
                        <ul class="nav navbar-nav notika-top-nav">
                            <li class="nav-item"><a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();"  data-toggle="tooltip" data-placement="bottom" title="Log Out"> <span class="glyphicon glyphicon-log-out"></span></a>
                            </li>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">{{ csrf_field() }}</form>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Header Top Area -->
    @yield('content')
    <!--Start Footer-->
    <!-- Start Footer area-->
    <div class="footer-copyright-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="footer-copy-right">
                        <p>Copyright © 2018 </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Footer area-->
    <!-- jquery
		============================================ -->
    <script src="../notika/js/vendor/jquery-1.12.4.min.js"></script>
    <!-- bootstrap JS
		============================================ -->
    <script src="../notika/js/bootstrap.min.js"></script>
    <!-- wow JS
		============================================ -->
    <script src="../notika/js/wow.min.js"></script>
    <!-- price-slider JS
		============================================ -->
    <script src="../notika/js/jquery-price-slider.js"></script>
    <!-- owl.carousel JS
		============================================ -->
    <script src="../notika/js/owl.carousel.min.js"></script>
    <!-- scrollUp JS
		============================================ -->
    <script src="../notika/js/jquery.scrollUp.min.js"></script>
    <!-- meanmenu JS
		============================================ -->
    <script src="../notika/js/meanmenu/jquery.meanmenu.js"></script>
    <!-- counterup JS
		============================================ -->
    <script src="../notika/js/counterup/jquery.counterup.min.js"></script>
    <script src="../notika/js/counterup/waypoints.min.js"></script>
    <script src="../notika/js/counterup/counterup-active.js"></script>
    <!-- mCustomScrollbar JS
		============================================ -->
    <script src="../notika/js/scrollbar/jquery.mCustomScrollbar.concat.min.js"></script>
    <!-- sparkline JS
		============================================ -->
    <script src="../notika/js/sparkline/jquery.sparkline.min.js"></script>
    <script src="../notika/js/sparkline/sparkline-active.js"></script>
    <!-- flot JS
		============================================ -->
    <script src="../notika/js/flot/jquery.flot.js"></script>
    <script src="../notika/js/flot/jquery.flot.resize.js"></script>
    <script src="../notika/js/flot/flot-active.js"></script>
    <!-- knob JS
		============================================ -->
    <script src="../notika/js/knob/jquery.knob.js"></script>
    <script src="../notika/js/knob/jquery.appear.js"></script>
    <script src="../notika/js/knob/knob-active.js"></script>
    <!-- icheck JS
		============================================ -->
    <script src="../notika/js/icheck/icheck.min.js"></script>
    <script src="../notika/js/icheck/icheck-active.js"></script>
    <!--  wave JS
		============================================ -->
    <script src="../notika/js/wave/waves.min.js"></script>
    <script src="../notika/js/wave/wave-active.js"></script>
    <!--  Chat JS
		============================================ -->
    <script src="../notika/js/chat/jquery.chat.js"></script>
    <!--  todo JS
		============================================ -->
    <script src="../notika/js/todo/jquery.todo.js"></script>
    <!-- plugins JS
		============================================ -->
    <script src="../notika/js/plugins.js"></script>
    <script src="../notika/js/data-table/jquery.dataTables.min.js"></script>
    <script src="../notika/js/data-table/data-table-act.js"></script>
    <!-- main JS
		============================================ -->
    <script src="../notika/js/main.js"></script>

    @yield('js')
</body>

</html>