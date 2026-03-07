@extends('auth.v4.layouts.dashboard')
@section('title', 'Loan History ')

@section('content')
 <div x-data="loanHistory()" class="min-h-screen bg-gray-50 dark:bg-gray-900 py-8">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

          <!-- Header Section -->
          <div class="mb-8">
            <!-- Breadcrumb -->
            <nav class="flex items-center text-sm text-gray-500 dark:text-gray-400 mb-6" aria-label="Breadcrumb">
              <a href="{{route('user.dashboard')}}"
                class="hover:text-blue-600 dark:hover:text-blue-400 transition-colors">
                <i data-lucide="home" class="w-4 h-4 inline mr-1"></i>
                Dashboard
              </a>
              <i data-lucide="chevron-right" class="w-4 h-4 mx-2"></i>
              <span class="text-gray-900 dark:text-gray-100 font-medium">Loan History</span>
            </nav>

            <!-- Page Title & Stats -->
            <div class="flex flex-col lg:flex-row lg:items-center lg:justify-between gap-6">
              <div>
                <h1 class="text-3xl font-bold text-gray-900 dark:text-white mb-2">
                  <i data-lucide="history" class="w-8 h-8 inline mr-3 text-blue-600 dark:text-blue-400"></i>
                  Loan History
                </h1>
                <p class="text-gray-600 dark:text-gray-400 text-lg">
                  Track and manage all your loan applications and their status
                </p>
              </div>

              <!-- Quick Action -->
              <div class="flex gap-3">
                <a href="{{route('auth.apply.loan')}}"
                  class="inline-flex items-center gap-2 bg-gradient-to-r from-blue-600 to-blue-700 hover:from-blue-700 hover:to-blue-800 text-white font-semibold py-3 px-6 rounded-xl transition-all transform hover:scale-105">
                  <i data-lucide="plus-circle" class="w-5 h-5"></i>
                  New Application
                </a>
              </div>
            </div>
          </div>

          <!-- Alert Messages -->
          <div class="mb-6">
            <div>
            </div>
          </div>

<!-- Summary Statistics -->
<div class="grid grid-cols-1 md:grid-cols-4 gap-6 mb-8">
    <!-- Total Applications -->
    <div class="bg-white dark:bg-gray-900 rounded-2xl p-6 shadow-sm ring-1 ring-gray-200 dark:ring-gray-800">
        <div class="flex items-center justify-between">
            <div>
                <p class="text-sm text-gray-600 dark:text-gray-400 mb-1">Total Applications</p>
                <p class="text-3xl font-bold text-gray-900 dark:text-white">{{ $totalApplications }}</p>
            </div>
            <div class="p-3 bg-blue-100 dark:bg-blue-900/30 rounded-xl">
                <i data-lucide="file-text" class="w-6 h-6 text-blue-600 dark:text-blue-400"></i>
            </div>
        </div>
    </div>

    <!-- Approved Loans -->
    <div class="bg-white dark:bg-gray-900 rounded-2xl p-6 shadow-sm ring-1 ring-gray-200 dark:ring-gray-800">
        <div class="flex items-center justify-between">
            <div>
                <p class="text-sm text-gray-600 dark:text-gray-400 mb-1">Approved</p>
                <p class="text-3xl font-bold text-green-600 dark:text-green-400">{{ $approved }}</p>
            </div>
            <div class="p-3 bg-green-100 dark:bg-green-900/30 rounded-xl">
                <i data-lucide="check-circle" class="w-6 h-6 text-green-600 dark:text-green-400"></i>
            </div>
        </div>
    </div>

    <!-- Pending -->
    <div class="bg-white dark:bg-gray-900 rounded-2xl p-6 shadow-sm ring-1 ring-gray-200 dark:ring-gray-800">
        <div class="flex items-center justify-between">
            <div>
                <p class="text-sm text-gray-600 dark:text-gray-400 mb-1">Pending</p>
                <p class="text-3xl font-bold text-yellow-600 dark:text-yellow-400">{{ $pending }}</p>
            </div>
            <div class="p-3 bg-yellow-100 dark:bg-yellow-900/30 rounded-xl">
                <i data-lucide="clock" class="w-6 h-6 text-yellow-600 dark:text-yellow-400"></i>
            </div>
        </div>
    </div>

    <!-- Total Value -->
    <div class="bg-white dark:bg-gray-900 rounded-2xl p-6 shadow-sm ring-1 ring-gray-200 dark:ring-gray-800">
        <div class="flex items-center justify-between">
            <div>
                <p class="text-sm text-gray-600 dark:text-gray-400 mb-1">Total Value</p>
                <p class="text-3xl font-bold text-purple-600 dark:text-purple-400">${{ number_format($totalValue, 2) }}</p>
            </div>
            <div class="p-3 bg-purple-100 dark:bg-purple-900/30 rounded-xl">
                <i data-lucide="dollar-sign" class="w-6 h-6 text-purple-600 dark:text-purple-400"></i>
            </div>
        </div>
    </div>
</div>

<!-- Loans Table -->
<div class="hidden lg:block bg-white dark:bg-gray-900 rounded-2xl shadow-sm ring-1 ring-gray-200 dark:ring-gray-800 overflow-hidden mb-8">
    <div class="px-6 py-4 border-b border-gray-200 dark:border-gray-800">
        <h3 class="text-lg font-semibold text-gray-900 dark:text-white">Application Details</h3>
    </div>

    <div class="overflow-x-auto">
        <table class="w-full">
            <thead class="bg-gray-50 dark:bg-gray-800">
                <tr>
                    <th>Amount</th>
                    <th>Purpose</th>
                    <th>Duration</th>
                    <th>Status</th>
                    <th>Date Applied</th>
                   
                </tr>
            </thead>
            <tbody class="divide-y divide-gray-200 dark:divide-gray-800">
                @foreach ($loans as $loan)
                    <tr class="hover:bg-gray-50 dark:hover:bg-gray-800 transition-colors">
                        <td class="px-6 py-4 whitespace-nowrap">${{ number_format($loan->amount, 2) }}</td>
                        <td class="px-6 py-4 text-sm">{{ Str::limit($loan->purpose, 50) }}</td>
                        <td class="px-6 py-4 whitespace-nowrap">{{ $loan->duration }} months</td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            @php
                                $statusColors = [
                                    'pending' => 'yellow',
                                    'approved' => 'green',
                                    'rejected' => 'red',
                                ];
                                $color = $statusColors[$loan->status] ?? 'gray';
                            @endphp
                            <span class="inline-flex items-center px-3 py-1 rounded-full text-sm font-medium bg-{{ $color }}-100 dark:bg-{{ $color }}-900/30 text-{{ $color }}-800 dark:text-{{ $color }}-300">
                                {{ ucfirst($loan->status) }}
                            </span>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm">
                            {{ $loan->created_at->format('M d, Y H:i A') }}
                        </td>
                        
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
<!-- Mobile Card View -->
<div class="block lg:hidden mb-6">
    @foreach ($loans as $loan)
        <div class="bg-white dark:bg-gray-900 rounded-2xl p-6 shadow-sm ring-1 ring-gray-200 dark:ring-gray-800 mb-4">
            <!-- Header -->
            <div class="flex items-center justify-between mb-4">
                <div class="flex items-center gap-3">
                    <div class="p-2 bg-green-100 dark:bg-green-900/30 rounded-lg">
                        <i data-lucide="dollar-sign" class="w-5 h-5 text-green-600 dark:text-green-400"></i>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 dark:text-white">
                        ${{ number_format($loan->amount, 2) }}
                    </h3>
                </div>

                <!-- Status Badge -->
                @php
                    $statusColors = [
                        'pending' => 'yellow',
                        'approved' => 'green',
                        'rejected' => 'red',
                    ];
                    $color = $statusColors[$loan->status] ?? 'gray';
                @endphp
                <span class="inline-flex items-center px-3 py-1 rounded-full text-sm font-medium bg-{{ $color }}-100 dark:bg-{{ $color }}-900/30 text-{{ $color }}-800 dark:text-{{ $color }}-300">
                    {{ ucfirst($loan->status) }}
                </span>
            </div>

            <!-- Loan Details -->
            <div class="space-y-3 mb-4">
                <div>
                    <p class="text-sm text-gray-600 dark:text-gray-400 mb-1">Purpose</p>
                    <p class="text-sm text-gray-900 dark:text-white">{{ Str::limit($loan->purpose, 50) }}</p>
                </div>

                <div class="grid grid-cols-2 gap-4">
                    <div>
                        <p class="text-sm text-gray-600 dark:text-gray-400 mb-1">Duration</p>
                        <span class="inline-flex items-center px-2 py-1 rounded-lg text-sm font-medium bg-blue-100 dark:bg-blue-900/30 text-blue-800 dark:text-blue-300">
                            {{ $loan->duration }} months
                        </span>
                    </div>

                    <div>
                        <p class="text-sm text-gray-600 dark:text-gray-400 mb-1">Date Applied</p>
                        <p class="text-sm text-gray-900 dark:text-white">{{ $loan->created_at->format('M d, Y') }}</p>
                    </div>
                </div>
            </div>

            <!-- Actions -->
            <div class="flex gap-2 pt-4 border-t border-gray-200 dark:border-gray-800">
                <a href="#" class="flex-1 inline-flex items-center justify-center gap-2 bg-blue-600 hover:bg-blue-700 text-white font-medium py-2 px-4 rounded-lg transition-colors">
                    <i data-lucide="eye" class="w-4 h-4"></i>
                    View Details
                </a>
                <a href="#" class="inline-flex items-center justify-center gap-2 bg-gray-100 dark:bg-gray-800 text-gray-700 dark:text-gray-300 font-medium py-2 px-4 rounded-lg hover:bg-gray-200 dark:hover:bg-gray-700 transition-colors">
                    <i data-lucide="edit" class="w-4 h-4"></i>
                    Edit
                </a>
            </div>
        </div>
    @endforeach
</div>

          <!-- Loan Details Modal -->
          <div x-show="showModal" x-transition:enter="transition ease-out duration-300"
            x-transition:enter-start="opacity-0" x-transition:enter-end="opacity-100"
            x-transition:leave="transition ease-in duration-200" x-transition:leave-start="opacity-100"
            x-transition:leave-end="opacity-0" class="fixed inset-0 z-50 overflow-y-auto" style="display: none;">

            <!-- Backdrop -->
            <div class="fixed inset-0 bg-gray-500 dark:bg-gray-900 bg-opacity-75 dark:bg-opacity-75 transition-opacity"
              @click="closeModal()"></div>

            <!-- Modal Content -->
            <div class="flex min-h-full items-end sm:items-center justify-center p-4 text-center sm:p-0">
              <div x-show="showModal" x-transition:enter="transition ease-out duration-300"
                x-transition:enter-start="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95"
                x-transition:enter-end="opacity-100 translate-y-0 sm:scale-100"
                x-transition:leave="transition ease-in duration-200"
                x-transition:leave-start="opacity-100 translate-y-0 sm:scale-100"
                x-transition:leave-end="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95"
                class="relative transform overflow-hidden rounded-2xl bg-white dark:bg-gray-900 px-6 pt-6 pb-6 text-left shadow-2xl transition-all sm:my-8 sm:w-full sm:max-w-lg sm:p-8">

                <!-- Modal Header -->
                <div class="flex items-center justify-between mb-6">
                  <h3 class="text-xl font-bold text-gray-900 dark:text-white">Loan Application Details</h3>
                  <button @click="closeModal()"
                    class="rounded-lg p-1 text-gray-400 hover:text-gray-600 dark:hover:text-gray-300 hover:bg-gray-100 dark:hover:bg-gray-800 transition-colors">
                    <i data-lucide="x" class="w-6 h-6"></i>
                  </button>
                </div>

                <!-- Modal content will be populated by JavaScript -->
                <div id="modalContent">
                  <p class="text-gray-600 dark:text-gray-400">Loading loan details...</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- Alpine.js Script -->
      <script>
        function loanHistory() {
          return {
            statusFilter: '',
            dateFilter: '',
            showModal: false,

            filterLoans() {
              // Filter logic can be implemented here if needed
              console.log('Filtering loans:', {
                status: this.statusFilter,
                date: this.dateFilter
              });
            },

            viewLoanDetails(loanId) {
              this.showModal = true;
              document.body.style.overflow = 'hidden';
              // Here you can load loan details via AJAX or show existing data
            },

            closeModal() {
              this.showModal = false;
              document.body.style.overflow = 'auto';
            }
          }
        }

        // Initialize Lucide icons when page loads
        document.addEventListener('DOMContentLoaded', function () {
          if (typeof lucide !== 'undefined') {
            lucide.createIcons();
          }
        });
      </script>
      @endsection