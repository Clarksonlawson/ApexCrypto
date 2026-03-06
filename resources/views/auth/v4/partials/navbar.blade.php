<!-- Professional Trading Navbar -->
<nav x-data="{
    open: false,
    darkMode: localStorage.theme === 'dark' || !localStorage.theme,
    notificationOpen: false,
    quickActionsOpen: false
    }"
    class="bg-white/98 dark:bg-gray-900/98 backdrop-blur-xl border-b border-gray-200/80 dark:border-gray-700/80 sticky top-0 z-50 shadow-sm dark:shadow-gray-900/20" x-cloak>

  <!-- Main Navigation Container -->
  <div class="max-w-7xl mx-auto px-6 lg:px-8">
    <div class="flex justify-between items-center h-20">

      <!-- Left Section: Logo & Quick Market Info -->
      <div class="flex items-center space-x-4">
        <!-- Logo -->
        <a href="{{ route('user.dashboard') }}" class="flex items-center space-x-3 group">
          <img src="{{ asset('assets/images/logo/logo.png') }}" class="h-8 w-auto" alt="Logo" />
          <div class="hidden sm:block">
            <span class="text-lg font-bold text-gray-900 dark:text-white group-hover:text-blue-600 dark:group-hover:text-blue-400 transition-colors">
             Apex
            </span>
            <div class="text-xs text-gray-500 dark:text-gray-400 font-medium">
              Professional Trading
            </div>
          </div>
        </a>

        <!-- Live Market Ticker (Hidden on small screens) -->
        <div class="hidden lg:flex items-center space-x-4 ml-8 pl-8 border-l border-gray-200 dark:border-gray-700"
             x-data="cryptoPrices()" x-init="fetchPrices()">
          <div class="flex items-center space-x-2">
            <div class="w-2 h-2 bg-green-500 rounded-full animate-pulse"></div>
            <span class="text-xs font-medium text-gray-600 dark:text-gray-300">LIVE</span>
          </div>
          <div class="text-sm">
            <span class="text-gray-500 dark:text-gray-400">BTC:</span>
            <span class="font-mono ml-1"
                  :class="btcChange >= 0 ? 'text-green-600 dark:text-green-400' : 'text-red-600 dark:text-red-400'"
                  x-text="'$' + (btcPrice ? btcPrice.toLocaleString() : '...')"></span>
          </div>
          <div class="text-sm">
            <span class="text-gray-500 dark:text-gray-400">ETH:</span>
            <span class="font-mono ml-1"
                  :class="ethChange >= 0 ? 'text-green-600 dark:text-green-400' : 'text-red-600 dark:text-red-400'"
                  x-text="'$' + (ethPrice ? ethPrice.toLocaleString() : '...')"></span>
          </div>
        </div>
      </div>

      <!-- Center Section: Account Balance (Desktop) -->
      <div class="hidden md:flex items-center space-x-6">
        <div class="bg-gradient-to-r from-blue-50 to-indigo-50 dark:from-blue-900/20 dark:to-indigo-900/20 px-4 py-2 rounded-lg border border-blue-100 dark:border-blue-800">
          <div class="text-xs text-gray-500 dark:text-gray-400 uppercase tracking-wide">Account Balance</div>
          <div class="text-lg font-bold text-gray-900 dark:text-white">
            ${{ number_format($account_balance, 2)   }}
          </div>
        </div>
      </div>

      <!-- Right Section: Actions & User -->
      <div class="flex items-center space-x-2">

        <!-- Quick Actions Dropdown (Desktop) -->
        <div class="hidden md:block relative" x-data="{ quickActionsOpen: false }">
          <button @click="quickActionsOpen = !quickActionsOpen"
                  class="flex items-center space-x-2 px-3 py-2 text-sm font-medium text-gray-700 dark:text-gray-300 hover:text-blue-600 dark:hover:text-blue-400 hover:bg-gray-50 dark:hover:bg-gray-800 rounded-lg transition-all duration-200">
            <i data-lucide="zap" class="w-4 h-4"></i>
            <span>Quick Trade</span>
            <i data-lucide="chevron-down" class="w-4 h-4" :class="quickActionsOpen ? 'rotate-180' : ''"></i>
          </button>

          <div x-show="quickActionsOpen" @click.away="quickActionsOpen = false"
               x-transition:enter="transition ease-out duration-200"
               x-transition:enter-start="opacity-0 scale-95"
               x-transition:enter-end="opacity-100 scale-100"
               class="absolute right-0 mt-2 w-56 bg-white dark:bg-gray-800 rounded-lg shadow-lg border border-gray-200 dark:border-gray-700 z-20" x-cloak>
            <div class="p-2">
              <a href="{{ route('user.deposits') }}" class="flex items-center px-3 py-2 text-sm text-gray-700 dark:text-gray-300 hover:bg-blue-50 dark:hover:bg-blue-900/20 rounded-md">
                <i data-lucide="plus-circle" class="w-4 h-4 mr-3 text-green-500"></i>
                Deposit Funds
              </a>
              <a href="{{ route('user.withdrawals') }}" class="flex items-center px-3 py-2 text-sm text-gray-700 dark:text-gray-300 hover:bg-blue-50 dark:hover:bg-blue-900/20 rounded-md">
                <i data-lucide="minus-circle" class="w-4 h-4 mr-3 text-red-500"></i>
                Withdraw
              </a>
              {{-- <a href="https://remedyalgotradescript.sbs/dashboard/trade" class="flex items-center px-3 py-2 text-sm text-gray-700 dark:text-gray-300 hover:bg-blue-50 dark:hover:bg-blue-900/20 rounded-md">
                <i data-lucide="trending-up" class="w-4 h-4 mr-3 text-blue-500"></i>
                Trade Markets
              </a> --}}
            </div>
          </div>
        </div>

        <!-- Notifications -->
        <div class="relative" x-data="{ notificationOpen: false }">
          <button @click="notificationOpen = !notificationOpen"
                  class="relative p-2 text-gray-600 dark:text-gray-300 hover:text-blue-600 dark:hover:text-blue-400 hover:bg-gray-50 dark:hover:bg-gray-800 rounded-lg transition-all duration-200">
            <i data-lucide="bell" class="w-5 h-5"></i>
                                        <span class="absolute -top-1 -right-1 flex items-center justify-center min-w-[18px] h-[18px] text-xs font-medium text-white bg-red-500 rounded-full px-1 border-2 border-white dark:border-gray-900">
                    {{ $unreadCount }}
                </span>
                      </button>

          <div x-show="notificationOpen" @click.away="notificationOpen = false"
               x-transition:enter="transition ease-out duration-200"
               x-transition:enter-start="opacity-0 scale-95"
               x-transition:enter-end="opacity-100 scale-100"
               class="absolute right-0 sm:right-0 sm:left-auto left-1/2 sm:transform-none transform -translate-x-1/2 mt-2 w-80 max-w-[90vw] bg-white dark:bg-gray-800 rounded-lg shadow-lg border border-gray-200 dark:border-gray-700 z-20" x-cloak>
            <div class="px-4 py-3 border-b border-gray-200 dark:border-gray-700 flex justify-between items-center">
              <h3 class="text-sm font-semibold text-gray-900 dark:text-white">
                Notifications
                                  <span class="ml-2 inline-flex items-center justify-center px-2 py-1 text-xs font-bold leading-none text-red-100 bg-red-500 rounded-full">
                     {{ $unreadCount }}
                  </span>
                              </h3>
              
            </div>

            <div class="max-h-[60vh] overflow-y-auto">
              @forelse($notifications as $notification)
                <a href="{{ url('/notifications/'.$notification->id) }}"
                  class="block border-b border-gray-100 dark:border-gray-700 last:border-0 hover:bg-gray-50 dark:hover:bg-gray-700/50 transition-colors">

                <div class="px-4 py-3 {{ $notification->read_at ? '' : 'bg-blue-50 dark:bg-blue-900/10' }}">
                <div class="flex items-start">

                <div class="flex-shrink-0 mt-0.5">
                <span class="flex h-8 w-8 rounded-full items-center justify-center bg-blue-100 text-blue-600 dark:bg-blue-900/20 dark:text-blue-500">
                <i data-lucide="info" class="w-4 h-4"></i>
                </span>
                </div>

                <div class="ml-3 w-0 flex-1">

                <p class="text-sm font-medium text-gray-900 dark:text-white font-semibold">
                {{ $notification->data['title'] ?? 'Notification' }}
                </p>

                <p class="mt-1 text-sm text-gray-500 dark:text-gray-400 line-clamp-2">
                {{ $notification->data['message'] ?? '' }}
                </p>

                <p class="mt-1 text-xs text-gray-400 dark:text-gray-500">
                {{ $notification->created_at->diffForHumans() }}
                </p>

                </div>
                </div>
                </div>
                </a>
                @empty

                <div class="px-4 py-4 text-center text-gray-500 text-sm">
                No notifications
                </div>

                @endforelse
             
            </div>

                          <div class="px-4 py-3 border-t border-gray-200 dark:border-gray-700 text-center">
                <a href="{{ route('user.notifications') }}" class="text-sm text-blue-600 dark:text-blue-400 hover:underline">View all notifications</a>
              </div>
                      </div>
        </div>

        <!-- Dark Mode Toggle -->
        <button
          x-data="{ darkMode: localStorage.getItem('theme') === 'dark' }"
          @click="darkMode = !darkMode; localStorage.setItem('theme', darkMode ? 'dark' : 'light'); document.documentElement.classList.toggle('dark', darkMode)"
          class="p-2 text-gray-600 dark:text-gray-300 hover:text-blue-600 dark:hover:text-blue-400 hover:bg-gray-50 dark:hover:bg-gray-800 rounded-lg transition-all duration-200"
          :aria-pressed="darkMode">
          <i data-lucide="sun" x-show="!darkMode" class="w-5 h-5"></i>
          <i data-lucide="moon" x-show="darkMode" class="w-5 h-5"></i>
        </button>

        <!-- Language Translator (Desktop) -->


        <!-- User Profile Dropdown -->
        <div class="relative" x-data="{ dropdownOpen: false }">
          <button @click="dropdownOpen = !dropdownOpen"
                  class="flex items-center space-x-3 px-2 py-2 text-sm rounded-lg hover:bg-gray-50 dark:hover:bg-gray-800 transition-all duration-200 focus:outline-none">
            <div class="flex items-center space-x-2">
              <div class="w-8 h-8 rounded-full bg-gradient-to-r from-blue-500 to-indigo-600 flex items-center justify-center text-white text-sm font-medium">
               {{ substr(Auth::user()->name, 0, 1) }}
              </div>
              <div class="hidden sm:block text-left">
                <div class="text-sm font-medium text-gray-900 dark:text-white truncate max-w-[120px]">
                  {{ Auth::user()->name }}
                </div>
                <div class="text-xs text-gray-500 dark:text-gray-400">
                  Trading Account
                </div>
              </div>
            </div>
            <i data-lucide="chevron-down" class="w-4 h-4 text-gray-400" :class="dropdownOpen ? 'rotate-180' : ''"></i>
          </button>

          <div x-show="dropdownOpen" @click.away="dropdownOpen = false"
               x-transition:enter="transition ease-out duration-200"
               x-transition:enter-start="opacity-0 scale-95"
               x-transition:enter-end="opacity-100 scale-100"
               class="absolute right-0 mt-2 w-64 bg-white dark:bg-gray-800 rounded-lg shadow-lg border border-gray-200 dark:border-gray-700 z-20" x-cloak>

            <!-- User Info Header -->
            <div class="p-4 border-b border-gray-200 dark:border-gray-700">
              <div class="flex items-center space-x-3">
                <div class="w-12 h-12 rounded-full bg-gradient-to-r from-blue-500 to-indigo-600 flex items-center justify-center text-white text-lg font-medium">
                  {{ substr(Auth::user()->name, 0, 1) }}
                </div>
                <div>
                  <div class="text-sm font-medium text-gray-900 dark:text-white">
                    {{ Auth::user()->name }}
                  </div>
                  <div class="text-xs text-gray-500 dark:text-gray-400">
                    ${{ number_format($account_balance, 2) }}
                  </div>
                </div>
              </div>
            </div>

            <!-- Menu Items -->
            <div class="p-2">
              <a href="{{ route('auth.profile') }}" class="flex items-center px-3 py-2 text-sm text-gray-700 dark:text-gray-300 hover:bg-blue-50 dark:hover:bg-blue-900/20 rounded-md">
                <i data-lucide="user" class="w-4 h-4 mr-3"></i>
                Profile Settings
              </a>
              <a href="{{ route('auth.account.history') }}" class="flex items-center px-3 py-2 text-sm text-gray-700 dark:text-gray-300 hover:bg-blue-50 dark:hover:bg-blue-900/20 rounded-md">
                <i data-lucide="receipt" class="w-4 h-4 mr-3"></i>
                Account History
              </a>
              <a href="" class="flex items-center px-3 py-2 text-sm text-gray-700 dark:text-gray-300 hover:bg-blue-50 dark:hover:bg-blue-900/20 rounded-md">
                <i data-lucide="help-circle" class="w-4 h-4 mr-3"></i>
                Support Center
              </a>
              <div class="border-t border-gray-200 dark:border-gray-600 my-2"></div>
              <form method="POST" action="{{ route('logout') }}">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">                <button type="submit" class="w-full flex items-center px-3 py-2 text-sm text-red-600 dark:text-red-400 hover:bg-red-50 dark:hover:bg-red-900/20 rounded-md">
                  <i data-lucide="log-out" class="w-4 h-4 mr-3"></i>
                  Sign Out
                </button>
              </form>
            </div>
          </div>
        </div>

        <!-- Mobile Menu Button -->
        <button @click="sidebarOpen = !sidebarOpen"
                class="md:hidden p-2 text-gray-600 dark:text-gray-300 hover:text-blue-600 dark:hover:text-blue-400 hover:bg-gray-50 dark:hover:bg-gray-800 rounded-lg transition-all duration-200">
          <i data-lucide="menu" x-show="!sidebarOpen" class="w-5 h-5"></i>
          <i data-lucide="x" x-show="sidebarOpen" class="w-5 h-5"></i>
        </button>
      </div>
    </div>
  </div>

  <!-- Mobile Market Ticker -->
  <div class="lg:hidden bg-gray-50 dark:bg-gray-800/50 border-t border-gray-200 dark:border-gray-700 px-4 py-2"
       x-data="cryptoPrices()" x-init="fetchPrices()">
    <div class="flex items-center justify-between text-xs">
      <div class="flex items-center space-x-4">
        <div class="flex items-center space-x-1">
          <div class="w-1.5 h-1.5 bg-green-500 rounded-full animate-pulse"></div>
          <span class="text-gray-600 dark:text-gray-400">LIVE</span>
        </div>
        <div>
          <span class="text-gray-500 dark:text-gray-400">BTC:</span>
          <span class="font-mono ml-1"
                :class="btcChange >= 0 ? 'text-green-600 dark:text-green-400' : 'text-red-600 dark:text-red-400'"
                x-text="'$' + (btcPrice ? btcPrice.toLocaleString() : '...')"></span>
        </div>
        <div>
          <span class="text-gray-500 dark:text-gray-400">ETH:</span>
          <span class="font-mono ml-1"
                :class="ethChange >= 0 ? 'text-green-600 dark:text-green-400' : 'text-red-600 dark:text-red-400'"
                x-text="'$' + (ethPrice ? ethPrice.toLocaleString() : '...')"></span>
        </div>
      </div>
      <div class="md:hidden">
        <div class="text-gray-500 dark:text-gray-400">Balance:</div>
        <div class="font-semibold text-gray-900 dark:text-white">
          ${{ number_format($account_balance, 2) }}
        </div>
      </div>
    </div>
  </div>
</nav>


