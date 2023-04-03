<?php

namespace App\View\Components;

use Illuminate\View\Component;

class tabPendidikan extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public $pendidikan = "";
    public function __construct($pendidikan)
    {
        $this->pendidikan=$pendidikan;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.tab-pendidikan');
    }
}
