<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function register(Request $request)
    {
        // Validate the request data
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:8|confirmed',
            'roles' => 'required|string', 
            'roles.*' => 'in:advertiser,publisher,both', 
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput(); 
        }

        // Check if the email already exists
        if (User::where('email', $request->email)->exists()) {
            return redirect()->back()->with('error', 'Email already exists. Please use a different email.')->withInput(); // Flash message for existing email
        }

        $current_role = "";

        if ($request->roles == 'both') {
            $current_role = "advertiser";
        } else {
            $current_role = $request->roles;
        }

        // Create the user
        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'roles' => $request->roles,
            'current_role' => $current_role,
        ]);


        return redirect()->route('login')->with('success', 'Registration successful! Please log in.');
    }

    public function login(Request $request)
    {
        // Validate the request
        $request->validate([
            'email' => 'required|email',
            'password' => 'required|min:6',
        ]);

        // Attempt to find the user by email
        $user = User::where('email', $request->input('email'))->first();

        // Check if the user exists
        if (!$user) {
            return redirect()->route('register')->withErrors([
                'email' => 'You are not registered. Please register to create an account.',
            ]);
        }

        // Check if the password is correct
        if (Hash::check($request->input('password'), $user->password)) {
            Auth::login($user);
            $request->session()->regenerate();
            return redirect()->intended('dashboard')->with('success', 'Login successful!');
        }

        // If credentials do not match
        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ]);
    }

}
