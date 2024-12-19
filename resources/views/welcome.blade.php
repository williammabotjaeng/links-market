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
        <div class="hero-section is-vcentered full-viewport" style="background:  linear-gradient(to right, #00b3b3,rgb(47, 161, 161), #008c8c); height: 105vh; padding: 50px 0;">
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
        <div class="hero-section is-vcentered full-viewport" style="background: linear-gradient(45deg,rgb(170, 247, 247), #008c8c); height: 105vh; padding: 50px 0;">
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