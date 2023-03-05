<?php

namespace App\Http\Controllers;

use App\Models\Struktur_Desa;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
class DesaController extends Controller
{

    public function index()
    {
        $data = Struktur_Desa::all();
        $jabatan = [];
        $sorted = [];
        $grafik = array();
        foreach ($data as $item1) {
            $atasan = ""; 
            foreach ($data as $item2) {
                if ($item2['jabatan'] == $item1['atasan'])  {
                    $atasan = $item2['nama'];
                }
            }
            $image = "upload/profil/".$item1['file'];
            $header = array('v' =>  $item1['nama'], 
                            'f' =>
                            '<figure class="fir-image-figure">
                            <a class="fir-imageover" rel="noopener">
                                <img class="fir-author-image fir-clickcircle" src="'.$image.'">
                            </a>
                            <figcaption>
                                <div class="fig-author-figure-title"><strong>'.$item1['nama'].'</strong></div>
                                <div class="fig-author-figure-desc"><em>'.$item1['jabatan'].'</em></div>
                            </figcaption>
                            </figure>'
                        );
            array_push($jabatan, $item1['jabatan']);
            array_push($grafik, [$header, $atasan, $item1['link']]);
            $sorted = array_unique($jabatan);
            $sorted = array_values($sorted);

        }
        $title = "Struktur Desa";
        return view('admin.struktur-desa', compact('title', 'data', 'sorted' , 'grafik'));
    }

    public function add(Request $request)
    {
        if ($request->hasFile('file')) {
            $file = $request->file('file');
            $filename = $file->getClientOriginalName();
            $file->move('upload/profil', $filename);
        }

        Struktur_Desa::create([
            'nama' => $request->nama,
            'jabatan' => $request->jabatan,
            'atasan' => $request->atasan,
            'link' => $request->link,
            'file' => $request->file
        ]);

        return redirect()->back()->with('status', 'Slide Berhasil ditambah');
    }

    public function update(Request $request, Struktur_Desa $profil)
    {
        if ($request->hasFile('file')) {
            $destination = public_path('\upload\profil\\') .$profil->file;
            if (File::exists($destination)) {
                File::delete($destination);
            }
            $file = $request->file('file');
            $filename = $file->getClientOriginalName();
            $file->move('upload/profil', $filename);
            $profil->update([
                'file' => $filename
            ]);
        }

        $profil->update([
            'nama' => $request->nama,
            'jabatan' => $request->jabatan,
            'atasan' => $request->atasan,
            'link' => $request->link,
        ]);
        return redirect()->back()->with('status', 'Slide Berhasil diupdate');
    }

    public function delete(Struktur_Desa $profil)
    {
        if ($profil->count() > 0) {
            $destination = public_path('\upload\profil\\') .$profil->file;
            if (File::exists($destination)) {
                File::delete($destination);
            }
            $profil->delete();
            return redirect()->back()->with('status', 'Slide Berhasil dihapus');
        }
        return redirect()->back()->with('status', 'Maaf, data gagal dihapus');
    }
}
