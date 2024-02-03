<header class="header">
    <nav class="header-nav">
        <ul class="header-ul">
            @if(auth()->check())
            <p class="header-title">Journey</p>
            @else
            <h1 class="header-title">Welcome</h1>
            @endif
            @if(auth()->check())
            <li class="header-li">Home</li>
            <li class="header-li">My Journeys</li>
            <li class="header-li">Journeys</li>
            <li class="header-li"><a class="logout" href="{{ route('logout') }}">Logout</a></li>
            @endif
        </ul>
    </nav>
</header>