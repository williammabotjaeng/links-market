<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Account;
use App\Models\Settings;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{

    public function showLoginForm(Request $request)
    {
        return view('auth.login');
    }

    public function showRegistrationForm(Request $request)
    {
        return view('auth.register');
    }

    public function register(Request $request)
    {
       
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:8|confirmed',
            'roles' => 'required|string', 
            'roles.*' => 'in:brand,creator,both', 
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput(); 
        }

        if (User::where('email', $request->email)->exists()) {
            return redirect()->back()->with('error', 'Email already exists. Please use a different email.')->withInput(); // Flash message for existing email
        }

        $current_role = ($request->roles == 'both') ? "brand" : $request->roles;


        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'roles' => $request->roles,
            'current_role' => $current_role,
        ]);

        
        Account::create([
            'user_id' => $user->id,
            'balance' => 0,
            'bonus' => 0,
            'reserved' => 0,
            'escrow' => 0, 
            'billing_address' => null, 
            'payment_options' => [], 
            'withdrawable_balance' => 0,
        ]);

        Settings::create([
            'user_id' => $user->id,
            'contact_info' => json_encode([]), 
            'notification_settings' => json_encode([]), 
            'billing_details' => json_encode([]), 
            'tax_form' => null, 
            'profile_activity' => json_encode([]), 
        ]);

        return redirect()->route('login')->with('success', 'Registration successful! Please log in.');
    }

    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required|min:6',
        ]);

        
        $user = User::where('email', $request->input('email'))->first();

        if (!$user) {
            return redirect()->route('register')->withErrors([
                'email' => 'You are not registered. Please register to create an account.',
            ]);
        }

        
        if (Hash::check($request->input('password'), $user->password)) {
            Auth::login($user);
            $request->session()->regenerate();
            return redirect()->intended('dashboard')->with('success', 'Login successful!');
        }

       
        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ]);
    }

}
