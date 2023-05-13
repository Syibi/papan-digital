<?php

namespace App\Http\Controllers;

use App\Models\Slide;
use Illuminate\Http\Request;
use App\Models\Data_Penduduk;
use App\Models\Data_Umum;
use App\Models\Data_Pendidikan;
use App\Models\Data_Pekerjaan;
use App\Models\Data_Running_Text;
use App\Models\File_Musik;
use App\Models\Struktur_Desa;
use App\Models\Profil_Desa;
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
        $data = Struktur_Desa::all();
        $teks = Data_Running_Text::all();
        $profil = Profil_Desa::where('id', '1')->first();
        $umum = Data_Umum::where('id', '1')->first();
        $pendidikan = Data_Pendidikan::where('id', '1')->first();
        $penduduk = Data_Penduduk::where('id', '1')->first();
        $pekerjaan = Data_Pekerjaan::where('id', '1')->first();

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

        return view('admin.beranda', compact('slide', 'title', 'chart_jk', 'chart_usia', 'musik' , 'grafik', 'teks', 'profil', 'umum', 'penduduk', 'pendidikan' ));
    }
    public function edit()
    {
        $slide = Slide::paginate(5);
        $title = "Beranda";
        $musik = File_Musik::latest()->first();
        $teks = Data_Running_Text::all();
        return view('admin.edit-beranda', compact('slide', 'title' , 'musik', 'teks'));
    }
    public function add(Request $request)
    {
        $this->validate($request, [
            'judul' => 'required|min:3',
            'deskripsi' => 'required|min:5',
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
