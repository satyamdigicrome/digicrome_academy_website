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
        asset('assets/images/reviwe/Ambition-Box-Review.webp'),
        asset('assets/images/reviwe/Facebook-Review.webp'),
        asset('assets/images/reviwe/Glassdoor-Review.webp'),
        asset('assets/images/reviwe/Google-Review.webp'),
        asset('assets/images/reviwe/Trustpilot-Review.webp'),
    ];
}


    public function render()
    {
        return view('components.trusted-brands');
    }
}

