<?php

namespace App\Livewire;

use Livewire\Component;

class ColorLegend extends Component
{
    public $colorLegendSwatches = [
        '#205375',
        '#fb4b4b',
        '#ecd456',
    ];

    public function render()
    {
        return view('livewire.color-legend');
    }

}
