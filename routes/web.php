<?php

use Illuminate\Support\Facades\Route;

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
    return view('admin/beranda');
});
Route::get('/info', function () {
    return view('admin/info');
});
Route::get('/struktur-desa', function () {
    return view('admin/struktur-desa');
});
Route::get('/proker-desa', function () {
    return view('admin/proker-desa');
});
Route::get('/edit-beranda', function () {
    return view('admin/edit-beranda');
});
