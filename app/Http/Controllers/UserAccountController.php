<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\Collateral;
use App\Models\Loan;
use App\Models\Withdrawal;
use App\Models\Deposit;
use App\Models\Transaction;
use Laravel\Ui\Presets\React;

class UserAccountController extends Controller
{
    public function index(){

        $user = Auth::user();
        $userDetails = User::where('id', $user->id)->get();
        $collaterals = Collateral::where('user_id', $user->id)->get();
        $loans = Loan::where('user_email', $user->email)->orderByDesc('start_date')->get();
        return view('auth.v3.dashboard.account', compact('userDetails', 'collaterals', 'loans'));

    }

    public function updateUserMeta(Request $request){
        dd($request);

    }

    public function updateUserInfo(Request $request){
        dd($request);
    }

    public function accountSettings(){
        $user = Auth::user();
        $account_balance = $user->account_balance;
        $total_profit = $user->total_profit;
        $total_deposit = $user->total_deposit;
        $total_withdrawal = $user->total_withdrawal;

        $bonus = $user->bonus;
        $notifications = $user->notifications()->latest()->take(5)->get();
        $unreadCount = $user->unreadNotifications->count();
        return view('auth.v4.account_settings', compact(
            'account_balance',
            'total_profit',
            'total_deposit',
            'total_withdrawal',
           
            'bonus',
            'notifications',
            'unreadCount',));
    }

    

    public function accountHistory(){

        $user = Auth::user();
        $transactions = TransactionsController::all_transactions($user->id);
        $deposits = Deposit::where('user_id', $user->id)
        ->latest()
        ->paginate(10);
        $withdrawals = Withdrawal::where('user_id', $user->id)
            ->latest()
            ->paginate(10);

        $account_balance = $user->account_balance;
        $total_profit = $user->total_profit;
        $total_deposit = $user->total_deposit;
        $total_withdrawal = $user->total_withdrawal;
        $bonus = $user->bonus;
        $notifications = $user->notifications()->latest()->take(5)->get();
        $unreadCount = $user->unreadNotifications->count();
        return view('auth.v4.account_history', compact('transactions',
            'account_balance',
            'total_profit',
            'total_deposit',
            'total_withdrawal',
            'deposits',
            'withdrawals',
            'transactions',
            'bonus',
            'notifications',
            'unreadCount',));
    }

    public function support(){
        return view('auth.v4.support');
    }

    public function investments(){
        return view('auth.v4.investments');
    }

    public function stockPlans(){
        return view('auth.v4.stock_plans');
    }   

    public function cryptoPlans(){
        return view('auth.v4.crypto_plans');
    }

    public function realEstatePlans(){
        return view('auth.v4.real_estate_plans');
    }

    public function myPlans(){
        return view('auth.v4.my_plans');
    }   

    public function tradingHistory(){
        return view('auth.v4.trading_history');
    }

    public function demoTrading(){
        return view('auth.v4.demo_trading');
    }

    public function liveMarkets(){
        return view('auth.v4.live_markets');
    }

    public function deposits(){
        return view('auth.v4.deposits');
    }   

    public function withdrawals(){
        return view('auth.v4.withdrawals');
    }

    public function transferFunds(){
        return view('auth.v4.transfer_funds');
    }

    public function applyLoan(){
        return view('auth.v4.apply_loan');
    }

    public function loanHistory(){
        return view('auth.v4.loan_history');
    }

    public function connectWallet(){
        return view('auth.v4.connect_wallet');  
    }

    public function updateProfile(Request $request){

        $request->validate([
            'name' => 'required|string|max:255',
            'phone' => 'required|string|max:20',
            'country' => 'required|string|max:255',
        ]);

        $user = Auth::user();
        $user->name = $request->input('name');
        $user->phone = $request->input('phone');
        $user->country = $request->input('country');
        $user->save();
        $user->notify(new \App\Notifications\UserNotification(
                'Profile Updated',
                'You updated your profile.',
                'profile',
                request()->ip()
            ));
        return response()->json(['message' => 'Profile updated successfully']);
    }

    public function updatePassword(Request $request){
        $request->validate([
            'current_password' => 'required',
            'password_confirmation'=> 'required',
            'password' => 'required|min:8|confirmed',
        ]);

        $user = Auth::user();

        if (!Hash::check($request->current_password, $user->password)) {
            return response()->json(['message' => 'Current password is incorrect'], 400);
        }

        $user->password = Hash::make($request->new_password);
        $user->save();
        $user->notify(new \App\Notifications\UserNotification(
                'Password Updated',
                'You updated your password.',
                'password',
                request()->ip()
            ));
        return response()->json(['message' => 'Password updated successfully']);
    }
}
