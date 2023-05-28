<?php

namespace App\Http\Controllers;

use App\Models\Data_Pekerjaan;
use App\Models\Slide;
use App\Models\Data_Penduduk;
use App\Models\Profil_Desa;
use App\Models\Data_Umum;
use App\Models\Data_Pendidikan;
use App\Models\Data_Sarpras;
use App\Models\Galeri_Desa;
use App\Models\Struktur_Desa;
use App\Models\Proker_Desa;
use App\Models\Kategori_Desa;
use App\Models\Struktur_Pkk;
use App\Models\Proker_Pkk;
use App\Models\Kategori_Pkk;
use App\Models\Data_Pkk;
use App\Models\File_Musik;
use App\Models\Data_Running_Text;
use ArielMejiaDev\LarapexCharts\LarapexChart;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class UserController extends Controller
{
    public function login()
    {
        return view('/login');
    }

    public function actionlogin(Request $request)
    {
        $data = [
            'username' => $request->input('username'),
            'password' => $request->input('password'),
        ];

        if (Auth::Attempt($data)) {
            return redirect('/admin/beranda');
        }else{
            return redirect('/login');
        }
    }

    public function actionlogout()
    {
        Auth::logout();
        return redirect('/');
    }

    public function beranda()
    {
        $slide = Slide::where('status', '1')->get();
        $title = "Beranda";
        $musik = File_Musik::latest()->first();
        $datadesa = Struktur_Desa::all();
        $datapkk = Struktur_Pkk::all();
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

        $jabatanpkk = [];
        $sortedpkk = [];
        $grafikpkk = array();
        foreach ($datapkk as $item1) {
            $atasan = ""; 
            foreach ($datapkk as $item2) {
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
            array_push($jabatanpkk, $item1['jabatan']);
            array_push($grafikpkk, [$header, $atasan, $item1['link']]);
            $sortedpkk = array_unique($jabatanpkk);
            $sortedpkk = array_values($sortedpkk);
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

        return view('user.beranda', compact(
            'slide', 
            'title', 
            'chart_jk', 
            'chart_usia', 
            'musik', 
            'grafikdesa', 
            'grafikpkk', 
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

    public function profil()
    {
        $profil = Profil_Desa::where('id', '1')->first();
        $title = "Profil Desa";
        $musik = File_Musik::latest()->first();
        return view('user.profil', compact('profil', 'title', 'musik'));
    }

    public function umum()
    {
        $umum = Data_Umum::where('id', '1')->first();
        $pendidikan = Data_Pendidikan::where('id', '1')->first();
        $penduduk = Data_Penduduk::where('id', '1')->first();
        $pekerjaan = Data_Pekerjaan::where('id', '1')->first();
        $sarpras = Data_Sarpras::where('id', '1')->first();
        $musik = File_Musik::latest()->first();
        $title = "Data Umum";

        // Fungsi chart 
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

        return view('user.umum', compact('umum', 'title' , 'pendidikan', 'penduduk', 'chart_jk', 'chart_usia', 'pekerjaan', 'sarpras', 'musik'));
    }

    public function galeri()
    {
        $allGaleri = Galeri_Desa::all();
        $galeri = Galeri_Desa::orderBy('created_at', 'desc')->paginate(8);
        $musik = File_Musik::latest()->first();
        $title = "Galeri Desa";
        return view('user.galeri', compact('title', 'galeri', 'allGaleri', 'musik'));
    }

    public function strukturDesa()
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
        $title = "Struktur Desa";
        $musik = File_Musik::latest()->first();
        return view('user.struktur-desa', compact('title', 'data', 'sorted' , 'grafik', 'musik'));
    }

    public function prokerDesa()
    {
        $kategori = Kategori_Desa::all();
        $proker = Proker_Desa::all();
        $tipe = "proker-desa";
        $musik = File_Musik::latest()->first();
        $title = "Proker Desa";
        return view('user.proker-desa', compact('title', 'kategori', 'proker' , 'tipe', 'musik'));
    }

    public function profilPkk()
    {
        $profilPkk = Data_pkk::where('id', '1')->first();
        $data = Struktur_Pkk::all();
        $musik = File_Musik::latest()->first();
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
        return view('user.profil-pkk', compact('title', 'data', 'sorted' , 'grafik' , 'profilPkk', 'musik'));
    }

    public function prokerPkk()
    {
        $kategori = Kategori_Pkk::all();
        $proker = Proker_Pkk::all();
        $tipe = "proker-pkk";
        $title = "Proker PKK";
        $musik = File_Musik::latest()->first();
        return view('user.proker-pkk', compact('title', 'kategori', 'proker' , 'tipe', 'musik'));
    }
}
