<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign in - School Management Admin Dashboard</title>
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.css') }}">

    <link rel="shortcut icon" href="" type="image/x-icon">
    <link rel="stylesheet" href="{{ asset('assets/css/app.css') }}">
</head>

<body>
    <div id="auth">

        <div class="container">
            <div class="row">
                <div class="col-md-5 col-sm-12 mx-auto">
                    <div class="card pt-3">
                        <div class="card-body">
                            <div class="text-center mb-3">
                                <!-- <img src="assets/images/favicon.svg" height="48" class='mb-4'> -->
                                @if (session('msg'))
                                <div class="alert alert-danger" role="alert">
                                    <span class="">{{ session('msg') }}</span>
                                </div>
                                @endif

                                <h3>Admin Dashboard</h3>
                                <p>Please Login to continue</p>
                            </div>
                            <form action="{{ url('/login_submit') }}" method="POST">
                                @csrf
                                <div class="form-group position-relative has-icon-left">
                                    <label for="username">Username</label>
                                    <div class="position-relative">
                                        <input type="text" class="form-control" id="username" name="username" placeholder="username">
                                        <div class="form-control-icon">
                                            <i data-feather="user"></i>
                                        </div>
                                    </div>
                                    @error('username')
                                    <span class="text-danger">{{ $message }}</span>
                                    @enderror

                                </div>
                                <div class="form-group position-relative has-icon-left mb-3">
                                    <div class="clearfix">
                                        <label for="password">Password</label>
                                        <a href="#" class='float-end mt-1'>
                                            <span>Forgot password?</span>
                                        </a>
                                    </div>
                                    <div class="position-relative">
                                        <input type="password" class="form-control" id="password" name="password" placeholder="password">
                                        <div class="form-control-icon">
                                            <i data-feather="lock"></i>
                                        </div>
                                    </div>
                                    @error('password')
                                    <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            <div class="row">
                                <div class="col-sm-6">
                                    <button type="submit" class="btn btn-block mb-2 btn-primary"><i data-feather="log-in"></i>
                                        Submit</button>
                                </div>
                                <div class="col-sm-6">
                                    <button type="reset" class="btn btn-block mb-2 btn-secondary"><i data-feather="refresh-ccw"></i>
                                        Reset</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <script src="{{ asset('assets/js/feather.min.js') }}"></script>
    <script src="{{ asset('assets/js/app.js') }}"></script>

    <script src="{{ asset('assets/js/main.js') }}"></script>
</body>

</html>
