<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.98.0">
    <title> Register</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.2/examples/sign-in/">
    <link rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/select2-bootstrap-5-theme@1.2.0/dist/select2-bootstrap-5-theme.min.css" />
    <link href="style.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('/css/bootstrap.min.css') }}">

    <script src="https: //ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>

    <script src=" {{ asset('js/jquery.table2excel.js') }}"></script>
</head>
<div class="container">

    <div class="row justify-content-center">
        <div class="col-md-4">

            <body class="text-center">

                <main class="form-signin w-100 m-auto">
                    <form>
                        <img class="mb-4" src="../assets/brand/bootstrap-logo.svg" alt="" width="72"
                            height="57">
                        <h1 class="h3 mb-3 fw-normal">Please sign in</h1>

                        <div class="form-floating">
                            <input type="text" class="form-control" id="name" name="name"
                                placeholder="Bank Sumsel">
                            <label for="name">Nama</label>
                        </div>
                        <div class="form-floating">
                            <input type="text" class="form-control" id="username" name="username"
                                placeholder="Example Name">
                            <label for="username">Username</label>
                        </div>

                        <div class="form-floating">
                            <input type="email" class="form-control" id="floatingInput"
                                placeholder="name@example.com">
                            <label for="floatingInput">Email address</label>
                        </div>
                        <div class="form-floating">
                            <input type="password" class="form-control" id="floatingPassword" placeholder="Password">
                            <label for="floatingPassword">Password</label>
                        </div>
                        <button class="w-100 btn btn-lg btn-primary" type="submit">Sign in</button>

                    </form>
                </main>



            </body>
        </div>
    </div>
</div>




</html>
