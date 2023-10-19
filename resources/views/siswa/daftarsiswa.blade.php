<?php
$number = 1;
$number_search = 1;
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

    <body style='background-color: #e9ecef;'>
        <div class="container pt-3 shadow">
            <h1 class="text-center">Daftar Siswa</h1>
            <div class="nav-wrap">
            
                    <button type="button" class="btn btn-info mb-3"><a href="cv"
                    class="text-decoration-none text-white">CV</a></button>
                    <button type="button" class="btn btn-info mb-3"><a href="profile"
                    class="text-decoration-none text-white">Profile</a></button>
                    <button type="button" class="btn btn-primary mb-3"><a href="{{ route('addSiswa') }}"
                    class="text-decoration-none text-white">Tambah
                    Siswa</a></button>
                    <form action="{{route('search')}}" method="post">
                    @csrf
                    <div class="input-group mb-3">
  <input type="text" class="form-control" name='keyword' placeholder='Search'>
  <button class="btn btn-outline-secondary" type="submit" id="button-addon2">Search</button>
</div>
                    </form>
            </div>

            @if(session('success'))
            <div class="alert alert-success" role="alert" id='alert'>
            {{session('success')}}
            <span class="close-btn" id='myAlert'>&times;</span>
            </div>
            @endif
            
            @isset($results)
    @if($results->count() > 0)
    <h3>Hasil Pencarian :</h3>
    <table class="table-bordered table">
                <thead class="table-primary">
                    <tr>
                        <th width="4%" class="text-center">No</th>
                        <th width="12%" class="text-center">NIS</th>
                        <th width="15%" class="text-center">Nama</th>
                        <th width="15%" class="text-center">Jenis Kelamin</th>
                        <th width="30%" class="text-center">Alamat</th>
                        <th width="10%" class="text-center">Tanggal Lahir</th>
                        <th width="14%" class="text-center">Aksi</th>
                    </tr>
                </thead>
                <tbody>

                    @foreach ($results as $siswaItem)
                        <tr>
                            <td  class="text-center">{{ $number_search }}</td>
                            <td>{{ $siswaItem->nis }}</td>
                            <td>{{ $siswaItem->nama }}</td>
                            <td>{{ $siswaItem->jenis_kelamin }}</td>
                            <td>{{ $siswaItem->alamat }}</td>
                            <td>{{ $siswaItem->tanggal_lahir }}</td>
                            <td>
                                <a href="{{ route('updateSiswa', ['id' => $siswaItem->id]) }}"
                                    class="btn btn-warning btn-sm">Edit</a>
                                <form action="{{ route('deleteSiswa', ['id' => $siswaItem->id]) }}" method="POST"
                                    class="d-inline">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger btn-sm"
                                        onclick="return confirm('Apakah Anda yakin ingin menghapus siswa ini?')">Hapus</button>
                                </form>
                            </td>
                        </tr>
                        <?php $number_search += 1; ?>
                    @endforeach


                </tbody>
            </table>

    @else
        <p>Tidak ada hasil yang ditemukan.</p>
    @endif
@endisset

            <table class="table-bordered table">
                <thead class="table-primary">
                    <tr>
                        <th width="4%" class="text-center">No</th>
                        <th width="12%" class="text-center">NIS</th>
                        <th width="15%" class="text-center">Nama</th>
                        <th width="15%" class="text-center">Jenis Kelamin</th>
                        <th width="30%" class="text-center">Alamat</th>
                        <th width="10%" class="text-center">Tanggal Lahir</th>
                        <th width="14%" class="text-center">Aksi</th>
                    </tr>
                </thead>
                <tbody>

                    @foreach ($table as $siswaItem)
                        <tr>
                            <td  class="text-center">{{ $number }}</td>
                            <td>{{ $siswaItem->nis }}</td>
                            <td>{{ $siswaItem->nama }}</td>
                            <td>{{ $siswaItem->jenis_kelamin }}</td>
                            <td>{{ $siswaItem->alamat }}</td>
                            <td>{{ $siswaItem->tanggal_lahir }}</td>
                            <td>
                                <a href="{{ route('updateSiswa', ['id' => $siswaItem->id]) }}"
                                    class="btn btn-warning btn-sm">Edit</a>
                                <form action="{{ route('deleteSiswa', ['id' => $siswaItem->id]) }}" method="POST"
                                    class="d-inline">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger btn-sm"
                                        onclick="return confirm('Apakah Anda yakin ingin menghapus siswa ini?')">Hapus</button>
                                </form>
                            </td>
                        </tr>
                        <?php $number += 1; ?>
                    @endforeach


                </tbody>
            </table>

        </div>
    </body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>
        <script>
  const closeAlert = document.getElementById("myAlert");
    const alert = document.getElementById('alert');
  closeAlert.addEventListener('click', function() {
    alert.style.display = 'none';
  });
    </script>

</html>
