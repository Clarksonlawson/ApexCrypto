<?php

use App\Http\Controllers\ForgotPasswordController;
use App\Http\Controllers\LoanController;
use App\Models\User;
use Illuminate\Auth\Events\PasswordReset;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\CollateralsController;
use App\Http\Controllers\UserLoginController;
use App\Http\Controllers\UserRegistrationController;
use Illuminate\Routing\Route as RoutingRoute;
use Illuminate\Support\Facades\Route;
use Illuminate\Foundation\Auth\EmailVerificationRequest;
use Illuminate\Http\Request;
use Illuminate\Auth\Events\Verified;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Password;
use App\Http\Controllers\UserVerificationController;
use App\Http\Controllers\UserDashboardController;

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
    Route::get('dashboard', function () {
        return view('auth.v2.pages.dashboard.index');
    })->name('auth.dashboard');
    Route::get('account', function () {
        return view('auth.v2.pages.dashboard.account');
    })->name('account');
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
    Route::get('user/dashboard/loan/apply', function () {
        return view('auth.v3.dashboard.apply-loan');
    })->name('loans.apply');
    Route::get('user/dashboard/wallets', function () {
        return view('auth.v3.dashboard.wallets');
    })->name('wallets');
    Route::get('user/dashboard/verfication', function () {
        return view('auth.v3.dashboard.verification');
    })->name('verification');
    Route::get('user/dashboard/transactions', function () {
        return view('auth.v3.dashboard.transactions');
    })->name('transactions');
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
        return view('auth.v2.pages.reset-password', ['token' => $token]);
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
