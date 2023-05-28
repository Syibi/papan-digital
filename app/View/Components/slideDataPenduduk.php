<?php

namespace App\View\Components;

use Illuminate\View\Component;

class slideDataPenduduk extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public $penduduk = "";
    public $chartusia = "";
    public $chartjk = "";

    public function __construct($penduduk, $chartjk, $chartusia)
    {
        $this->penduduk=$penduduk;
        $this->chartjk = $chartjk;
        $this->chartusia = $chartusia;
    }
    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.slide-data-penduduk');
    }
}
