<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Mail\VerifyCodeMail;
use Illuminate\Support\Facades\Mail;
class UserVerificationController extends Controller
{
    public function showVerifyForm(Request $request)
    {
        return view('auth.v3.authentication.verify-code', ['email' => $request->email]);
    }

    public function verifyCode(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'code' => 'required|digits:6',
        ]);

        $user = User::where('email', $request->email)->first();

        if (!$user || $user->code !== $request->code || $user->expires_at->isPast()) {
            return back()->withErrors(['code' => 'Invalid or expired code.']);
        }

        $user->update([
            'email_verified_at' => now(),
            'code' => null,
            'expires_at' => null,
        ]);

        return redirect()->route('auth.dashboard')->with('status', 'Your email has been verified!');
    }

    public function resendCode(Request $request)
    {
        $request->validate(['email' => 'required|email']);

        $user = User::where('email', $request->email)->first();

        if (!$user) {
            return back()->withErrors(['email' => 'User not found.']);
        }

        // Generate a new 6-digit code
        $newCode = random_int(100000, 999999);

        $user->update([
            'code' => $newCode,
            'expires_at' => now()->addMinutes(10),
        ]);

        // Send new code by mail
        Mail::to($user->email)->send(new VerifyCodeMail($newCode));

        return back()->with('status', 'A new verification code has been sent to your email.');
    }
}
