<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SlideController;
use App\Http\Controllers\GrafikController;

// Slide Controller
Route::get('/', [SlideController:: class, 'index']);
Route::get('/edit-beranda', [SlideController:: class, 'edit']);
Route::post('/edit-beranda/add', [SlideController:: class, 'add']);
Route::put('/edit-beranda/{slide}/update', [SlideController:: class, 'update']);
Route::get('/edit-beranda/{slide}/delete', [SlideController:: class, 'delete']);

// Grafik Controller
Route::get('/info', [GrafikController:: class, 'index']);
Route::put('/info/updateprofil', [GrafikController:: class, 'updateProfil']);


Route::get('/struktur-desa', function () {
    return view('admin/struktur-desa');
});

Route::get('/proker-desa', function () {
    return view('admin/proker-desa');
});
