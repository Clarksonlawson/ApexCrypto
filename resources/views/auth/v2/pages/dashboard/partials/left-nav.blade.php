<@php
    $user = Auth::user();
@endphp

<div class="section-menu-left">
    <div class="box-logo">
        <a href="{{ route('auth.dashboard') }}" id="site-logo-inner">
            <img id="logo_header"
                src="{{ asset('assets/images/logo/logo.png') }}"
                alt="Logo"
                data-light="{{ asset('assets/images/logo/logo.png') }}"
                data-dark="{{ asset('assets/images/logo/logo.png') }}">
        </a>
        <div class="button-show-hide">
            <i class="icon-back"></i>
        </div>
    </div>

    <div class="section-menu-left-wrap">
        <div class="center">
            <div class="center-item">
                <div class="center-heading f14-regular text-Gray menu-heading mb-12">Navigation</div>
            </div>

            <div class="center-item">
                <ul>
                    {{-- Dashboard --}}
                    <li class="menu-item">
                        <a href="{{ route('auth.dashboard') }}"
                            class="menu-item-button {{ request()->routeIs('auth.dashboard') ? 'active' : '' }}">
                            <div class="icon">
                                <i class="icon-category1"></i>
                            </div>
                            <div class="text">Dashboard</div>
                        </a>
                    </li>
                    {{-- Wallets --}}
                    <li class="menu-item has-children">
                        <a href="#" 
                           class="menu-item-button {{ request()->is('transaction') ? 'active' : '' }}">
                            <div class="icon">
                                <i class="icon-wallet1"></i>
                            </div>
                            <div class="text">My Wallet</div>
                        </a>
                         <ul class="sub-menu">
                            <li class="sub-menu-item">
                                <a href="{{ url('wallet/generate') }}" class="">
                                    <div class="text">Generate Wallet</div>
                                </a>
                            </li>
                            <li class="sub-menu-item">
                                <a href="{{ url('wallet/view') }}" class="">
                                    <div class="text">View Wallets</div>
                                </a>
                            </li>
                        </ul>
                    </li>

                    {{-- Transaction --}}
                    <li class="menu-item has-children">
                        <a href="#" 
                           class="menu-item-button {{ request()->is('transaction') ? 'active' : '' }}">
                            <div class="icon">
                                <i class="icon-arrow-swap"></i>
                            </div>
                            <div class="text">Collaterals</div>
                        </a>
                         <ul class="sub-menu">
                            <li class="sub-menu-item">
                                <a href="{{ url('add-collateral') }}" class="">
                                    <div class="text">Add Collateral</div>
                                </a>
                            </li>
                            <li class="sub-menu-item">
                                <a href="{{ url('view-collateral') }}" class="">
                                    <div class="text">View Collaterals</div>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="menu-item">
                        <a href="{{route('account')}}" 
                           class="menu-item-button {{ request()->routeIs('auth.account') ? 'active' : '' }}">
                            <div class="icon">
                                <i class="icon-person"></i>
                            </div>
                            <div class="text">My Account</div>
                            <i class="icon-chevron-down ms-auto"></i>
                        </a>
                    </li>
                    {{-- Verify --}}
                    <li class="menu-item">
                        <a href="{{ url('verify') }}" 
                           class="menu-item-button {{ request()->is('verify') ? 'active' : '' }}">
                            <div class="icon">
                                <i class="icon-check"></i>
                            </div>
                           <div class="d-flex align-items-center justify-content-center gap-1">
                                <div class="text f12-bold">Verify account</div>
                                @if($user->verification_status === "pending")
                                    <div class="box-status bg-LightGray type-red d-inline-block px-2 py-0 rounded" style="font-size: 10px; line-height: 1;">
                                    <span class="font-poppins">PENDING</span>
                                </div>
                                @elseif($user->verification_status === "in progress")
                                  <div class="box-status bg-LightGray d-inline-block px-2 py-0 rounded" style="font-size: 10px; line-height: 1;">
                                    <span class="font-poppins">IN PROGRESS</span>
                                  </div>
                                @else
                                    <div class="box-status bg-YellowGreen d-inline-block px-2 py-0 rounded" style="font-size: 10px; line-height: 1;">
                                        <span class="font-poppins">Verified</span>
                                    </div>
                                @endif
                            </div>

                        </a>
                    </li>

                    {{-- Exchange --}}
                    <li class="menu-item">
                        <a href="{{ url('exchange') }}" 
                           class="menu-item-button {{ request()->is('exchange') ? 'active' : '' }}">
                            <div class="icon">
                                <i class="icon-arrow-swap"></i>
                            </div>
                            <div class="text">Exchange</div>
                        </a>
                    </li>

                    {{-- Settings --}}
                    <li class="menu-item">
                        <a href="{{ url('settings') }}" 
                           class="menu-item-button {{ request()->is('settings') ? 'active' : '' }}">
                            <div class="icon">
                                <i class="icon-setting1"></i>
                            </div>
                            <div class="text">Settings</div>
                        </a>
                    </li>
                    
                </ul>
            </div>
        </div>

        {{-- Bottom Section --}}
        <div class="bottom">
            <div class="image">
                <img src="{{ asset('auth/images/item/bot.png') }}" alt="">
            </div>
            <div class="content">
                @if($user->verification_status === "pending")
                    <p class="f12-regular text-White">For more features</p>
                    <p class="f12-bold text-White">Verify your account.</p>
                @elseif($user->verification_status === "in progress")
                    <p class="f12-regular text-White">Your account verification</p>
                    <p class="f12-bold text-White"> is in progress.</p>
                @else
                    <p class="f12-regular text-White">Your account is </p>
                    <p class="f12-bold text-White">Verified.</p>
                @endif
                </div>
        </div>
    </div>
</div>
