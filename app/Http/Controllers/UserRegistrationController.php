<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Storage;
use Illuminate\View\View;
use Illuminate\Http\Request;
use Illuminate\Auth\Events\Registered;
use App\Mail\VerifyCodeMail;
use Illuminate\Support\Facades\Mail;

class UserRegistrationController extends Controller
{
    public function register(){
        return view('auth.register');
    }

    public function create(Request $request){
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'phone' => 'required|string|max:30',
            'country' => 'required|string|max:100',
            
            'password' => [
                'required',
                'string',
                'min:8',
                'regex:/[a-z]/',      // must contain at least one lowercase letter
                'regex:/[A-Z]/',      // must contain at least one uppercase letter
                'regex:/[0-9]/',      // must contain at least one digit
                'regex:/[@$!%*?&]/',  // must contain a special character
            ],
                
        ]);

       
        $code = random_int(100000, 999999);
        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'country' => $request->country,
            'code' => $code,
            'expires_at' => now()->addMinutes(10),
            'password' => Hash::make($request->password),
        ]);
        Mail::to($user->email)->send(new VerifyCodeMail($code));
        Auth::login($user);
        

    return redirect()->route('verification.enter', ['email' => $user->email])
        ->with('status', 'We’ve sent a 6-digit code to your email. Please enter it below to verify.');
    
    }
}

