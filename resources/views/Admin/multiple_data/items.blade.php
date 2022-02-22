@extends('layouts.includes.master')
@section('title', 'Multiple_items_view')
@section('content')

<div class="page-heading">
    <div class="container">
      <div class="row">
        <div class="col-xs-12">
          <div class="page-title">
           <h2>Multiple items View</h2>
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
          <h1>View Multiple items</h1>
         <h3><a href="/multipleDataView">View All Multiple Data</a></h3>
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
                            <th scope="col">Product Name</th>
                            <th scope="col">Brand</th>
                            <th scope="col">Quantity</th>
                            <th scope="col">Budget</th>
                            <th scope="col">Total Amount</th>
                          </tr>
                        </thead>
                       
                        <tbody>
                          @foreach($items as $key=>$item)
                          <tr>
                            <td>{{++$key}}</td>
                            <td>{{$item->product_name}}</td>
                            <td>{{$item->brand}}</td>
                            <td>{{$item->quantity}}</td>
                            <td>{{$item->budget}}</td>
                            <td>{{$item->amount}}</td>
                           
                            
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