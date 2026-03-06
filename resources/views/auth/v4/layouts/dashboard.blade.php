<!DOCTYPE html>
<html lang="en" x-data="{ darkMode: localStorage.getItem('theme') === 'light' ? false : true }" :class="{ 'dark': darkMode }" class="dark bg-gray-900">

<head>
    <meta charset="UTF-8">
    <title>@yield('title')</title>
    <meta http-equiv="content-type" content="text/html;charset=UTF-8" />
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://remedyalgotradescript.sbs/storage/app/public/photos/Px9MifdF6k4uRiyRSGBX6qi4kKWtbhpkYNQrAouw.png"
        rel="icon" type="image/x-icon" />
    <!-- Inter Font -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="https://unpkg.com/lucide@latest/dist/umd/lucide.js"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <!-- Tailwind CSS CDN -->
    <script src="https://cdn.tailwindcss.com"></script>

    <!-- Enable dark mode class strategy -->
    <script>
        tailwind.config = {
            darkMode: 'class',
            theme: {
                extend: {
                    fontFamily: {
                        sans: ['Inter', 'sans-serif'],
                    },
                    colors: {
                        primary: {
                            50: '#eef2ff',
                            100: '#e0e7ff',
                            200: '#c7d2fe',
                            300: '#a5b4fc',
                            400: '#818cf8',
                            500: '#6366f1',
                            600: '#4f46e5',
                            700: '#4338ca',
                            800: '#3730a3',
                            900: '#312e81',
                        },
                        'glass': 'rgba(255, 255, 255, 0.05)',
                    },
                    backdropBlur: {
                        'xs': '2px',
                    },
                    animation: {
                        'gradient-x': 'gradient-x 15s ease infinite',
                        'gradient-y': 'gradient-y 15s ease infinite',
                        'gradient-xy': 'gradient-xy 15s ease infinite',
                        'pulse-slow': 'pulse 4s cubic-bezier(0.4, 0, 0.6, 1) infinite',
                        'float': 'float 6s ease-in-out infinite',
                    },
                    keyframes: {
                        'gradient-y': {
                            '0%, 100%': {
                                'background-size': '400% 400%',
                                'background-position': 'center top'
                            },
                            '50%': {
                                'background-size': '200% 200%',
                                'background-position': 'center center'
                            }
                        },
                        'gradient-x': {
                            '0%, 100%': {
                                'background-size': '200% 200%',
                                'background-position': 'left center'
                            },
                            '50%': {
                                'background-size': '200% 200%',
                                'background-position': 'right center'
                            }
                        },
                        'gradient-xy': {
                            '0%, 100%': {
                                'background-size': '400% 400%',
                                'background-position': 'left center'
                            },
                            '50%': {
                                'background-size': '200% 200%',
                                'background-position': 'right center'
                            }
                        },
                        'float': {
                            '0%, 100%': {
                                transform: 'translateY(0)'
                            },
                            '50%': {
                                transform: 'translateY(-10px)'
                            }
                        }
                    }
                }
            }
        }
    </script>

    <script src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js" defer></script>
    <script>
        // Set dark mode as default if no preference is stored
        if (!localStorage.getItem('theme')) {
            localStorage.setItem('theme', 'dark');
            document.documentElement.classList.add('dark');
        }

        document.addEventListener('alpine:init', () => {
            Alpine.store('theme', {
                init() {
                    // Default to dark if no preference is set
                    this.darkMode = localStorage.getItem('theme') === 'dark' || !localStorage.getItem(
                        'theme');
                    this.updateTheme();
                },
                darkMode: true, // Set default to true
                toggle() {
                    this.darkMode = !this.darkMode;
                    this.updateTheme();
                },
                updateTheme() {
                    localStorage.setItem('theme', this.darkMode ? 'dark' : 'light');
                    document.documentElement.classList.toggle('dark', this.darkMode);
                }
            });
        });
    </script>
    <script src="https://unpkg.com/lucide@latest"></script>
    <!-- Tailwind CDN -->
</head>

<body x-data="{ darkMode: localStorage.theme === 'dark' || !localStorage.theme, sidebarOpen: false }" :class="{ 'dark': darkMode }" class="dark text-gray-100 bg-gray-900" x-cloak>
    <style>
        body {
            overflow-x: hidden;
        }

        [x-cloak] {
            display: none !important;
        }
    </style>
    @include('auth.v4.partials.navbar')

    <div class="flex min-h-screen bg-gray-900" x-cloak>

        <!-- Sidebar -->
        @include('auth.v4.partials.sidebar')

        <!-- Sidebar overlay for mobile -->
        <div x-show="sidebarOpen" @click="sidebarOpen = false"
            class="fixed inset-0 bg-black bg-opacity-50 z-40 md:hidden" x-cloak>
        </div>

        <!-- Main content placeholder -->
        <div class="flex-1 ml-0 md:ml-64 p-4 pb-20 md:pb-4">
            <!-- Your main dashboard content goes here -->
           @yield('content')

            <script>
                function changeTimeframe(interval) {
                    if (widget) {
                        widget.chart().setResolution(interval);
                    }
                }

                // Asset selection enhancement with logo display
                document.addEventListener('DOMContentLoaded', function() {
                    const assetSelect = document.getElementById('select_assetss');

                    if (assetSelect) {
                        // Create logo display element if it doesn't exist
                        let logoDisplay = document.getElementById('asset-logo-display');
                        if (!logoDisplay) {
                            logoDisplay = document.createElement('div');
                            logoDisplay.id = 'asset-logo-display';
                            logoDisplay.className = 'flex items-center gap-2 mt-2';
                            logoDisplay.innerHTML =
                                '<img id="asset-logo" class="w-6 h-6 rounded-full hidden" alt="Asset Logo"><span id="asset-name" class="text-sm text-gray-600 dark:text-gray-400"></span>';
                            assetSelect.parentNode.appendChild(logoDisplay);
                        }

                        // Function to update logo display
                        function updateAssetLogo() {
                            const selectedOption = assetSelect.options[assetSelect.selectedIndex];
                            const logoImg = document.getElementById('asset-logo');
                            const assetName = document.getElementById('asset-name');

                            if (selectedOption && selectedOption.dataset.logo && selectedOption.dataset.logo !== 'null' &&
                                selectedOption.dataset.logo !== '') {
                                logoImg.src = selectedOption.dataset.logo;
                                logoImg.classList.remove('hidden');
                                logoImg.onerror = function() {
                                    this.classList.add('hidden');
                                };
                            } else {
                                logoImg.classList.add('hidden');
                            }

                            if (assetName) {
                                // Use instrument name if available, otherwise use symbol
                                const displayName = selectedOption.dataset.name || selectedOption.text;
                                assetName.textContent = displayName;
                            }
                        }

                        // Update logo on selection change
                        assetSelect.addEventListener('change', updateAssetLogo);

                        // Initialize logo display
                        updateAssetLogo();
                    }
                });
            </script>
        </div>
    </div>





    <!-- Modern Mobile Navigation with Glassmorphism -->
    <link href="https://unpkg.com/lucide@latest" rel="stylesheet">

    <div class="fixed bottom-0 w-full z-30 md:hidden" x-data="{ fabOpen: false }" x-cloak>
        <!-- Bottom Navigation Bar with Glassmorphism -->
        <div
            class="flex justify-between items-center bg-white/80 dark:bg-gray-900/80 backdrop-blur-lg px-6 py-4 shadow-[0_-8px_30px_rgba(0,0,0,0.12)] relative border-t border-gray-200/20 dark:border-gray-700/20">
            <!-- Language Selector (Mobile) -->
            <div class="group flex flex-col items-center relative">
                <div class="relative">
                    <div class="gtranslate_wrapper_mobile_nav"></div>
                    <style>
                        .gtranslate_wrapper_mobile_nav {
                            display: flex;
                            flex-direction: column;
                            align-items: center;
                        }

                        .gtranslate_wrapper_mobile_nav .gt_float_wrapper {
                            position: static !important;
                            transform: none !important;
                            background: transparent !important;
                            box-shadow: none !important;
                            border: none !important;
                            border-radius: 0 !important;
                            width: auto !important;
                            height: auto !important;
                            display: flex !important;
                            flex-direction: column !important;
                            align-items: center !important;
                        }

                        .gtranslate_wrapper_mobile_nav .gt_float_wrapper a {
                            background: transparent !important;
                            border: none !important;
                            box-shadow: none !important;
                            display: flex !important;
                            flex-direction: column !important;
                            align-items: center !important;
                            text-decoration: none !important;
                            transition: all 0.2s ease !important;
                        }

                        .gtranslate_wrapper_mobile_nav .gt_float_wrapper a:hover {
                            transform: scale(1.05) !important;
                        }

                        .gtranslate_wrapper_mobile_nav .gt_float_wrapper img {
                            width: 24px !important;
                            height: 24px !important;
                            border-radius: 4px !important;
                            margin: 0 !important;
                        }

                        .gtranslate_wrapper_mobile_nav .gt_float_wrapper .gt_options {
                            position: fixed !important;
                            bottom: 80px !important;
                            left: 50% !important;
                            transform: translateX(-50%) !important;
                            background: white !important;
                            border: 1px solid #e5e7eb !important;
                            border-radius: 12px !important;
                            box-shadow: 0 10px 15px -3px rgba(0, 0, 0, 0.1), 0 4px 6px -2px rgba(0, 0, 0, 0.05) !important;
                            z-index: 1000 !important;
                            max-height: 300px !important;
                            overflow-y: auto !important;
                            width: 280px !important;
                            max-width: 90vw !important;
                        }

                        .dark .gtranslate_wrapper_mobile_nav .gt_float_wrapper .gt_options {
                            background: #374151 !important;
                            border-color: #4b5563 !important;
                        }

                        .gtranslate_wrapper_mobile_nav .gt_float_wrapper .gt_options a {
                            padding: 8px 12px !important;
                            display: flex !important;
                            align-items: center !important;
                            flex-direction: row !important;
                            gap: 8px !important;
                            color: #374151 !important;
                            font-size: 14px !important;
                            border-bottom: 1px solid #f3f4f6 !important;
                        }

                        .dark .gtranslate_wrapper_mobile_nav .gt_float_wrapper .gt_options a {
                            color: #f9fafb !important;
                            border-bottom-color: #4b5563 !important;
                        }

                        .gtranslate_wrapper_mobile_nav .gt_float_wrapper .gt_options a:hover {
                            background: #f3f4f6 !important;
                            transform: none !important;
                        }

                        .dark .gtranslate_wrapper_mobile_nav .gt_float_wrapper .gt_options a:hover {
                            background: #4b5563 !important;
                        }

                        .gtranslate_wrapper_mobile_nav .gt_float_wrapper .gt_options a:last-child {
                            border-bottom: none !important;
                        }

                        .gtranslate_wrapper_mobile_nav .gt_float_wrapper .gt_options img {
                            width: 20px !important;
                            height: 20px !important;
                        }
                    </style>
                    <script>
                        if (!window.gtranslateSettingsMobileNav) {
                            window.gtranslateSettingsMobileNav = {
                                "default_language": "en",
                                "wrapper_selector": ".gtranslate_wrapper_mobile_nav",
                                "flag_style": "3d",
                                "alt_flags": {
                                    "en": "usa"
                                },
                                "switcher_horizontal_position": "center",
                                "switcher_vertical_position": "bottom"
                            };

                            // Load script for mobile nav if not already loaded
                            var script = document.createElement('script');
                            script.src = 'https://cdn.gtranslate.net/widgets/latest/float.js';
                            script.defer = true;
                            document.head.appendChild(script);
                        }
                    </script>

                    <i data-lucide="globe"
                        class="w-6 h-6 text-gray-500 group-hover:text-blue-600 transition-colors duration-200"></i>
                </div>
                <span class="text-xs mt-1 text-gray-500 group-hover:text-blue-600">Language</span>
            </div>

            <a href="https://remedyalgotradescript.sbs/dashboard/deposits"
                class="group flex flex-col items-center relative">
                <div
                    class="p-2 rounded-xl transition-all duration-300 ease-out
                  hover:bg-gray-100 dark:hover:bg-gray-800">
                    <i data-lucide="banknote"
                        class="w-6 h-6
           text-gray-500 group-hover:text-blue-600 dark:text-gray-400 dark:group-hover:text-blue-400
           transition-colors duration-300"></i>
                </div>
                <span
                    class="text-xs font-medium mt-1
            text-gray-500 group-hover:text-blue-600 dark:text-gray-400 dark:group-hover:text-blue-400
            transition-colors duration-300">Deposit</span>
            </a>

            <a href="https://remedyalgotradescript.sbs/dashboard/account-settings"
                class="group flex flex-col items-center relative">
                <div
                    class="p-2 rounded-xl transition-all duration-300 ease-out
                  hover:bg-gray-100 dark:hover:bg-gray-800">
                    <i data-lucide="user"
                        class="w-6 h-6
           text-gray-500 group-hover:text-blue-600 dark:text-gray-400 dark:group-hover:text-blue-400
           transition-colors duration-300"></i>
                </div>
                <span
                    class="text-xs font-medium mt-1
            text-gray-500 group-hover:text-blue-600 dark:text-gray-400 dark:group-hover:text-blue-400
            transition-colors duration-300">Profile</span>
            </a>

            <!-- Animated FAB Button -->
            <button @click="fabOpen = !fabOpen"
                class="absolute -top-7 left-1/2 transform -translate-x-1/2
                   bg-gradient-to-r from-blue-600 to-indigo-600 text-white
                   w-14 h-14 rounded-full flex items-center justify-center
                   shadow-[0_8px_30px_rgba(59,130,246,0.5)]
                   border-4 border-white dark:border-gray-900
                   hover:scale-110 hover:shadow-[0_8px_35px_rgba(59,130,246,0.6)]
                   active:scale-95
                   transition-all duration-300 ease-out">
                <i data-lucide="zap" class="w-6 h-6 transform transition-transform group-hover:scale-110"></i>
                <!-- Pulse Effect -->
                <span class="absolute w-full h-full rounded-full bg-blue-500 animate-ping opacity-20"></span>
            </button>

            <a href="https://remedyalgotradescript.sbs/dashboard/support"
                class="flex flex-col items-center
          text-gray-500
          hover:text-blue-600">
                <i data-lucide="life-buoy" class="w-6 h-6"></i>
                <span class="text-xs mt-1">Support</span>
            </a>



            <a href="https://remedyalgotradescript.sbs/dashboard"
                class="flex flex-col items-center
          text-blue-600 hover:text-blue-600">
                <i data-lucide="home" class="w-6 h-6 transition-colors duration-200"></i>
                <span class="text-xs mt-1">Home</span>
            </a>
        </div>

        <!-- Modern FAB Overlay Menu -->
        <div x-show="fabOpen" @click.away="fabOpen = false"
            class="fixed inset-0 bg-gray-900/70 backdrop-blur-sm z-40 flex items-center justify-center p-4"
            x-transition:enter="transition ease-out duration-300" x-transition:enter-start="opacity-0"
            x-transition:enter-end="opacity-100" x-transition:leave="transition ease-in duration-200"
            x-transition:leave-start="opacity-100" x-transition:leave-end="opacity-0" x-cloak>

            <!-- Menu Card -->
            <div
                class="bg-gray-900 p-6 rounded-2xl
                shadow-[0_8px_30px_rgba(0,0,0,0.3)]
                space-y-4 w-72 max-w-full
                border border-gray-700
                transform transition-all duration-300
                animate-slideUp">

                <!-- Quick Actions Grid -->
                <div class="grid grid-cols-2 gap-4 mb-6">
                    <a href="https://remedyalgotradescript.sbs/dashboard/buy-plan"
                        class="flex flex-col items-center p-4 rounded-xl
                  bg-gray-800 border border-gray-700
                  hover:bg-gray-700 hover:shadow-lg hover:scale-105 transition-all duration-300
                  group">
                        <i data-lucide="trending-up"
                            class="w-6 h-6 mb-2 text-blue-400
                                              group-hover:scale-110 transition-transform duration-300"></i>
                        <span class="text-sm font-medium text-gray-200">Invest</span>
                    </a>

                    <a href="https://remedyalgotradescript.sbs/dashboard/withdrawals"
                        class="flex flex-col items-center p-4 rounded-xl
                  bg-gray-800 border border-gray-700
                  hover:bg-gray-700 hover:shadow-lg hover:scale-105 transition-all duration-300
                  group">
                        <i data-lucide="wallet"
                            class="w-6 h-6 mb-2 text-green-400
                                       group-hover:scale-110 transition-transform duration-300"></i>
                        <span class="text-sm font-medium text-gray-200">Withdraw</span>
                    </a>
                </div>

                <!-- Menu Links -->
                <div class="space-y-2">
                    <a href="https://remedyalgotradescript.sbs/demo/dashboard"
                        class="flex items-center p-3 rounded-lg text-gray-100
                          hover:bg-gray-800
                          transition-colors duration-200 group">
                        <i data-lucide="graduation-cap"
                            class="w-5 h-5 mr-3 text-green-400
                                     group-hover:scale-110 transition-transform duration-300"></i>
                        <span class="font-medium">Demo Trading</span>
                        <span class="ml-auto text-xs font-bold text-green-400">Practice</span>
                    </a>

                    <a href="https://remedyalgotradescript.sbs/dashboard/copy/dashboard"
                        class="flex items-center p-3 rounded-lg text-gray-100
                          hover:bg-gray-800
                          transition-colors duration-200 group">
                        <i data-lucide="copy"
                            class="w-5 h-5 mr-3 text-blue-400
                                     group-hover:scale-110 transition-transform duration-300"></i>
                        <span class="font-medium">Copy Trading</span>
                        <!--<span class="ml-auto text-xs font-bold text-green-400">New</span>-->
                    </a>

                    <a href="https://remedyalgotradescript.sbs/dashboard/transfer-funds"
                        class="flex items-center p-3 rounded-lg text-gray-100
                          hover:bg-gray-800
                          transition-colors duration-200 group">
                        <i data-lucide="refresh-ccw"
                            class="w-5 h-5 mr-3 text-purple-400
                                             group-hover:rotate-180 transition-transform duration-500"></i>
                        <span class="font-medium">Transfer Funds</span>
                    </a>



                    <a href="#"
                        class="flex items-center p-3 rounded-lg text-gray-100
                          hover:bg-gray-800
                          transition-colors duration-200 group">
                        <i data-lucide="users"
                            class="w-5 h-5 mr-3 text-orange-400
                                      group-hover:scale-110 transition-transform duration-300"></i>
                        <span class="font-medium">Refer Friends</span>
                        <span class="ml-auto text-xs font-bold text-orange-400">+5%</span>
                    </a>

                    <a href="https://remedyalgotradescript.sbs/dashboard/support"
                        class="flex items-center p-3 rounded-lg text-gray-100
                                               hover:bg-gray-800
                                               transition-colors duration-200 group">
                        <i data-lucide="life-buoy"
                            class="w-5 h-5 mr-3 text-cyan-400
                                           group-hover:scale-110 transition-transform duration-300"></i>
                        <span class="font-medium">Support</span>
                    </a>

                    <a href="https://remedyalgotradescript.sbs/dashboard/bot-trading"
                        class="flex items-center p-3 rounded-lg text-gray-100
                          hover:bg-gray-800
                          transition-colors duration-200 group">
                        <i data-lucide="newspaper"
                            class="w-5 h-5 mr-3 text-indigo-400
                                          group-hover:scale-110 transition-transform duration-300"></i>
                        <span class="font-medium">Bots Trading</span>
                    </a>
                </div>

                <!-- Close Button -->
                <button @click="fabOpen = false"
                    class="absolute top-2 right-2 p-2 rounded-full
                     text-gray-400 hover:text-gray-200
                     hover:bg-gray-800
                     transition-colors duration-200">
                    <i data-lucide="x" class="w-5 h-5"></i>
                </button>
            </div>
        </div>

        <style>
            @keyframes slideUp {
                from {
                    opacity: 0;
                    transform: scale(0.95) translateY(10px);
                }

                to {
                    opacity: 1;
                    transform: scale(1) translateY(0);
                }
            }

            .animate-slideUp {
                animation: slideUp 0.3s ease-out forwards;
            }
        </style>
    </div>

    <!-- Script for Lucide Icons -->
    <script src="https://unpkg.com/lucide@latest"></script>
    <script>
        // Initialize Lucide icons
        document.addEventListener('DOMContentLoaded', function() {
            lucide.createIcons();
        });

        // Re-initialize icons when Alpine renders new content
        document.addEventListener('alpine:init', () => {
            Alpine.nextTick(() => {
                lucide.createIcons();
            });
        });
    </script>

    <style>
        @keyframes fadeIn {
            from {
                opacity: 0;
                transform: scale(0.95);
            }

            to {
                opacity: 1;
                transform: scale(1);
            }
        }

        .animate-fadeIn {
            animation: fadeIn 0.3s ease-out;
        }
    </style>

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="https://unpkg.com/lucide@latest/dist/umd/lucide.js"></script>

    <!-- Live Crypto Prices Script -->
    <script>
        // Alpine.js component for live crypto prices
        function cryptoPrices() {
            return {
                btcPrice: null,
                ethPrice: null,
                btcChange: 0,
                ethChange: 0,
                lastUpdate: null,

                async fetchPrices() {
                    try {
                        // Using CoinGecko API (free, no API key required)
                        const response = await fetch(
                            'https://api.coingecko.com/api/v3/simple/price?ids=bitcoin,ethereum&vs_currencies=usd&include_24hr_change=true'
                            );
                        const data = await response.json();

                        if (data.bitcoin && data.ethereum) {
                            this.btcPrice = Math.round(data.bitcoin.usd);
                            this.ethPrice = Math.round(data.ethereum.usd);
                            this.btcChange = data.bitcoin.usd_24h_change || 0;
                            this.ethChange = data.ethereum.usd_24h_change || 0;
                            this.lastUpdate = new Date();

                            console.log('Crypto prices updated:', {
                                BTC: this.btcPrice,
                                ETH: this.ethPrice,
                                time: this.lastUpdate
                            });
                        }
                    } catch (error) {
                        console.error('Error fetching crypto prices:', error);
                        // Fallback to static values on error
                        this.btcPrice = this.btcPrice || 45320;
                        this.ethPrice = this.ethPrice || 2850;
                    }

                    // Update prices every 30 seconds
                    setTimeout(() => this.fetchPrices(), 30000);
                }
            }
        }

        // Initialize when Alpine is ready
        document.addEventListener('alpine:init', () => {
            // Register the component globally
            Alpine.data('cryptoPrices', cryptoPrices);
        });
    </script>

    <div class="gtranslate_wrapper"></div>
    <script>
        window.gtranslateSettings = {
            default_language: "en",
            alt_flags: {
                "en": "usa"
            },
            wrapper_selector: ".gtranslate_wrapper",
            flag_style: "3d",
        };
    </script>
    <script src="https://cdn.gtranslate.net/widgets/latest/float.js" defer></script>
</body>

</html>
