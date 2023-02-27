<?php

namespace App\Http\Controllers;

use App\Models\Profil_Desa;
use App\Models\Data_Umum;
use Illuminate\Http\Request;
use ArielMejiaDev\LarapexCharts\LarapexChart;
use Symfony\Component\HttpKernel\Profiler\Profile;

class GrafikController extends Controller
{
    public function index()
    {
        $profil = Profil_Desa::where('id', '1')->first();
        $umum = Data_Umum::where('id', '1')->first();
        return view('admin.info', 
        [
            'profil' => $profil,
            'umum' => $umum
        ]);
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


}
