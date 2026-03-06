@extends('auth.v4.layouts.dashboard')
@section('title', 'Payment Confirmation')

@section('content')

<div class="min-h-screen bg-gray-900 flex items-center justify-center px-4">
<div class="max-w-2xl w-full">

    <!-- Success Card -->
    <div class="bg-gray-800 border border-gray-700 rounded-2xl shadow-xl p-10 text-center">

        <!-- Glowing Success Icon -->
        <div class="flex justify-center mb-6">
            <div class="relative">
                <div class="absolute inset-0 rounded-full bg-green-500 blur-2xl opacity-40 animate-pulse"></div>

                <div class="relative w-24 h-24 flex items-center justify-center rounded-full border-2 border-green-500 bg-green-500/10">
                    <i data-lucide="check" class="w-12 h-12 text-green-400"></i>
                </div>
            </div>
        </div>

        <!-- Title -->
        <h1 class="text-3xl font-bold text-white mb-2">
            Deposit Submitted Successfully
        </h1>

        <p class="text-gray-400 mb-8">
            Your payment has been submitted and is currently awaiting verification by our finance team.
            Once approved, your trading balance will be updated automatically.
        </p>


        <!-- Receipt Section -->
        <div class="bg-gray-900 border border-gray-700 rounded-xl p-6 text-left mb-8">

            <h3 class="text-white font-semibold mb-4">
                Transaction Receipt
            </h3>

            <div class="space-y-3 text-sm">

                <div class="flex justify-between">
                    <span class="text-gray-400">Payment Method</span>
                    <span class="text-white font-medium">
                        {{ $deposit->payment_method ?? 'Crypto Deposit' }}
                    </span>
                </div>

                <div class="flex justify-between">
                    <span class="text-gray-400">Amount</span>
                    <span class="text-white font-medium">
                        ${{ number_format($deposit->amount ?? 0, 2) }}
                    </span>
                </div>

                <div class="flex justify-between">
                    <span class="text-gray-400">Status</span>
                    <span class="text-yellow-400 font-medium">
                        Pending Approval
                    </span>
                </div>

                <div class="flex justify-between">
                    <span class="text-gray-400">Date</span>
                    <span class="text-white">
                        {{ now()->format('M d, Y H:i') }}
                    </span>
                </div>

            </div>

        </div>


        <!-- Buttons -->
        <div class="flex flex-col sm:flex-row gap-4 justify-center">

            <a href="{{ route('user.dashboard') }}"
               class="px-6 py-3 bg-green-500 hover:bg-green-600 text-white rounded-lg font-medium transition">
                Go to Dashboard
            </a>

            <a href="{{ route('user.deposits') }}"
               class="px-6 py-3 border border-gray-600 text-gray-300 hover:bg-gray-700 rounded-lg transition">
                Make Another Deposit
            </a>

        </div>

    </div>

</div>

</div>

<!-- Optional Auto Redirect -->

<script>
setTimeout(() => {
    window.location.href = "{{ route('user.dashboard') }}";
}, 8000);
</script>

@endsection
