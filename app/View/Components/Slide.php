<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Slide extends Component
{

    public $slide = "";
    public $chartusia = "";
    public $chartjk = "";
    public $grafikdesa = "";
    public $grafikpkk = "";
    public $teks = "";
    public $profil = "";
    public $umum = "";
    public $penduduk = "";
    public $pendidikan = "";
    public $pekerjaan = "";
    public $sarpras = "";
    public $kategoriDesa = "";
    public $prokerDesa = "";
    public $profilPkk = "";
    public $kategoriPkk = "";
    public $prokerPkk = "";

    public function __construct($slide, 
                                $chartjk, 
                                $chartusia, 
                                $grafikdesa, 
                                $grafikpkk, 
                                $teks, 
                                $profil, 
                                $umum, 
                                $penduduk, 
                                $pendidikan,
                                $pekerjaan,
                                $sarpras,
                                $kategoriDesa,
                                $prokerDesa,
                                $profilPkk,
                                $kategoriPkk,
                                $prokerPkk)
    {
        $this->slide = $slide;
        $this->chartjk = $chartjk;
        $this->chartusia = $chartusia;
        $this->grafikdesa = $grafikdesa;
        $this->grafikpkk = $grafikpkk;
        $this->teks = $teks;
        $this->profil = $profil;
        $this->umum = $umum;
        $this->penduduk = $penduduk;
        $this->pendidikan = $pendidikan;
        $this->pekerjaan = $pekerjaan;
        $this->sarpras = $sarpras;
        $this->kategoriDesa = $kategoriDesa;
        $this->prokerDesa = $prokerDesa;
        $this->profilPkk = $profilPkk;
        $this->kategoriPkk = $kategoriPkk;
        $this->prokerPkk = $prokerPkk;

    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.slide');
    }
}
