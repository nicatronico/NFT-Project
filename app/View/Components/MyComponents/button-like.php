<?php

namespace App\View\Components\MyComponents;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class ButtonLike extends Component
{
    public $likes;

    public function __construct($likes = 0)
    {
        $this->$likes =$likes;       

    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.MyComponents.button-like');
    }
}
