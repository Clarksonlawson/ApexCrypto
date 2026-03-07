<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Deposit;
use App\Notifications\UserNotification;
use App\Http\Controllers\TransactionsController;

class DepositController extends Controller
{
   public function store(Request $request)
{
    $request->validate([
        'amount' => 'required|numeric|min:1',
        'method' => 'required|string',
        'proof' => 'required|image|max:10240'
    ]);

    $user = Auth::user();

    $proofPath = null;

    if ($request->hasFile('proof')) {
        $proofPath = $request->file('proof')->store('deposit_proofs', 'public');
    }

    $deposit = Deposit::create([
        'user_id' => $user->id,
        'amount' => $request->amount,
        'payment_method' => $request->method,
        'proof' => $proofPath,
        'status' => 'pending'
    ]);

    // notify user
    $user->notify(new UserNotification(
        'Deposit Submitted',
        "Your deposit of $" . number_format($deposit->amount,2) . " is pending admin approval.",
        'deposit'
    ));

    return redirect()->route('payment-confirmation', $deposit->id);
}

    public function showPaymentPage(Request $request)
    {
        // Validate input
        $request->validate([
            'payment_method' => 'required|string|in:USDT,Bank Transfer,Ethereum,Bitcoin',
            'amount' => 'required|numeric|min:1',
        ]);
        
        // Pass payment details to the view
            $user = Auth::user();
            $transactions = TransactionsController::all_transactions($user->id);
            $account_balance = $user->account_balance;
            $total_profit = $user->total_profit;
            $total_deposit = $user->total_deposit;
            $total_withdrawal = $user->total_withdrawal;
            $bonus = $user->bonus;
            $notifications = $user->notifications()->latest()->take(5)->get();
            $payment_method = $request->payment_method;
            $amount = $request->amount;
            $unreadCount = $user->unreadNotifications->count();
            $wallet_address = null;
            $bank_name = env('BANK_NAME');
            $bank_account = env('BANK_ACCOUNT_NO');
            $bank_holder = env('BANK_ACCOUNT_NAME');
            if ($payment_method == 'USDT') {
                $wallet_address = env('WALLET_USDT');
            } elseif ($payment_method == 'Ethereum') {
                $wallet_address = env('WALLET_ETHEREUM');
            } elseif ($payment_method == 'Bitcoin') {
                $wallet_address = env('WALLET_BITCOIN');
            }

        return view('auth.v4.payment', compact(
            'payment_method',
            'amount',
            'transactions',
            'account_balance',
            'total_profit',
            'total_deposit',
            'total_withdrawal',
            'bonus',
            'notifications',
            'unreadCount',
            'wallet_address',
            'bank_name',
            'bank_account',
            'bank_holder'
        ));
    }

    public function confirmation($id)
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
        $deposit = Deposit::findOrFail($id);
        return view('auth.v4.confirmation', compact('deposit', 'transactions', 'account_balance', 'total_profit', 'total_deposit', 'total_withdrawal', 'bonus', 'notifications', 'unreadCount'
        
        ));
    }

   
}