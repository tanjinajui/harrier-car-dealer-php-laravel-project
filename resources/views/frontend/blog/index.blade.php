<!-- header and footer file master include -->
@extends('layouts.includes.master')
<!-- title set -->
@section('title','Blog')
@section('content')

<div class="page-heading">
  <div class="container">
    <div class="row">
      <div class="col-xs-12">
        <div class="page-title">
          <h2>Blog</h2>
        </div>
      </div>
      <!--col-xs-12--> 
    </div>
    <!--row--> 
  </div>
  <!--container--> 
</div>

<!-- Go to www.addthis.com/dashboard to customize your tools -->
<div class="addthis_inline_share_toolbox"></div>
            
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
                      <time class="entry-date">{{$popular_post->year}}</time>
                      <span class="count">{{$popular_post-> view}}</span></p>
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
          
    <div class="block widget_recent_entries"><h2 class="widget-title">Recent Posts</h2>		
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
      <div class="col-main col-sm-9 main-blog">
        <div id="main" class="blog-wrapper">
          <div id="primary" class="site-content">
            <div id="content" role="main">
		        @foreach($blogs as $blog)       
              <article id="post-29" class="blog_entry clearfix wow bounceInUp animated animated animated" style="visibility: visible;">
               
                <div class="entry-content">
                  <div class="featured-thumb"><a href="/blogDetails/{{$blog->id}}"><img src="{{asset('images/post_picture/'.$blog->post_picture)}}" alt="blog-img3"></a></div>
                   <header class="blog_entry-header clearfix">
                  <div class="blog_entry-header-inner">
                    <h2 class="blog_entry-title"> <a href="/blogDetails/{{$blog->id}}" rel="bookmark">{{$blog->post_title}}</a> </h2>
                    
                  </div>
                  <!--blog_entry-header-inner--> 
                </header>
                  <div class="entry-content">
                  <ul class="post-meta">
                          <li><i class="fa fa-user"></i>posted by <a href="#">admin</a> </li>
                          <li><i class="fa fa-comments"></i><a href="#">8 comments</a> </li>
                          <li><i class="fa fa-clock-o"></i><span class="day">{{$popular_post->year}}</span></li>
                        </ul>
                    <p>{!! substr($blog->post_description,0,200) !!} ...</p>
                  </div>
                <div class="thm-readmore"><a href="/blogDetails/{{$blog->id}}" class="btn">READ MORE</a></div>
                </div>
              </article>

              @endforeach

             
                     
            </div>
          </div>
          <div class="pager">
            <div class="pages"> 
              <!--<strong></strong>-->
              {{$blogs->links()}}
            </div>
          </div>
        </div>
        <!--#main wrapper grid_8--> 
        
      </div>
      <!--col-main col-sm-9--> 
    </div>
  </div>
  <!--main-container--> 
  
</div>
<!--col2-layout--> 


@endsection