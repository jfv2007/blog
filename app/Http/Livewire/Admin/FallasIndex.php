<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
Use App\Models\Falla;
use Livewire\WithPagination;


class FallasIndex extends Component
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
        $fallas=Falla::latest('id')
                     ->paginate();

        return view('livewire.admin.fallas-index', compact('fallas'));

    }
}
