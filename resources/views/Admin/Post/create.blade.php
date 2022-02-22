@extends('layouts.includes.master')
@section('title', 'New_Post')
@section('content')

<div class="page-heading">
    <div class="container">
      <div class="row">
        <div class="col-xs-12">
          <div class="page-title">
           <h2>Post Add</h2>
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
          <h3><a href="/posts">View All Posts</a></h3>
          <!-- registration heading field -->   
          <!-- <h1>Category Add</h1> -->
        </div>
      <!--page-title-->
      <form action="/posts" method="POST" enctype="multipart/form-data">
    <!-- form-part Starts -->
        <div class="col-md-3"></div>
        <fieldset class="col2-set ">
            <div class="col-1 new-users"> 
              
               <!-- Post-title field -->
              <div class="form-group">
                 <!-- include message page -->
                @include('messages.message')
                {{csrf_field()}}
                <input type="text" name="post_title" class="form-control" id="post_title" placeholder="Post Tiltle">
              </div> 
                <!-- post-category name field -->
                <!-- onno table er data add -->
                <div class="form-group">
                    <select class="form-control" name="categories_id">
                      <option value="">Please Select Category</option>
                      @foreach($categories as $data_show)
                      <option value="{{$data_show->id}}">{{$data_show->category}}</option>
                      @endforeach
                    </select>
                  </div>
                  <!-- Post-title field -->
                <div class="form-group">
                    <textarea name="post_description" id="summernote" placeholder="Post test Description" class="form-control"></textarea>
                </div>  
                  <!-- Post-_picture field -->
                <div class="form-group">
                    <input type="file" name="post_picture" class="form-control-file" id="post_picture">
                </div>
                 <!-- Post-_date field -->
                <div class="form-group">
                    <input type="date" name="year" class="form-control" id="year">
                </div>                           
              <input type="submit" name="create_student" class="btn btn-primary btn-user btn-block mt-5" value="Post Add">
          </div>         
        </fieldset> <!--col2-set-->
      </form>
    
  </div><!--main-container-->
          
</div> <!--col1-layout-->


@endsection('content')


