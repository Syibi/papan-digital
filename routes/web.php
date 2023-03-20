<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PkkController;
use App\Http\Controllers\DesaController;
use App\Http\Controllers\InfoController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\SlideController;
use App\Http\Controllers\GaleriController;

// ==========================
// Route Account Papan Digital
// ==========================

Route::get('/login', [UserController:: class, 'login']);
Route::get('/action-login', [UserController:: class, 'actionlogin']);
Route::get('/action-logout', [UserController:: class, 'actionlogout']);

// ==========================
// Route User Papan Digital
// ==========================

Route::get('/', [UserController:: class, 'beranda']);
Route::get('/profil', [UserController:: class, 'profil']);
Route::get('/umum', [UserController:: class, 'umum']);
Route::get('/galeri-desa', [UserController:: class, 'galeri']);
Route::get('/struktur-desa', [UserController:: class, 'strukturDesa']);
Route::get('/proker-desa', [UserController:: class, 'prokerDesa']);
Route::get('/struktur-pkk', [UserController:: class, 'strukturPkk']);
Route::get('/proker-pkk', [UserController:: class, 'prokerPkk']);

// ==========================
// Route Admin Papan Digital
// ==========================

// Route Beranda
Route::get('/admin/beranda', [SlideController:: class, 'index'])->middleware('auth');
Route::get('/admin/edit-beranda', [SlideController:: class, 'edit']);
Route::post('/admin/edit-beranda/add', [SlideController:: class, 'add']);
Route::put('/admin/edit-beranda/{slide}/update', [SlideController:: class, 'update']);
Route::get('/admin/edit-beranda/{slide}/delete', [SlideController:: class, 'delete']);

// Route Informasi Desa
Route::get('/admin/profil', [InfoController:: class, 'profil']);
Route::put('/admin/profil/addprofil', [InfoController:: class, 'addProfil']);
Route::put('/admin/profil/updateprofil', [InfoController:: class, 'updateProfil']);

Route::get('/admin/umum', [InfoController:: class, 'umum']);
Route::put('/admin/umum/addumum', [InfoController:: class, 'addUmum']);
Route::put('/admin/umum/updateumum', [InfoController:: class, 'updateUmum']);
Route::put('/admin/umum/addpenduduk', [InfoController:: class, 'addPenduduk']);
Route::put('/admin/umum/updatependuduk', [InfoController:: class, 'updatePenduduk']);
Route::put('/admin/umum/addpendidikan', [InfoController:: class, 'addPendidikan']);
Route::put('/admin/umum/updatependidikan', [InfoController:: class, 'updatePendidikan']);

// Route Galeri Desa
Route::get('/admin/galeri-desa', [GaleriController:: class, 'index']);
Route::post('/admin/galeri-desa/add', [GaleriController:: class, 'add']);
Route::get('/admin/galeri-desa/{galeri}/delete', [GaleriController:: class, 'delete']);

// Route Struktur Organisasi Desa 
Route::get('/admin/struktur-desa', [DesaController:: class, 'struktur']);
Route::post('/admin/struktur-desa/add', [DesaController:: class, 'addStruktur']);
Route::put('/admin/struktur-desa/{profil}/update', [DesaController:: class, 'updateStruktur']);
Route::get('/admin/struktur-desa/{profil}/delete', [DesaController:: class, 'deleteStruktur']);

// Route Proker Desa
Route::get('/admin/proker-desa', [DesaController:: class, 'proker']);
Route::post('/admin/proker-desa/add-kategori', [DesaController:: class, 'addKategori']);
Route::get('/admin/proker-desa/{kategori}/delete', [DesaController:: class, 'deleteKategori']);
Route::post('/admin/proker-desa/add-proker', [DesaController:: class, 'addProker']);
Route::get('/admin/proker-desa/{proker}/delete-proker', [DesaController:: class, 'deleteProker']);

// Route Struktur Organisasi PKK
Route::get('/admin/struktur-pkk', [PkkController:: class, 'struktur']);
Route::post('/admin/struktur-pkk/add', [PkkController:: class, 'addStruktur']);
Route::put('/admin/struktur-pkk/{profil}/update', [PkkController:: class, 'updateStruktur']);
Route::get('/admin/struktur-pkk/{profil}/delete', [PkkController:: class, 'deleteStruktur']);

// Route Proker PKK
Route::get('/admin/proker-pkk', [PkkController:: class, 'proker']);
Route::post('/admin/proker-pkk/add-kategori', [PkkController:: class, 'addKategori']);
Route::get('/admin/proker-pkk/{kategori}/delete', [PkkController:: class, 'deleteKategori']);
Route::post('/admin/proker-pkk/add-proker', [PkkController:: class, 'addProker']);
Route::get('/admin/proker-pkk/{proker}/delete-proker', [PkkController:: class, 'deleteProker']);

