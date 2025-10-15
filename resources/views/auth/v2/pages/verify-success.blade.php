@extends('auth.v2.layouts.app')

@section('title', 'Email Verified Successfully | ApexCrypto Finance LTD')

@section('content')
<div class="d-flex justify-content-center align-items-center min-vh-100">
    <div class="col-lg-4 col-md-6 col-sm-10">
        <div class="wg-box style-1 gap20 bg-Gainsboro shadow-none mb-32 box-about text-center p-4 rounded-4">

            {{-- Company Header --}}
            <div class="title mb-3">
                <div class="head f24-bold">ApexCrypto Finance LTD</div>
            </div>

            {{-- Icon --}}
            <div class="icon text-center mb-3">
                <svg width="64" height="64" viewBox="0 0 64 64" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <rect width="64" height="64" rx="20" fill="#161326"/>
                    <path fill-rule="evenodd" clip-rule="evenodd" d="M41.1641 29.3126C41.5958 26.4308 39.4001 24.8812 36.4 23.8473L37.3734 19.9424L34.9975 19.3512L34.0488 23.1529C33.4376 22.9994 32.8105 22.8565 32.1844 22.7138L32.1445 22.7047L33.1001 18.8782L30.7242 18.2856L29.7508 22.1891L29.6469 22.1653C29.1656 22.0553 28.6921 21.947 28.2329 21.8316L24.9578 21.0011L24.3253 23.5393C24.3253 23.5393 26.0893 23.9435 26.0522 23.9682C27.0147 24.2089 27.1879 24.8455 27.159 25.3514L26.0508 29.7993C26.1168 29.8158 26.2021 29.8406 26.2983 29.8777L26.0467 29.8158L24.493 36.0471C24.3748 36.3385 24.0764 36.7771 23.4027 36.6108C23.4275 36.6451 21.6758 36.1804 21.6758 36.1804L20.4961 38.9L23.5897 39.6714C23.9219 39.7548 24.2505 39.8406 24.5756 39.9254L24.5757 39.9255C24.813 39.9874 25.0485 40.0489 25.2822 40.1086L24.2992 44.0574L26.6737 44.6486L27.6471 40.7438C28.2961 40.9184 28.9258 41.0807 29.5418 41.2347L28.5711 45.123L30.947 45.7142L31.93 41.7737C35.9834 42.5409 39.0302 42.2315 40.313 38.5659C41.347 35.6153 40.2622 33.9118 38.1296 32.8022C39.6833 32.4447 40.852 31.4231 41.1641 29.3126ZM35.7331 36.927C35.0609 39.635 30.8226 38.5155 28.8826 38.0031C28.7078 37.9569 28.5517 37.9157 28.4185 37.8826L29.7247 32.651C29.8871 32.6916 30.0857 32.7362 30.3107 32.7867C32.3173 33.2375 36.4242 34.1601 35.7331 36.927ZM30.7136 30.3582C32.3302 30.7898 35.8551 31.7309 36.4687 29.27C37.0964 26.753 33.6698 25.995 31.9961 25.6247C31.8074 25.583 31.641 25.5461 31.5052 25.5123L30.3228 30.2558C30.4348 30.2837 30.5663 30.3189 30.7136 30.3582Z" fill="white"/>
                </svg>
            </div>

            {{-- Section Title --}}
            <div class="head label-01 text-center mb-3">You're all set!</div>

            {{-- Status Section --}}
            <div class="d-flex justify-content-center mb-3">
                <div class="box-status bg-YellowGreen d-inline-flex align-items-center px-4 py-2 rounded">
                    <i class="icon icon-check me-2"></i>
                    <span class="font-poppins fw-bold text-dark">Your email has been verified!</span>
                </div>
            </div>

            {{-- Description --}}
            <div class="desc f14-medium text-GrayDark text-center mb-4">
                Thank you for verifying your email address.  
                You can now access your dashboard and start using your account securely.
            </div>

            {{-- Dashboard Link --}}
            <a href="{{ route('auth.dashboard') }}" class="btn-read-more f12-bold">
                Go to Dashboard <i class="icon icon-send ms-1"></i>
            </a>
        </div>
    </div>
</div>
@endsection
