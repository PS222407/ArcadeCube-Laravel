<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
@section('title')
    Snake
@endsection
@include("layouts.head")

<body id="welcome-grid">
    @include("layouts.nav")
    <div class="games-container">
        <p>3D Snake</p>
    </div>
</body>

</html>
