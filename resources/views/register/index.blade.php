<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.98.0">
    <title> Register </title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.2/examples/sign-in/">
    <link rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/select2-bootstrap-5-theme@1.2.0/dist/select2-bootstrap-5-theme.min.css" />
    <link rel="stylesheet" href="{{ asset('/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('/css/bootstrap.min.css') }}">


</head>
<div class="container">

    <div class="row justify-content-center">
        <div class="col-md-4">

            <body class="text-center">

                <main class="form-signin w-100 m-auto">
                    <form action="/register" method="POST">
                        @csrf
                        <img class="mb-4" alt="">
                        <h1 class="h3 mb-3 fw-normal">Register</h1>

                        <div class="form-floating">
                            <input type="text" class="form-control" id="nama" name="nama"
                                placeholder="Input Nama">
                            <label for="nama">Nama</label>

                        </div>

                        <div class="form-floating">
                            <input type="text" class="form-control " name="username" placeholder="Input Username">
                            <label for="username">Username</label>
                        </div>

                        <div class="form-floating">
                            <input type="email" class="form-control" id="email" placeholder="Input Email">
                            <label for="email">Email address</label>
                        </div>

                        <div class="form-floating">
                            <input type="password" class="form-control " id="password" placeholder="Password">
                            <label for="password">Password</label>
                        </div>

                        <button class="w-100 btn btn-lg btn-primary" type="submit">Sign in</button>

                    </form>
                    <small class="d-block text-center mt-3"> Already Registered <a href="/login">Login
                        </a></small>


                </main>
            </body>
        </div>
    </div>
</div>

</html>
