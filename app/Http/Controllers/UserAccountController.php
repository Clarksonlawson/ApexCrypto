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
}
