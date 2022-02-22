@extends('layouts.includes.master')
@section('title', 'New_Post')
@section('content')

<div class="page-heading">
    <div class="container">
      <div class="row">
        <div class="col-xs-12">
          <div class="page-title">
           <h2>All Post View</h2>
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
          <h1>View All Poste</h1>
          <h3><a href="/posts/create">Add New Posts</a></h3>
        </div>
     
      <!--page-title-->
        <div class="col-md-3"></div>
        <fieldset class="col2-set ">
            <div class="col-1 new-users"> 
          <table class="table table-dark table-bordered table-hover">
                        <thead class="table-dark">
                          <tr>
                            <th scope="col">SL</th>
                            <th scope="col">Title</th>
                            <th scope="col">Category</th>
                            <th scope="col">Description</th>
                            <th scope="col">Post Picture</th>
                            <th scope="col">Action</th>
          
                          </tr>
                        </thead>
                        <?php $i= $posts->perPage()*($posts->currentPage()-1); ?>
                        <!-- foreach loops database er data show -->
                        @foreach($posts as $key=>$data_show)
                        <tbody>
                          <tr>
                            <td>{{++$i}}</td>
                            <td>{{$data_show->post_title}}</td>
                            <td>{{$data_show->categories->category}}</td>
                            <td>{!! substr($data_show->post_description,0,100) !!}</td>
                            <td><img src="{{asset('images/post_picture/'.$data_show->post_picture)}}" width="100"></td>
                            <td><a href="/posts/{{$data_show->id}}/edit" class="btn btn-success">Edit</a>|{!! Form::open(['url' => '/posts/'.$data_show->id,'method'=>'Delete']) !!}
                            <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure?')">Delete</button>
                            {!! Form::close() !!}
                            </td>
                          </tr>
                        </tbody>
                        @endforeach
                      </table>
                        <!-- database table show ends -->
                       <!-- page paginate add -->
                      {{$posts->links()}}
            </div>         
        </fieldset> <!--col2-set-->
    </div> <!--account-login-->
  </div><!--main-container-->
          
</div> <!--col1-layout-->


@endsection('content')