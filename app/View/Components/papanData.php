<?php

namespace App\View\Components;

use Illuminate\View\Component;

class papanData extends Component
{
    public $title = "";
    public $id = "";
    public $papandata ="";

    public function __construct($title, $papandata, $id)
    {
        $this->title=$title;
        $this->papandata=$papandata;
        $this->id=$id;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.papan-data');
    }
}
