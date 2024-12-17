<aside class="menu" style="background-color: #008c8c; height: 100vh; padding: 20px;">
    <p class="menu-label has-text-white" style="font-size: 1.8rem;">
        Dashboard
    </p>
    <ul class="menu-list side-nav">
        <li>
            <a class="navbar-item has-text-white" href="{{ route('dashboard') }}" style="font-size: 1.25rem;">
                <span class="icon" style="font-size: 1.5rem;"><i class="fas fa-tachometer-alt"></i></span>
                <span class="ml-4">Dashboard</span>
            </a>
        </li>

        @if($user->current_role === 'advertiser')
            <li>
                <a class="navbar-item has-text-white" href="{{ route('projects') }}" style="font-size: 1.25rem;">
                    <span class="icon" style="font-size: 1.5rem;"><i class="fas fa-folder-open"></i></span>
                    <span class="ml-4">My Advertisements</span>
                </a>
            </li>
            <li>
                <a class="navbar-item has-text-white" href="{{ route('reports') }}" style="font-size: 1.25rem;">
                    <span class="icon" style="font-size: 1.5rem;"><i class="fas fa-file-alt"></i></span>
                    <span class="ml-4">Ad Reports</span>
                </a>
            </li>
        @elseif($user->current_role === 'publisher')
            <li>
                <a class="navbar-item has-text-white" href="{{ route('websites.index') }}" style="font-size: 1.25rem;">
                    <span class="icon" style="font-size: 1.5rem;"><i class="fas fa-globe"></i></span>
                    <span class="ml-4">My Websites</span>
                </a>
            </li>
            <li>
                <a class="navbar-item has-text-white" href="{{ route('social-media') }}" style="font-size: 1.25rem;">
                    <span class="icon" style="font-size: 1.5rem;"><i class="fas fa-user-group"></i></span>
                    <span class="ml-4">My Social Media</span>
                </a>
            </li>
            <li>
                <a class="navbar-item has-text-white" href="{{ route('settings') }}" style="font-size: 1.25rem;">
                    <span class="icon" style="font-size: 1.5rem;"><i class="fas fa-cog"></i></span>
                    <span class="ml-4">Settings</span>
                </a>
            </li>
        @endif

        <li>
            <a class="navbar-item has-text-white" href="{{ route('support') }}" style="font-size: 1.25rem;">
                <span class="icon" style="font-size: 1.5rem;"><i class="fas fa-headset"></i></span>
                <span class="ml-4">Support</span>
            </a>
        </li>
    </ul>
</aside>