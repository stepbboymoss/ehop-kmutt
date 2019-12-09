<!DOCTYPE html>
<html lang="en">
<head>
    <title>Login E-Bus Dashboard</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--===============================================================================================-->
    <link rel="icon" type="image/png" href="{{ URL::asset('assets/img/bus-and-wifi-signal.png') }}">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('bnlogin/vendor/bootstrap/css/bootstrap.min.css')}}">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('bnlogin/fonts/font-awesome-4.7.0/css/font-awesome.min.css')}}">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('bnlogin/vendor/animate/animate.css')}}">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('bnlogin/vendor/css-hamburgers/hamburgers.min.css')}}">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('bnlogin/vendor/select2/select2.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('bnlogin/css/util.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('bnlogin/css/main.css')}}">
    <!--===============================================================================================-->
</head>
<body>

<div class="limiter">
    <div class="container-login100">
        <div class="wrap-login100">
            <div class="login100-pic js-tilt" data-tilt>
                <img src="bnlogin/images/img-01.png" alt="IMG">
            </div>

            <form class="login100-form validate-form" method="POST" action="{{ route('login') }}">
                @csrf

                <span class="login100-form-title">
						Member Login
					</span>

                <div class="wrap-input100 validate-input">
                    <input class="input100 @error('email') is-invalid @enderror" type="email" name="email"
                           value="{{ old('email') }}" required autocomplete="email" placeholder="E-mail">

                    @error('email')
                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                    @enderror
                    <span class="focus-input100"></span>
                    <span class="symbol-input100">
							<i class="fa fa-envelope" aria-hidden="true"></i>
						</span>
                </div>

                <div class="wrap-input100 validate-input" data-validate = "Password is required">
                    <input class="input100 @error('password') is-invalid @enderror" type="password" name="password"
                           placeholder="Password" required autocomplete="current-password">

                    @error('password')
                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                    @enderror
                    <span class="focus-input100"></span>
                    <span class="symbol-input100">
							<i class="fa fa-lock" aria-hidden="true"></i>
						</span>
                </div>

                <div class="container-login100-form-btn">
                    <button class="login100-form-btn">
                        Login
                    </button>
                </div>

                <div class="text-center p-t-12">
						<span class="txt1">
							Forgot
						</span>
                    <a class="txt2" href="#">
                        Username / Password?
                    </a>
                </div>
            </form>
        </div>
    </div>
</div>




<!--===============================================================================================-->
<script src="{{ URL::asset('bnlogin/vendor/jquery/jquery-3.2.1.min.js')}}"></script>
<!--===============================================================================================-->
<script src="{{ URL::asset('bnlogin/vendor/bootstrap/js/popper.js')}}"></script>
<script src="{{ URL::asset('bnlogin/vendor/bootstrap/js/bootstrap.min.js')}}"></script>
<!--===============================================================================================-->
<script src="{{ URL::asset('bnlogin/vendor/select2/select2.min.js')}}"></script>
<!--===============================================================================================-->
<script src="{{ URL::asset('bnlogin/vendor/tilt/tilt.jquery.min.js')}}"></script>
<script >
    $('.js-tilt').tilt({
        scale: 1.1
    })
</script>
<!--===============================================================================================-->
<script src="{{ URL::asset('bnlogin/js/main.js')}}"></script>

</body>
</html>


