<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\KaryawanController;
use App\Http\Controllers\AbsensiController;
use App\Http\Controllers\CutiController;
use App\Http\Controllers\JadwalKerjaController;
use App\Http\Controllers\LaporanKehadiranController;

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

Route::get('/', function () {
    return view('home.dashboard');
});

Route::get('/user',[UserController::class,'index']);
Route::get('/user/tambah',[UserController::class,'create']);
Route::post('/user/simpan',[UserController::class,'store']);
Route::get('/user/{id}/edit',[UserController::class,'show']);
Route::post('/user/{id}/update',[UserController::class,'update']);
Route::get('/user/{id}/hapus',[UserController::class,'destroy']);

Route::get('/karyawan',[KaryawanController::class,'index']);
Route::get('/karyawan/tambah',[KaryawanController::class,'create']);
Route::post('/karyawan/simpan',[KaryawanController::class,'store']);
Route::get('/karyawan/{id}/edit',[KaryawanController::class,'show']);
Route::post('/karyawan/{id}/update',[KaryawanController::class,'update']);
Route::get('/karyawan/{id}/hapus',[KaryawanController::class,'destroy']);

Route::get('/absensi',[AbsensiController::class,'index']);
Route::get('/absensi/tambah',[AbsensiController::class,'create']);
Route::post('/absensi/simpan',[AbsensiController::class,'store']);
Route::get('/absensi/{id}/edit',[AbsensiController::class,'show']);
Route::post('/absensi/{id}/update',[AbsensiController::class,'update']);
Route::get('/absensi/{id}/hapus',[AbsensiController::class,'destroy']);

Route::get('/cuti',[CutiController::class,'index']);
Route::get('/cuti/tambah',[CutiController::class,'create']);
Route::post('/cuti/simpan',[CutiController::class,'store']);
Route::get('/cuti/{id}/edit',[CutiController::class,'show']);
Route::post('/cuti/{id}/update',[CutiController::class,'update']);
Route::get('/cuti/{id}/hapus',[CutiController::class,'destroy']);

Route::get('/jadwalkerja',[JadwalKerjaController::class,'index']);
Route::get('/jadwalkerja/tambah',[JadwalKerjaController::class,'store']);
Route::get('/jadwalkerja/{id}/edit',[JadwalKerjaController::class,'show']);
Route::post('/jadwalkerja/{id}/update',[JadwalKerjaController::class,'update']);
Route::get('/jadwalkerja/{id}/hapus',[JadwalKerjaController::class,'destroy']);

Route::get('/laporankehadiran',[LaporanKehadiranController::class,'index']);
Route::get('/laporankehadiran/tambah',[LaporanKehadiranController::class,'store']);
Route::get('/laporankehadiran/{id}/edit',[LaporanKehadiranController::class,'show']);
Route::post('/laporankehadiran/{id}/update',[LaporanKehadiranController::class,'update']);
Route::get('/laporankehadiran/{id}/hapus',[LaporanKehadiranController::class,'destroy']);