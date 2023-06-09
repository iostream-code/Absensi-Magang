<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>IQ TEST</title>
    <link rel="stylesheet" href="{{ asset('assets/css/main/app.css') }}">
    <link rel="stylesheet" href="assets/css/pages/auth.css">
    <link rel="shortcut icon" href="assets/images/logo/favicon.svg" type="image/x-icon">
    <link rel="shortcut icon" href="assets/images/logo/favicon.png" type="image/png">

    <style>
        .center {
            margin: auto;
        }

        #auth #auth-left .auth-logo {
            margin-bottom: 1rem;
        }
    </style>
</head>

<body>
    <div id="auth">
        <div class="flex">
            <div class="col-12 col-lg-7 col-md-9 center">
                <div id="auth-left">
                    <div class="auth-logo">
                        <img src="assets/images/logo/logo.svg" alt="Logo">
                    </div>
                    <h1 class="auth-title">Log in.</h1>
                    <form action="{{ route('action_login') }}" method="post">
                        @csrf
                        <div class="form-group position-relative has-icon-left mb-4">
                            <input type="email" name="email" class="form-control form-control-xl"
                                placeholder="Email">
                            <div class="form-control-icon">
                                <i class="bi bi-person"></i>
                            </div>
                        </div>
                        <div class="form-group position-relative has-icon-left mb-4">
                            <input type="password" name="password" class="form-control form-control-xl"
                                placeholder="Password">
                            <div class="form-control-icon">
                                <i class="bi bi-shield-lock"></i>
                            </div>
                        </div>
                        <button class="btn btn-primary btn-block btn-lg shadow-lg mt-2" type="submit">Login</button>
                    </form>
                    <div class="text-start mt-5 text-lg fs-4">
                        <p class="text-gray-600">Don't have an account? <a href="{{ route('register') }}"
                                class="font-bold">Sign
                                up</a>.</p>
                        {{-- <p><a class="font-bold" href="auth-forgot-password.html">Forgot password?</a>.</p> --}}

                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
