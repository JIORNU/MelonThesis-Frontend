<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <!-- add - css -->
    <!-- <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet"> -->
    <!-- Styles -->
    <!-- <link href="{{ asset('css/app.css') }}" rel="stylesheet"> -->
    {{-- css --}}
    <!-- <link rel="stylesheet" href="{{asset('assets/css/teacher/teacherlayouts.css')}}"> -->
    {{-- bootstrap --}}
    <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    <script src="{{asset('assets/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{asset('assets/bootstrap/js/popper.min.js')}}"></script>
    {{-- <script src="{{asset('assets/bootstrap/js/bootstrap.min.js')}}"></script> --}}
    <script src="{{asset('assets/jquery/jquery-3.6.0.min.js')}}"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">
    <link rel="stylesheet" href="{{asset('assets/bootstrap/css/bootstrap.css')}}">
    <link rel="stylesheet" href="{{asset('assets/bootstrap/css/bootstrap.min.css')}}"> -->

    <!-- <link rel="stylesheet" href="{{asset('assets/bootstrap/css/bootstrap-icons.css')}}"> -->

    <!-- Style -->
    <!--===============================================================================================-->
    <link rel="icon" type="image/png" href="{{asset('assets/images/favicon.ico')}}" />
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{asset('assets/adminlogin/vendor/bootstrap/css/bootstrap.min.css')}}">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{asset('assets/adminlogin/fonts/font-awesome-4.7.0/css/font-awesome.min.css')}}">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{asset('assets/adminlogin/vendor/animate/animate.css')}}">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{asset('assets/adminlogin/vendor/css-hamburgers/hamburgers.min.css')}}">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{asset('assets/adminlogin/vendor/select2/select2.min.css')}}">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{asset('assets/adminlogin/css/util.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('assets/adminlogin/css/main.css')}}">
    <!--===============================================================================================-->

    <!-- Script -->

    <!--===============================================================================================-->
    <script src="{{asset('assets/adminlogin/vendor/jquery/jquery-3.2.1.min.js')}}"></script>
    <!--===============================================================================================-->
    <script src="{{asset('assets/adminlogin/vendor/bootstrap/js/popper.js')}}"></script>
    <script src="{{asset('assets/adminlogin/vendor/bootstrap/js/bootstrap.min.js')}}"></script>
    <!--===============================================================================================-->
    <script src="{{asset('assets/adminlogin/vendor/select2/select2.min.js')}}"></script>
    <!--===============================================================================================-->
    <script src="{{asset('assets/adminlogin/vendor/tilt/tilt.jquery.min.js')}}"></script>
    <script>
        $('.js-tilt').tilt({
            scale: 1.1
        })
    </script>
    <!--===============================================================================================-->
    <script src="{{asset('assets/adminlogin/js/main.js')}}"></script>

</head>

<body>
    <div id="content">
        <div class="container-fluid p-0">

            <div class="limiter">
                <div class="container-login100">
                    <div class="wrap-login100" style="box-shadow: 4px 3px 7px #6b6b6bcc">
                        <div class="login100-pic js-tilt" data-tilt>
                            <img src="{{asset('assets/adminlogin/images/img-melon-02.png')}}" alt="IMG">
                        </div>
                        {{-- formlogin --}}
                        <form class="login100-form validate-form" action="{{ route('login') }}" method="post">
                            <span class="login100-form-title" style="font-size: 2.5rem;padding-bottom:2rem;">
                                ยินดีต้อนรับ
                            </span>


                            @csrf

                            <!-- input username -->

                            <div class="wrap-input100 validate-input" data-validate="Valid email is required: ex@abc.xyz">
                                <input class="input100" id="user" type="text" name="username" placeholder="ชื่อผู้ใช้">
                                <span class="focus-input100"></span>
                                <span class="symbol-input100">
                                    <i class="fa fa-envelope" aria-hidden="true"></i>
                                </span>
                            </div>

                            <!-- input password -->

                            <div class="wrap-input100 validate-input" data-validate="Password is required">
                                <input id="password" class="input100" type="password" name="password" placeholder="รหัสผ่าน">
                                <span class="focus-input100"></span>
                                <span class="symbol-input100">
                                    <i class="fa fa-lock" aria-hidden="true"></i>
                                </span>
                            </div>

                            <!-- login-button -->

                            <div class="container-login100-form-btn">
                                <button class="login100-form-btn">
                                    เข้าสู่ระบบ
                                </button>
                            </div>

                            <!-- forgot password -->

                            <div class="text-center p-t-12">
                                <span class="txt1">
                                    คุณลืม
                                </span>
                                <a class="txt2" href="{{ url('/password/reset') }}">
                                    รหัสผ่านผู้ใช้ ?
                                </a>
                            </div>

                            <div class="text-center p-t-200">
                                <a class="txt2" href="#">


                                </a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            {{-- --}}
        </div>
    </div>
</body>
<style></style>

</html>