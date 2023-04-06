<?php

namespace App\Http\Controllers;

use App\Models\Slide;
use Illuminate\Http\Request;
use App\Models\Data_Penduduk;
use App\Models\File_Musik;
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

        return view('admin.beranda', compact('slide', 'title', 'chart_jk', 'chart_usia', 'musik'));
    }
    public function edit()
    {
        $slide = Slide::paginate(5);
        $title = "Beranda";
        $musik = File_Musik::latest()->first();
        return view('admin.edit-beranda', compact('slide', 'title' , 'musik'));
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
            'tipe' => $request->input('tipe')=="video"? '1' : '0',
            'file' => $filename
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
                'file' => $filename
            ]);
        }
        $slide->update([
            'judul' => $request->judul,
            'deskripsi' => $request->deskripsi,
            'status' => $request->input('status')==true? '1' : '0',
            'tipe' => $request->input('tipe')=="video"? '1' : '0',
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
    // public function updateMusik(Request $request, File_Musik $musik)
    // {
    //     if ($request->hasFile('file')) {
    //         $destination = public_path('\upload\musik\\') .$musik->file;
    //         if (File::exists($destination)) {
    //             File::delete($destination);
    //         }
    //         $file = $request->file('file');
    //         $filename = $file->getClientOriginalName();
    //         $file->move('upload/musik', $filename);
    //         $musik->update([
    //             'file' => $filename
    //         ]);
    //         Alert::success('Selamat', 'Slide Berhasil diupdate');
    //         return redirect()->back();
    //     }
    // }
}
