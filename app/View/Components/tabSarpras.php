<?php

namespace App\View\Components;

use Illuminate\View\Component;

class tabSarpras extends Component
{
    public $sarpras = "";
    public function __construct($sarpras)
    {
        $this->sarpras = $sarpras;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.tab-sarpras');
    }
}
