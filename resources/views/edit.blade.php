<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Form pengubahan data kasbond </title>
    <link rel="stylesheet" href="{{ asset('/css/bootstrap.min.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
    <link rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/select2-bootstrap-5-theme@1.2.0/dist/select2-bootstrap-5-theme.min.css" />
</head>

<body>
    <h2 class="text-center text-success"> Edit Data </h2>
    <div class="container px-5 my-5">
        @if (session('status'))
            <div class="alert alert-success d-flex justify-content-between" role="alert">
                <span>{{ session('status') }}</span>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif
        <form action="{{ route('user.update') }}" method="POST">
            @csrf
            <div>
                <input type="hidden" name="id" value="{{ $data_kasbond->id }}" />
                <select name="coa" id="coa" class="js-example-basic-single form-control" required>
                    <option disabled>Pilih Semester</option>
                    @foreach ($master_data as $data)
                        <option value="{{ $data->id }}"
                            {{ $data->id == $data_kasbond->id_master_data ? 'selected' : '' }}>
                            {{ $data->coa }} - {{ $data->deskripsi }}
                        </option>
                    @endforeach
                </select>
            </div>
            <br>

            <div class="form-floating mb-3">
                <input class="form-control" id="nominal" value="{{ $data_kasbond->nominal }}" name="nominal"
                    type="number" placeholder="Nominal" required />
                <label for="Nominal">Nominal</label>
            </div>
            <div class="form-floating mb-3">
                <textarea class="form-control" id="keterangan_transaksi" name="keterangan_transaksi" type="text"
                    placeholder="keterangan_transaksi" style="height: 10rem;" required>
                    {{ $data_kasbond->keterangan_transaksi }} </textarea>
                <label for="keterangan_transaksi">Keterangan</label>
            </div>

            <div class="d-grid">
                <button class="btn btn-primary btn-lg" id="submit" type="submit">Submit</button>
            </div>
        </form>

    </div>
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
