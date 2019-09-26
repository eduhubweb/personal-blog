{{--@php
    $categories=App\Category::orderBy('name')->get();
    @endphp--}}
<div class="header-fixed">
    <div class="container-fluid pl-120 pr-120 position-relative">
        <div class="row d-flex align-items-center">

            <div class="col-lg-3 col-md-4 col-6">
                <!-- Logo -->
                <div class="logo">
                    <a href="{{route('home')}}"><img src="{{asset('frontend/assets/images/logo.png')}}" alt="" class="img-fluid"></a>
                </div>
                <!-- End of Logo -->
            </div>

            <div class="col-lg-9 col-md-8 col-6 d-flex justify-content-end position-static">
                <!-- Nav Menu -->
                <div class="nav-menu-cover">
                    <ul class="nav nav-menu">
                        <li><a href="{{route('home')}}">Home</a></li>
                        <li><a href="#">About</a></li>

                        <li class="menu-item-has-children"><a href="#">Category</a>
                            <ul class="sub-menu">
                                @foreach($categories as $category)
                                    <li><a href="{{route('category.post',$category->id)}}">{{$category->name}}</a></li>
                                @endforeach


                            </ul>
                        </li>
                        <li><a href="#">Contact</a></li>
                    </ul>
                </div>
                <!-- End of Nav Menu -->

                <!-- Mobile Menu -->

                <!-- End of Mobile Menu -->
            </div>
        </div>
    </div>
</div>
