<?php

namespace App\View\Components\MyComponents;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class PictureInfo extends Component
{

    public function __construct(
        public string $authorPicture,
        public string $topText,
        public string $bottomText,
        public string $size,
        )
    {
        $this -> $authorPicture = $authorPicture;
        $this -> $topText = $topText;
        $this -> $bottomText = $bottomText;
        $this -> $size = $size;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.MyComponents.picture-info');
    }
}
