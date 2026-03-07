<?php

namespace App\Http\Controllers;

use App\Models\Withdrawal;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class WithdrawalController extends Controller
{
    public function verifyCode(Request $request)
    {
        $request->validate([
            'withdrawal_code' => 'required|string'
            
        ]);

        $user = Auth::user();

        if ($request->withdrawal_code !== $user->withdrawal_code) {
            $user->notify(new \App\Notifications\UserNotification(
                'Failed Withdrawal',
                'You have entered an incorrect withdrawal verification code.',
                'withdraw',
                request()->ip()
            ));
            return back()->with('error', 'Incorrect withdrawal verification code.');
        }

        session(['withdrawal_verified' => true]);

        return redirect()->route('withdraw.amount');
    }

    public function amountPage()
    {
        if (!session('withdrawal_verified')) {
            return redirect()->route('user.dashboard');
        }

        $balance = Auth::user()->account_balance;
         $user = Auth::user();
        $transactions = TransactionsController::all_transactions($user->id);
        $account_balance = $user->account_balance;
        $total_profit = $user->total_profit;
        $total_deposit = $user->total_deposit;
        $total_withdrawal = $user->total_withdrawal;
        $bonus = $user->bonus;
        $notifications = $user->notifications()->latest()->take(5)->get();
        $unreadCount = $user->unreadNotifications->count();

        return view('auth.v4.withdrawal-v2', compact('balance',
         'transactions', 'account_balance', 'total_profit',
          'total_deposit', 'total_withdrawal', 'bonus', 'notifications', 'unreadCount'));
    }

    public function submitAmount(Request $request)
    {
        $user = Auth::user();

        $request->validate([
            'amount' => 'required|numeric|min:50'
        ]);

        if ($request->amount > $user->account_balance) {

             $user->notify(new \App\Notifications\UserNotification(
                'Failed Withdrawal',
                'Withdrawal amount exceeds available balance.',
                'withdraw',
                request()->ip()
            ));
            return back()->with('error', 'Withdrawal amount exceeds available balance.');
        }

        session(['withdraw_amount' => $request->amount]);
        session(['withdrawal_method' =>$request->withdrawal_method]);
        session(['withdrawal_address' =>$request->withdrawal_address]);

        return redirect()->route('withdraw.confirm');
    }

    public function confirmPage()
    {
        if (!session('withdraw_amount')) {
            return redirect()->route('user.dashboard');
        }

        $amount = session('withdraw_amount');
        $withdrawal_address = session('withdrawal_address');
        $withdrawal_method = session('withdrawal_method');
        $user = Auth::user();
        $transactions = TransactionsController::all_transactions($user->id);
        $account_balance = $user->account_balance;
        $total_profit = $user->total_profit;
        $total_deposit = $user->total_deposit;
        $total_withdrawal = $user->total_withdrawal;
        $bonus = $user->bonus;
        $notifications = $user->notifications()->latest()->take(5)->get();
        $unreadCount = $user->unreadNotifications->count();

        return view('auth.v4.withdrawal-v3', compact('amount',
         'transactions', 'account_balance', 'total_profit',
          'total_deposit', 'total_withdrawal', 'bonus', 'notifications', 'unreadCount', 'withdrawal_address', 'withdrawal_method'));
    }

    public function processWithdrawal()
    {
        $user = Auth::user();
        $amount = session('withdraw_amount');
        $withdrawal_address = session('withdrawal_address');
        $withdrawal_method = session('withdrawal_method');
        
        if (!$amount) {
            return redirect()->route('user.dashboard');
        }

        if (!$user->is_authorized_to_withdraw) {
             $user->notify(new \App\Notifications\UserNotification(
                'Failed Withdrawal',
                'Your account currently has a standing lien. Withdrawals are temporarily restricted.',
                'withdraw',
                request()->ip()
            ));
            return redirect()->route('withdraw.fail')
            ->with('error', 'Your account currently has a standing lien. Withdrawals are temporarily restricted.');
        }

        if ($amount > $user->account_balance) {
             $user->notify(new \App\Notifications\UserNotification(
                'Failed Withdrawal',
                'Insufficient balance to process this withdrawal.',
                'withdraw',
                request()->ip()
            ));
            return redirect()->route('withdraw.amount')
            ->with('error', 'Insufficient balance.');
        }

       DB::transaction(function () use ($user, $amount, $withdrawal_address, $withdrawal_method) {

            Withdrawal::create([
                'user_id' => $user->id,
                'amount' => $amount,
                'method' => $withdrawal_method,
                'account' => $withdrawal_address,
                'bank_name' => '',
                'account_name' => '',
                'status' => 'pending'
            ]);

        });

        session()->forget(['withdraw_amount','withdrawal_verified']);
         $user->notify(new \App\Notifications\UserNotification(
                'Withdrawal Success',
                'Withdrawal request submitted successfully. Our accounts team will verify and handle accordingly.',
                'withdraw',
                request()->ip()
            ));
        return redirect()->route('withdraw.success')

            ->with('success', 'Withdrawal request submitted successfully.');
    }

    public function failPage()
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

        return view('auth.v4.withdrawal-fail', compact('transactions', 'account_balance', 'total_profit', 'total_deposit', 'total_withdrawal', 'bonus', 'notifications', 'unreadCount'));
    }
    
    public function successPage()
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

        return view('auth.v4.withdrawal-success', compact('transactions', 'account_balance', 'total_profit', 'total_deposit', 'total_withdrawal', 'bonus', 'notifications', 'unreadCount'));
    }
}
