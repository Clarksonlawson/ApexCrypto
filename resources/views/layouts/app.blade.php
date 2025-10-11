<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    {{-- <title>{{ config('app.name') }} | Crypto Loan Exchange</title> --}}
    <title>@yield('title', config('app.name'))</title>
    <!-- Style CSS -->
    <link rel="stylesheet" href="{{ asset('app/dist/app.css') }}">
    <link rel="stylesheet" href="{{ asset('app/dist/magnific-popup.css') }}">
    <link rel="stylesheet" href="https://unpkg.com/swiper@12.0.2/swiper-bundle.min.css" />
    <!-- End Style CSS -->

    <link rel="shortcut icon" href="{{ asset('assets/images/logo/favicon.png') }}">
    <link rel="apple-touch-icon-precomposed" href="{{ asset('assets/images/logo/favicon.png') }}">
</head>

<body class="body header-fixed home-2">
    <!-- Header -->
    @include('partials.header')

    <!-- Page Content -->
    @yield('content')

    <!-- Footer -->
    @include('partials.footer')

    <!-- JS Scripts -->
    <script src="{{ asset('app/js/aos.js') }}"></script>
    <script src="{{ asset('app/js/jquery.min.js') }}"></script>
    <script src="{{ asset('app/js/jquery.easing.js') }}"></script>
    <script src="{{ asset('app/js/popper.min.js') }}"></script>
    <script src="{{ asset('app/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('app/js/app.js') }}"></script>
    <script src="{{ asset('app/js/jquery.peity.min.js') }}"></script>
    <script src="{{ asset('app/js/apexcharts.js') }}"></script>
    <script src="{{ asset('app/js/switchmode.js') }}"></script>
    <script src="{{ asset('app/js/jquery.magnific-popup.min.js') }}"></script>

    <!-- Swiper JS (external CDN) -->
    <script src="https://unpkg.com/swiper@12.0.2/swiper-bundle.min.js"></script>
    <script src="{{ asset('app/js/swiper.js') }}"></script>
    <script>
        var swiper = new Swiper(".mySwiper", {
            spaceBetween: 10,
            slidesPerView: 3,
            freeMode: true,
            watchSlidesProgress: true,
        });
        var swiper2 = new Swiper(".mySwiper2", {
            spaceBetween: 10,

            thumbs: {
            swiper: swiper,
            },
        });

        var swiper3 = new Swiper(".swiper-partner", {
            breakpoints: {
            0: {
                slidesPerView: 2,
                spaceBetween: 30,
            },
            768: {
                slidesPerView: 4,
                spaceBetween: 30,
            },
            1024: {
                slidesPerView: 4,
                spaceBetween: 60,
            },
            },
            slidesPerView: 4,
        });
        </script>
    @stack('scripts')
</body>
</html>
