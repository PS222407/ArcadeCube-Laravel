<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
@section('title')
    Information
@endsection
@include("layouts.head")

<body id="welcome-grid">
    @include("layouts.nav")

    <div class="transparent-container">
        <p>information</p>
        <img src="{{ asset('images/cube.png') }}" alt="led cube">
    </div>
</body>

</html>
