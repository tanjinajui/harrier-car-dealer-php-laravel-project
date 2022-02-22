<!-- header and footer file master include -->
@extends('layouts.includes.master')
<!-- title set -->
@section('title','Blog_Details')
@section('content')

<div class="page-heading">
    <div class="container">
      <div class="row">
        <div class="col-xs-12">
       <div class="page-title"><h2>Blog</h2></div>
        </div>
        <!--col-xs-12-->
      </div>
      <!--row-->
    </div>
    <!--container-->
  </div>    	
<!-- BEGIN Main Container -->  
       <div class="main-container col2-right-layout">
	       <div class="main container"> 
	        <div class="row">                          
 <div class="col-left sidebar col-sm-3 blog-side">
      <div class="block widget_search"><form id="searchform" action="#" method="get">
	<div class="input-group">
	   <input type="text" name="s" id="s" placeholder="Search For" class="input-text" autocomplete="off">
	   <div class="input-group-append">
		  <button type="submit" class="thm-search"><i class="fa fa-search"></i></button>
	   </div>
	</div>
</form>
</div>
        <div id="secondary" class="widget_wrapper13" role="complementary">
          <div id="recent-posts-4" class="popular-posts widget block" style="visibility: visible;">
            <h2 class="widget-title">Most Popular Posts</h2>
              <ul class="posts-list unstyled clearfix">
                @foreach(App\Posts::orderBy('view','desc')->get()->take(2) as $popular_post)
                <li>
          <figure class="featured-thumb"> <a href="/blogDetails/{{$popular_post->id}}"> <img src="{{asset('images/post_picture/'.$popular_post->post_picture)}}" alt="blog image"> </a> </figure>
                  <!--featured-thumb-->
                  <div class="content-info">
                    <h4><a href="/blogDetails/{{$popular_post->id}}" title="Lorem ipsum dolor sit amet">{{$popular_post->post_title}}</a></h4>
                    <p class="post-meta">
                      <time class="entry-date">{{$popular_post->year}}.</time>
                      <span class="count">{{$popular_post-> view}}</span></p></p>
                  </div>
                </li>               
                 @endforeach 
              </ul>
     
            <!--widget-content--> 
          </div>
          <div id="categories-2" class="widget widget_categories block" style="visibility: visible;">
            <h2 class="widget-title">Categories</h2>
          <ul>
              @foreach(App\Categories::all() as $cat)
              <li><a href="#">{{$cat->category}}</a> <span class="count">2</span></li>
               @endforeach
            </ul>
          </div>
          <!-- Banner Ad Block -->
<div class="custom-slider">
          <div>
            <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
              <ol class="carousel-indicators">
                <li class="active" data-target="#carousel-example-generic" data-slide-to="0"></li>
                <li data-target="#carousel-example-generic" data-slide-to="1" class=""></li>
                <li data-target="#carousel-example-generic" data-slide-to="2" class=""></li>
              </ol>
              <div class="carousel-inner">
                <div class="item active"><img src="images/slide3.jpg" alt="slide3">
                  <div class="carousel-caption">
                    <h3><a title=" Sample Product" href="product-detail.html">50% OFF</a></h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                    <a class="link" href="#">Buy Now</a></div>
                </div>
                <div class="item"><img src="images/slide1.jpg" alt="slide1">
                  <div class="carousel-caption">
                    <h3><a title=" Sample Product" href="product-detail.html">Hot collection</a></h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                  </div>
                </div>
                <div class="item"><img src="images/slide2.jpg" alt="slide2">
                  <div class="carousel-caption">
                    <h3><a title=" Sample Product" href="product-detail.html">Summer collection</a></h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                  </div>
                </div>
              </div>
              <a class="left carousel-control" href="#carousel-example-generic" data-slide="prev"> <span class="sr-only">Previous</span> </a> <a class="right carousel-control" href="#carousel-example-generic" data-slide="next"> <span class="sr-only">Next</span> </a></div>
          </div>
        </div>
          <!-- Banner Text Block -->
          
          <div class="block widget_recent_entries">		<h2 class="widget-title">Recent Posts</h2>
            <ul>
             @foreach(App\Posts::orderBy('id','desc')->get()->take(3) as $recent_post)
              <li><a href="/blogDetails/{{$recent_post->id}}">{{$recent_post->post_title}}</a></li>@endforeach                           
            </ul> 
		      </div>
        
        <div class="block widget_recent_comments">
  <h2 class="widget-title">Recent Comments</h2>
  <ul id="recentcomments">
@foreach(App\Comments::orderBy('id','desc')->get()->take(5) as $cmt)
    <li class="recentcomments"><span class="comment-author-link">{{$cmt->name}}</span> on <a href="#">{{$cmt->comment}}</a></li>
@endforeach
  </ul>
</div>
          

          </div>
      
      </div>                           
<div class="col-main col-sm-9 main-blog" style="visibility: visible;">
  	<!--<div class="page-title"><h2></h2></div>-->
<div id="main" class="blog-wrapper">
    
	<div id="primary" class="site-content">
		<div id="content" role="main">
							<article id="post-29" class="blog_entry clearfix">
					
					<div class="entry-content">
						<div class="featured-thumb"><a href="#"><img src="{{asset('images/post_picture/'.$data->post_picture)}}" alt="blog-img4"></a></div>
                        <header class="blog_entry-header clearfix">
                                          <div class="blog_entry-header-inner">
						<h1 class="blog_entry-title">{{$data->post_title}}</h1>
                                          </div> <!--blog_entry-header-inner-->
					</header> <!--blog_entry-header clearfix-->
                     
<div class="entry-content">
<ul class="post-meta">
    <li><i class="fa fa-user"></i>posted by <a href="#">admin</a> </li>
    <li><i class="fa fa-comments"></i><a href="#">8 comments</a> </li>
    <li><i class="fa fa-clock-o"></i><span class="day">12</span> <span class="month">Feb</span></li>
  </ul>
    <div class="thm-post">
<p style="text-align: justify;">{!! $data->post_description !!}</p>
</div>					</div>
					</div>
				</article>
              <div class="comment-content">
                  <div class="comments-wrapper">
                    <h3> Comments </h3>
                    <ol class="commentlist">
                      @foreach(App\Comments::where('posts_id','=',$data->id)->get() as $comment)

                      <li class="comment">
                      <div>
                      <img alt="" src="images/member1.png" class="avatar avatar-60 photo">
                      <div class="comment-text">
                      <div class="ratings">
                        <div class="rating-box">
                          <div style="width:100%" class="rating"></div>
                        </div>
                                            
                      </div>
                      <p class="meta">
                      <strong>{{$comment->name}}</strong> 
                      <span>–</span> <time>{{$comment->created_at}}</time>
                      </p>
                      <div class="description"><p> {{$comment->comment}}</p>
                      </div>
                      </div>
                      </div>
                      </li>
                      @endforeach
                      <!-- #comment-## -->
                      </ol>
                <!--commentlist--> 
              </div>
                    <!--comments-wrapper-->
                     <!-- include message page -->
                        @include('messages.message')
                    <div class="comments-form-wrapper comment-respond">
                      <h3>Leave A reply</h3>
                      <p class="comment-notes"><span id="email-notes">Your email address will not be published.</span> Required fields are marked <span class="required">*</span></p>
                      <form class="comment-form" method="POST" action="/comment">
                        
                        {{csrf_field()}}
                        <div class="field">
                          <label for="name">Name<em class="required">*</em></label>
                          <input type="text" class="input-text" title="Name" value="" name="name" placeholder="Name" required="">
                        </div>
                        <div class="field">
                          <label for="email">Email<em class="required">*</em></label>
                          <input type="email" class="input-text validate-email" title="Email"  id="email" name="email" placeholder="Email Address" required="">
                        </div>
                         <div class="field">
                          <label for="email">Website<em class="required">*</em></label>
                          <input type="text" class="input-text validate-email" title="Email" id="email" name="Website" placeholder="Website" required="">
                        </div>
                        <div class="clear"></div>
                        <div class="field aw-blog-comment-area">
                          <label for="comment">Comment<em class="required">*</em></label>
                          <textarea rows="5" cols="50" class="input-text" title="Comment" id="comment" name="comment" placeholder="Comment" required=""></textarea>
                        </div>
                        <div style="width:96%" class="button-set">
                          <input type="hidden" value="{{$data->id}}" name="posts_id">
                          <button type="submit" class="bnt-comment"><span><span>Add Comment</span></span></button>
                        </div>
                      </form>
                    </div>
                    <!--comments-form-wrapper clearfix--> 
                    
                  </div>
							
		</div>
	</div>

</div> <!--#main wrapper grid_8-->

        

  </div> <!--col-main col-sm-9-->
            </div>    
	       </div><!--main-container-->

        </div> <!--col2-layout-->
@endsection