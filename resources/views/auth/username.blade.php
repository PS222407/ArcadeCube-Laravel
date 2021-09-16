@extends('layouts.app')

@section('title')
    change username
@endsection

@section('content')
    <div class="transparent-container login-grid">
        <div class="left"></div>
            <form method="POST" action="/account/{{ $userFromController->id }}/username">
                @csrf
                @method("PUT")

                <label for="username">New username:</label>
                <input type="text" class="{{ $errors->first("username") ? " error" : ""}}" placeholder="@error('username'){{ $message }}@enderror" id="username" name="username" value="{{ $userFromController->username }}">
                {{-- {{ $customer->customerName }} --}}
                <button class="input-submit" type="submit">Change username</button>
            </form>
        <div class="right"></div>
    </div>
@endsection
