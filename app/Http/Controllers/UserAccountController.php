<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Collateral;
use App\Models\Loan;
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
        return view('auth.v4.account_settings');
    }

    public function accountHistory(){
        return view('auth.v4.account_history');
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
}
