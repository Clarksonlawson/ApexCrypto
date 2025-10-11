<?php

use App\Http\Controllers\ForgotPasswordController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\UserLoginController;
use App\Http\Controllers\UserRegistrationController;
use Illuminate\Routing\Route as RoutingRoute;
use Illuminate\Support\Facades\Route;

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

Route::middleware('auth')->group(function () {
    Route::get('dashboard', function () {return view('auth.dashboard');})->name('auth.dashboard');
    Route::post('logout', [UserLoginController::class, 'logout'])->name('logout');
});

Route::middleware('guest')->group(function () {
    Route::get('login', [UserLoginController::class, 'login'])->name('login');
    Route::post('login', [UserLoginController::class, 'authenticate'])->name('login');
    Route::get('register', [UserRegistrationController::class, 'register'])->name('register');
    Route::post('register', [UserRegistrationController::class, 'create'])->name('register');
   Route::get('password/reset', [ForgotPasswordController::class, 'showLinkRequestForm'])->name('password.reset');
});
