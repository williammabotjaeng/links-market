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

     /**
     * Show the form for step one of editing a website.
     */
    public function editStepOne($id)
    {
        $website = Website::findOrFail($id);
        return view('websites.edit_step_one', compact('website'));
    }

    /**
     * Handle the first step form submission for editing.
     */
    public function stepOneEdit(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'url' => 'required|url',
            'description' => 'required|string',
        ]);

        $website = Website::findOrFail($id);
        $websiteData = $request->only(['name', 'url', 'description']);
        return view('websites.edit_step_two', compact('website', 'websiteData'));
    }  

    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'url' => 'required|url',
            'description' => 'required|string',
            'category' => 'required|string|max:255',
            'traffic' => 'required|integer',
            'ad_space_available' => 'required|integer',
        ]);

        $website = Website::findOrFail($id);

        if ($website->user_id !== Auth::id()) {
            return redirect()->route('websites.index')->with('error', 'Unauthorized action.');
        }

        $website->name = $request->name;
        $website->url = $request->url;
        $website->description = $request->description;
        $website->category = $request->category;
        $website->traffic = $request->traffic;
        $website->ad_space_available = $request->ad_space_available;

        $website->save();

        return redirect()->route('websites.index')->with('success', 'Website updated successfully!');
    }

    public function destroy($id)
    {
        $website = Website::findOrFail($id);

        if ($website->user_id !== Auth::id()) {
            return redirect()->route('websites.index')->with('error', 'Unauthorized action.');
        }

        $website->delete();

        return redirect()->route('websites.index')->with('success', 'Website deleted successfully!');
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
