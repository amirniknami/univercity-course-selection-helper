@extends('master')

@section('content')
@include('partial/nav');
    <div class="jumbotron">
  <div class="container">
    <h1>به سامانه کمکی انتخاب واحد دانشگاه خوش امدید</h1>
	<p> شما در این سامانه میتوانید  درسهای خود را قبل از ثبت در سامانه اصلی در این سامانه ثبت کنید</p>
  <p><a class="btn btn-primary btn-lg" href="auth/register" role="button">ثبت نام کنید</a></p>
  </div>
</div>
@stop