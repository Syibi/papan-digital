<?php

use App\Http\Controllers\SlideController;
use Illuminate\Support\Facades\Route;

// Slide Controller
Route::get('/', [SlideController:: class, 'index']);
Route::get('/edit-beranda', [SlideController:: class, 'edit']);
Route::post('/edit-beranda/add', [SlideController:: class, 'add']);
Route::put('/edit-beranda/{slide}/update', [SlideController:: class, 'update']);
Route::get('/edit-beranda/{slide}/delete', [SlideController:: class, 'delete']);


Route::get('/info', function () {
    return view('admin/info');
});

Route::get('/struktur-desa', function () {
    return view('admin/struktur-desa');
});

Route::get('/proker-desa', function () {
    return view('admin/proker-desa');
});
