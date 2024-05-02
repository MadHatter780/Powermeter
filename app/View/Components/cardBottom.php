<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class cardBottom extends Component
{
    /**
     * Create a new component instance.
     */
    public $addition, $title, $lebar, $color;

    public function __construct($addition, $lebar, $title, $color)
    {
        $this->addition = $addition;
        $this->lebar = $lebar;
        $this->title = $title;
        $this->color = $color;
        //
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.card-bottom');
    }
}
