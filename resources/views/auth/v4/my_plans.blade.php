@extends('auth.v4.layouts.dashboard')
@section('title', 'My Plans')


@section('content')
    <div class="min-h-screen bg-gray-50 dark:bg-gray-900 py-8" x-data="myPlansManager()">
        <div class="container mx-auto px-6">
          <!-- Header -->
          <div class="flex items-center justify-between mb-8">
            <div>
              <h1 class="text-3xl font-bold text-gray-900 dark:text-white">My Investment Plans</h1>
              <p class="text-gray-600 dark:text-gray-400 mt-2">Track and manage your active investment portfolios</p>
            </div>

            <a href="{{route('auth.investments')}}"
              class="inline-flex items-center gap-2 px-6 py-3 bg-gradient-to-r from-blue-600 to-blue-600 hover:from-blue-700 hover:to-blue-700 text-white rounded-xl font-medium transition-all duration-200 shadow-lg hover:shadow-xl">
              <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6">
                </path>
              </svg>
              New Investment
            </a>
          </div>

          <!-- Alerts -->
          <div>
          </div>

          <!-- Filters and Statistics -->

          <!-- User's Investments Grid -->
<div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
    @forelse ($plans as $investment)
        @php
            $plan = $investment->plan; // Relation to investment_plans
        @endphp
        <div
            class="bg-white dark:bg-gray-800 rounded-2xl shadow-lg border border-gray-200 dark:border-gray-700 overflow-hidden transform transition-all hover:scale-105 hover:shadow-2xl">
            
            <!-- Header / Plan Name -->
            <div class="px-6 py-4 border-b border-gray-100 dark:border-gray-700 flex justify-between items-center">
                <h2 class="text-xl font-bold text-gray-900 dark:text-white">{{ $plan->name }}</h2>
                <span class="inline-block px-3 py-1 text-sm font-medium rounded-full 
                    {{ $investment->status == 'active' ? 'bg-green-100 text-green-800 dark:bg-green-800 dark:text-green-100' : 'bg-gray-100 text-gray-800 dark:bg-gray-700 dark:text-gray-300' }}">
                    {{ ucfirst($investment->status) }}
                </span>
            </div>

            <!-- Plan & Investment Details -->
            <div class="px-6 py-4 space-y-2">
                <p class="text-gray-600 dark:text-gray-300 text-sm">
                    <span class="font-semibold">Invested Amount:</span> ${{ number_format($investment->amount, 2) }}
                </p>
                <p class="text-gray-600 dark:text-gray-300 text-sm">
                    <span class="font-semibold">Duration:</span> {{ $plan->duration }}
                </p>
                <p class="text-gray-600 dark:text-gray-300 text-sm">
                    <span class="font-semibold">Return Rate:</span> {{ $plan->return_rate }}%
                </p>
                <p class="text-gray-600 dark:text-gray-300 text-sm">
                    <span class="font-semibold">Potential Profit:</span> ${{ number_format(($investment->amount * $plan->return_rate)/100, 2) }}
                </p>
                <p class="text-gray-500 dark:text-gray-400 text-xs">
                    Joined: {{ $investment->created_at->format('M d, Y H:i') }}
                </p>
            </div>

            <!-- Optional Action / View Details -->
            <div class="px-6 py-4 border-t border-gray-100 dark:border-gray-700 text-center">
                @if($investment->status == 'active')
                    <span class="inline-block px-4 py-2 bg-blue-500 hover:bg-blue-600 text-white font-semibold rounded-xl shadow-md transition-all">
                        Active
                    </span>
                @else
                    <span class="inline-block px-4 py-2 bg-gray-400 text-white font-semibold rounded-xl shadow-md transition-all">
                        Completed
                    </span>
                @endif
            </div>
        </div>
    @empty
        <!-- Empty State -->
        <div class="col-span-1 md:col-span-2 lg:col-span-3 bg-white dark:bg-gray-800 rounded-2xl shadow-lg border border-gray-200 dark:border-gray-700 text-center py-16">
            <h3 class="text-xl font-bold text-gray-900 dark:text-white mb-2">No Investments Found</h3>
            <p class="text-gray-600 dark:text-gray-400 max-w-md mx-auto mb-8">
                You haven’t joined any investment plans yet.
            </p>
            <a href="{{ route('auth.investments') }}"
                class="inline-flex items-center gap-2 px-6 py-3 bg-gradient-to-r from-blue-600 to-blue-600 hover:from-blue-700 hover:to-blue-700 text-white rounded-xl font-medium transition-all duration-200 shadow-lg hover:shadow-xl">
                Start Your First Investment
            </a>
        </div>
    @endforelse
</div>

          <!-- Pagination -->
        </div>
      </div> 
@endsection