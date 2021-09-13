<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    @include('layouts.head')
    <body id="welcome-grid">
        @include("layouts.nav")
        @yield('content')
    </body>
</html>
