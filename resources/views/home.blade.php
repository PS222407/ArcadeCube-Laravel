@extends('layouts.app')

@section('title')
    Home2
@endsection

@section('content')
    <div class="transparent-container">
        @if (session('status'))
            <div class="alert alert-success" role="alert">
                {{ session('status') }}
            </div>
        @endif

        {{ __('You are logged in!') }}
    </div>
@endsection
