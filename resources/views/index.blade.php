<!DOCTYPE html>
<html>

<head>
    <script src="https: //ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
    <title> Sistem Pencatatan KASBON</title>
    <link rel="stylesheet" href="{{ asset('/css/bootstrap.min.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
    <link rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/select2-bootstrap-5-theme@1.2.0/dist/select2-bootstrap-5-theme.min.css" />

    <script src=" {{ asset('js/jquery.table2excel.js') }}"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script
        src="https://www.jqueryscript.net/demo/Export-Html-Table-To-Excel-Spreadsheet-using-jQuery-table2excel/src/jquery.table2excel.js">
    </script>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('/assets/fontawesome/css/all.css') }}" />

</head>

<body>
    @if (session('status'))
        <div class="w-100 p-5">
            <div class="alert alert-success d-flex justify-content-between" role="alert">
                <span>{{ session('status') }}</span>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        </div>
    @endif
    <section class="p-4">
        <div class="container">
            {{-- <div class="col-lg-6 alert alert-success d-flex justify-content-between" role="alert">
                <h4>Welcome back, {{ auth()->user()->username }}</h4>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div> --}}
            <h2 class="text-center fw-bolder text-primary mt-5"> DATA KASBOND </h2>
            <div class="justify-content-between d-flex">
                <form action="/logout" method="POST">
                    @csrf
                    <button type="submit" class="btn btn-danger">Logout</button>
                </form>
                @can('admin')
                    <a href="/data_kasbond/register"><button class="btn btn-outline-secondary">Register</button></a>
                @endcan
            </div>
            <div class="d-flex justify-content-between">
                <div class="text-start mt-4">
                    <a href="{{ route('user.tambah') }}" style="text-decoration: none">
                        <button class="btn btn-primary"><i class="fas fa-plus me-1"></i> <b class="ms-1">Tambah Data
                                Baru</b></button>
                    </a>
                    {{-- new add (for pagination) --}}

                    @php
                        if (app('request')->input('tanggal') != null) {
                            $request = app('request')->input('tanggal');
                        } else {
                            $request = '';
                        }
                    @endphp
                    <a href="{{ route('user.download', $request) }}" target="_blank">
                        <button id="sheetjsexport" class="btn btn-success"><i class="fa-solid fa-file-excel me-1"></i>
                            <b class="ms-1">Export as
                                XLSX</b></button></a>
                </div>

                {{-- <form action="/" class="d-flex align-items-center my-1 col-lg-5">
                    <div class="input-group">
                        <input type="text" class="form-control" placeholder="Search..." name="search">
                        <button class="btn btn-secondary" type="submit">Search</button>
                    </div>
                </form> --}}

                <form action="/data_kasbond" class="my-1 d-flex align-items-center">
                    <input type="date" name="tanggal" id="tanggal" class="form-control me-1">
                    <button type="submit" class="btn btn-secondary ms-1">Cari</button>
                </form>
            </div>

            <table class="table table-striped mt-2" id="TableToExport">

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

                @foreach ($data_kasbond as $key => $p)
                    <tr>
                        <td>{{ $data_kasbond->firstItem() + $key }}</td>
                        <td> {{ $p->created_at }}</td>
                        <td>{{ $p->MasterData->coa }}</td>
                        <td>{{ $p->MasterData->deskripsi }}</td>
                        <td>{{ $p->nominal }}</td>
                        <td>{{ $p->keterangan_transaksi }}</td>
                        <td>

                            <a href="/data_kasbond/edit/{{ $p->id }}" style="text-decoration: none">
                                <button type="button" class="btn btn-success">
                                    Edit
                                </button>
                            </a>
                            {{-- HAPUS --}}

                            <button type="button" class="btn btn-danger" data-bs-toggle="modal"
                                data-bs-target="#exampleModal">
                                Hapus
                            </button>

                            <!-- Modal -->
                            <div class="modal fade " id="exampleModal" tabindex="-1"
                                aria-labelledby="exampleModalLabel" aria-hidden="true">
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
                                            <form action="/data_kasbond/hapus/{{ $p->id }}" method="POST">
                                                @csrf
                                                @method('delete')
                                                <button type="submit" class="btn btn-danger">Hapus</button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </td>
                    </tr>
                @endforeach

            </table>

            <div class="d-flex justify-content-end">
                {{ $data_kasbond->links() }}
            </div>

        </div>
    </section>
    @include('script')


</body>

</html>
