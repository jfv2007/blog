<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreFallaRequest;
use App\Models\Falla;
use App\Models\Sfalla;
use App\Models\Tag18;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class Falla1Controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreFallaRequest $request)
    {
              /*  return $request; */
         /* return $request->all(); */
       /* $id_tag18s = $request->turno;

        return $id_tag18s; */

        $file2= Storage::put('public/imagen', $request->file('foto_falla'));
        /* $file->storeAs('/public/imagen', $fileName); */
        /* return $file2; */

           $request->validate([
            'id_tag18s' => 'required',
            'id_usuario' => 'required',
            'id_sfallas' => 'required',
            'descripcion_falla' => 'required',
            'turno' => 'required',
            'foto_falla' => 'required'
        ]);



          $empData = ['id_tag18s' => $request->id_tag18s,
        'id_usuario' => $request->id_usuario,
        'id_sfallas' => $request->id_sfallas,
        'descripcion_falla' => $request->descripcion_falla,
        'turno' => $request->turno,
        'foto_falla' => $file2];

         $falla=Falla::create($empData);

		 return redirect()->route('admin.fallas.index',compact('falla'))->with('info', 'El Falla se creo exito');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request, $id )
    {
        $tag18 = Tag18::find($id);
       /*   return $tag18; */
         $tagNombre= $tag18->tag;
         $id_tag18s=$tag18->id;
         $tagDescripcion= $tag18->descripcion;
         $user_id=auth()->user()->id;

       /*  $users = User::pluck('email','id'); */
        $sfallas = Sfalla::pluck('status_revison','id');

         return view('admin.fallas1.create', compact('sfallas', 'tagNombre','tagDescripcion','user_id','id_tag18s'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
