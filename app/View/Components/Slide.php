<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Slide extends Component
{

    public $slide = "";
    public $chartusia = "";
    public $chartjk = "";
    public $grafik = "";
    public $teks = "";
    public $profil = "";
    public $umum = "";
    public $penduduk = "";
    public $pendidikan = "";

    public function __construct($slide, $chartjk, $chartusia, $grafik, $teks, $profil, $umum, $penduduk, $pendidikan)
    {
        $this->slide = $slide;
        $this->chartjk = $chartjk;
        $this->chartusia = $chartusia;
        $this->grafik = $grafik;
        $this->teks = $teks;
        $this->profil = $profil;
        $this->umum = $umum;
        $this->penduduk = $penduduk;
        $this->pendidikan = $pendidikan;

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
