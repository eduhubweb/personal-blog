@extends('layouts.theme1.master')
@section('content')
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
                        <th scope="col">Title</th>
                        <th scope="col">Details</th>
                        <th scope="col">Category</th>
                        <th scope="col">Author</th>
                        <th scope="col">Status</th>
                        <th scope="col">Image</th>
                        <th scope="col">Created_at</th>
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
                            <td>{{$post->author->name}}</td>
                            <td>{{$post->status}}</td>
                            <td>
                                <img src="{{asset($post->file)}}" height="80" width="80" alt="">
                            </td>
                            <td>{{$post->created_at}}</td>
                            <td>{{$post->updated_at}}</td>
                            <td>
                                <a href="{{route('post.edit',$post->id)}}">Edit</a>
                                <form action="{{route('post.destroy',$post->id)}}" method="post">
                                    @csrf
                                    @method('delete')
                                    <button class="btn btn-danger" onclick="return confirm('Are You Want To Post Delete?')">Delete</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
