<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class navbarContent extends Component
{
    /**
     * Create a new component instance.
     */

    public $route,$name;
    public function __construct($route,$name)
    {
        $this->route = $route;
        $this->name = $name;
        //
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.navbar-content');
    }
}
