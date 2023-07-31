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

Route::resource('jabatan', JabatanController::class);
Route::resource('department', DepartmentController::class);
Route::resource('golongan', GolonganController::class);
Route::resource('karyawan', KaryawanController::class);
Route::resource('kota', KotaController::class);
Route::resource('negara', NegaraController::class);
Route::resource('peminjaman', PeminjamanController::class);
Route::resource('pendidikan', PendidikanController::class);
Route::resource('penggajian', PenggajianController::class);
Route::resource('provinsi', ProvinsiController::class);
Route::resource('shift_karyawan', ShiftKaryawanController::class);
Route::resource('tunjangan_hari_raya', TunjanganHariRayaController::class);
