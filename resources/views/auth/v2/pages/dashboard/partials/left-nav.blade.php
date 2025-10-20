
<div class="section-menu-left">
    <div class="box-logo">
        <a href="{{ route('auth.dashboard') }}" id="site-logo-inner">
            <img id="logo_header"
                src="{{ asset('auth/images/logo/logo.svg') }}"
                alt="Logo"
                data-light="{{ asset('auth/images/logo/logo.svg') }}"
                data-dark="{{ asset('auth/images/logo/logo.svg') }}">
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

                    {{-- My Wallet (Auto Expand) --}}
                    <li class="menu-item has-children 
                        {{ request()->is('my-wallet*') || request()->is('account*') ? 'open' : '' }}">
                        <a href="javascript:void(0);" 
                           class="menu-item-button {{ request()->is('my-wallet*') || request()->is('account*') ? 'active' : '' }}">
                            <div class="icon">
                                <i class="icon-wallet"></i>
                            </div>
                            <div class="text">My Wallet</div>
                            <i class="icon-chevron-down ms-auto"></i>
                        </a>

                        <ul class="sub-menu {{ request()->is('my-wallet*') || request()->is('account*') ? 'd-block' : 'd-none' }}">
                            <li class="sub-menu-item {{ request()->is('my-wallet') ? 'active' : '' }}">
                                <a href="{{ url('my-wallet') }}">
                                    <div class="text">My Wallet</div>
                                </a>
                            </li>
                            <li class="sub-menu-item {{ request()->is('account') ? 'active' : '' }}">
                                <a href="{{ url('account') }}">
                                    <div class="text">Account</div>
                                </a>
                            </li>
                        </ul>
                    </li>

                    {{-- Transaction --}}
                    <li class="menu-item">
                        <a href="{{ url('transaction') }}" 
                           class="menu-item-button {{ request()->is('transaction') ? 'active' : '' }}">
                            <div class="icon">
                                <i class="icon-arrow-swap"></i>
                            </div>
                            <div class="text">Transaction</div>
                        </a>
                    </li>

                    {{-- Crypto --}}
                    <li class="menu-item">
                        <a href="{{ url('verify') }}" 
                           class="menu-item-button {{ request()->is('crypto') ? 'active' : '' }}">
                            <div class="icon">
                                <i class="icon-dash1"></i>
                            </div>
                            <div class="text">Verify account</div>
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
                {{-- <p class="f12-regular text-White">For more features</p>
                <p class="f12-bold text-White">Upgrade to Pro</p> --}}
            </div>
        </div>
    </div>
</div>
