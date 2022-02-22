<!DOCTYPE html>
<html lang="en">

<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>Harrier Home Page</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="Default Description">
<meta name="keywords" content="fashion, store, E-commerce">
<meta name="robots" content="*">
<link rel="icon" href="#" type="image/x-icon">
<link rel="shortcut icon" href="#" type="image/x-icon">

<!-- CSS Style -->

<link rel="stylesheet" type="text/css" href="{{asset('frontend/stylesheet/bootstrap.min.css')}}">

<link rel="stylesheet" type="text/css" href="{{asset('frontend/stylesheet/font-awesome.css')}}" media="all">
<link rel="stylesheet" type="text/css" href="{{asset('frontend/stylesheet/bootstrap-select.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('frontend/stylesheet/revslider.css')}}" >
<link rel="stylesheet" type="text/css" href="{{asset('frontend/stylesheet/owl.carousel.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('frontend/stylesheet/owl.theme.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('frontend/stylesheet/jquery.bxslider.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('frontend/stylesheet/jquery.mobile-menu.css')}}">
<!-- include summernote css/js -->


   <!-- include libraries(jQuery, bootstrap) -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" rel="stylesheet">
    

    <!-- include summernote css/js -->
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">
  

<link rel="stylesheet" type="text/css" href="{{asset('frontend/stylesheet/style.css')}}" media="all">
<link rel="stylesheet" type="text/css" href="{{asset('frontend/stylesheet/responsive.css')}}" media="all">

<link href='http://fonts.googleapis.com/css?family=Open+Sans:400italic,600italic,700italic,400,600,700,800' rel='stylesheet' type='text/css'>
<link href="https://fonts.googleapis.com/css?family=Teko:300,400,500,600,700" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Saira+Condensed:300,400,500,600,700,800" rel="stylesheet">
</head>
<body>
<div id="page">
  <header>
    <div class="container">
      <div class="row">
        <div id="header">
          <div class="header-container">
            <div class="header-logo"> <a href="index-2.html" title="Car HTML" class="logo">
              <div><img src="{{asset('frontend/images/logo.png')}}" alt="Car Store"></div>
              </a> </div>
            <div class="header__nav">
              <div class="header-banner">
                <div class="col-lg-6 col-xs-12 col-sm-6 col-md-6">
                  <div class="assetBlock">
                    <div style="height: 20px; overflow: hidden;" id="slideshow">
                      <p style="display: block;">Hot days! - <span>50%</span> Get ready for summer! </p>
                      <p style="display: none;">Save up to <span>40%</span> Hurry limited offer!</p>
                    </div>
                  </div>
                </div>
                <div class="col-lg-6 col-lg-6 col-xs-12 col-sm-6 col-md-6 call-us"><i class="fa fa-clock-o"></i> Mon - Fri : 09am to 06pm <i class="fa fa-phone"></i> +1 800 789 0000</div>
              </div>
              <div class="fl-header-right">
                <div class="fl-links">
                  <div class="no-js"> <a title="" class="clicker"></a>
                    <div class="fl-nav-links">
                      <!-- <div class="language-currency">
                        <div class="fl-language">
                        <h3>Language</h3>
                          <ul class="lang">
                            <li><a href="#"> <img src="images/english.png" alt="English"> <span>English</span> </a></li>
                            <li><a href="#"> <img src="images/francais.png" alt="French"> <span>French</span> </a></li>
                            <li><a href="#"> <img src="images/german.png" alt="German"> <span>German</span> </a></li>
                          </ul>
                        </div> -->
                        <!--fl-language--> 
                        <!-- END For version 1,2,3,4,6 --> 
                        <!-- For version 1,2,3,4,6 -->
                       <!--  <div class="fl-currency">
                         <h3>Currency</h3>
                          <ul class="currencies_list">
                            <li><a href="#" title="EGP"> <strong>£</strong> Pound Sterling</a></li>
                            <li><a href="#" title="EUR"> <strong>€</strong> Euro</a></li>
                            <li><a href="#" title="USD"> <strong>$</strong> US Dollar</a></li>
                          </ul>
                        </div> -->
                        <!--fl-currency--> 
                        <!-- END For version 1,2,3,4,6 --> 
                      <!-- </div> -->
                       <h3>My Acount</h3>
                      <ul class="links">
                        @if(Sentinel::check())
                        <li><a href="/logout" title="logout">Logout</a></li>
                        @else
                        <li><a href="/loginUser" title="My Account">Login</a></li>
                        <li><a href="/signUp" title="Wishlist">Register</a></li>
                        @endif
                        </ul>
                    </div>
                  </div>
                </div>
                <div class="fl-cart-contain">
                  <div class="mini-cart">
                    <div class="basket"> <a href="shopping-cart.html"><span> 2 </span></a> </div>
                    <div class="fl-mini-cart-content" style="display: none;">
                      <div class="block-subtitle">
                        <div class="top-subtotal">2 items, <span class="price">$259.99</span> </div>
                        <!--top-subtotal--> 
                        <!--pull-right--> 
                      </div>
                      <!--block-subtitle-->
                      <ul class="mini-products-list" id="cart-sidebar">
                        <li class="item first">
                          <div class="item-inner"><a class="product-image" title="timi &amp; leslie Sophia Diaper Bag, Lemon Yellow/Shadow White" href="#l"><img alt="timi &amp; leslie Sophia Diaper Bag, Lemon Yellow/Shadow White" src="products-images/p4.jpg"></a>
                            <div class="product-details">
                              <div class="access"><a class="btn-remove1" title="Remove This Item" href="#">Remove</a> <a class="btn-edit" title="Edit item" href="#"><i class="icon-pencil"></i><span class="hidden">Edit item</span></a> </div>
                              <!--access--> 
                              <strong>1</strong> x <span class="price">$179.99</span>
                              <p class="product-name"><a href="accessories-detail.html">timi &amp; leslie Sophia Diaper Bag...</a></p>
                            </div>
                          </div>
                        </li>
                        <li class="item last">
                          <div class="item-inner"><a class="product-image" title="JP Lizzy Satchel Designer Diaper Bag - Slate Citron" href="#"><img alt="JP Lizzy Satchel Designer Diaper Bag - Slate Citron" src="products-images/p3.jpg"></a>
                            <div class="product-details">
                              <div class="access"><a class="btn-remove1" title="Remove This Item" href="#">Remove</a> <a class="btn-edit" title="Edit item" href="#"><i class="icon-pencil"></i><span class="hidden">Edit item</span></a> </div>
                              <!--access--> 
                              <strong>1</strong> x <span class="price">$80.00</span>
                              <p class="product-name"><a href="accessories-detail.html">JP Lizzy Satchel Designer Diaper Ba...</a></p>
                            </div>
                          </div>
                        </li>
                      </ul>
                      <div class="actions">
                        <button class="btn-checkout" title="Checkout" type="button" onClick="window.location=checkout.html"><span>Checkout</span></button>
                      </div>
                      <!--actions--> 
                    </div>
                    <!--fl-mini-cart-content--> 
                  </div>
                </div>
                <!--mini-cart-->
                <div class="collapse navbar-collapse">
                  <form class="navbar-form" role="search">
                    <div class="input-group">
                      <input type="text" class="form-control" placeholder="Search">
                      <span class="input-group-btn">
                      <button type="submit" class="search-btn"> <span class="glyphicon glyphicon-search"> <span class="sr-only">Search</span> </span> </button>
                      </span> </div>
                  </form>
                </div>
                <!--links--> 
              </div>
              <div class="fl-nav-menu">
                <nav>
                  <div class="mm-toggle-wrap">
                    <div class="mm-toggle"><i class="fa fa-bars"></i><span class="mm-label">Menu</span> </div>
                  </div>
                  <div class="nav-inner"> 
                    <!-- BEGIN NAV -->
                    <ul id="nav" class="hidden-xs">
                      <li class="active"> <a class="level-top" href="#"><span>Home</span></a></li>
                      <li class="active"> <a class="level-top" href="/abouts"><span>About</span></a></li>
                      <li class="active"> <a class="level-top" href="/blogs"><span>Blog</span></a></li>
                      <li class="active"> <a class="level-top" href="/contacts/create"><span>Contact Us</span></a></li>
                      
                      @if(Sentinel::check() AND Sentinel::getUser()->roles()->first()->slug=="admin")
                      <li class="mega-menu "> <a class="level-top" href="/abouts"><span>About</span></a> </li>
                      <li class="mega-menu "> <a class="level-top" href="/categories"><span>Category</span></a> </li>
                      <li class="mega-menu "> <a class="level-top" href="/posts"><span>Post</span></a> </li>
                      <li class="mega-menu "> <a class="level-top" href="/contacts"><span>Contact Us</span></a> </li>
                     
                      <li class="level0 parent drop-menu"> <a class="level-top" href="#"><span>Listing‎</span></a>
                        <ul class="level1">
                          <li class="level1 first"><a href="/departments"><span>Departments</span></a></li>
                          <li class="level1 nav-10-2"> <a href="/admissions"> <span>Amissions</span> </a> </li>
                          <li class="level1 nav-10-3"> <a href="/students"> <span>Students</span> </a> </li>
                          <li class="level1 nav-10-3"> <a href="/studentView"> <span>Student view</span> </a> </li>
                          <li class="level1 nav-10-3"> <a href="/multipleDataView"> <span>Multiple data view</span> </a> </li>
                           
                          <!-- <li class="level1 nav-10-3"> <a href="grid1.html"> <span>Accessories Grid</span> </a> </li>
                          <li class="level1 nav-10-4"> <a href="list1.html"> <span>Accessories List</span> </a> </li>
                          <li class="level1 first parent"><a href="car-detail.html"><span>Car Detail</span></a> </li>
                          <li class="level1 first parent"><a href="accessories-detail.html"><span>Accessories Detail</span></a> </li> -->
                        </ul>
                      </li>
                      @endif
                      
                     
                    </ul>
                    <!--nav--> 
                  </div>
                </nav>
              </div>
            </div>
            
            <!--row--> 
            
          </div>
        </div>
      </div>
    </div>
  </header>