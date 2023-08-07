<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\JabatanController;
use App\Http\Controllers\DepartmentController;
use App\Http\Controllers\GolonganController;
use App\Http\Controllers\KaryawanController;
use App\Http\Controllers\KotaController;
use App\Http\Controllers\NegaraController;
use App\Http\Controllers\PeminjamanController;
use App\Http\Controllers\PendidikanController;
use App\Http\Controllers\PenggajianController;
use App\Http\Controllers\ProvinsiController;
use App\Http\Controllers\ShiftKaryawanController;
use App\Http\Controllers\TunjanganHariRayaController;
use App\Http\Controllers\AbsensiController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::group(['prefix' => 'negara'], function () {
    Route::get('/', [NegaraController::class, 'index'])->name('negara.index');
    Route::post('/store', [NegaraController::class, 'store'])->name('negara.store');
    Route::post('/update/{pk}', [NegaraController::class, 'update'])->name('negara.update');
    Route::delete('/delete/{pk}', [NegaraController::class, 'destroy'])->name('negara.delete');
});

Route::group(['prefix' => 'provinsi'], function () {
    Route::get('/', [ProvinsiController::class, 'index'])->name('provinsi.index');
    Route::post('/store', [ProvinsiController::class, 'store'])->name('provinsi.store');
    Route::post('/update/{pk}', [ProvinsiController::class, 'update'])->name('provinsi.update');
    Route::delete('/delete/{pk}', [ProvinsiController::class, 'destroy'])->name('provinsi.delete');
});

Route::group(['prefix' => 'Kota'], function () {
    Route::get('/', [KotaController::class, 'index'])->name('kota.index');
    Route::post('/store', [KotaController::class, 'store'])->name('kota.store');
    Route::post('/update/{pk}', [KotaController::class, 'update'])->name('kota.update');
    Route::delete('/delete/{pk}', [KotaController::class, 'destroy'])->name('kota.delete');
});

Route::group(['prefix' => 'jabatan'], function () {
    Route::get('/', [JabatanController::class, 'index'])->name('jabatan.index');
    Route::post('/store', [JabatanController::class, 'store'])->name('jabatan.store');
    Route::post('/update/{pk}', [JabatanController::class, 'update'])->name('jabatan.update');
    Route::delete('/delete/{pk}', [JabatanController::class, 'destroy'])->name('jabatan.delete');
});

Route::resource('department', DepartmentController::class);
Route::resource('golongan', GolonganController::class);
Route::resource('karyawan', KaryawanController::class);
Route::resource('kota', KotaController::class);
Route::resource('peminjaman', PeminjamanController::class);
Route::resource('pendidikan', PendidikanController::class);
Route::resource('penggajian', PenggajianController::class);
Route::resource('shift_karyawan', ShiftKaryawanController::class);
Route::resource('tunjangan_hari_raya', TunjanganHariRayaController::class);
Route::resource('absensi', AbsensiController::class);
Route::resource('uang_saku', UangSakuController::class);
