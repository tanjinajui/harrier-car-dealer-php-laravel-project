@extends('layouts.includes.master')
@section('title', 'About_view')
@section('content')

<div class="page-heading">
    <div class="container">
      <div class="row">
        <div class="col-xs-12">
          <div class="page-title">
           <h2>All About View</h2>
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
          <h1>View All About</h1>
          <h3><a href="/abouts/create">Add New Abouts</a></h3>
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
                            <th scope="col">Title</th>
                            <th scope="col">Sales manager</th>
                            <th scope="col">Manager</th>
                            <th scope="col">Description</th>
                            <th scope="col">About picture</th>
                            <th scope="col">Sales manager picture</th>
                            <th scope="col">Manager picture</th>
                            <th scope="col">Edit</th>
                            <th scope="col">Delete</th>
          
                          </tr>
                        </thead>
                        <?php $i= $abouts->perPage()*($abouts->currentPage()-1); ?>
                        <!-- foreach loops database er data show -->
                        @foreach($abouts as $key=>$data_show)
                        <tbody>
                          <tr>
                            <td>{{++$i}}</td>
                            <td>{{$data_show->about_title}}</td>                            
                            <td>{{$data_show->sales_manager_name}}</td>                            
                            <td>{{$data_show->manager_name}}</td>                            
                              <td>{!! substr($data_show->about_description,0,100) !!}</td>
                            <td><img src="{{asset('images/about_picture/'.$data_show->about_picture)}}" width="100"></td>
                            <td><img src="{{asset('images/sales_manager_picture/'.$data_show->sales_manager_picture)}}" width="100"></td>
                            <td><img src="{{asset('images/manager_picture/'.$data_show->manager_picture)}}" width="100"></td>
                            <td><a href="/abouts/{{$data_show->id}}/edit" class="btn btn-success">Edit</a></td>
                            <td>{!! Form::open(['url' => 'abouts/'.$data_show->id,'method'=>'Delete']) !!}
                            <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure?')">Delete</button>
                            {!! Form::close() !!}</td>
                          </tr>
                        </tbody>
                        @endforeach
                      </table>
                        <!-- database table show ends -->
                       <!-- page paginate add -->
                      {{$abouts->links()}}
            </div>         
        </fieldset> <!--col2-set-->
    </div> <!--account-login-->
  </div><!--main-container-->
          
</div> <!--col1-layout-->


@endsection('content')