<?php

namespace App\View\Components;

use Illuminate\View\Component;

class slideDataPekerjaan extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public $pekerjaan = "";
    public function __construct($pekerjaan)
    {
        $this->pekerjaan = $pekerjaan;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.slide-data-pekerjaan');
    }
}
