<?php

namespace App\View\Components;

use Illuminate\View\Component;

class LogoSlider extends Component
{
    public $companyLogos;

    public function __construct($companyLogos)
    {
        $this->companyLogos = $companyLogos;
    }

    public function render()
    {
        return view('components.logo-slider');
    }
}
