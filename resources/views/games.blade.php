@extends('layouts.app')

@section('title')
    Games
@endsection

@section('content')
    <body id="welcome-grid">
        @include("layouts.nav")

        <div class="games-container">
            <div class="gamecards-container">
                <div onmouseover="selector(1)" onmouseout="removeSelector(1)" onclick="location.href='{{ route('snake') }}'">
                    <img src="{{ asset('images/games/oksok.png') }}" alt="">
                    <p>3D Snake</p>
                </div>
                <div onmouseover="selector(2)" onmouseout="removeSelector(2)" >
                    <img src="{{ asset('images/games/oksok.png') }}" alt="">
                    <p>3D Tetris</p>
                </div>
                <div onmouseover="selector(3)" onmouseout="removeSelector(3)" >
                    <img src="{{ asset('images/games/oksok.png') }}" alt="">
                    <p>3D Ping Pong</p>
                </div>
            </div>

        </div>
    </body>
@endsection
