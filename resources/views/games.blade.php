<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
@section('title')
    Games
@endsection
@include("layouts.head")

<body id="welcome-grid">
    @include("layouts.nav")

    <div class="games-container">
        <div class="gamecards-container">
            <div onclick="location.href='{{ route('snake') }}'">
                <img src="{{ asset('images/games/oksok.jpg') }}" alt="">
                <p>3D Snake</p>
            </div>
            <div>
                <img src="{{ asset('images/games/oksok.jpg') }}" alt="">
                <p>3D Tetris</p>
            </div>
            <div>
                <img src="{{ asset('images/games/oksok.jpg') }}" alt="">
                <p>3D Ping Pong</p>
            </div>
        </div>

    </div>
</body>

</html>
