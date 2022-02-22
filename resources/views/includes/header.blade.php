<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>@yield('title')|University_management</title>   
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet">
        <!-- Custom fonts for this template-->
        <link href="css/sb-admin-2.min.css" rel="stylesheet">
        <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

        <!-- Data Table Bootstrap cse -->
        <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.css">
        <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.21/css/dataTables.bootstrap4.min.css">

        <link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet">
        <link href="{{asset('css/bootstrap-theme.css')}}" rel="stylesheet">
        <link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet">
          
        <!-- CSS file add styles for this template-->
        <link rel="stylesheet" type="text/css" href="{{asset('css/style.css')}}">
    </head>
    <body>
        <!-- header-part starts -->
   <div class="container">
       <div class="row">
            <div class="navbar-header ">
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                          <span class="sr-only">Toggle navigation</span>
                          <span class="icon-bar"></span>
                          <span class="icon-bar"></span>
                          <span class="icon-bar"></span>
                        </button>
                        <a class="navbar-brand logo" href="/welcome"><img src="{{asset('images/university_management.png')}}" alt="logo.png"></a>
                     </div>

            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
              <ul class="nav navbar-nav navbar-right menu">
                <li><a href="/welcome">Home</a>&nbsp;</li>
                <li><a href="/departments">Department</a>&nbsp;</li>
                <li><a href="/students">Students</a>&nbsp;</li>
                <li><a href="/admissions">Admission</a>&nbsp;</li>
                </ul>
            </div>
       </div>
   </div>
    <!-- header-part ends -->
        <!-- <table>
            <tr><a href="/departments">Department</a>&nbsp;</tr>
            <tr><a href="/students">Students</a>&nbsp;</tr>
            <tr><a href="/admissions/create">Admission</a>&nbsp;</tr>
        </table> -->