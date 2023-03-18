<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PkkController;
use App\Http\Controllers\DesaController;
use App\Http\Controllers\InfoController;
use App\Http\Controllers\SlideController;
use App\Http\Controllers\GaleriController;


// ==========================
// Route Admin Papan Digital
// ==========================

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

// Route Galeri Desa
Route::get('/galeri-desa', [GaleriController:: class, 'index']);
Route::post('/galeri-desa/add', [GaleriController:: class, 'add']);
Route::get('/galeri-desa/{galeri}/delete', [GaleriController:: class, 'delete']);

// Route Struktur Organisasi Desa 
Route::get('/struktur-desa', [DesaController:: class, 'struktur']);
Route::post('/struktur-desa/add', [DesaController:: class, 'addStruktur']);
Route::put('/struktur-desa/{profil}/update', [DesaController:: class, 'updateStruktur']);
Route::get('/struktur-desa/{profil}/delete', [DesaController:: class, 'deleteStruktur']);

// Route Proker Desa
Route::get('/proker-desa', [DesaController:: class, 'proker']);
Route::post('/proker-desa/add-kategori', [DesaController:: class, 'addKategori']);
Route::get('/proker-desa/{kategori}/delete', [DesaController:: class, 'deleteKategori']);
Route::post('/proker-desa/add-proker', [DesaController:: class, 'addProker']);
Route::get('/proker-desa/{proker}/delete-proker', [DesaController:: class, 'deleteProker']);

// Route Struktur Organisasi PKK
Route::get('/struktur-pkk', [PkkController:: class, 'struktur']);
Route::post('/struktur-pkk/add', [PkkController:: class, 'addStruktur']);
Route::put('/struktur-pkk/{profil}/update', [PkkController:: class, 'updateStruktur']);
Route::get('/struktur-pkk/{profil}/delete', [PkkController:: class, 'deleteStruktur']);

// Route Proker PKK
Route::get('/proker-pkk', [PkkController:: class, 'proker']);
Route::post('/proker-pkk/add-kategori', [PkkController:: class, 'addKategori']);
Route::get('/proker-pkk/{kategori}/delete', [PkkController:: class, 'deleteKategori']);
Route::post('/proker-pkk/add-proker', [PkkController:: class, 'addProker']);
Route::get('/proker-pkk/{proker}/delete-proker', [PkkController:: class, 'deleteProker']);

