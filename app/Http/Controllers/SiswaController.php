<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Siswa;


class SiswaController extends Controller
{
    public function index(Request $request) {
        $keyword = $request->keyword;
        if(strlen($keyword)) {
            $table = Siswa::where('nis', 'LIKE', "%$keyword%")
            ->orWhere('nama', 'LIKE', "%$keyword%")
            ->orWhere('alamat', 'LIKE', "%$keyword%")
            ->orWhere('tanggal_lahir', 'LIKE', "%$keyword%")
            ->orWhere('jenis_kelamin', 'LIKE', "%$keyword%")
            ->paginate(100);
            $message = 'none';
        } else {
        $table = Siswa::orderBy('nis')->paginate(5);
        $message = 'flex';
        }
        return view('siswa/daftarsiswa', compact('table', 'message'));
    }
    public function addSiswa() {
        return view('siswa/addsiswa');
    }

    public function createSiswa(Request $request) {
        $request->validate([
        'nis' => 'required|numeric|unique:siswa,nis',
        'nama' => 'required',
        'jenis_kelamin' => 'required',
        'alamat' => 'required',
        'tanggal_lahir' => 'required|before_or_equal:today',
        ], [
            'nis.unique' => 'Nis sudah terdaftar'
        ]);

        $data = [
            'nis' => $request->nis,
            'nama' => $request->nama,
            'jenis_kelamin' => $request->jenis_kelamin,
            'alamat' => $request->alamat,
            'tanggal_lahir' => $request->tanggal_lahir,
        ];
        Siswa::create($data);
        return redirect()->route('daftarsiswa')->with('success', 'Data Siswa berhasil ditambah.');
    }

    public function editSiswa($id) {
        $data = Siswa::find($id);
        return view('siswa/editsiswa', compact('data'));
    }

    public function showSiswa($id) {
    $data = Siswa::find($id);
    $message = 'flex';
    return view('siswa/showsiswa', compact('data'));
    }
public function updateSiswa(Request $request, $id)
{
$request->validate([
'nis' => 'required|numeric|unique:siswa,nis,' . $id,
'nama' => 'required',
'jenis_kelamin' => 'required',
'alamat' => 'required',
'tanggal_lahir' => 'required|before_or_equal:today',
], [
'nis.unique' => 'NIS sudah terdaftar',
]);

// Check if the new NIS already exists in the database
// $existingNis = Siswa::where('nis', $request->nis)->where('id', '!=', $id)->exists();

// if ($existingNis) {
// return redirect()->route('daftarsiswa')->with('error', 'NIS sudah terdaftar. Gagal memperbarui data.');
// }

$data = [
'nis' => $request->nis,
'nama' => $request->nama,
'jenis_kelamin' => $request->jenis_kelamin,
'alamat' => $request->alamat,
'tanggal_lahir' => $request->tanggal_lahir,
];

Siswa::where('id', $id)->update($data);

return redirect()->route('daftarsiswa')->with('success', 'Data berhasil diperbarui.');
}

public function deleteSiswa($id)
{
    $siswa = Siswa::find($id);
    $siswa->delete();

    return redirect()->route('daftarsiswa')->with('success', 'Data siswa berhasil dihapus.');
}

}
