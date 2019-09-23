
<div class="featured-post">
    <!-- Post Thumbnail -->
    <a href="blog-details.html">
        <img src="{{asset($featured->file)}}" alt="" class="img-fluid">
    </a>
    <!-- Post Title -->
    <div class="featured-post-title">
        <h6> <a href="{{route('blog.details',$featured->id)}}">{{$featured->title}}</a> </h6>
    </div>
</div>
