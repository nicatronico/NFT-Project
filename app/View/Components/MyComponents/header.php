<?php

namespace App\View\Components\MyComponents;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class header extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct(public string $color = 'gray-500')
    {
        $this -> $color = $color;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.MyComponents.header');
    }
}
