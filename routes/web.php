<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SiswaController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/cv', function () {
    return view('cv');
});

Route::get('/profile', function () {
    return view('profile');
});

Route::get('/siswa', [SiswaController::class, 'index'])->name('daftarsiswa');
Route::get('/siswa/addsiswa', [SiswaController::class, 'addSiswa'])->name('addSiswa');
Route::post('/siswa', [SiswaController::class, 'createSiswa'])->name('createSiswa');
Route::get('/siswa/editsiswa/{id}', [SiswaController::class, 'editSiswa'])->name('editSiswa');
Route::put('/siswa/editsiswa/{id}', [SiswaController::class, 'updateSiswa'])->name('updateSiswa');
Route::delete('/siswa/delete/{id}', [SiswaController::class, 'deleteSiswa'])->name('deleteSiswa');
Route::post('/siswa', [SiswaController::class, 'search'])->name('search');