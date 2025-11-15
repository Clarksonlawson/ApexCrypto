<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Collateral;
use App\Models\Loan;
use Illuminate\Support\Facades\DB;
use App\Models\Transactions;

class CollateralsController extends Controller
{
   public function storeCollateral(Request $request)
{
    $proofPath = null;
    if ($request->hasFile('pof')) {
        $proofPath = $request->file('pof')->store('proofs', 'public');
    }

    DB::transaction(function () use ($request, $proofPath) {

        // Fetch the collateral or create it if it doesn't exist
        $collateral = Collateral::firstOrCreate(
            [
                'user_id' => Auth::user()->id,
                'asset_symbol' => $request->asset_name,
            ],
            [
                'pending_usd_value' => 0,
                'usd_value' => $request->usd_value,
                'asset_name' => $request->asset_name, 
                'amount' =>$request->crypto_amount,
                'wallet_address' => $request->wallet_address, // default if you need
                'collateral_id' => "APX-".rand(1111,9999),
                'network' => $request->network ?? '',
                'status' => 'pending',
            ]
        );

        // Increment the pending USD value
        $collateral->increment('pending_usd_value', $request->usd_value);

        // Update proof of deposit if uploaded
        if ($proofPath) {
            $collateral->update([
                'proof_of_deposit' => $proofPath,
            ]);
        }
    });

    // Record the transaction
    Transactions::create([
        'user_id' => Auth::user()->id,
        'asset_symbol' => $request->asset_name,
        'network' => $request->network,
        'usd_value' => $request->usd_value,
        'transaction_type' => 'New Collateral',
        'crypto_amount' => $request->crypto_amount,
        'proof_of_deposit' => $proofPath,
        'status' => 'pending',
        'description' => 'Your ' . $request->asset_name . ' collateral is currently awaiting verification.',
    ]);

    return back()->with('success', 'Deposit submitted successfully and pending verification.');
}

    public function viewCollaterals()
    {
        $user = Auth::user();
        $collaterals = Collateral::where('user_id', $user->id)->get();
        $loans = Loan::where('user_email', $user->email)->get();
        $balance = Collateral::where('user_id', $user->id)->sum('usd_value');
        $totalLoanAmount = $loans->where('status', 'Active Loan')->where('user_email', $user->email)->sum('amount_usd');
        $availableCollateral = $balance - $totalLoanAmount;
        $lockedCollaterals = Collateral::where('user_id', $user->id)->sum('locked');
        $system_collaterals = DB::table('system_collaterals')->get();
        return view('auth.v3.dashboard.collaterals', compact('collaterals', 
        'loans',
         'balance',
         'lockedCollaterals',
         'availableCollateral',
         'system_collaterals'
        ));
    }

    public function getCollateralBalance($userId, $assetSymbol)
    {
        $collateral = Collateral::where('user_id', $userId)
            ->where('asset_symbol', $assetSymbol)
            ->first();

        return $collateral ? $collateral->locked_usd_value : 0;
    }

}
