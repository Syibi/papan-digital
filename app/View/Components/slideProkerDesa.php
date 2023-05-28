<?php

namespace App\View\Components;

use Illuminate\View\Component;

class slideProkerDesa extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public $kategoriDesa = "";
    public $prokerDesa = "";

    public function __construct($kategoriDesa, $prokerDesa)
    {
        $this->kategoriDesa = $kategoriDesa;
        $this->prokerDesa = $prokerDesa;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.slide-proker-desa');
    }
}
