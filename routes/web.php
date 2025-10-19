<?php

use App\Http\Controllers\ForgotPasswordController;
use App\Models\User;
use Illuminate\Auth\Events\PasswordReset;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\UserLoginController;
use App\Http\Controllers\UserRegistrationController;
use Illuminate\Routing\Route as RoutingRoute;
use Illuminate\Support\Facades\Route;
use Illuminate\Foundation\Auth\EmailVerificationRequest;
use Illuminate\Http\Request;
use Illuminate\Auth\Events\Verified;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Password;

Route::get('/', function () {return view('welcome');})->name('welcome');
Route::get('exchange', function () { return view('pages.exchange'); })->name('exchange');
Route::get('our-mission', function () { return view('pages.our-mission'); })->name('our-mission');
Route::get('disclosure', function () { return view('pages.disclosure'); })->name('disclosure');
Route::get('contact', function () { return view('pages.contact'); })->name('contact');
Route::get('faq', function () { return view('pages.faq'); })->name('faq');
Route::get('compliance', function () { return view('pages.compliance'); })->name('compliance');
Route::get('complaints', function () { return view('pages.complaints'); })->name('complaints');
Route::get('security-system', function () { return view('pages.security-system'); })->name('security-system');
Route::get('transact', function () { return view('pages.transact'); })->name('transact');
Route::get('earn', function () { return view('pages.earn'); })->name('earn');
Route::get('loan', function () { return view('pages.loan'); })->name('loan');
Route::get('blogs',[BlogController::class, 'index'])->name('blog.index');
Route::get('/', [BlogController::class, 'home'])->name('blog.home');
Route::get('/blog/{slug}', [BlogController::class, 'show'])->name('blog.show');
Route::get('/email/verify/{id}/{hash}', function (EmailVerificationRequest $request) {

    if($request->user()->hasVerifiedEmail()){
        return redirect()->route('verification.already');
        
    };
    if ($request->user()->markEmailAsVerified()) {
        event(new Verified($request->user()));
    }

     return redirect()->route('verification.success')->with('status', 'success');
})->middleware(['auth', 'signed'])->name('verification.verify');

Route::post('/email/verification-notification', function (Request $request) {$request->user()->sendEmailVerificationNotification();return back()->with('message', 'Verification link sent!');})->middleware(['auth', 'throttle:6,1'])->name('verification.send');
Route::get('sign-in', function () { return view('auth.v2.pages.sign-in'); })->name('sign-in');
Route::get('sign-up', function () { return view('auth.v2.pages.sign-up'); })->name('sign-up');
Route::middleware('auth')->group(function () {

    Route::get('/email/verify', function (Request $request) {

       if($request->user()->hasVerifiedEmail()){
        return redirect()->route('verification.already');
        
    };
        return view('auth.v2.pages.verify-email');
    })->name('verification.notice');

    Route::get('/email/verify/success', function () {
        return view('auth.v2.pages.verify-success');
    })->name('verification.success');

    Route::get('/email/verify/already', function () {
        return view('auth.v2.pages.verify-already');
    })->name('verification.already');
    Route::post('logout', [UserLoginController::class, 'logout'])->name('logout');
});
Route::middleware(['auth', 'verified'])->group( function () {
    
    Route::get('dashboard', function (){ return view('auth.v2.pages.dashboard.index');})->name('auth.dashboard');
    Route::get('account', function () {return view('auth.v2.pages.dashboard.account'); })->name('account');
    Route::get('inbox', function () {return view('auth.v2.pages.dashboard.inbox'); })->name('inbox');
    Route::get('transaction', function () {return view('auth.v2.pages.dashboard.transaction'); })->name('transaction');
    Route::get('settings', function () {return view('auth.v2.pages.dashboard.settings'); })->name('settings');
    Route::get('crypto', function () {return view('auth.v2.pages.dashboard.account'); })->name('crypto');
});

Route::middleware('guest')->group(function () {
    Route::get('login', [UserLoginController::class, 'login'])->name('login');
    Route::post('login', [UserLoginController::class, 'authenticate'])->name('login');
    Route::get('register', [UserRegistrationController::class, 'register'])->name('register');
    Route::get('sign-in', function () { return view('auth.v2.pages.sign-in'); })->name('sign-in');
    Route::get('sign-up', function () { return view('auth.v2.pages.sign-up'); })->name('sign-up');
    Route::post('register', [UserRegistrationController::class, 'create'])->name('register');
    //Route::get('password/reset', [ForgotPasswordController::class, 'showLinkRequestForm'])->name('password.reset');
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
