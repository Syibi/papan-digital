<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DesaController extends Controller
{
    public function strukturDesa()
    {
        $title = "Struktur Organisasi Desa";
        return view('admin.struktur-desa', compact('title'));
    }
}
