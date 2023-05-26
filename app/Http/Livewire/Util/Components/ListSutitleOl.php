<?php

namespace App\Http\Livewire\Util\Components;

use Livewire\Component;

class ListSutitleOl extends Component
{
    public $link = array();
    public $linkActive;

    public function mounte($linkActive, $link = array())
    {
        $this->link = $link;
        $this->linkActive = $linkActive;

    }

    public function render()
    {
        return <<<'blade'
           <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="{{route($this->link['route'])}}">{{$this->link['title']}}</a></li>
                <li class="breadcrumb-item active">{{$this->linkActive }}</li>
            </ol>
        blade;
    }
}
