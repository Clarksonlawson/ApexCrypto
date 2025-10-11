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

class UserRegistrationController extends Controller
{
    public function register(){
        return view('auth.register');
    }

    public function create(Request $request){
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'phone' => 'required|string|max:15',
            'password' => 'required|string|min:8|confirmed',
            'password_confirmation' => 'required|string|min:8',
            'photo' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048'
        ]);

        $filepath= null;
        if ($request->hasFile('photo')) {
            $filepath = $request->file('photo')->store('avatars', 'public');
        }

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'photo' => $filepath,
            'password' => Hash::make($request->password),
        ]);

        Auth::login($user);

        return redirect()->route('auth.dashboard');
    }
}
