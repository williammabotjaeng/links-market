<nav class="navbar is-primary" role="navigation" aria-label="main navigation">
    <div class="navbar-brand">
        <a class="navbar-item" href="{{ route('home') }}">
            LinksMarket
        </a>
        <button class="navbar-burger" aria-label="menu" aria-expanded="false" data-target="navbarBasicExample">
            <span aria-hidden="true"></span>
            <span aria-hidden="true"></span>
            <span aria-hidden="true"></span>
        </button>
    </div>

    <div id="navbarBasicExample" class="navbar-menu">
        <div class="navbar-start">
            @auth
                <a class="navbar-item" href="{{ route('dashboard') }}">Dashboard</a>
                <a class="navbar-item" href="{{ route('performance.index') }}">Performance</a>
                <a class="navbar-item" href="{{ route('sponsored.index') }}">Sponsored Sites</a>
                <a class="navbar-item" href="{{ route('link-insertions.index') }}">Link Insertions</a>
                <a class="navbar-item" href="{{ route('logout') }}">Logout</a>
            @else
                <a class="navbar-item" href="{{ route('login') }}">Login</a>
                <a class="navbar-item" href="{{ route('register') }}">Register</a>
            @endauth
            <a class="navbar-item" href="{{ route('about') }}">About</a>
            <a class="navbar-item" href="{{ route('contact') }}">Contact</a>
        </div>
    </div>
</nav>