@extends('auth.v4.layouts.dashboard')
@section('title', 'Withdraw Success')

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
                Withdrawal Processed Successfully
            </h1>

            <p class="text-gray-400 mb-8">
                Your withdrawal request has been processed successfully. The funds should reflect in your account shortly.
                If you have any questions, please contact our support team.
            </p>

        </div>
        @endsection