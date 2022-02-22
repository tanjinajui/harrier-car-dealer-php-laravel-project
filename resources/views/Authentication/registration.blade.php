@extends('layouts.includes.master')
@section('title', 'New_Registration')
@section('content')

<div class="page-heading">
    <div class="container">
      <div class="row">
        <div class="col-xs-12">
		     <div class="page-title">
		     <h2>Create an Account</h2>
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
  		<!--page-title-->
        <form action="/signUp" method="POST" id="register-form">
        <div class="col-md-3"></div>
        <fieldset class="col2-set ">
            <div class="col-1 new-users"> 
		        <div class="form-group">
		          <!-- include message page -->
		         @include('messages.message')
		          {{csrf_field()}}
		          <!-- first name field -->
		          <label for="first_name">First Name:</label>
		          <input type="text" class="form-control" id="first_name" placeholder="Enter first name" name="first_name">
		        </div>
		        <!-- last name field -->
		        <div class="form-group">
		          <label for="last_name">Last Name:</label>
		          <input type="text" class="form-control" id="last_name" placeholder="Enter last name" name="last_name">
		        </div>
		        <!-- email field -->
		        <div class="form-group">
		          <label for="email">Email:</label>
		          <input type="email" class="form-control" id="email" placeholder="Enter email" name="email">
		        </div>
		        <!-- mobile field -->
		        <div class="form-group">
		          <label for="mobile">Mobile No:</label>
		          <input type="text" class="form-control" id="mobile" placeholder="Enter mobile" name="mobile">
		        </div>
		        <!-- password field -->
		        <div class="form-group">
		          <label for="password">Password:</label>
		          <input type="password" class="form-control" id="password" placeholder="Enter password" name="password">
		        </div>
		        <!-- confirm-password field -->
		        <div class="form-group">
		          <label for="confirm_password">Confirm Password:</label>
		          <input type="password" class="form-control" id="confirm_password" placeholder="Enter confirm password" name="confirm_password">
		        </div>
		        <button type="submit" class="btn btn-default">Submit</button>    
            </div>
        </div>
            
        </fieldset> <!--col2-set-->
    	</form>
   
		</div> <!--account-login-->
 	</div><!--main-container-->
          
</div> <!--col1-layout-->


@endsection('content')
