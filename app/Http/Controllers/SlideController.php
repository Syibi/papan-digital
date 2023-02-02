<?php

namespace App\Http\Controllers;

use App\Models\Slide;
use Illuminate\Http\Request;

class SlideController extends Controller
{
    public function index()
    {
        $slide = Slide::where('status', '1')->get();
        return view('admin.beranda', compact('slide'));
    }
    public function edit()
    {
        $slide = Slide::all();
        return view('admin.edit-beranda', compact('slide'));
    }
    public function tambah(Request $request)
    {
        $slide = new Slide;
        $slide->judul = $request->input('judul');
        $slide->deskripsi = $request->input('deskripsi');
        $status = $request->input('status')==true? '1' : '0';
        $slide->status = $status;
        if ($request->hasFile('gambar')) {
            $file = $request->file('gambar');
            $extension = $file->getClientOriginalExtension();
            $filename = time().'.'.$extension;
            $file->move('upload/slide', $filename);
            $slide->gambar = $filename;
        }
        $slide->save();
        return redirect()->back()->with('status', 'Slide Berhasil ditambah');
    }
}
