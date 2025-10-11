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
               
                <div class="mode-switcher">
                  <a class="sun" href="#" onclick="switchTheme()">
                    <svg
                      width="16"
                      height="16"
                      viewBox="0 0 16 16"
                      fill="none"
                      xmlns="http://www.w3.org/2000/svg"
                    >
                      <path
                        d="M7.99993 11.182C9.7572 11.182 11.1818 9.75745 11.1818 8.00018C11.1818 6.24291 9.7572 4.81836 7.99993 4.81836C6.24266 4.81836 4.81812 6.24291 4.81812 8.00018C4.81812 9.75745 6.24266 11.182 7.99993 11.182Z"
                        stroke="#23262F"
                        stroke-width="1.5"
                        stroke-linecap="round"
                        stroke-linejoin="round"
                      />
                      <path
                        d="M8 1V2.27273"
                        stroke="#23262F"
                        stroke-width="1.5"
                        stroke-linecap="round"
                        stroke-linejoin="round"
                      />
                      <path
                        d="M8 13.7271V14.9998"
                        stroke="#23262F"
                        stroke-width="1.5"
                        stroke-linecap="round"
                        stroke-linejoin="round"
                      />
                      <path
                        d="M3.04956 3.04932L3.9532 3.95295"
                        stroke="#23262F"
                        stroke-width="1.5"
                        stroke-linecap="round"
                        stroke-linejoin="round"
                      />
                      <path
                        d="M12.0469 12.0469L12.9505 12.9505"
                        stroke="#23262F"
                        stroke-width="1.5"
                        stroke-linecap="round"
                        stroke-linejoin="round"
                      />
                      <path
                        d="M1 8H2.27273"
                        stroke="#23262F"
                        stroke-width="1.5"
                        stroke-linecap="round"
                        stroke-linejoin="round"
                      />
                      <path
                        d="M13.7273 8H15"
                        stroke="#23262F"
                        stroke-width="1.5"
                        stroke-linecap="round"
                        stroke-linejoin="round"
                      />
                      <path
                        d="M3.04956 12.9505L3.9532 12.0469"
                        stroke="#23262F"
                        stroke-width="1.5"
                        stroke-linecap="round"
                        stroke-linejoin="round"
                      />
                      <path
                        d="M12.0469 3.95295L12.9505 3.04932"
                        stroke="#23262F"
                        stroke-width="1.5"
                        stroke-linecap="round"
                        stroke-linejoin="round"
                      />
                    </svg>
                  </a>
                  <a href="#" class="moon" onclick="switchTheme()">
                    <svg
                      width="14"
                      height="14"
                      viewBox="0 0 14 14"
                      fill="none"
                      xmlns="http://www.w3.org/2000/svg"
                    >
                      <path
                        d="M13.0089 8.97241C12.7855 9.64616 12.4491 10.2807 12.0107 10.8477C11.277 11.7966 10.2883 12.5169 9.1602 12.9244C8.03209 13.3319 6.81126 13.4097 5.64056 13.1486C4.46987 12.8876 3.39772 12.2986 2.54959 11.4504C1.70145 10.6023 1.1124 9.53013 0.851363 8.35944C0.590325 7.18874 0.668097 5.96791 1.07558 4.8398C1.48306 3.71169 2.2034 2.72296 3.1523 1.9893C3.71928 1.55094 4.35384 1.21447 5.02759 0.991088C4.69163 1.84583 4.54862 2.77147 4.61793 3.7009C4.72758 5.17128 5.36134 6.55346 6.40394 7.59606C7.44654 8.63866 8.82873 9.27242 10.2991 9.38207C11.2285 9.45138 12.1542 9.30837 13.0089 8.97241Z"
                        stroke="white"
                        stroke-width="1.4"
                        stroke-linecap="round"
                        stroke-linejoin="round"
                      />
                    </svg>
                  </a>
                </div>
              
                
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
