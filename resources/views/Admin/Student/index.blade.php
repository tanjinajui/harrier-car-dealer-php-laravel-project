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
            <!-- <div class="form-group">
                <input type="text" name="student_name" class="form-control" id="student_name" placeholder="Student Name">
            </div> --> 
            <!-- Department name field -->
            <div class="form-group">
                <select class="form-control" name="departments_id" id="department">
                  <option value="">Please Select Department</option>
                  @foreach(App\Departments::all() as $data_show)
                  <option value="{{$data_show->id}}">{{$data_show->department_name}}</option>
                  @endforeach
                </select>
              </div>
            <!-- student_address field -->
           <div class="form-group" >
              <select name="students_id" id="student" class="form-control">
                <option value="">Please select a student</option>
              </select>
           </div>  
        <!-- <input type="submit" name="create_student" class="btn btn-primary btn-user btn-block mt-5" value="Create Student">  -->  
        </fieldset> <!--col2-set-->
      </form>  
  </div><!--main-container-->
          
</div> <!--col1-layout-->
<!-- container-fluid -->
<!-- Ajax/Javascript code add -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
            <script type="text/javascript">
                      
        $('#department').on('change',function(e){
          //alert('yes');
            console.log(e);
            var departments_id= e.target.value;
            
            $.get('/jsonStudents?departments_id=' + departments_id,function(data){
                console.log(data);
                $('#student').empty();
                $('#student').append('<option value="" disable="true" selected="true">=== Select Student === </option>');
                $.each(data, function(index, studentObj){
                    $('#student').append('<option value="'+ studentObj.id +'">'+ studentObj.student_name +'</option>');
                });

            });
        });

    </script>
   
@endsection('content')