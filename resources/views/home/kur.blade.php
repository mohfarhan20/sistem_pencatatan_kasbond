    <!doctype html>
    <html lang="en">

    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Bootstrap CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
        <!-- Poppins Font -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&display=swap" rel="stylesheet">

        {{-- Adding css --}}
        <link rel="stylesheet" href="{{ asset('/css/style_kur.css') }}">    
        <title>KUR</title>
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
                                <a class="nav-link" href="#">TENTANG</a>
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

        <!-- Hero section -->
        <section class="Hero py-3">
            <div class="container">
                <div class="row justify-content-end align-items-center">
                    <img src="assets/img/logo kur.jpeg" style="width:80px;margin-right:34px;">
                    <p class="text-end fw-bold">Kredit Produktif</p>
                </div>
                <div class="row justify-content-start align-items-center py-5 text-dark" id="hero">
                    <div class="col-lg-7">
                        <img src="assets/img/gedung-fix-lagi.png" class="img-fluid" alt="">
                    </div>
                    <div class="col-lg-5 py-3">
                        <h1 class="fw-bolder">KREDIT USAHA RAKYAT (KUR)</h1>
                        <h2 class="fw-bold">Bank Sumsel Babel</h2>
                        <p>Fasilitas kredit modal kerja yang diberikan kepada pelaku usaha mikro dan kecil yang memlliki usaha produktif.</p>
                        <img src="assets/img/penyelia.png" class="img-fluid rounded-pill d-flex" alt="" >
                        <small class="fw-bold">Penyelia Kredit Produktif</small>
                    </div>
                </div>
            </div>
        </section>
        <br>
        <!-- End hero section -->

        <!-- Content -->
        <section class="content " style="background-color: #1363DF; color: azure;">
            <div class="container">
                <div class="row col">
                    <div class="col-lg-7 justify-content-center py-3">
                        <center><img src="assets/img/logo.png" style="width:300px;"></center>
                        <h1 class="text-center fw-bold">JENIS KUR</h1>
                        <table class="table table-striped table-light text-center" style="text-align: center;">
                            <thead>
                                <tr class="text-center align-middle py-4">
                                    <th scope="col" rowspan="2">Jenis KUR</th>
                                    <th scope="col" rowspan="2">Plafond</th>
                                    <th scope="col" colspan="2">Jangka Waktu</th>
                                </tr>
                                <tr>
                                    <th scope="col">Modal Kerja</th>
                                    <th scope="col">Investasi</th>

                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th>Super Mikro</th>
                                    <td>> 10 juta sd. 50 juta</td>
                                    <td>Maks. 3 Tahun</td>
                                    <td>Maks. 5 Tahun</td>
                                </tr>
                                <tr>
                                    <th>Mikro</th>
                                    <td>> 10 juta sd. 50 juta</td>
                                    <td>Maks. 3 Tahun</td>
                                    <td>Maks. 5 Tahun</td>
                                </tr>
                                <tr>
                                    <th>Kecil</th>
                                    <td>> 50 juta sd. 500 juta</td>
                                    <td>Maks. 4 Tahun</td>
                                    <td>Maks. 5 Tahun</td>
                                </tr>
                            </tbody>
                        </table>
                        <center><img src="assets/img/logo.png" style="width:300px;"></center>
                    </div>
                    <div class="col-lg-5">
                        <img src="assets/img/brosur.jpeg" class="img-fluid" alt="">
                    </div>
                </div>
            </div>
        </section>
        <br><br>
        <!-- End Content -->

        <!-- content2 -->
        <section class="content-2" >
            <div class="container bg-light justify-content-center py-3" style="background-image: url('assets/img/babel.jpeg');">
                <div class="row col pt-3 mx-1" style="text-align: justify;">
                    <div class="col-lg-6 text-dark justify-content-center">
                        <button type="table" class="btn btn-primary btn-lg fw-bold" >KEUNGGULAN</button>
                        <ol class="card mb-3 bg-light" style="max-width: auto; margin: 10px; padding-right: 5px; font-size: 12px;" ><br>
                            <li>Suku bunga murah hanya 6% efektif per tahun.</li>
                            <li>Bebas biaya provisi, administrasi dan asuransi kredit.</li>
                            <li>Proses kredit lebih sederhana dan cepat.</li>
                            <li>Dapat digunakan untuk menambah modal kerja dan investasi usaha.</li>
                            <li>Jaringan Bank Sumsel Babel tersebar di seluruh pelosok Sumatera Selatan dan Bangka Belitung.</li>
                            <br><br>
                        </ol>
                        <hr>
                        <button type="table" class="btn btn-primary btn-lg fw-bold" >CONTACT PERSON</button><br><br>
                        <div class="card mb-3" style="max-width: 250px;" >
                            <div class="row g-0" style="max-width: auto; margin: 10px; padding-right: 5px; font-size: 12px;"><br>
                                <div class="col-md-4"><br>
                                    <img src="assets/img/foto_mbakmel.jpeg" class="img-fluid rounded-pill d-flex" alt="..." style="width:50px; height: 50px;">
                                </div>
                                <div class="col-md-8" >
                                    <div class="card-body" >
                                        <h5 class="card-title"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-telephone-fill" viewBox="0 0 16 16">
                                        <path fill-rule="evenodd" d="M1.885.511a1.745 1.745 0 0 1 2.61.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.678.678 0 0 0 .178.643l2.457 2.457a.678.678 0 0 0 .644.178l2.189-.547a1.745 1.745 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.634 18.634 0 0 1-7.01-4.42 18.634 18.634 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877L1.885.511z"/>
                                        </svg> Melisa</h5>
                                        <p class="card-text">082269547588</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card mb-3" style="max-width: 250px;">
                            <div class="row g-0" style="max-width: auto; margin: 10px; padding-right: 5px; font-size: 12px;"><br>
                                <div class="col-md-4"><br>
                                    <img src="assets/img/foto_kakher.jpeg" class="img-fluid rounded-pill d-flex" alt="..." style="width:50px; height: 50px;">
                                </div>
                                <div class="col-md-8">
                                    <div class="card-body">
                                        <h5 class="card-title"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-telephone-fill" viewBox="0 0 16 16">
                                        <path fill-rule="evenodd" d="M1.885.511a1.745 1.745 0 0 1 2.61.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.678.678 0 0 0 .178.643l2.457 2.457a.678.678 0 0 0 .644.178l2.189-.547a1.745 1.745 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.634 18.634 0 0 1-7.01-4.42 18.634 18.634 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877L1.885.511z"/>
                                        </svg> Herza</h5>
                                        <p class="card-text">08980827171</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card mb-3" style="max-width: 250px;">
                            <div class="row g-0" style="max-width: auto; margin: 10px; padding-right: 5px; font-size: 12px;"><br>
                                <div class="col-md-4"><br>
                                    <img src="assets/img/foto_kakijal.jpeg" class="img-fluid rounded-pill d-flex" alt="..." style="width:50px; height: 50px;">
                                </div>
                                <div class="col-md-8">
                                    <div class="card-body">
                                        <h5 class="card-title"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-telephone-fill" viewBox="0 0 16 16">
                                        <path fill-rule="evenodd" d="M1.885.511a1.745 1.745 0 0 1 2.61.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.678.678 0 0 0 .178.643l2.457 2.457a.678.678 0 0 0 .644.178l2.189-.547a1.745 1.745 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.634 18.634 0 0 1-7.01-4.42 18.634 18.634 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877L1.885.511z"/>
                                        </svg> Rizal</h5>
                                        <p class="card-text">08117193094</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card mb-3" style="max-width: 250px;">
                            <div class="row g-0" style="max-width: auto; margin: 10px; padding-right: 5px; font-size: 12px;"><br>
                                <div class="col-md-4"><br>
                                    <img src="assets/img/foto_mbaktin.jpeg" class="img-fluid rounded-pill d-flex" alt="..." style="width:50px; height: 50px;">
                                </div>
                                <div class="col-md-8">
                                    <div class="card-body">
                                        <h5 class="card-title"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-telephone-fill" viewBox="0 0 16 16">
                                        <path fill-rule="evenodd" d="M1.885.511a1.745 1.745 0 0 1 2.61.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.678.678 0 0 0 .178.643l2.457 2.457a.678.678 0 0 0 .644.178l2.189-.547a1.745 1.745 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.634 18.634 0 0 1-7.01-4.42 18.634 18.634 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877L1.885.511z"/>
                                        </svg> Titin</h5>
                                        <p class="card-text">082289921408</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card mb-3" style="max-width: 250px;">
                            <div class="row g-0" style="max-width: auto; margin: 10px; padding-right: 5px; font-size: 12px;"><br>
                                <div class="col-md-4"><br>
                                    <img src="assets/img/foto_mbakput.jpeg" class="img-fluid rounded-pill d-flex" alt="..." style="width:50px; height: 50px;">
                                </div>
                                <div class="col-md-8">
                                    <div class="card-body">
                                        <h5 class="card-title"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-telephone-fill" viewBox="0 0 16 16">
                                        <path fill-rule="evenodd" d="M1.885.511a1.745 1.745 0 0 1 2.61.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.678.678 0 0 0 .178.643l2.457 2.457a.678.678 0 0 0 .644.178l2.189-.547a1.745 1.745 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.634 18.634 0 0 1-7.01-4.42 18.634 18.634 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877L1.885.511z"/>
                                        </svg> Putri</h5>
                                        <p class="card-text">081278443588</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 text-dark justify-content-center ">
                        <button type="table" class="btn btn-primary btn-lg fw-bold" >KELENGKAPAN DOKUMEN</button>
                        <ol class="align-self-center bg-light" style="max-width: auto; margin: 10px; padding-right: 5px; font-size: 12px;"><br>
                            <li>Fotocopy KTP pemohon dan suami/istri (bagi yang sudah menikah)</li>
                            <li>Fotocopy Kartu Keluarga</li>
                            <li>Fotocopy Surat Nikah (bagi yang sudah menikah)</li>
                            <li>Fotocopy NPWP (Untuk Plafond >Rp50 juta)</li>
                            <li>Pas Photo (3x4 sebanyak 1 lembar)</li>
                            <li>Fotocopy PBB/Rek. Listrik/Telpon/PDAM</li>
                            <li>Surat izin usaha mikro dan kecil yang diterbitkan pemerintah daerah setempat dan/atau surat izin lainnya dan/atau SKU</li>
                        </ol>
                        <hr>
                        <button type="table" class="btn btn-primary btn-lg fw-bold" >PERSYARATAN KUR</button>
                        <ol class="align-self-center bg-light" style="max-width: auto; margin: 10px; padding-right: 5px; font-size: 12px;"><br>
                            <li>Memiliki kegiatan usaha produktif minimal telah berjalan selama 6 bulan (Untuk KUR Mikro dan KUR Kecil)</li>
                            <p>Khusus untuk KUR Super Mikro, tidak ada pembatasan minimal waktu pendirian usaha, namun bila waktu pendirian usaha kurang dari 6 (enam) bulan harus memenuhi salah satu persyaratan sebagai berikut:</p>
                            <ul>
                                <li>Mengikuti pendampingan;</li>
                                <li>Mengikuti pelatihan kewirausahaan atau pelatihan lainnya;</li>
                                <li>Tergabung dalam Kelompok Usaha: atau</li>
                                <li>Memiliki anggota keluarga yang telah mempunyai usaha produktif dan layak.</li>
                            </ul>
                            <li>Mempunyai izin usaha yang berlaku</li>
                            <li>Mempunyai rumah tinggal tetap</li>
                            <li>Tidak sedang menerima kredit dari perbankan kecuali KUR pada Penyalur KUR yang sama, Kredit kepemilikan rumah, Kredit atau leasing kendaraan bermotor roda dua untuk tujuan produktif, Kredit dengan jaminan Surat Keputusan Pensiun,
                                Kartu kredit, Kredit Resi Gudang; dan/atau Kredit Kredit konsumsi untuk keperluan rumah tangga dari Bank maupun Lembaga Keuangan Non Bank sesuai dengan definisi pada peraturan perundang-undangan dalam kolektibilitas lancar.</li>
                        </ol>
                    </div>
                </div>

            </div>
        </section>
        <br><br>
        <!-- End content2 -->


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
                        <h4 class="fw-bold">BANK SUMSEL BABEL CAB. KAPTEN A. RIVAI</h4>
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





        <!-- Option 1: Bootstrap Bundle with Popper -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    </body>

    </html>

    </html>