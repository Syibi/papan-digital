<?php

namespace App\Http\Controllers;

use App\Models\Profil_Desa;
use App\Models\Data_Umum;
use App\Models\Data_Pendidikan;
use App\Models\Data_Penduduk;
use Illuminate\Http\Request;
use ArielMejiaDev\LarapexCharts\LarapexChart;
use Symfony\Component\HttpKernel\Profiler\Profile;

class InfoController extends Controller
{
    // Kontroller page Profil Desa
    public function profil()
    {
        $profil = Profil_Desa::where('id', '1')->first();
        $title = "Profil Desa";
        return view('admin.profil', compact('profil', 'title'));
    }
    public function addProfil(Request $request)
    {
        Profil_Desa::create([
            'nama_desa' => $request->nama_desa,
            'tahun_pembentukan' => $request-> tahun_pembentukan,
            'dasar_hukum' => $request-> dasar_hukum,
            'kode_wilayah' => $request-> kode_wilayah,
            'kode_pos' => $request-> kode_pos,
            'kecamatan' => $request-> kecamatan,
            'kabupaten' => $request-> kabupaten,
            'provinsi' => $request-> provinsi,
        ]);
        return redirect()->back();
    }
    public function updateProfil(Request $request, Profil_Desa $profil)
    {
        $profil = Profil_Desa::find(1);
        $profil->update([
            'nama_desa' => $request->nama_desa,
            'tahun_pembentukan' => $request-> tahun_pembentukan,
            'dasar_hukum' => $request-> dasar_hukum,
            'kode_wilayah' => $request-> kode_wilayah,
            'kode_pos' => $request-> kode_pos,
            'kecamatan' => $request-> kecamatan,
            'kabupaten' => $request-> kabupaten,
            'provinsi' => $request-> provinsi,
        ]);
        return redirect()->back();
    }
    
    // Kontroller page Data Umum
    public function umum()
    {
        $umum = Data_Umum::where('id', '1')->first();
        $pendidikan = Data_Pendidikan::where('id', '1')->first();
        $penduduk = Data_Penduduk::where('id', '1')->first();
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

        return view('admin.umum', compact('umum', 'title' , 'pendidikan', 'penduduk', 'chart_jk', 'chart_usia'));
    }

    // fungsi add
    public function addUmum(Request $request)
    {
        Data_Umum::create([
            'topologi_desa' => $request->topologi_desa,
            'tingkat_perkembangan' => $request->tingkat_perkembangan,
            'luas_wilayah' => $request->luas_wilayah,
            'batas_wilayah_utara' => $request->batas_wilayah_utara,
            'batas_wilayah_barat' => $request->batas_wilayah_barat,
            'batas_wilayah_selatan' => $request->batas_wilayah_selatan,
            'batas_wilayah_timur' => $request->batas_wilayah_timur,
            'orbitrasi_kecamatan' => $request->orbitrasi_kecamatan,
            'orbitrasi_kota' => $request->orbitrasi_kota,
            'orbitrasi_kabupaten' => $request->orbitrasi_kabupaten,
            'orbitrasi_provinsi' => $request->orbitrasi_provinsi,
        ]);
        return redirect()->back();
    }
    public function addPendidikan(Request $request)
    {
        Data_Pendidikan::create([
            'tk' => $request->tk,
            'sd' => $request->sd,
            'smp' => $request->smp,
            'sma' => $request->sma,
            'diploma' => $request->diploma,
            'sarjana' => $request->sarjana,
            'pascasarjana' => $request->pascasarjana,
            'pondok' => $request->pondok,
            'keagamaan' => $request->keagamaan,
            'slb' => $request->slb,
            'kursus' => $request->kursus,
            'tidak_sekolah' => $request->tidak_sekolah
        ]);
        return redirect()->back();
    }
    public function addPenduduk(Request $request)
    {
        Data_Penduduk::create([
            'jml_kk' => $request->jml_kk,
            'laki-laki' => $request->laki_laki,
            'perempuan' => $request->perempuan,
            'muda' => $request->muda,
            'dewasa' => $request->dewasa,
            'tua' => $request->tua,
        ]);
        return redirect()->back();
    }

    //fungsi update
    public function updateUmum(Request $request, Data_Umum $umum)
    {
        $umum = Data_Umum::find(1);
        $umum->update([
            'topologi_desa' => $request->topologi_desa,
            'tingkat_perkembangan' => $request->tingkat_perkembangan,
            'luas_wilayah' => $request->luas_wilayah,
            'batas_wilayah_utara' => $request->batas_wilayah_utara,
            'batas_wilayah_barat' => $request->batas_wilayah_barat,
            'batas_wilayah_selatan' => $request->batas_wilayah_selatan,
            'batas_wilayah_timur' => $request->batas_wilayah_timur,
            'orbitrasi_kecamatan' => $request->orbitrasi_kecamatan,
            'orbitrasi_kota' => $request->orbitrasi_kota,
            'orbitrasi_kabupaten' => $request->orbitrasi_kabupaten,
            'orbitrasi_provinsi' => $request->orbitrasi_provinsi,
        ]);
        return redirect()->back();
    }
    public function updatePendidikan(Request $request, Data_Pendidikan $pendidikan)
    {
        $pendidikan = Data_Pendidikan::find(1);
        $pendidikan->update([
            'tk' => $request->tk,
            'sd' => $request->sd,
            'smp' => $request->smp,
            'sma' => $request->sma,
            'diploma' => $request->diploma,
            'sarjana' => $request->sarjana,
            'pascasarjana' => $request->pascasarjana,
            'pondok' => $request->pondok,
            'keagamaan' => $request->keagamaan,
            'slb' => $request->slb,
            'kursus' => $request->kursus,
            'tidak_sekolah' => $request->tidak_sekolah
        ]);
        return redirect()->back();
    }
    public function updatePenduduk(Request $request, Data_Penduduk $penduduk)
    {
        $penduduk = Data_Penduduk::find(1);
        $penduduk->update([
            'jml_kk' => $request->jml_kk,
            'laki-laki' => $request->laki_laki,
            'perempuan' => $request->perempuan,
            'muda' => $request->muda,
            'dewasa' => $request->dewasa,
            'tua' => $request->tua,
        ]);
        return redirect()->back();
    }

}
