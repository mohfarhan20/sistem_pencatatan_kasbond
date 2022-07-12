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
</head>

<body>

    <section>
        <h2 class="text-center text-primary mt-5"> Data Kasbond </h2>
        <button id="sheetjsexport"><b>Export as XLSX</b></button>
        <div class="container">
            <a href="/data_kasbond/tambah"> + Tambah Data Baru</a>
            <form action="/" class="my-1">

                <input type="date" name="tanggal" id="tanggal">
                <button type="submit">submit</button>
            </form>

            <div class="row justify-content-center">
                <div class="col-md-6">
                    <form action="/">
                        <div class="input-group mb-3">
                            <input type="text" class="form-control" placeholder="Search..." name="search"
                                value="{{ request('search') }}">
                            <button class="btn btn-outline-secondary" type="submit">Search</button>
                        </div>
                    </form>
                </div>
            </div>

            <table border="1" class="table table-striped mt-2" id="TableToExport">

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
                            {{-- HAPUSS --}}

                            {{-- <a href="/data_kasbond/hapus/{{ $p->id }}">
                                <button type="button" class="btn btn-danger" data-bs-toggle="modal"
                                    data-bs-target="#exampleModal">
                                    Hapus
                                </button>
                            </a> --}}

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
                                            <form action="route('user.hapus', $p->id)" method="POST">
                                                @csrf
                                                @method('delete')
                                                <button type="submit">Hapus</button>
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


    <script src="https://cdn.sheetjs.com/xlsx-latest/package/dist/xlsx.full.min.js"></script>
    <script>
        document.getElementById("sheetjsexport").addEventListener('click', function() {
            /* Create worksheet from HTML DOM TABLE */
            var wb = XLSX.utils.table_to_book(document.getElementById("TableToExport"));
            /* Export to file (start a download) */
            XLSX.writeFile(wb, "SheetJSTable.xlsx");
        });
    </script>
</body>

</html>
