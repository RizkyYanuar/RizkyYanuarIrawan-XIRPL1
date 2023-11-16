<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Edit Siswa</title>
        <link rel="stylesheet" href="{{ asset('css/siswa.css') }}">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
            integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

    </head>

    <body style='background-color: #e9ecef;'>
        <div class="container pt-3 shadow">
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $item)
                            <li>{{ $item }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <button type="button" class="btn btn-primary"><a href="{{ route('daftarsiswa') }}"
                    class="text-decoration-none text-white">Kembali</a></button>
            <h1 class="mt-2 text-center">Edit Siswa</h1>
            <div class="row">
                <div class="col">
                    <form action="{{ route('updateSiswa', ['id' => $data->id]) }}" method="POST" id="edit-form">
                        @csrf
                        @method('PUT')
                        <div class="wrapper-add">
                            <div class="input-group mb-3">
                                <span class="input-group-text" id="basic-addon1">Nis:</span>
                                <input type="text" class="form-control" placeholder="Nis" name="nis"
                                    value="{{ $data->nis }}" required>
                            </div>
                            <div class="input-group mb-3">
                                <span class="input-group-text" id="basic-addon1">Nama:</span>
                                <input type="text" class="form-control" placeholder="Nama" name="nama"
                                    value="{{ $data->nama }}" required>
                            </div>
                            <select name="jenis_kelamin" id="" class="form-select mb-3" required>

                                <option value="pria" {{ $data->jenis_kelamin == 'pria' ? 'selected' : '' }}>Pria
                                </option>
                                <option value="wanita" {{ $data->jenis_kelamin == 'wanita' ? 'selected' : '' }}>Wanita
                                </option>
                            </select>
                            <div class="input-group mb-3">
                                <span class="input-group-text" id="basic-addon1">Alamat:</span>
                                <input type="text" class="form-control" placeholder="alamat" name="alamat"
                                    value="{{ $data->alamat }}" required>
                            </div>
                            <div class="input-group mb-3">
                                <span class="input-group-text" id="basic-addon1">Tanggal Lahir:</span>
                                <input type="date" class="form-control" placeholder="tanggal lahir"
                                    name="tanggal_lahir" value="{{ $data->tanggal_lahir }}" required>
                            </div>
                            <button type="button" class='btn btn-success' onclick="confirmEdit()">Perbarui
                                Data</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
        </script>
        <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
        <script>
            function confirmEdit() {
                swal({
                    title: 'Apakah Anda yakin ingin mengedit siswa ini?',
                    icon: 'warning',
                    buttons: true,
                    confirmButtonColor: '#d33',
                    cancelButtonColor: '#3085d6',
                    confirmButtonText: 'Tambahkan',
                    cancelButtonText: 'Batal'
                }).then((result) => {
                    if (result) {
                        // If user clicks "tambahkan," submit the form
                        document.querySelector('#edit-form').submit();
                    } else {
                        exit;
                    }
                });
            }
        </script>
    </body>

</html>
