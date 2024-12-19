<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@1.0.2/css/bulma.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins">
    <link rel="shortcut icon" href="{{ asset('Icon.png') }}" type="image/x-icon">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.1/css/all.min.css" rel="stylesheet">
    <title>@yield('title', 'Party16Bars | You Party, Your Socials Work')</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <style>
        .full-viewport {
            height: 100vh; 
            width: 100vw;  
            overflow: hidden; 
        }

        .navbar a:hover {
            background-color: rgba(0, 140, 140, 0.1) !important; 
        }

        .button:hover {
            background-color: rgba(0, 140, 140, 0.1) !important;
            color: white !important;
            border-color: white !important;
        }
    </style>
</head>
<body>
    @include('components.header') 

    <main>
       <!-- Welcome Section -->
        <div class="hero-section is-vcentered full-viewport" style="background-image: url('https://i.giphy.com/media/v1.Y2lkPTc5MGI3NjExMWlqc3UydWc2Z21wYXB1ZWpwYWV6b3JzZm5veHVhOWJnZHcwbXJ2byZlcD12MV9pbnRlcm5hbF9naWZfYnlfaWQmY3Q9Zw/l4FGoHktFE5InlFEA/giphy.gif'); background-size: cover;">
            <div class="overlay" style="background-color: rgba(0, 140, 140, 0.5);">
                <div class="container has-text-centered">
                    <h1 class="title has-text-white">Welcome to Party16Bars!</h1>
                    <br>
                    <p class="subtitle has-text-white">You Party, Your Socials Work.</p>
                    <br>
                    <p>Turn your socials into a money machine. Let brands and sponsors come to YOU.</p>
                    <br>
                    <a class="button is-large is-light border-transition" style="color: #008c8c" href="{{ route('register') }}">Start the Party</a>
                </div>
            </div>
        </div>
        
        <!-- Benefits Section -->
        <div class="hero-section is-vcentered full-viewport" style="background: linear-gradient(to right, #008c8c, #005757); height: 105vh;">
            <div class="container">
                <h2 class="title has-text-white" style="margin-bottom: 10px;">Why Party16Bars?</h2>
                <p class="subtitle has-text-white" style="margin-bottom: 30px;">We make it easy for influencers like YOU to cash in on your socials.</p>
                
                <div class="columns is-centered">
                    <div class="column is-6">
                        <div class="box has-background-light" style="display: flex; flex-direction: column; justify-content: flex-start;">
                            <h3 class="subtitle">Bulk Posting</h3>
                            <p>Let’s save time. Push content across channels and keep things rolling like a pro.</p>
                        </div>
                    </div>
                    <div class="column is-6">
                        <div class="box has-background-light" style="display: flex; flex-direction: column; justify-content: flex-start;">
                            <h3 class="subtitle">Instant Payouts</h3>
                            <p>Get paid FAST. No more waiting weeks for your hard-earned cash. Get paid through Paypal, Payoneer or Bank Account.</p>
                        </div>
                    </div>
                </div>
                
                <div class="columns is-centered">
                    <div class="column is-6">
                        <div class="box has-background-light" style="display: flex; flex-direction: column; justify-content: flex-start;">
                            <h3 class="subtitle">Your Metrics, Your Rules</h3>
                            <p>Keep control of your engagement stats. We keep it simple and authentic.</p>
                        </div>
                    </div>
                    <div class="column is-6">
                        <div class="box has-background-light" style="display: flex; flex-direction: column; justify-content: flex-start;">
                            <h3 class="subtitle">Stay in the Loop</h3>
                            <p>We ping you when brands are ready to roll so you never miss a bag.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
           

        <!-- How to Use Section -->
        <div class="hero-section is-vcentered full-viewport" style="background:  linear-gradient(to right, #00b3b3,rgb(47, 161, 161), #008c8c); height: 105vh; padding: 50px 0;">
            <div class="container has-text-centered">
                <h2 class="title">How to Use Party16Bars</h2>
                <p>Follow these simple steps to kickstart your journey and cash in on your influence.</p>
                <br>
                <br>
                <div class="columns is-centered">
                    <div class="column is-3">
                        <div class="circle-number">1</div>
                        <h3 class="subtitle">Claim Your Gig</h3>
                        <p>When a brand hits you up, it’s game time. Let’s get this party started!</p>
                    </div>
                    <div class="column is-3">
                        <div class="circle-number">2</div>
                        <h3 class="subtitle">Funds Secured</h3>
                        <p>Your cash is locked in until you deliver the goods. No worries, just vibes.</p>
                    </div>
                    <div class="column is-3">
                        <div class="circle-number">3</div>
                        <h3 class="subtitle">Get It Done</h3>
                        <p>Show off your skills and complete the task just how the brand wants it.</p>
                    </div>
                    <div class="column is-3">
                        <div class="circle-number">4</div>
                        <h3 class="subtitle">Cash Out</h3>
                        <p>Once the brand gives you the thumbs up, the funds are yours. Easy peasy!</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Why Choose Us Section -->
        <div class="hero-section is-vcentered full-viewport" style="background: linear-gradient(45deg,rgb(170, 247, 247), #008c8c); height: 105vh; padding: 50px 0;">
            <div class="container has-text-centered">
                <h2 class="title">Why Party16Bars Rocks</h2>
                <p>Check out what makes us the ultimate choice for influencers and brands looking to collaborate.</p>
                <br />
                <div class="columns is-multiline is-justify-content-space-between">
                    <div class="column is-3">
                        <div class="card has-shadow">
                            <div class="card-content">
                                <h3 class="subtitle">Real-Time Insights</h3>
                                <p>Get data on your performance with metrics that matter. Stay in the loop and optimize your hustle!</p>
                            </div>
                        </div>
                    </div>
                    <div class="column is-3">
                        <div class="card has-shadow">
                            <div class="card-content">
                                <h3 class="subtitle">Boost Your SEO</h3>
                                <p>Our easy backlink process helps you level up your SEO game. Just drop your URL and watch your online presence soar!</p>
                            </div>
                        </div>
                    </div>
                    <div class="column is-3">
                        <div class="card has-shadow">
                            <div class="card-content">
                                <h3 class="subtitle">Performance Ranking</h3>
                                <p>Stay ahead of the game with our ranking system that shows you how you stack up. Get the feedback you need to keep climbing!</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>

    @include('components.welcome_footer') 
    <button id="scrollToTopBtn" class="button is-primary is-rounded is-medium" style="display: none; position: fixed; bottom: 20px; right: 20px; z-index: 1000;">
        <span class="icon has-text-white">
            <i class="fas fa-arrow-up"></i>
        </span>
    </button>
<script>

    // Back to top button 
    const scrollToTopBtn = document.getElementById("scrollToTopBtn");

    window.onscroll = function () {
        if (document.body.scrollTop > 100 || document.documentElement.scrollTop > 100) {
            scrollToTopBtn.style.display = "block";
        } else {
            scrollToTopBtn.style.display = "none";
        }
    };

    scrollToTopBtn.onclick = function () {
        window.scrollTo({ top: 0, behavior: "smooth" });
    };
</script>
</body>
</html>