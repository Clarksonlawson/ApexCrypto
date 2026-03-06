 <div class="flex min-h-screen bg-gray-900" x-cloak>

     <!-- Sidebar -->
     <aside x-cloak :class="sidebarOpen ? 'translate-x-0' : '-translate-x-full'"
         class="fixed z-50 md:z-40 top-0 left-0 w-72 h-full bg-white dark:bg-gray-900 shadow-xl transform transition-transform duration-300 ease-in-out md:translate-x-0 overflow-y-auto">

         <!-- User Profile Section -->
         <div class="relative p-4 border-b border-gray-200 dark:border-gray-700">
             <div class="flex items-center gap-4">
                 <div class="relative">

                     <div
                         class="w-16 h-16 rounded-full bg-gray-200 dark:bg-gray-700 flex items-center justify-center text-gray-600 dark:text-gray-300 text-lg font-medium mx-auto mb-3">
                          {{ substr(Auth::user()->name, 0, 1) }}
                     </div>
                     <div
                         class="absolute -bottom-1 -right-1 w-4 h-4 bg-green-500 rounded-full border-2 border-white dark:border-gray-900">
                     </div>
                 </div>
                 <div class="flex-1 min-w-0">
                     <h2 class="text-sm font-semibold text-gray-900 dark:text-white truncate">
                         {{ Auth::user()->name }}!
                     </h2>
                     <p class="text-xs text-gray-500 dark:text-gray-400 mt-0.5">
                         Account Balance: {{ number_format($account_balance, 2) }}
                     </p>
                 </div>
             </div>
         </div>

         <!-- Live Market Prices -->
         <div class="p-4 bg-gradient-to-r from-blue-50 to-indigo-50 dark:from-blue-900/20 dark:to-indigo-900/20"
             x-cloak>
             <div class="flex items-center justify-between mb-3">
                 <h3 class="text-xs font-semibold text-gray-600 dark:text-gray-300 uppercase">Live Market</h3>
                 <span class="flex items-center text-xs text-green-600 dark:text-green-400">
                     <div class="w-2 h-2 bg-green-500 rounded-full animate-pulse mr-2"></div>
                     <span class="font-medium">LIVE</span>
                 </span>
             </div>
             <div class="space-y-2">
                 <coingecko-coin-price-marquee-widget coin-ids="bitcoin,ethereum,eos,ripple,litecoin" currency="usd"
                     background-color="transparent" locale="en" font-color="#333">
                 </coingecko-coin-price-marquee-widget>
             </div>
         </div>

         <!-- Navigation Menu -->
         <nav class="p-4 space-y-6 text-sm pb-20" x-cloak>
             <!-- Overview Section -->
             <div class="space-y-2">
                 <div
                     class="flex items-center gap-2 px-2 text-xs font-semibold text-gray-600 dark:text-gray-400 uppercase">
                     <i data-lucide="layout-dashboard" class="w-4 h-4"></i>
                     <span>Overview</span>
                 </div>
                 <ul class="space-y-1">
                     <li>
                         <a href="{{ route('auth.dashboard') }}"
                             class="flex items-center px-3 py-2 text-gray-700 dark:text-gray-200 rounded-lg hover:bg-blue-50 dark:hover:bg-blue-900/50 transition-colors duration-150 bg-blue-50 dark:bg-blue-900/50 text-blue-600 dark:text-blue-400 font-medium">
                             <i data-lucide="layout-dashboard" class="w-5 h-5 mr-3"></i>
                             Dashboard
                         </a>
                     </li>
                     <li>
                         <a href="{{ route('auth.account.history') }}"
                             class="flex items-center px-3 py-2 text-gray-700 dark:text-gray-200 rounded-lg hover:bg-blue-50 dark:hover:bg-blue-900/50 transition-colors duration-150 ">
                             <i data-lucide="receipt" class="w-5 h-5 mr-3"></i>
                             Account Statement
                         </a>
                     </li>
                 </ul>
             </div>

             <div class="space-y-2">
                 <div
                     class="flex items-center gap-2 px-2 mt-6 text-xs font-semibold text-gray-600 dark:text-gray-400 uppercase">
                     <i data-lucide="briefcase" class="w-4 h-4"></i>
                     <span>Portfolio & Investments</span>
                 </div>

                 <!-- Investment Plans Dropdown -->
                 <div x-data="{ investmentOpen: false }" class="space-y-1">
                     <!-- Main Investment Plans Button -->
                     <button @click="investmentOpen = !investmentOpen"
                         class="flex items-center w-full px-3 py-2 text-gray-700 dark:text-gray-200 rounded-lg hover:bg-blue-50 dark:hover:bg-blue-900/50 transition-all duration-200 group ">
                         <i data-lucide="target" class="w-5 h-5 mr-3 transition-colors"></i>
                         <span class="flex-1 text-left font-medium">Investment Plans</span>
                         <div class="flex items-center space-x-2">
                             <i data-lucide="chevron-down" :class="investmentOpen ? 'rotate-180' : 'rotate-0'"
                                 class="w-4 h-4 transition-transform duration-200 text-gray-400"></i>
                         </div>
                     </button>

                     <!-- Dropdown Content -->
                     <div x-show="investmentOpen" x-transition:enter="transition ease-out duration-200"
                         x-transition:enter-start="opacity-0 -translate-y-2"
                         x-transition:enter-end="opacity-100 translate-y-0"
                         x-transition:leave="transition ease-in duration-150"
                         x-transition:leave-start="opacity-100 translate-y-0"
                         x-transition:leave-end="opacity-0 -translate-y-2"
                         class="ml-4 space-y-1 border-l-2 border-gray-200 dark:border-gray-700 pl-4" x-cloak>

                         <!-- All Investment Plans -->
                         <a href="{{ route('auth.investments') }}"
                             class="flex items-center px-3 py-2 text-gray-600 dark:text-gray-300 rounded-lg hover:bg-blue-50 dark:hover:bg-blue-900/50 transition-colors duration-150 group ">
                             <i data-lucide="list" class="w-4 h-4 mr-3"></i>
                             <span class="text-sm">All Plans</span>
                         </a>

                         <!-- Stock Market -->
                         <a href="{{ route('auth.stock.plans') }}"
                             class="flex items-center px-3 py-2 text-gray-600 dark:text-gray-300 rounded-lg hover:bg-blue-50 dark:hover:bg-blue-900/50 transition-colors duration-150 group ">
                             <i data-lucide="trending-up" class="w-4 h-4 mr-3 text-blue-500"></i>
                             <span class="text-sm">Stock Market</span>
                         </a>

                         <!-- Cryptocurrency -->
                         <a href="{{ route('auth.crypto.plans') }}"
                             class="flex items-center px-3 py-2 text-gray-600 dark:text-gray-300 rounded-lg hover:bg-orange-50 dark:hover:bg-orange-900/50 transition-colors duration-150 group ">
                             <i data-lucide="coins" class="w-4 h-4 mr-3 text-orange-500"></i>
                             <span class="text-sm">Cryptocurrency</span>
                         </a>

                         <!-- Real Estate -->
                         <a href="{{ route('auth.real.estate.plans') }}"
                             class="flex items-center px-3 py-2 text-gray-600 dark:text-gray-300 rounded-lg hover:bg-green-50 dark:hover:bg-green-900/50 transition-colors duration-150 group ">
                             <i data-lucide="home" class="w-4 h-4 mr-3 text-green-500"></i>
                             <span class="text-sm">Real Estate</span>
                         </a>
                     </div>
                 </div>

                 <!-- Portfolio Management (Separate from dropdown) -->
                 <ul class="space-y-1">
                     <li>
                         <a href="{{ route('auth.my.plans') }}"
                             class="flex items-center px-3 py-2 text-gray-700 dark:text-gray-200 rounded-lg hover:bg-blue-50 dark:hover:bg-blue-900/50 transition-colors duration-150 ">
                             <i data-lucide="pie-chart" class="w-5 h-5 mr-3"></i>
                             My Portfolio
                         </a>
                     </li>
                     <li>
                         <a href="{{ route('auth.trading.history') }}"
                             class="flex items-center px-3 py-2 text-gray-700 dark:text-gray-200 rounded-lg hover:bg-blue-50 dark:hover:bg-blue-900/50 transition-colors duration-150 ">
                             <i data-lucide="activity" class="w-5 h-5 mr-3"></i>
                             Performance History
                         </a>
                     </li>
                 </ul>
             </div>


             <!-- Trading & Markets Section -->
             <div class="space-y-2">
                 <div
                     class="flex items-center gap-2 px-2 mt-6 text-xs font-semibold text-gray-600 dark:text-gray-400 uppercase">
                     <i data-lucide="trending-up" class="w-4 h-4"></i>
                     <span>Trading & Markets</span>
                 </div>
                 <ul class="space-y-1">
                     <li>
                         <a href="{{route('demo.trading') }}"
                             class="group relative flex items-center px-3 py-2 text-gray-700 dark:text-gray-200 rounded-lg hover:bg-green-50 dark:hover:bg-green-900/50 transition-colors duration-150 ">
                             <i data-lucide="graduation-cap" class="w-5 h-5 mr-3"></i>
                             Demo Trading
                             <span
                                 class="ml-auto flex items-center px-2 py-0.5 text-xs font-medium text-white bg-gradient-to-r from-green-500 to-green-600 rounded-full">
                                 <i data-lucide="play" class="w-3 h-3 mr-1"></i>
                                 Practice
                             </span>
                             <div
                                 class="hidden group-hover:block absolute left-full ml-2 px-2 py-1 bg-gray-900 text-xs text-white rounded whitespace-nowrap">
                                 Practice with $100,000 virtual money
                             </div>
                         </a>
                     </li>
                     <li>
                         <a href="{{ route('live.markets') }}"
                             class="group relative flex items-center px-3 py-2 text-gray-700 dark:text-gray-200 rounded-lg hover:bg-blue-50 dark:hover:bg-blue-900/50 transition-colors duration-150 ">
                             <i data-lucide="candlestick-chart" class="w-5 h-5 mr-3"></i>
                             Live Markets
                             <span
                                 class="ml-auto flex items-center px-2 py-0.5 text-xs font-medium text-white bg-gradient-to-r from-red-500 to-red-600 rounded-full">
                                 <div class="w-1.5 h-1.5 bg-white rounded-full animate-pulse mr-1.5"></div>
                                 Live
                             </span>
                             <div
                                 class="hidden group-hover:block absolute left-full ml-2 px-2 py-1 bg-gray-900 text-xs text-white rounded whitespace-nowrap">
                                 Real-time market trading
                             </div>
                         </a>
                     </li>
                     {{-- <li>
                         <a href="https://remedyalgotradescript.sbs/dashboard/copy/dashboard"
                             class="group relative flex items-center px-3 py-2 text-gray-700 dark:text-gray-200 rounded-lg hover:bg-blue-50 dark:hover:bg-blue-900/50 transition-colors duration-150 ">
                             <i data-lucide="users-2" class="w-5 h-5 mr-3"></i>
                             Copy Trading
                             <span
                                 class="ml-auto px-2 py-0.5 text-xs font-medium text-white bg-gradient-to-r from-purple-500 to-purple-600 rounded-full">Pro</span>
                             <div
                                 class="hidden group-hover:block absolute left-full ml-2 px-2 py-1 bg-gray-900 text-xs text-white rounded whitespace-nowrap">
                                 Follow expert traders
                             </div>
                         </a>
                     </li>
                     <li>
                         <a href="https://remedyalgotradescript.sbs/dashboard/bot-trading"
                             class="group relative flex items-center px-3 py-2 text-gray-700 dark:text-gray-200 rounded-lg hover:bg-blue-50 dark:hover:bg-blue-900/50 transition-colors duration-150 ">
                             <i data-lucide="bot" class="w-5 h-5 mr-3"></i>
                             AI Trading Bots
                             <span
                                 class="ml-auto px-2 py-0.5 text-xs font-medium text-white bg-gradient-to-r from-blue-500 to-blue-600 rounded-full">AI</span>
                             <div
                                 class="hidden group-hover:block absolute left-full ml-2 px-2 py-1 bg-gray-900 text-xs text-white rounded whitespace-nowrap">
                                 Automated trading algorithms
                             </div>
                         </a>
                     </li> --}}
                 </ul>
             </div>

             {{-- <!-- Trading Signals Section -->
             <div class="space-y-2">
                 <div
                     class="flex items-center gap-2 px-2 mt-6 text-xs font-semibold text-gray-600 dark:text-gray-400 uppercase">
                     <i data-lucide="radio" class="w-4 h-4"></i>
                     <span>Market Intelligence</span>
                 </div>

                 <ul class="space-y-1">
                     <!---->
                     <li>
                         <a href="https://remedyalgotradescript.sbs/dashboard/signal"
                             class="group relative flex items-center px-3 py-2 text-gray-700 dark:text-gray-200 rounded-lg hover:bg-blue-50 dark:hover:bg-blue-900/50 transition-colors duration-150 ">
                             <i data-lucide="zap" class="w-5 h-5 mr-3"></i>
                             Premium Signals
                             <span
                                 class="ml-auto px-2 py-0.5 text-xs font-medium text-white bg-gradient-to-r from-yellow-500 to-orange-600 rounded-full">Premium</span>
                             <div
                                 class="hidden group-hover:block absolute left-full ml-2 px-2 py-1 bg-gray-900 text-xs text-white rounded whitespace-nowrap">
                                 Expert trading insights
                             </div>
                         </a>
                     </li>
                 </ul>
             </div> --}}

             <!-- Wallet & Funds Section -->
             <div class="space-y-2">
                 <div
                     class="flex items-center gap-2 px-2 mt-6 text-xs font-semibold text-gray-600 dark:text-gray-400 uppercase">
                     <i data-lucide="wallet" class="w-4 h-4"></i>
                     <span>Wallet & Funds</span>
                 </div>
                 <ul class="space-y-1">
                     <li>
                         <a href="{{route('auth.deposits') }}"
                             class="flex items-center px-3 py-2 text-gray-700 dark:text-gray-200 rounded-lg hover:bg-blue-50 dark:hover:bg-blue-900/50 transition-colors duration-150 ">
                             <i data-lucide="plus-circle" class="w-5 h-5 mr-3"></i>
                             Deposit Funds
                         </a>
                     </li>
                     <li>
                         <a href="{{route('auth.withdrawals') }}"
                             class="flex items-center px-3 py-2 text-gray-700 dark:text-gray-200 rounded-lg hover:bg-blue-50 dark:hover:bg-blue-900/50 transition-colors duration-150 ">
                             <i data-lucide="minus-circle" class="w-5 h-5 mr-3"></i>
                             Withdraw Funds
                         </a>
                     </li>
                     <li>
                         <a href="{{route('auth.transfer-funds') }}"
                             class="flex items-center px-3 py-2 text-gray-700 dark:text-gray-200 rounded-lg hover:bg-blue-50 dark:hover:bg-blue-900/50 transition-colors duration-150 ">
                             <i data-lucide="arrow-left-right" class="w-5 h-5 mr-3"></i>
                             Internal Transfer
                         </a>
                     </li>

                 </ul>
             </div>

             <!-- Credit & Financing Section -->
             <div class="space-y-2">
                 <div
                     class="flex items-center gap-2 px-2 mt-6 text-xs font-semibold text-gray-600 dark:text-gray-400 uppercase">
                     <i data-lucide="credit-card" class="w-4 h-4"></i>
                     <span>Credit & Financing</span>
                 </div>
                 <ul class="space-y-1">
                     <li>
                         <a href="{{route('auth.apply.loan') }}"
                             class="group relative flex items-center px-3 py-2 text-gray-700 dark:text-gray-200 rounded-lg hover:bg-blue-50 dark:hover:bg-blue-900/50 transition-colors duration-150 ">
                             <i data-lucide="file-plus" class="w-5 h-5 mr-3"></i>
                             Apply for Credit
                             <span
                                 class="ml-auto px-2 py-0.5 text-xs font-medium text-white bg-gradient-to-r from-green-500 to-green-600 rounded-full">Fast</span>
                             <div
                                 class="hidden group-hover:block absolute left-full ml-2 px-2 py-1 bg-gray-900 text-xs text-white rounded whitespace-nowrap">
                                 Apply for loans and credit facilities
                             </div>
                         </a>
                     </li>
                     <li>
                         <a href="{{route('auth.loan-history') }}"
                             class="group relative flex items-center px-3 py-2 text-gray-700 dark:text-gray-200 rounded-lg hover:bg-blue-50 dark:hover:bg-blue-900/50 transition-colors duration-150 ">
                             <i data-lucide="file-text" class="w-5 h-5 mr-3"></i>
                             Credit History
                             <div
                                 class="hidden group-hover:block absolute left-full ml-2 px-2 py-1 bg-gray-900 text-xs text-white rounded whitespace-nowrap">
                                 View your loan applications and status
                             </div>
                         </a>
                     </li>
                 </ul>
             </div>
             <!-- Account Management Section -->
             <div class="space-y-2">
                 <div
                     class="flex items-center gap-2 px-2 mt-6 text-xs font-semibold text-gray-600 dark:text-gray-400 uppercase">
                     <i data-lucide="user-circle" class="w-4 h-4"></i>
                     <span>Account Management</span>
                 </div>
                 <ul class="space-y-1">
                     <li>
                         <a href="{{route('auth.profile')}}"
                             class="flex items-center px-3 py-2 text-gray-700 dark:text-gray-200 rounded-lg hover:bg-blue-50 dark:hover:bg-blue-900/50 transition-colors duration-150 ">
                             <i data-lucide="user" class="w-5 h-5 mr-3"></i>
                             Profile Settings
                         </a>
                     </li>
                     <li x-data="{ kycOpen: false }" x-cloak>
                         <!-- KYC Dropdown -->
                         <div class="relative">
                             <button @click="kycOpen = !kycOpen"
                                 class="flex items-center w-full px-3 py-2 text-gray-700 dark:text-gray-200 rounded-lg hover:bg-gray-50 dark:hover:bg-gray-800 transition-colors duration-200 ">
                                 <i data-lucide="shield-alert" class="w-5 h-5 mr-3"></i>
                                 <span class="flex-1 text-left">Identity Verification</span>
                                 <i data-lucide="chevron-down" :class="kycOpen ? 'rotate-180' : 'rotate-0'"
                                     class="w-4 h-4 transition-transform duration-200"></i>
                             </button>

                             <!-- Dropdown Content -->
                             <div x-show="kycOpen" x-transition:enter="transition ease-out duration-200"
                                 x-transition:enter-start="opacity-0 -translate-y-2"
                                 x-transition:enter-end="opacity-100 translate-y-0"
                                 x-transition:leave="transition ease-in duration-150"
                                 x-transition:leave-start="opacity-100 translate-y-0"
                                 x-transition:leave-end="opacity-0 -translate-y-2"
                                 class="mt-2 ml-8 p-4 bg-white dark:bg-gray-800 rounded-lg border border-gray-100 dark:border-gray-700 shadow-sm"
                                 x-cloak>

                                 <h4 class="text-sm font-medium text-gray-900 dark:text-white mb-3">
                                     Identity Verification
                                 </h4>
                                     @switch(Auth::user()->verification_status)
                                        @case("in progress")
                                            <p class="text-sm text-gray-600 dark:text-gray-400 mb-4">
                                                Your account verification is currently in progress. You will be notified upon completion.
                                            </p>
                                            @break
                                        @case("pending")
                                        
                                            <p class="text-sm text-gray-600 dark:text-blue-400 mb-4">
                                                Complete your identity verification to unlock full trading features
                                            </p>
                                            <a href="{{route('verification')}}"
                                                class="inline-flex items-center gap-2 px-3 py-2 bg-blue-600 hover:bg-blue-700 text-white text-sm font-medium rounded-lg transition-colors duration-200">
                                                <i data-lucide="shield-check" class="w-4 h-4"></i>
                                                <span>Verify Now</span>
                                            </a>
                                            @break
                                        @case("verified")
                                            <p class="text-sm text-gray-600 dark:text-gray-400 mb-4">
                                                Your account is fully verified. You have access to all features and benefits.
                                            </p>
                                        @break
                                        @default
                                            
                                    @endswitch
                                 
                             </div>
                         </div>
                     </li>
                 </ul>
             </div>

             <!-- Growth & Referrals Section -->
             <div class="space-y-2">
                 <div
                     class="flex items-center gap-2 px-2 mt-6 text-xs font-semibold text-gray-600 dark:text-gray-400 uppercase">
                     <i data-lucide="trending-up" class="w-4 h-4"></i>
                     <span>Growth & Rewards</span>
                 </div>
                 <ul class="space-y-1">
                     <li>
                         <a href="{{route('referrals')}}"
                             class="group relative flex items-center px-3 py-2 text-gray-700 dark:text-gray-200 rounded-lg hover:bg-blue-50 dark:hover:bg-blue-900/50 transition-colors duration-150 ">
                             <i data-lucide="users" class="w-5 h-5 mr-3"></i>
                             Referral Program
                             <span
                                 class="ml-auto px-2 py-0.5 text-xs font-medium text-white bg-gradient-to-r from-emerald-500 to-emerald-600 rounded-full">5%</span>
                             <div
                                 class="hidden group-hover:block absolute left-full ml-2 px-2 py-1 bg-gray-900 text-xs text-white rounded whitespace-nowrap">
                                 Earn 5% commission on referrals
                             </div>
                         </a>
                     </li>
                 </ul>
             </div>

             <!-- Support & Help Section -->
             <div class="space-y-2">
                 <div
                     class="flex items-center gap-2 px-2 mt-6 text-xs font-semibold text-gray-600 dark:text-gray-400 uppercase">
                     <i data-lucide="help-circle" class="w-4 h-4"></i>
                     <span>Support & Help</span>
                 </div>
                 <ul class="space-y-1">
                     <li>
                         <a href="{{route('support')}}"
                             class="group relative flex items-center px-3 py-2 text-gray-700 dark:text-gray-200 rounded-lg hover:bg-blue-50 dark:hover:bg-blue-900/50 transition-colors duration-150 ">
                             <i data-lucide="headphones" class="w-5 h-5 mr-3"></i>
                             Support Center
                             <div
                                 class="hidden group-hover:block absolute left-full ml-2 px-2 py-1 bg-gray-900 text-xs text-white rounded whitespace-nowrap">
                                 Get help from our support team
                             </div>
                         </a>
                     </li>
                 </ul>
             </div>

             <!-- Account Actions -->
             <div class="mt-6 p-4 border-t border-gray-200 dark:border-gray-700">
                 <!-- Language Translator (Mobile/Sidebar) -->

                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <button type="submit"
                        class="flex items-center w-full px-3 py-2 text-red-600 dark:text-red-400 rounded-lg hover:bg-red-50 dark:hover:bg-red-900/50 transition-colors duration-150">
                        <i data-lucide="log-out" class="w-5 h-5 mr-3"></i>
                        <span>Sign Out</span>
                    </button>
                </form>
             </div>
         </nav>
     </aside>

     <!-- Sidebar overlay for mobile -->
     <div x-show="sidebarOpen" @click="sidebarOpen = false"
         class="fixed inset-0 bg-black bg-opacity-50 z-40 md:hidden" x-cloak>
     </div>

     <!-- Main content placeholder -->
 </div>
