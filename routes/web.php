<?php

use App\Http\Controllers\DesaController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SlideController;
use App\Http\Controllers\InfoController;

// Controller Beranda
Route::get('/', [SlideController:: class, 'index']);
Route::get('/edit-beranda', [SlideController:: class, 'edit']);
Route::post('/edit-beranda/add', [SlideController:: class, 'add']);
Route::put('/edit-beranda/{slide}/update', [SlideController:: class, 'update']);
Route::get('/edit-beranda/{slide}/delete', [SlideController:: class, 'delete']);

// Controller Informasi Desa
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

// Controller Struktur Organisasi Desa
Route::get('/struktur-desa', [DesaController::class, 'strukturDesa']);

Route::get('/proker-desa', function () {
    return view('admin/proker-desa');
});
