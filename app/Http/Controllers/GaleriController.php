<?php

namespace App\Http\Controllers;

use App\Models\Galeri_Desa;
use Illuminate\Http\Request;

class GaleriController extends Controller
{
    public function index()
    {
        $galeri = Galeri_Desa::all();
        $title = "Galeri Desa";
        return view('admin.galeri', compact('title', 'galeri'));
    }
    public function add(Request $request)
    {
        if ($request->hasFile('file')) {
            $file = $request->file('file');
            $filename = $file->getClientOriginalName();
            $file->move('upload/galeri', $filename);
        }
        Galeri_Desa::create([
            'file' => $filename,
            'caption' => $request->caption,
            'tipe' => $request->input('tipe')=="video"? '1' : '0',
        ]);

        return redirect()->back()->with('status', 'Slide Berhasil ditambah');
    }
}
