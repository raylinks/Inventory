<!DOCTYPE html>
<!-- saved from url=(0041)http://coderthemes.com/velonic_3.0/admin/ -->
<html lang="en" class=" js flexbox flexboxlegacy canvas canvastext webgl no-touch geolocation postmessage websqldatabase indexeddb hashchange history draganddrop websockets rgba hsla multiplebgs backgroundsize borderimage borderradius boxshadow textshadow opacity cssanimations csscolumns cssgradients cssreflections csstransforms csstransforms3d csstransitions fontface generatedcontent video audio localstorage sessionstorage webworkers applicationcache svg inlinesvg smil svgclippaths"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="A fully featured admin theme which can be used to build CRM, CMS, etc.">
    <meta name="author" content="Coderthemes">
 {{--   <meta name="csrf-token" content="{{ csrf_token() }}">
    <script>window.Laravel = {csrfToken: '{{ csrf_token() }}'} </script>
--}}
    <link rel="shortcut icon" href="">

    <title>STYLE PALEETEe</title>

    <!-- Google-Fonts -->

    <link rel="stylesheet" href="{!!asset('css/velonic/css')!!}"/>

{{--<link rel="stylesheet" href="{!!asset('css/main.min.css')!!}"/>
--}}
    <!-- Bootstrap core CSS -->

    <link rel="stylesheet" href="{!!asset('css/velonic/bootstrap.min.css')!!}"/>
    <link rel="stylesheet" href="{!!asset('css/velonic/bootstrap-reset.css')!!}"/>


    <!--Animation css-->

    <link rel="stylesheet" href="{!!asset('css/velonic/animate.css')!!}"/>
    <!--Icon-fonts css-->



    <!--Morris Chart CSS -->



    <link rel="stylesheet" href="{!!asset('css/velonic/sweet-alert.min.css')!!}"/>
    <link rel="stylesheet" href="{!!asset('css/velonic/morris.css')!!}"/>

    <!-- sweet alerts -->


    <!-- Custom styles for this template -->


    <link rel="stylesheet" href="{!!asset('css/velonic/style.css')!!}"/>
    <link rel="stylesheet" href="{!!asset('css/velonic/helper.css')!!}"/>
    <link rel="stylesheet" href="{!!asset('css/velonic/style-responsive.css')!!}"/>



    <!-- Material css -->


    <!--[if lt IE 9]>
    <script src="{{asset('css/velonic/respond.min.js')}}"></script>
    <script src="{{asset('css/velonic/html5shiv.js')}}"></script>

    <![endif]-->


    <script>
        (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
            (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
            m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
        })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

        ga('create', 'UA-62751496-1', 'auto');
        ga('send', 'pageview');

    </script>

    <style type="text/css">.jqstooltip { position: absolute;left: 0px;top: 0px;visibility: hidden;background:
                rgb(0, 0, 0);background-color: rgba(0,0,0,0.6);filter:progid:DXImageTransform.Microsoft.gradient(startColorstr=#99000000, endColorstr=#99000000);-ms-filter: "progid:DXImageTransform.Microsoft.gradient(startColorstr=#99000000, endColorstr=#99000000)";color: white;font: 10px arial, san serif;text-align: left;white-space: nowrap;padding: 5px;border: 1px solid white;z-index: 10000;}.jqsfield { color: white;font: 10px arial, san serif;text-align: left;}</style></head>


<body class="  pace-done" style="">
<div id="app">
<div class="pace  pace-inactive">
            <div class="pace-progress" data-progress-text="100%" data-progress="99" style="transform: translate3d(100%, 0px, 0px);">
                    <div class="pace-progress-inner"></div>
            </div>
    <div class="pace-activity"></div></div>




    <side-view></side-view>


<!--Main Content Start -->
    <section class="content">


<header-view></header-view>

    <!-- Page Content Start -->
    <!-- ================== -->

    <div class="wraper container-fluid">
        <!-- end row -->
        <header-down></header-down>



        <div class="row">
            <div class="col-lg-8">
                {{--@if(session()->has('notif'))
                    <div class="row">
                        <div class="alert alert-success">
                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                            <strong>Notification</strong> {{session()->get('notif')}}
                        </div>
                    </div>
                    @endif--}}

    @yield('content')
                <!-- /write up UP -->




            </div> <!-- end col -->

            <div class="col-lg-4">
                <div class="portlet"><!-- /primary heading -->
                    <div class="portlet-heading">
                        <h3 class="portlet-title text-dark text-uppercase">
                            Yearly Sales Report
                        </h3>
                        <div class="portlet-widgets">
                            <a href="javascript:" data-toggle="reload"><i class="ion-refresh"></i></a>
                            <span class="divider"></span>
                            <a data-toggle="collapse" data-parent="#accordion1" href=""><i class="ion-minus-round"></i></a>
                            <span class="divider"></span>
                            <a href="" data-toggle="remove"><i class="ion-close-round"></i></a>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                    <div id="portlet2" class="panel-collapse collapse in">
                        <div class="portlet-body">
                            <div id="morris-line-example" style="height: 200px; position: relative;"><svg height="200" version="1.1" width="313" xmlns="" style="overflow: hidden; position: relative;"><desc style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">Created with RaphaĂŤl 2.1.0</desc><defs style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></defs><text x="32.84375" y="161" text-anchor="end" font="10px &quot;Arial&quot;" stroke="none" fill="#888888" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: end; font-style: normal; font-variant: normal; font-weight: normal; font-stretch: normal; font-size: 12px; line-height: normal; font-family: sans-serif;" font-size="12px" font-family="sans-serif" font-weight="normal"><tspan dy="4" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">0</tspan></text><path fill="none" stroke="#aaaaaa" d="M45.34375,161H288" stroke-width="0.5" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></path><text x="32.84375" y="127" text-anchor="end" font="10px &quot;Arial&quot;" stroke="none" fill="#888888" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: end; font-style: normal; font-variant: normal; font-weight: normal; font-stretch: normal; font-size: 12px; line-height: normal; font-family: sans-serif;" font-size="12px" font-family="sans-serif" font-weight="normal"><tspan dy="4" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">25</tspan></text><path fill="none" stroke="#aaaaaa" d="M45.34375,127H288" stroke-width="0.5" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></path><text x="32.84375" y="93" text-anchor="end" font="10px &quot;Arial&quot;" stroke="none" fill="#888888" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: end; font-style: normal; font-variant: normal; font-weight: normal; font-stretch: normal; font-size: 12px; line-height: normal; font-family: sans-serif;" font-size="12px" font-family="sans-serif" font-weight="normal"><tspan dy="4" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">50</tspan></text><path fill="none" stroke="#aaaaaa" d="M45.34375,93H288" stroke-width="0.5" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></path><text x="32.84375" y="58.999999999999986" text-anchor="end" font="10px &quot;Arial&quot;" stroke="none" fill="#888888" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: end; font-style: normal; font-variant: normal; font-weight: normal; font-stretch: normal; font-size: 12px; line-height: normal; font-family: sans-serif;" font-size="12px" font-family="sans-serif" font-weight="normal"><tspan dy="3.999999999999986" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">75</tspan></text><path fill="none" stroke="#aaaaaa" d="M45.34375,58.999999999999986H288" stroke-width="0.5" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></path><text x="32.84375" y="25" text-anchor="end" font="10px &quot;Arial&quot;" stroke="none" fill="#888888" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: end; font-style: normal; font-variant: normal; font-weight: normal; font-stretch: normal; font-size: 12px; line-height: normal; font-family: sans-serif;" font-size="12px" font-family="sans-serif" font-weight="normal"><tspan dy="4" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">100</tspan></text><path fill="none" stroke="#aaaaaa" d="M45.34375,25H288" stroke-width="0.5" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></path><text x="288" y="173.5" text-anchor="middle" font="10px &quot;Arial&quot;" stroke="none" fill="#888888" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: middle; font-style: normal; font-variant: normal; font-weight: normal; font-stretch: normal; font-size: 12px; line-height: normal; font-family: sans-serif;" font-size="12px" font-family="sans-serif" font-weight="normal" transform="matrix(1,0,0,1,0,7)"><tspan dy="4" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">2018</tspan></text><text x="207.1883838959854" y="173.5" text-anchor="middle" font="10px &quot;Arial&quot;" stroke="none" fill="#888888" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: middle; font-style: normal; font-variant: normal; font-weight: normal; font-stretch: normal; font-size: 12px; line-height: normal; font-family: sans-serif;" font-size="12px" font-family="sans-serif" font-weight="normal" transform="matrix(1,0,0,1,0,7)"><tspan dy="4" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">2014</tspan></text><text x="126.37676779197079" y="173.5" text-anchor="middle" font="10px &quot;Arial&quot;" stroke="none" fill="#888888" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: middle; font-style: normal; font-variant: normal; font-weight: normal; font-stretch: normal; font-size: 12px; line-height: normal; font-family: sans-serif;" font-size="12px" font-family="sans-serif" font-weight="normal" transform="matrix(1,0,0,1,0,7)"><tspan dy="4" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">2013</tspan></text><text x="45.34375" y="173.5" text-anchor="middle" font="10px &quot;Arial&quot;" stroke="none" fill="#888888" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: middle; font-style: normal; font-variant: normal; font-weight: normal; font-stretch: normal; font-size: 12px; line-height: normal; font-family: sans-serif;" font-size="12px" font-family="sans-serif" font-weight="normal" transform="matrix(1,0,0,1,0,7)"><tspan dy="4" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">2012</tspan></text><path fill="none" stroke="#3bc0c3" d="M45.34375,72.6C65.6020044479927,81.1,106.1185133439781,106.6,126.37676779197079,106.6C146.57967181797443,106.6,186.98547986998176,81.1,207.1883838959854,72.6C227.39128792198903,64.1,267.79709597399636,47.099999999999994,288,38.599999999999994" stroke-width="3" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></path><path fill="none" stroke="#1a2942" d="M45.34375,58.999999999999986C65.6020044479927,67.49999999999999,106.1185133439781,93,126.37676779197079,93C146.57967181797443,93,186.98547986998176,67.49999999999999,207.1883838959854,58.999999999999986C227.39128792198903,50.499999999999986,267.79709597399636,33.5,288,25" stroke-width="3" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></path><circle cx="45.34375" cy="72.6" r="4" fill="#3bc0c3" stroke="#ffffff" stroke-width="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle><circle cx="126.37676779197079" cy="106.6" r="4" fill="#3bc0c3" stroke="#ffffff" stroke-width="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle><circle cx="207.1883838959854" cy="72.6" r="4" fill="#3bc0c3" stroke="#ffffff" stroke-width="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle><circle cx="288" cy="38.599999999999994" r="7" fill="#3bc0c3" stroke="#ffffff" stroke-width="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle><circle cx="45.34375" cy="58.999999999999986" r="4" fill="#1a2942" stroke="#ffffff" stroke-width="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle><circle cx="126.37676779197079" cy="93" r="4" fill="#1a2942" stroke="#ffffff" stroke-width="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle><circle cx="207.1883838959854" cy="58.999999999999986" r="4" fill="#1a2942" stroke="#ffffff" stroke-width="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle><circle cx="288" cy="25" r="7" fill="#1a2942" stroke="#ffffff" stroke-width="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle></svg><div class="morris-hover morris-default-style" style="left: 225px; top: 35px;"><div class="morris-hover-row-label">2018</div><div class="morris-hover-point" style="color: #1a2942">
                                        Series A:
                                        100
                                    </div><div class="morris-hover-point" style="color: #3bc0c3">
                                        Series B:
                                        90
                                    </div></div></div>
                            <div class="row text-center m-t-30">
                                <div class="col-sm-4">
                                    <h4>$ 86,956</h4>
                                    <small class="text-muted"> This Year's Report</small>
                                </div>
                                <div class="col-sm-4">
                                    <h4>$ 86,69</h4>
                                    <small class="text-muted">Weekly Sales Report</small>
                                </div>
                                <div class="col-sm-4">
                                    <h4>$ 948,16</h4>
                                    <small class="text-muted">Yearly Sales Report</small>
                                </div>

                            </div>
                        </div>
                    </div>
                </div> <!-- /Portlet -->
                <div class="tile-stats white-bg">
                    <div class="col-sm-8">
                        <div class="status">
                            <h3 class="m-t-15">61.5%</h3>
                            <p>US Dollar Share</p>
                        </div>
                    </div>
                    <div class="col-sm-4 m-t-20">
                        <span class="sparkpie-big"><canvas width="94" height="50" style="display: inline-block; width: 94px; height: 50px; vertical-align: top;"></canvas></span>
                    </div>
                </div>
            </div>
        </div> <!-- End row -->





        <div class="row">
            <div class="col-lg-4">
                <!-- FIRST write up -->

            </div> <!-- end col-->

            <div class="col-lg-4">

                <!-- second write up -->


            </div> <!-- end col -->

            <div class="col-lg-4">

                <team-members></team-members>
            </div> <!-- end col -->
        </div> <!-- End row -->


    </div>
    <!-- Page Content Ends -->
    <!-- ================== -->

    <!-- Footer Start -->
    <footer class="footer">
        2018 © Raylinks.
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
<script src="{{asset('css/velonic/vendors.js')}}"></script>

<script src="{{asset('css/velonic/jquery.counterup.min.js')}}"></script>
<script src="{{asset('css/velonic/moment-2.2.1.js')}}"></script>
<script src="{{asset('css/velonic/waypoints.min.js')}}"></script>
<!-- Counter-up -->


<!-- EASY PIE CHART JS -->



<!--C3 Chart-->
<script src="{{asset('css/velonic/d3.v3.min.js')}}"></script>

<script src="{{asset('css/velonic/raphael.min.js')}}"></script>
<script src="{{asset('css/velonic/wow.min.js')}}"></script>
<script src="{{asset('css/velonic/waypoints.min.js')}}"></script>


<!--Morris Chart-->
<script src="{{asset('css/velonic/morris.min.js')}}"></script>


<!-- sparkline -->
<script src="{{asset('css/velonic/raphael.min.js')}}"></script>
<script src="{{asset('css/velonic/jquery.sparkline.min.js')}}"></script>
<script src="{{asset('css/velonic/jquery.app.js')}}"></script>
<script src="{{asset('css/velonic/jquery.js')}}"></script>
<script src="{{asset('css/velonic/jquery.counterup.min.js')}}"></script>
<script src="{{asset('css/velonic/c3.js')}}"></script>

<script src="{{asset('css/velonic/chart-sparkline.js')}}"></script>

<!-- Chat -->
<script src="{{asset('css/velonic/analytics.js')}}"></script>
<script src="{{asset('css/velonic/bootstrap.min.js')}}"></script>


<script src="{{asset('css/velonic/sweet-alert.min.js')}}"></script>
<script src="{{asset('css/velonic/jquery.chat.js')}}"></script>
<script src="{{asset('css/velonic/jquery.dashboard.js')}}"></script>
<script src="{{asset('css/velonic/jquery.todo.js')}}"> </script>

<!-- Todo -->



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
<script src="{{ asset('js/app.js') }}"></script>
</body>

</html>