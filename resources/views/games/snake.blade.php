@extends('layouts.app')

@section('title')
    Snake
@endsection

@section('content')
    <body id="welcome-grid">
        @include("layouts.nav")
        <div class="games-container">
            <p>3D Snake</p>
        </div>
    </body>
@endsection
