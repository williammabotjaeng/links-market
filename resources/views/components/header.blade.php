<nav class="navbar has-shadow" role="navigation" aria-label="main navigation" style="background-color: rgba(220, 248, 248, 0.4); border-bottom: 1px dotted rgba(0, 140, 140, 0.5)">
    <div class="navbar-brand">
        <a class="navbar-item" href="{{ route('home') }}">
            <img src="{{ asset('Logo.png') }}" alt="LinksMarket Logo" style="max-height: 50px;"> 
            <span class="title" style="color:rgb(4, 95, 95)">Party16Bars</span>
        </a>
        <button class="navbar-burger" aria-label="menu" aria-expanded="false" data-target="navbarBasicExample" onclick="toggleNavbar()">
            <span aria-hidden="true"></span>
            <span aria-hidden="true"></span>
            <span aria-hidden="true"></span>
        </button>
    </div>

    <div id="navbarBasicExample" class="navbar-menu">
        <div class="navbar-start">
        </div>
        <div class="navbar-end">
            @auth
           
            <a class="navbar-item has-text-weight-bold" href="{{ route('account.balance') }}">
                Balance: <span class="has-text-success">{{ $account->balance }}</span>
            </a>
        
            <a class="navbar-item has-text-weight-bold" href="{{ route('account.reserved') }}">
                Reserved: <span class="has-text-warning">{{ $account->reserved }}</span>
            </a>
    
            <a class="navbar-item has-text-weight-bold" href="{{ route('account.bonus') }}">
                Bonus: <span class="has-text-info">{{ $account->bonus }}</span>
            </a>
      
            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: inline; justify-content: center; align-items: center; padding: 10px; color: white; background-color: #008c8c">
                    @csrf
                    <button type="submit" class="navbar-item" style="margin-top: 4px; color: #ffffff; background: none; border: none; cursor: pointer;">Logout</button>
            </form>
            @else
                <a class="navbar-item" href="{{ route('login') }}" style="color: #008C8C;">Login</a>
                <a class="navbar-item" href="{{ route('register') }}" style="color: #008C8C;">Register</a>
                <a class="navbar-item" href="{{ route('about') }}" style="color: #008C8C;">About</a>
                <a class="navbar-item" href="{{ route('contact') }}" style="color: #008C8C;">Contact</a>
            @endauth
            
        </div>
    </div>
</nav>
<script>
    function toggleNavbar() {
        const navbarMenu = document.getElementById('navbarBasicExample');
        const burgerButton = document.querySelector('.navbar-burger');

    
        navbarMenu.classList.toggle('is-active');
        
        burgerButton.classList.toggle('is-active');
    }
</script>
