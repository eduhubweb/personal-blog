


<div class="form-group">
    <label class="col-sm-12">Select Category</label>
    <div class="col-sm-12">
        @php
          if(old('category_id'))
          {
              $category_id=old('category_id');
          }
          elseif (isset($post))
          {
             $category_id= $post->category_id;
          }
         else
         {
            $category_id=null;
         }

            @endphp
        <select name="category_id" id="category" class="form-control form-control-line @error('category_id') is-invalid @enderror">

            <option value="">Category</option>
            @foreach($categories as $category)
                <option @if($category_id==$category->id) selected @endif value="{{$category->id}}">{{$category->name}}</option>
            @endforeach

        </select>
    </div>
</div>
<div class="form-group">
    <label class="col-md-12">Author</label>
    <div class="col-md-12">
        @php
        if(old('author_id'))
        {
          $author_id=old('author_id');
        }
        elseif (isset($post)){
           $author_id=$post->author_id;
        }
        else
        {
        $author_id=null;
        }
        @endphp
        <select name="author_id" id="author" class="form-control form-control-line @error('author_id') is-invalid @enderror">
            <option value="">Select Author</option>
            @foreach($authors as $author)
            <option @if($author_id==$author->id) selected @endif value="{{$author->id}}">{{$author->name}}</option>
            @endforeach
        </select>

    </div>
</div>
<div class="form-group">
    <label class="col-md-12">Post Title</label>
    <div class="col-md-12">
        <input name="title" value="{{old('title',isset($post)?$post->title:null)}}" type="text" placeholder="Enter Title" class="form-control form-control-line @error('title') is-invalid @enderror">
    </div>
    @error('title')
    <div class="text text-danger">{{$message}}</div>
    @enderror
</div>

<div class="form-group">
    <label class="col-md-12">Details</label>
    <div class="col-md-12">
        <textarea name="details" rows="5" class="form-control form-control-line @error('details') is-invalid @enderror">{{old('details',isset($post)?$post->details:null)}}</textarea>
    </div>
    @error('details')
    <div class="text text-danger">{{$message}}</div>
    @enderror
</div>
<div class="form-group">
    <label class="col-md-12">Image</label>
    <div class="col-md-12">
        @if(isset($post) && $post->file !=null)
        <img src="{{asset($post->file)}}" width="80" height="80" alt="">
        @endif
        <input name="file" type="file" placeholder="Upload image" class="form-control form-control-line @error('file') is-invalid @enderror">
    </div>
    @error('file')
    <div class="text text-danger">{{$message}}</div>
    @enderror
</div>
<div class="form-group">
    <label class="col-md-12">Status</label>
    @php
      if(old('status'))
    {
      $status=old('status');
    }
    elseif (isset($post))
    {
     $status=$post->status;
    }
    else
    {
      $status=null;
    }
    @endphp
    <div class="col-md-12">
        <input name="status" @if($status=='published') checked @endif value="published" type="radio" id="published"><label for="published">published</label>
        <input name="status" @if($status=='unpublished') checked @endif value="unpublished" type="radio" id="unpublished"><label for="unpublished">unpublished</label>
        <input name="status" @if($status=='draft') checked @endif value="draft" type="radio" id="draft"><label for="draft">draft</label>
    </div>
    @error('status')
    <div class="text text-danger">{{$message}}</div>
    @enderror
</div>
