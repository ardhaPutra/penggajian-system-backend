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

Route::group(['prefix' => 'kota'], function () {
    Route::get('/', [KotaController::class, 'index'])->name('kota.index');
    Route::post('/store', [KotaController::class, 'store'])->name('kota.store');
    Route::post('/update/{pk}', [KotaController::class, 'update'])->name('kota.update');
    Route::delete('/delete/{pk}', [KotaController::class, 'destroy'])->name('kota.delete');
});

Route::group(['prefix' => 'department'], function () {
    Route::get('/', [DepartmentController::class, 'index'])->name('department.index');
    Route::post('/store', [DepartmentController::class, 'store'])->name('department.store');
    Route::post('/update/{pk}', [DepartmentController::class, 'update'])->name('department.update');
    Route::delete('/delete/{pk}', [DepartmentController::class, 'destroy'])->name('department.delete');
});

Route::group(['prefix' => 'golongan'], function () {
    Route::get('/', [GolonganController::class, 'index'])->name('golongan.index');
    Route::post('/store', [GolonganController::class, 'store'])->name('golongan.store');
    Route::post('/update/{pk}', [GolonganController::class, 'update'])->name('golongan.update');
    Route::delete('/delete/{pk}', [GolonganController::class, 'destroy'])->name('golongan.delete');
});

Route::group(['prefix' => 'jabatan'], function () {
    Route::get('/', [JabatanController::class, 'index'])->name('jabatan.index');
    Route::post('/store', [JabatanController::class, 'store'])->name('jabatan.store');
    Route::post('/update/{pk}', [JabatanController::class, 'update'])->name('jabatan.update');
    Route::delete('/delete/{pk}', [JabatanController::class, 'destroy'])->name('jabatan.delete');
});

Route::group(['prefix' => 'pendidikan'], function () {
    Route::get('/', [PendidikanController::class, 'index'])->name('pendidikan.index');
    Route::post('/store', [PendidikanController::class, 'store'])->name('pendidikan.store');
    Route::post('/update/{pk}', [PendidikanController::class, 'update'])->name('pendidikan.update');
    Route::delete('/delete/{pk}', [PendidikanController::class, 'destroy'])->name('pendidikan.delete');
});

Route::group(['prefix' => 'karyawan'], function () {
    Route::get('/', [KaryawanController::class, 'index'])->name('karyawan.index');
    Route::post('/store', [KaryawanController::class, 'store'])->name('karyawan.store');
    Route::post('/update/{pk}', [KaryawanController::class, 'update'])->name('karyawan.update');
    Route::delete('/delete/{pk}', [KaryawanController::class, 'destroy'])->name('karyawan.delete');
});

Route::group(['prefix' => 'shift-karyawan'], function () {
    Route::get('/', [ShiftKaryawanController::class, 'index'])->name('shiftkaryawan.index');
    Route::post('/store', [ShiftKaryawanController::class, 'store'])->name('shiftkaryawan.store');
    Route::post('/update/{pk}', [ShiftKaryawanController::class, 'update'])->name('shiftkaryawan.update');
    Route::delete('/delete/{pk}', [ShiftKaryawanController::class, 'destroy'])->name('shiftkaryawan.delete');
});

Route::group(['prefix' => 'peminjaman'], function () {
    Route::get('/', [PeminjamanController::class, 'index'])->name('peminjaman.index');
    Route::post('/store', [PeminjamanController::class, 'store'])->name('peminjaman.store');
    Route::post('/update/{pk}', [PeminjamanController::class, 'update'])->name('peminjaman.update');
    Route::delete('/delete/{pk}', [PeminjamanController::class, 'destroy'])->name('peminjaman.delete');
});

Route::group(['prefix' => 'uang-saku'], function () {
    Route::get('/', [UangSakuController::class, 'index'])->name('uangsaku.index');
    Route::post('/store', [UangSakuController::class, 'store'])->name('uangsaku.store');
    Route::post('/update/{pk}', [UangSakuController::class, 'update'])->name('uangsaku.update');
    Route::delete('/delete/{pk}', [UangSakuController::class, 'destroy'])->name('uangsaku.delete');
});

Route::group(['prefix' => 'tunjangan-hari-raya'], function () {
    Route::get('/', [TunjanganHariRayaController::class, 'index'])->name('tunjanganhariraya.index');
    Route::post('/store', [TunjanganHariRayaController::class, 'store'])->name('tunjanganhariraya.store');
    Route::post('/update/{pk}', [TunjanganHariRayaController::class, 'update'])->name('tunjanganhariraya.update');
    Route::delete('/delete/{pk}', [TunjanganHariRayaController::class, 'destroy'])->name('tunjanganhariraya.delete');
});

Route::group(['prefix' => 'penggajian'], function () {
    Route::get('/', [TunjanganHariRayaController::class, 'index'])->name('tunjanganhariraya.index');
    Route::post('/store', [TunjanganHariRayaController::class, 'store'])->name('tunjanganhariraya.store');
    Route::post('/update/{pk}', [TunjanganHariRayaController::class, 'update'])->name('tunjanganhariraya.update');
    Route::delete('/delete/{pk}', [TunjanganHariRayaController::class, 'destroy'])->name('tunjanganhariraya.delete');
});

