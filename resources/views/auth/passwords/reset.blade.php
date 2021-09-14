@extends('layouts.app')

@section('title')
    Reset password
@endsection

@section('content')
    <div class="transparent-container login-grid">
        <div class="left"></div>
        <form method="POST" action="{{ route('password.update') }}">
            @csrf

            <input type="hidden" name="token" value="{{ $token }}">
                <label for="email">{{ __('E-Mail Address') }}</label>
                <div>
                    <input id="email" type="email" class=" @error('email') is-invalid @enderror" name="email" value="{{ $email ?? old('email') }}" required autocomplete="email" autofocus>
                    @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

                <label for="password">{{ __('Password') }}</label>
                <div>
                    <input id="password" type="password" class="@error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
                    @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

            <label for="password-confirm">{{ __('Confirm Password') }}</label>
            <div>
                <input id="password-confirm" type="password" name="password_confirmation" required autocomplete="new-password">
            </div>

            <br/>

            <button class="input-submit" type="submit">
                {{ __('Reset Password') }}
            </button>
        </form>
        <div class="right"></div>
    </div>
@endsection
