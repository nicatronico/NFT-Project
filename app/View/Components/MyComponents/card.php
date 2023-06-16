<?php

namespace App\View\Components\Mycomponents;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class card extends Component
{
    public $path;
    public $likes;
    public $title;
    public $author;
    public $price;

    public function __construct(
        $path = "https://images.pexels.com/photos/87009/earth-soil-creep-moon-lunar-surface-87009.jpeg?auto=compress&cs=tinysrgb&w=600", 
        $likes = 0,
        $title = "No title specified",
        $author = "Unknown",
        $price = 25
        ){
        $this->$path = $path;
        $this->$likes = $likes;
        $this->$title = $title;
        $this->$author = $author;
        $this->$price = $price;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.mycomponents.card');
    }
}
