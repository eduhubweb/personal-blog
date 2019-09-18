@extends('layouts.theme1.master')
@section('content')
    <div class="div">
        <a href="{{route('category.create')}}" class="btn btn-primary">Category Add Now</a>
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
                        <th scope="col">Category_Name</th>
                        <th scope="col">Details</th>
                        <th scope="col">Created_at</th>
                        <th scope="col">Updated_at</th>
                        <th scope="col">Action</th>
                    </tr>
                    </thead>
                    <tbody>
                      @foreach($categories as $category)
                          <tr>

                             <td>{{$serialize++}}</td>
                             <td>{{$category->name}}</td>
                             <td>{{$category->details}}</td>
                             <td>{{$category->created_at}}</td>
                             <td>{{$category->updated_at}}</td>
                             <td>
                                 <a href="{{route('category.edit',$category->id)}}" class="btn btn-primary">Edit</a>
                                 <form action="{{route('category.destroy',$category->id)}}" method="post">
                                     @csrf
                                     @method('delete')
                                     <button class=" alert-danger" onclick="return confirm('are you want to delete')">delete</button>
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
