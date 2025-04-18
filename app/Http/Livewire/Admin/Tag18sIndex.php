<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use App\Models\Tag18;
use Livewire\WithPagination;


class Tag18sIndex extends Component
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
      /*     $tag18s=Tag18::latest('id');
                    /*  ->paginate(); */
            $tag18s=Tag18::all();

        return view('livewire.admin.tag18s-index', compact('tag18s'));
    }
}
