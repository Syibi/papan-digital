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
        return view('admin.beranda', compact('slide'));
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
            'gambar' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048'
        ]);

        if ($request->hasFile('gambar')) {
            $file = $request->file('gambar');
            $filename = $file->getClientOriginalName();
            $file->move('upload/slide', $filename);
        }
        Slide::create([
            'judul' => $request->judul,
            'deskripsi' => $request->deskripsi,
            'status' => $request->input('status')==true? '1' : '0',
            'gambar' => $filename
        ]);

        return redirect()->back()->with('status', 'Slide Berhasil ditambah');
    }
    public function update(Request $request, Slide $slide)
    {
        if ($request->hasFile('gambar')) {
            $destination = $slide->gambar;
            if (File::exists($destination)) {
                File::delete($destination);
            }
            $file = $request->file('gambar');
            $filename = $file->getClientOriginalName();
            $file->move('upload/slide', $filename);
            $slide->update([
                'gambar' => $filename
            ]);
        }

        $slide->update([
            'judul' => $request->judul,
            'deskripsi' => $request->deskripsi,
            'status' => $request->input('status')==true? '1' : '0',
        ]);

        return redirect()->back()->with('status', 'Slide Berhasil diupdate');
    }

    public function delete(Slide $slide)
    {
        // 
        if ($slide->count() > 0) {
            $destination = public_path('\upload\slide\\') .$slide->gambar;
            if (File::exists($destination)) {
                File::delete($destination);
            }
            $slide->delete();
            return redirect()->back()->with('status', 'Slide Berhasil dihapus');
        }
        return redirect()->back()->with('status', 'Maaf, data gagal dihapus');
    }
}
