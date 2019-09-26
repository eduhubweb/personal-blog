
@extends('front.frontTheme.master')
@section('content')
    <div class="page-title">
        <div class="container">
            <h2>Category Result</h2>
            <ul class="nav">
                <li><a href="{{route('home')}}">Home</a></li>
                <li><a href="#">Blog</a></li>
                <li><a href="{{route('category.post',$category->id)}}">{{$category->name}}</li>
            </ul>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-8 pb-50">
            @foreach($posts as $post)

            <!-- Post -->
                <div class="post-default post-has-front-title">
                    <div class="post-thumb">
                        <a href="{{route('blog.details',$post->id)}}">
                            <img src="{{asset($post->file)}}" alt="" class="img-fluid">
                        </a>
                    </div>
                    <div class="post-data">
                        <!-- Category -->
                        <div class="cats"><a href="{{route('category.post',$category->id)}}">{{$post->title}}</a></div>
                        <!-- Title -->
                        <div class="title">
                            <h2><a href="{{route('blog.details',$post->id)}}">{{str_limit($post->details,100)}}</a></h2>
                        </div>
                    </div>
                </div>

            <!-- End of Post -->
            @endforeach


            <!-- Post Pagination -->
            <div class="post-pagination d-flex justify-content-center">
                <span class="current">1</span>
                <a href="#">2</a>
                <a href="#">3</a>
                <a href="#"><i class="fa fa-angle-right"></i></a>
            </div>
            <!-- End of Post Pagination -->
        </div>
        <div class="col-lg-4">
            <div class="my-sidebar">
                <!-- Author Widget -->
                <div class="widget widget-about">
                    <!-- Widget Content -->
                    <div class="widget-content">
                        <!-- Author Image -->
                        <div class="author-image">
                            <img src="assets/images/blog/author.jpg" alt="" class="img-fluid">
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
                        @include('front.blog._right-featured-post')
                        <!-- End of Single Post -->


                    </div>
                    <!-- End of Widget Content -->
                </div>
                <!-- End of Featured Posts -->

                <!-- Select Category -->

                <!-- End of Select Category -->

                <!-- Ad Widget -->
                <div class="widget widget-ad">
                    <!-- Widget Content -->
                    <div class="widget-content">
                        <a href="#">
                            <img src="assets/images/sidebar/ad.jpg" alt="" class="img-fluid">
                        </a>
                    </div>
                    <!-- End of Widget Content -->
                </div>
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
                        <!-- Single Post -->
                        <div class="wrp-cover">
                            <!-- Post Thumbnail -->
                            <div class="post-thumb">
                                <a href="blog-details.html">
                                    <img src="assets/images/sidebar/rp-1.jpg" alt="" class="img-fluid">
                                </a>
                            </div>
                            <!-- Post Title -->
                            <div class="post-title">
                                <a href="blog-details.html">Apple Admits To Macbook and Macbook Pro</a>
                            </div>
                        </div>

                        <!-- Single Post -->
                        <div class="wrp-cover">
                            <!-- Post Thumbnail -->
                            <div class="post-thumb">
                                <a href="blog-details.html">
                                    <img src="assets/images/sidebar/rp-2.jpg" alt="" class="img-fluid">
                                </a>
                            </div>
                            <!-- Post Title -->
                            <div class="post-title">
                                <a href="blog-details.html"> Feel The Love, And Things On My Mind </a>
                            </div>
                        </div>

                        <!-- Single Post -->
                        <div class="wrp-cover">
                            <!-- Post Thumbnail -->
                            <div class="post-thumb">
                                <a href="blog-details.html">
                                    <img src="assets/images/sidebar/rp-3.jpg" alt="" class="img-fluid">
                                </a>
                            </div>
                            <!-- Post Title -->
                            <div class="post-title">
                                <a href="blog-details.html"> This Apple Crisp Makes The Entire House Smell Dreamy </a>
                            </div>
                        </div>

                        <!-- Single Post -->
                        <div class="wrp-cover">
                            <!-- Post Thumbnail -->
                            <div class="post-thumb">
                                <a href="blog-details.html">
                                    <img src="assets/images/sidebar/rp-4.jpg" alt="" class="img-fluid">
                                </a>
                            </div>
                            <!-- Post Title -->
                            <div class="post-title">
                                <a href="blog-details.html">20-Minute Thai Coconut Hot Chicken Soup</a>
                            </div>
                        </div>
                    </div>
                    <!-- End of Widget Content -->
                </div>
                <!-- End of Recent Post Widget -->



            </div>
        </div>
    </div>
@endsection
