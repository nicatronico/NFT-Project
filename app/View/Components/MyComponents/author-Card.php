<?php

namespace App\View\Components\MyComponents;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class authorCard extends Component
{
    public $author;
    public $path;
    
    public function __construct($author="Unknown", $path="https://media.istockphoto.com/id/1054899222/es/foto/mujer-an%C3%B3nima-que-cubre-la-cara-con-papel.jpg?s=1024x1024&w=is&k=20&c=Xr2kOvVWnZcBmrbCMpzBhdhdyacTByuBBVAtmTtFW90=")
    {
        $this->$author = $author;
        $this->$path = $path;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.MyComponents.author-card');
    }
}
