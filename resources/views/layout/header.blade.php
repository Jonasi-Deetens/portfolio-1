<header class="header">
    <nav class="header-nav">    
        @if(auth()->check())
        <p class="header-title">Journey</p>
        @else
        <h1 class="header-title">Welcome</h1>
        @endif
        <ul class="header-ul">
            @if(auth()->check())
            <li><a class="header-link" href="{{ route('home') }}">Home</a></li>
            <li><a class="header-link" href="{{ route('home') }}">My Journeys</a></li>
            <li><a class="header-link" href="{{ route('home') }}">Journeys</a></li>
            <li>
                <form action="{{ route('logout') }}" method="POST">
                    @csrf
                    <input class="logout" type="submit" value="Logout">
                </form>
            </li>
            @endif
        </ul>
    </nav>
</header>