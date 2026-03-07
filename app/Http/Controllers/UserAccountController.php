<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Collateral;
use App\Models\Credit;
use App\Models\Loan;
use App\Models\Withdrawal;
use App\Models\Deposit;
use App\Models\Transaction;
use App\Models\InvestmentPlan;
use App\Models\Investment;
use Laravel\Ui\Presets\React;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use App\Mail\SupportMessage;

class UserAccountController extends Controller
{
    public function index()
    {

        $user = Auth::user();
        $userDetails = User::where('id', $user->id)->get();
        $collaterals = Collateral::where('user_id', $user->id)->get();
        $loans = Loan::where('user_email', $user->email)->orderByDesc('start_date')->get();
        return view('auth.v3.dashboard.account', compact('userDetails', 'collaterals', 'loans'));
    }

    public function updateUserMeta(Request $request)
    {
        dd($request);
    }

    public function updateUserInfo(Request $request)
    {
        dd($request);
    }

    public function accountSettings()
    {
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
            'unreadCount',
        ));
    }

    public function refer()
    {
        $user = Auth::user();
        $account_balance = $user->account_balance;
        $total_profit = $user->total_profit;
        $total_deposit = $user->total_deposit;
        $total_withdrawal = $user->total_withdrawal;
        $bonus = $user->bonus;
        $notifications = $user->notifications()->latest()->take(5)->get();
        $unreadCount = $user->unreadNotifications->count();
        $totalReferrals = $user->referrals()->count();
        $earnings = $user->referral_earnings;
        $referrer = $user->referrer ? $user->referrer->name : 'None';
        $referralLink = url('/ref/' . $user->referral_code);
        return view('auth.v4.referrals', compact(
            'account_balance',
            'total_profit',
            'total_deposit',
            'total_withdrawal',
            'bonus',
            'notifications',
            'unreadCount',
            'referralLink',
            'totalReferrals',
            'earnings',
            'referrer',
        ));
    }

    public function accountHistory()
    {

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
        return view('auth.v4.account_history', compact(
            'transactions',
            'account_balance',
            'total_profit',
            'total_deposit',
            'total_withdrawal',
            'deposits',
            'withdrawals',
            'transactions',
            'bonus',
            'notifications',
            'unreadCount',
        ));
    }

    public function support()
    {
        $user = Auth::user();
        $account_balance = $user->account_balance;
        $total_profit = $user->total_profit;
        $total_deposit = $user->total_deposit;
        $total_withdrawal = $user->total_withdrawal;
        $bonus = $user->bonus;
        $notifications = $user->notifications()->latest()->take(5)->get();
        $unreadCount = $user->unreadNotifications->count();
        return view('auth.v4.support', compact(
            'account_balance',
            'total_profit',
            'total_deposit',
            'total_withdrawal',
            'bonus',
            'notifications',
            'unreadCount',
        ));
    }   

   public function submitSupport(Request $request)
    {
        $request->validate([
            'message' => 'required|string|min:10|max:1000',
        ]);

        $data = [
            'name' => $request->name,
            'email' => $request->email,
            'message' => $request->message
        ];

        Mail::to(config('mail.admin_address'))->send(new SupportMessage($data));

        return back()->with('success', 'Your message has been sent to support.');
    }

    public function investments()
    {

        $user = Auth::user();
        $account_balance = $user->account_balance;
        $total_profit = $user->total_profit;
        $total_deposit = $user->total_deposit;
        $total_withdrawal = $user->total_withdrawal;
        $bonus = $user->bonus;
        $plans = InvestmentPlan::all();
        $notifications = $user->notifications()->latest()->take(5)->get();
        $unreadCount = $user->unreadNotifications->count();
        return view('auth.v4.investments', compact(
            'plans',
            'account_balance',
            'total_profit',
            'total_deposit',
            'total_withdrawal',
            'bonus',
            'notifications',
            'unreadCount',
        ));
    }

    public function stockPlans()
    {
        return view('auth.v4.stock_plans');
    }

    public function cryptoPlans()
    {
        return view('auth.v4.crypto_plans');
    }

    public function realEstatePlans()
    {
        return view('auth.v4.real_estate_plans');
    }

    public function myPlans()
    {
        $user = Auth::user();
        $account_balance = $user->account_balance;
        $total_profit = $user->total_profit;
        $total_deposit = $user->total_deposit;
        $total_withdrawal = $user->total_withdrawal;
        $bonus = $user->bonus;
        $plans = Investment::where('user_id', $user->id)->get();
        $notifications = $user->notifications()->latest()->take(5)->get();
        $unreadCount = $user->unreadNotifications->count();
        return view('auth.v4.my_plans', compact(
            'plans',
            'account_balance',
            'total_profit',
            'total_deposit',
            'total_withdrawal',
            'bonus',
            'notifications',
            'unreadCount',
        ));
    }

    public function tradingHistory()
    {
        return view('auth.v4.trading_history');
    }

    public function demoTrading()
    {
        return view('auth.v4.demo_trading');
    }

    public function liveMarkets()
    {
        return view('auth.v4.live_markets');
    }

    public function deposits()
    {
        return view('auth.v4.deposits');
    }

    public function withdrawals()
    {
        return view('auth.v4.withdrawals');
    }

    public function transferFunds()
    {
        $user = Auth::user();
        $account_balance = $user->account_balance;
        $total_profit = $user->total_profit;
        $total_deposit = $user->total_deposit;
        $total_withdrawal = $user->total_withdrawal;
        $bonus = $user->bonus;
        $notifications = $user->notifications()->latest()->take(5)->get();
        $unreadCount = $user->unreadNotifications->count();
        return view('auth.v4.transfer_funds', compact(
            'account_balance',
            'total_profit',
            'total_deposit',
            'total_withdrawal',
            'bonus',
            'notifications',
            'unreadCount',
        ));
    }
    

    public function applyLoan()
    {
        $user = Auth::user();
        $account_balance = $user->account_balance;
        $total_profit = $user->total_profit;
        $total_deposit = $user->total_deposit;
        $total_withdrawal = $user->total_withdrawal;
        $bonus = $user->bonus;
        $notifications = $user->notifications()->latest()->take(5)->get();
        $unreadCount = $user->unreadNotifications->count();
        return view('auth.v4.apply_loan', compact(
            
            'account_balance',
            'total_profit',
            'total_deposit',
            'total_withdrawal',
            'bonus',
            'notifications',
            'unreadCount',
        ));

       
    }

    public function loanHistory()
    {
         $user = Auth::user();
        $account_balance = $user->account_balance;
        $total_profit = $user->total_profit;
        $total_deposit = $user->total_deposit;
        $total_withdrawal = $user->total_withdrawal;
        $bonus = $user->bonus;
        $notifications = $user->notifications()->latest()->take(5)->get();
        $unreadCount = $user->unreadNotifications->count();
        $userId = Auth::id();
        $loans = Credit::where('user_id', $userId)
            ->orderBy('created_at', 'desc')
            ->get();

        $totalApplications = $loans->count();
        $approved = $loans->where('status', 'approved')->count();
        $pending = $loans->where('status', 'pending')->count();
        $totalValue = $loans->sum('amount');

        return view('auth.v4.loan_history', compact(
            'loans',
            'totalApplications',
            'approved',
            'pending',
            'totalValue',
            'account_balance',
            'total_profit',
            'total_deposit',
            'total_withdrawal',
            'bonus',
            'notifications',
            'unreadCount',
        ));
       
    }

   public function checkRecipient(Request $request)
    {
        $request->validate([
            'email' => 'required|string',
        ]);

        $recipient = User::where('email', $request->email)
                        ->orWhere('username', $request->email)
                        ->first();

        if (!$recipient) {
            return back()->with('error', 'Recipient not found.');
        }

        if ($recipient->id === Auth::id()) {
            return back()->with('error', 'You cannot send funds to yourself.');
        }

        // Redirect to confirmation page
        return redirect()->route('transfer.confirm', ['recipient' => $recipient->id]);
    }

    public function confirmPage($recipientId)
    {
        $recipient = User::findOrFail($recipientId);
        return view('auth.v4.confirm_transfer', compact('recipient'));
    }
    public function sendFunds(Request $request)
    {
        $request->validate([
            'recipient_id' => 'required|exists:users,id',
            'amount' => 'required|numeric|min:50',
            'password' => 'required|string',
        ]);

        $user = Auth::user();

        // Check password
        if (!Hash::check($request->password, $user->password)) {
            return back()->with('error', 'Incorrect password.');
        }

        if ($user->balance < $request->amount) {
            return back()->with('error', 'Insufficient balance.');
        }

        $recipient = User::findOrFail($request->recipient_id);

        if ($recipient->id === $user->id) {
            return back()->with('error', 'You cannot send funds to yourself.');
        }

        // Update balances
        $user->account_balance -= $request->amount;
        $recipient->account_balance += $request->amount;

        $user->save();
        $recipient->save();

        // Optionally log transaction
        // Transaction::create([...]);

        return redirect()->route('transfer.form')->with('success', "Funds sent to {$recipient->name} successfully!");
    }
    public function connectWallet() {}

    public function updateProfile(Request $request)
    {

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

    public function updatePassword(Request $request)
    {
        $request->validate([
            'current_password' => 'required',
            'password_confirmation' => 'required',
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
