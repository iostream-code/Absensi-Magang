<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Absensi Magang</title>
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
                        <a href="index.html"><img src="assets/images/logo/logo.svg" alt="Logo"></a>
                    </div>
                    <h1 class="auth-title">Log in.</h1>
                    <p class="auth-subtitle mb-5">Log in with your data that you entered during registration.</p>

                    <form action="{{ route('actionlogin') }}" method="post">
                        @csrf
                        <div class="form-group position-relative has-icon-left mb-4">
                            <input type="text" name="username" class="form-control form-control-xl" placeholder="Username">
                            <div class="form-control-icon">
                                <i class="bi bi-person"></i>
                            </div>
                        </div>
                        <div class="form-group position-relative has-icon-left mb-4">
                            <input type="password" name="password" class="form-control form-control-xl" placeholder="Password">
                            <div class="form-control-icon">
                                <i class="bi bi-shield-lock"></i>
                            </div>
                        </div>
                        <button class="btn btn-primary btn-lg shadow-lg mt-3" type="submit">Submit</button>
                    </form>
            
                    <button class="btn btn-primary btn-lg shadow-lg mt-5" onclick="location.href='{{ url('/home') }}'">User</button>
                    <button class="btn btn-primary btn-lg shadow-lg mt-5" onclick="location.href='{{ url('/admin') }}'">Admin</button>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
