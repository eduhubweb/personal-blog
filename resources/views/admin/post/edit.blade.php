@extends('layouts.theme1.master')
@section('content')
    <div class="col-lg-8 col-xlg-9 col-md-7">
        <div class="card">
            <div class="card-body">
                <form action="{{route('post.update',$post->id)}}" method="post" class="form-horizontal form-material" enctype="multipart/form-data">
                    @csrf
                    @method('put')
                    @include('admin.post._form')

                    <div class="form-group">
                        <div class="col-sm-12">
                            <button class="btn btn-success">Update Post</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
