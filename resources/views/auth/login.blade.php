<!-- resources/views/auth/login.blade.php -->
@extends('master')

@if (count($errors) > 0)
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
@section('content')

    @include('partial.nav')
    <div class="container">

        <h1>login form</h1>
<form method="POST" action="/auth/login">
    {!! csrf_field() !!}

    <div class="form-group">
        Email
        <input class="form-control" type="email" name="email" value="{{ old('email') }}">
    </div>

    <div class="form-group">
        Password
        <input class="form-control" type="password" name="password" id="password">
    </div>



    <div class="form-group">
        <button class="btn btn-info" type="submit">Login</button>
    </div>
</form>
    </div>
    @stop