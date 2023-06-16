<?php

namespace App\View\Components\MyComponents;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class changingheadertext extends Component
{
   

    public function __construct(
        public string $path = "Explore",
        public string $title,
        public string $linkName = "Explore"
     )
    {
        $this -> $path = $path;
        $this -> $title = $title;
        $this -> $linkName = $linkName;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.myComponents.changingheadertext');
    }
}
