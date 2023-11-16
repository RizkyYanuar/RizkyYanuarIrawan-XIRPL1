<?php
$number = $table->firstItem();

?>
<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Daftar Siswa</title>
        <link rel="stylesheet" href="{{ asset('css/siswa.css') }}">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
            integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">

    </head>
    <style>
        nav {
            width: 100%;
        }
    </style>

    <body style='background-color: #e9ecef;'>
        <div class="container pt-3 shadow">
            <h1 class="text-center">Daftar Siswa</h1>
            <div class="nav-wrap">

                <button type="button" class="btn btn-info mb-3"><a href="cv"
                        class="text-decoration-none text-white">CV</a></button>
                <button type="button" class="btn btn-info mb-3"><a href="profile"
                        class="text-decoration-none text-white">Profile</a></button>
                <button type="button" class="btn btn-success mb-3"><a href="{{ route('addSiswa') }}"
                        class="text-decoration-none text-white">Tambah
                        Siswa</a></button>
                <form action="{{ route('daftarsiswa') }}" method="get">
                    @csrf
                    <div class="input-group mb-3">
                        <input type="search" class="form-control" name='keyword' placeholder='Search'>
                        <button class="btn btn-outline-secondary" type="submit" id="button-addon2">Search</button>
                    </div>
                </form>
            </div>

            @if (session('success'))
                <script>
                    // Display SweetAlert when the page loads
                    document.addEventListener('DOMContentLoaded', function() {
                        swal({
                            title: 'Success!',
                            text: '{{ session('success') }}',
                            icon: 'success',
                            showCloseButton: true,
                            showConfirmButton: false
                        });
                    });
                </script>
            @endif

            <table class="table-bordered table">
                <thead class="table-primary">
                    <tr>
                        <th width="4%" class="text-center">No</th>
                        <th width="12%" class="text-center">NIS</th>
                        <th width="15%" class="text-center">Nama</th>
                        <th width="15%" class="text-center">Jenis Kelamin</th>
                        <th width="30%" class="text-center">Alamat</th>
                        <th width="10%" class="text-center">Tgl Lahir</th>
                        <th width="14%" class="text-center">Aksi</th>
                    </tr>
                </thead>
                <tbody>

                    @foreach ($table as $siswaItem)
                        <tr>
                            <td class="text-center">{{ $number }}</td>
                            <td>{{ $siswaItem->nis }}</td>
                            <td>{{ $siswaItem->nama }}</td>
                            <td>{{ ucfirst($siswaItem->jenis_kelamin) }}</td>
                            <td>{{ $siswaItem->alamat }}</td>
                            <td>{{ date('d-M-y', strtotime($siswaItem->tanggal_lahir)) }}</td>
                            <td>
                                <a href="{{ route('updateSiswa', ['id' => $siswaItem->id]) }}"
                                    class="btn btn-warning btn-sm mb-1">Edit</a>
                                <form action="{{ route('deleteSiswa', ['id' => $siswaItem->id]) }}" method="POST"
                                    class="d-inline" id="delete-form">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger btn-sm mb-1"
                                        onclick="return confirm('apakah anda yakin ingin menghapus data ini?')">Hapus</button>
                                </form>
                                <a href="{{ route('showSiswa', ['id' => $siswaItem->id]) }}"
                                    class="btn btn-primary btn-sm">Show</a>
                            </td>
                        </tr>

                        <?php $number += 1; ?>
                    @endforeach

                </tbody>
            </table>
            <div style="display: {{ $message }}; justify-content: center; margin-top: 20px;">
                {{ $table->links() }}</div>
        </div>



    </body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

    <!-- JavaScript code for SweetAlert -->

</html>
