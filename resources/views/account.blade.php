@extends('layouts.app')

@section('title')
    Account
@endsection

@section('content')
    <body id="welcome-grid">
        @include("layouts.nav")

        <div class="transparent-container">
            @guest
                <a href="{{ route('login') }}">Log in first</a>
            @else
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
            @endguest
        </div>
    </body>
@endsection
