<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class cardPower extends Component
{
    /**
     * Create a new component instance.
     */
    public $c1, $c2, $idCard, $value, $satuan, $title;
    public function __construct($c1, $c2, $idCard, $value, $satuan, $title)
    {
        $this->title = $title;
        $this->idCard = $idCard;
        $this->c1 = $c1;
        $this->c2 = $c2;
        $this->value = $value;
        $this->satuan = $satuan;
        //
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.card-power');
    }
}
