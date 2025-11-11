<?php

namespace App\Http\Controllers;
use App\Models\Transactions;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TransactionsController extends Controller
{
    public static function getRecentTransactions($userId, $limit = 5)
    {
        
        return Transactions::where('user_id', $userId)
            ->orderBy('created_at', 'desc')
            ->take($limit)
            ->get();
    }

    public static function all_transactions($userID){
        return Transactions::where('user_id', $userID)
            ->orderBy('created_at', 'desc')
            ->get();
    }

    public function index(Request $request){
        $userId = Auth::user()->id;
        $transactions = Transactions::where('user_id', $userId)->paginate(10);

        return view('auth.v3.dashboard.transactions', compact('transactions'));
    }
}
