@extends('layouts.includes.master')
@section('title', 'New_Registration')
@section('content')

<div class="page-heading">
    <div class="container">
      <div class="row">
        <div class="col-xs-12">
          <div class="page-title">
           <h2>Category Edit</h2>
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
     
      <!-- form-part Starts -->
        {!! Form::open(['url' => '/categories/'.$data_show->id,'method'=>'PATCH']) !!}
        <div class="col-md-3"></div>
        <fieldset class="col2-set ">
            <div class="col-1 new-users"> 
                <div class="form-group">
                  <!-- include message page -->
           @include('messages.message')
            <!-- first name field -->
            <label for="category">Category Name:</label>
            <input type="text" class="form-control" id="category" placeholder="Enter category" name="category" value="{{$data_show->category}}">
          </div>
          <!-- last name field -->
          <div class="form-group">
            <label for="category_code">Category Code:</label>
            <input type="text" class="form-control" id="category_code" placeholder="Enter category code" name="category_code" value="{{$data_show->category_code}}">
          </div>
          
          <!-- button field -->
          <button type="submit" class="btn btn-default">Update</button>
            </div>         
        </fieldset> <!--col2-set-->
       <!-- laravelcollected html form ends -->
        {!! Form::close() !!}
        <!-- form-part ends -->
   
    </div> <!--account-login-->
  </div><!--main-container-->
          
</div> <!--col1-layout-->


@endsection('content')