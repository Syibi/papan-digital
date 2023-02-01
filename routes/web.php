<?php

use App\Http\Controllers\SlideController;
use Illuminate\Support\Facades\Route;

// Slide Controller
Route::get('/', [SlideController:: class, 'index']);
Route::get('/edit-beranda', [SlideController:: class, 'edit']);
Route::post('/tambah-beranda', [SlideController:: class, 'tambah']);

Route::get('/info', function () {
    return view('admin/info');
});

Route::get('/struktur-desa', function () {
    return view('admin/struktur-desa');
});

Route::get('/proker-desa', function () {
    return view('admin/proker-desa');
});
