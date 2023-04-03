<?php

namespace App\Http\Controllers;

use App\Models\Data_Pekerjaan;
use App\Models\Profil_Desa;
use App\Models\Data_Umum;
use App\Models\Data_Pendidikan;
use App\Models\Data_Penduduk;
use App\Models\Data_Sarpras;
use Illuminate\Http\Request;
use ArielMejiaDev\LarapexCharts\LarapexChart;
use Symfony\Component\HttpKernel\Profiler\Profile;
use RealRashid\SweetAlert\Facades\Alert;

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
        Alert::success('Selamat', 'Profil berhasil diperbarui');
        return redirect()->back();
    }
    
    // Kontroller page Data Umum
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

        return view('admin.umum', compact('umum', 'title' , 'pendidikan', 'penduduk', 'chart_jk', 'chart_usia', 'pekerjaan', 'sarpras'));
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
        Alert::success('Selamat', 'Data Umum berhasil ditambahkan');
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
        Alert::success('Selamat', 'Data Pendidikan berhasil ditambahkan');
        return redirect()->back();
    }
    public function addPenduduk(Request $request)
    {
        Data_Penduduk::create([
            'jml_kk' => $request->jml_kk,
            'miskin' => $request->miskin,
            'laki-laki' => $request->laki_laki,
            'perempuan' => $request->perempuan,
            'muda' => $request->muda,
            'dewasa' => $request->dewasa,
            'tua' => $request->tua,
        ]);
        Alert::success('Selamat', 'Data Penduduk berhasil ditambahkan');
        return redirect()->back();
    }
    public function addPekerjaan(Request $request)
    {
        Data_Pekerjaan::create([
            'pns' => $request->pns,
            'tni_polri' => $request->tni_polri,
            'swasta' => $request->swasta,
            'dagang' => $request->dagang,
            'petani' => $request->petani,
            'tukang' => $request->tukang,
            'buruh' => $request->buruh,
            'pensiunan' => $request->pensiunan,
            'nelayan' => $request->nelayan,
            'peternak' => $request->peternak,
            'jasa' => $request->jasa,
            'seni' => $request->seni,
            'lainnya' => $request->lainnya,
            'tidak_bekerja' => $request->tidak_bekerja,
        ]);
        Alert::success('Selamat', 'Data Pekerjaan berhasil ditambahkan');
        return redirect()->back();
    }
    public function addSarpras(Request $request)
    {
        Data_Sarpras::create([
            'kantor_desa' => $request->kantor_desa,
            'puskesmas' => $request->puskesmas,
            'poskesdes' => $request->poskesdes,
            'posyandu' => $request -> posyandu,
            'perpus' => $request -> perpus,
            'gedung_paud' => $request -> gedung_paud,
            'gedung_tk' => $request -> gedung_tk,
            'gedung_sd' => $request -> gedung_sd,
            'gedung_smp' => $request -> gedung_smp,
            'gedung_sma' => $request -> gedung_sma,
            'masjid' => $request -> masjid,
            'musholla' => $request -> musholla,
            'gereja' => $request -> gereja,
            'pura' => $request -> pura,
            'vihara' => $request -> vihara,
            'kelenteng' => $request -> kelenteng,
            'olahraga' => $request -> olahraga,
            'kesenian' => $request -> kesenian,
            'balai' => $request -> balai,
            'sumur_desa' => $request -> sumur_desa,
            'pasar_desa' => $request -> pasar_desa,
            'lainnya' => $request -> lainnya
        ]);
        Alert::success('Selamat', 'Data Sarana Prasarana berhasil ditambahkan');
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
        Alert::success('Selamat', 'Data Umum berhasil diupdate');
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
        Alert::success('Selamat', 'Data Pedidikan berhasil diupdate');
        return redirect()->back();
    }
    public function updatePenduduk(Request $request, Data_Penduduk $penduduk)
    {
        $penduduk = Data_Penduduk::find(1);
        $penduduk->update([
            'jml_kk' => $request->jml_kk,
            'miskin' => $request->miskin,
            'laki-laki' => $request->laki_laki,
            'perempuan' => $request->perempuan,
            'muda' => $request->muda,
            'dewasa' => $request->dewasa,
            'tua' => $request->tua,
        ]);
        Alert::success('Selamat', 'Data Penduduk berhasil diupdate');
        return redirect()->back();
    }
    public function updatePekerjaan(Request $request, Data_Pekerjaan $pekerjaan)
    {
        $pekerjaan = Data_Pekerjaan::find(1);
        $pekerjaan->update([
            'pns' => $request->pns,
            'tni_polri' => $request->tni_polri,
            'swasta' => $request->swasta,
            'dagang' => $request->dagang,
            'petani' => $request->petani,
            'tukang' => $request->tukang,
            'buruh' => $request->buruh,
            'pensiunan' => $request->pensiunan,
            'nelayan' => $request->nelayan,
            'peternak' => $request->peternak,
            'jasa' => $request->jasa,
            'seni' => $request->seni,
            'lainnya' => $request->lainnya,
            'tidak_bekerja' => $request->tidak_bekerja,
        ]);
        Alert::success('Selamat', 'Data Pekerjaan berhasil diupdate');
        return redirect()->back();
    }
    public function updateSarpras(Request $request, Data_Sarpras $sarpras)
    {
        $sarpras = Data_Sarpras::find(1);
        $sarpras->update([
            'kantor_desa' => $request->kantor_desa,
            'puskesmas' => $request->puskesmas,
            'poskesdes' => $request->poskesdes,
            'posyandu' => $request -> posyandu,
            'perpus' => $request -> perpus,
            'gedung_paud' => $request -> gedung_paud,
            'gedung_tk' => $request -> gedung_tk,
            'gedung_sd' => $request -> gedung_sd,
            'gedung_smp' => $request -> gedung_smp,
            'gedung_sma' => $request -> gedung_sma,
            'masjid' => $request -> masjid,
            'musholla' => $request -> musholla,
            'gereja' => $request -> gereja,
            'pura' => $request -> pura,
            'vihara' => $request -> vihara,
            'kelenteng' => $request -> kelenteng,
            'olahraga' => $request -> olahraga,
            'kesenian' => $request -> kesenian,
            'balai' => $request -> balai,
            'sumur_desa' => $request -> sumur_desa,
            'pasar_desa' => $request -> pasar_desa,
            'lainnya' => $request -> lainnya
        ]);
        Alert::success('Selamat', 'Data Sarana Prasarana berhasil diupdate');
        return redirect()->back();
    }

}
