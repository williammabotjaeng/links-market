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
        <div class="hero-section" style="background: linear-gradient(to right, #008c8c, #005757); height: 105vh;">
            <div class="container">
                <h2 class="title has-text-white" style="margin-bottom: 10px;">Benefits of Using LinksMarket</h2>
                <p class="subtitle has-text-white" style="margin-bottom: 30px;">Discover how our platform can enhance your publishing and buying experience.</p>
                
                <div class="columns is-centered">
                    <div class="column is-6">
                        <div class="box has-background-light" style="display: flex; flex-direction: column; justify-content: flex-start;">
                            <h3 class="subtitle">Bulk Uploading</h3>
                            <p>Easily update multiple websites at once, saving you lots of time and effort.</p>
                        </div>
                    </div>
                    <div class="column is-6">
                        <div class="box has-background-light" style="display: flex; flex-direction: column; justify-content: flex-start;">
                            <h3 class="subtitle">Flexible Payment Options</h3>
                            <p>Quickly switch payment accounts to ensure uninterrupted service.</p>
                        </div>
                    </div>
                </div>
                
                <div class="columns is-centered">
                    <div class="column is-6">
                        <div class="box has-background-light" style="display: flex; flex-direction: column; justify-content: flex-start;">
                            <h3 class="subtitle">Manual SEO Metrics Entry</h3>
                            <p>Maintain control over your SEO data until automated solutions are available.</p>
                        </div>
                    </div>
                    <div class="column is-6">
                        <div class="box has-background-light" style="display: flex; flex-direction: column; justify-content: flex-start;">
                            <h3 class="subtitle">Automated Notifications</h3>
                            <p>Stay informed with automatic email notifications for task assignments and completions.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
           

        <!-- How to Use Section -->
        <div class="hero-section" style="background:  linear-gradient(to right, #00b3b3,rgb(47, 161, 161), #008c8c); height: 105vh; padding: 50px 0;">
            <div class="container has-text-centered">
            <h2 class="title">How to Use LinksMarket</h2>
            <p>Follow our simple steps to get started and maximize your benefits.</p>
            <br>
            <br>
            <div class="columns is-centered">
                <div class="column is-3">
                    <div class="circle-number">1</div>
                    <h3 class="subtitle">Order a Task</h3>
                    <p>When a buyer orders a new task, they initiate the process.</p>
                </div>
            <div class="column is-3">
                <div class="circle-number">2</div>
                <h3 class="subtitle">Funds Held</h3>
                <p>The funds are held in escrow until the task is completed and accepted.</p>
            </div>
            <div class="column is-3">
                <div class="circle-number">3</div>
                <h3 class="subtitle">Task Completion</h3>
                <p>The publisher completes the task as per the buyer's requirements.</p>
            </div>
            <div class="column is-3">
                <div class="circle-number">4</div>
                <h3 class="subtitle">Release Funds</h3>
                <p>Once the buyer accepts the task, the funds are released to the publisher.</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Why Choose Us Section -->
        <div class="hero-section" style="background: linear-gradient(45deg,rgb(170, 247, 247), #008c8c); height: 105vh; padding: 50px 0;">
            <div class="container has-text-centered">
                <h2 class="title">Why Choose Us</h2>
                <p>Discover the unique offerings that make LinksMarket the best choice for publishers and buyers alike.</p>
                <br />
                <div class="columns is-multiline is-justify-content-space-between">
                    <div class="column is-3">
                        <div class="card has-shadow">
                            <div class="card-content">
                                <h3 class="subtitle">Performance Analytics</h3>
                                <p>Detailed performance metrics, including impressions, views, orders, and sales percentages. This transparency allows publishers to gauge the effectiveness of their listings and optimize their strategies accordingly.</p>
                            </div>
                        </div>
                    </div>
                    <div class="column is-3">
                        <div class="card has-shadow">
                            <div class="card-content">
                                <h3 class="subtitle">Backlinks</h3>
                                <p>Our backlinks process is straightforward and efficient. Publishers can enhance their SEO by providing their existing page URL and the promoted URL, making it a quick and easy option for boosting their online presence.</p>
                            </div>
                        </div>
                    </div>
                    <div class="column is-3">
                        <div class="card has-shadow">
                            <div class="card-content">
                                <h3 class="subtitle">Ranking System</h3>
                                <p>We are considering implementing a ranking system that will provide indicators (+, -) to show whether a website's rank is improving or declining. This feature will help publishers understand their performance in the marketplace.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>

    @include('components.footer') 
</body>
</html>