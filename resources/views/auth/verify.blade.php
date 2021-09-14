@extends('layouts.app')

@section('title')
    Verify email
@endsection

@section('content')
    <div class="transparent-container padding25">
        <h2>Verify your email address</h2>
        <br/>
        <div>
            @if (session('resent'))
                <div>
                    {{ __('A fresh verification link has been sent to your email address.') }}
                </div>
            @endif

            <p>Before proceeding, please check your email for a verification link. If you did not receive the email,</p>
            <form method="POST" action="{{ route('verification.resend') }}">
                @csrf
                <button class="btn-pink" type="submit">click here to request another</button>
            </form>
            <div class="loguit-style">
                <a href="{{ route('logout') }}" onclick="event.preventDefault();
                                document.getElementById('logout-form').submit();">
                    Or register with another mail address
                </a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                    @csrf
                </form>
            </div>
        </div>
    </div>
@endsection
