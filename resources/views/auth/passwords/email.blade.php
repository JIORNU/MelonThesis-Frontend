<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- add - css -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    {{-- css --}}
    <link rel="stylesheet" href="{{asset('assets/css/teacher/teacherlayouts.css')}}">
    {{-- bootstrap --}}
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    <script src="{{asset('assets/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{asset('assets/bootstrap/js/popper.min.js')}}"></script>
    {{-- <script src="{{asset('assets/bootstrap/js/bootstrap.min.js')}}"></script> --}}
    <script src="{{asset('assets/jquery/jquery-3.6.0.min.js')}}"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">
    <link rel="stylesheet" href="{{asset('assets/bootstrap/css/bootstrap.css')}}">
    <link rel="stylesheet" href="{{asset('assets/bootstrap/css/bootstrap.min.css')}}">

    <link rel="stylesheet" href="{{asset('assets/bootstrap/css/bootstrap-icons.css')}}">

    <title>Reset Password</title>
</head>

<body>
    <div id="content">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="card" style="background: linear-gradient(135deg, #EC720E 0%, #FA0F59 100%);box-shadow:2px 2px 5px rgb(0 0 0 / 40%); ">
                        <div class=" card-header">{{ __('รีเซ็ตรหัสผ่าน') }}</div>

                        <div class="card-body" style="background: linear-gradient(135deg, #FDA55D 0%, #f35587 100%);">
                            @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                            @endif

                            <form method="POST" action="{{ route('password.email') }}">
                                @csrf

                                <div class="form-group row p-3">
                                    <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('อีเมล์') }}</label>

                                    <div class="col-md-6">
                                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                        @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="form-group row mb-0">
                                    <div class="d-flex justify-content-center">

                                        <div class="col-md-6">
                                            <div class="d-flex justify-content-center">
                                                <button type="submit" class="btn btn-primary" style="background-color:#FFD07F; 
                                    border-color:#FFD07F ; color:#3D2D19;box-shadow:2px 2px 5px rgb(0 0 0 / 40%); ">
                                                    {{ __('ส่งลิงค์รีเซ็ตรหัสผ่าน') }}
                                                </button>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</body>
<style>
    *,
    ::after,
    ::before {
        box-sizing: border-box;
        margin: 0;
    }

    body {
        font-size: 1rem;
        font-weight: 400px;
        line-height: 1.5;
        color: black;
        background: linear-gradient(135deg, #F6D9BA 60%, #D6BC9C 100%);

    }

    #content {
        padding: 12px;
        width: 100%;
        min-height: 100vh;
        justify-content: center;
        display: flex;
        flex-wrap: wrap;
        align-items: center;
    }
</style>

</html>