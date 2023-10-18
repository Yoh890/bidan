<?php

use App\Http\Controllers\BidanController;
use App\Http\Controllers\KonsultasiController;
use App\Http\Controllers\PasienController;
use App\Http\Controllers\PHamilController;
use App\Http\Controllers\PKbController;
use App\Http\Controllers\RekamedisController;
use App\Http\Controllers\RekamkehamilanController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('layouts.master');
// });

////->Bagian Bidan
Route::get('/', [BidanController::class,'dashboard'])->name('dashboard');
Route::get('/dashboard', [BidanController::class,'dashboard'])->name('dashboard');
Route::get('/bidan', [BidanController::class,'index'])->name('bdn');
Route::get('/bidan/tambah', [BidanController::class,'tambah'])->name('bdn_tambah');
Route::POST('/bidan/simpan', [BidanController::class,'simpan'])->name('bdn_simpan');
Route::get('/bidan/hapus/{id}', [BidanController::class,'hapus'])->name('bdn_hapus');
Route::get('/bidan/ubah/{id}', [BidanController::class,'ubah'])->name('bdn_ubah');
Route::put('/bidan/update/{id}', [BidanController::class,'update'])->name('bdn_update');

////->Bagian Konsultasi
Route::get('/konsul', [KonsultasiController::class,'index'])->name('knsl');
Route::get('/konsul/tambah', [KonsultasiController::class,'tambah'])->name('knsl_tambah');
Route::POST('/konsul/simpan', [KonsultasiController::class,'simpan'])->name('knsl_simpan');
Route::get('/konsul/hapus/{id}', [KonsultasiController::class,'hapus'])->name('knsl_hapus');
Route::get('/konsul/ubah/{id}', [KonsultasiController::class,'ubah'])->name('knsl_ubah');
Route::put('/konsul/update/{id}', [KonsultasiController::class,'update'])->name('knsl_update');

////->Bagian Pasien
Route::get('/pasien', [PasienController::class,'index'])->name('psn');
Route::get('/pasien/tambah', [PasienController::class,'tambah'])->name('psn_tambah');
Route::POST('/pasien/simpan', [PasienController::class,'simpan'])->name('psn_simpan');
Route::get('/pasien/hapus/{id}', [PasienController::class,'hapus'])->name('psn_hapus');
Route::get('/pasien/ubah/{id}', [PasienController::class,'ubah'])->name('psn_ubah');
Route::put('/pasien/update/{id}', [PasienController::class,'update'])->name('psn_update');

////->Bagian Pasien Hamil
Route::get('/phamil', [PHamilController::class,'index'])->name('pha');
Route::get('/phamil/tambah', [PHamilController::class,'tambah'])->name('pha_tambah');
Route::POST('/phamil/simpan', [PHamilController::class,'simpan'])->name('pha_simpan');
Route::get('/phamil/hapus/{id}', [PHamilController::class,'hapus'])->name('pha_hapus');
Route::get('/phamil/ubah/{id}', [PHamilController::class,'ubah'])->name('pha_ubah');
Route::put('/phamil/update/{id}', [PHamilController::class,'update'])->name('pha_update');

////->Bagian Pasien KB
Route::get('/pkb', [PKbController::class,'index'])->name('pkb');
Route::get('/pkb/tambah', [PKbController::class,'tambah'])->name('pkb_tambah');
Route::POST('/pkb/simpan', [PKbController::class,'simpan'])->name('pkb_simpan');
Route::get('/pkb/hapus/{id}', [PKbController::class,'hapus'])->name('pkb_hapus');
Route::get('/pkb/ubah/{id}', [PKbController::class,'ubah'])->name('pkb_ubah');
Route::put('/pkb/update/{id}', [PKbController::class,'update'])->name('pkb_update');

////->Bagian Rekamedis
Route::get('/rekamedis', [RekamedisController::class,'index'])->name('reka');
Route::get('/rekamedis/tambah', [RekamedisController::class,'tambah'])->name('reka_tambah');
Route::POST('/rekamedis/simpan', [RekamedisController::class,'simpan'])->name('reka_simpan');
Route::get('/rekamedis/hapus/{id}', [RekamedisController::class,'hapus'])->name('reka_hapus');
Route::get('/rekamedis/ubah/{id}', [RekamedisController::class,'ubah'])->name('reka_ubah');
Route::put('/rekamedis/update/{id}', [RekamedisController::class,'update'])->name('reka_update');

////->Bagian Rekamedis Kehamilan
Route::get('/pkb', [RekamkehamilanController::class,'index'])->name('pkb');
Route::get('/pkb/tambah', [RekamkehamilanController::class,'tambah'])->name('pkb_tambah');
Route::POST('/pkb/simpan', [RekamkehamilanController::class,'simpan'])->name('pkb_simpan');
Route::get('/pkb/hapus/{id}', [RekamkehamilanController::class,'hapus'])->name('pkb_hapus');
Route::get('/pkb/ubah/{id}', [RekamkehamilanController::class,'ubah'])->name('pkb_ubah');
Route::put('/pkb/update/{id}', [RekamkehamilanController::class,'update'])->name('pkb_update');
