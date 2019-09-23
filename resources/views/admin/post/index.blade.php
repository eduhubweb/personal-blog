
@extends('layouts.theme1.master')
@section('content')
    <div class="div">
        <a href="{{route('post.create')}}" class="btn btn-primary">Add New Post</a>
    </div>
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">{{$title}}</h4>

                </div>
                <div class="table-responsive">
                    <table class="table">
                        <thead class="thead-light">
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Post_Title</th>
                            <th scope="col">details</th>

                            <th scope="col">category_name</th>
                            <th scope="col">status</th>
                            <th scope="col">total_view</th>
                            <th scope="col">post_image</th>
                            <th scope="col">is_featured</th>
                            <th scope="col">published_at</th>
                            <th scope="col">created_at</th>
                            <th scope="col">Updated_at</th>
                            <th scope="col">Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($posts as $post)
                            <tr>
                                <td>{{$serial++}}</td>
                                <td>{{$post->title}}</td>
                                <td>{{$post->details}}</td>


                                <td>{{$post->category->name}}</td>
                                <td>{{ucfirst($post->status)}}</td>
                                <td>{{($post->total_view)}}</td>
                                <td>{{($post->file)}}</td>
                                <td>{{($post->is_featured)}}</td>
                                <td>{{($post->published_at)}}</td>
                                <td>{{$post->created_at}}</td>
                                <td>{{$post->updated_at}}</td>
                                <td>
                                    <a href="{{route('post.edit',$post->id)}}" class="btn btn-primary">Edit</a>
                                    <form action="{{route('post.destroy',$post->id)}}" method="post">
                                        @csrf
                                        @method('delete')
                                        <button class=" btn btn-danger" onclick="return confirm('are you want to delete')">delete</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
