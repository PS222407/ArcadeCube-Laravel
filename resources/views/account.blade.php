@extends('layouts.app')

@section('title')
    Account
@endsection

@section('content')
    <div class="transparent-container">
        @guest
            <a href="{{ route('login') }}">Log in first</a>
        @else
            @if (Auth::user()->email_verified_at != null)
                <div class="account-grid">
                    <div class="account-header">
                        Account information
                    </div>
                    <div class="account-subgrid">
                        <img class="profilepicture" src="{{ asset('images/account.png') }}" alt="">
                        <div class="div1">
                            <p class="username">Username: <span>{{ Auth::user()->username }}</span></p>
                            <a href="">Change my username</a>
                        </div>
                        <div class="div2">
                            <p class="email">Email: <span>{{ Auth::user()->email }}</span></p>
                            <a href="">Change my email address</a>
                            <br />
                            @if (Route::has('password.request'))
                                <a href="{{ route('password.request') }}">Change your password?</a>
                            @endif
                        </div>

                        <div class="account-leaderboard">
                            <div>Leaderboard</div>
                            <table>
                                <tr>
                                    <td>GAMES</td>
                                    <td>Score</td>
                                </tr>
                                <tr>
                                    <td>3D Snake:</td>
                                    <td>{{ $snake }}</td>
                                </tr>
                                <tr>
                                    <td>3D Tetris:</td>
                                    <td>{{ $tetris }}</td>
                                </tr>
                                <tr>
                                    <td>3D Ping Pong:</td>
                                    <td>{{ $pingpong }}</td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>
            @else
                <a href="{{ route('login') }}">Log in first, or verify your email</a>
            @endif
        @endguest
    </div>
@endsection
