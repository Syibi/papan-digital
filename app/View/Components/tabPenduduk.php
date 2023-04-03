<?php

namespace App\View\Components;

use Illuminate\View\Component;

class tabPenduduk extends Component
{
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
        return view('components.tab-penduduk');
    }
}
