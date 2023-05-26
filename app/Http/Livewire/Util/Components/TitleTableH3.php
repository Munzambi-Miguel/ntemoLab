<?php

namespace App\Http\Livewire\Util\Components;

use Livewire\Component;

class TitleTableH3 extends Component
{
    public $title;
    public function mount(string $title){
        $this->title = $title;
    }

    public function render()
    {
        return <<<'blade'
            <h3 class="card-title font-weight-bold">{{$this->title}}</h3>
        blade;
    }
}
