<?php

namespace App\View\Components;

use Illuminate\View\Component;

class profilPkk extends Component
{
    public $profilPkk = "";
    public function __construct($profilPkk)
    {
        $this->profilPkk=$profilPkk;
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
