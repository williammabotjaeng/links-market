<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite(['resources/css/app.css', 'resources/js/app.js']) 
    <link rel="shortcut icon" href="{{ asset('icon.png') }}" type="image/x-icon">
    <title>@yield('title', 'LinksMarket | Where Publishers Meet Buyers—Effortlessly')</title>
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
</head>
<body>
    @include('components.header') 

    <main>
        <!-- Welcome Section -->
        <div class="hero-section" style="background-image: url('{{ asset('img/welcome-bg.jpg') }}'); background-size: cover;">
            <div class="overlay" style="background-color: rgba(0, 140, 140, 0.5);">
                <div class="container has-text-centered">
                    <h1 class="title has-text-white">Welcome to LinksMarket!</h1>
                    <p class="subtitle has-text-white">Where Publishers Meet Buyers—Effortlessly.</p>
                    <p>Explore our features and services tailored for publishers and buyers.</p>
                    <br>
                    <a class="button is-large is-light border-transition" href="{{ route('register') }}">Let's Get Started</a>
                </div>
            </div>
        </div>

        <!-- Benefits Section -->
        <div class="hero-section" style="background-color: rgba(0, 140, 140, 0.7); height: 105vh">
            <div class="container has-text-centered">
                <h2 class="title">Benefits of Using LinksMarket</h2>
                <p>Discover how our platform can enhance your publishing and buying experience.</p>
            </div>
        </div>

        <!-- How to Use Section -->
        <div class="hero-section" style="background-color: rgba(0, 140, 140, 0.5);  height: 105vh">
            <div class="container has-text-centered">
                <h2 class="title">How to Use LinksMarket</h2>
                <p>Follow our simple steps to get started and maximize your benefits.</p>
            </div>
        </div>

        <!-- Why Choose Us Section -->
        <div class="hero-section" style="background-color: rgba(0, 140, 140, 0.3);  height: 105vh">
            <div class="container has-text-centered">
                <h2 class="title">Why Choose Us</h2>
                <p>Learn why LinksMarket is the best choice for publishers and buyers alike.</p>
            </div>
        </div>
    </main>

    @include('components.footer') 
</body>
</html>