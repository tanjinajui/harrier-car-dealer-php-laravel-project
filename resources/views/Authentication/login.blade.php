@extends('layouts.includes.master')
@section('title', 'New_Registration')
@section('content')

<div class="page-heading">
    <div class="container">
      <div class="row">
        <div class="col-xs-12">
          <div class="page-title">
           <h2>Login Account</h2>
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
      <form action="/loginUser" method="POST">
    <!-- form-part Starts -->
        <div class="col-md-3"></div>
        <fieldset class="col2-set ">
            <div class="col-1 new-users"> 
                {{csrf_field()}}
                <!-- email field -->
                <div class="form-group">
                  <!-- include message page -->
                  @include('messages.message')
                  <label for="email">Email:</label>
                  <input type="email" class="form-control" id="email" placeholder="Enter email" name="email">
                </div>
                <!-- password field -->
                <div class="form-group">
                  <label for="password">Password:</label>
                  <input type="password" class="form-control" id="inputpassword" placeholder="Enter password" name="password">
                  <button id="eyeopen" onclick="showpassword()"><span class="glyphicon glyphicon-eye-open"></span></button>
                  <button id="eyeclose" style="display: none;" onclick="showpassword()"><span class="glyphicon glyphicon-eye-close"></span></button>
                </div>
              <!-- button field -->
                <button type="submit" class="btn btn-default">login</button>   
            </div>         
        </fieldset> <!--col2-set-->
      </form>
   
    </div> <!--account-login-->
  </div><!--main-container-->
          
</div> <!--col1-layout-->
 <script type="text/javascript">
   function showpassword(){
    var data=document.getElementById('inputpassword');
    if (data.type=='password') {
      data.type='text';
      eyeopen.style.display="none";
      eyeclose.style.display="block";
    }else{
      data.type='password';
      eyeopen.style.display="block";
      eyeclose.style.display="none";
    }
   }
 </script>

@endsection('content')