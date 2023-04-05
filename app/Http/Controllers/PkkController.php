<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Struktur_Pkk;
use App\Models\Proker_Pkk;
use App\Models\Kategori_Pkk;
use App\Models\Data_Pkk;
use Illuminate\Support\Facades\File;
use RealRashid\SweetAlert\Facades\Alert;
class PkkController extends Controller
{
    // Function Struktur Desa
    public function profil()
    {
        $data = Struktur_Pkk::all();
        $profil = Data_Pkk::where('id', '1')->first();
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
            $image = "../upload/profil/".$item1['file'];
            $header = array('v' =>  $item1['nama'], 
                            'f' =>
                            '<a class="fir-imageover" rel="noopener">
                                <img class="fir-author-image fir-clickcircle" src="'.$image.'">
                            </a>
                                <div style="color:white"><strong>'.$item1['nama'].'</strong></div>
                                <div style="color:white"><em>'.$item1['jabatan'].'</em></div>'
                        );
            array_push($jabatan, $item1['jabatan']);
            array_push($grafik, [$header, $atasan, $item1['link']]);
            $sorted = array_unique($jabatan);
            $sorted = array_values($sorted);

        }
        $title = "Profil PKK";
        return view('admin.profil-pkk', compact('title', 'data', 'sorted' , 'grafik' , 'profil'));
    }

    public function addProfil(Request $request)
    {

        Data_Pkk::create([
            'pkk_dusun' => $request->pkk_dusun,
            'pkk_rw' => $request->pkk_rw,
            'pkk_rt' => $request->pkk_rt,
            'dasa_wisma' => $request->dasa_wisma,
            'jml_kk' => $request->jml_kk,
            'jml_jiwa' => $request->jml_jiwa,
            'tp_pkk' => $request->tp_pkk,
            'umum' => $request->umum,
            'khusus' => $request->khusus,
        ]);

        Alert::success('Selamat', 'Data berhasil ditambah');
        return redirect()->back();
    }
    public function updateProfil(Request $request, Data_Pkk $profil)
    {
        $profil->update([
            'pkk_dusun' => $request->pkk_dusun,
            'pkk_rw' => $request->pkk_rw,
            'pkk_rt' => $request->pkk_rt,
            'dasa_wisma' => $request->dasa_wisma,
            'jml_kk' => $request->jml_kk,
            'jml_jiwa' => $request->jml_jiwa,
            'tp_pkk' => $request->tp_pkk,
            'umum' => $request->umum,
            'khusus' => $request->khusus,
        ]);
        Alert::success('Selamat', 'Data Berhasil diupdate');
        return redirect()->back();
    }

    public function addStruktur(Request $request)
    {
        if ($request->hasFile('file')) {
            $file = $request->file('file');
            $filename = $file->getClientOriginalName();
            $file->move('upload/profil', $filename);
        }

        Struktur_Pkk::create([
            'nama' => $request->nama,
            'jabatan' => $request->jabatan,
            'atasan' => $request->atasan,
            'link' => $request->link,
            'file' => $filename
        ]);

        Alert::success('Selamat', 'Data berhasil ditambah');
        return redirect()->back();
    }
    public function updateStruktur(Request $request, Struktur_Pkk $profil)
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
        Alert::success('Selamat', 'Data Berhasil diupdate');
        return redirect()->back();
    }
    public function deleteStruktur(Struktur_Pkk $profil)
    {
        if ($profil->count() > 0) {
            $destination = public_path('\upload\profil\\') .$profil->file;
            if (File::exists($destination)) {
                File::delete($destination);
            }
            $profil->delete();
            Alert::success('Selamat', 'Data berhasil dihapus');
            return redirect()->back();
        }
        Alert::error('Maaf', 'Data gagal dihapus, silahkan coba lagi');
        return redirect()->back();
    }

    // Function Proker Desa
    public function proker()
    {
        $kategori = Kategori_Pkk::all();
        $proker = Proker_Pkk::all();
        $title = "Proker PKK";
        $tipe = "proker-pkk";
        return view('admin.proker-pkk', compact('title', 'kategori', 'proker', 'tipe'));
    }
    public function addKategori(Request $request)
    {
        $this->validate($request, [
            'kategori' => 'required|min:5',
        ]);
        Kategori_Pkk::create([
            'kategori' => $request->kategori,
        ]);
        Alert::success('Selamat', 'Data berhasil ditambah');
        return redirect()->back();
    }
    public function deleteKategori(Kategori_Pkk $kategori)
    {
        if ($kategori->count() > 0) {
            $kategori->delete();
            Alert::success('Selamat', 'Data berhasil dihapus');
            return redirect()->back();
        }
        Alert::error('Maaf', 'Data gagal dihapus, silahkan coba lagi');
        return redirect()->back();
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

        Proker_Pkk::create([
            'program' => $request->program,
            'kegiatan' => $request->kegiatan,
            'kategori' => $request->kategori,
            'pelaksanaan' => $request->pelaksanaan,
            'sasaran' => $request->sasaran,
            'sumber_dana' => $request->sumber_dana,
            'dokumentasi' => $request->input('dokumentasi')=="dokumentasi"? '1' : '0',
            'file' => $filename

        ]);
        Alert::success('Selamat', 'Data berhasil ditambah');
        return redirect()->back();
    }
    public function deleteProker(Proker_Pkk $proker)
    {
        $proker->delete();
        Alert::success('Selamat', 'Data berhasil dihapus');
        return redirect()->back();
    }
}
