
<!DOCTYPE html>
<html lang="en">
<head>
  @include('layouts.loginTheme._head')
    <!--===============================================================================================-->
</head>
<body>

<div class="limiter">
    <div class="container-login100">
        <div class="wrap-login100 p-t-85 p-b-20">

            @if($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach($errors->all() as $error)
                    <li>{{$error}}</li>
                </ul>
                @endforeach
            </div>
            @endif
            <form class="login100-form " action="{{route('admin.login')}}" method="post">
                @csrf
                  @if(session('message'))
                    <span class="login100-form-title p-b-25 alert alert-danger">
                      {{(session('message'))}}

					</span>
                  @elseif($title)
                    <span class="login100-form-title p-b-25 alert alert-danger">
                      {{$title}}

					</span>
                   @endif

                <span class="login100-form-avatar">
						<img src="{{asset('login1/images/avatar-01.jpg')}}" alt="AVATAR">
					</span>

                <div class="wrap-input100  m-t-85 m-b-35" >
                    <input class="input100" value="{{old('email')}}" type="email" name="email" >
                    <span class="focus-input100" data-placeholder="User Email"></span>
                </div>

                <div class="wrap-input100 t m-b-30" >
                    <input class="input100" type="password" name="password">
                    <span class="focus-input100" data-placeholder="Password"></span>
                </div>

                <div class="container-login100-form-btn">
                    <button class="login100-form-btn">
                        Login
                    </button>
                    <ul class="login-more p-t-10">
                        <li class="m-b-8">
							<span class="txt1">
								Forgot
							</span>

                            <a href="#" class="txt2">
                                Email / Password?
                            </a>
                        </li>

                        <li>
							<span class="txt1">
								Don’t have an account?
							</span>

                            <a href="#" class="txt2">
                                Sign up
                            </a>
                        </li>
                    </ul>
                </div>


            </form>
        </div>
    </div>
</div>


<div id="dropDownSelect1"></div>

<!--===============================================================================================-->
@include('layouts.loginTheme._scripts')

</body>
</html>
