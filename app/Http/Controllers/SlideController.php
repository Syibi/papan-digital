<?php

namespace App\Http\Controllers;

use App\Models\Slide;
use Illuminate\Http\Request;
use App\Models\Data_Penduduk;
use App\Models\Data_Umum;
use App\Models\Data_Pendidikan;
use App\Models\Data_Pekerjaan;
use App\Models\Data_Sarpras;
use App\Models\Data_Running_Text;
use App\Models\File_Musik;
use App\Models\Struktur_Desa;
use App\Models\Profil_Desa;
use App\Models\Proker_Desa;
use App\Models\Kategori_Desa;
use App\Models\Data_Pkk;
use App\Models\Proker_Pkk;
use App\Models\Kategori_Pkk;
use App\Models\Struktur_Pkk;
use ArielMejiaDev\LarapexCharts\LarapexChart;
use Illuminate\Support\Facades\File;
use RealRashid\SweetAlert\Facades\Alert;

class SlideController extends Controller
{
    public function index()
    {
        $slide = Slide::where('status', '1')->get();
        $title = "Beranda";
        $musik = File_Musik::latest()->first();
        $datadesa = Struktur_Desa::all();
        $datapkk1 = Struktur_Pkk::whereIn('jabatan', ['Ketua', 'Wakil Ketua', 'Bendahara', 'Wakil Bendahara', 'Sekretaris', 'Wakil Sekretaris'])->get();
        $datapkk2 = Struktur_Pkk::whereIn('jabatan', ['Ketua POKJA I', 'Wakil Ketua POKJA I', 'Sekretaris POKJA I', 'Wakil Sekretaris POKJA I', 'Bendahara POKJA I', 'Anggota POKJA I'])->get();
        $datapkk3 = Struktur_Pkk::whereIn('jabatan', ['Ketua POKJA II', 'Wakil Ketua POKJA II', 'Sekretaris POKJA II', 'Wakil Sekretaris POKJA II', 'Bendahara POKJA II', 'Anggota POKJA II'])->get();
        $datapkk4 = Struktur_Pkk::whereIn('jabatan', ['Ketua POKJA III', 'Wakil Ketua POKJA III', 'Sekretaris POKJA III', 'Wakil Sekretaris POKJA III', 'Bendahara POKJA III', 'Anggota POKJA III'])->get();
        $datapkk5 = Struktur_Pkk::whereIn('jabatan', ['Ketua POKJA IV', 'Wakil Ketua POKJA IV', 'Sekretaris POKJA IV', 'Wakil Sekretaris POKJA IV', 'Bendahara POKJA IV', 'Anggota POKJA IV'])->get();
        $teks = Data_Running_Text::all();
        $profil = Profil_Desa::where('id', '1')->first();
        $umum = Data_Umum::where('id', '1')->first();
        $pendidikan = Data_Pendidikan::where('id', '1')->first();
        $penduduk = Data_Penduduk::where('id', '1')->first();
        $pekerjaan = Data_Pekerjaan::where('id', '1')->first();
        $sarpras = Data_Sarpras::where('id', '1')->first();
        $kategoriDesa = Kategori_Desa::all();
        $prokerDesa = Proker_Desa::all();
        $profilPkk = Data_pkk::where('id', '1')->first();
        $kategoriPkk = Kategori_Pkk::all();
        $prokerPkk = Proker_Pkk::all();

        $jabatandesa = [];
        $sorteddesa = [];
        $grafikdesa = array();
        foreach ($datadesa as $item1) {
            $atasan = ""; 
            foreach ($datadesa as $item2) {
                if ($item2['jabatan'] == $item1['atasan'])  {
                    $atasan = $item2['nama'];
                }
            }
            $image = "../upload/profil/".$item1['file'];
            $header = array('v' =>  $item1['nama'], 
                            'f' =>
                            '<a class="fir-imageover"  rel="noopener" style="display:flex; justify-content:center; align-item:center">
                                <img class="fir-author-image fir-clickcircle" src="'.$image.'">
                            </a>
                                <div style="color:white; width:120px"><strong>'.$item1['nama'].'</strong></div>
                                <div style="color:white"><em>'.$item1['jabatan'].'</em></div>'
                        );
            array_push($jabatandesa, $item1['jabatan']);
            array_push($grafikdesa, [$header, $atasan, $item1['link']]);
            $sorteddesa = array_unique($jabatandesa);
            $sorteddesa = array_values($sorteddesa);
        }

        // grafik PKK 1
        $jabatanpkk1 = [];
        $sortedpkk1 = [];
        $grafikpkk1 = array();
        foreach ($datapkk1 as $item1) {
            $atasan = ""; 
            foreach ($datapkk1 as $item2) {
                if ($item2['jabatan'] == $item1['atasan'])  {
                    $atasan = $item2['nama'];
                }
            }
            $image = "../upload/profil/".$item1['file'];
            $header = array('v' =>  $item1['nama'], 
                            'f' =>
                            '<a class="fir-imageover"  rel="noopener" style="display:flex; justify-content:center; align-item:center">
                                <img class="fir-author-image fir-clickcircle" src="'.$image.'">
                            </a>
                                <div style="color:white; width:150px"><strong>'.$item1['nama'].'</strong></div>
                                <div style="color:white"><em>'.$item1['jabatan'].'</em></div>'
                        );
            array_push($jabatanpkk1, $item1['jabatan']);
            array_push($grafikpkk1, [$header, $atasan, $item1['link']]);
            $sortedpkk1 = array_unique($jabatanpkk1);
            $sortedpkk1 = array_values($sortedpkk1);
        }

        // grafik PKK 2
        $jabatanpkk2 = [];
        $sortedpkk2 = [];
        $grafikpkk2 = array();
        foreach ($datapkk2 as $item1) {
            $atasan = ""; 
            foreach ($datapkk2 as $item2) {
                if ($item2['jabatan'] == $item1['atasan'])  {
                    $atasan = $item2['nama'];
                }
            }
            $image = "../upload/profil/".$item1['file'];
            $header = array('v' =>  $item1['nama'], 
                            'f' =>
                            '<a class="fir-imageover"  rel="noopener" style="display:flex; justify-content:center; align-item:center">
                                <img class="fir-author-image fir-clickcircle" src="'.$image.'">
                            </a>
                                <div style="color:white; width:150px"><strong>'.$item1['nama'].'</strong></div>
                                <div style="color:white"><em>'.$item1['jabatan'].'</em></div>'
                        );
            array_push($jabatanpkk2, $item1['jabatan']);
            array_push($grafikpkk2, [$header, $atasan, $item1['link']]);
            $sortedpkk2 = array_unique($jabatanpkk2);
            $sortedpkk2 = array_values($sortedpkk2);
        }

        // grafik PKK 3
        $jabatanpkk3 = [];
        $sortedpkk3 = [];
        $grafikpkk3 = array();
        foreach ($datapkk3 as $item1) {
            $atasan = ""; 
            foreach ($datapkk3 as $item2) {
                if ($item2['jabatan'] == $item1['atasan'])  {
                    $atasan = $item2['nama'];
                }
            }
            $image = "../upload/profil/".$item1['file'];
            $header = array('v' =>  $item1['nama'], 
                            'f' =>
                            '<a class="fir-imageover"  rel="noopener" style="display:flex; justify-content:center; align-item:center">
                                <img class="fir-author-image fir-clickcircle" src="'.$image.'">
                            </a>
                                <div style="color:white; width:150px"><strong>'.$item1['nama'].'</strong></div>
                                <div style="color:white"><em>'.$item1['jabatan'].'</em></div>'
                        );
            array_push($jabatanpkk3, $item1['jabatan']);
            array_push($grafikpkk3, [$header, $atasan, $item1['link']]);
            $sortedpkk3 = array_unique($jabatanpkk3);
            $sortedpkk3 = array_values($sortedpkk3);
        }

        // grafik PKK 4
        $jabatanpkk4 = [];
        $sortedpkk4 = [];
        $grafikpkk4 = array();
        foreach ($datapkk4 as $item1) {
            $atasan = ""; 
            foreach ($datapkk4 as $item2) {
                if ($item2['jabatan'] == $item1['atasan'])  {
                    $atasan = $item2['nama'];
                }
            }
            $image = "../upload/profil/".$item1['file'];
            $header = array('v' =>  $item1['nama'], 
                            'f' =>
                            '<a class="fir-imageover"  rel="noopener" style="display:flex; justify-content:center; align-item:center">
                                <img class="fir-author-image fir-clickcircle" src="'.$image.'">
                            </a>
                                <div style="color:white; width:150px"><strong>'.$item1['nama'].'</strong></div>
                                <div style="color:white"><em>'.$item1['jabatan'].'</em></div>'
                        );
            array_push($jabatanpkk4, $item1['jabatan']);
            array_push($grafikpkk4, [$header, $atasan, $item1['link']]);
            $sortedpkk4 = array_unique($jabatanpkk4);
            $sortedpkk4 = array_values($sortedpkk4);
        }

        // grafik PKK 5
        $jabatanpkk5 = [];
        $sortedpkk5 = [];
        $grafikpkk5 = array();
        foreach ($datapkk5 as $item1) {
            $atasan = ""; 
            foreach ($datapkk5 as $item2) {
                if ($item2['jabatan'] == $item1['atasan'])  {
                    $atasan = $item2['nama'];
                }
            }
            $image = "../upload/profil/".$item1['file'];
            $header = array('v' =>  $item1['nama'], 
                            'f' =>
                            '<a class="fir-imageover"  rel="noopener" style="display:flex; justify-content:center; align-item:center">
                                <img class="fir-author-image fir-clickcircle" src="'.$image.'">
                            </a>
                                <div style="color:white; width:150px"><strong>'.$item1['nama'].'</strong></div>
                                <div style="color:white"><em>'.$item1['jabatan'].'</em></div>'
                        );
            array_push($jabatanpkk5, $item1['jabatan']);
            array_push($grafikpkk5, [$header, $atasan, $item1['link']]);
            $sortedpkk5 = array_unique($jabatanpkk5);
            $sortedpkk5 = array_values($sortedpkk5);
        }


        // Grafik Penduduk
        $penduduk = Data_Penduduk::where('id', '1')->first();
        $lk = (int)$penduduk['laki-laki'];
        $pr = (int)$penduduk['perempuan'];
        $md = (int)$penduduk['muda'];
        $dw = (int)$penduduk['dewasa'];
        $tu = (int)$penduduk['tua'];

        $chart_jk = (new LarapexChart)
        ->setDataset([$lk, $pr])
        ->setLabels(['Laki-laki', 'Perempuan']);
        $chart_usia = (new LarapexChart)
        ->setDataset([$md, $dw, $tu])
        ->setLabels(['Usia 0-15', 'Usia 15-65', 'Usia 65 Tahun keatas']);

        return view('admin.beranda', compact(
            'slide', 
            'title', 
            'chart_jk', 
            'chart_usia', 
            'musik', 
            'grafikdesa', 
            'grafikpkk1', 
            'grafikpkk2', 
            'grafikpkk3', 
            'grafikpkk4', 
            'grafikpkk5', 
            'teks', 
            'profil', 
            'umum', 
            'penduduk', 
            'pendidikan', 
            'pekerjaan', 
            'sarpras', 
            'kategoriDesa', 
            'prokerDesa', 
            'profilPkk',
            'kategoriPkk', 
            'prokerPkk'
        ));
    }
    public function edit()
    {
        $slide = Slide::paginate(6);
        $title = "Beranda";
        $musik = File_Musik::latest()->first();
        $teks = Data_Running_Text::all();
        return view('admin.edit-beranda', compact('slide', 'title' , 'musik', 'teks'));
    }
    public function add(Request $request)
    {
        $this->validate($request, [
            'judul' => 'required|min:3',
            // 'deskripsi' => 'required|min:5',
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
            'tipe' => $request->input('tipe')=="video"? '1' : ($request->input('tipe')=="gambar" ? '0' : '2'),
            'file' => $request->input('tipe')=="tab"? $request->input('tab') : $filename,
            'durasi' => $request->durasi
        ]);
        
        Alert::success('Selamat', 'Slide berhasil ditambah');
        return redirect()->back();
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
                'file' => $request->input('tipe')=="tab"? $request->input('tab') : $filename,
            ]);
        }
        $slide->update([
            'judul' => $request->judul,
            'deskripsi' => $request->deskripsi,
            'status' => $request->input('status')==true? '1' : '0',
            'tipe' => $request->input('tipe')=="video"? '1' : ($request->input('tipe')=="gambar" ? '0' : '2'),
            'durasi' => $request->durasi
        ]);
        Alert::success('Selamat', 'Slide Berhasil diupdate');
        return redirect()->back();
    }
    public function delete(Slide $slide)
    {
        if ($slide->count() > 0) {
            $destination = public_path('\upload\slide\\') .$slide->file;
            if (File::exists($destination)) {
                File::delete($destination);
            }
            $slide->delete();
            Alert::success('Selamat', 'Slide berhasil dihapus');
            return redirect()->back();
        }
        Alert::error('Maaf', 'Slide gagal dihapus, silahkan coba lagi');
        return redirect()->back();
    }
    public function addMusik(Request $request)
    {
        if ($request->hasFile('file')) {
            $file = $request->file('file');
            $filename = $file->getClientOriginalName();
            $file->move('upload/musik', $filename);
        }
        File_Musik::create([
            'file' => $filename
        ]);
        
        Alert::success('Selamat', 'Musik Sudah Update');
        return redirect()->back();
    }
    public function addText(Request $request)
    {
        Data_Running_Text::create([
            'teks' => $request->running_text
        ]);
        
        Alert::success('Selamat', 'Teks sudah ditambah');
        return redirect()->back();
    }
    public function deleteText(Data_Running_Text $teks)
    {
        if ($teks->count() > 0) {
            $teks->delete();
            Alert::success('Selamat', 'Teks berhasil dihapus');
            return redirect()->back();
        }
        Alert::error('Maaf', 'Teks gagal dihapus, silahkan coba lagi');
        return redirect()->back();
    }
}
