<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\InvestmentPlan;
use App\Models\Investment;
use Illuminate\Support\Facades\Auth;

class InvestmentController extends Controller
{
    /**
     * Join an investment plan
     */
    public function join(Request $request)
    {
        // Validate request
        $request->validate([
            'plan_id' => 'required|exists:investment_plans,id',
            'amount' => 'required|numeric|min:0',
        ]);

        $user = Auth::user();
        $plan = InvestmentPlan::findOrFail($request->plan_id);

        // Check if the amount is within plan limits
        if ($request->amount < $plan->min_investment || $request->amount > $plan->max_investment) {
            return back()->with('error', "Investment amount must be between \${$plan->min_investment} and \${$plan->max_investment}.");
        }

        // Check if user has enough balance
        if ($user->account_balance < $request->amount) {
            return redirect()->route('user.deposits')->with('error', 'Insufficient balance. Please deposit funds to join this plan.');
        }

        // Deduct the amount from user's balance
        $user->account_balance -= $request->amount;
        $user->save();

        // Create the investment
        Investment::create([
            'user_id' => $user->id,
            'plan_id' => $plan->id,
            'amount' => $request->amount,
            'status' => 'active',
        ]);
        $user->notify(new \App\Notifications\UserNotification(
                'New Investment!',
                'Your subscription to '.$plan->name.' has been successful.',
                'investment',
                request()->ip()
            ));
        return redirect()->back()->with('success', "You have successfully joined the {$plan->name}!");
    }
}