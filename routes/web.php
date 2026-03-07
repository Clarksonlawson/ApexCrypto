<?php

use App\Http\Controllers\AccountVerficiationController;
use App\Http\Controllers\ForgotPasswordController;
use App\Http\Controllers\LoanController;
use App\Models\User;
use Illuminate\Auth\Events\PasswordReset;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\CollateralsController;
use App\Http\Controllers\TransactionsController;
use App\Http\Controllers\UserAccountController;
use App\Http\Controllers\UserLoginController;
use App\Http\Controllers\UserRegistrationController;
use Illuminate\Routing\Route as RoutingRoute;
use App\Http\Controllers\AccountVerificationController;
use Illuminate\Support\Facades\Route;
use Illuminate\Foundation\Auth\EmailVerificationRequest;
use Illuminate\Http\Request;
use Illuminate\Auth\Events\Verified;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Password;
use App\Http\Controllers\UserVerificationController;
use App\Http\Controllers\UserDashboardController;
use App\Http\Controllers\WalletsController;
use App\Http\Controllers\AssetController;
use App\Http\Controllers\TradingController;
use App\Http\Controllers\DepositController;
use App\Http\Controllers\WithdrawalController;

Route::get('/', function () {
    return view('welcome');
})->name('welcome');
Route::get('exchange', function () {
    return view('pages.exchange');
})->name('exchange');
Route::get('our-mission', function () {
    return view('pages.our-mission');
})->name('our-mission');
Route::get('disclosure', function () {
    return view('pages.disclosure');
})->name('disclosure');
Route::get('contact', function () {
    return view('pages.contact');
})->name('contact');
Route::get('faq', function () {
    return view('pages.faq');
})->name('faq');
Route::get('compliance', function () {
    return view('pages.compliance');
})->name('compliance');
Route::get('complaints', function () {
    return view('pages.complaints');
})->name('complaints');
Route::get('security-system', function () {
    return view('pages.security-system');
})->name('security-system');
Route::get('transact', function () {
    return view('pages.transact');
})->name('transact');
Route::get('earn', function () {
    return view('pages.earn');
})->name('earn');
Route::get('loan', function () {
    return view('pages.loan');
})->name('loan');
Route::get('blogs', [BlogController::class, 'index'])->name('blog.index');
Route::get('/', [BlogController::class, 'home'])->name('blog.home');
Route::get('/blog/{slug}', [BlogController::class, 'show'])->name('blog.show');

Route::get('/email/verify/{id}/{hash}', function (EmailVerificationRequest $request) {

    if ($request->user()->hasVerifiedEmail()) {
        return redirect()->route('verification.already');
    };
    if ($request->user()->markEmailAsVerified()) {
        event(new Verified($request->user()));
    }

    return redirect()->route('verification.success')->with('status', 'success');
})->middleware(['auth', 'signed'])->name('verification.verify');

Route::post('/email/verification-notification', function (Request $request) {
    $request->user()->sendEmailVerificationNotification();
    return back()->with('message', 'Verification link sent!');
})->middleware(['auth', 'throttle:6,1'])->name('verification.send');

Route::middleware('auth')->group(function () {
    Route::get('authentication/verify-code', [UserVerificationController::class, 'showVerifyForm'])->name('verification.enter');
    Route::post('authentication/verify-code', [UserVerificationController::class, 'verifyCode'])->name('verification.check');
    Route::post('/verify-code/resend', [UserVerificationController::class, 'resendCode'])->name('verification.resend')->middleware('throttle:2,1');
    Route::post('logout', [UserLoginController::class, 'logout'])->name('logout');
});

Route::middleware(['auth', 'verified'])->group(function () {
    Route::get('/dashboard/loans', [LoanController::class, 'index'])->name('loans.index');
    Route::get('user/dashboard', [UserDashboardController::class, 'index'])->name('user.dashboard');
    Route::get('user/dashboard/deposits', [UserDashboardController::class, 'deposits'])->name('user.deposits');
    Route::get('user/dashboard/withdrawals', [UserDashboardController::class, 'withdrawals'])->name('user.withdrawals');    
    Route::get('dashboard', [UserDashboardController::class, 'index'])->name('auth.dashboard');
    Route::get('user/dashboard/notifications', [UserDashboardController::class, 'notifications'])->name('user.notifications');
    Route::get('user/dashboard/account-settings', [UserAccountController::class, 'accountSettings'])->name('auth.profile');
    Route::get('user/dashboard/account-history', [UserAccountController::class, 'accountHistory'])->name('auth.account.history');
    Route::get('user/dashboard/support', [UserAccountController::class, 'support'])->name('auth.support');
    Route::get('user/dasboard/investments', [UserAccountController::class, 'investments'])->name('auth.investments');
    Route::get('user/dashboard/my-plans', [UserAccountController::class, 'myPlans'])->name('auth.my.plans');   
    Route::get('user/dashboard/trading-history', [UserAccountController::class, 'tradingHistory'])->name('auth.trading.history');
    Route::get('user/dashboard/demo-trading', [UserAccountController::class, 'demoTrading'])->name('demo.trading');     
    Route::get('user/dashboard/stock-plans', [UserAccountController::class, 'stockPlans'])->name('auth.stock.plans'); 
    Route::get('user/dashboard/crypto-plans', [UserAccountController::class, 'cryptoPlans'])->name('auth.crypto.plans'); 
    Route::get('user/dashboard/real-estate-plans', [UserAccountController::class, 'realEstatePlans'])->name('auth.real.estate.plans');  
    Route::get('user/dashboard/live-markets', [UserAccountController::class, 'liveMarkets'])->name('live.markets');
    Route::get('user/dashboard/fund-account', [UserDashboardController::class, 'deposits'])->name('auth.deposits');
    Route::get('user/dashboard/withdraw-funds', [UserAccountController::class, 'withdrawals'])->name('auth.withdrawals');
    Route::get('user/dashboard/transfer-funds', [UserAccountController::class, 'transferFunds'])->name('auth.transfer-funds');  
    Route::get('user/dashboard/apply-loan', [UserAccountController::class, 'applyLoan'])->name('auth.apply.loan');
    Route::get('user/dashboard/loan-history', [UserAccountController::class, 'loanHistory'])->name('auth.loan-history');
    Route::get('user/dashboard/connect-wallet', [UserAccountController::class, 'connectWallet'])->name('connect-wallet');    
    Route::get('user/dash', [UserDashboardController::class, 'dash'])->name('auth.dash');
    Route::post('/trading/create', [TradingController::class, 'createTrade'])->name('auth.trading.create');
    Route::post('/deposits/payments', [DepositController::class, 'showPaymentPage'])->name('deposits.payments');
    Route::post('/deposits/store', [DepositController::class, 'store'])->name('deposit.store');
    Route::get('/payment-confirmation/{id}', [DepositController::class, 'confirmation'])->name('payment-confirmation');
    Route::get('user/dashboard/account', [UserAccountController::class, 'index'])->name('account');
    Route::post('user/dashboard/account/update-user-metadata', [UserAccountController::class, 'updateUserMeta'])->name('update.user.metadata');
    Route::post('user/dashboard/account/update-user-info', [UserAccountController::class, 'updateUserInfo'])->name('update.user.info');
    Route::post('/withdrawal/verify-code', [WithdrawalController::class, 'verifyCode'])->name('withdraw.verify');
    Route::get('/withdrawal/amount', [WithdrawalController::class, 'amountPage'])->name('withdraw.amount');
    Route::post('/withdrawal/amount', [WithdrawalController::class, 'submitAmount'])->name('withdraw.amount.submit');
    Route::get('/withdrawal/confirm', [WithdrawalController::class, 'confirmPage'])->name('withdraw.confirm');
    Route::post('/withdrawal/process', [WithdrawalController::class, 'processWithdrawal'])->name('withdraw.process');
    Route::put('/update-password', [UserAccountController::class, 'updatePassword'])->name('update.pass');
    Route::post('user/dashboard/profileinfo', [UserAccountController::class, 'updateProfile'])->name('profile.update');
    Route::get('/withdrawal/fail', [WithdrawalController::class, 'failPage'])->name('withdraw.fail');
    Route::get('/withdrawal/success', [WithdrawalController::class, 'successPage'])->name('withdraw.success');
    Route::get('inbox', function () {
        return view('auth.v2.pages.dashboard.inbox');
    })->name('inbox');
    Route::get('transaction', function () {
        return view('auth.v2.pages.dashboard.transaction');
    })->name('transaction');
    Route::get('settings', function () {
        return view('auth.v2.pages.dashboard.settings');
    })->name('settings');
    Route::get('verify', function () {
        return view('auth.v2.pages.dashboard.verify');
    })->name('verify');
    Route::get('user/dashboard/collaterals/add', function () {
        return view('auth.v2.pages.dashboard.add-collateral');
    })->name('add.collateral');
    Route::post('collateral/create', [CollateralsController::class, 'storeCollateral'])->name('collateral.create');
    Route::get('user/dashboard/collaterals', [CollateralsController::class, 'viewCollaterals'])->name('collaterals');
    Route::post('user/dashboard/loans', [LoanController::class, 'create'])->name('loan.request');
    Route::get('user/dashboard/loans', [LoanController::class, 'index'])->name('loans');
    Route::get('/asset/info/{name}', [AssetController::class, 'fetchInfo'])
     ->name('asset.info');
    Route::get('user/dashboard/loan/apply', function () {
        return view('auth.v3.dashboard.apply-loan');
    })->name('loans.apply');
    Route::get('user/dashboard/wallets', [WalletsController::class, 'index'])->name('wallets');
    Route::get('user/dashboard/verfication', [AccountVerficiationController::class, 'index'])->name('verification');
    Route::post('user/dashboard/verfication', [AccountVerficiationController::class, 'uploadIDs'])->name('verificaiton.submit');
    Route::get('user/dashboard/transactions', [TransactionsController::class, 'index'])->name('transactions');
    Route::get('user/dashboard/settings', function () {
        return view('auth.v3.dashboard.settings');
    })->name('settings');
    Route::get('user/dashboard/referrals', function () {
        return view('auth.v3.dashboard.referrals');
    })->name('referrals');
    Route::get('user/dashboard/support', function () {
        return view('auth.v3.dashboard.support');
    })->name('support');
    //Route::get('user/dashboard/collaterals/', function () {return view('auth.v2.pages.dashboard.view-collaterals'); })->name('view-collateral');
    Route::get('user/dashboard/wallets/generate', function () {
        return view('auth.v3.dashboard.generate-wallet');
    })->name('wallet.generate');
    Route::get('wallet/view', function () {
        return view('auth.v2.pages.dashboard.wallets');
    })->name('wallet/view');
});

Route::middleware('guest')->group(function () {
    Route::get('login', [UserLoginController::class, 'login'])->name('login');
    Route::post('login', [UserLoginController::class, 'authenticate'])->name('login');
    Route::get('register', [UserRegistrationController::class, 'register'])->name('register');
    Route::get('authentication/sign-in', function () {
        return view('auth.v3.authentication.sign-in');
    })->name('sign-in');
    Route::get('authentication/sign-up', function () {
        return view('auth.v3.authentication.sign-in');
    })->name('sign-up');
    Route::post('register', [UserRegistrationController::class, 'create'])->name('register');
    Route::get('authentication/password/forgot', function () {
        return view('auth.v3.authentication.forgot-password');
    })->name('authentication.password.forgot');
    Route::get('authentication/sign-in', function () {
        return view('auth.v3.authentication.sign-in');
    })->name('sign-in');
    Route::get('authentication/sign-up', function () {
        return view('auth.v3.authentication.sign-up');
    })->name('sign-up');
    Route::get('/forgot-password', function () {
        return view('auth.v2.pages.forgot-password');
    })->name('password.request');

    Route::post('/forgot-password', function (Request $request) {
        $request->validate(['email' => 'required|email']);

        $status = Password::sendResetLink(
            $request->only('email')
        );

        return $status === Password::ResetLinkSent
            ? back()->with(['status' => __($status)])
            : back()->withErrors(['email' => __($status)]);
    })->name('password.email');
    Route::get('/reset-password/{token}', function (string $token) {
        return view('auth.v3.authentication.reset-password', ['token' => $token]);
    })->name('password.reset');
    Route::post('/reset-password', function (Request $request) {
        $request->validate([
            'token' => 'required',
            'email' => 'required|email',
            'password' => 'required|min:8|confirmed',
        ]);


        $status = Password::reset(
            $request->only('email', 'password', 'password_confirmation', 'token'),
            function (User $user, string $password) {
                $user->forceFill([
                    'password' => Hash::make($password)
                ])->setRememberToken(Str::random(60));

                $user->save();

                event(new PasswordReset($user));
            }
        );

        return $status === Password::PasswordReset
            ? redirect()->route('sign-in')->with('status', __($status))
            : back()->withErrors(['email' => [__($status)]]);
    })->name('password.update');
});
