<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Galeri extends Component
{
    public $galeri = "";
    public function __construct($galeri)
    {
        $this->galeri = $galeri;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.galeri');
    }
}
