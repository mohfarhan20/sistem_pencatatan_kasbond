<!DOCTYPE html>
<html>

<head>
    <title> Sistem Pencatatan KASBON</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
    <script src=" {{ asset('js/jquery.table2excel.js') }}"></script>
    <link rel="stylesheet" href="{{ asset('/css/bootstrap.min.css') }}">


    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->

    <style>
        body,
        html {
            height: 100%;
            text-align: center;
        }

        body {
            background-color: white;
        }

        .loader {
            display: inline-block;
            width: 100px;
            height: 100px;
            position: relative;
            border: 4px solid #c01b3f;
            animation: loader 2s infinite ease;
        }

        .loader-inner {
            vertical-align: top;
            display: inline-block;
            width: 100%;
            background-color: #c01b3f;
            animation: loader-inner 2s infinite ease-in;
        }

        @keyframes loader {
            0% {
                transform: rotate(0deg);
            }

            25% {
                transform: rotate(180deg);
            }

            50% {
                transform: rotate(180deg);
            }

            75% {
                transform: rotate(360deg);
            }

            100% {
                transform: rotate(360deg);
            }
        }

        @keyframes loader-inner {
            0% {
                height: 0%;
            }

            25% {
                height: 0%;
            }

            50% {
                height: 100%;
            }

            75% {
                height: 100%;
            }

            100% {
                height: 0%;
            }
        }
    </style>
</head>

<body class="exportBtnClass">
    <div class="w-100 h-100 d-flex flex-column align-items-center justify-content-center">
        <span class="loader">
            <span class="loader-inner"></span>
        </span>
        <h1 class="text-danger mt-5">Downloading...</h1>
    </div>

    <section class="p-4">
        <div class="container">

            <table class="table table-striped mt-2 d-none table2excel" id="table2excel">

                <tr>
                    <thead class="table-dark">
                        <th>No</th>
                        <th>Tanggal</th>
                        <th>COA</th>
                        <th>Deskripsi</th>
                        <th>Nominal</th>
                        <th>Keterangan Transaksi</th>

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

                    </tr>
                @endforeach

            </table>

        </div>
    </section>
    @include('script')

    <script src="https://cdn.sheetjs.com/xlsx-latest/package/dist/xlsx.full.min.js"></script>
    <script>
        $(function() {
            $(window).load(function(e) {
                var isLoading = true;
                var wb = XLSX.utils.table_to_book(document.getElementById("table2excel"));
                XLSX.writeFile(wb, "Data Kasbond-" + new Date().toString().replace(
                    /[\-\:\.]/g, "") + ".xlsx");

                // var newwindow = window.open("http://127.0.0.1:8000/data_kasbond/download_data");
                // newwindow.focus();
                // newwindow.onblur = function() {
                //     newwindow.close();
                // };

                setTimeout(function() {
                    isLoading = false;

                    if (isLoading == false) {
                        window.close();
                    }
                }, 5000);
            });
        });
    </script>
</body>

</html>
