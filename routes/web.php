<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\admin\AnggotaController;
use App\Http\Controllers\admin\JenisKategoriController;
use App\Models\KasAnggota;
use App\Http\Controllers\Authentication;
use App\Http\Controllers\admin\DashboardAdmin;
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
    return view('welcome');
});
Route::controller(DashboardAdmin::class)->group(function (){
    Route::get('dashboard', 'index');
});
Route::controller(Authentication::class)->group(function (){
   Route::get('/login', 'index');
   Route::post('/login/do_login', 'doLogin');
   Route::post('/logout', 'doLogout');
});
Route::controller(AnggotaController::class)->group(function (){
    Route::get('/anggota', 'index');
    Route::post('/tambah_anggota', 'store');
    Route::post('/update_anggota/{id}', 'update');
    Route::get('/delete_anggota/{id}', 'destroy');
    Route::get('/halaman_tambah', 'create');
    Route::get('/halaman_update/{id}', 'edit');
    Route::get('/cetak_anggota', 'exportPdf');
});
Route::controller(JenisKategoriController::class)->group(function (){
    Route::get('/jenis_kas', 'index');
    Route::post('/tambah_jeniskas', 'store');
    Route::post('/update_jeniskas/{id}', 'update');
    Route::get('/hapus_jeniskas/{id}', 'destroy');
    Route::get('/halaman_tambah_jeniskas', 'create');
    Route::get('/halaman_update_jeniskas/{id}', 'edit');
    Route::get('/cetak_jeniskas', 'cetakPdf');
});
Route::controller(KasAnggota::class)->group(function (){
   Route::get('kas_anggota', 'index');
   Route::get('kas_anggota/entry', 'store');
   Route::post('kas_anggota/entry/tambah', 'create');
   Route::post('kas_anggota/edit/update/{id}', 'update');
   Route::get('kas_anggota/edit/{id}', 'edit');
   Route::get('kas_anggota/hapus/{id}', 'destroy');
});

