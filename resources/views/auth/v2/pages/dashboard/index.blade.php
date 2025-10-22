@extends('auth.v2.pages.dashboard.layout.dashboard-layout')
@section('title', 'Dashboard | ApexCrypto Finance LTD')
@php
 $user = Auth::user();
$loans = [
    (object)[
        'id' => 'LN-001234',
        'status' => 'Active',
        'amount_usd' => 15000,
        'ltv' => 45,
        'collateral_btc' => 0.42,
        'ticker' => 'BTC',
        'start_date' => '2025-05-12',
        'interest_rate' => 7.5,
    ],
    (object)[
        'id' => 'LN-001234',
        'status' => 'Active',
        'amount_usd' => 15000,
        'ltv' => 45,
        'collateral_btc' => 0.42,
        'ticker' => 'BTC',
        'start_date' => '2025-05-12',
        'interest_rate' => 7.5,
    ],
    (object)[
        'id' => 'LN-001234',
        'status' => 'Active',
        'amount_usd' => 15000,
        'ltv' => 45,
        'collateral_btc' => 0.42,
        'ticker' => 'BTC',
        'start_date' => '2025-05-12',
        'interest_rate' => 7.5,
    ],

    (object)[
        'id' => 'LN-001234',
        'status' => 'Active',
        'amount_usd' => 15000,
        'ltv' => 45,
        'collateral_btc' => 0.42,
        'ticker' => 'BTC',
        'start_date' => '2025-05-12',
        'interest_rate' => 7.5,
    ],
    (object)[
        'id' => 'LN-001234',
        'status' => 'Active',
        'amount_usd' => 15000,
        'ltv' => 45,
        'collateral_btc' => 0.42,
        'ticker' => 'BTC',
        'start_date' => '2025-05-12',
        'interest_rate' => 7.5,
    ],
   
];

@endphp
@section('content')
<div class="row">
    <div class="col-12">
        <div class="mb-20 flex flex-wrap justify-between gap14 items-center">
            <h6>Hello, {{$user->name}}! </h6>
            <span>{{ \Carbon\Carbon::now()->format('l, F j, Y') }}</span>
            <div class="flex items-center flex-wrap gap6">
                <a href="#" class="tf-button style-4 f12-bold">
                    <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M7.99992 11.3335C8.18881 11.3335 8.34725 11.2695 8.47525 11.1415C8.60281 11.0139 8.66658 10.8557 8.66658 10.6668V8.66683H10.6833C10.8721 8.66683 11.0277 8.60283 11.1499 8.47483C11.2721 8.34727 11.3333 8.18905 11.3333 8.00016C11.3333 7.81127 11.2693 7.65283 11.1413 7.52483C11.0137 7.39727 10.8555 7.3335 10.6666 7.3335H8.66658V5.31683C8.66658 5.12794 8.60281 4.97238 8.47525 4.85016C8.34725 4.72794 8.18881 4.66683 7.99992 4.66683C7.81103 4.66683 7.65281 4.73061 7.52525 4.85816C7.39725 4.98616 7.33325 5.14461 7.33325 5.3335V7.3335H5.31659C5.1277 7.3335 4.97214 7.39727 4.84992 7.52483C4.7277 7.65283 4.66658 7.81127 4.66658 8.00016C4.66658 8.18905 4.73036 8.34727 4.85792 8.47483C4.98592 8.60283 5.14436 8.66683 5.33325 8.66683H7.33325V10.6835C7.33325 10.8724 7.39725 11.0279 7.52525 11.1502C7.65281 11.2724 7.81103 11.3335 7.99992 11.3335ZM7.99992 14.6668C7.0777 14.6668 6.21103 14.4917 5.39992 14.1415C4.58881 13.7917 3.88325 13.3168 3.28325 12.7168C2.68325 12.1168 2.20836 11.4113 1.85859 10.6002C1.50836 9.78905 1.33325 8.92238 1.33325 8.00016C1.33325 7.07794 1.50836 6.21127 1.85859 5.40016C2.20836 4.58905 2.68325 3.8835 3.28325 3.2835C3.88325 2.6835 4.58881 2.20838 5.39992 1.85816C6.21103 1.50838 7.0777 1.3335 7.99992 1.3335C8.92214 1.3335 9.78881 1.50838 10.5999 1.85816C11.411 2.20838 12.1166 2.6835 12.7166 3.2835C13.3166 3.8835 13.7915 4.58905 14.1413 5.40016C14.4915 6.21127 14.6666 7.07794 14.6666 8.00016C14.6666 8.92238 14.4915 9.78905 14.1413 10.6002C13.7915 11.4113 13.3166 12.1168 12.7166 12.7168C12.1166 13.3168 11.411 13.7917 10.5999 14.1415C9.78881 14.4917 8.92214 14.6668 7.99992 14.6668ZM7.99992 13.3335C9.4777 13.3335 10.7361 12.8142 11.7753 11.7755C12.8139 10.7364 13.3333 9.47794 13.3333 8.00016C13.3333 6.52238 12.8139 5.26394 11.7753 4.22483C10.7361 3.18616 9.4777 2.66683 7.99992 2.66683C6.52214 2.66683 5.26392 3.18616 4.22525 4.22483C3.18614 5.26394 2.66659 6.52238 2.66659 8.00016C2.66659 9.47794 3.18614 10.7364 4.22525 11.7755C5.26392 12.8142 6.52214 13.3335 7.99992 13.3335Z" fill="#161326"/>
                    </svg>
                    New Loan
                </a>
            </div>
        </div>

      <div class="loan-card-container">
        @forelse ($loans as $loan)
            <div class="loan-card">
                <div class="loan-card-inner">

                    <!-- Header -->
                    <div class="loan-card-header">
                        <div>
                            <div class="loan-status">{{ strtoupper($loan->status) }}</div>
                            <div class="loan-id">{{ $loan->id }}</div>
                        </div>
                        <div class="crypto-icon">
                            <img src="https://cryptologos.cc/logos/bitcoin-btc-logo.png" alt="BTC">
                        </div>
                    </div>

                    <!-- Main Body -->
                    <div class="loan-card-body">
                        <div class="loan-amount">${{ number_format($loan->amount_usd, 2) }}</div>
                        <div class="loan-subinfo">
                            <span>{{ $loan->collateral_btc }} {{ $loan->ticker }} Collateral</span>
                            <span>{{ $loan->ltv }}% LTV</span>
                        </div>
                        <div class="loan-interest">
                            <span>Interest Rate:</span>
                            <strong>{{ $loan->interest_rate }}%</strong>
                        </div>
                    </div>

                    <!-- Footer -->
                    <div class="loan-card-footer">
                        <div class="loan-date">
                            <span>Start Date</span>
                            <div>{{ \Carbon\Carbon::parse($loan->start_date)->format('M d, Y') }}</div>
                        </div>
                        <div class="loan-ticker">
                            <span>Ticker</span>
                            <div>{{ $loan->ticker }}</div>
                        </div>
                    </div>

                </div>
            </div>
        @empty
            <!-- Empty State Card -->
            <div class="loan-card new-loan-card">
                <div class="loan-card-inner new-loan-inner">
                    <div class="new-loan-icon">
                        <svg xmlns="http://www.w3.org/2000/svg" width="56" height="56" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="#7dd3fc">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M12 4.5v15m7.5-7.5h-15"/>
                        </svg>
                    </div>
                    <div class="new-loan-text">
                        <h3>No Active Loans</h3>
                        <p>Start your crypto-backed loan in just a few clicks.</p>
                    </div>
                    <a href="{{ route('exchange') }}" class="new-loan-btn">Request New Loan</a>
                </div>
            </div>
        @endforelse
    </div>
@endsection
