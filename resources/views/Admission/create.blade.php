<!-- header and footer file master include -->
@extends('layouts.includes.master')
<!-- title set -->

@section('title', 'Admission_create')

@section('content')
<br><br>
<!-- container-fluid -->
        <div class="container-fluid">
          <!-- Basic Card Example -->
              <div class="card shadow mb-4">
                <div class="row">
                	<div class="col-12 text-center">
                		<div class="p-5 m-auto" style="max-width:600px">
                			<div class="heading text-center">
                				<h1 class="h4 text-gray-900 mb-4">Create New Admission Students!</h1>
                				<h3><a href="/admissions">View All Admission Students</a></h3>
                			</div>
                           <!-- include message page -->
                            @include('messages.message')
                			<form action="/admissions" method="POST" enctype="multipart/form-data">
                                {{csrf_field()}}
                                <!-- student_id field -->
                				<div class="form-group">
                					<input type="text" name="student_id" class="form-control" id="student_id" placeholder="Student ID">
                				</div>
                                <!-- student_name field -->
                                <div class="form-group">
                                    <input type="text" name="student_name" class="form-control" id="student_name" placeholder="Student Name">
                                </div> 
                                <!-- Department name field -->
                                <!-- onno table er data add -->
                                <div class="form-group">
                                    <select class="form-control" name="departments_id">
                                      <option value="">Please Select Department</option>
                                      @foreach($departments as $data_show)
                                      <option value="{{$data_show->id}}">{{$data_show->department_name}}</option>
                                      @endforeach
                                    </select>
                                  </div>
                                  <!-- student_name field -->
                                <div class="form-group">
                                    <input type="text" name="student_section_name" class="form-control" id="student_section_name" placeholder="Student Section Name">
                                </div>  
                                 <!-- student_picture field -->
                                <div class="form-group">
                                    <input type="file" name="student_picture" class="form-control-file" id="student_picture">
                                </div>                           
                				<input type="submit" name="create_student" class="btn btn-primary btn-user btn-block mt-5" value="Create Admission Student">
                			</form>
                		</div>
                	</div>
                </div>
              </div>
            </div>
 		</div>

@endsection('content')