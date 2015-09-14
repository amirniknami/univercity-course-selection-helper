@extends('master')

@section('content')
<div class="container">
  @include('partial.nav')
@if(count($lists)>0)

        <table class="mytable table table-striped">
              <tr>
			     <td>حذف</td>
                <th>استاد</th>
				<th>ساعت کلاس</th>
				<th>نام درس</th>
				<th>مشخصه</th>
              </tr>
			  @foreach($lists as $list)
                <tr>
				<td><a class="btn btn-danger btn-xs" href="delete/{{$list->id}}+{{$user->id}}">حذف</a></td>
				<td>{{$list->teacher}}</td>
				<td>{{$list->time}}</td>
				<td>{{$list->name}}</td>
				 <td>{{$list->specification}}</td>
                </tr>
              @endforeach
        </table>
   
@endif

 <h4>ایجاد لیست جدید</h4>

    <form  method="post" >
        {!! csrf_field() !!}

        <div class="form-group">
            مشخصه درس
            <input name="specification" type="text" class="form-control">
        </div>
		
		<div class="form-group">
            نام درس
            <input id="name" name="name" type="text" class="form-control">
        </div>
		
		<div class="form-group">
           ساعت تشکیل درس
            <input id="teacher" name="time" type="text" class="form-control">
        </div>
		
		<div class="form-group">
            استاد
            <input id="teacher" name="teacher" type="text" class="form-control">
        </div>
		
		<div class="form-group">
            <a name="submit"  class="btn btn-info submit-click" >ceate</a>
        </div>
    </form>
  
</div>

@stop