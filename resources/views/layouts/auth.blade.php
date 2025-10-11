<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    {{-- <title>{{ config('app.name') }} | Crypto Loan Exchange</title> --}}
    <title>@yield('title', config('app.name'))</title>
    <script src="https://cdn.jsdelivr.net/npm/@hotwired/turbo@7.3.0/dist/turbo.es2017-umd.js"></script>
    <!-- Style CSS -->
    <link rel="stylesheet" href="{{ asset('app/dist/app.css') }}">
    <link rel="stylesheet" href="{{ asset('app/dist/magnific-popup.css') }}">
    <link rel="stylesheet" href="https://unpkg.com/swiper@12.0.2/swiper-bundle.min.css" />
     <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/intl-tel-input@25.11.3/build/css/intlTelInput.css">  
    <!-- Turbo Drive (Hotwired Turbo) -->
     <!-- End Style CSS -->
    <style>
        .auth-form {
        transition: all 0.3s ease-in-out;

         box-shadow:
        /* Inner shadow, to create a subtle dark border */
        inset 0 0 0 1px rgba(0, 0, 0, 0.05),

        /* A light, soft shadow for a general lift effect */
        0 1px 2px rgba(0, 0, 0, 0.05),

        /* A deeper, more pronounced shadow for significant lift */
        0 8px 30px rgba(0, 0, 0, 0.1);
        }

        .shadow-deep {
            transition: all 0.3s ease-in-out;

            /* Inner subtle border */
            box-shadow:
                inset 0 0 0 1px rgba(0, 0, 0, 0.08),    /* slightly darker inner border */
                
                /* Soft general lift */
                0 4px 8px rgba(0, 0, 0, 0.12),           /* darker than before */
                
                /* Deep pronounced lift */
                0 20px 60px rgba(0, 0, 0, 0.25);         /* heavier and darker */
            }

            .shadow-deep:hover {
            transform: translateY(-5px);
            box-shadow:
                inset 0 0 0 1px rgba(0, 0, 0, 0.08),
                0 6px 12px rgba(0, 0, 0, 0.15),
                0 30px 80px rgba(0, 0, 0, 0.35);         /* more dramatic lift on hover */
            }
                /* === Form Styling === */
            .custom-input {
            border: 1px solid #ddd;
            border-radius: 8px;
            padding: 10px 14px;
            transition: all 0.2s ease-in-out;
            box-shadow: none !important;
            outline: none !important;
            }

            .custom-input:focus {
            border-color: #000; /* black focus border */
            box-shadow: 0 0 0 2px rgba(0, 0, 0, 0.05); /* subtle shadow */
            }

            /* === Button Styling === */
            .custom-btn {
            background-color: #000;
            color: #fff !important;
            border: none;
            border-radius: 8px;
            padding: 12px;
            transition: all 0.25s ease-in-out;
            }

            .custom-btn:hover {
            background-color: #111;
            transform: translateY(-1px);
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.25);
            }

            .custom-btn:active {
            transform: translateY(0);
            box-shadow: 0 2px 6px rgba(0, 0, 0, 0.2);
            }

            /* Remove focus outlines globally */
            input:focus,
            button:focus {
            outline: none !important;
            box-shadow: none !important;
            }

                    
</style>
    <link rel="shortcut icon" href="{{ asset('assets/images/logo/favicon.png') }}">
    <link rel="apple-touch-icon-precomposed" href="{{ asset('assets/images/logo/favicon.png') }}">
</head>

<body class="body header-fixed home-2">
    <!-- Header -->
  <header id="header_main" class="header">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="header__body d-flex justify-content-between">
              <div class="header__left">
               <div class="logo">
                    {{-- Light logo (for light backgrounds) --}}
                    <a class="light" href="{{ url('/') }}">
                        <img
                        id="site-logo"
                        src="{{ asset('assets/images/logo/logo.png') }}"
                        alt="{{ config('app.name') }}"
                        width="118"
                        height="32"
                        data-retina="{{ asset('assets/images/logo/logo@2x.png') }}"
                        data-width="118"
                        data-height="32"
                        />
                    </a>

                    {{-- Dark logo (for dark backgrounds) --}}
                    <a class="dark" href="{{ url('/') }}">
                        <img
                        src="{{ asset('assets/images/logo/logo.png') }}"
                        alt="{{ config('app.name') }}"
                        width="118"
                        height="32"
                        data-retina="{{ asset('assets/images/logo/logo@2x.png') }}"
                        data-width="118"
                        data-height="32"
                        />
                    </a>
                </div>

               
              </div>

              <div class="header__right">

                
                <div class="wallet">
                    @if (Route::has('login') && Route::has('register'))
                        @if (request()->routeIs('register'))
                        <!-- If user is on Register page, show Login -->
                        <a href="{{ route('login') }}">Log in</a>
                        @elseif (request()->routeIs('login'))
                        <!-- If user is on Login page, show Register -->
                        <a href="{{ route('register') }}">Register</a>
                        @else
                        <!-- On other pages, show both -->
                        <a href="{{ route('login') }}">Log in</a>
                        <a href="{{ route('register') }}">Register</a>
                        @endif
                    @endif
                    </div>

            </div>
        </div>
    </div>
    </div>
</header>

    <!-- Page Content -->
    @yield('content')

    <!-- Footer -->
<footer id="footer_main" class="footer py-4 border-top">
  <div class="container-fluid">
    <div class="d-flex justify-content-between align-items-center flex-wrap">
      <!-- Left: Logo -->
      <div class="footer__left d-flex align-items-center">
        <a href="{{ url('/') }}" class="logo d-flex align-items-center">
          <img
            src="{{ asset('assets/images/logo/logo.png') }}"
            alt="ApexCrypto Finance LTD"
            width="120"
            height="32"
            class="me-2"
          />
        </a>
        <span class="text-muted small ms-2">© <span id="year"></span> ApexCrypto Finance LTD</span>
      </div>

      <!-- Center: Legal / Disclaimer -->
      <div class="footer__center text-center small text-muted mx-auto">
        <p class="mb-0">
          ApexCrypto Finance LTD provides digital asset management and collateral-based lending services. 
          Cryptocurrency investments involve market risks, including potential loss of capital. 
          By using our platform, you agree to our 
          <a href="/terms" class="text-decoration-none text-primary">Terms of Service</a> 
          and 
          <a href="/privacy" class="text-decoration-none text-primary">Privacy Policy</a>.
        </p>
      </div>
    </div>
  </div>
  <script src="https://cdn.jsdelivr.net/npm/intl-tel-input@25.11.3/build/js/intlTelInput.min.js"></script>


</script>
  <script>
    document.getElementById("year").textContent = new Date().getFullYear();
  </script>
</footer>



    <!-- JS Scripts -->
    <script src="{{ asset('app/js/aos.js') }}"></script>
    <script src="{{ asset('app/js/jquery.min.js') }}"></script>
    <script src="{{ asset('app/js/jquery.easing.js') }}"></script>
    <script src="{{ asset('app/js/popper.min.js') }}"></script>
    <script src="{{ asset('app/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('app/js/app.js') }}"></script>
    <script src="{{ asset('app/js/jquery.peity.min.js') }}"></script>
    <script src="{{ asset('app/js/apexcharts.js') }}"></script>
    <script src="{{ asset('app/js/jquery.magnific-popup.min.js') }}"></script>
    <!-- Swiper JS (external CDN) -->
    <script src="https://unpkg.com/swiper@12.0.2/swiper-bundle.min.js"></script>
    <script src="{{ asset('app/js/swiper.js') }}"></script>
   </body>
</html>
              

             

      