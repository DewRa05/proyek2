<?php

use App\Http\Controllers\AkunUserController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AnakController;
use App\Http\Controllers\ChatController;
use App\Http\Controllers\JadwalController;
use App\Http\Controllers\GantiPwController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\InformasiController;

Route::get('/',[GantiPwController::class, 'login'])->name('login');
Route::post('/login/store',[GantiPwController::class, 'strore'])->name('store.login');

Route::get('/dashboard',[DashboardController::class, 'dashboard'])->name('dashboard');

Route::get('/gantipw',[GantiPwController::class, 'gantipw'])->name('gantiPw');

Route::get('/akunuser',[AkunUserController::class, 'akunuser'])->name('akunuser');
Route::post('/akunuser',[AkunUserController::class, 'tambahAkunuser'])->name('tambah.akunuser');
Route::put('/akunuser/{id}',[AkunUserController::class, 'updateAkunuser'])->name('update.akunuser');
Route::delete('/akunuser/{id}',[AkunUserController::class, 'hapusAkunuser'])->name('hapus.akunuser');

Route::get('/jadwal',[JadwalController::class, 'jadwal'])->name('jadwal');
Route::post('/jadwal',[JadwalController::class, 'tambahJadwal'])->name('tambah.jadwal');
Route::put('/jadwal/{id}', [JadwalController::class, 'updateJadwal'])->name('update.jadwal');
Route::delete('/jadwal/{id}',[JadwalController::class, 'hapusJadwal'])->name('hapus.jadwal');

Route::get('/perkembangan',[AnakController::class, 'data'])->name('data.anak');
Route::post('/perkembangan',[AnakController::class, 'tambahData'])->name('tambah.data');
Route::put('/perkembangan/{id}',[AnakController::class, 'updateData'])->name('update.data');
Route::delete('/perkembangan/{id}',[AnakController::class, 'hapusData'])->name('hapus.data');

Route::get('/livechat',[ChatController::class, 'chat'])->name('livechat');

Route::get('/informasi',[InformasiController::class, 'informasi'])->name('informasi');
Route::post('/informasi',[InformasiController::class, 'tambahInformasi'])->name('tambah.informasi');
Route::put('/informasi/{id}',[InformasiController::class, 'updateInformasi'])->name('update.informasi');
Route::delete('/informasi/{id}',[InformasiController::class, 'hapusInformasi'])->name('hapus.informasi');