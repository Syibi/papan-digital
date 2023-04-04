<?php

namespace App\View\Components;

use Illuminate\View\Component;

class profilPkk extends Component
{
    public $profil = "";
    public function __construct($profil)
    {
        $this->profil=$profil;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.profil-pkk');
    }
}
