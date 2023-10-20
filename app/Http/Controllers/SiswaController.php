<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Siswa;


class SiswaController extends Controller
{
    public function index() {
        $table = Siswa::all();

    
        return view('siswa/daftarsiswa', compact('table'));
    }
    public function addSiswa() {
        return view('siswa/addsiswa');
    }

    public function createSiswa(Request $request) {
        $request->validate([
        'nis' => 'required',
        'nama' => 'required',
        'jenis_kelamin' => 'required',
        'alamat' => 'required',
        'tanggal_lahir' => 'required|before_or_equal:today',
        ]);

        $data = $request->only(['nis', 'nama', 'jenis_kelamin', 'alamat', 'tanggal_lahir']);
        Siswa::create($data);
        return redirect()->route('daftarsiswa')->with('success', 'Data Siswa berhasil ditambah.');
    }

    public function search(Request $request) {
        $keyword = $request->input('keyword');
        if ($keyword) {
        $results = Siswa::where('nis', 'LIKE', "%$keyword%")
        ->orWhere('nama', 'LIKE', "%$keyword%")
        ->orWhere('alamat', 'LIKE', "%$keyword%")
        ->orWhere('tanggal_lahir', 'LIKE', "%$keyword%")
        ->orWhere('jenis_kelamin', 'LIKE', "%$keyword%")
        ->get();
        $message = 'Hasil Pencarian :';
        } else {
        $message = 'tidak ada hasil';
        $results = Siswa::where('nis', '1')->first();

        }
        $table = Siswa::all();
        return view('siswa/daftarsiswa', compact('results', 'table', 'message'));
    }

    public function editSiswa($id) {
        $data = Siswa::find($id);
        return view('siswa/editsiswa', compact('data'));
    }

    public function updateSiswa(Request $request, $id)
{
    $data = Siswa::find($id);
    $request->validate([
    'nis' => 'required',
    'nama' => 'required',
    'jenis_kelamin' => 'required',
    'alamat' => 'required',
    'tanggal_lahir' => 'required|before_or_equal:today',
    ]);

    $data->nis = $request->input('nis');
    $data->nama = $request->input('nama');
    $data->jenis_kelamin = $request->input('jenis_kelamin');
    $data->alamat = $request->input('alamat');
    $data->tanggal_lahir = $request->input('tanggal_lahir');
    $data->save();

    return redirect()->route('daftarsiswa')->with('success', 'Data berhasil diperbarui.');
}

public function deleteSiswa($id)
{
    $siswa = Siswa::find($id);
    $siswa->delete();

    return redirect()->route('daftarsiswa')->with('success', 'Data siswa berhasil dihapus.');
}

}
