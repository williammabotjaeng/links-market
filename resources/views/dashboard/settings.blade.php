@extends('layouts.dashboard')

@section('title', 'Settings')

@section('content')
<div class="container is-fluid">
    <h1 class="title m-4">Settings</h1>

    <div class="tabs is-boxed">
        <ul>
            <li class="is-active"><a href="#account-settings" data-tab="account-settings">Account Settings</a></li>
            <li><a href="#contact-info" data-tab="contact-info">Contact Info</a></li>
            <li><a href="#notification-settings" data-tab="notification-settings">Notification Settings</a></li>
            <li><a href="#billing-details" data-tab="billing-details">Billing Details</a></li>
            <li><a href="#tax-form" data-tab="tax-form">Tax Form</a></li>
            <li><a href="#profile-activity" data-tab="profile-activity">Profile Activity</a></li>
        </ul>
    </div>

    <div class="tab-content">
        <div id="account-settings" class="tab is-active">
            <h2 class="subtitle">Account Settings</h2>
          
            <form method="POST" action="{{ route('settings.updateAccount') }}">
                @csrf
          
                <button type="submit" class="button is-primary">Save Changes</button>
            </form>
        </div>

        <div id="contact-info" class="tab">
            <h2 class="subtitle">Contact Info</h2>
            <form method="POST" action="{{ route('settings.updateContact') }}">
                @csrf
                <button type="submit" class="button is-primary">Save Changes</button>
            </form>
        </div>

        <div id="notification-settings" class="tab">
            <h2 class="subtitle">Notification Settings</h2>
            <form method="POST" action="{{ route('settings.updateNotifications') }}">
                @csrf
                <button type="submit" class="button is-primary">Save Changes</button>
            </form>
        </div>

        <div id="billing-details" class="tab">
            <h2 class="subtitle">Billing Details</h2>
            <form method="POST" action="{{ route('settings.updateBilling') }}">
                @csrf
                <button type="submit" class="button is-primary">Save Changes</button>
            </form>
        </div>

        <div id="tax-form" class="tab">
            <h2 class="subtitle">Tax Form</h2>
            <form method="POST" action="{{ route('settings.updateTaxForm') }}">
                @csrf
                <button type="submit" class="button is-primary">Save Changes</button>
            </form>
        </div>

        <div id="profile-activity" class="tab">
            <h2 class="subtitle">Profile Activity</h2>

            <p>Your recent activity will be displayed here.</p>
        </div>
    </div>
</div>

@section('scripts')
<script>
    document.addEventListener('DOMContentLoaded', () => {
        const tabs = document.querySelectorAll('.tabs li a');
        const tabContents = document.querySelectorAll('.tab-content .tab');

        tabs.forEach(tab => {
            tab.addEventListener('click', (event) => {
                event.preventDefault();
                const targetTab = event.target.getAttribute('data-tab');

                tabs.forEach(t => t.parentElement.classList.remove('is-active'));
                tabContents.forEach(content => content.classList.remove('is-active'));

                event.target.parentElement.classList.add('is-active');
                document.getElementById(targetTab).classList.add('is-active');
            });
        });
    });
</script>
@endsection
@endsection