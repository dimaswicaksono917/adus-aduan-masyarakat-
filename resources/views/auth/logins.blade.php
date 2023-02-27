<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Pengaduan Masyarakat - Login</title>
    <!-- Bootstrap  -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    {{-- my css --}}
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/auth.css') }}">

</head>

<body>
    <section>
        <div class="col-12">
            <div class="card">
                <div class="row">
                    <div class="col-6 bg-purple vh-100">
                        <div class="auth-image">
                            <img src="{{ asset('assets/image/login.png') }}" alt="">
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="container">
                            <form action="{{url ('cek_login')}}" method="post">
                                {{csrf_field()}}
                                @csrf
                                <div class="form-auth-login">
                                    <h1>Login</h1>
                                    <div class="input-form">
                                        <h3>Username</h3>
                                        <input name="username" type="text">
                                    </div>
                                    <div class="input-form">
                                        <h3>Password</h3>
                                        <input name="password" type="password">
                                    </div>
                                    <h5>dont have account ?
                                        <a href="register">
                                            <span>Register Now</span>
                                        </a>
                                    </h5>
                                    <button class="login-btn">Login</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</body>

</html>
