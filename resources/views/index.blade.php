<!DOCTYPE html>
<html>

<head>
    <title> Sistem Pencatatan KASBON</title>
    <link rel="stylesheet" href="{{ asset('/css/bootstrap.min.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
    <link rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/select2-bootstrap-5-theme@1.2.0/dist/select2-bootstrap-5-theme.min.css" />

</head>

<body>

    <section>
        <h2 class="text-center text-primary mt-5"> Data Kasbond </h2>
        <div class="container">
            <a href="/data_kasbond/tambah"> + Tambah Data Baru</a>
            <table border="1" class="table table-striped mt-2">
                <tr>
                    <thead class="table-dark">
                        <th>No</th>
                        <th>Tanggal</th>
                        <th>COA</th>
                        <th>Deskripsi</th>
                        <th>Nominal</th>
                        <th>Keterangan Transaksi</th>
                        <th>Menu</th>
                    </thead>
                </tr>

                @foreach ($data_kasbond as $p)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td> {{ $p->created_at }}</td>
                        <td>{{ $p->MasterData->coa }}</td>
                        <td>{{ $p->MasterData->deskripsi }}</td>
                        <td>{{ $p->nominal }}</td>
                        <td>{{ $p->keterangan_transaksi }}</td>
                        <td>

                            <a href="/data_kasbond/edit/{{ $p->id }}">
                                <button type="button" class="btn btn-success">
                                    Edit
                                </button>
                            </a>

                            <button type="button" class="btn btn-danger" data-bs-toggle="modal"
                                data-bs-target="#exampleModal">
                                Hapus
                            </button>

                            <!-- Modal -->
                            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                                aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">Konfirmasi</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            Apakah anda yakin ingin menghapus data ini?
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary"
                                                data-bs-dismiss="modal">Batalkan</button>
                                            <a href="/data_kasbond/hapus/{{ $p->id }}">
                                                <button type="button" class="btn btn-danger">Hapus</button>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </td>
                    </tr>
                @endforeach

            </table>

        </div>
    </section>


    <script src="{{ asset('/js/bootstrap.min.js') }}"></script>

</body>

</html>
