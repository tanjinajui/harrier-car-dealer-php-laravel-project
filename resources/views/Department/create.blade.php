@extends('layouts.includes.master')

@section('title', 'New_Departments_Create')


@section('content')

  <div class="container">
    <div class="row">
      <div class="col-lg-6 offset-lg-3 create">
  <h2>Department Create</h2> <h3>
    <div class="underline1"></div>
    <a href="/departments">View Department</a></h3>
<!-- include message page -->
@include('messages.message')
  <!-- error message -->
  <!--  @if ($errors->any())
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
  <form action="/departments" method="POST">
    {{csrf_field()}}
    <input type="text" name="department_name" placeholder="Department name">
    <input type="text" name="department_code" placeholder="Department code">
    <input type="text" name="short_name" placeholder="Short Name">
    <input type="submit" value="Add" class="btn btn-primary">
  </form>

  <br>
  <!-- form ends -->
  <!-- database table data show starts -->
  <table class="table table-striped">
  <thead class="thead-dark">
    <tr>
      <th scope="col">SL.</th>
      <th scope="col">Department name</th>
      <th scope="col">Department code</th>
      <th scope="col">Short Name</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <?php //paginate
  $i= $departments->perPage()*($departments->currentPage()-1); ?>
  <!-- foreach loops database er data show -->
  @foreach($departments as $key=>$data_show)
  <tbody>
    <tr>
      <td>{{++$i}}</td>
      <td>{{$data_show->department_name}}</td>
      <td>{{$data_show->department_code}}</td>
      <td>{{$data_show->short_name}}</td>
      <td><a href="/departments/{{$data_show->id}}/edit" class="btn btn-success">Edit</a>|{!! Form::open(['url' => '/departments/'.$data_show->id,'method'=>'Delete']) !!}
      <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure?')">Delete</button>
      {!! Form::close() !!}
      </td>
    </tr>
  </tbody>
  @endforeach
</table>
  <!-- database table show ends -->
  {{$departments->links()}}
</div>
    </div>
  </div>
@endsection('content')