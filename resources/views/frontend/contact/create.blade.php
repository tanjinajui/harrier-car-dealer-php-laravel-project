<!-- header and footer file master include -->
@extends('layouts.includes.master')
<!-- title set -->
@section('title','Contact Us')
@section('content') 
<div class="page-heading">
    <div class="container">
      <div class="row">
        <div class="col-xs-12">
        <div class="page-title">
<h2>Contact Us</h2>
</div>
        </div>
      </div>
    </div>
  </div>
  <!-- BEGIN Main Container col2-right -->
  <div class="main-container col2-right-layout">
    <div class="main container">
      <div class="row">
      	 <!-- include message page -->
      	   @include('messages.message')
        <div class="col-main col-sm-9 wow bounceInUp animated animated" style="visibility: visible;">
          <div id="messages_product_view"></div>
          <form action="/contacts" id="contactForm" method="POST">
          	
             
                {{csrf_field()}}
            <div class="static-contain">
              <fieldset class="group-select">
                <ul>
                  <li id="billing-new-address-form">
                    <fieldset class="">
                      <ul>
                        <li>
                          <div class="customer-name">
                            <div class="input-box name-firstname">
                              <label for="name"><em class="required">*</em>Name</label>
                              <br>
                              <input name="name" id="name" title="Name"  class="input-text required-entry" type="text">
                            </div>
                            <div class="input-box name-firstname">
                              <label for="email"><em class="required">*</em>Email</label>
                              <br>
                              <input name="email" id="email" title="Email" class="input-text required-entry validate-email" type="text">
                            </div>
                          </div>
                        </li>
                        <li>
                          <label for="contact">Contact No</label>
                          <br>
                          <input name="contact" id="contact" title="Contact" value="" class="input-text" type="text">
                        </li>
                        <li>
                          <label for="message"><em class="required">*</em>Message</label>
                          <br>
                          <textarea name="message" id="message" title="Message" class="required-entry input-text" cols="5" rows="3"></textarea>
                        </li>
                      </ul>
                    </fieldset>
                  </li>
                  <p class="require"><em class="required">* </em>Required Fields</p>
                  <input type="text" name="hideit" id="hideit" value="" style="display:none !important;">
                  <div class="buttons-set">
                    <button type="submit" title="Submit" class="button submit"><span><span>Send</span></span></button>
                  </div>
                </ul>
              </fieldset>
            </div>
          </form>
          
        </div>
        <aside class="col-right sidebar col-sm-3 wow bounceInUp animated animated" style="visibility: visible;">
          <div class="block block-company">
            <div class="block-title">Company</div>
            <div class="block-content">
              <ol id="recently-viewed-items">
                <li class="item odd"><a href="about-us.html">About Us</a></li>
                <li class="item even"><a href="#">Sitemap</a></li>
                <li class="item  odd"><a href="#">Terms of Service</a></li>
                <li class="item last"><a href="#">Search Terms</a></li>
                <li class="item last"><a href="contact-us.html"><strong>Contact Us</strong></a></li>
              </ol>
            </div>
          </div>
        </aside>
        <!--col-right sidebar--> 
      </div>
      <!--row--> 
    </div>
    <!--main-container-inner--> 
  </div>
  <!--main-container col2-left-layout--> 
  
 
 
  </div>
  <!-- For version 1,2,3,4,6 -->
@endsection