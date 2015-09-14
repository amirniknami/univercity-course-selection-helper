<!-- resources/views/auth/register.blade.php -->

@extends('master')

@section('content')

    @include('partial.nav')



<form class="container" method="POST" action="/auth/register">
    <h1>register</h1>
    {!! csrf_field() !!}

    <div class="form-group">
        Name
        <input class="form-control" type="text" name="name" value="{{ old('name') }}">
    </div>

    <div class="form-group">
        Email
        <input class="form-control" type="email" name="email" value="{{ old('email') }}">
    </div>

    <div class="form-group">
        Password
        <input class="form-control" type="password" name="password">
    </div>

    <div class="form-group">
        Confirm Password
        <input class="form-control" type="password" name="password_confirmation">
    </div>

    <div>
        <button class="btn btn-primary" type="submit">Register</button>
    </div>
</form>

@stop