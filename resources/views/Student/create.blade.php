@extends('layouts.includes.master')

@section('title', 'New_Student_Create')


@section('content')
<div class="page-heading">
    <div class="container">
      <div class="row">
        <div class="col-xs-12">
          <div class="page-title">
           <h2>Student Add</h2>
          </div>
        </div>
        <!--col-xs-12-->
      </div>
      <!--row-->
    </div>
    <!--container-->
</div>    
       
<!-- BEGIN Main Container -->           
<div class="main-container col1-layout wow bounceInUp animated animated" style="visibility: visible;">     
    <div class="main">                     
      <div class="account-login container">
        <div class="heading text-center">
          <h1 class="h4 text-gray-900 mb-4">Create New Students!</h1>
         <h3><a href="/students">View All Students</a></h3>
        </div>
      <!--form-part starts -->
      <form action="/students" method="POST">
    <!-- form-part Starts -->
        <div class="col-md-3"></div>
        <fieldset class="col2-set ">
            <div class="col-1 new-users">
             <!-- include message page -->
            @include('messages.message')              
              {{csrf_field()}}
                              
            <!-- student_name field -->
            <div class="form-group">
                <input type="text" name="student_name" class="form-control" id="student_name" placeholder="Student Name">
            </div> 
            <!-- Department name field -->
            <div class="form-group">
                <select class="form-control" name="departments_id">
                  <option value="">Please Select Department</option>
                  @foreach(App\Departments::all() as $data_show)
                  <option value="{{$data_show->id}}">{{$data_show->department_name}}</option>
                  @endforeach
                </select>
              </div>
            <!-- student_address field -->
            <div class="form-group">
              <textarea name="student_address" id="student_address" cols="30" rows="10" class="form-control" placeholder="Student address"></textarea>
                                    
            </div> 
            <!-- student_email field -->
            <div class="form-group">
                <input type="email" name="student_email" class="form-control" id="student_email" placeholder="Student Email" >
            </div>
            <!-- student_mobile field -->
            <div class="form-group">
                <input type="text" name="student_mobile" class="form-control" placeholder="Student Mobile">
            </div>
    <input type="submit" name="create_student" class="btn btn-primary btn-user btn-block mt-5" value="Create Student">   
        </fieldset> <!--col2-set-->
      </form>  
  </div><!--main-container-->
          
</div> <!--col1-layout-->
<!-- container-fluid -->
       
@endsection('content')