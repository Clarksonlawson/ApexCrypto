@extends('auth.v4.layouts.dashboard')
@section('title', 'Withdraw Funds')

@section('content')
  <!-- Simple Header -->
    <div class="bg-white dark:bg-gray-900 border-b border-gray-100 dark:border-gray-800" x-cloak>
        <div class="px-4 py-8 mx-auto max-w-7xl sm:px-6 lg:px-8">
            <div class="text-center">
                <h1 class="text-2xl font-medium text-gray-900 dark:text-white">
                    Withdraw your Funds
                </h1>
                <p class="mt-2 text-gray-600 dark:text-gray-400">
                    Fast, simple, secure.
                </p>
            </div>
        </div>
    </div>

    <!-- Main Content -->
    <div class="px-4 py-8 mx-auto max-w-7xl sm:px-6 lg:px-8">
               <!-- Flash Message -->
        @if (session('status'))
            <div class="mb-4 text-sm text-green-600 dark:text-green-400">
                {{ session('status') }}
            </div>
        @endif
        @if (session('notify'))
            <div class="mb-4 text-sm text-blue-600 dark:text-blue-400">
                {{ session('notify') }}
            </div>
        @endif
         @if (session('error'))
                <div class="max-w-3xl mx-auto px-4">
                    <div class="flex items-start p-4 rounded-xl bg-red-100 text-red-800 dark:bg-red-900 dark:text-red-100 shadow-md relative"
                        role="alert">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 mr-3 mt-1 text-red-600 dark:text-red-300"
                            fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M10 14l2-2m0 0l2-2m-2 2l-2-2m2 2v6m0-10a9 9 0 110 18 9 9 0 010-18z" />
                        </svg>
                        <div class="flex-1">
                            <p class="text-sm font-medium">{{ session('error') }}</p>
                        </div>
                        <button type="button"
                            class="ml-4 text-red-700 hover:text-red-900 dark:text-red-300 dark:hover:text-white transition"
                            onclick="this.parentElement.remove();">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" fill="none" viewBox="0 0 24 24"
                                stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M6 18L18 6M6 6l12 12" />
                            </svg>
                        </button>
                    </div>
                </div>
        </div>
        @endif

        <!-- Validation Errors -->
        {{-- Display validation errors (including balance errors) --}}
        @if ($errors->any())
            <div class="space-y-4 mb-6 max-w-3xl mx-auto px-4">
                @foreach ($errors->all() as $error)
                    <div class="flex items-start p-4 rounded-xl bg-red-100 text-red-800 dark:bg-red-900 dark:text-red-100 shadow-md relative"
                        role="alert">
                        <div class="flex-1">
                            <p class="text-sm font-medium">{{ $error }}</p>
                        </div>
                        <button type="button"
                            class="ml-4 text-red-700 hover:text-red-900 dark:text-red-300 dark:hover:text-white transition"
                            onclick="this.parentElement.remove();">&times;</button>
                    </div>
                @endforeach
            </div>
        @endif
        <!-- Notify Alert -->
        @if (session('notify'))
            <div class="mb-4 text-sm text-blue-600 dark:text-blue-400">
                {{ session('notify') }}
            </div>
        @endif
        <!-- Signal Alert -->
        @if (session('signal'))
            <div class="mb-4 text-sm text-yellow-600 dark:text-yellow-400">
                {{ session('signal') }}
            </div>
        @endif
        <!-- Plan Alert -->
        @if (session('plan'))
            <div class="mb-4 text-sm text-purple-600 dark:text-purple-400">
                {{ session('plan') }}
            </div>
        @endif

        <!-- Quick Amount Selector -->
        <div class="mb-8 text-center">
            <p class="text-sm text-gray-600 dark:text-gray-400 mb-4">Quick amounts:</p>
            <div class="flex flex-wrap justify-center gap-3">
                <button onclick="setAmount(100)"
                    class="px-4 py-2 text-sm bg-gray-50 hover:bg-gray-100 dark:bg-gray-800 dark:hover:bg-gray-700
                               text-gray-700 dark:text-gray-300 rounded-lg border border-gray-200 dark:border-gray-700
                               transition-colors">
                    $100
                </button>
                <button onclick="setAmount(500)"
                    class="px-4 py-2 text-sm bg-gray-50 hover:bg-gray-100 dark:bg-gray-800 dark:hover:bg-gray-700
                               text-gray-700 dark:text-gray-300 rounded-lg border border-gray-200 dark:border-gray-700
                               transition-colors">
                    $500
                </button>
                <button onclick="setAmount(1000)"
                    class="px-4 py-2 text-sm bg-gray-50 hover:bg-gray-100 dark:bg-gray-800 dark:hover:bg-gray-700
                               text-gray-700 dark:text-gray-300 rounded-lg border border-gray-200 dark:border-gray-700
                               transition-colors">
                    $1,000
                </button>
                <button onclick="setAmount(5000)"
                    class="px-4 py-2 text-sm bg-gray-50 hover:bg-gray-100 dark:bg-gray-800 dark:hover:bg-gray-700
                               text-gray-700 dark:text-gray-300 rounded-lg border border-gray-200 dark:border-gray-700
                               transition-colors">
                    $5,000
                </button>
            </div>
        </div>

        <!-- Main Grid Layout -->
        <div class="grid lg:grid-cols-3 gap-6">
            <!-- Deposit Form Card -->
            <div class="lg:col-span-2">
                <div class="bg-white dark:bg-gray-900 rounded-lg border border-gray-100 dark:border-gray-800 p-6">
                    <div class="flex items-center justify-between mb-6">
                        <h2 class="text-lg font-medium text-gray-900 dark:text-white">
                           Process Withdrawal
                        </h2>
                        <div class="flex items-center gap-2 px-3 py-1 bg-green-50 dark:bg-green-900/20 rounded-full">
                            <i data-lucide="shield-check" class="w-4 h-4 text-green-600 dark:text-green-400"></i>
                            <span class="text-sm text-green-600 dark:text-green-400">Secure</span>
                        </div>
                    </div>

                    <form method="POST" action="{{ route('withdraw.amount') }}" class="space-y-6">
                       @csrf
                         <div class="space-y-2">
                            <label class="block text-sm font-medium text-gray-700 dark:text-gray-300">
                                Payment Method <span class="text-red-500">*</span>
                            </label>
                            <select name="withdrawal_method" required
                                class="block w-full px-3 py-3 bg-white dark:bg-gray-800 border border-gray-200 dark:border-gray-700
                                       rounded-lg text-gray-900 dark:text-white focus:ring-2 focus:ring-blue-500 focus:border-transparent">
                                <option value="USDT">USDT</option>
                               
                                <option value="Ethereum">Ethereum</option>
                                <option value="Bitcoin">Bitcoin</option>
                            </select>
                        </div>
                         <!-- Address Input -->
                        <div class="space-y-2">
                            <label class="block text-sm font-medium text-gray-700 dark:text-gray-300">
                                Wallet Address <span class="text-red-500">*</span>
                            </label>
                            <div class="relative">
                                <div class="absolute inset-y-0 left-0 flex items-center pl-3">
                                    <span class="text-gray-500 dark:text-gray-400"></span>
                                </div>
                                <input type="text" id="address" name="withdrawal_address" required 
                                    placeholder="0x566576DRGHTGJN........"
                                    class="block w-full pl-8 pr-3 py-3 bg-white dark:bg-gray-800 border border-gray-200 dark:border-gray-700
                                          rounded-lg text-gray-900 dark:text-white focus:ring-2 focus:ring-blue-500 focus:border-transparent">
                            </div>
                            <p class="text-sm text-gray-500 dark:text-gray-400">
                               Enter your wallet address.
                            </p>
                        </div>
                        <!-- Amount Input -->
                        <div class="space-y-2">
                            <label class="block text-sm font-medium text-gray-700 dark:text-gray-300">
                                Amount to Withdraw <span class="text-red-500">*</span>
                            </label>
                            <div class="relative">
                                <div class="absolute inset-y-0 left-0 flex items-center pl-3">
                                    <span class="text-gray-500 dark:text-gray-400">$</span>
                                </div>
                                <input type="number" id="amount" name="amount" required min="1" step="0.01"
                                    placeholder="0.00"
                                    class="block w-full pl-8 pr-3 py-3 bg-white dark:bg-gray-800 border border-gray-200 dark:border-gray-700
                                          rounded-lg text-gray-900 dark:text-white focus:ring-2 focus:ring-blue-500 focus:border-transparent">
                            </div>
                            <p class="text-sm text-gray-500 dark:text-gray-400">
                                Enter the amount you wish to withdraw
                            </p>
                        </div>

                        <!-- Submit Button -->
                        <div class="pt-4">
                            <button type="submit"
                                class="w-full bg-blue-600 hover:bg-blue-700 text-white font-medium py-3 px-4 rounded-lg transition-colors">
                                Proceed with Withdrawal
                            </button>
                        </div>
                    </form>
                </div>
            </div>

            <!-- Right Sidebar -->
            <div class="space-y-6">
                <!-- Payment Methods Card -->
                <div class="bg-white dark:bg-gray-900 rounded-lg border border-gray-100 dark:border-gray-800 p-6">
                    <h3 class="text-lg font-medium text-gray-900 dark:text-white mb-4">
                        Disbursment Methods
                    </h3>
                    <div class="space-y-3">
                        <div class="flex items-center gap-3 p-3 bg-gray-50 dark:bg-gray-800 rounded-lg">
                            <i data-lucide="credit-card" class="w-4 h-4 text-gray-500 dark:text-gray-400"></i>
                            <span class="text-sm text-gray-700 dark:text-gray-300">USDT</span>
                        </div>
                        
                        <div class="flex items-center gap-3 p-3 bg-gray-50 dark:bg-gray-800 rounded-lg">
                            <i data-lucide="credit-card" class="w-4 h-4 text-gray-500 dark:text-gray-400"></i>
                            <span class="text-sm text-gray-700 dark:text-gray-300">Ethereum</span>
                        </div>
                        <div class="flex items-center gap-3 p-3 bg-gray-50 dark:bg-gray-800 rounded-lg">
                            <i data-lucide="credit-card" class="w-4 h-4 text-gray-500 dark:text-gray-400"></i>
                            <span class="text-sm text-gray-700 dark:text-gray-300">Bitcoin</span>
                        </div>
                    </div>
                </div>

                <!-- Deposit Guide Card -->
                <div class="bg-white dark:bg-gray-900 rounded-lg border border-gray-100 dark:border-gray-800 p-6">
                    <h3 class="text-lg font-medium text-gray-900 dark:text-white mb-4">
                        How to Withdraw
                    </h3>
                    <div class="space-y-4">
                        <div class="flex items-start gap-3">
                            <div
                                class="w-6 h-6 flex items-center justify-center rounded-full bg-gray-100 dark:bg-gray-800 flex-shrink-0">
                                <span class="text-xs font-medium text-gray-600 dark:text-gray-400">2</span>
                            </div>
                            <p class="text-sm text-gray-600 dark:text-gray-400">
                                Enter Withdrawal amount
                            </p>
                        </div>
                        <div class="flex items-start gap-3">
                            <div
                                class="w-6 h-6 flex items-center justify-center rounded-full bg-gray-100 dark:bg-gray-800 flex-shrink-0">
                                <span class="text-xs font-medium text-gray-600 dark:text-gray-400">3</span>
                            </div>
                            <p class="text-sm text-gray-600 dark:text-gray-400">
                                Complete security Checks
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
      <script>
        document.addEventListener('DOMContentLoaded', function () {
          lucide.createIcons();
        });

        function setAmount(amount) {
          document.getElementById('amount').value = amount;
          document.getElementById('amount').focus();
        }
      </script>
@endsection