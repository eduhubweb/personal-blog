
<div class="wrp-cover">
    <!-- Post Thumbnail -->
    <div class="post-thumb">
        <a href="{{route('blog.details',$recent->id)}}">
            <img src="{{asset($recent->file)}}" alt="" class="img-fluid">
        </a>
    </div>
    <!-- Post Title -->
    <div class="post-title">
        <a href="{{route('blog.details',$recent->id)}}">{{$recent->title}}</a>
    </div>
</div>
