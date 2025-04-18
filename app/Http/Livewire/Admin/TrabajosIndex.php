<?php

namespace App\Http\Livewire\Admin;

use App\Models\Trabajo;
use Livewire\Component;
use Livewire\WithPagination;

class TrabajosIndex extends Component
{
    use WithPagination;

    public $search="";

    protected $paginationTheme ="bootstrap";

    public function updatingSearch()
    {
        $this->resetPage();
    }

    public function render()
    {
        $trabajos=Trabajo::latest('id')
        ->paginate();


        return view('livewire.admin.trabajos-index', compact('trabajos'));
    }
}
