<nav id="nav">
    <a href="{{ route('welcome') }}">
        <span>A</span>
        <span>r</span>
        <span>c</span>
        <span>a</span>
        <span>d</span>
        <span>e</span>
        <span>C</span>
        <span>u</span>
        <span>b</span>
        <span>e</span>
    </a>
    <a class="{{ request()->is('games') ? 'active' : '' }}" href="{{ route('games') }}">Games</a>
    <a class="{{ request()->is('information') ? 'active' : '' }}" href="{{ route('information') }}">Information</a>
    @guest
        <a class="{{ request()->is('login') || request()->is('register') ? 'active' : '' }}" href="{{ route('login') }}"> Login/Registreer</a>
    @else
        <a id="hahalol" onclick="openAccountMenu()" onmouseover="hahalol()"> <img class="account-img" src="{{ asset('images/account.png') }}" alt=""> {{ Auth::user()->username }}</a>
    @endguest
</nav>
<div id="dropdown-account">
    <div>
        <a href="{{ route('account') }}">account</a>
    </div>
    <div>
        <a href="{{ route('logout') }}"
        onclick="event.preventDefault();
                        document.getElementById('logout-form').submit();">
            {{ __('Logout') }}
        </a>
        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
            @csrf
        </form>
    </div>
</div>
