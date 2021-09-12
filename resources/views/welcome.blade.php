@extends('layouts.app')

@section('title')
    Home
@endsection

@section('content')
    <body id="welcome-grid">
        @include("layouts.nav")

        <div class="transparent-container welcome-grid">
            <div class="div">
                <h2>Welcome to ArcadeCube!</h2><br/>
                <p>We have a variation of games, we have 3D Snake, 3D Tetris, Rubicscube and 3D Pong all for the LedCube.</p>
            </div>
            <img class="img" src="{{ asset('images/cube.png') }}" alt="led cube">
        </div>
    </body>
@endsection
