<?php

namespace App\Http\Livewire;
use App\Models\Tplanta as ModelsPlanta;

use Livewire\Component;

class Planta extends Component
{
    public $seleccionado = '';
    public $plantas;

    public function mount(){
        $this->plantas = [];
    }

    public function render()
    {
       $this->plantas = ModelsPlanta::all();

       return view('livewire.planta');
    }
}
