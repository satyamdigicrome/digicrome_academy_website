<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;
use App\Models\Mentor;

class MentorPopup extends Component
{
    /**
     * Create a new component instance.
     */
    public $mentors;

    public function __construct()
    {
        // Automatically load mentors from DB
        $this->mentors = Mentor::all();
    }

    public function render()
    {
        return view('components.mentor-popup');
    }
}
