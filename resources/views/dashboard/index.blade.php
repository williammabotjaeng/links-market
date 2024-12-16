@extends('layouts.app')

@section('title', 'Dashboard')

@section('content')
<div class="container is-fluid">
    <div class="columns">
        <!-- Vertical Menu on the Left -->
        <div class="column is-3">
            <aside class="menu">
                <p class="menu-label">
                    Dashboard
                </p>
                <ul class="menu-list">
                    <li><a href="{{ route('dashboard') }}" class="is-active">Home</a></li>
                    <li><a href="{{ route('settings') }}">Settings</a></li>
                    <li><a href="{{ route('reports') }}">Reports</a></li>
                    <li><a href="{{ route('analytics') }}">Analytics</a></li>
                    <li><a href="{{ route('support') }}">Support</a></li>
                </ul>
            </aside>
        </div>

        <!-- Main Content Area -->
        <div class="column is-9">
            <h1 class="title">Welcome to Your Dashboard</h1>
            <p>
                LinksMarket is where <strong>Publishers Meet Buyers—Effortlessly</strong>. Our platform is designed to connect publishers with advertisers looking for effective ways to promote their products and services.
            </p>
            <p>
                With a focus on transparency and performance, LinksMarket empowers publishers by providing them with comprehensive analytics to track their website performance, including impressions, views, orders, and sales percentages.
            </p>
            <p>
                Our mission is to create a seamless experience for both publishers and buyers. We offer various advertising options, including guest posts and link insertions, allowing for flexible marketing solutions tailored to individual needs.
            </p>
            <br>
            <h2 class="subtitle">Why Choose Us?</h2>
            <ul>
                <li><strong>Performance Analytics</strong>: Get real-time insights into your website's performance.</li>
                <li><strong>Variety of Advertising Options</strong>: Choose from guest posting and link insertions to meet your marketing goals.</li>
                <li><strong>User-Friendly Interface</strong>: Easily navigate our platform to find the best opportunities.</li>
                <li><strong>Dedicated Support</strong>: Our team is here to assist you at every step of your advertising journey.</li>
            </ul>
            <p>
                Join our community today and experience the benefits of working with LinksMarket. Together, we can achieve great success!
            </p>
        </div>
    </div>
</div>
@endsection