<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DesaController;
use App\Http\Controllers\InfoController;
use App\Http\Controllers\SlideController;
use App\Http\Controllers\GaleriController;
use App\Http\Controllers\ProkerController;

// Route Beranda
Route::get('/', [SlideController:: class, 'index']);
Route::get('/edit-beranda', [SlideController:: class, 'edit']);
Route::post('/edit-beranda/add', [SlideController:: class, 'add']);
Route::put('/edit-beranda/{slide}/update', [SlideController:: class, 'update']);
Route::get('/edit-beranda/{slide}/delete', [SlideController:: class, 'delete']);

// Route Informasi Desa
Route::get('/profil', [InfoController:: class, 'profil']);
Route::put('/profil/addprofil', [InfoController:: class, 'addProfil']);
Route::put('/profil/updateprofil', [InfoController:: class, 'updateProfil']);

Route::get('/umum', [InfoController:: class, 'umum']);
Route::put('/umum/addumum', [InfoController:: class, 'addUmum']);
Route::put('/umum/updateumum', [InfoController:: class, 'updateUmum']);
Route::put('/umum/addpenduduk', [InfoController:: class, 'addPenduduk']);
Route::put('/umum/updatependuduk', [InfoController:: class, 'updatePenduduk']);
Route::put('/umum/addpendidikan', [InfoController:: class, 'addPendidikan']);
Route::put('/umum/updatependidikan', [InfoController:: class, 'updatePendidikan']);

// Route Struktur Organisasi Desa 
Route::get('/struktur-desa', [DesaController:: class, 'index']);
Route::post('/struktur-desa/add', [DesaController:: class, 'add']);
Route::put('/struktur-desa/{profil}/update', [DesaController:: class, 'update']);
Route::get('/struktur-desa/{profil}/delete', [DesaController:: class, 'delete']);

// Route Galeri Desa
Route::get('/galeri-desa', [GaleriController:: class, 'index']);
Route::post('/galeri-desa/add', [GaleriController:: class, 'add']);
Route::get('/galeri-desa/{galeri}/delete', [GaleriController:: class, 'delete']);

// Route Proker Desa
Route::get('/proker-desa', [ProkerController:: class, 'index']);
Route::post('/proker-desa/add-kategori', [ProkerController:: class, 'addKategori']);
Route::get('/proker-desa/{kategori}/delete', [ProkerController:: class, 'deleteKategori']);
Route::post('/proker-desa/add-proker', [ProkerController:: class, 'addProker']);
Route::get('/proker-desa/{proker}/delete-proker', [ProkerController:: class, 'deleteProker']);

