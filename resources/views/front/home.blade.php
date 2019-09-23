@extends('front.frontTheme.master')
@section('content')
    <div class="section-title text-center">
        <h2>Featured Post</h2>
    </div>
    <div class="row">
        <div class="col-lg-6 order-lg-2">
            <!-- Post -->
            <div class="post-default post-has-bg-img">
                <div class="post-thumb">
                    <a href="blog-details.html">
                        <div data-bg-img="{{asset($featured_post[0]->file)}}"></div>
                    </a>
                </div>
                <div class="post-data">
                    <!-- Category -->
                    <div class="cats"><a href="#">{{$featured_post[0]->category->name}}</a></div>
                    <!-- Title -->
                    <div class="title">
                        <h2><a href="{{route('blog.details',$featured_post[0]->id)}}">{{$featured_post[0]->title}}</a></h2>
                    </div>
                     <!-- Post Meta -->
                    <ul class="nav meta align-items-center">
                        <li class="meta-author">
                            <img src="{{asset($featured_post[0]->author->image)}}" alt="" class="img-fluid">
                            <a href="#">{{$featured_post[0]->author->name}}</a>
                        </li>
                        <li class="meta-date"><a href="#">{{$featured_post[0]->published_at}}</a></li>
                        <li class="meta-comments"><a href="#"><i class="fa fa-eye"></i>{{$featured_post[0]->total_view}}</a></li>


                    </ul>
                </div>
            </div>
            <!-- End of Post -->
        </div>
        <div class="col-lg-6 order-lg-1">
            @foreach($featured_post as $index=>$featured)
                @if($index !=0)
            <!-- Post -->
            <div class="post-default post-has-no-thumb">
                <div class="post-data">
                    <!-- Category -->
                    <div class="cats"><a href="#">{{$featured->category->name}}</a></div>
                    <!-- Title -->
                    <div class="title">
                        <h2><a href="{{route('blog.details',$featured->id)}}">{{$featured->title}}</a></h2>
                    </div>
                    <!-- Post Meta -->
                    <ul class="nav meta align-items-center">
                        <li class="meta-author">
                            <img src="{{asset($featured->author->image)}}" alt="" class="img-fluid">
                            <a href="#">{{$featured->author->name}}</a>
                        </li>
                        <li class="meta-date"><a href="#">{{date('d M Y',strtotime($featured->published_at))}}</a></li>
                        <li class="meta-comments"><a href="#"><i class="fa fa-eye"></i>{{$featured->total_view}}</a></li>


                    </ul>
                    <!-- Post Desc -->
                    <div class="desc">
                        <p>
                            {{str_limit($featured->details,100)}}
                        </p>
                    </div>
                </div>
            </div>
            <!-- End of Post -->
            @endif
                @endforeach

        </div>
    </div>
    <div class="row">
        <div class="col-lg-8">
            <!-- Popular Post -->
            <section class="popular-post pb-10">
                <!-- Section title -->
                <div class="section-title">
                    <h2>Recent Posts</h2>
                </div>
                <!-- End of Section title -->

                <div class="post-blog-list">

                @foreach($recent_post as $post)
                        <div class="post-default post-has-right-thumb">
                            <div class="d-flex flex-wrap">
                                <div class="post-thumb align-self-stretch order-md-2">
                                    <a href="blog-details.html">
                                        <div data-bg-img="{{asset($post->file)}}"></div>
                                    </a>
                                </div>
                                <div class="post-data order-md-1">
                                    <!-- Category -->
                                    <div class="cats"><a href="category-result.html">{{ucfirst($post->category->name)}}</a></div>
                                    <!-- Title -->
                                    <div class="title">
                                        <h2><a href="{{route('blog.details',$post->id)}}">{{$post->title}}</a></h2>
                                    </div>
                                    <!-- Post Meta -->
                                    <ul class="nav meta align-items-center">
                                        <li class="meta-author">
                                            <img src="{{asset($post->author->image)}}" alt="" class="img-fluid">
                                            <a href="#">{{ucfirst($post->author->name)}}</a>
                                        </li>
                                        <li class="meta-date"><a href="#">{{$post->published_at}}</a></li>
                                        <li class="meta-comments"><a href="#"><i class="fa fa-eye"></i>{{$post->total_view}}</a></li>
                                    </ul>
                                    <!-- Post Desc -->
                                    <div class="desc">

                                        <p>
                                            {{str_limit($post->details)}}
                                        </p>
                                    </div>
                                    <!-- Read More Button -->
                                    <a href="{{route('blog.details',$post->id)}}" class="btn btn-primary">View More</a>
                                </div>
                            </div>
                        </div>
                @endforeach
                    <!-- Post -->



                    <!-- End of Post -->
                </div>
            </section>
            <!-- End of Popular Post  -->

            <!-- Most Viewed Post -->
            <section class="pt-40 pb-10 most-viewed">
                <!-- Section title -->
                <div class="section-title">
                    <h2>Most Viewed</h2>
                </div>
                <!-- End of Section title -->
                <div class="post-blog-list">
                    <div class="row">
                        <div class="col-sm-12">
                            <!-- Post -->
                            <div class="post-default post-has-front-title">
                                <div class="post-thumb">
                                    <a href="blog-details.html"> <img src="{{asset($most_viewed_post[0]->file)}}" alt="" class="img-fluid"> </a>
                                </div>
                                <div class="post-data">
                                    <!-- Category -->
                                    <div class="cats"><a href="#">{{$most_viewed_post[0]->category->name}}</a></div>
                                    <!-- Title -->
                                    <div class="title">
                                        <h2><a href="{{route('blog.details',$most_viewed_post[0]->id)}}">{{$most_viewed_post[0]->title}}</a></h2>
                                    </div>
                                </div>
                            </div>
                            <!-- End of Post -->
                        </div>
                           @foreach($most_viewed_post as $index=>$most_view)
                               @if($index !=0)
                        <div class="col-sm-6">
                            <!-- Post -->
                            <div class="post-default">
                                <div class="post-thumb">
                                    <a href="{{route('blog.details',$most_view->id)}}"> <img src="{{($most_view->file !=null)?asset($most_view->file):'frontend/images/assets/blog/small/6.jpg'}}" alt="" class="img-fluid"> </a>
                                </div>
                                <div class="post-data">
                                    <!-- Category -->
                                    <div class="cats"><a href="#">{{$most_view->category->name}}</a></div>
                                    <!-- Title -->
                                    <div class="title">
                                        <h2><a href="{{route('blog.details',$most_view->id)}}">{{$most_view->title}} </a></h2>
                                    </div>
                                    <!-- Post Desc -->
                                    <div class="desc">
                                        <p>
                                            {{str_limit($most_view->details,100)}}
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <!-- End of Post -->
                        </div>
                               @endif
                          @endforeach

                    </div>
                </div>
            </section>
            <!-- End of Most Viewed Post -->

            <!-- 728 ad -->
            <div class="pt-40 pb-40 biz-ad">
                <a href="#"><img src="{{asset('frontend/assets/images/ad-728.png')}}" alt="" class="img-fluid"></a>
            </div>
            <!-- End of 728 ad -->

            <!-- Video Post -->
            <section class="pt-40 pb-10 video-post">
                <!-- Section title -->
                <div class="section-title">
                    <h2>Video Post</h2>
                </div>
                <!-- End of Section title -->
                <div class="post-blog-list">
                    <div class="row">
                        <div class="col-md-6">
                            <!-- Post -->
                            <div class="post-default post-has-video">
                                <div class="post-thumb">
                                    <a href="blog-details.html">
                                        <div data-bg-img="assets/images/blog/6.jpg')}}"></div>
                                    </a>
                                </div>
                                <div class="post-data">
                                    <!-- Category -->
                                    <div class="cats"><a href="category-result.html">Food</a></div>
                                    <!-- Title -->
                                    <div class="title">
                                        <h2><a href="blog-details.html">Five Important Facts Should Know About Recipe</a></h2>
                                    </div>
                                </div>
                            </div>
                            <!-- End of Post -->
                        </div>

                        <div class="col-md-6">
                            <!-- Post -->
                            <div class="post-default post-has-video">
                                <div class="post-thumb">
                                    <a href="blog-details.html">
                                        <div data-bg-img="assets/images/blog/8.jpg')}}"></div>
                                    </a>
                                </div>
                                <div class="post-data">
                                    <!-- Category -->
                                    <div class="cats"><a href="category-result.html">Technology</a></div>
                                    <!-- Title -->
                                    <div class="title">
                                        <h2><a href="blog-details.html">Apple Admits To Macbook and Macbook Pro </a></h2>
                                    </div>
                                </div>
                            </div>
                            <!-- End of Post -->
                        </div>

                        <div class="col-md-6">
                            <!-- Post -->
                            <div class="post-default post-has-video">
                                <div class="post-thumb">
                                    <a href="blog-details.html">
                                        <div data-bg-img="assets/images/blog/10.jpg')}}"></div>
                                    </a>
                                </div>
                                <div class="post-data">
                                    <!-- Category -->
                                    <div class="cats"><a href="category-result.html">Food</a></div>
                                    <!-- Title -->
                                    <div class="title">
                                        <h2><a href="blog-details.html">20-Minute Thai Coconut Chicken Soup</a></h2>
                                    </div>
                                </div>
                            </div>
                            <!-- End of Post -->
                        </div>

                        <div class="col-md-6">
                            <!-- Post -->
                            <div class="post-default post-has-video">
                                <div class="post-thumb">
                                    <a href="blog-details.html">
                                        <div data-bg-img="assets/images/blog/9.jpg')}}"></div>
                                    </a>
                                </div>
                                <div class="post-data">
                                    <!-- Category -->
                                    <div class="cats"><a href="category-result.html">Technology</a></div>
                                    <!-- Title -->
                                    <div class="title">
                                        <h2><a href="blog-details.html">Feel The Love, And Things On My Mind</a></h2>
                                    </div>
                                </div>
                            </div>
                            <!-- End of Post -->
                        </div>
                    </div>
                </div>
            </section>
            <!-- End of Video Post -->
        </div>
        <div class="col-lg-4">
            <div class="pt-88">
                <div class="my-sidebar">
                    <!-- Author Widget -->
                    <div class="widget widget-about">
                        <!-- Widget Content -->
                        <div class="widget-content">
                            <!-- Author Image -->
                            <div class="author-image">
                                <img src="{{asset('frontend/assets/images/blog/author.jpg')}}" alt="" class="img-fluid">
                            </div>
                            <!-- Author Name -->
                            <div class="author-name text-center">
                                <a href="#"> Alex Garry </a>
                            </div>
                            <!-- Author Social Links -->
                            <div class="author-social text-center">
                                <a href="#"><i class="fa fa-facebook"></i></a>
                                <a href="#"><i class="fa fa-twitter"></i></a>
                                <a href="#"><i class="fa fa-linkedin"></i></a>
                                <a href="#"><i class="fa fa-google-plus"></i></a>
                            </div>
                            <!-- Author Text -->
                            <div class="author-text text-center">
                                In consequat, quam id sodales hendrerit, eros mi molestie leo, nec lacinia risus neque tristique augue. Proin tempus urna vel.
                            </div>
                        </div>
                        <!-- End of Widget Content -->
                    </div>
                    <!-- End of Author Widget -->

                    <!-- Featured Posts -->
                    <div class="widget widget-featured-post">
                        <!-- Widget Title -->
                        <h4 class="widget-title">
                            Featured Post
                        </h4>
                        <!-- End of Widget Title -->

                        <!-- Widget Content -->
                        <div class="widget-content">
                            <!-- Single Post -->
                        @foreach($featured_post as $featured)
                            @include('front.blog._right-featured-post')
                        @endforeach
                            <!-- End of Single Post -->
                        </div>
                        <!-- End of Widget Content -->
                    </div>
                    <!-- End of Featured Posts -->

                    <!-- Select Category -->

                    <!-- End of Select Category -->

                    <!-- Ad Widget -->

                    <!-- End of Ad Widget -->

                    <!-- Instagram Widget -->

                    <!-- End of Instagram Widget -->

                    <!-- Newsletter Widget -->

                    <!-- End of Newsletter Widget -->

                    <!-- Recent Post Widget -->
                    <div class="widget widget-recent-post">
                        <!-- Widget Title -->
                        <h4 class="widget-title">
                            Recent Post
                        </h4>
                        <!-- End of Widget Title -->

                        <!-- Widget Content -->
                        <div class="widget-content">
                            @foreach($recent_post as $recent)
                                @include('front.blog._right-recent-post')
                            @endforeach

                        </div>
                        <!-- End of Widget Content -->
                    </div>
                    <!-- End of Recent Post Widget -->

                    <!-- Most Commented Post Widget -->
                    <div class="widget widget-most-commented-post">
                        <!-- Widget Title -->
                        <h4 class="widget-title">
                            Most Commented Post
                        </h4>
                        <!-- End of Widget Title -->

                        <!-- Widget Content -->
                        <div class="widget-content">
                            <!-- Post Carousel -->
                            <div class="wmcp-cover owl-carousel" data-owl-mouse-drag="true" data-owl-dots="true" data-owl-margin="20">
                                <!-- Carousel Item -->
                                <div class="wmcp-item">
                                    <!-- Single Post -->
                                    <div class="wmc-post">
                                        <a href="blog-details.html">
                                            <img src="{{asset('frontend/assets/images/sidebar/mcp-1.jpg')}}" alt="" class="img-fluid">
                                        </a>
                                        <div class="wmc-post-title">
                                            <h6> <a href="blog-details.html"> Understanding The Background Of Fashion </a></h6>
                                        </div>
                                    </div>
                                    <!-- End of Single Post -->

                                    <!-- Single Post -->
                                    <div class="wmc-post">
                                        <a href="blog-details.html">
                                            <img src="{{asset('frontend/assets/images/sidebar/mcp-2.jpg')}}" alt="" class="img-fluid">
                                        </a>
                                        <div class="wmc-post-title">
                                            <h6> <a href="blog-details.html">12-inch MacBook Refurb $830, Apple Watch Series</a> </h6>
                                        </div>
                                    </div>
                                    <!-- End of Single Post -->
                                </div>
                                <!-- End of Carousel Item -->

                                <!-- Carousel Item -->
                                <div class="wmcp-item">
                                    <!-- Single Post -->
                                    <div class="wmc-post">
                                        <a href="blog-details.html">
                                            <img src="{{asset('frontend/assets/images/sidebar/mcp-1.jpg')}}" alt="" class="img-fluid">
                                        </a>
                                        <div class="wmc-post-title">
                                            <h6> <a href="blog-details.html"> Understanding The Background Of Fashion </a></h6>
                                        </div>
                                    </div>
                                    <!-- End of Single Post -->

                                    <!-- Single Post -->
                                    <div class="wmc-post">
                                        <a href="blog-details.html">
                                            <img src="{{asset('frontend/assets/images/sidebar/mcp-2.jpg')}}" alt="" class="img-fluid">
                                        </a>
                                        <div class="wmc-post-title">
                                            <h6> <a href="blog-details.html">12-inch MacBook Refurb $830, Apple Watch Series</a> </h6>
                                        </div>
                                    </div>
                                    <!-- End of Single Post -->
                                </div>
                                <!-- End of Carousel Item -->

                                <!-- Carousel Item -->
                                <div class="wmcp-item">
                                    <!-- Single Post -->
                                    <div class="wmc-post">
                                        <a href="blog-details.html">
                                            <img src="{{asset('frontend/assets/images/sidebar/mcp-1.jpg')}}" alt="" class="img-fluid">
                                        </a>
                                        <div class="wmc-post-title">
                                            <h6> <a href="blog-details.html"> Understanding The Background Of Fashion </a></h6>
                                        </div>
                                    </div>
                                    <!-- End of Single Post -->

                                    <!-- Single Post -->
                                    <div class="wmc-post">
                                        <a href="blog-details.html">
                                            <img src="{{asset('frontend/assets/images/sidebar/mcp-2.jpg')}}" alt="" class="img-fluid">
                                        </a>
                                        <div class="wmc-post-title">
                                            <h6> <a href="blog-details.html">12-inch MacBook Refurb $830, Apple Watch Series</a> </h6>
                                        </div>
                                    </div>
                                    <!-- End of Single Post -->
                                </div>
                                <!-- End of Carousel Item -->
                            </div>
                            <!-- End of Post Carousel -->

                        </div>
                        <!-- End of Widget Content -->
                    </div>
                    <!-- End of Most Commented Post Widget -->

                    <!-- Tags Cloud Widget -->
                    <div class="widget widget-tag-cloud">
                        <!-- Widget Title -->
                        <h4 class="widget-title">
                            Tags
                        </h4>
                        <!-- End of Widget Title -->

                        <!-- Widget Content -->
                        <div class="widget-content tagcloud">
                            <a href="#">Fashion</a>
                            <a href="#">Art</a>
                            <a href="#">Lifestyle</a>
                            <a href="#">Love</a>
                            <a href="#">Travel</a>
                            <a href="#">Health</a>
                            <a href="#">Education</a>
                            <a href="#">Movie</a>
                            <a href="#">Games</a>
                            <a href="#">Sports</a>
                        </div>
                        <!-- End of Widget Content -->
                    </div>
                    <!-- End of Tags Cloud Widget -->


                </div>
            </div>
        </div>
    </div>
@endsection
