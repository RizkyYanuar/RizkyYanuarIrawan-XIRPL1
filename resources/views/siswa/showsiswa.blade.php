<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Data Siswa</title>
        <link rel="stylesheet" href="{{ asset('css/siswa.css') }}">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
            integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

    </head>

    <body style='background-color: #e9ecef;'>
        <div class="container pt-3 shadow">
            <button type="button" class="btn btn-primary"><a href="{{ route('daftarsiswa') }}"
                    class="text-decoration-none text-white">Kembali</a></button>
            <h3 class="mt-2 text-center">Data {{ $data->nama }}</h3>
            <div class="row">
                <div class="col">


                    <div class="wrapper-add">
                        <div class="input-group mb-3">
                            <p class="input-group-text">Nis</p>
                            <p class="form-control">{{ $data->nis }}</p>
                        </div>
                        <div class="input-group mb-3">
                            <p class="input-group-text">Nama</p>
                            <p class="form-control">{{ $data->nama }}</p>
                        </div>
                        <div class="input-group mb-3">
                            <p class="input-group-text">Jenis Kelamin</p>
                            <p class="form-control">{{ ucfirst($data->jenis_kelamin) }}</p>
                        </div>
                        <div class="input-group mb-3">
                            <p class="input-group-text">Alamat</p>
                            <p class="form-control">{{ $data->alamat }}</p>
                        </div>
                        <div class="input-group mb-3">
                            <p class="input-group-text">Tanggal Lahir</p>
                            <p class="form-control">{{ date('d-M-y', strtotime($data->tanggal_lahir)) }}</p>
                        </div>
                    </div>

                </div>
            </div>
        </div>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
        </script>
    </body>

</html>
