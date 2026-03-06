<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use App\Models\Trade;
use App\Notifications\UserNotification;

class TradingController extends Controller
{
    public function createTrade(Request $request)
    {
        $user = Auth::user();

        // Base validation rules
        $validator = Validator::make($request->all(), [
            'asset' => 'required|string',
            'amount' => 'required|numeric|min:50|max:500000',
            'leverage' => 'required|numeric|min:1|max:100',
            'expire' => 'required|string',
            'order_type' => 'required|in:Buy,Sell',
        ]);

        // Custom validation: check account balance
        $validator->after(function ($validator) use ($user, $request) {
            if ($user->account_balance <= 0 || $request->amount > $user->account_balance) {
                $validator->errors()->add(
                    'balance',
                    "Your live account is insufficient for this trade. Current balance: $" . number_format($user->account_balance, 2)
                );

                // Log notification for insufficient funds
                $user->notify(new UserNotification(
                    'Trade Failed',
                    "Trade failed due to insufficient balance. Attempted: \${$request->amount}, Current: \${$user->account_balance}",
                    'trade',
                    request()->ip()
                ));
            }
        });

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        // Simulate price (replace with real API later)
        $currentPrice = rand(50, 500);

        // Create trade
        $trade = Trade::create([
            'user_id' => $user->id,
            'asset' => $request->asset,
            'amount' => $request->amount,
            'leverage' => $request->leverage,
            'expire' => $request->expire,
            'order_type' => $request->order_type,
            'price_open' => $currentPrice,
            'status' => 'Open',
        ]);

        // Deduct amount from user balance
        $user->account_balance -= $request->amount;
        $user->save();

        // Notify user of success
        $user->notify(new UserNotification(
            'Trade Success',
            "Trade placed successfully: {$trade->order_type} {$trade->asset} for \${$trade->amount}",
            'trade',
            request()->ip()
        ));

        return redirect()->back()->with('success', 'Trade created successfully!');
    }
}