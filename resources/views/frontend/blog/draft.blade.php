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
                      <time class="entry-date">Jan 10, 2018 .</time>
                      .</p>
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
                          <li><i class="fa fa-clock-o"></i><span class="day">12</span> <span class="month">Feb</span></li>
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
<!-- header and footer file master include -->
@extends('layouts.includes.master')
<!-- title set -->

@section('title', 'Post_create')

@section('content')
<br><br>
<!-- container-fluid -->
        <div class="container-fluid">
          <!-- Basic Card Example -->
              <div class="card shadow mb-4">
                <div class="row">
                  <div class="col-12 text-center">
                    <div class="p-5 m-auto" style="max-width:600px">
                      <div class="heading text-center">
                        <h1 class="h4 text-gray-900 mb-4">Create New Post!</h1>
                        <h3><a href="/posts">View All Posts</a></h3>
                      </div>
                           <!-- include message page -->
                            @include('messages.message')
                      <form action="/posts" method="POST" enctype="multipart/form-data">
                                {{csrf_field()}}
                                <!-- Post-title field -->
                              <div class="form-group">
                                <input type="text" name="post_title" class="form-control" id="post_title" placeholder="Post Tiltle">
                              </div> 
                                <!-- post-category name field -->
                                <!-- onno table er data add -->
                                <div class="form-group">
                                    <select class="form-control" name="categories_id">
                                      <option value="">Please Select Category</option>
                                      @foreach($categories as $data_show)
                                      <option value="{{$data_show->id}}">{{$data_show->category}}</option>
                                      @endforeach
                                    </select>
                                  </div>
                                  <!-- Post-title field -->
                                <div class="form-group">
                                    <textarea name="post_description" placeholder="Post Description" class="form-control"></textarea>
                                </div>  
                                 <!-- Post-_picture field -->
                                <div class="form-group">
                                    <input type="file" name="post_picture" class="form-control-file" id="post_picture">
                                </div>                           
                        <input type="submit" name="create_student" class="btn btn-primary btn-user btn-block mt-5" value="Post Add">
                      </form>
                    </div>
                  </div>
                </div>
                <br>
               <br>
                <div class="row">
                  <div class="col-md-10 offset-md-3">
                    <table class="table table-striped table-light table-hover">
                        <thead class="table-dark">
                          <tr>
                            <th scope="col">SL</th>
                            <th scope="col">Title</th>
                            <th scope="col">Category</th>
                            <th scope="col">Description</th>
                            <th scope="col">Post Picture</th>
                            <th scope="col">Action</th>
          
                          </tr>
                        </thead>
                        <?php $i= $posts->perPage()*($posts->currentPage()-1); ?>
                        <!-- foreach loops database er data show -->
                        @foreach($posts as $key=>$data_show)
                        <tbody>
                          <tr>
                            <td>{{++$i}}</td>
                            <td>{{$data_show->post_title}}</td>
                            <td>{{$data_show->categories->category}}</td>
                            <td>{{substr($data_show->post_description,0,100)}}</td>
                            <td><img src="{{asset('images/post_picture/'.$data_show->post_picture)}}" width="100"></td>
                            <td><a href="/posts/{{$data_show->id}}/edit" class="btn btn-success">Edit</a>|{!! Form::open(['url' => '/posts/'.$data_show->id,'method'=>'Delete']) !!}
                            <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure?')">Delete</button>
                            {!! Form::close() !!}
                            </td>
                          </tr>
                        </tbody>
                        @endforeach
                      </table>
                        <!-- database table show ends -->
                       <!-- page paginate add -->
                      {{$posts->links()}}
                  </div>
                </div>
              </div>
            </div>
    </div>

@endsection('content')
<script>
  $('#course').on('change',function(e){
            console.log(e);
            alert('yes');
            var courses_id= e.target.value;
            $.get('/jsonCourseCodes?courses_id=' + courses_id,function(data){
                console.log(data);
                $('#courses_id').empty();
                $('#course_code').append('<option value="" disable="true" selected="true">=== Select course_code ===</option>');
                $.each(data, function(index, course_codeObj){
                    $('#course').append('<option value="'+ course_codeObj.id +'">'+ course_codeObj.course_code +'</option>');
                });
            });
        });

  $('#books').on('input',function(e){
console.log(e);
var book_code= e.target.value;
$.get('/json-books?book_code=' + book_code,function(data){
console.log(data);
$.each(data, function(index, districtsObj){
var id=(data.id);
var faculties_id=(data.faculties_id);
var book_name=(data.book_name);
var book_code=(data.book_code);
var writer_name=(data.writer_name);
var description=(data.description);
var self_location=(data.self_location);
var total=(data.total);
$('#book_id').val(id);
$('#faculties_id').val(faculties_id);
$('#book_name').val(book_name);
$('#book_code').val(book_code);
$('#writer_name').val(writer_name);
$('#description').val(description);
$('#self_location').val(self_location);
$('#total').val(total);
});
});
});
</script>