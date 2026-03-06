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
        $transactions = TransactionsController::all_transactions($user->id);
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
        $transactions = TransactionsController::all_transactions($user->id);
        $account_balance = $user->account_balance;
        $total_profit = $user->total_profit;
        $total_deposit = $user->total_deposit;
        $total_withdrawal = $user->total_withdrawal;
        $bonus = $user->bonus;
        $notifications = $user->notifications()->latest()->take(5)->get();
        $unreadCount = $user->unreadNotifications->count();
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
        return view('auth.v4.dashboard', compact(
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
            'transactions',
            'account_balance',
            'total_profit',
            'total_deposit',
            'total_withdrawal',
            'bonus',
            'notifications',
            'unreadCount',
        ));
    }

    public function deposits()
    {
        $user = Auth::user();
        $transactions = TransactionsController::all_transactions($user->id);
        $account_balance = $user->account_balance;
        $total_profit = $user->total_profit;
        $total_deposit = $user->total_deposit;
        $total_withdrawal = $user->total_withdrawal;
        $bonus = $user->bonus;
        $notifications = $user->notifications()->latest()->take(5)->get();
        $unreadCount = $user->unreadNotifications->count();
        return view('auth.v4.deposits', compact('transactions',
            'account_balance',
            'total_profit',
            'total_deposit',
            'total_withdrawal',
            'bonus',
            'notifications',
            'unreadCount',));
    }

    public function withdrawals()
    {
        $user = Auth::user();
        $transactions = TransactionsController::all_transactions($user->id);
        $account_balance = $user->account_balance;
        $total_profit = $user->total_profit;
        $total_deposit = $user->total_deposit;
        $total_withdrawal = $user->total_withdrawal;
        $bonus = $user->bonus;
        $notifications = $user->notifications()->latest()->take(5)->get();
        $unreadCount = $user->unreadNotifications->count();
        return view('auth.v4.withdrawals', compact('transactions',
            'account_balance',
            'total_profit',
            'total_deposit',
            'total_withdrawal',
            'bonus',
            'notifications',
            'unreadCount',
        ));
    }

    public function notifications()
    {
        $user = Auth::user();
        $notifications = $user->notifications()->latest()->paginate(10);
        return view('auth.v4.notifications', compact('notifications'));
    }

    public function markNotificationAsRead($id)
    {
        $user = Auth::user();
        $notification = $user->notifications()->where('id', $id)->first();

        if ($notification) {
            $notification->markAsRead();
            return redirect()->back()->with('success', 'Notification marked as read.');
        }

        return redirect()->back()->with('error', 'Notification not found.');
    }
}
