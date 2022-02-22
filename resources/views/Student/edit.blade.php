@extends('layouts.includes.master')

@section('title', 'Students Information Update')


@section('content')
<!-- container-fluid -->
        <div class="container-fluid">
          <!-- Basic Card Example -->
              <div class="card shadow mb-4">
                <div class="row">
                	<div class="col-12 text-center">
                		<div class="p-5 m-auto" style="max-width:600px">
                			<div class="heading text-center">
                				<h1 class="h4 text-gray-900 mb-4">Update Students Information!</h1>
                			</div>
                           <!-- include message page -->
                            @include('messages.message')
                			{!! Form::open(['url' => '/students/'.$data_show->id,'method'=>'PATCH']) !!}
                                <!-- student_id field -->
                                <!-- <div class="form-group">
                                    <input type="text" name="student_id" class="form-control" id="student_id" placeholder="Student ID" value="{{$data_show->student_id}}" readonly>
                                </div>   -->                         
                                <!-- student_name field -->
                                <div class="form-group">
                                    <input type="text" name="student_name" class="form-control" id="student_name" placeholder="Student Name" value="{{$data_show->student_name}}" readonly>
                                </div> 
                                
                                <!-- student_address field -->
                                <div class="form-group">
                                    <textarea name="student_address" id="student_address" cols="30" rows="10"class="form-control">{{$data_show->student_address}}</textarea>
                                    
                                </div> 
                                <!-- student_email field -->
                                <div class="form-group">
                                    <input type="email" name="student_email" class="form-control" id="student_email" placeholder="Student Email" value="{{$data_show->student_email}}">
                                </div>
                				<!-- student_mobile field -->
                                <div class="form-group">
                                    <input type="text" name="student_mobile" class="form-control" placeholder="Student Mobile" value="{{$data_show->student_mobile}}">
                                </div>
                				<input type="submit" name="update_student" class="btn btn-primary btn-user btn-block mt-5" value="Update Student">
                			  {!! Form::close() !!}
                		</div>
                	</div>
                </div>
              </div>
            </div>
 		</div>
        @endsection('content')