@extends('auth.v2.pages.dashboard.layout.dashboard-layout')
@section('title', 'Add Collateral | ApexCrypto Finance LTD')
@section('pageHeader', 'Add Collateral')

@php
    use Illuminate\Support\Facades\Auth;
    use Illuminate\Support\Facades\DB;

    $user = Auth::user();
    $wallets = DB::table('user_wallets')->where('user_id', $user->id)->get();
    $hasWallets = $wallets->isNotEmpty();

    $btc_wallet_address = "Not Available";
    $eth_wallet_address = "Not Available";

    foreach ($wallets as $wallet) {
        if ($wallet->asset_symbol === "BTC" && $wallet->network === "Bitcoin") {
            $btc_wallet_address = $wallet->wallet_address;
        } elseif ($wallet->asset_symbol === "ETH" && $wallet->network === "Ethereum") {
            $eth_wallet_address = $wallet->wallet_address;
        }
    }
@endphp

@section('content')
<div id="page">
    <div class="sign-in-wrap d-flex flex-column flex-md-row min-vh-100">
        <div class="sign-in-box d-flex flex-column flex-md-row w-100">
            <div class="left flex-grow-1 d-flex align-items-center justify-content-center p-4 p-md-5">
                <div class="content w-100" style="max-width: 460px;">

                    {{-- Header --}}
                    <div class="text-center mb-8">
                        <h3 class="heading mb-2 text-dark">Add Collateral</h3>
                        <p class="sub f12-regular text-GrayDark">
                            Secure your loan with crypto assets — complete the steps below.
                        </p>
                    </div>

                    <div class="sign-in-inner">
                       @if ($errors->any())
                        <div class="alert alert-danger mb-4">
                            <ul class="mb-0">
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    @if (session('error'))
                        <div class="alert alert-danger mb-4">
                            {{ session('error') }}
                        </div>
                    @endif

                    @if (session('success'))
                        <div class="alert alert-success mb-4">
                            {{ session('success') }}
                        </div>
                    @endif

                        <form id="collateralForm" class="form-login flex flex-column gap24" method="POST" action="{{route('collateral.create')}}" enctype="multipart/form-data">
                            @csrf

                            @if($hasWallets)
                                    {{-- Progress Indicator --}}
                                <div class="flex items-center justify-between mb-8">
                                    <div class="flex-1 h-[6px] bg-[#2C2940] rounded-full overflow-hidden mr-3">
                                        <div id="progressBar" class="h-full bg-[#7367F0] w-1/4 transition-all duration-500"></div>
                                    </div>
                                    <span id="stepLabel" class="text-xs text-GrayDark">Step 1 of 4</span>
                                </div>
                                {{-- STEP 1: Select Asset --}}
                                <div class="step" id="step1">
                                    <input type="hidden" value="{{$user->id}}" name="user_id">
                                    <h4 class="mb-3">Step 1: Select Asset</h4>
                                    <fieldset class="mb-3">
                                        <div class="f14-regular mb-6">Collateral Type</div>
                                        <select class="image-select center w-100" name="asset_name">
                                            <option value="" disabled selected>Select an asset</option>
                                            @foreach ($wallets as $wallet)
                                                <option 
                                                    data-network="{{ $wallet->network }}" 
                                                    value="{{ $wallet->asset_symbol }}" 
                                                    data-address="{{ $wallet->wallet_address }}" 
                                                    data-thumbnail="{{ asset('assets/images/item/' . $wallet->network . '.svg') }}">
                                                    {{ $wallet->network }} ({{ $wallet->asset_symbol }})
                                                </option>
                                            @endforeach
                                        </select>
                                    </fieldset>

                                    <fieldset class="mb-3">
                                        <div class="f14-regular mb-6">Amount</div>
                                        <input class="flex-grow bg-Gainsboro" type="number" step="any" placeholder="$5,000" name="usd_value" required>
                                        <p class="f12-regular text-GrayDark mt-2">Min deposit: $5,000 | Max: $2,000,000</p>
                                    </fieldset>
                                </div>

                                {{-- STEP 2: Wallet Address --}}
                                <div class="step hidden" id="step2">
                                    <button type="button" class="prevBtn text-sm text-[#7367F0] hover:underline">← Go Back</button>
                                    <h4 class="mt-3 mb-4">Step 2: Wallet Address</h4>
                                    <p class="f14-regular text-GrayDark mb-4" id="walletNotice">Send your selected crypto to the deposit address below.</p>

                                    <fieldset class="mb-3">
                                        <div class="f14-regular mb-2 text-GrayDark">Deposit Address</div>
                                        <div class="flex items-center bg-[#2C2940] border border-[#3a3550] rounded-lg px-3 py-2">
                                            <input type="text" id="walletAddress" readonly name="address" class="bg-GrayDark flex-grow focus:outline-none">
                                            <button type="button" onclick="copyAddress()" class="f12-bold text-[#7367F0] ml-2">Copy</button>
                                        </div>
                                    </fieldset>

                                    <p class="f10-regular text-GrayDark mt-2"><b>Summary:</b></p>
                                    <p id="summaryMethod" class="f8-regular text-Dark mt-2"></p>
                                    <p id="summaryAmount" class="f8-regular text-Dark mt-2"></p>
                                    <p class="f12-regular text-GrayDark mt-4">Confirmations may take 10–30 minutes depending on network traffic.</p>
                                </div>

                                {{-- STEP 3: Upload Proof --}}
                                <div class="step hidden" id="step3">
                                    <button type="button" class="prevBtn text-sm text-[#7367F0] hover:underline">← Go Back</button>
                                    <h4 class="mt-3 mb-4">Step 3: Upload Proof</h4>
                                    <p class="f10-regular mb-2 text-GrayDark" id="proofPayment"></p>

                                    <fieldset>
                                        <div class="f14-regular mb-2 text-GrayDark">Transaction Screenshot</div>
                                        <input class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400" name="proof_of_deposit" type="file" accept="image/*,application/pdf">
                                        <p class="f12-regular text-GrayDark mt-2">Accepted formats: JPG, PNG, PDF | Max size: 5MB</p>
                                    </fieldset>
                                </div>

                                {{-- STEP 4: Review --}}
                                <div class="step hidden" id="step4">
                                    <button type="button" class="prevBtn text-sm text-[#7367F0] hover:underline">← Go Back</button>
                                    <h4 class="mt-3 mb-4">Step 4: Review</h4>

                                    <div class="bg-[#2C2940] border border-[#3a3550] rounded-lg p-4 text-sm">
                                        <p><strong>Asset:</strong> <span id="reviewAsset"></span></p>
                                        <p><strong>Amount:</strong> <span id="reviewAmount">0.00</span></p>
                                        <p><strong>Wallet Address:</strong> <span id="reviewAddress"></span></p>
                                        <p><strong>Status:</strong> Pending Verification</p>
                                    </div>
                                </div>

                                {{-- Submit Button (Hidden initially) --}}
                                <button class="tf-button style-1 label-01 w-100 " type="submit" id="submitBtn" style="display: none">
                                    Process <i class="icon icon-check"></i>
                                </button>
                                 {{-- Continue Button --}}
                            <a class="tf-button style-1 label-01 w-100 text-center" id="nextBtn" style="display: block;">
                                Continue <i class="icon icon-send"></i>
                            </a>
                            @else
                                {{-- No Wallet --}}
                                <div class="text-center py-5">
                                    <img src="{{ asset('assets/images/item/empty-wallet.png') }}" alt="No Wallets"  class="mb-3">
                                    <h5 class="text-light">No Wallets Found</h5>
                                    <p class="text-muted mb-4">
                                        You don’t have any wallets set up yet. Please generate a wallet to proceed.
                                    </p>
                                    <a href="" class="tf-button style-4 f12-bold w-100">
                                        <i class="icon icon-send"></i> Generate New Wallet
                                    </a>
                                </div>
                            @endif
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

{{-- JavaScript --}}
<script>
document.addEventListener('DOMContentLoaded', function () {
    const steps = document.querySelectorAll('.step');
    const nextBtn = document.getElementById('nextBtn');
    const prevBtns = document.querySelectorAll('.prevBtn');
    const submitBtn = document.getElementById('submitBtn');
    const progressBar = document.getElementById('progressBar');
    const stepLabel = document.getElementById('stepLabel');
    const collateralSelect = document.querySelector('select[name="asset_name"]');
    const walletInput = document.getElementById('walletAddress');
    const walletNotice = document.getElementById('walletNotice');
    const summaryMethod = document.getElementById('summaryMethod');
    const summaryAmount = document.getElementById('summaryAmount');
    const proofPayment = document.getElementById('proofPayment');
    const reviewAsset = document.getElementById('reviewAsset');
    const reviewAmount = document.getElementById('reviewAmount');
    const reviewAddress = document.getElementById('reviewAddress');
    const form = document.getElementById('collateralForm');

    let currentStep = 0;

    function showStep(i) {
        steps.forEach((s, idx) => s.classList.toggle('hidden', idx !== i));

        // Control visibility directly using inline display styles
        if (i === steps.length - 1) {
            nextBtn.style.display = 'none';      // hide Continue on last step
            submitBtn.style.display = 'block';   // show Submit on last step
        } else {
            nextBtn.style.display = 'block';     // show Continue on other steps
            submitBtn.style.display = 'none';    // hide Submit before last step
        }

        progressBar.style.width = ((i + 1) / steps.length * 100) + '%';
        stepLabel.textContent = `Step ${i + 1} of ${steps.length}`;
    }


    function validateStep(stepIndex) {
        let valid = true;

        if (stepIndex === 0) {
            const amountInput = document.querySelector('input[name="usd_value"]');
            const amountValue = parseFloat(amountInput.value);

            if (!collateralSelect.value) {
                alert('Please select an asset.');
                valid = false;
            } else if (isNaN(amountValue) || amountValue < 5000) {
                alert('Please enter a valid amount (minimum $5,000).');
                valid = false;
            }
        }

        if (stepIndex === 2) {
            const fileInput = document.querySelector('input[name="proof_of_deposit"]');
            if (!fileInput.files.length) {
                alert('Please upload a payment proof.');
                valid = false;
            }
        }

        return valid;
    }

    nextBtn.addEventListener('click', () => {
        if (!validateStep(currentStep)) return;

        if (currentStep === 0) {
            const selectedOption = collateralSelect.options[collateralSelect.selectedIndex];
            const walletAddress = selectedOption?.dataset.address || 'Not Available';
            const amount = document.querySelector('input[name="usd_value"]').value || '0';
            const network = selectedOption?.dataset.network || 'Unknown Network';

            walletInput.value = walletAddress;
            walletNotice.innerHTML = walletAddress === 'Not Available' || walletAddress.trim() === ''
                ? `⚠️ No wallet address set for <strong>${network}</strong>.`
                : `Send your $${parseFloat(amount).toLocaleString()} worth of ${network} collateral to the address below.`;

            summaryMethod.innerHTML = `<strong>Asset:</strong> ${selectedOption.text}`;
            summaryAmount.innerHTML = `<strong>Amount:</strong> $${parseFloat(amount).toLocaleString()}`;
            reviewAsset.textContent = selectedOption.text;
            reviewAmount.textContent = `$${parseFloat(amount).toLocaleString()}`;
            reviewAddress.textContent = walletAddress;
            proofPayment.innerHTML = `Upload your payment proof after sending $${parseFloat(amount).toLocaleString()} of ${selectedOption.text}.`;
        }

        if (currentStep < steps.length - 1) {
            currentStep++;
            showStep(currentStep);
        }
    });

    prevBtns.forEach(btn => {
        btn.addEventListener('click', () => {
            if (currentStep > 0) {
                currentStep--;
                showStep(currentStep);
            }
        });
    });

    window.copyAddress = function () {
        const input = document.getElementById('walletAddress');
        input.select();
        document.execCommand('copy');
        alert('📋 Wallet address copied to clipboard.');
    };

    showStep(currentStep);
});
</script>
@endsection
