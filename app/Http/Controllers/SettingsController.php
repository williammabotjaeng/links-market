<?php

namespace App\Http\Controllers;

use App\Models\Settings;
use App\Models\Account;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SettingsController extends Controller
{
    // Show the settings view
    public function index()
    {
        $user = Auth::user();
        $settings = Settings::where('user_id', $user->id)->first();
        $account = Account::where('user_id', Auth::id())->first();
        return view('dashboard.settings', compact('user', 'settings', 'account'));
    }

    // Update account settings
    public function updateAccount(Request $request)
    {

        $request->validate([
            'username' => 'required|string|max:255',
            'email' => 'required|email|max:255|unique:users,email,' . Auth::id(), 
            'password' => 'nullable|string|min:8|confirmed', 
        ]);

        // Retrieve the current user's settings or create a new one if it doesn't exist
        $settings = Settings::updateOrCreate(
            ['user_id' => Auth::id()],
            [
                
                'username' => $request->input('username'),
                'email' => $request->input('email'),
                'password' => $request->filled('password') ? bcrypt($request->input('password')) : null,
            ]
        );

        return redirect()->back()->with('success', 'Account settings updated successfully.');
    }

    // Update contact info
    public function updateContact(Request $request)
    {
        $request->validate([
            'contact_info.phone' => 'required|string|max:15',
            'contact_info.address' => 'required|string|max:255',
        ]);

        $settings = Settings::updateOrCreate(
            ['user_id' => Auth::id()],
            [
                'contact_info' => $request->input('contact_info'),
            ]
        );

        return redirect()->back()->with('success', 'Contact info updated successfully.');
    }

    // Update notification settings
    public function updateNotifications(Request $request)
    {
        $request->validate([
            'notification_settings.email' => 'required|boolean',
            'notification_settings.sms' => 'required|boolean',
        ]);

        $settings = Settings::updateOrCreate(
            ['user_id' => Auth::id()],
            [
                'notification_settings' => $request->input('notification_settings'),
            ]
        );

        return redirect()->back()->with('success', 'Notification settings updated successfully.');
    }

    // Update billing details
    public function updateBilling(Request $request)
    {
        $request->validate([
            'billing_details.card_number' => 'required|string|max:19',
            'billing_details.expiry' => 'required|string|max:7',
        ]);

        $settings = Settings::updateOrCreate(
            ['user_id' => Auth::id()],
            [
                'billing_details' => $request->input('billing_details'),
            ]
        );

        return redirect()->back()->with('success', 'Billing details updated successfully.');
    }

    // Update tax form
    public function updateTaxForm(Request $request)
    {
        $request->validate([
            'tax_form' => 'required|string|max:255',
        ]);

        $settings = Settings::updateOrCreate(
            ['user_id' => Auth::id()],
            [
                'tax_form' => $request->input('tax_form'),
            ]
        );

        return redirect()->back()->with('success', 'Tax form updated successfully.');
    }

    public function updateProfileActivity(Request $request)
    {
        return redirect()->back()->with('success', 'Profile activity updated successfully.');
    }
}