<?php

namespace App\Http\Controllers;

use App\Models\Profil_Desa;
use Illuminate\Http\Request;
use ArielMejiaDev\LarapexCharts\LarapexChart;
use Symfony\Component\HttpKernel\Profiler\Profile;

class GrafikController extends Controller
{
    public function index()
    {
        $profil = Profil_Desa::where('id', '1')->first();
        return view('admin.info', ['profil' => $profil]);
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
}
