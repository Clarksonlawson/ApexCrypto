<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use function Pest\Laravel\get;

class WalletsController extends Controller
{
    public function index(Request $request){
        $user = Auth::user();
        $userID = $user->id;
        $wallets = DB::table('user_wallets')->where('user_id', $userID)->paginate(15);

        return view('auth.v3.dashboard.wallets', compact('wallets'));
    }

}
