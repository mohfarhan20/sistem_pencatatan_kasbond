<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Form penambahan data kasbond </title>
    <link rel="stylesheet" href="{{ asset('/css/bootstrap.min.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
    <link rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/select2-bootstrap-5-theme@1.2.0/dist/select2-bootstrap-5-theme.min.css" />
</head>

<body>
    <h2 class="text-center mt-2"> Penambahan Data </h2>
    <div class="container px-5 my-5">
        @if (session('status'))
            <div class="alert alert-success d-flex justify-content-between" role="alert">
                <span>{{ session('status') }}</span>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif
        <form action="{{ route('user.store') }}" method="POST">
            @csrf

            <div>
                <select name="coa" id="coa" class="js-example-basic-single form-control" required>
                    <option value="0">Pilih COA - Deskripsi</option>
                    @foreach ($master_data as $data)
                        <option value="{{ $data->id }}">{{ $data->coa }} -
                            {{ $data->deskripsi }}
                        </option>
                    @endforeach
                </select>

            </div>

            <br>

            <div class="form-floating mb-3">
                <input class="form-control" id="nominal" name="nominal" type="number" placeholder="Nominal"
                    required />
                <label for="Nominal">Nominal</label>
            </div>
            <div class="form-floating mb-3">
                <textarea class="form-control" id="keterangan" name="keterangan" type="text" placeholder="keterangan"
                    style="height: 10rem;" required></textarea>
                <label for="keterangan">Keterangan</label>
            </div>

            <div class="d-grid">
                <button class="btn btn-primary btn-lg" id="submitButton" type="submit">Submit</button>
            </div>
        </form>

    </div>

    <a href="/" class="mr-3">Kembali</a>


    <script src="{{ asset('/js/jquery-3.6.0.min.js') }}"></script>

    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
    <script>
        $(document).ready(function() {
            $('.js-example-basic-single').select2();
        });
    </script>
    <script src="{{ asset('/js/bootstrap.min.js') }}"></script>

</body>

</html>
