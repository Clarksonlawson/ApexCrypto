
<!DOCTYPE html>
<!--[if IE 8 ]><html class="ie" xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-US" lang="en-US"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!-->
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-US" lang="en-US">
<!--<![endif]-->

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
    <style>
.loan-card-container {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(330px, 1fr));
    gap: 1.5rem;
    padding: 2rem 0;
}

/* Base card */
.loan-card {
    background: rgba(22, 19, 38, 0.8);
    border-radius: 18px;
    color: #e9e9f1;
    position: relative;
    overflow: hidden;
    box-shadow: 0 4px 18px rgba(0, 0, 0, 0.4);
    border: 1px solid rgba(255, 255, 255, 0.05);
    transition: transform 0.3s ease, box-shadow 0.3s ease;
}
.loan-card:hover {
    transform: translateY(-6px);
    box-shadow: 0 10px 30px rgba(0, 0, 0, 0.6);
}
.loan-card-inner {
    padding: 1.8rem;
    backdrop-filter: blur(10px);
}

/* Regular loan card styling */
.loan-card-header {
    display: flex;
    justify-content: space-between;
    align-items: center;
}
.loan-status {
    font-size: 0.8rem;
    text-transform: uppercase;
    letter-spacing: 1.5px;
    font-weight: 600;
    opacity: 0.85;
    color: #7dd3fc;
}
.loan-id {
    font-size: 1rem;
    font-weight: 700;
    margin-top: 0.2rem;
    color: #f1f1f1;
}
.crypto-icon img {
    width: 36px;
    height: 36px;
    filter: drop-shadow(0 0 8px rgba(255, 255, 255, 0.3));
}

.loan-card-body {
    margin-top: 2rem;
}
.loan-amount {
    font-size: 1.8rem;
    font-weight: 800;
    letter-spacing: 1px;
    color: #ffffff;
}
.loan-subinfo {
    display: flex;
    justify-content: space-between;
    font-size: 0.9rem;
    margin-top: 0.8rem;
    color: #b3b3c5;
}
.loan-interest {
    margin-top: 1.2rem;
    font-size: 0.9rem;
    color: #bcbcd2;
}
.loan-interest strong {
    margin-left: 6px;
    font-weight: 700;
    color: #86efac;
}
.loan-card-footer {
    margin-top: 2rem;
    display: flex;
    justify-content: space-between;
    align-items: flex-end;
    font-size: 0.85rem;
    color: #b3b3c5;
}
.loan-card-footer span {
    font-size: 0.75rem;
    opacity: 0.6;
    display: block;
}
.loan-ticker div,
.loan-date div {
    font-weight: 700;
    color: #f8fafc;
}

/* Shiny light streak */
.loan-card::after {
    content: "";
    position: absolute;
    top: -40%;
    left: -50%;
    width: 60%;
    height: 200%;
    background: linear-gradient(120deg, rgba(255,255,255,0.05), transparent);
    transform: skewX(-20deg);
    transition: 0.7s;
}
.loan-card:hover::after {
    left: 130%;
}

/* Empty state card */
.new-loan-card {
    display: flex;
    justify-content: center;
    align-items: center;
    text-align: center;
    background: rgba(22, 19, 38, 0.8);
    border: 1px dashed rgba(255, 255, 255, 0.15);
    transition: background 0.3s ease;
}
.new-loan-card:hover {
    background: rgba(22, 19, 38, 0.9);
}
.new-loan-inner {
    padding: 3rem 2rem;
}
.new-loan-icon {
    margin-bottom: 1rem;
}
.new-loan-text h3 {
    color: #ffffff;
    font-weight: 700;
    margin-bottom: 0.4rem;
}
.new-loan-text p {
    color: #b3b3c5;
    font-size: 0.9rem;
    margin-bottom: 1.4rem;
}
.new-loan-btn {
    display: inline-block;
    background: linear-gradient(135deg, #7dd3fc, #86efac);
    color: #111827;
    font-weight: 600;
    padding: 0.8rem 1.5rem;
    border-radius: 10px;
    text-decoration: none;
    transition: all 0.3s ease;
}
.new-loan-btn:hover {
    background: linear-gradient(135deg, #86efac, #7dd3fc);
    transform: translateY(-2px);
}

    </style>
</head>

<body>

    <!-- #wrapper -->
    <div id="wrapper">
        <div id="page" class="">
            <div class="layout-wrap loader-on">
                 @include('auth.v2.pages.dashboard.partials.preloader')
                <!-- /preload -->
                <!-- section-menu-left -->
                @include('auth.v2.pages.dashboard.partials.left-nav')
                <!-- /section-menu-left -->
                <!-- section-content-right -->
                <div class="section-content-right">
                    <!-- header-dashboard -->
                    <div class="header-dashboard">
                         @include('auth.v2.pages.dashboard.partials.right-nav')
                    </div>
                    <!-- /header-dashboard -->
                    <!-- main-content -->
                    <div class="main-content">
                        <!-- main-content-wrap -->
                        <div class="main-content-inner">
                            <!-- main-content-wrap -->
                            <div class="main-content-wrap">
                                <div class="tf-container">
                                   @yield('content')
                                </div>
                            </div>
                            <!-- /main-content-wrap -->
                        </div>
                        <!-- /main-content-wrap -->
                        
                    </div>
                    <!-- /main-content -->
                </div>
            </div>
        </div>
        <!-- /#page -->
    </div>
    <!-- /#wrapper -->

    <!-- Javascript -->
    <script src="{{asset('auth/js/jquery.min.js')}}"></script>
    <script src="{{asset('auth/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('auth/js/swiper.js')}}"></script>
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