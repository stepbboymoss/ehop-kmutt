<!DOCTYPE html>
<html lang="en">
<head>
    <title>Login E-Bus Dashboard</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--===============================================================================================-->
    <link rel="icon" type="image/png" href="{{ URL::asset('bnlogin/images/icons/favicon.ico') }}"/>
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('bnlogin/vendor/bootstrap/css/bootstrap.min.css') }}">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('bnlogin/fonts/font-awesome-4.7.0/css/font-awesome.min.css') }}">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('bnlogin/vendor/animate/animate.css') }}">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('bnlogin/vendor/css-hamburgers/hamburgers.min.css') }}">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('bnlogin/vendor/select2/select2.min.css') }}">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('bnlogin/css/util.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('bnlogin/css/main.css') }}">
    <!--===============================================================================================-->
</head>
<body>

<div class="limiter">
    <div class="container-login100">
        <div class="wrap-login100">
            <div class="login100-pic js-tilt" data-tilt>
                <img src="{{ URL::asset('bnlogin/images/img-01.png') }}"  alt="IMG">
            </div>
            <!-- <div class="login100-form validate-form">
                <div class="card-header">{{ __('Login') }}</div>
                <div class="card-body"> -->
                    <form class="login100-form validate-form" method="POST" action="{{ route('login') }}">
                    <span class="login100-form-title">
						Member Login
					</span>
                        <div class="wrap-input100 validate-input">
                                <input id="email" type="email" class="input100" name="email" value="{{ old('email') }}" required autocomplete="email" placeholder="Username" autofocus >
                                <span class="focus-input100"></span>
                                <span class="symbol-input100">
                                    <i class="fa fa-envelope" aria-hidden="true"></i>
                                </span>
                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        </div>

                        <div class="wrap-input100 validate-input" data-validate = "Password is required">
                            <!-- <div class="col-md-6"> -->
                                <input id="password" type="password" class="input100" name="password" required autocomplete="current-password" placeholder="Password">
                                <span class="focus-input100"></span>
                                <span class="symbol-input100">
                                    <i class="fa fa-lock" aria-hidden="true"></i>
                                </span>
                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            <!-- </div> -->
                        </div>
                        <div class="container-login100-form-btn">
                            <button class="login100-form-btn" type="submit">
                                Login
                            </button>
                        </div>
                        <div class="container-login100-form-btn">
                        <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                        </div>
                    </form>
                <!-- </div>
            </div> -->
        </div>
    </div>
</div>

<!--===============================================================================================-->
<script src="{{ URL::asset('bnlogin/vendor/jquery/jquery-3.2.1.min.js') }}"></script>
<!--===============================================================================================-->
<script src="{{ URL::asset('bnlogin/vendor/bootstrap/js/popper.js') }}"></script>
<script src="{{ URL::asset('bnlogin/vendor/bootstrap/js/bootstrap.min.js') }}"></script>
<!--===============================================================================================-->
<script src="{{ URL::asset('bnlogin/vendor/select2/select2.min.js') }}"></script>
<!--===============================================================================================-->
<script src="{{ URL::asset('bnlogin/vendor/tilt/tilt.jquery.min.js') }}"></script>
<script >
    $('.js-tilt').tilt({
        scale: 1.1
    })
</script>
<!--===============================================================================================-->
<script src="{{ URL::asset('bnlogin/js/main.js') }}"></script>

</body>
</html>

