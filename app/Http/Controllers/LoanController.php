<?php

namespace App\Http\Controllers;

use App\Models\Collateral;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Loan;
use Carbon\Carbon;

use PHPUnit\Logging\OpenTestReporting\Status;

class LoanController extends Controller
{
    public function index(Request $request)
    {
        $user = Auth::user();
        $user_email = Auth::user()->email;
        $loans = Loan::where('user_email', $user_email)->orderByDesc('start_date')->get();
        $activeLoan = Loan::where('user_email', $user_email)->where('status', 'Active Loan')->get();
        $repaidLoans = Loan::where('user_email', $user_email)->where('status', 'Completed')->get();
        $pendingLoans = Loan::where('user_email', $user_email)->where('status', 'pending')->get();
        $collaterals = Collateral::where('user_id', $user->id)->get();
        return view('auth.v3.dashboard.loans', compact('loans', 
        'activeLoan',
        'repaidLoans',
        'pendingLoans',
        'collaterals'));
    }

    public function create(Request $request)
    {
       
        $user_id = Auth::user()->id;
        $asset_name = $request->asset_name;
        $user_email = Auth::user()->email;
        $collateral = Collateral::where('user_id', $user_id)->where('asset_name', $asset_name)->first();
        $loan_id = "LN-".rand();
        $collateral_amount = $request->collAmount / $collateral->usd_value; //collateral to be locked.
        $loan_amount = $request->loan_amount;
        $col_wallet = $collateral->wallet_address;
        $acctNumber = "APX-".rand();
        $ltv = 0.70;
        $status = "Pending Approval";
        $ticker = $collateral->asset_symbol;
        $loan_crypto_amount = $loan_amount / $collateral->usd_value;
        $transferType = "Exchange";
        $description = "Loan request.";
        $status = "pending";
        die($collateral_amount);
        Loan::create([
            'user_email' => $user_email,
            'loan_id' => $loan_id,
            'account_number' => $acctNumber,
            'status' => $status,
            'amount_usd' => $loan_amount,
            'collateral_btc' => $collateral_amount,
            'collateral_wallet_address' => $col_wallet,
            'interest_rate' => 0,
            'ltv' => $ltv,
            'start_date' => Now(),
            'end_date' => Now(),
            'ticker' => $ticker

        ]);
    
    }
}
