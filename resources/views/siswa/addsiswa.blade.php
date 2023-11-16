<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Tambah Siswa</title>
        <link rel="stylesheet" href="{{ asset('css/siswa.css') }}">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
            integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

    </head>

    <body style='background-color: #e9ecef;'>
        <div class="container pt-3 shadow">
            <button type="button" class="btn btn-primary"><a href="{{ route('daftarsiswa') }}"
                    class="text-decoration-none text-white">Kembali</a></button>
            <h1 class="mt-2 text-center">Tambah Siswa</h1>

            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $item)
                            <li>{{ $item }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <form action="{{ route('createSiswa') }}" method="POST" id="create-form">
                @csrf
                <div class="row">
                    <div class="col">
                        <div class="wrapper-add">
                            <div class="input-group mb-3">
                                <span class="input-group-text" id="basic-addon1">Nis:</span>
                                <input type="text" class="form-control" placeholder="Nis" name="nis" required
                                    value="{{ old('nis') }}">
                            </div>
                            <div class="input-group mb-3">
                                <span class="input-group-text" id="basic-addon1">Nama:</span>
                                <input type="text" class="form-control" placeholder="Nama" name="nama" required
                                    value="{{ old('nama') }}">
                            </div>
                            <select name="jenis_kelamin" id="" class="form-select mb-3" required
                                value="{{ old('jenis_kelamin') }}">
                                <option selected>Jenis Kelamin: </option>
                                <option value="pria">Pria</option>
                                <option value="wanita">Wanita</option>
                            </select>
                            <div class="input-group mb-3">
                                <span class="input-group-text" id="basic-addon1">Alamat:</span>
                                <input type="text" class="form-control" placeholder="Alamat" name="alamat" required
                                    value="{{ old('alamat') }}">
                            </div>
                            <div class="input-group mb-3">
                                <span class="input-group-text" id="basic-addon1">Tanggal Lahir:</span>
                                <input type="date" class="form-control" placeholder="Tanggal Lahir"
                                    name="tanggal_lahir" required value="{{ old('tanggal_lahir') }}">
                            </div>
                            <button type="button" class="btn btn-success" onclick="confirmCreate()">Tambah
                                Siswa</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

    <!-- JavaScript code for SweetAlert -->
    <script>
        function confirmCreate() {
            swal({
                title: 'Apakah Anda yakin ingin menambah siswa ini?',
                icon: 'warning',
                buttons: true,
                confirmButtonColor: '#d33',
                cancelButtonColor: '#3085d6',
                confirmButtonText: 'Tambahkan',
                cancelButtonText: 'Batal'
            }).then((result) => {
                if (result) {
                    // If user clicks "tambahkan," submit the form
                    document.querySelector('#create-form').submit();
                } else {
                    exit;
                }
            });
        }
    </script>


</html>
