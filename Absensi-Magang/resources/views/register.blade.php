<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link rel="stylesheet" href="assets/css/main/app.css">
    <link rel="stylesheet" href="assets/css/pages/auth.css">
    <link rel="shortcut icon" href="assets/images/logo/favicon.svg" type="image/x-icon">
    <link rel="shortcut icon" href="assets/images/logo/favicon.png" type="image/png">
</head>

<body>
    <section class="vh-100"
        style="background: #373B44;
    background: linear-gradient(90deg, #373B44 0%, #4286f4 75%);">
        <div class="container py-5 h-100">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col-12 col-md-8 col-lg-6 col-xl-5">
                    <div class="card shadow-2-strong" style="border-radius: 1rem;">
                        <div class="card-body p-5 text-center">
                            <h2 class="mb-5">Sign Up</h2>
                            <form action="postlogin" method="POST">
                                @csrf
                                @if (session()->has('success'))
                                    <div class="alert alert-success">
                                        {{ session()->get('success') }}
                                    </div>
                                @endif
                                @if (session()->has('error'))
                                    <div class="alert alert-danger">
                                        {{ session()->get('error') }}
                                    </div>
                                @endif
                                <div class="form-outline mb-4">
                                    <label class="form-label" for="typeEmailX-2">Name</label>
                                    <input type="email" id="typeEmailX-2" class="form-control form-control-lg"
                                        name="name" />
                                </div>
                                <div class="form-outline mb-4">
                                    <label class="form-label" for="typeEmailX-2">Email</label>
                                    <input type="email" id="typeEmailX-2" class="form-control form-control-lg"
                                        name="email" />
                                </div>
                                <div class="form-outline mb-4">
                                    <label class="form-label" for="typePasswordX-2">Password</label>
                                    <input type="password" id="typePasswordX-2" class="form-control form-control-lg"
                                        name="password" />
                                </div>
                                <div class="form-group position-relative has-icon-left mb-4">
                                    <select class="form-select" aria-label="Default select example" name="role">
                                        <option selected>Role</option>
                                        <option value="admin">Admin</option>
                                        <option value="students">Students</option>
                                    </select>
                                </div>

                                <button class="btn btn-primary btn-lg btn-block" type="submit">Daftar</button>
                            </form>
                            <div class="text-center mt-5 text-lg fs-6">
                                <p class='text-gray-600'>Already have an account? <a href="{{ url('login') }}"
                                        class="font-bold">Login</a>.</p>
                            </div>
                        </div>
                        <button class="btn btn-primary btn-block btn-lg shadow-lg mt-5" type="submit">Sign Up</button>
                    </form>
                    <div class="text-center mt-5 text-lg fs-4">
                        <p class='text-gray-600'>Already have an account? <a href="{{ route('login') }}"
                                class="font-bold">Log
                                in</a>.</p>
                    </div>
                </div>
            </div>
    </section>
</body>

</html>
