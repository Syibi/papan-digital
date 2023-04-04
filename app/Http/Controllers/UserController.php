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

        return view('user.beranda', compact('slide', 'title', 'chart_jk', 'chart_usia'));
    }

    public function profil()
    {
        $profil = Profil_Desa::where('id', '1')->first();
        $title = "Profil Desa";
        return view('user.profil', compact('profil', 'title'));
    }

    public function umum()
    {
        $umum = Data_Umum::where('id', '1')->first();
        $pendidikan = Data_Pendidikan::where('id', '1')->first();
        $penduduk = Data_Penduduk::where('id', '1')->first();
        $pekerjaan = Data_Pekerjaan::where('id', '1')->first();
        $sarpras = Data_Sarpras::where('id', '1')->first();
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

        return view('user.umum', compact('umum', 'title' , 'pendidikan', 'penduduk', 'chart_jk', 'chart_usia', 'pekerjaan', 'sarpras'));
    }

    public function galeri()
    {
        $allGaleri = Galeri_Desa::all();
        $galeri = Galeri_Desa::orderBy('created_at', 'desc')->paginate(8);
        $title = "Galeri Desa";
        return view('user.galeri', compact('title', 'galeri', 'allGaleri'));
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
            $image = "upload/profil/".$item1['file'];
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
        return view('user.struktur-desa', compact('title', 'data', 'sorted' , 'grafik'));
    }

    public function prokerDesa()
    {
        $kategori = Kategori_Desa::all();
        $proker = Proker_Desa::all();
        $title = "Proker Desa";
        return view('user.proker-desa', compact('title', 'kategori', 'proker'));
    }

    public function profilPkk()
    {
        $profil = Data_pkk::where('id', '1')->first();
        $data = Struktur_Pkk::all();
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
        $title = "Profil PKK";
        return view('user.profil-pkk', compact('title', 'data', 'sorted' , 'grafik' , 'profil'));
    }

    public function prokerPkk()
    {
        $kategori = Kategori_Pkk::all();
        $proker = Proker_Pkk::all();
        $title = "Proker PKK";
        return view('user.proker-pkk', compact('title', 'kategori', 'proker'));
    }
}
