<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class chartBarCard extends Component
{
    /**
     * Create a new component instance.
     */
    public $idChart;
    public $title;

    public function __construct($idChart, $title)
    {
        $this->idChart = $idChart;
        $this->title = $title;
        //
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.chart-bar-card');
    }
}
