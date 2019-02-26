

<!DOCTYPE html>
<html lang="en" class="app">
<head>
    <meta charset="utf-8" />
    <title>Invoice</title>
    <meta name="description" content="app, web app, responsive, admin dashboard, admin, flat, flat ui, ui kit, off screen nav" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <link rel="stylesheet" href="{!! asset('css/velonic/app.v1.css') !!}" type="text/css" />
    <!--[if lt IE 9]> <script src="js/ie/html5shiv.js"></script> <script src="js/ie/respond.min.js"></script> <script src="js/ie/excanvas.js"></script> <![endif]-->
    <div id="google_translate_element" align="right"></div><script type="text/javascript">
        function googleTranslateElementInit() {
            new google.translate.TranslateElement({pageLanguage: 'en', layout: google.translate.TranslateElement.InlineLayout.SIMPLE, multilanguagePage: true}, 'google_translate_element');
        }
    </script><script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>

</head>
<body class="">
<div id="app">
<section class="vbox">
    <header class="bg-primary header header-md navbar navbar-fixed-top-xs box-shadow">
        <div class="navbar-header aside-md dk"> <a class="btn btn-link visible-xs" data-toggle="class:nav-off-screen" data-target="#nav"> <i class="fa fa-bars"></i> </a> <a href="" class="navbar-brand"><img src="images/logo.png" class="m-r-sm"></a> <a class="btn btn-link visible-xs" data-toggle="dropdown" data-target=".user"> <i class="fa fa-cog"></i> </a> </div>


        <ul class="nav navbar-nav navbar-right m-n hidden-xs nav-user user">

            <li class="dropdown"> <a href="#" class="dropdown-toggle" data-toggle="dropdown"> <span class="thumb-sm avatar pull-left"> <img src="images/a0.png"> </span>  <b class="caret"></b> </a>
                <ul class="dropdown-menu animated fadeInRight">
                    <span class="arrow top"></span>
                    <li> <a href="">Profile</a> </li>
                    <li> <a href="">Notifications </a> </li>
                    <li> <a href="">Help</a> </li>
                    <li class="divider"></li>
                    <li> <a href="" data-toggle="ajaxModal" >Logout</a> </li>
                </ul>
            </li>
        </ul>
    </header>
    <section>
        <section class="hbox stretch">
            <!-- .aside -->
            <aside class="bg-light aside-md hidden-print" id="nav">
                <section class="vbox">
                    <section class="w-f scrollable">
                        <div class="slim-scroll" data-height="auto" data-disable-fade-out="true" data-distance="0" data-size="10px" data-color="#333333">
                            <div class="clearfix wrapper dk nav-user hidden-xs">
                                <div class="dropdown"> <a href="#" class="dropdown-toggle" data-toggle="dropdown"> <span class="thumb avatar pull-left m-r"> <img src="images/a0.jpg"> <i class="on md b-black"></i> </span> <span class="hidden-nav-xs clear"> <span class="block m-t-xs"> <strong class="font-bold text-lt"></strong> <b class="caret"></b> </span> <span class="text-muted text-xs block"></span> </span> </a>
                                    <ul class="dropdown-menu animated fadeInRight m-t-xs">
                                        <span class="arrow top hidden-nav-xs"></span>

                                        <li> <a href="">Profile</a> </li>
                                        <li> <a href=""> Notifications </a> </li>
                                        <li> <a href="">Help</a> </li>
                                        <li class="divider"></li>
                                        <li> <a href="" data-toggle="ajaxModal" >Logout</a> </li>
                                    </ul>
                                </div>
                            </div>
                            <!-- nav -->
                            <nav class="nav-primary hidden-xs">
                                <div class="text-muted text-sm hidden-nav-xs padder m-t-sm m-b-sm">Start</div>
                                <ul class="nav nav-main" data-ride="collapse">
                                    <li> <a href="" class="auto"> <i class="i i-statistics icon"> </i> <span class="font-bold">Dashboard</span> </a> </li>

                                    <li class="active" > <a href="#" class="auto"> <span class="pull-right text-muted"> <i class="i i-circle-sm-o text"></i> <i class="i i-circle-sm text-active"></i> </span> <i class="i i-lab icon"> </i> <span class="font-bold">Account</span> </a>
                                        <ul class="nav dk">
                                            <li > <a href="" class="auto"> <i class="i i-dot"></i> <span>Downline/Earnings</span> </a> </li>



                                            <li class="active" > <a href="" class="auto"> <i class="i i-dot"></i> <span>Invoice/Account Status</span> </a> </li>
                                            <li> <a href="" class="auto"> <i class="i i-dot"></i> <span>Payments History</span> </a> </li>
                                        </ul>
                                    </li>

                                    <li > <a href="#" class="auto"> <span class="pull-right text-muted"> <i class="i i-circle-sm-o text"></i> <i class="i i-circle-sm text-active"></i> </span> <i class="i i-grid2 icon"> </i> <span class="font-bold">Help</span> </a>
                                        <ul class="nav dk">
                                            <li > <a href="" class="auto"> <b class="badge bg-success lt pull-right"></b> <i class="i i-dot"></i> <span>Notifications</span> </a> </li>
                                            <li > <a href="" class="auto"> <i class="i i-dot"></i> <span>Contact</span> </a> </li>
                                        </ul>
                                    </li>
                                </ul>
                                <div class="line dk hidden-nav-xs"></div>


                            </nav>
                            <!-- / nav -->
                        </div>
                    </section>
                    <footer class="footer hidden-xs no-padder text-center-nav-xs"> <a href="" data-toggle="ajaxModal" class="btn btn-icon icon-muted btn-inactive pull-right m-l-xs m-r-xs hidden-nav-xs"> <i class="i i-logout"></i> </a> <a href="#nav" data-toggle="class:nav-xs" class="btn btn-icon icon-muted btn-inactive m-l-xs m-r-xs"> <i class="i i-circleleft text"></i> <i class="i i-circleright text-active"></i> </a> </footer>
                </section>
            </aside>
            <!-- /.aside -->
            <section id="content">
                <section class="vbox bg-white">
                    <header class="header b-b b-light hidden-print">
                        <button href="#" class="btn btn-sm btn-info pull-right" >Print Invoice</button>
                        <p>Invoice</p>
                    </header>
@yield('content')

                </section>
                <a href="#" class="hide nav-off-screen-block" data-toggle="class:nav-off-screen" data-target="#nav"></a> </section>
        </section>
    </section>
</section>
<!-- Bootstrap -->
<!-- App -->
<script src="{{ asset('js/app.js') }}"></script>
<script src="js/app.v1.js"></script>
<script src="js/app.plugin.js"></script>
</div>
</body>
</html>