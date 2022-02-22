@extends('layouts.includes.master')
@section('title', 'New_Registration')
@section('content')

<div class="page-heading">
    <div class="container">
      <div class="row">
        <div class="col-xs-12">
          <div class="page-title">
           <h2>Category Add</h2>
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
          <!-- <h1>Category Add</h1> -->
        </div>
      <!--page-title-->
      <form action="/categories" method="POST">
    <!-- form-part Starts -->
        <div class="col-md-3"></div>
        <fieldset class="col2-set ">
            <div class="col-1 new-users"> 
              <div class="form-group">
                {{csrf_field()}}
                 <!-- include message page -->
                  @include('messages.message')
                <!-- first name field -->
                <label for="category">Category Name:</label>
                <input type="text" class="form-control" id="category" placeholder="Enter category" name="category">
              </div>
              <!-- last name field -->
              <div class="form-group">
                <label for="category_code">Category Code:</label>
                <input type="text" class="form-control" id="category_code" placeholder="Enter category code" name="category_code">
              </div>          
              <!-- button field -->
              <button type="submit" class="btn btn-default">Add</button> 
            </div>         
        </fieldset> <!--col2-set-->
      </form>
      <!--page-title-->
        <div class="col-md-3"></div>
        <fieldset class="col2-set ">
            <div class="col-1 new-users"> 
              <table class="table table-bordered  table-hover">
            <thead class="table-dark">
              <tr>
                <th scope="col">SL</th>
                <th scope="col">Category</th>
                <th scope="col">Category Code</th>
                <th scope="col">Edit</th>
                <th scope="col">Delete</th>
              </tr>
            </thead>
            <?php $i= $categories->perPage()*($categories->currentPage()-1); ?>
            <!-- foreach loops database er data show -->
            @foreach($categories as $key=>$data_show)
            <tbody>
              <tr>
                <td>{{++$i}}</td>
                <td>{{$data_show->category}}</td>
                <td>{{$data_show->category_code}}</td>
                <td><a href="/categories/{{$data_show->id}}/edit" class="btn btn-success">Edit</a></td>
                <td>{!! Form::open(['url' => '/categories/'.$data_show->id,'method'=>'Delete']) !!}
                <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure?')">Delete</button>
                {!! Form::close() !!}</td>
              </tr>
            </tbody>
            @endforeach
          </table>
            <!-- database table show ends -->
           <!-- page paginate add -->
          {{$categories->links()}}
            </div>         
        </fieldset> <!--col2-set-->
    </div> <!--account-login-->
  </div><!--main-container-->
          
</div> <!--col1-layout-->


@endsection('content')