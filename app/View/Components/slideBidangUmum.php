<?php

namespace App\View\Components;

use Illuminate\View\Component;

class slideBidangUmum extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public $umum = "";
    public function __construct($umum)
    {
        $this->umum=$umum;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.slide-bidang-umum');
    }
}
