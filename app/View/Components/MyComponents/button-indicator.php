<?php

namespace App\View\Components\MyComponents;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class ButtonIndicator extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct(
        public string $width = "12px",
        public string $height = "12px",
        public string $color = "inherit",
    )
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.MyComponents.button-indicator');
    }
}
