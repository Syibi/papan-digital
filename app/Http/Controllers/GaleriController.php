<?php

namespace App\Http\Controllers;

use App\Models\Galeri_Desa;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class GaleriController extends Controller
{
    public function index()
    {
        $allGaleri = Galeri_Desa::all();
        $galeri = Galeri_Desa::paginate(8);
        $title = "Galeri Desa";
        return view('admin.galeri', compact('title', 'galeri', 'allGaleri'));
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
    public function delete(Galeri_Desa $galeri)
    {
        if ($galeri->count() > 0) {
            $destination = public_path('\upload\galeri\\') .$galeri->file;
            if (File::exists($destination)) {
                File::delete($destination);
            }
            $galeri->delete();
            return redirect()->back()->with('status', 'Slide Berhasil dihapus');
        }
        return redirect()->back()->with('status', 'Maaf, data gagal dihapus');
    }
}
