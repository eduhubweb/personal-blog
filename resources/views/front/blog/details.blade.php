@extends('front.frontTheme.master')

@section('content')
    <div class="row">
        <div class="col-lg-8 pb-80">
            <div class="post-details-cover">
                <!-- Post Thumbnail -->
                <div class="post-thumb-cover">
                    <div class="post-thumb">
                        <img src="{{asset($blog_details->file)}}" alt="" class="img-fluid">
                    </div>
                    <!-- Post Meta Info -->
                    <div class="post-meta-info">
                        <!-- Category -->
                        <p class="cats">
                            <a href="#">{{$blog_details->category->name}}</a>
                        </p>

                        <!-- Title -->
                        <div class="title">
                            <h2>{{$blog_details->title}}</h2>
                        </div>

                        <!-- Meta -->
                        <ul class="nav meta align-items-center">
                            <li class="meta-author">
                                <img src="{{asset($blog_details->author->image)}}" alt="" class="img-fluid">
                                <a href="#">Alex Garry</a>
                            </li>
                            <li class="meta-date"><a href="#">{{date('d M y',strtotime($blog_details->published_at))}}</a></li>
                            <li> 2 min read </li>
                            <li class="meta-comments"><a href="#"><i class="fa fa-comment"></i> 2</a></li>
                        </ul>
                    </div>
                    <!-- End of Post Meta Info -->
                </div>
                <!-- End oF Post Thumbnail -->

                <!-- Post Content -->
                <div class="post-content-cover my-drop-cap">
                    <p>
                        {{$blog_details->details}}
                    </p>




                </div>
                <!-- End of Post Content -->

                <!-- Tags -->

                <!-- End of Tags -->

                <!-- Author Box -->
                <div class="post-about-author-box">
                    <div class="author-avatar">
                        <img src="{{asset($blog_details->author->image)}}" alt="" class="img-fluid">
                    </div>
                    <div class="author-desc">
                        <h5> <a href="#"> {{$blog_details->author->name}}</a> </h5>
                        <div class="description">
                            {{$blog_details->author->details}}
                        </div>
                        <div class="social-icons">
                            <a href="#"><i class="fa fa-facebook"></i></a>
                            <a href="#"><i class="fa fa-twitter"></i></a>
                            <a href="#"><i class="fa fa-instagram"></i></a>
                            <a href="#"><i class="fa fa-pinterest"></i></a>
                            <a href="#"><i class="fa fa-linkedin"></i></a>
                        </div>
                    </div>
                </div>
                <!-- End of Author Box -->


            </div>
        </div>
        <div class="col-lg-4 pb-90">
            <div class="my-sidebar">
                <!-- Author Widget -->
                <div class="widget widget-about">
                    <!-- Widget Content -->
                    <div class="widget-content">
                        <!-- Author Image -->
                        <div class="author-image">
                            <img src="{{asset($blog_details->author->image)}}" alt="" class="img-fluid">
                        </div>
                        <!-- Author Name -->
                        <div class="author-name text-center">
                            <a href="#"> {{$blog_details->author->name}}</a>
                        </div>
                        <!-- Author Social Links -->

                        <!-- Author Text -->
                        <div class="author-text text-center">
                            {{$blog_details->author->details}}
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

                        <!-- Single Post -->

                        <!-- End of Single Post -->
                    </div>
                    <!-- End of Widget Content -->
                </div>
                <!-- End of Featured Posts -->

                <!-- Select Category -->

                <!-- End of Select Category -->

                <!-- Ad Widget -->

                <!-- End of Ad Widget -->



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
                        <!-- Single Post -->
                          @include('front.blog._right-recent-post')
                        @endforeach

                        <!-- Single Post -->

                    </div>
                    <!-- End of Widget Content -->
                </div>
                <!-- End of Recent Post Widget -->

                <!-- Most Commented Post Widget -->

                <!-- End of Most Commented Post Widget -->

                <!-- Tags Cloud Widget -->

                <!-- End of Tags Cloud Widget -->
            </div>
        </div>
    </div>
@endsection


