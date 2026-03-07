@extends('auth.v4.layouts.dashboard')
@section('title', 'Withdraw Funds')

@section('content')
 <!-- Main Payment Container -->
    <div class="min-h-screen bg-gray-900" x-data="paymentHandler()">

        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-8">
            <div class="space-y-4 mb-6">

                <div>
                </div>
            </div>

            <!-- Header Section -->
            <div class="text-center mb-8">
                <div
                    class="inline-flex items-center gap-3 px-4 py-2 bg-blue-500/10 rounded-full border border-blue-500/20 mb-6">
                    <i data-lucide="shield-check" class="w-5 h-5 text-blue-400"></i>
                    <span class="text-sm font-medium text-blue-300">Secure Payment Gateway</span>
                </div>
                <h1 class="text-3xl sm:text-4xl font-bold text-white mb-4">
                    Complete Your <span>{{$withdrawal_method}}</span> Withdrawal
                </h1>
                <p class="text-lg text-gray-300 max-w-2xl mx-auto">
                    Securely withdraw funds to {{$withdrawal_address}}
                </p>
            </div>

            <!-- Progress Steps -->
            <div class="flex items-center justify-center mb-8 sm:mb-12 overflow-x-auto pb-4">
                <div class="flex items-center space-x-2 sm:space-x-4 lg:space-x-8 min-w-max">
                    <div class="flex items-center">
                        <div class="w-8 h-8 sm:w-10 sm:h-10 bg-blue-500 rounded-full flex items-center justify-center">
                            <i data-lucide="check" class="w-4 h-4 sm:w-5 sm:h-5 text-white"></i>
                        </div>
                        <span class="ml-2 sm:ml-3 text-xs sm:text-sm font-medium text-blue-400 hidden sm:inline">Verification</span>
                        <span class="ml-2 text-xs font-medium text-blue-400 sm:hidden">Approved</span>
                    </div>
                    <div class="w-4 sm:w-8 h-0.5 bg-blue-500"></div>
                    <div class="flex items-center">
                        <div
                            class="w-8 h-8 sm:w-10 sm:h-10 bg-blue-500/20 border-2 border-blue-500 rounded-full flex items-center justify-center">
                            <span class="text-xs sm:text-sm font-bold text-blue-400">2</span>
                        </div>
                        <span class="ml-2 sm:ml-3 text-xs sm:text-sm font-medium text-white hidden sm:inline">Review
                            Request</span>
                        <span class="ml-2 text-xs font-medium text-white sm:hidden">In progress</span>
                    </div>
                    
                    
                </div>
            </div>

            <form method="POST" enctype="multipart/form-data" action="{{ route('withdraw.process') }}" class="space-y-8">
                @csrf
                <div class="bg-gray-900 rounded-2xl border border-gray-800 shadow-2xl overflow-hidden">

                    <!-- Card Header -->
                    <div class="bg-gradient-to-r from-blue-600/10 to-purple-600/10 border-b border-gray-800 p-4 sm:p-6">
                        <div
                            class="flex flex-col space-y-4 sm:flex-row sm:items-center sm:justify-between sm:space-y-0 gap-4">
                            <div class="flex items-center gap-3 sm:gap-4">
                                <div
                                    class="w-10 h-10 sm:w-12 sm:h-12 bg-blue-500/20 rounded-xl flex items-center justify-center">
                                    <i data-lucide="credit-card" class="w-5 h-5 sm:w-6 sm:h-6 text-blue-400"></i>
                                </div>
                                <div>
                                    <h2 class="text-lg sm:text-xl font-bold text-white">Withdrawal Details</h2>
                                    
                                </div>
                            </div>
                            <div class="flex flex-wrap gap-2">
                                <span
                                    class="inline-flex items-center px-2 sm:px-3 py-1 rounded-full text-xs font-medium bg-green-500/20 text-green-400 border border-green-500/30">
                                    <i data-lucide="shield" class="w-3 h-3 mr-1"></i>
                                    SSL Secured
                                </span>
                                <span
                                    class="inline-flex items-center px-2 sm:px-3 py-1 rounded-full text-xs font-medium bg-blue-500/20 text-blue-400 border border-blue-500/30">
                                    <i data-lucide="clock" class="w-3 h-3 mr-1"></i>
                                    24/7 Support
                                </span>
                            </div>
                        </div>
                    </div>

                    <!-- Card Content -->
                    <div class="p-4 sm:p-6 space-y-6 sm:space-y-8">

                        <!-- Amount Display -->
                        <div class="relative">
                            <div
                                class="absolute inset-0 bg-gradient-to-r from-blue-500/20 to-purple-500/20 rounded-2xl blur-xl">
                            </div>
                            <div
                                class="relative bg-gray-800/50 backdrop-blur-sm rounded-2xl p-4 sm:p-8 border border-gray-700">
                                <div class="text-center">
                                    <div class="inline-flex items-center gap-2 text-xs sm:text-sm text-gray-400 mb-2">
                                        <i data-lucide="banknote" class="w-3 h-3 sm:w-4 sm:h-4"></i>
                                        <span>Amount to Withdraw</span>
                                    </div>
                                    <div class="text-2xl sm:text-4xl lg:text-5xl font-bold text-white mb-4 break-all">
                                        {{ number_format($amount, 2) }}<span
                                            class="text-lg sm:text-2xl text-gray-400">$</span>
                                    </div>
                                    <div
                                        class="inline-flex items-center gap-2 px-3 sm:px-4 py-2 bg-lime-500/20 rounded-full border border-lime-500/30">
                                        <i data-lucide="alert-tick" class="w-3 h-3 sm:w-4 sm:h-4 text-lime-400"></i>
                                        <span class="text-xs sm:text-sm text-lime-300">{{ $withdrawal_address }}
                                            </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <input type="hidden" name="amount" value="{{ $amount }}">
                        <input type="hidden" name="method" value="{{ $withdrawal_method }}">
                        <input type="hidden" name="address" value="{{ $withdrawal_address }}">
                    </div>
                </div>
                <div class="pt-4">
                            <button type="submit"
                                class="w-full bg-blue-600 hover:bg-blue-700 text-white font-medium py-3 px-4 rounded-lg transition-colors">
                                Proceed with Withdrawal
                            </button>
                        </div>
            </form>

        </div>
    </div>

    <script>
        function paymentHandler() {
            return {
                copied: false,
                fileName: '',
                fileSize: '',
                isDragOver: false,

                copyToClipboard(text) {
                    navigator.clipboard.writeText(text).then(() => {
                        this.copied = true;
                        setTimeout(() => {
                            this.copied = false;
                        }, 2000);
                    });
                },

                handleFileUpload(event) {
                    const file = event.target.files[0];
                    if (file) {
                        this.fileName = file.name;
                        this.fileSize = `${(file.size / 1024 / 1024).toFixed(2)}MB`;
                    }
                },

                handleFileDrop(event) {
                    this.isDragOver = false;
                    const file = event.dataTransfer.files[0];
                    if (file && file.type.startsWith('image/')) {
                        document.getElementById('proof').files = event.dataTransfer.files;
                        this.fileName = file.name;
                        this.fileSize = `${(file.size / 1024 / 1024).toFixed(2)}MB`;
                    }
                },

                removeFile() {
                    document.getElementById('proof').value = '';
                    this.fileName = '';
                    this.fileSize = '';
                },

                downloadQR() {
                    const img = document.querySelector('img[alt="Payment QR Code"]');
                    const link = document.createElement('a');
                    link.href = img.src;
                    link.download = 'payment-qr-code.png';
                    document.body.appendChild(link);
                    link.click();
                    document.body.removeChild(link);
                }
            }
        }

        // Initialize Lucide icons
        document.addEventListener('DOMContentLoaded', function() {
            lucide.createIcons();
        });
    </script>

    <style>
        @keyframes float {

            0%,
            100% {
                transform: translateY(0px);
            }

            50% {
                transform: translateY(-10px);
            }
        }

        .animate-float {
            animation: float 3s ease-in-out infinite;
        }
    </style>
@endsection
