    <!DOCTYPE html>
    <html lang="en">
    <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Beranda</title>

    <!-- Bootstrap 5.2 css cdn -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">

    <!-- Added CSS -->
    <link rel="stylesheet" href="{{ asset('/css/style_home.css') }}">

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
                    <a class="navbar-brand fw-bold" href="/">BSB BISA</a>
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
                                    <li><a class="dropdown-item" href="/kur-page">KREDIT USAHA RAKYAT (KUR)</a></li>
                                    <li><a class="dropdown-item" href="/ksg-page">KREDIT SERBA GUNA (KSG)</a></li>
                                    <li><a class="dropdown-item" href="/login">EMPLOYEE ROOM</a></li>
                                </ul>
                            </li>
                            <li class="nav-item mx-3">
                                <a class="nav-link" href="/#about">TENTANG</a>
                            </li>
                            <li class="nav-item mx-3">
                                <a class="nav-link" href="/#contact">KONTAK</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
        </section>
        <!-- End Navbar -->


    <!-- Carousel hero img -->
    <section class="hero pl-lg-5 px-5 shadow">
        <!-- <div class="container"> -->
        <div class="row align-items-center">
            <div class="col-lg-7">
            <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="assets/img/hero1.png" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="assets/img/hero2.png" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="assets/img/hero3.png" class="d-block w-100" alt="...">
                </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
                </button>
            </div>
            </div>
            <div class="title col-lg-5">
            <h1 class="main-title">SELAMAT DATANG DI BSB BISA</h1>
            <p class="title-desc">Website Pelayanan Bank Sumsel Babel Cab. Kapten A. Rivai</p>
            </div>
        </div>
        <!-- </div> -->
    </section>
    <!-- End carousel hero -->

    <!-- Layanan Kami -->
        <section id="service">
        <div class="container-lg mt-5">
            <div class="sub-title text-center">
                <h2>Layanan Kami</h2>
                <p class="fw-bold">BSB BISA membantu pengalaman perbankan kamu!</p>
            </div>
            <div class="row mt-5 mb-3">
            <div class="col-lg-4 text-center">
                <a href="/pesirah-page">
                <div class="card-service mb-4">
                    <div class="box-icon-service position-relative mx-auto">
                    <img src="assets/img/logo-card-pesirah.png" alt="Pesirah" class="position-absolute top-50 start-50 translate-middle">
                    </div>
                    <h3 class="mt-4">PESIRAH</h3>
                    <p class="mt-2">PENGGERAK POTENSI DAERAH</p>
                </div>
                </a>
            </div>
            <div class="col-lg-4 text-center">
                <a href="/kur-page">
                <div class="card-service mb-4">
                    <div class="box-icon-service position-relative mx-auto">
                    <img src="assets/img/logo kur.jpeg" alt="Pesirah" class="position-absolute top-50 start-50 translate-middle">
                    </div>
                    <h3 class="mt-4">KUR</h3>
                    <p class="mt-2">KREDIT USAHA RAKYAT</p>
                </div>
                </a>
            </div>
            <div class="col-lg-4 text-center">
                <a href="/ksg-page">
                <div class="card-service mb-4">
                    <div class="box-icon-service position-relative mx-auto">
                    <img src="assets/img/logo-card-KSG.png" alt="Pesirah" class="position-absolute top-50 start-50 translate-middle">
                    </div>
                    <h3 class="mt-4">KSG</h3>
                    <p class="mt-2">KREDIT SERBA GUNA</p>
                </div>
                </a>
            </div>
            </div>
        </div>
        </section>
    <!-- End Layanan Kami -->

    <!-- Tentang -->
        <section id="about">
        <div class="container-lg">
            <div class="sub-title text-center">
            <h2>Tentang</h2>
            <p class="fw-bold">BSB BISA siap melayani kapanpun dan dimanapun!</p>
            </div>
            <div class="container mt-5">
            <div class="row align-items-center first">
                <div class="col-lg-4 text-center">
                <img src="assets/img/about-pict-1.png" alt="image for about">
                </div>
                <div class="col-lg-8">
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mollis at turpis diam viverra ultrices sociis mauris maecenas pellentesque. Volutpat aliquam vulputate non eu. Risus volutpat pretium, habitant imperdiet sed elementum commodo ut commodo. Non vitae in fringilla mi. Sed amet massa quis nisl elit aliquet tellus, id. Tempus massa fermentum tortor, cras mi quis quam libero. Bibendum in dolor ultricies imperdiet leo rhoncus ut. Enim fermentum congue fusce volutpat vel. Phasellus interdum enim, egestas consectetur placerat nisl.</p>
                </div>
            </div>
            <div class="row align-items-center">
                <div class="col-lg-8">
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mollis at turpis diam viverra ultrices sociis mauris maecenas pellentesque. Volutpat aliquam vulputate non eu. Risus volutpat pretium, habitant imperdiet sed elementum commodo ut commodo. Non vitae in fringilla mi. Sed amet massa quis nisl elit aliquet tellus, id. Tempus massa fermentum tortor, cras mi quis quam libero. Bibendum in dolor ultricies imperdiet leo rhoncus ut. Enim fermentum congue fusce volutpat vel. Phasellus interdum enim, egestas consectetur placerat nisl.</p>
                </div>
                <div class="col-lg-4 text-center">
                <img src="assets/img/about-pict-2.png" alt="image for about">
                </div>
            </div>
            </div>
        </div>
        </section>
    <!-- End Tentang -->

    <!-- Kontak -->
    <section id="contact">
        <div class="container-lg mt-5">
        <div class="sub-title text-center">
            <h2>Kontak</h2>
            <p class="fw-bold">Mari terhubung bersama kami!</p>
        </div>
        <div class="container">
            <div class="row justify-content-center">
            <div class="col-lg-5">
                <div class="card-contact mb-4">
                <h3 class="text-center">Hubungi Kami</h3>
                <div class="phone-number">
                    <table>
                    <tr>
                        <td>
                        <img src="assets/img/telp-vector.png" alt="Telephone icon">  
                        </td>
                        <td>
                        <p>0711 - 1234567890 (Telp)</p>
                        </td>
                    </tr>
                    <tr>
                        <td>
                        <img src="assets/img/fax-vector.png" alt="Fax icon">
                        </td>
                        <td>
                        <p>0711 - 1234567890 (Fax)</p>
                        </td>
                    </tr>
                    <tr>
                        <td>
                        <img src="assets/img/email-vector.png" alt="Email icon">
                        </td>
                        <td>
                        <p>iniemail@gmail.com</p>
                        </td>
                    </tr>
                    </table>
                </div>
                </div>
            </div>

            <div class="col-lg-5">
                <div class="card-contact mb-4">
                <h3 class="text-center">Social Media</h3>
                <div class="social-media">
                    <table>
                    <tr>
                        <td>
                        <img src="assets/img/instagram-vector.png" alt="Instagram icon">  
                        </td>
                        <td>
                        <p>@Instagram</p>
                        </td>
                    </tr>
                    <tr>
                        <td>
                        <img src="assets/img/twitter-vector.png" alt="Twitter icon">
                        </td>
                        <td>
                        <p>@Twitter</p>
                        </td>
                    </tr>
                    <tr>
                        <td>
                        <img src="assets/img/facebook-vector.png" alt="Facebook icon">
                        </td>
                        <td>
                        <p>@Facebook</p>
                        </td>
                    </tr>
                    <tr>
                        <td>
                        <img src="assets/img/tiktok-vector.png" alt="Tiktok icon">
                        </td>
                        <td>
                        <p>@Tiktok</p>
                        </td>
                    </tr>
                    </table>
                </div>
                </div>
            </div>
        
            </div>
        </div>
        </div>
    </section>
    <!-- End kontak -->

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