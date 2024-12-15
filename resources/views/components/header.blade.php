<nav class="navbar" role="navigation" aria-label="main navigation" style="background-color: rgba(220, 248, 248, 0.2); border-bottom: 1px dotted rgba(0, 140, 140, 0.5)">
    <div class="navbar-brand">
        <a class="navbar-item" href="{{ route('home') }}">
            <img src="{{ asset('Logo.png') }}" alt="LinksMarket Logo" style="max-height: 50px;">
        </a>
        <button class="navbar-burger" aria-label="menu" aria-expanded="false" data-target="navbarBasicExample">
            <span aria-hidden="true"></span>
            <span aria-hidden="true"></span>
            <span aria-hidden="true"></span>
        </button>
    </div>

    <div id="navbarBasicExample" class="navbar-menu">
        <div class="navbar-start">
            <!-- This section can remain empty or be used for additional items -->
        </div>
        <div class="navbar-end">
            @auth
                <a class="navbar-item" href="{{ route('dashboard') }}" style="color: #008C8C;">Dashboard</a>
                <a class="navbar-item" href="{{ route('performance.index') }}" style="color: #008C8C;">Performance</a>
                <a class="navbar-item" href="{{ route('sponsored.index') }}" style="color: #008C8C;">Sponsored Sites</a>
                <a class="navbar-item" href="{{ route('link-insertions.index') }}" style="color: #008C8C;">Link Insertions</a>
                <a class="navbar-item" href="{{ route('logout') }}" style="color: #008C8C;">Logout</a>
            @else
                <a class="navbar-item" href="{{ route('login') }}" style="color: #008C8C;">Login</a>
                <a class="navbar-item" href="{{ route('register') }}" style="color: #008C8C;">Register</a>
            @endauth
            <a class="navbar-item" href="{{ route('about') }}" style="color: #008C8C;">About</a>
            <a class="navbar-item" href="{{ route('contact') }}" style="color: #008C8C;">Contact</a>
        </div>
    </div>
</nav>