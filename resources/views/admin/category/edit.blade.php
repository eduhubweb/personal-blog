@extends('layouts.theme1.master')
@section('content')
    <div class="row">
        <!-- Column -->

        <!-- Column -->
        <!-- Column -->
        <div class="offset-2 col-lg-8 col-xlg-9 col-md-7">
            <div class="card">
                <div class="card-body">
                    <form action="{{route('category.update',$category->id)}}" method="post" class="form-horizontal form-material">
                        @csrf
                        @method('put')
                         @include('admin.category._form')

                        <div class="form-group">
                            <div class="offset-4 col-sm-12">
                                <button class="btn btn-success">Update Category</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <!-- Column -->
    </div>
@endsection
