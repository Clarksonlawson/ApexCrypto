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
        $request->validate([
            'user_id' => 'required|exists:users,id',
            'asset_name' => 'required|string',
            'usd_value' => 'required|numeric|min:5000|max:2000000',
            'proof_of_deposit' => 'nullable|file|mimes:jpg,png,pdf|max:5120',
        ]);

        $proofPath = null;
        if ($request->hasFile('proof_of_deposit')) {
            $proofPath = $request->file('proof_of_deposit')->store('proofs', 'public');
        }

        DB::transaction(function () use ($request, $proofPath) {
            $collateral = Collateral::where('user_id', $request->user_id)
                ->where('asset_symbol', $request->asset_name)
                ->first();


            $collateral->increment('pending_usd_value', $request->usd_value);

            if ($proofPath) {
                $collateral->update([
                    'proof_of_deposit' => $proofPath,

                ]);
            }
        });

        Transactions::create([
            'user_id' => $request->user_id,
            'asset_symbol' => $request->asset_name,
            'network' => $request->network,
            'usd_value' => $request->usd_value,
            'transaction_type' => 'collateral_deposit',
            'proof_of_deposit' => $proofPath,
            'status' => 'pending',
            'description' => 'User deposited additional ' . $request->asset_symbol . ' collateral awaiting verification.',
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
        return view('auth.v3.dashboard.collaterals', compact('collaterals', 
        'loans',
         'balance',
         'lockedCollaterals',
         'availableCollateral'
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
