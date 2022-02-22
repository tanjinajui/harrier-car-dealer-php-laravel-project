@extends('layouts.includes.master')

@section('title', 'Update Departments')


@section('content')
<div class="create" style=" text-align: center;">
	
	<h2 style="color: #080275; font-weight: 800;">Department Edit</h2> <h3><a href="/departments">View Department</a></h3>
	@include('messages.message')
	<!-- error message -->
	 <!-- @if ($errors->any())
     @foreach ($errors->all() as $error)
         <div class="alert alert-danger" style="color: red; font-weight: bold;">{{$error}}</div>
     @endforeach
 @endif -->

	<!-- success message -->
	<!-- @if(session()->has('success'))
	<div class="alert alert-success" style="color: green; font-weight: bold;">
		{{session()->get('success')}}
	</div>
	@endif -->
	<!-- form starts -->
	<!-- laravelcollected html form starts -->
    {!! Form::open(['url' => '/departments/'.$data_show->id,'method'=>'PATCH']) !!}
	
		<input type="text" name="department_name" placeholder="Department name" value="{{$data_show->department_name}}">
		<input type="text" name="department_code" placeholder="Department code" value="{{$data_show->department_code}}">
		<input type="text" name="short_name" placeholder="Short name" value="{{$data_show->short_name}}">
		<input type="submit" value="Update Department" class="btn btn-primary">
	 <!-- laravelcollected html form ends -->
     {!! Form::close() !!}
</div>
	<br>
	<br>
	<br>
	


@endsection('content')