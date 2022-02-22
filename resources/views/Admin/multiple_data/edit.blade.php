@extends('layouts.includes.master')
@section('title', 'New_Multiple_data_add')
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
          <h3><a href="/multipleDataView">View All Multiple Data</a></h3>
          <!-- registration heading field -->   
          <!-- <h1>Category Add</h1> -->
        </div>
      
    <!-- form-part Starts -->
        <fieldset class="col2-set ">
            <div class="col-1 new-users"> 
               <!-- include message page -->
              @include('messages.message')
               
              <div class="container">
              <!-- form starts -->
              <!-- laravelcollected html form starts -->
                {!! Form::open(['url' => '/multipleDataView/'.$data->id,'method'=>'PATCH']) !!}
                  <section>
                    <div class="row">
                      <div class="col-md-3"></div>
                      <!-- customer-name field -->
                      <div class="col-md-6">
                        <div class="panel panel-header">
                          <input type="text" name="customer_name" class="form-control" placeholder="Please enter your customer Name" value="{{$data->customer_name}}">
                        </div>
                        <!-- customer-address field -->
                        <div class="panel panel-header">
                          <input type="text" name="customer_address" class="form-control" placeholder="Please enter your customer address" value="{{$data->customer_address}}">
                        </div>
                       </div> 
                       
                      
                    </div>
                    <div class="row">
                      <div class="col-md-3"></div>
                      <div class="col-md-6">
                      <div class="panel panel-footer">
                          <table class="table table-borderd">
                            <thead>
                              <tr>
                                <th>Product Name</th>
                                <th>Brand</th>
                                <th>Quantity</th>
                                <th>Budget</th>
                                <th>Amount</th>
                                <th><a href="#" class="addRow"><i class="glyphicon glyphicon-plus"></i></a></th>
                              </tr>
                            </thead>
                            <tbody>
                              @foreach($data->items as $item)
                              <input type="hidden" name="id[]" value="{{$item->id}}">
                              <tr>
                                <td><input type="text" name="product_name[]" value="{{$item->product_name}}" class="form-control" ></td>
                                <td><input type="text" name="brand[]" value="{{$item->brand}}" class="form-control brand"></td>
                                <td><input type="text" name="quantity[]" value="{{$item->quantity}}" class="form-control quantity" ></td>             
                                <td><input type="text" name="budget[]" value="{{$item->budget}}" class="form-control budget" ></td>
                                <td><input type="text" name="amount[]" value="{{$item->amount}}" class="form-control amount" ></td>
                                <td><a href="#" class="btn btn-danger remove"><i class="glyphicon glyphicon-remove"></i></a></td>
                              </tr>
                              @endforeach
                            </tbody>
                            <!-- <tfoot>
                              <tr>
                                <td style="border:none;"></td>
                                <td style="border:none;"></td>
                                <td style="border:none;"></td>
                                <td >Total</td>
                                <td><b class="total"></b></td>
                                <td><input type="submit" name="" value="Update" class="btn btn-success"></td>
                              </tr>
                            </tfoot> -->
                            
                          </table>
                          <input type="submit" name="" value="Update" class="btn btn-success">
                      </div>
                    </div>  
                    </div>
                  </section>
                <!-- laravelcollected html form ends -->
                {!! Form::close() !!}
               
              </div>                    
              
          </div>         
        </fieldset> <!--col2-set-->
    
  </div><!--main-container-->
          
</div> <!--col1-layout-->


@endsection('content')


