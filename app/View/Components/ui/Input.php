<?php

namespace App\View\Components\ui;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Input extends Component
{

    public string $name;
    public string $placeholder;
    public string $value;
    public string $type;


    public function __construct(
        string $name,
        string $placeholder = '',
        string $value = '',
        string $type = 'text'
    ) {

        $this->name = $name;
        $this->placeholder = $placeholder;
        $this->value = $value;
        $this->type = $type;

    }


    public function render(): View|Closure|string
    {
        return view('components.ui.input');
    }

}