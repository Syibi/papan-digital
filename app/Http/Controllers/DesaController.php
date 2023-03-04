<?php

namespace App\Http\Controllers;

use App\Models\Struktur_Desa;
use Illuminate\Http\Request;
use StrukturDesa;

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
            array_push($jabatan, $item1['jabatan']);
            array_push($grafik, [$item1['nama'], $atasan, $item1['link']]);
            $sorted = array_unique($jabatan);
            $sorted = array_values($sorted);

        }
        
        $title = "Struktur Desa";
        return view('admin.struktur-desa', compact('title', 'data', 'sorted' , 'grafik'));
    }

    public function add(Request $request)
    {
        // $this->validate($request, [
        //     'nama' => 'required|min:3',
        //     'jabatan' => 'required|min:5',
        //     'atasan' => 'required|min:5',
        //     'link' => 'required|min:5',
        // ]);

        Struktur_Desa::create([
            'nama' => $request->nama,
            'jabatan' => $request->jabatan,
            'atasan' => $request->atasan,
            'link' => $request->link,
        ]);

        return redirect()->back()->with('status', 'Slide Berhasil ditambah');
    }

    public function delete(Struktur_Desa $profil)
    {
        if ($profil->count() > 0) {
            $profil->delete();
            return redirect()->back()->with('status', 'Slide Berhasil dihapus');
        }
        return redirect()->back()->with('status', 'Maaf, data gagal dihapus');
    }
}
