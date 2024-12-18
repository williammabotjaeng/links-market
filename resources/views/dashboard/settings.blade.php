
@extends('layouts.dashboard')

@section('title', 'Settings')

@section('content')
<div class="container is-responsive">
    <h1 class="title m-4">Settings</h1>

    <div class="tabs" style="overflow: hidden">
        <ul class="is-boxed">
            <li class="is-active"><button type="button" href="#account-settings" data-tab="account-settings" onClick="activateTab('account-settings')">Account Settings</button></li>
            <li><button type="button" href="#contact-info" data-tab="contact-info" onClick="activateTab('contact-info')">Contact Info</button></li>
            <li><button type="button" href="#notification-settings" data-tab="notification-settings" onClick="activateTab('notification-settings')">Notification Settings</button></li>
            <li><button type="button" href="#billing-details" data-tab="billing-details" onClick="activateTab('billing-details')">Billing Details</button></li>
            <li><button type="button" href="#tax-form" data-tab="tax-form" onClick="activateTab('tax-form')">Tax Form</button></li>
            <li><button type="button" href="#profile-activity" data-tab="profile-activity" onClick="activateTab('profile-activity')">Profile Activity</button></li>
        </ul>
    </div>

    <div class="tab-content">
        <!-- Account Settings -->
        <div id="account-settings" class="tab is-active">
            <h2 class="subtitle">Account Settings</h2>
            <form method="POST" action="{{ route('settings.updateAccount') }}">
                @csrf
                <div class="field">
                    <label class="label">Username</label>
                    <div class="control">
                        <input class="input" type="text" placeholder="Enter your username" required>
                    </div>
                </div>
                <div class="field">
                    <label class="label">Email</label>
                    <div class="control">
                        <input class="input" type="email" placeholder="Enter your email" required>
                    </div>
                </div>
                <div class="field">
                    <label class="label">Password</label>
                    <div class="control">
                        <input class="input" type="password" placeholder="Enter your password" required>
                    </div>
                </div>
                <button type="submit" class="button is-primary">Save Changes</button>
            </form>
        </div>

        <!-- Contact Info -->
        <div id="contact-info" class="tab">
            <h2 class="subtitle">Contact Info</h2>
            <form method="POST" action="{{ route('settings.updateContact') }}">
                @csrf
                <div class="field">
                    <label class="label">Name</label>
                    <div class="control">
                        <input class="input" type="text" placeholder="Enter your name" required>
                    </div>
                </div>
                <div class="field">
                    <label class="label">Skype ID</label>
                    <div class="control">
                        <input class="input" type="text" placeholder="Enter your Skype name">
                    </div>
                </div>
                <div class="field">
                    <label class="label">Phone Number</label>
                    <div class="control">
                        <input class="input" type="tel" placeholder="Enter your phone number">
                    </div>
                </div>
                <button type="submit" class="button is-primary">Save Changes</button>
            </form>
        </div>

        <!-- Notification Settings -->
        <div id="notification-settings" class="tab">
            <h2 class="subtitle">Notification Settings</h2>
            <form method="POST" action="{{ route('settings.updateNotifications') }}">
                @csrf
                <div class="field">
                    <label class="label">I would like to receive the following letters:</label>
                    <div class="control">
                        <label class="checkbox">
                            <input type="checkbox" checked>
                            Strictly necessary letters
                        </label>
                        <p>Letters related to the email change, password change, email verification. You cannot unsubscribe from these letters.</p>
                        <label class="checkbox">
                            <input type="checkbox" checked>
                            Essential letters
                        </label>
                        <p>Letters about everything related to your tasks and orders. We highly recommend you to stay subscribed to these letters.</p>
                        <label class="checkbox">
                            <input type="checkbox">
                            Helpful letters
                        </label>
                        <p>While not so important, these letters may still be of service to you.</p>
                        <label class="checkbox">
                            <input type="checkbox">
                            Weekly updates
                        </label>
                        <p>Letters about new sites added to the inventory, sent weekly.</p>
                        <label class="checkbox">
                            <input type="checkbox">
                            Receive text messages on my phone
                        </label>
                    </div>
                </div>
                <button type="submit" class="button is-primary">Save Changes</button>
            </form>
        </div>

        <!-- Billing Details -->
        <div id="billing-details" class="tab">
            <div class="column is-grouped-centered">
            <h2 class="subtitle">Billing Details</h2>
            <form method="POST" action="{{ route('settings.updateBilling') }}">
                @csrf
                <div class="field">
                    <label class="label">Company Name *</label>
                    <div class="control">
                        <input class="input" type="text" placeholder="Enter your company name" required>
                    </div>
                </div>
                <div class="field">
                    <label class="label">Street Address *</label>
                    <div class="control">
                        <input class="input" type="text" placeholder="Enter your street address" required>
                    </div>
                </div>
                <div class="columns">
                    <div class="column field">
                        <label class="label">City / Town / Village *</label>
                        <div class="control">
                            <input class="input" type="text" placeholder="Enter your city" required>
                        </div>
                    </div>
                    <div class="column field">
                        <label class="label">State / Province / Region *</label>
                        <div class="control">
                            <input class="input" type="text" placeholder="Enter your state" required>
                        </div>
                    </div>
                </div>
                <div class="columns">
                    <div class="column field">
                        <label class="label">Postal Code *</label>
                        <div class="control">
                            <input class="input" type="text" placeholder="Enter your postal code" required>
                        </div>
                    </div>
                    <div class="column field">
                        <label class="label">Country *</label>
                        <div class="control is-align-content-center" >
                            <select class="select is-rounded" style="padding: 8px;" required>
                                <option>Select country</option>
                                <option>USA</option>
                                <option>Canada</option>
                                <option>UK</option>
                                <!-- Add more countries as needed -->
                            </select>
                        </div>
                    </div>
                </div>
                <button type="submit" class="button is-primary">Save Changes</button>
                </div>
            </form>
        </div>

        <!-- Tax Form -->
        <div id="tax-form" class="tab">
            <h2 class="subtitle">Tax Form</h2>
            <form method="POST" action="{{ route('settings.updateTaxForm') }}">
                @csrf
                <div class="field">
                    <label class="label">Legal Name of Taxpayer *</label>
                    <div class="control">
                        <input class="input" type="text" placeholder="Enter legal name" required>
                    </div>
                </div>
                <div class="field">
                    <label class="label">Tax Identification Number *</label>
                    <div class="control">
                        <input class="input" type="text" placeholder="Enter TIN" required>
                    </div>
                </div>
                <div class="field">
                    <label class="label">I certify that I have the capacity to sign for the person identified on line 1 of this form.</label>
                    <div class="control">
                        <input class="input" type="text" placeholder="Signature (type your full name)*" required>
                    </div>
                </div>
                <button type="submit" class="button is-primary">Submit Tax Form</button>
            </form>
        </div>

        <!-- Profile Activity -->
        <div id="profile-activity" class="tab">
            <h2 class="subtitle">Profile Activity</h2>
            <table class="table is-striped container mr-4">
                <thead>
                    <tr>
                        <th>Date</th>
                        <th>IP Address</th>
                        <th>Country</th>
                        <th>Workflow</th>
                    </tr>
                </thead>
                <tbody>
                    <!-- Dynamic data will be populated here -->
                </tbody>
            </table>
        </div>
    </div>
    <p id="settingsmsg">This is the Settings page. You can change your information and preferences here.</p>
</div>

@endsection 