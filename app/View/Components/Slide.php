<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Slide extends Component
{

    public $slide = "";
    public $chartusia = "";
    public $chartjk = "";
    public $grafikdesa = "";
    public $grafikpkk1 = "";
    public $grafikpkk2 = "";
    public $grafikpkk3 = "";
    public $grafikpkk4 = "";
    public $grafikpkk5 = "";
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
    public $papandata = "";

    public function __construct($slide, 
                                $chartjk, 
                                $chartusia, 
                                $grafikdesa, 
                                $grafikpkk1, 
                                $grafikpkk2, 
                                $grafikpkk3, 
                                $grafikpkk4, 
                                $grafikpkk5, 
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
                                $prokerPkk,
                                $papandata)
    {
        $this->slide = $slide;
        $this->chartjk = $chartjk;
        $this->chartusia = $chartusia;
        $this->grafikdesa = $grafikdesa;
        $this->grafikpkk1 = $grafikpkk1;
        $this->grafikpkk2 = $grafikpkk2;
        $this->grafikpkk3 = $grafikpkk3;
        $this->grafikpkk4 = $grafikpkk4;
        $this->grafikpkk5 = $grafikpkk5;
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
        $this->papandata = $papandata;

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
