<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CrewController;
use App\Http\Controllers\LogiController;
use App\Http\Controllers\PetugasController;
use App\Http\Controllers\PengaduanController;

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
Route::get('pengaduan/masyarakat', function () {
    return view('laporan');
});
Route::group(['middleware' => 'login'], function()
{
   
    Route::resource('crew', CrewController::class)->middleware('admin');
    Route::get('/logout', [LogiController::class,'logout'])->name('logout');
    Route::resource('petugas', PetugasController::class)->middleware('petugas');
    Route::get('status/update/{id}',[PengaduanController::class,'destroy'])->middleware('petugas');
    Route::get('fcveri/update/{id}',[PengaduanController::class,'verifikasi'])->middleware('petugas');
    Route::get('hapus/{id}',[CrewController::class,'destroy'])->middleware('admin');
    
Route::get('cetak/pengaduan/{id}',[CrewController::class,'cetak'])->middleware('admin');
});
Route::get('laporan_pengaduan', [PengaduanController::class,'create']);
Route::resource('login', LogiController::class);
Route::resource('pengaduan',PengaduanController::class);


Route::post('/login', [LogiController::class,'authenticate'])->name('login');
