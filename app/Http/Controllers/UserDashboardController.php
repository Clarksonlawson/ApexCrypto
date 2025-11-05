<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Loan;
use App\Models\Collateral;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Http;
use App\Http\Controllers\TransactionsController;

class UserDashboardController extends Controller
{
    public function index()
    {
        $user = Auth::user();

        // Fetch user-specific data
        $loans = Loan::where('user_email', $user->email)->get();
        $collaterals = Collateral::where('user_id', $user->id)->paginate(10);;
        $totalActiveCollaterals = Collateral::getTotalActiveCollaterals($user->id);
        $availableCollateral = $totalActiveCollaterals->sum('usd_value');
        $totalLoanAmount = $loans->where('status', 'Active Loan')->where('user_email', $user->email)->sum('amount_usd');
        $totalLockedAmount = $availableCollateral - $totalLoanAmount;
        $recentTransactions = TransactionsController::getRecentTransactions($user->id, 5);
        $totalUsd = Collateral::getTotalUsdValueByUser($user->id);
        $totalassetcount = $collaterals->count();
        $activeLoans = Loan::getTotalActiveLoans($user->email);
        $eligibleAmount = Loan::calculateEligibility($user->id);
        

        // ✅ Fetch live crypto prices (optimized with one API call)
        $networks = $collaterals->pluck('asset_symbol')->map(fn($n) => strtolower($n))->unique()->implode(',');

        $prices = [];
        if (!empty($networks)) {
            $response = Http::get('https://api.coingecko.com/api/v3/simple/price', [
                'ids' => $networks,
                'vs_currencies' => 'usd'
            ]);

            if ($response->successful()) {
                $prices = $response->json();
            }
        }

        // ✅ Pass all data to the view
        return view('auth.v3.dashboard.index', compact(
            'user',
            'loans',
            'collaterals',
            'totalUsd',
            'totalassetcount',
            'activeLoans',
            'eligibleAmount',
            'availableCollateral',
            'totalLoanAmount',
            'totalLockedAmount',
            'prices',
            'recentTransactions',
        ));
    }
}
