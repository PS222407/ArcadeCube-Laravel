@extends('layouts.app')

@section('title')
    Games
@endsection

@section('content')
    <div class="games-container">
        <div class="gamecards-container">
            <div onmouseover="selector(1)" onmouseout="removeSelector(1)" onclick="location.href='{{ route('snake') }}'">
                <img src="{{ asset('images/games/snake3d.png') }}" alt="game snake">
                <p>3D Snake</p>
            </div>
            <div onmouseover="selector(2)" onmouseout="removeSelector(2)" onclick="location.href='{{ route('tetris') }}'">
                <img src="{{ asset('images/games/oksok.png') }}" alt="game tetris">
                <p>3D Tetris</p>
            </div>
            <div onmouseover="selector(3)" onmouseout="removeSelector(3)" onclick="location.href='{{ route('pingpong') }}'">
                <img src="{{ asset('images/games/oksok.png') }}" alt="game ping pong">
                <p>3D Ping Pong</p>
            </div>
        </div>
    </div>
@endsection
