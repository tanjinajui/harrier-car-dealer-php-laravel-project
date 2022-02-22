@extends('layouts.includes.master')

@section('title', 'View All Students')


@section('content')
<div class="page-heading">
    <div class="container">
      <div class="row">
        <div class="col-xs-12">
          <div class="page-title">
           <h2>All Students View</h2>
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
          <!-- registration heading field -->   
          <h1 class="h4 text-gray-900 mb-4">All Students View!</h1>
          <h3><a href="/students/create">Add New students</a></h3>
        </div>
     
      <!--page-title-->
        <div class="col-md-3"></div>
        <fieldset class="col2-set ">
            <div class="col-1 new-users"> 
          <table class="table table-dark table-bordered table-hover">
            @include('messages.message')
                            <!-- database table data show starts -->
                            <table class="table allstudentviewtable table-striped">
                              <thead class="table-dark">
                                <tr>
                                  <th scope="col">SL.</th>
                                  <th scope="col">Student id</th>
                                  <th scope="col">Student name</th>
                                  <th scope="col">Student department</th>
                                  <th scope="col">Student address</th>
                                  <th scope="col">Student email</th>
                                  <th scope="col">Action</th>
                                </tr>
                              </thead>
                              <?php $i = $students->perPage()*($students->currentPage()-1); ?>
                              <!-- foreach loops database er data show -->
                              @foreach($students as $key=>$data_show)
                              <tbody>
                                <tr>
                                  <td>{{++$i}}</td>
                                  <td>{{$data_show->student_id}}</td>
                                  <td>{{$data_show->student_name}}</td>
                                  <td>{{$data_show->departments_id}}</td>
                                  <td>{{$data_show->student_address}}</td>
                                  <td>{{$data_show->student_email}}</td>
                                  <td><a href="/students/{{$data_show->id}}/edit" class="btn btn-success">Edit</a>|{!! Form::open(['url' => '/students/'.$data_show->id,'method'=>'Delete']) !!}
                                    <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure?')">Delete</button>
                                    {!! Form::close() !!}</td>
                                </tr>
                              </tbody>
                              @endforeach
                            </table>
                             <!-- page paginate add -->
        {{$students->links()}} 
    <!-- database table show ends -->             
            </div>         
        </fieldset> <!--col2-set-->
    </div> <!--account-login-->
  </div><!--main-container-->
          
</div> <!--col1-layout-->

        @endsection('content')