<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit Siswa</title>
</head>
<body>
   <form action="{{ route('updateSiswa', ['id' => $data->id]) }}" method="POST">
    @csrf
    @method('PUT')
    <input type="text" name="nis" value="{{ $data->nis }}">
    <input type="text" name="nama" value="{{ $data->nama }}">
    <select name="jenis_kelamin" id="">
        <option value="pria"  {{$data->jenis_kelamin == 'pria' ? 'selected' : ''}}>Pria</option>
        <option value="wanita "{{$data->jenis_kelamin == 'wanita' ? 'selected' : ''}}>Wanita</option>
    </select>
    <input type="text" name="alamat" value="{{ $data->alamat }}">
    <input type="date" name="tanggal_lahir" value="{{ $data->tanggal_lahir }}">
    <button type="submit">Perbarui Data</button>
</form>


</body>
</html>