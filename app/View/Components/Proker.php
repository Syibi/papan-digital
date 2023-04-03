<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Proker extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public $kategori = "";
    public $proker = "";

    public function __construct($kategori, $proker)
    {
        $this->kategori = $kategori;
        $this->proker = $proker;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.proker');
    }
}
