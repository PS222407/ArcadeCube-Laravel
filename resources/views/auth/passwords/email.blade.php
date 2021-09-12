@extends('layouts.app')

@section('title')
    Reset password
@endsection

@section('content')
<body id="welcome-grid">
    @include('layouts.nav')
    <div class="transparent-container login-grid">
        <div class="left"></div>
        <form method="POST" action="{{ route('password.email') }}">
            @csrf

                <label for="email">{{ __('E-Mail Address') }}</label>
                <input id="email" type="email" class="@error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror

                <br/>

                <button class="input-submit" type="submit">{{ __('Send Password Reset Link') }}</button>
            </form>
        <div class="right"></div>
    </div>
</body>


@endsection
