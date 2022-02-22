@extends('layouts.includes.master')
@section('title', 'New_Post')
@section('content')

<div class="page-heading">
    <div class="container">
      <div class="row">
        <div class="col-xs-12">
          <div class="page-title">
           <h2>About</h2>
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
        <!-- <div class="heading text-center">
          <h3><a href="/abouts">View All Posts</a></h3>
           registration heading field   
          <h1>Category Add</h1>
        </div>  -->
      <!--page-title-->
      <form action="/abouts" method="POST" enctype="multipart/form-data">
    <!-- form-part Starts -->
        <div class="col-md-3"></div>
        <fieldset class="col2-set ">
            <div class="col-1 new-users">               
               <!-- About-title field -->
              <div class="form-group">
                 <!-- include message page -->
                @include('messages.message')
                {{csrf_field()}}
                <label for="about_title">About Title:</label>
                <input type="text" name="about_title" class="form-control" id="about_title" placeholder="About Tiltle">
              </div> 
                <!-- About-sales manager name field -->
                <div class="form-group">
                  <label for="sales_manager_name">Sales manager Name:</label>
                  <input type="text" name="sales_manager_name" class="form-control" id="sales_manager_name" placeholder="Sales manager name">
                </div>
                <!-- About manager name field -->
                <div class="form-group">
                  <label for="manager_name">Manager Name:</label>
                  <input type="text" name="manager_name" class="form-control" id="manager_name" placeholder="manager name">
                </div>
                  <!-- About-title field -->
                <div class="form-group">
                  <label for="about_description">About Description:</label>
                    <textarea name="about_description" id="summernote" placeholder="About test Description" class="form-control"></textarea>
                </div>  
                  <!-- About-_picture field -->
                <div class="form-group">
                  <label for="about_picture">About Picture:</label>
                    <input type="file" name="about_picture" class="form-control-file" id="about_picture">
                </div> 
                <!-- Sales_manager_picture field -->
                <div class="form-group">
                  <label for="sales_manager_picture">Sales Manager Picture:</label>
                    <input type="file" name="sales_manager_picture" class="form-control-file" id="sales_manager_picture">
                </div> 
                <!-- Manager-_picture field -->
                <div class="form-group">
                  <label for="manager_picture">Manager Picture:</label>
                    <input type="file" name="manager_picture" class="form-control-file" id="manager_picture">
                </div>                          
              <input type="submit" name="create_about" class="btn btn-primary btn-user btn-block mt-5" value="About Add">
          </div>         
        </fieldset> <!--col2-set-->
      </form>
    
  </div><!--main-container-->
          
</div> <!--col1-layout-->


@endsection('content')


