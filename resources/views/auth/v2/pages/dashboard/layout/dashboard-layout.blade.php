
<!DOCTYPE html>
<!--[if IE 8 ]><html class="ie" xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-US" lang="en-US"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!-->
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-US" lang="en-US">
<!--<![endif]-->


<!-- Mirrored from themesflat.co/html/critso-admin/my-wallet.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 14 Oct 2025 18:44:29 GMT -->
<head>
    <!-- Basic Page Needs -->
    <meta charset="utf-8">
    <!--[if IE]><meta http-equiv='X-UA-Compatible' content='IE=edge,chrome=1'><![endif]-->
    <title>@yield('title', config('app.name'))</title>

    <meta name="author" content="themesflat.com">

    <!-- Mobile Specific Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <!-- Theme Style -->
    <link rel="stylesheet" type="text/css" href="{{asset('auth/css/animate.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('auth/css/animation.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('auth/css/bootstrap.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('auth/css/bootstrap-select.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('auth/css/swiper-bundle.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('auth/css/styles.css')}}">



    <!-- Font -->
    <link rel="stylesheet" href="{{asset('auth/font/fonts.css')}}">

    <!-- Icon -->
    <link rel="stylesheet" href="{{asset('auth/icon/style.css')}}">

    <!-- Favicon and Touch Icons  -->
    <link rel="shortcut icon" href="i{{asset('auth/images/favicon.png')}}">
    <link rel="apple-touch-icon-precomposed" href="{{asset('auth/images/favicon.png')}}">

</head>

<body>

    <!-- #wrapper -->
    <div id="wrapper">
        <div id="page" class="">
            <div class="layout-wrap loader-on">
                @include('auth.v2.pages.dashboard.partials.preloader')
                @include('auth.v2.pages.dashboard.partials.left-nav')
                @include('auth.v2.pages.dashboard.partials.right-nav')
            </div>
            @yield('content')
        </div>
        <!-- /#page -->
    </div>
    <!-- /#wrapper -->

    <!-- Javascript -->
    <script src="{{asset('auth/js/jquery.min.js')}}"></script>
    <script src="{{asset('auth/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('auth/js/swiper-bundle.min.js')}}"></script>
    <script src="{{asset('auth/js/carousel.js')}}"></script>
    <script src="{{asset('auth/js/bootstrap-select.min.js')}}"></script>
    <script src="{{asset('auth/js/apexcharts/apexcharts.js')}}"></script>
    <script src="{{asset('auth/js/apexcharts/candlestick-2.js')}}"></script>
    <script src="{{asset('auth/js/apexcharts/donut-1.js')}}"></script>
    <!-- <script src="js/switcher.js"></script> -->
    <script defer src="{{asset('auth/js/theme-settings.js')}}"></script>
    <script src="{{asset('auth/js/main.js')}}"></script>

</body>
</html>