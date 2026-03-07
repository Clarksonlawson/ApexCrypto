<?php

namespace App\Http\Controllers;

use App\Models\Credit;
use Illuminate\Http\Request;
use App\Models\Loan;
use Illuminate\Support\Facades\Auth;

class CreditController extends Controller
{
    // Store credit application
    public function store(Request $request)
    {
        $request->validate([
            'amount' => 'required|numeric|min:1000',
            'duration' => 'required|integer',
            'facility' => 'required|string|max:255',
            'income' => 'required|string|max:255',
            'purpose' => 'required|string|min:50',
        ]);

        $monthlyRate = 0.085 / 12;
        $numPayments = $request->duration;

        $monthlyPayment = $monthlyRate === 0
            ? $request->amount / $numPayments
            : $request->amount * ($monthlyRate * pow(1 + $monthlyRate, $numPayments)) / (pow(1 + $monthlyRate, $numPayments) - 1);

        $loan = Credit::create([
            'user_id' => Auth::id(),
            'amount' => $request->amount,
            'duration' => $request->duration,
            'monthly_payment' => $monthlyPayment,
            'facility' => $request->facility,
            'income' => $request->income,
            'purpose' => $request->purpose,
            'accepted_terms' => $request->has('accepted_terms'),
            'status' => 'pending',
        ]);
        $user = Auth::user();
        $user->notify(new \App\Notifications\UserNotification(
            'Credit Application Submitted',
            'Your credit application has been submitted successfully.',
            'credit-application',
            request()->ip()
        ));
        return redirect()->back()->with('success', 'Credit application submitted successfully! You will be notified once approved.');
    }
}