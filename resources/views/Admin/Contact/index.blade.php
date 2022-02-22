@extends('layouts.includes.master')
@section('title', 'Contact_view')
@section('content')

<div class="page-heading">
    <div class="container">
      <div class="row">
        <div class="col-xs-12">
          <div class="page-title">
           <h2>All Contact View</h2>
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
          <h1>View All Contact</h1>
        </div>
     
      <!--page-title-->
        <fieldset class="col2-set ">
          <div class="col-md-3"></div>
            <div class="col-1 new-users"> 
              <!-- include message page -->
                @include('messages.message')
          <table class="table table-dark table-bordered table-hover">
                        <thead class="table-dark">
                          <tr>
                            <th scope="col">SL</th>
                            <th scope="col">Name</th>
                            <th scope="col">Email</th>
                            <th scope="col">Contact</th>
                            <th scope="col">Message</th>         
                            <th scope="col">Delete</th>         
                          </tr>
                        </thead>
                        <?php $i= $contacts->perPage()*($contacts->currentPage()-1); ?>
                        <!-- foreach loops database er data show -->
                        @foreach($contacts as $key=>$data_show)
                        <tbody>
                          <tr>
                            <td>{{++$i}}</td>
                            <td>{{$data_show->name}}</td>                            
                            <td>{{$data_show->email}}</td>                            
                            <td>{{$data_show->contact}}</td>                            
                            <td>{{$data_show->message}}</td>                            
                            <td>{!! Form::open(['url' => 'contacts/'.$data_show->id,'method'=>'Delete']) !!}
                            <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure?')">Delete</button>
                            {!! Form::close() !!}</td>
                          </tr>
                        </tbody>
                        @endforeach
                      </table>
                        <!-- database table show ends -->
                       <!-- page paginate add -->
                      {{$contacts->links()}}
            </div>         
        </fieldset> <!--col2-set-->
    </div> <!--account-login-->
  </div><!--main-container-->
          
</div> <!--col1-layout-->


@endsection('content')