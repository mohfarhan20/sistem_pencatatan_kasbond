  <!doctype html>
  <html lang="en">

  <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="description" content="">
      <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
      <meta name="generator" content="Hugo 0.98.0">
      {{-- <link rel="stylesheet" href="signin.css"> --}}
      <title>Sign in </title>

      <link rel="canonical" href="https://getbootstrap.com/docs/5.2/examples/sign-in/">
      <link rel="stylesheet"
          href="https://cdn.jsdelivr.net/npm/select2-bootstrap-5-theme@1.2.0/dist/select2-bootstrap-5-theme.min.css" />
      {{-- <link rel="stylesheet" href="{{ asset('/css/style.css') }}"> --}}
      
      <link rel="stylesheet" href="{{ asset('/css/bootstrap.min.css') }}">
      <link rel="stylesheet" href="{{ asset('/css/style_login.css') }}">
      
      <!-- Poppins Font -->
      <link rel="preconnect" href="https://fonts.googleapis.com">
      <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
      <link rel="preconnect" href="https://fonts.googleapis.com">
      <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
      <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&display=swap" rel="stylesheet">


  </head>
  <body>
      <!-- Navbar -->
      <section section class="sticky-top">
          <nav class="navbar navbar-expand-lg shadow">
          <div class="container">
              <a class="navbar-brand fw-bold" href="index.html">BSB BISA</a>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse justify-content-end" id="navbarNavDropdown">
              <ul class="navbar-nav">
                  <li class="nav-item mx-3">
                  <a class="nav-link" aria-current="page" href="/">BERANDA</a>
                  </li>
                  <li class="nav-item mx-3 dropdown">
                  <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                      FITUR
                  </a>
                  <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                      <li><a class="dropdown-item" href="/pesirah-page">PESIRAH</a></li>
                      <li><a class="dropdown-item" href="/kur-page">KREDIT USAHA RAKYAT(KUR)</a></li>
                      <li><a class="dropdown-item" href="/ksg-page">KREDIT SERBA GUNA (KSG)</a></li>
                      <li><a class="dropdown-item" href="/login">EMPLOYEE ROOM</a></li>
                  </ul>
                  </li>
                  <li class="nav-item mx-3">
                  <a class="nav-link" href="index.html#about">TENTANG</a>
                  </li>
                  <li class="nav-item mx-3">
                  <a class="nav-link" href="#">KONTAK</a>
                  </li>
              </ul>
              </div>
          </div>
          </nav>
      </section>
      <!-- End Navbar -->

      <!-- Login and Vector image  -->
      <section class="login-and-vector">
          <div class="container-lg">
              <div class="row align-items-center justify-content-center">
                  <div class="col-lg-6 ps-5">
                    @if(session()->has('loginError'))
                      <div class="alert alert-danger alert-dismissible fade show" role="alert">
                        {{ session('loginError') }}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="close"></button>
                      </div>
                    @endif
                    @if(session()->has('success'))
                      <div class="alert alert-success alert-dismissible fade show" role="alert">
                        {{ session('success') }}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="close"></button>
                      </div>
                    @endif
                      <h1>EMPLOYEE ROOM</h1>
                      <p>Selamat Datang di Employee Room BSB Bisa.<br>
                          Kinerjamu kesejahteraan kita bersama.</p>
                      <div class="form">
                          <form action="/login" method="POST">
                              @csrf
                              <table>
                                  <tr>
                                      <td><label for="username">Username</label></td>
                                      <td>:</td>
                                      <td><input type="text" name="username" id="username" class="form-control input @error('username') is-invalid @enderror" placeholder="Input Username" autofocus required value="{{ old('username') }}"></td>
                                  </tr>
                                      @error('username')
                                      <div class="invalid-feedback">
                                        {{ $message }}
                                      </div>
                                      @enderror
                                  <tr>
                                      <td><label for="password">Password</label></td>
                                      <td>:</td>
                                      <td><input type="password" name="password" id="password" class="form-control input"  placeholder="Input Password"></td>
                                  </tr>
                                  <tr>
                                      <td colspan="3">
                                          <button class="button-primary" type="submit">Login</button>
                                          <button class="button-secondary" type="reset">Hapus</button>
                                      </td>
                                  </tr>
                              </table>
                          </form>
                      </div>
                  </div>
                  <div class="col-lg-6">
                      <img src="assets/employee-vector.png" alt="Employee Vector" class="img-fluid">
                  </div>
              </div>
          </div>
      </section>
      <!-- End login and vector image -->

      <!-- Footer -->
      <section class="footer">
          <div class="container-lg pt-5">
          <div class="row">
              <div class="col-lg-3 offset-lg-1">
              <h1>BSB BISA</h1>
              </div>
              <div class="menu col-lg-3">
                  <ul>
                  <li><a href="/">Beranda</a></li>
                  <li><a href="/pesirah-page">Pesirah</a></li>
                  <li><a href="/kur-page">Kredit Usaha Rakyat (KUR)</a></li>
                  <li><a href="/ksg-page">Kredit Serba Guna (KSG)</a></li>
                  <li><a href="/login">Employee Room</a></li>
                  </ul>
              </div>
              <div class="col-lg-4 address">
              <h4 class="fw-bold">BANK SUMSEL BABEL 
                  CAB. KAPTEN A. RIVAI</h4>
              <p>Jl. Kapten A. Rivai No.21, Sungai Pangeran, Kec. Ilir Tim. I, Kota Palembang, Sumatera Selatan 30129</p>
              </div>
          </div>
          <div class="row mt-5">
              <div class="col-lg-12">
              <p class="copyright text-center">COPYRIGHT 2022 BANK SUMSEL BABEL</p>
              </div>
          </div>
          </div>
      </section>
      <!-- End Footer -->


      <!-- Bootstrap 5.2 js cdn -->
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>

  </body>
  </html>
