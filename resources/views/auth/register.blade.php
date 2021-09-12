@extends('layouts.app')

@section('title')
    Login/Register
@endsection

@section('content')
    <body id="welcome-grid">
        @include('layouts.nav')
        <div class="transparent-container login-grid">
            <div class="left">

            </div>
            <form method="POST" action="{{ route('register') }}">
                @csrf

                <label for="name">Firstname</label>
                <input id="name" autocomplete="none" type="text" class="@error('name') is-invalid @enderror" name="name" value="{{ old('name') }}">
                @error('name')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror

                <label for="lname">Lastname</label>
                <input id="lname" autocomplete="none" type="text" class="@error('lname') is-invalid @enderror" name="lname" value="{{ old('lname') }}">
                @error('lname')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror

                <label for="email">Email</label>
                <input id="email" autocomplete="none" type="email" class="@error('email') is-invalid @enderror" name="email" value="{{ old('email') }}">
                @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror

                <label for="password">Password</label>
                <input id="password" onkeyup="tbPassword_KeyUp()" autocomplete="off" type="password" class="@error('password') is-invalid @enderror" name="password">
                @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror

                <label for="password-confirm">Confirm password</label>
                <input id="password-confirm" autocomplete="off" type="password" name="password_confirmation">

                <label class="bold">Minimal password requirements are:</label>
                <ul>
                    <li id="char8">8 characters minimal</li>
                    <li id="charK">1 lowercase letter</li>
                    <li id="charH">1 uppercase letter</li>
                    <li id="charC">1 digit (0-9)</li>
                    <li id="charS">1 special character (!,*,@,#,$,%,^,+,=,&)</li>
                </ul>
                <button class="input-submit" type="submit">REGISTER</button>
            </form>
            <div class="right">

            </div>
        </div>
    </body>
@endsection
