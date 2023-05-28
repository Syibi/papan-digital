<?php

namespace App\View\Components;

use Illuminate\View\Component;

class prokerPkk extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public $kategoriPkk = "";
    public $prokerPkk = "";

    public function __construct($kategoriPkk, $prokerPkk)
    {
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
        return view('components.proker-pkk');
    }
}
