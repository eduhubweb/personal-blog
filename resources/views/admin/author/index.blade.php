@extends('layouts.theme1.master')
@section('content')
    <div class="div">
        <a href="{{route('author.create')}}" class="btn btn-primary">Add New Author</a>
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
                            <th scope="col">Author_Name</th>
                            <th scope="col">Email</th>
                            <th scope="col">Phone</th>
                            <th scope="col">Gender</th>
                            <th scope="col">Address</th>
                            <th scope="col">Created_at</th>
                            <th scope="col">Updated_at</th>
                            <th scope="col">Action</th>
                        </tr>
                        </thead>
                        <tbody>
                            @foreach($authors as $author)
                                <tr>
                                    <td>{{$serial++}}</td>
                                    <td>{{$author->name}}</td>
                                    <td>{{$author->email}}</td>
                                    <td>{{$author->phone}}</td>
                                    <td>{{ucfirst($author->gender)}}</td>
                                    <td>{{$author->address}}</td>
                                    <td>{{$author->created_at}}</td>
                                    <td>{{$author->updated_at}}</td>
                                    <td>
                                        <a href="{{route('author.edit',$author->id)}}" class="btn btn-primary">Edit</a>
                                        <form action="{{route('author.destroy',$author->id)}}" method="post">
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
