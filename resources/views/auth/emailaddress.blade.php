@extends('layouts.app')

@section('title')
    change email
@endsection

@section('content')
    <div class="transparent-container login-grid">
        <div class="left"></div>
        <form method="POST" action="/account/{{ $userFromController->id }}/email">
            @csrf
            @method("PUT")
            <label for="email">New email:</label>
            <input type="text" class="{{ $errors->first('email') ? ' error' : '' }}" placeholder="@error('email'){{ $message }}@enderror" id="email" name="email" value="{{ $userFromController->email }}">
            <button class="input-submit" type="submit">Change email</button>
        </form>
        <div class="right"></div>
    </div>
@endsection
