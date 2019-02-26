<!DOCTYPE html>
<!-- saved from url=(0041)http://coderthemes.com/velonic_3.0/admin/ -->
<html lang="en" class=" js flexbox flexboxlegacy canvas canvastext webgl no-touch geolocation postmessage
websqldatabase indexeddb hashchange history draganddrop websockets rgba hsla multiplebgs backgroundsize borderimage
borderradius boxshadow textshadow opacity cssanimations csscolumns cssgradients cssreflections csstransforms
csstransforms3d csstransitions fontface generatedcontent video audio localstorage sessionstorage webworkers
applicationcache svg inlinesvg smil svgclippaths"><head><meta http-equiv="Content-Type" content="text/html;
 charset=UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="A fully featured admin theme which can be used to build CRM, CMS, etc.">
    <meta name="author" content="Coderthemes">

    <title>STYLE PALEETEe</title>

    <!-- Google-Fonts -->
    <link rel="stylesheet" href="{!!asset('css/velonic/css')!!}"/>

{{--<link rel="stylesheet" href="{!!asset('css/main.min.css')!!}"/>
--}}
<!-- Bootstrap core CSS -->

    <link rel="stylesheet" href="{!!asset('css/velonic/bootstrap.min.css')!!}"/>
    <link rel="stylesheet" href="{!!asset('css/velonic/bootstrap-reset.css')!!}"/>
    <link rel="stylesheet" href="{{ asset('css/velonic/styles.css') }}" >

    <!--Animation css-->

    <link rel="stylesheet" href="{!!asset('css/velonic/animate.css')!!}"/>
    <!--Icon-fonts css-->


    <!--Morris Chart CSS -->


    <link rel="stylesheet" href="{!!asset('css/velonic/morris.css')!!}"/>
    <link rel="stylesheet" href="{!!asset('css/velonic/sweet-alert.min.css')!!}"/>

    <!-- sweet alerts -->


    <!-- Custom styles for this template -->


    <link rel="stylesheet" href="{!!asset('css/velonic/style.css')!!}"/>
    <link rel="stylesheet" href="{!!asset('css/velonic/helper.css')!!}"/>
    <link rel="stylesheet" href="{!!asset('css/velonic/style-responsive.css')!!}"/>

    <!-- Material css -->


    <!--[if lt IE 9]>
    <![endif]-->


    <script>
        (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
            (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
            m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
        })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

        ga('create', 'UA-62751496-1', 'auto');
        ga('send', 'pageview');

    </script>

    <style type="text/css">.jqstooltip { position: absolute;left: 0px;top: 0px;visibility: hidden;background: rgb(0, 0, 0) ;background-color: rgba(0,0,0,0.6);filter:progid:DXImageTransform.Microsoft.gradient(startColorstr=#99000000, endColorstr=#99000000);-ms-filter: "progid:DXImageTransform.Microsoft.gradient(startColorstr=#99000000, endColorstr=#99000000)";color: white;font: 10px arial, san serif;text-align: left;white-space: nowrap;padding: 5px;border: 1px solid white;z-index: 10000;}.jqsfield { color: white;font: 10px arial, san serif;text-align: left;}</style></head>


<body class="  pace-done" style="">
<div id="app">
    <div class="pace  pace-inactive">
        <div class="pace-progress" data-progress-text="100%" data-progress="99" style="transform: translate3d(100%, 0px, 0px);">
            <div class="pace-progress-inner"></div>
        </div>
        <div class="pace-activity"></div></div>

    <!-- Aside Start-->
    <aside class="left-panel" tabindex="5002" style="overflow: hidden; outline: none;">

        <!-- brand -->
        <div class="logo">
            <a href="" class="logo-expanded">
                <img src="{{ asset('css/velonic/stylepalette.jpg') }}" alt="logo">
                <span class="nav-label"></span>
            </a>
        </div>
        <!-- / brand -->

        <!-- Navbar Start -->
        <nav class="navigation">
            <ul class="list-unstyled">
                <li class="has-submenu active"><a href="{{route('dashboard')}}"><i class="ion-home"></i> <span class="nav-label">Home</span></a>
                </li>
                <li class="has-submenu"><a href="{{route('stock.category')}}"><i class="ion-flask"></i> <span class="nav-label">Category</span></a>
                </li>
                <li class="has-submenu"><a href=""><i class="ion-settings"></i> <span class="nav-label">Product</span></a>
                </li>
                <li class="has-submenu"><a href="{{route('stock.customer')}}"><i class="ion-compose"></i> <span class="nav-label">Customer</span></a>
                </li>
            </ul>
        </nav>

    </aside>
    <!-- Aside Ends-->


    <!--Main Content Start -->
    <section class="content">

        <!-- Header -->
        <header-view></header-view>
        <!-- Header Ends -->


        <!-- Page Content Start -->
        <!-- ================== -->

        <div class="wraper container-fluid">
            <header-down></header-down> <!-- End row -->

            <div class="row">
                <div class="col-lg-8">
                @yield('content')
                <!-- /write up UP -->
                </div>
            </div>
        </div>
        <!-- Page Content Ends -->
        <!-- ================== -->

        <!-- Footer Start -->
        <footer class="footer">
            2018 © raylinks.
        </footer>
        <!-- Footer Ends -->

    </section>
    <!-- Main Content Ends -->



    <!-- js placed at the end of the document so the pages load faster -->




</div>
<script src="{{asset('css/velonic/jquery.js')}}"></script>
<script src="{{asset('css/velonic/bootstrap.min.js')}}"></script>



<script src="{{asset('css/velonic/modernizr.min.js')}}"></script>
<script src="{{asset('css/velonic/pace.min.js')}}"></script>
<script src="{{asset('css/velonic/wow.min.js')}}"></script>
<script src="{{asset('css/velonic/jquery.scrollTo.min.js')}}"></script>


<script src="{{asset('css/velonic/jquery.counterup.min.js')}}"></script>
<script src="{{asset('css/velonic/moment-2.2.1.js')}}"></script>
<script src="{{asset('css/velonic/waypoints.min.js')}}"></script>
<!-- Counter-up -->


<!-- EASY PIE CHART JS -->



<!--C3 Chart-->
<script src="{{asset('css/velonic/d3.v3.min.js')}}"></script>

<script src="{{asset('css/velonic/c3.js')}}"></script>

<!--Morris Chart-->
<script src="{{asset('css/velonic/morris.min.js')}}"></script>


<!-- sparkline -->
<script src="{{asset('css/velonic/bootstrap.min.js')}}"></script>

<script src="{{asset('css/velonic/raphael.min.js')}}"></script>
<script src="{{asset('css/velonic/jquery.sparkline.min.js')}}"></script>
<script src="{{asset('css/velonic/chart-sparkline.js')}}"></script>


<!-- Chat -->


<script src="{{asset('css/velonic/sweet-alert.min.js')}}"></script>
<!-- Todo -->
<script src="{{asset('css/velonic/jquery.todo.js')}}"> </script>


<script type="text/javascript">
    /* ==============================================
         Counter Up
         =============================================== */
    jQuery(document).ready(function($) {
        $('.counter').counterUp({
            delay: 100,
            time: 1200
        });
    });
</script>

<script type="text/javascript" src="{{ asset('js/app.js') }}" ></script>

</body>

</html>