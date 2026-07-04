<?php

namespace App\View\Components\ui;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Siderbar extends Component
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
        return view('components.ui.siderbar');
    }
}
