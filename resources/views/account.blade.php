@extends('layouts.app')

@section('title')
    Account
@endsection

@section('content')
    <div class="transparent-container">
        @guest
            <a href="{{ route('login') }}">Log in first</a>
        @else
            <div class="account-grid">
                <div class="account-header">
                    Account information
                </div>
                <div class="account-subgrid">
                    <img class="profilepicture" src="{{asset('images/account.png')}}" alt="">
                    <div class="div1">
                        <p class="username">Username: <span>{{ Auth::user()->name }}</span></p>
                        <a href="">Change my username</a>
                    </div>
                    <div class="div2">
                        <p class="email">Email: <span>{{ Auth::user()->email }}</span></p>
                        <a href="">Change my email address</a>
                        <br/>
                        <a href="">Change my password</a>
                    </div>
                    <div class="account-leaderboard">
                        <div>Leaderboard</div>
                        <table>
                            <tr>
                                <td>GAMES</td>
                                <td>Time</td>
                                <td>Speed</td>
                                <td>Score</td>
                            </tr>
                            <tr>
                                <td>3D Snake: </td>
                                <td>67238s</td>
                                <td>67238s</td>
                                <td>67238s</td>
                            </tr>
                            <tr>
                                <td>3D Tetris: </td>
                                <td>67238s</td>
                                <td>67238s</td>
                                <td>67238s</td>
                            </tr>
                            <tr>
                                <td>3D Ping Pong: </td>
                                <td>67238s</td>
                                <td>67238s</td>
                                <td>67238s</td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
        @endguest
    </div>
@endsection

