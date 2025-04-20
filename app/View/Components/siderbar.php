<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class siderbar extends Component
{

    public $showSiderbar;

    public function __construct($showSiderbar = false)
    {
        $this->showSiderbar = $showSiderbar;
    }

    

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.siderbar');
    }
}
