@extends('auth.v4.layouts.dashboard')
@section('title', 'Withdraw Failed')

@section('content')
<div class="min-h-screen bg-gray-900 flex items-center justify-center px-4">
    <div class="max-w-2xl w-full">

        <!-- Failure Card -->
        <div class="bg-gray-800 border border-gray-700 rounded-2xl shadow-xl p-10 text-center">

            <!-- Glowing Failure Icon -->
            <div class="flex justify-center mb-6">
                <div class="relative">
                    <div class="absolute inset-0 rounded-full bg-red-500 blur-2xl opacity-40 animate-pulse"></div>

                    <div class="relative w-24 h-24 flex items-center justify-center rounded-full border-2 border-red-500 bg-red-500/10">
                        <i data-lucide="x" class="w-12 h-12 text-red-400"></i>
                    </div>
                </div>
            </div>

            <!-- Title -->
            <h1 class="text-3xl font-bold text-white mb-2">
                Withdrawal Failed
            </h1>

            <p class="text-gray-400 mb-8">
                Unfortunately, your withdrawal request could not be processed at this time as there is a standing lien on your account. Please contact support.
            </p>

        </div>
    </div>
</div>
@endsection