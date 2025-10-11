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

                <div class="left__main">
                  <nav id="main-nav" class="main-nav">
                    <ul id="menu-primary-menu" class="menu">
                      <li class="menu-item current-menu-item">
                        <a href="/">Home </a>
                      </li>
                      <li class="menu-item-has-children">
                        <a href="#">Banking</a>

                        <ul class="sub-menu">
                          <li class="menu-item">
                            <a href="/loan"
                              >Borrow</a
                            >
                          </li>
                          <li class="menu-item">
                            <a href="/transact"
                              >Transact</a
                            >
                          </li>
                          <li class="menu-item">
                            <a href="/earn"
                              >Earn</a
                            >
                          </li>
                        </ul>
                      </li>
                      <li class="menu-item-has-children">
                        <a href="#">Security</a>

                        <ul class="sub-menu">
                          <li class="menu-item">
                            <a href="security-system">Our Security System</a>
                          </li>
                          <li class="menu-item">
                            <a href="/compliance"
                              >Compliance</a
                            >
                          </li>
                          <li class="menu-item">
                            <a href="/complaints"
                              >Complaints</a
                            >
                          </li>
                        </ul>
                      </li>
                      <li class="menu-item-has-children">
                        <a href="#">Resources</a>

                        <ul class="sub-menu">
                          <li class="menu-item">
                            <a href="/support">Support</a>
                          </li>
                          <li class="menu-item">
                            <a href="/faq">Faqs</a>
                          </li>
                        
                        </ul>
                      </li>

                      <li class="menu-item">
                        <a href="/exchange"
                          >BTCUSDT
                          <svg
                            class="s1"
                            width="8"
                            height="10"
                            viewBox="0 0 8 10"
                            fill="none"
                            xmlns="http://www.w3.org/2000/svg"
                          >
                            <path
                              d="M6.75979 3.20154C6.69318 3.13681 6.59973 3.10739 6.50828 3.12243C6.41666 3.13741 6.33754 3.19493 6.29504 3.27747C6.14887 3.56144 5.9632 3.82239 5.74477 4.05308C5.76654 3.88644 5.7775 3.7188 5.7775 3.55072C5.7775 3.2282 5.73428 2.8963 5.64898 2.56413C5.36855 1.4731 4.6332 0.550422 3.63154 0.0327073C3.54434 -0.0123512 3.44043 -0.0107692 3.35463 0.0369261C3.26883 0.0846409 3.21264 0.172121 3.20494 0.269973C3.12686 1.26146 2.61615 2.16349 1.80301 2.74536C1.79225 2.75312 1.78156 2.76097 1.77088 2.76878C1.74875 2.78497 1.72789 2.80029 1.7084 2.81314C1.70535 2.81517 1.70232 2.81724 1.69936 2.81937C1.18795 3.18552 0.765977 3.67361 0.479004 4.23101C0.187402 4.79798 0.0395508 5.4064 0.0395508 6.03931C0.0395508 6.36173 0.0827734 6.69362 0.168027 7.02585C0.61793 8.77697 2.19379 9.99997 4.00023 9.99997C6.18404 9.99997 7.96068 8.22322 7.96068 6.03931C7.96068 4.96236 7.5342 3.95454 6.75979 3.20154Z"
                              fill="#3772FF"
                            />
                          </svg>
                        </a>
                      </li>
                      <li class="menu-item-has-children">
                        <a href="#"> About Us </a>
                        <ul class="sub-menu">
                          <li class="menu-item">
                            <a href="/our-mission">Our Mission</a>
                          </li>

                          <li class="menu-item">
                            <a href="/disclosure">Disclosure</a>
                          </li>
                    
                          <li class="menu-item">
                            <a href="/contact">Contact Us</a>
                          </li>
                         
                        </ul>
                      </li>
                    </ul>
                  </nav>
                  <!-- /#main-nav -->
                </div>
              </div>

              <div class="header__right">
                <div class="dropdown">
                  <button
                    class="btn dropdown-toggle"
                    type="button"
                    id="dropdownMenuButton"
                    data-toggle="dropdown"
                    aria-haspopup="true"
                    aria-expanded="false"
                  >
                    Assets
                  </button>
                 
                </div>
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
              
                <div class="mobile-button"><span></span></div>
                <div class="wallet">
                  @if (Route::has('login'))
                      @auth
                      
                          <a href="{{ url('/dashboard') }}">Dashboard</a>
                      @else
                          <a href="{{ route('login') }}" >Log in</a>

                          @if (Route::has('register'))
                              <a href="{{ route('register') }}">Register</a>
                          @endif
                      @endauth
                    @endif
                </div>
            </div>
        </div>
    </div>
    </div>
</header>