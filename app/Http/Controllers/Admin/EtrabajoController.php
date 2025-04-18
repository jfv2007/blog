<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Falla;
use App\Models\Strabajo;
use App\Models\Tag18;
use App\Models\Trabajo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class EtrabajoController extends Controller
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
    public function store(Request $request)
    {
        //
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
    public function edit(Trabajo $trabajo, $id)
    {
           $trabajo = Trabajo::find($id);
            /* $trabajo = Trabajo::all();*/
              /*  return $trabajo;
 */

           $fallaDatos =Falla::find($trabajo->id_falla);
       /*  $tag18Attributos =Tag18::find($id_tag18);*/
            $tagDatos =Tag18::find($fallaDatos->id_tag18s);

        /* return $tagDatos; */
        $tagnombre=$tagDatos->tag;
        $tagdescripcion=$tagDatos->descripcion;
        $descripcion_falla=$fallaDatos->descripcion_falla;


         $strabajo = Strabajo::pluck('status_trabajos','id');

         /* enseguida llama el control */
              return view('admin.etrabajos.show', compact('trabajo','tagnombre','tagdescripcion','descripcion_falla','strabajo'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,Trabajo $trabajo, $id)
    {           /*  return $request;  */

       $request->validate([
            'id_falla' => 'required',
            'id_user' => 'required',
            'id_strabajos' => 'required',
            'des_trabajo' => 'required'
        ]);

        $trabajo = Trabajo::find($id);
        $trabajo->id_falla = $request->id_falla;
        $trabajo->id_user = $request->id_user;
        $trabajo->id_strabajos = $request->id_strabajos;
        $trabajo->des_trabajo = $request->des_trabajo;
        $trabajo->update();


             if($request->file('foto_trabajo')){
                $url = Storage::put('public/imagen', $request->file('foto_trabajo'));

                if($trabajo->foto_trabajo){
                    Storage::delete($trabajo->foto_trabajo);

                    $trabajo->update([
                        'foto_trabajo'=> $url
                    ]);
                }else{
                    $trabajo->create([
                        'foto_trabajo' => $url
                    ]);
                }
            }

            return redirect()->route('admin.etrabajos.index', $trabajo )->with('info', 'El Trabajo se actualizo con exito');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Trabajo $trabajo)
    {
        //
    }
}
