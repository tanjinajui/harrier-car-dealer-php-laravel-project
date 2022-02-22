@extends('layouts.includes.master')
@section('title', 'Multiple_Data_view')
@section('content')

<div class="page-heading">
    <div class="container">
      <div class="row">
        <div class="col-xs-12">
          <div class="page-title">
           <h2>Multiple Data View</h2>
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
          <h1>View Multiple Data</h1>
         <h3><a href="/multipleDataView/create">Multiple Data create</a></h3>
        </div>
     
      <!--page-title-->
        <fieldset class="col2-set ">
            <div class="col-1 new-users"> 
              <!-- include message page -->
                @include('messages.message')
          <table class="table table-dark table-bordered table-hover">
                        <thead class="table-dark">
                          <tr>
                            <th scope="col">SL</th>
                            <th scope="col">Customer Name</th>
                            <th scope="col">Order Id</th>
                            <th scope="col">Edit</th>
                            <th scope="col">Delete</th>
                          </tr>
                        </thead>
                       
                        <tbody>
                          @foreach($orders as $key=>$data)
                          <tr>
                            <td>{{++$key}}</td>
                            <td>{{$data->customer_name}}</td>
                            <td><a href="/items/{{$data->id}}">{{$data->id}}</a></td>
                            <td><a href="/multipleDataView/{{$data->id}}/edit" class="btn btn-success">Edit</a></td>
                            <td>{!! Form::open(['url' => '/multipleDataView/'.$data->id,'method'=>'Delete']) !!}
      <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure?')">Delete</button>
      {!! Form::close() !!}</td>
                          </tr>
                          @endforeach
                        </tbody>
                    
                      </table>
                        <!-- database table show ends -->
                       <!-- page paginate add -->
                    
            </div>         
        </fieldset> <!--col2-set-->
    </div> <!--account-login-->
  </div><!--main-container-->
          
</div> <!--col1-layout-->


@endsection('content')