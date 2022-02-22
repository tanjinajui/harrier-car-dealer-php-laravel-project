@extends('layouts.includes.master')

@section('title', 'Update_Admission_Student')

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
                				<h1 class="h4 text-gray-900 mb-4">Update Admission Students!</h1>
                				<h3><a href="/admissions">View All Admission Students</a></h3>
                			</div>
                           <!-- include message page -->
                            @include('messages.message')
                			<!-- laravelcollected html form starts -->
                        {!! Form::open(['url' => '/admissions/'.$data_show->id,'method'=>'PATCH', 'class'=>'form-group','enctype'=>'multipart/form-data']) !!}
                                
                        <!-- student_id field -->
                				<div class="form-group">
                					<input type="text" name="student_id" class="form-control" id="student_id" placeholder="Student ID" value="{{$data_show->student_id}}">
                				</div>
                                <!-- student_name field -->
                                <div class="form-group">
                                    <input type="text" name="student_name" class="form-control" id="student_name" placeholder="Student Name" value="{{$data_show->student_name}}">
                                </div> 
                                <!-- Department name field -->
                                <!-- onno table er data edit -->
                                <!-- <div class="form-group">
                                    <select class="form-control" name="departments_id">
                                      <option value="{{$data_show->id}}">{{$data_show->departments->department_name}}</option>
                                      @foreach($departments as $data_shows)
                                      <option value="{{$data_shows->id}}">{{$data_shows->department_name}}</option>
                                      @endforeach
                                    </select>
                                  </div> -->
                                  <!-- onno table er data edit if condition use-->
                                <div class="form-group">
                                    <select class="form-control" name="departments_id">                                      
                                      @foreach($departments as $data_shows)
                                      @if($data_shows->id==$data_show->departments_id)                                      
                                      <option value="{{$data_shows->id}}" selected="">{{$data_shows->department_name}}</option>
                                      @else
                                      <option value="{{$data_shows->id}}">{{$data_shows->department_name}}</option>
                                      @endif
                                      @endforeach
                                    </select>
                                  </div>
                                  <!-- student_name field -->
                                <div class="form-group">
                                    <input type="text" name="student_section_name" class="form-control" id="student_section_name" placeholder="Student Section Name" value="{{$data_show->student_section_name}}">
                                </div> 
                                 <!-- student_picture field -->
                                <div class="form-group">
                                    <input type="file" name="student_picture" class="form-control-file" id="student_picture">
                                    <img src="{{asset('images/student_picture/'.$data_show->student_picture)}}" alt="student_picture" height="100" >
                                </div>                           
                				<input type="submit" name="update_student" class="btn btn-primary btn-user btn-block mt-5" value="Update Admission Student">
                      <!-- laravelcollected html form ends -->
                        {!! Form::close() !!}
                			
                		</div>
                	</div>
                </div>
              </div>
            </div>
 		</div>

@endsection('content')