<!DOCTYPE html>
<html lang="en">
<head>
    <title>Login</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--===============================================================================================-->
    <link rel="icon" type="image/png" href="{{ asset('loginv') }}/images/icons/favicon.ico"/>
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{ asset('loginv') }}/vendor/bootstrap/css/bootstrap.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{ asset('loginv') }}/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{ asset('loginv') }}/vendor/animate/animate.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{ asset('loginv') }}/vendor/css-hamburgers/hamburgers.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{ asset('loginv') }}/vendor/select2/select2.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{ asset('loginv') }}/css/util.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('loginv') }}/css/main.css">
    <!--===============================================================================================-->
</head>
<body>

<div class="limiter">


    <div class="container-login100">
        <div class="wrap-login100">
            <div class="login100-pic js-tilt" data-tilt>
                <img src="{{ asset('loginv') }}/images/img-01.png" alt="IMG">
            </div>

            <form class="login100-form validate-form" method="post">
                {{ csrf_field() }}
                @if(session('loginError'))
                    <div class="alert alert-danger">
                        {{ session('loginError') }}
                    </div>
                @endif
					<span class="login100-form-title">
						Admin Login
					</span>

                <div class="wrap-input100 validate-input" data-validate = "Username is required">
                    <input class="input100" type="text" name="username" placeholder="Username">
                    <span class="focus-input100"></span>
                    <span class="symbol-input100">
							<i class="fa fa-envelope" aria-hidden="true"></i>
						</span>
                </div>

                <div class="wrap-input100 validate-input" data-validate = "Password is required">
                    <input class="input100" type="password" name="password" placeholder="Password">
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

                <!--<div class="text-center p-t-12" style="opacity:0;">
						<span class="txt1">
							Forgot
						</span>
                    <a class="txt2">
                        Username / Password?
                    </a>
                </div>-->

                <div class="text-center p-t-136" style="opacity:0;">
                    <!--<a class="txt2">
                        Create your Account
                        <i class="fa fa-long-arrow-right m-l-5" aria-hidden="true"></i>
                    </a>-->
                </div>
            </form>
        </div>
    </div>
</div>




<!--===============================================================================================-->
<script src="{{ asset('loginv') }}/vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
<script src="{{ asset('loginv') }}/vendor/bootstrap/js/popper.js"></script>
<script src="{{ asset('loginv') }}/vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
<script src="{{ asset('loginv') }}/vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
<script src="{{ asset('loginv') }}/vendor/tilt/tilt.jquery.min.js"></script>
<script >
    $('.js-tilt').tilt({
        scale: 1.1
    })
</script>
<!--===============================================================================================-->
<script src="{{ asset('loginv') }}/js/main.js"></script>

</body>
</html>