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

   public function storeCollateral(Request $request)
   {
        $request->validate([
            'type' => 'required|string',
            'amount' => 'required|numeric|min:0.01',
            'address' => 'required|string',
            'proof_of_ownership' => 'required|image|max:2048',
        ]);

        $collateral = new \App\Models\Collateral();
        $collateral->user_id = Auth::id();
        $collateral->type = $request->input('type');
        $collateral->amount = $request->input('amount');
        $collateral->address = $request->input('address');

        if ($request->hasFile('proof_of_ownership')) {
            $file = $request->file('proof_of_ownership');
            $filename = time() . '_' . $file->getClientOriginalName();
            $filePath = $file->storeAs('collaterals', $filename, 'public');
            $collateral->proof_of_ownership = $filePath;
        }

        $collateral->save();

        return redirect()->route('dashboard')->with('success', 'Collateral added successfully.');
   }
}
