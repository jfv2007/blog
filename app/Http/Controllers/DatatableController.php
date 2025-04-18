<?php

namespace App\Http\Controllers;

use App\Models\Tag18;
use Illuminate\Http\Request;

class DatatableController extends Controller
{
    public function tag18(){
        $tag18s=Tag18::select('id','tag', 'descripcion')->get();
        return $tag18s;
    }
}
