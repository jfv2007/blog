<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreTrabajoRequest;
use App\Models\Falla;
use App\Models\Sfalla;
use App\Models\Strabajo;
use App\Models\Tag18;
use App\Models\Trabajo;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class TrabajoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $trabajos = Trabajo::paginate(20);
        return view('admin.trabajos.index',compact('trabajos'));
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
    public function store(StoreTrabajoRequest $request)
    {
                 /*  return $request; */

                 /* return $request->all(); */
       /* $id_tag18s = $request->turno;

        return $id_tag18s; */

        $file2= Storage::put('public/imagen', $request->file('foto_trabajo'));
        /* $file->storeAs('/public/imagen', $fileName); */
        /* return $file2; */

           $request->validate([
            'id_falla' => 'required',
            'id_user' => 'required',
            'id_strabajos' => 'required',
            'des_trabajo' => 'required',
            'foto_trabajo' => 'required'
        ]);



          $trabaData = ['id_falla' => $request->id_falla,
        'id_user' => $request->id_user,
        'id_strabajos' => $request->id_strabajos,
        'des_trabajo' => $request->des_trabajo,
        'foto_trabajo' => $file2];

        /* return $trabaData; */

         $trabajo=Trabajo::create($trabaData);

         /*pendiente póner la vista*/
		 return redirect()->route('admin.trabajos.edit',compact('trabajo'))->with('info', 'El trabajo se creo exito');

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

    /* public function edit(Falla $falla) */
    public function edit(Request $request, $id)
    {
         $falla = Falla::find($id);
      /*      return $falla; */



         $id_falla=$falla->id;
        $id_tag= $falla->id_tag18s;
        $dato_tag=Tag18::find($id_tag);
         /* return $dato_tag;  */
        $tag =$dato_tag->tag;
        $tagDescripcion=$dato_tag->descripcion;

        /*  $tagDescripcion= $tag18->descripcion;*/

         $id_user=auth()->user()->id;

       /*  $users = User::pluck('email','id');*/
        $sfallas = Sfalla::pluck('status_revison','id');
        $strabajo = Strabajo::pluck('status_trabajos','id');

         return view('admin.trabajos.create', compact('falla','tag','tagDescripcion','sfallas','id_user','strabajo'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Trabajo $trabajo)
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
