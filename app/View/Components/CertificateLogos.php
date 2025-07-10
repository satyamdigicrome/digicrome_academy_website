<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class CertificateLogos extends Component
{
    /**
     * Create a new component instance.
     */
    public $logos;

    public function __construct($logos)
    {
        $this->logos = $logos;
    }

    public function render()
    {
        return view('components.certificate-logos');
    }
}
