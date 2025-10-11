@extends('layouts.app')

@section('content')

<section class="banner">
    <div class="container">
    <div class="row">
        <div class="col-xl-6 col-md-12">
        <div class="banner__content">
            <h2 class="title">
            A trusted and secure cryptocurrency exchange.
            </h2>
            <p class="fs-20 desc">
             Experience the freedom of managing your Bitcoin and US 
                Dollars side by side — all in one secure, seamless app. Grow, 
                move, and protect your wealth worldwide, without switching platforms
                 or compromising on security.
            </p>
             @if (Auth::check())
          <a href="/dashboard" class="btn-action"><span>Dashboard</span></a>
        @else
          <a href="/register" class="btn-action"><span>Get Started</span></a>
        @endif
        </div>
        </div>
        <div class="col-xl-6 col-md-12">
        <div class="banner__image">
            <img src="{{asset('assets/images/layout/banner-02.png')}}" alt="" />
        </div>
        </div>
    </div>
    </div>
</section>
<section class="crypto" data-aos="fade-up" data-aos-duration="1000">
    <div class="container">
    <div class="row">
        <div class="col-md-12">
        <div class="crypto__main">
            <div class="crypto-box">
            <!-- TradingView Widget BEGIN -->
                <div class="tradingview-widget-container">
                <div class="tradingview-widget-container__widget"></div>
                
                <script type="text/javascript" src="https://s3.tradingview.com/external-embedding/embed-widget-symbol-info.js" async>
                {
                "symbol": "CRYPTOCAP:USDT",
                "colorTheme": "dark",
                "isTransparent": true,
                "locale": "en",
                "width": "100%"
                }
                </script>
                </div>
                <!-- TradingView Widget END -->
            </div>
            <div class="crypto-box">
            <!-- TradingView Widget BEGIN -->
            <div class="tradingview-widget-container">
            <div class="tradingview-widget-container__widget"></div>
            
            <script type="text/javascript" src="https://s3.tradingview.com/external-embedding/embed-widget-symbol-info.js" async>
            {
            "symbol": "BITSTAMP:BTCUSD",
            "colorTheme": "dark",
            "isTransparent": true,
            "locale": "en",
            "width": "100%"
            }
            </script>
            </div>
            <!-- TradingView Widget END -->
            </div>
            <div class="crypto-box">
            <!-- TradingView Widget BEGIN -->
            <div class="tradingview-widget-container">
            <div class="tradingview-widget-container__widget"></div>
        
            <script type="text/javascript" src="https://s3.tradingview.com/external-embedding/embed-widget-symbol-info.js" async>
            {
            "symbol": "NASDAQ:TSLA",
            "colorTheme": "dark",
            "isTransparent": true,
            "locale": "en",
            "width": "100%"
            }
            </script>
            </div>
            <!-- TradingView Widget END -->
            </div>
            <div class="crypto-box">
            <!-- TradingView Widget BEGIN -->
                <div class="tradingview-widget-container">
                <div class="tradingview-widget-container__widget"></div>
                
                <script type="text/javascript" src="https://s3.tradingview.com/external-embedding/embed-widget-symbol-info.js" async>
                {
                "symbol": "BMFBOVESPA:DOL1!",
                "colorTheme": "dark",
                "isTransparent": true,
                "locale": "en",
                "width": "100%"
                }
                </script>
                </div>
                <!-- TradingView Widget END -->
            </div>
        </div>
        </div>
    </div>
    </div>
</section>
<section class="services">
    <div class="container">
    <div class="row">
        <div class="col-xl-6 col-md-12">
        <div class="services__main">
            <div class="services-box">
            <div class="icon">
                <svg
                width="37"
                height="38"
                viewBox="0 0 37 38"
                fill="none"
                xmlns="http://www.w3.org/2000/svg"
                >
                <path
                    fill-rule="evenodd"
                    clip-rule="evenodd"
                    d="M35.9606 13.88C34.7889 6.66876 28.6638 1.30399 21.361 1.0928C21.0138 1.07919 20.6754 1.2042 20.4205 1.44029C20.1655 1.67637 20.0149 2.00415 20.0018 2.35138V2.35138V2.46885L20.824 14.7694C20.878 15.5974 21.5898 16.2269 22.4182 16.179L34.7523 15.3567C35.0999 15.331 35.4228 15.1678 35.6496 14.9032C35.8764 14.6386 35.9883 14.2945 35.9606 13.9471V13.88Z"
                    stroke="#D33535"
                    stroke-width="2"
                    stroke-linecap="round"
                    stroke-linejoin="round"
                />
                <path
                    d="M12.8195 8.40957C13.6041 8.22809 14.407 8.62953 14.7325 9.36609C14.8178 9.53933 14.8691 9.72732 14.8835 9.91987C15.0514 12.3028 15.4038 17.5217 15.6051 20.3409C15.6395 20.8488 15.8749 21.322 16.2591 21.6558C16.6433 21.9896 17.1448 22.1566 17.6524 22.1197V22.1197L28.0064 21.482C28.4686 21.4542 28.9218 21.6187 29.2586 21.9365C29.5954 22.2542 29.786 22.6971 29.7851 23.1601V23.1601C29.3656 29.4125 24.8735 34.6394 18.7553 35.9942C12.6371 37.3491 6.3582 34.5074 3.33816 29.0167C2.43662 27.4365 1.86569 25.6894 1.66005 23.8817C1.57214 23.3269 1.53842 22.7649 1.55937 22.2036C1.57718 15.5266 6.26646 9.7735 12.8027 8.40957"
                    stroke="#D33535"
                    stroke-width="2"
                    stroke-linecap="round"
                    stroke-linejoin="round"
                />
                </svg>
            </div>
            <a href="#" class="h6 title">Safe Bitcoin Custody, Since 2013</a>
            <p>
                Our unique security protocol is unparalleled, so you can manage your bitcoin with peace of mind.
            </p>
            </div>
            <div class="services-box">
            <div class="icon">
                <svg
                width="31"
                height="36"
                viewBox="0 0 31 36"
                fill="none"
                xmlns="http://www.w3.org/2000/svg"
                >
                <path
                    d="M23.6095 13.3208V9.3846C23.6095 4.77743 19.8732 1.0411 15.266 1.0411C10.6589 1.02093 6.90786 4.73893 6.8877 9.34793V9.3846V13.3208"
                    stroke="#58BD7D"
                    stroke-width="2"
                    stroke-linecap="round"
                    stroke-linejoin="round"
                />
                <path
                    fill-rule="evenodd"
                    clip-rule="evenodd"
                    d="M22.2525 34.9576H8.24399C4.40499 34.9576 1.29199 31.8464 1.29199 28.0056V20.1424C1.29199 16.3016 4.40499 13.1904 8.24399 13.1904H22.2525C26.0915 13.1904 29.2045 16.3016 29.2045 20.1424V28.0056C29.2045 31.8464 26.0915 34.9576 22.2525 34.9576Z"
                    stroke="#58BD7D"
                    stroke-width="2"
                    stroke-linecap="round"
                    stroke-linejoin="round"
                />
                <path
                    d="M15.2486 22.0381V26.1099"
                    stroke="#58BD7D"
                    stroke-width="2"
                    stroke-linecap="round"
                    stroke-linejoin="round"
                />
                </svg>
            </div>
            <a href="#" class="h6 title">Unparalleled Security</a>
            <p>
                Secure custody, built for the Bitcoin economy.
            </p>
            </div>
            <div class="services-box">
            <div class="icon">
                <svg
                width="45"
                height="44"
                viewBox="0 0 45 44"
                fill="none"
                xmlns="http://www.w3.org/2000/svg"
                >
                <path
                    d="M26.5332 3.66699H22.1332C21.5253 3.66699 21.0332 4.15907 21.0332 4.76699C21.0332 5.37491 21.5253 5.86699 22.1332 5.86699H26.5332C27.1411 5.86699 27.6332 5.37491 27.6332 4.76699C27.6332 4.15907 27.1411 3.66699 26.5332 3.66699Z"
                    fill="#3772FF"
                />
                <path
                    d="M31.3001 0H13.7001C11.2743 0 9.30011 1.97416 9.30011 4.4V39.6C9.30011 42.0258 11.2743 44 13.7001 44H31.3001C33.726 44 35.7001 42.0258 35.7001 39.6V4.4C35.7001 1.97416 33.726 0 31.3001 0ZM33.5001 39.6C33.5001 40.8152 32.5153 41.8 31.3001 41.8H13.7001C12.485 41.8 11.5001 40.8152 11.5001 39.6V4.4C11.5001 3.18484 12.485 2.2 13.7001 2.2H31.3001C32.5153 2.2 33.5001 3.18484 33.5001 4.4V39.6Z"
                    fill="#3772FF"
                />
                <path
                    d="M22.5002 40.3336C23.7152 40.3336 24.7002 39.3486 24.7002 38.1336C24.7002 36.9186 23.7152 35.9336 22.5002 35.9336C21.2851 35.9336 20.3002 36.9186 20.3002 38.1336C20.3002 39.3486 21.2851 40.3336 22.5002 40.3336Z"
                    fill="#3772FF"
                />
                <path
                    d="M18.4666 5.86699C19.0741 5.86699 19.5666 5.3745 19.5666 4.76699C19.5666 4.15948 19.0741 3.66699 18.4666 3.66699C17.8591 3.66699 17.3666 4.15948 17.3666 4.76699C17.3666 5.3745 17.8591 5.86699 18.4666 5.86699Z"
                    fill="#3772FF"
                />
                </svg>
            </div>
            <a href="#" class="h6 title">Move Your Money Your Way </a>
            <p>
                Send and spend in Bitcoin, USDC, USDT stablecoins, or other traditional currencies—all in one app. No FX fees, just fast and secure payments anywhere you go.
            </p>
            </div>
        </div>
        </div>
        <div class="col-xl-6 col-md-12">
        <div class="block-text" data-aos="fade-up" data-aos-duration="1000">
            <h3 class="heading">Where Global Banking Meets Bitcoin</h3>
            <p class="desc">
                Military-grade protection and a proven track record sets Xapo apart. Our unique security protocol is unparalleled, so you can manage your bitcoin with peace of mind. Our custody. Your legacy.
            </p>
           @if (Auth::check())
          <a href="/dashboard" class="btn-action"><span>Dashboard</span></a>
        @else
          <a href="/register" class="btn-action"><span>Get Started</span></a>
        @endif
        </div>
        </div>
    </div>
    </div>
</section>
<section class="about-2">
    <div class="container">
    <div class="row">
        <div class="col-xl-6 col-md-12">
        <div class="about_image">
            <img
            class="img-main"
            src="{{asset('assets/images/layout/Illustration.png')}}"
            alt=""
            />
            <div class="traders-box">
            <div class="icon">
                <svg
                width="26"
                height="26"
                viewBox="0 0 26 26"
                fill="none"
                xmlns="http://www.w3.org/2000/svg"
                >
                <path
                    fill-rule="evenodd"
                    clip-rule="evenodd"
                    d="M8.82861 17.172L10.8172 10.8177L17.1715 8.8291L15.1829 15.1834L8.82861 17.172Z"
                    stroke="#3772FF"
                    stroke-width="1.5"
                    stroke-linecap="round"
                    stroke-linejoin="round"
                />
                <circle
                    cx="13"
                    cy="13"
                    r="12"
                    stroke="#3772FF"
                    stroke-width="1.5"
                    stroke-linecap="round"
                    stroke-linejoin="round"
                />
                </svg>
            </div>
            <div class="content">
                <h6 class="numb">198+</h6>
                <p>Countries</p>
            </div>
            </div>
            <div class="traders-box">
            <div class="icon">
                <svg
                width="24"
                height="24"
                viewBox="0 0 24 24"
                fill="none"
                xmlns="http://www.w3.org/2000/svg"
                >
                <path
                    d="M22.6666 10.6669C22.3406 8.32055 21.2521 6.14647 19.5688 4.47959C17.8856 2.8127 15.701 1.74548 13.3515 1.44233C11.0021 1.13918 8.61814 1.6169 6.56691 2.80192M1.33331 2.66693V8.00026H6.66665"
                    stroke="#D33535"
                    stroke-width="1.5"
                    stroke-linecap="round"
                    stroke-linejoin="round"
                />
                <path
                    d="M1.33331 13.334C1.65939 15.6804 2.74789 17.8544 4.43113 19.5213C6.11437 21.1882 8.29897 22.2554 10.6484 22.5586C12.9979 22.8617 15.3818 22.384 17.433 21.199M22.6666 21.334V16.0007H17.3333"
                    stroke="#D33535"
                    stroke-width="1.5"
                    stroke-linecap="round"
                    stroke-linejoin="round"
                />
                </svg>
            </div>
            <div class="content">
                <h6 class="numb">$350k+</h6>
                <p>Loans Processed</p>
            </div>
            </div>
            <div class="traders-box">
            <div class="icon">
                <svg
                width="24"
                height="24"
                viewBox="0 0 24 24"
                fill="none"
                xmlns="http://www.w3.org/2000/svg"
                >
                <path
                    fill-rule="evenodd"
                    clip-rule="evenodd"
                    d="M9.52364 15.7402C5.03897 15.7402 1.2088 16.4181 1.2088 19.1341C1.2088 21.8489 5.01447 22.5524 9.52364 22.5524C14.0083 22.5524 17.8385 21.8734 17.8385 19.1586C17.8385 16.4437 14.0328 15.7402 9.52364 15.7402Z"
                    stroke="#3772FF"
                    stroke-width="1.5"
                    stroke-linecap="round"
                    stroke-linejoin="round"
                />
                <path
                    fill-rule="evenodd"
                    clip-rule="evenodd"
                    d="M9.52361 11.8667C12.4823 11.8667 14.8529 9.49484 14.8529 6.53734C14.8529 3.57867 12.4823 1.20801 9.52361 1.20801C6.56611 1.20801 4.19427 3.57867 4.19427 6.53734C4.19427 9.49484 6.56611 11.8667 9.52361 11.8667Z"
                    stroke="#3772FF"
                    stroke-width="1.5"
                    stroke-linecap="round"
                    stroke-linejoin="round"
                />
                <path
                    d="M20.4048 8.11328V12.7916"
                    stroke="#3772FF"
                    stroke-width="1.5"
                    stroke-linecap="round"
                    stroke-linejoin="round"
                />
                <path
                    d="M22.7917 10.4525H18.02"
                    stroke="#3772FF"
                    stroke-width="1.5"
                    stroke-linecap="round"
                    stroke-linejoin="round"
                />
                </svg>
            </div>
            <div class="content">
                <h6 class="numb">500k+</h6>
                <p>Request processed.</p>
            </div>
            </div>
        </div>
        </div>
        <div class="col-xl-6 col-md-12">
        <div
            class="about__content"
            data-aos="fade-up"
            data-aos-duration="1000"
        >
            <h3 class="heading">
            ACCESS CASH. KEEP YOUR BITCOIN.
            </h3>
            <p class="fs-20 desc">
            Get up to USD 1 million in minutes by borrowing against your Bitcoin. Need to buy a house, a car, or something else entirely? Find the cash you need, when you need it, without selling your BTC.
            </p>
            <ul class="list">
            <li>
                <div class="icon">
                <svg
                    width="29"
                    height="23"
                    viewBox="0 0 29 23"
                    fill="none"
                    xmlns="http://www.w3.org/2000/svg"
                >
                    <path
                    fill-rule="evenodd"
                    clip-rule="evenodd"
                    d="M19.1987 11.4737C19.1987 14.0115 17.1406 16.0681 14.6029 16.0681C12.0651 16.0681 10.0085 14.0115 10.0085 11.4737C10.0085 8.93457 12.0651 6.87793 14.6029 6.87793C17.1406 6.87793 19.1987 8.93457 19.1987 11.4737Z"
                    stroke="#D33535"
                    stroke-width="1.5"
                    stroke-linecap="round"
                    stroke-linejoin="round"
                    />
                    <path
                    fill-rule="evenodd"
                    clip-rule="evenodd"
                    d="M14.6007 22.0866C20.1354 22.0866 25.1978 18.107 28.048 11.4735C25.1978 4.83991 20.1354 0.860352 14.6007 0.860352H14.6065C9.07172 0.860352 4.00934 4.83991 1.15912 11.4735C4.00934 18.107 9.07172 22.0866 14.6065 22.0866H14.6007Z"
                    stroke="#D33535"
                    stroke-width="1.5"
                    stroke-linecap="round"
                    stroke-linejoin="round"
                    />
                </svg>
                </div>
                <div class="content">
                <h6 class="title">IDENTIFICATION</h6>
                <p>
                    An ID or passport, plus a quick selfie for secure verification.
                </p>
                </div>
            </li>
            <li>
                <div class="icon green">
                <svg
                    width="25"
                    height="30"
                    viewBox="0 0 25 30"
                    fill="none"
                    xmlns="http://www.w3.org/2000/svg"
                >
                    <path
                    fill-rule="evenodd"
                    clip-rule="evenodd"
                    d="M22.5815 4.4024C23.2167 4.62478 23.6411 5.2236 23.6411 5.89655V15.7408C23.6411 18.4922 22.6411 21.1186 20.8752 23.1534C19.9871 24.1781 18.8636 24.976 17.6703 25.6214L12.4989 28.4149L7.3188 25.6199C6.12406 24.9746 4.99909 24.1781 4.10958 23.1519C2.34218 21.1171 1.33929 18.4893 1.33929 15.735V5.89655C1.33929 5.2236 1.7637 4.62478 2.39886 4.4024L11.9655 1.04056C12.3056 0.921376 12.6762 0.921376 13.0149 1.04056L22.5815 4.4024Z"
                    stroke="#58BD7D"
                    stroke-width="1.5"
                    stroke-linecap="round"
                    stroke-linejoin="round"
                    />
                    <path
                    d="M8.71194 14.2775L11.4619 17.0288L17.1274 11.3633"
                    stroke="#58BD7D"
                    stroke-width="1.5"
                    stroke-linecap="round"
                    stroke-linejoin="round"
                    />
                </svg>
                </div>
                <div class="content">
                <h6 class="title">PERSONAL DETAILS</h6>
                <p>
                    Easily verified using your mobile phone.
                </p>
                </div>
            </li>
            <li>
                <div class="icon blue">
                <svg
                    width="33"
                    height="25"
                    viewBox="0 0 33 25"
                    fill="none"
                    xmlns="http://www.w3.org/2000/svg"
                >
                    <path
                    d="M24.7354 10.8438C27.0644 10.8438 28.9536 8.9559 28.9536 6.62699C28.9536 4.29807 27.0644 2.41016 24.7354 2.41016"
                    stroke="#3772FF"
                    stroke-width="1.5"
                    stroke-linecap="round"
                    stroke-linejoin="round"
                    />
                    <path
                    d="M26.6747 15.4258C27.3701 15.4737 28.0616 15.5723 28.7424 15.7256C29.6884 15.9108 30.8262 16.2985 31.2312 17.1472C31.4897 17.6907 31.4897 18.3236 31.2312 18.8685C30.8275 19.7172 29.6884 20.1036 28.7424 20.2981"
                    stroke="#3772FF"
                    stroke-width="1.5"
                    stroke-linecap="round"
                    stroke-linejoin="round"
                    />
                    <path
                    d="M8.30432 10.8438C5.9754 10.8438 4.08615 8.9559 4.08615 6.62699C4.08615 4.29807 5.9754 2.41016 8.30432 2.41016"
                    stroke="#3772FF"
                    stroke-width="1.5"
                    stroke-linecap="round"
                    stroke-linejoin="round"
                    />
                    <path
                    d="M6.36512 15.4258C5.66964 15.4737 4.97816 15.5723 4.29734 15.7256C3.35138 15.9108 2.21357 16.2985 1.80987 17.1472C1.55007 17.6907 1.55007 18.3236 1.80987 18.8685C2.21224 19.7172 3.35138 20.1036 4.29734 20.2981"
                    stroke="#3772FF"
                    stroke-width="1.5"
                    stroke-linecap="round"
                    stroke-linejoin="round"
                    />
                    <path
                    fill-rule="evenodd"
                    clip-rule="evenodd"
                    d="M16.5131 16.334C21.2322 16.334 25.2638 17.0481 25.2638 19.906C25.2638 22.7625 21.2589 23.5033 16.5131 23.5033C11.7926 23.5033 7.76233 22.7891 7.76233 19.9313C7.76233 17.0734 11.7673 16.334 16.5131 16.334Z"
                    stroke="#3772FF"
                    stroke-width="1.5"
                    stroke-linecap="round"
                    stroke-linejoin="round"
                    />
                    <path
                    fill-rule="evenodd"
                    clip-rule="evenodd"
                    d="M16.5131 12.2579C13.4008 12.2579 10.9053 9.76246 10.9053 6.6488C10.9053 3.53647 13.4008 1.04102 16.5131 1.04102C19.6254 1.04102 22.1209 3.53647 22.1209 6.6488C22.1209 9.76246 19.6254 12.2579 16.5131 12.2579Z"
                    stroke="#3772FF"
                    stroke-width="1.5"
                    stroke-linecap="round"
                    stroke-linejoin="round"
                    />
                </svg>
                </div>
                <div class="content">
                <h6 class="title">SECURITY DETAILS</h6>
                <p>
                    We’ll safeguard your account with state-of-the-art security measures.
                </p>
                </div>
            </li>
            </ul>
        </div>
        </div>
    </div>
    </div>
</section>
<section class="work">
    <div class="container">
    <div class="row">
        <div class="col-md-12">
        <div class="block-text center">
            <h3 class="heading">How It Works</h3>
            <p class="fs-20 desc">
                {{ config('app.name') }} provides a simple, secure way to access instant liquidity
                without selling your Bitcoin. Your BTC stays safely stored while you receive a
                loan in USDT—ready to use whenever you need it.
            </p>
        </div>

       <div class="work__main" data-aos="fade-up" data-aos-duration="1000">

            {{-- Step 1 --}}
            <div class="work-box">
                <div class="image">
                <img src="{{ asset('assets/images/icon/Cloud.png') }}" alt="Deposit BTC" />
                </div>
                <div class="content">
                <p class="step">Step 1</p>
                <a href="#" class="title">Deposit BTC as Collateral</a>
                <p class="text">
                    Transfer your Bitcoin securely into your {{ config('app.name') }} collateral wallet.
                    Your BTC remains yours and is safely held in cold storage while your loan is active.
                </p>
                </div>
                <img class="line" src="{{ asset('assets/images/icon/connect-line.png') }}" alt="" />
            </div>

            {{-- Step 2 --}}
            <div class="work-box">
                <div class="image">
                <img src="{{ asset('assets/images/icon/Wallet.png') }}" alt="Receive USDT Loan" />
                </div>
                <div class="content">
                <p class="step">Step 2</p>
                <a href="#" class="title">Receive USDT Loan Instantly</a>
                <p class="text">
                    Once your BTC deposit is confirmed, {{ config('app.name') }} instantly issues a
                    loan in USDT directly to your connected wallet — no credit checks or long approvals.
                </p>
                </div>
                <img class="line" src="{{ asset('assets/images/icon/connect-line.png') }}" alt="" />
            </div>

            {{-- Step 3 --}}
            <div class="work-box">
                <div class="image">
                <img src="{{ asset('assets/images/icon/Mining.png') }}" alt="Use Your Funds" />
                </div>
                <div class="content">
                <p class="step">Step 3</p>
                <a href="#" class="title">Use or Trade Your USDT</a>
                <p class="text">
                    Access your USDT for trading, payments, or investments. Your collateralized
                    BTC continues to accrue value while your loan remains active.
                </p>
                </div>
                <img class="line" src="{{ asset('assets/images/icon/connect-line.png') }}" alt="" />
            </div>

            {{-- Step 4 --}}
            <div class="work-box">
                <div class="image">
                <img src="{{ asset('assets/images/icon/Comparison.png') }}" alt="Repay and Unlock BTC" />
                </div>
                <div class="content">
                <p class="step">Step 4</p>
                <a href="#" class="title">Repay and Reclaim Your BTC</a>
                <p class="text">
                    When ready, repay the loan amount and instantly unlock your full BTC collateral.
                    No penalties or hidden fees — just secure, transparent lending.
                </p>
                </div>
            </div>

            </div>

        </div>
    </div>
    </div>
</section>

{{-- IMPEMENT BLOG FEATURE --}}
<section class="blog">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="block-text center">
          <h3 class="heading">Learn And Earn</h3>
          <p class="desc">
            Explore guides, insights, and video lessons to help you understand how to grow your digital wealth with {{ config('app.name') }}.
          </p>
        </div>
      </div>

      @foreach($blogs as $blog)
      <div class="col-md-4">
        <div class="blog-box" data-aos="fade-up" data-aos-duration="800">
          <div class="box-image">
            <img src="{{ asset($blog->thumbnail ?? 'assets/images/blog/default.jpg') }}" alt="{{ $blog->title }}" />
            @if($blog->video_url)
            <div class="wrap-video">
              <a href="{{ $blog->video_url }}" class="popup-youtube">
                <svg width="13" height="16" viewBox="0 0 13 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path d="M0.466675 2.92407C0.466675 1.35705 2.187 0.398733 3.51938 1.22354L11.7197 6.2999C12.9827 7.0818 12.9827 8.91907 11.7197 9.70096L3.51938 14.7773C2.187 15.6021 0.466675 14.6438 0.466675 13.0768V2.92407Z" fill="#777E90"/>
                </svg>
              </a>
            </div>
            @endif
          </div>

          <div class="box-content">
            <a href="{{route('blog.show', $blog->slug)}}" class="category btn-action">{{ $blog->category }}</a>
           <a href="{{ route('blog.show', $blog->slug) }}" class="title">{{ $blog->title }}</a>
            <p class="excerpt">{{ Str::limit($blog->excerpt, 120) }}</p>

            <div class="meta">
              <a href="#" class="name"><span></span>{{ $blog->author ?? 'Anonymous' }}</a>
              <a href="#" class="time">{{ $blog->created_at->format('M d, Y') }}</a>
            </div>
          </div>
        </div>
      </div>
      @endforeach

      <div class="col-md-12">
        <div class="button-loadmore">
          <a href="{{ route('blog.index') }}">
            <svg width="14" height="14" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path d="M7.00001 0.333008C6.63182 0.333008 6.33334 0.631485 6.33334 0.999674V2.99967C6.33334 3.36786 6.63182 3.66634 7.00001 3.66634C7.3682 3.66634 7.66668 3.36786 7.66668 2.99967V0.999674C7.66668 0.631485 7.3682 0.333008 7.00001 0.333008Z" fill="#23262F"/>
              <!-- (other paths unchanged for brevity) -->
            </svg>
            Load more
          </a>
        </div>
      </div>
    </div>
  </div>
</section>

@endsection
