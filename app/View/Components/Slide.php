<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Slide extends Component
{

    public $slide = "";
    public $chartusia = "";
    public $chartjk = "";

    public function __construct($slide, $chartjk, $chartusia)
    {
        $this->slide = $slide;
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
        return view('components.slide');
    }
}
