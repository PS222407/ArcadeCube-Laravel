@extends('layouts.app')

@section('title')
    Login/Register
@endsection

@section('content')
    <body id="welcome-grid">
        @include("layouts.nav")

        <div class="transparent-container login-grid">
            <div class="left"></div>
            <form method="POST" action="{{ route('login') }}">
                @csrf

                <label for="email">Email</label>
                <input id="email" autocomplete="off" class="@error('email') is-invalid @enderror" name="email" value="{{ old('email') }}">

                @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror

                <label for="password">Password</label>
                <input id="password" autocomplete="off" type="password" class="@error('password') is-invalid @enderror" name="password">

                @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror

                <div>
                    <label for="remember">Remember me</label>
                    <label class="switch">
                        <input type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                        <span class="slider"></span>
                    </label>
                </div>

                <button type="submit" class="input-submit">LOGIN</button>
                <a class="forgotpassword" href="{{ route('register') }}">Dont have an account? Register now!</a>
                @error('email')
                    @if (Route::has('password.request'))
                        <a class="forgotpassword" href="{{ route('password.request') }}">Forgot your password?</a>
                    @endif
                @enderror
            </form>
            <div class="right"></div>
        </div>
    </body>
@endsection
