<?php

namespace App\Http\Controllers;

use App\Models\Slide;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class SlideController extends Controller
{
    public function index()
    {
        $slide = Slide::where('status', '1')->get();
        return view('admin.beranda-new', compact('slide'));
    }
    public function edit()
    {
        $slide = Slide::all();
        return view('admin.edit-beranda', compact('slide'));
    }
    public function add(Request $request)
    {
        $this->validate($request, [
            'judul' => 'required|min:3',
            'deskripsi' => 'required|min:5',
        ]);

        if ($request->hasFile('file')) {
            $file = $request->file('file');
            $filename = $file->getClientOriginalName();
            $file->move('upload/slide', $filename);
        }
        Slide::create([
            'judul' => $request->judul,
            'deskripsi' => $request->deskripsi,
            'status' => $request->input('status')==true? '1' : '0',
            'tipe' => $request->input('tipe')=="video"? '1' : '0',
            'file' => $filename
        ]);

        return redirect()->back()->with('status', 'Slide Berhasil ditambah');
    }
    public function update(Request $request, Slide $slide)
    {
        if ($request->hasFile('file')) {
            $destination = public_path('\upload\slide\\') .$slide->file;
            if (File::exists($destination)) {
                File::delete($destination);
            }
            $file = $request->file('file');
            $filename = $file->getClientOriginalName();
            $file->move('upload/slide', $filename);
            $slide->update([
                'file' => $filename
            ]);
        }

        $slide->update([
            'judul' => $request->judul,
            'deskripsi' => $request->deskripsi,
            'status' => $request->input('status')==true? '1' : '0',
            'tipe' => $request->input('tipe')=="video"? '1' : '0',
        ]);

        return redirect()->back()->with('status', 'Slide Berhasil diupdate');
    }

    public function delete(Slide $slide)
    {
        // 
        if ($slide->count() > 0) {
            $destination = public_path('\upload\slide\\') .$slide->file;
            if (File::exists($destination)) {
                File::delete($destination);
            }
            $slide->delete();
            return redirect()->back()->with('status', 'Slide Berhasil dihapus');
        }
        return redirect()->back()->with('status', 'Maaf, data gagal dihapus');
    }
}
