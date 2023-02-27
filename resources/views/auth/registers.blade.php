<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Pengaduan Masyarakat - Register</title>
    <!-- Bootstrap  -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    {{-- my css --}}
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/auth.css') }}">
</head>

<body>
    <div class="">
        <div class="col-12">
            <div class="card-auth">
                <div class="row">
                    <div class="col-6 bg-purple vh-100">
                        <div class="auth-image">
                            <img src="{{ asset('assets/image/login.png') }}" alt="">
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="container">
                            <form action="{{ url('postregister') }}" method="post">
                                {{csrf_field()}}
                                <div class="form-auth-register">
                                    <h1>Register</h1>
                                    <div class="input-form">
                                        <h3>NIK</h3>
                                        <input type="text" name="nik" placeholder="NIK">
                                    </div>
                                    <div class="input-form">
                                        <h3>Nama</h3>
                                        <input type="text"  name="display_name" placeholder="Nama Lengkap">
                                    </div>
                                    <div class="input-form">
                                        <h3>Username</h3>
                                        <input type="text" name="username" placeholder="User Name">
                                    </div>
                                    <div class="input-form">
                                        <h3>Password</h3>
                                        <input type="password" name="password" placeholder="password">
                                    </div>
                                    <div class="input-form">
                                        <h3>No Telp</h3>
                                        <input type="number" name="tlp" placeholder="No. Telp">
                                    </div>

                                    <h5>have account ?
                                        <a href="login">
                                            <span>Login</span>
                                        </a>
                                    </h5>
                                    <button type="submit" class="login-btn">Register</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
