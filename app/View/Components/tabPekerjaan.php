<?php

namespace App\View\Components;

use Illuminate\View\Component;

class tabPekerjaan extends Component
{
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
        return view('components.tab-pekerjaan');
    }
}
