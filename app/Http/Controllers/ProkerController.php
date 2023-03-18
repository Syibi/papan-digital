<?php

namespace App\Http\Controllers;

use App\Models\Proker_Desa;
use Illuminate\Http\Request;
use App\Models\Kategori_Desa;
use Illuminate\Support\Facades\File;

class ProkerController extends Controller
{
    public function proker()
    {
        $kategori = Kategori_Desa::all();
        $proker = Proker_Desa::all();
        $title = "Proker Desa";
        return view('admin.proker-desa', compact('title', 'kategori', 'proker'));
    }

    public function addKategori(Request $request)
    {
        $this->validate($request, [
            'kategori' => 'required|min:5',
        ]);
        Kategori_Desa::create([
            'kategori' => $request->kategori,
        ]);
        return redirect()->back()->with('status', 'Slide Berhasil ditambah');
    }

    public function deleteKategori(Kategori_Desa $kategori)
    {
        if ($kategori->count() > 0) {
            $kategori->delete();
            return redirect()->back()->with('status', 'Slide Berhasil dihapus');
        }
        return redirect()->back()->with('status', 'Maaf, data gagal dihapus');
    }

    public function addProker(Request $request)
    {
        $this->validate($request, [
            'program' => 'required|min:5',
            'kegiatan' => 'required|min:5',
            'kategori' => 'required|min:5',
            'pelaksanaan' => 'required|min:5',
            'sasaran' => 'required|min:5',
            'sumber_dana' => 'required|min:5',
        ]);

        if ($request->hasFile('file')) {
            $file = $request->file('file');
            $filename = $file->getClientOriginalName();
            $file->move('upload/proker', $filename);
        }

        Proker_Desa::create([
            'program' => $request->program,
            'kegiatan' => $request->kegiatan,
            'kategori' => $request->kategori,
            'pelaksanaan' => $request->pelaksanaan,
            'sasaran' => $request->sasaran,
            'sumber_dana' => $request->sumber_dana,
            'dokumentasi' => $request->input('dokumentasi')=="dokumentasi"? '1' : '0',
            'file' => $filename

        ]);

        return redirect()->back()->with('status', 'Slide Berhasil ditambah');
    }
    public function deleteProker(Proker_Desa $proker)
    {
        $proker->delete();
        return redirect()->back()->with('status', 'Slide Berhasil dihapus');
    }
}
