<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoanController extends Controller
{
   public function index(Request $request)
   {
        $user_email = Auth::user()->email;
        $loans = \App\Models\Loan::where('email', $user_email)->orderByDesc('start_date')->get();
        return view('auth.v2.pages.dashboard.index', compact('loans'));
   }
}
