<?php

namespace App\View\Components;

use Illuminate\View\Component;

class TrustedBrands extends Component
{
    public $logos;

    /**
     * Create a new component instance.
     *
     * @param array|null $logos
     */
    public function __construct($logos = null)
    {
        $this->logos = $logos ?? [
            "https://webcdn.imarticus.org/adhoc/Frame13.svg",
            "https://webcdn.imarticus.org/adhoc/Frame14.svg",
            "https://webcdn.imarticus.org/adhoc/Frame15.svg",
            "https://webcdn.imarticus.org/iso-fix/Web.webp",
            "https://webcdn.imarticus.org/adhoc/Frame17.webp",
        ];
    }

    public function render()
    {
        return view('components.trusted-brands');
    }
}

