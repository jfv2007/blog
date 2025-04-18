<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreFallaRequest;
use App\Models\Falla;
use App\Models\Sfalla;
use App\Models\Tag18;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;


class FallaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $fallas = Falla::paginate(20);
        return view('admin.fallas.index',compact('fallas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $tag18s = Tag18::pluck('descripcion','id');
        $users = User::pluck('id','id');
        $sfallas = Sfalla::pluck('status_revison','id');

        return view('admin.fallas.create',compact('tag18s', 'users', 'sfallas'));
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

    public function show1(Request $request, $id )
    {
        $tag18 = Tag18::find($id);
       /*   return $tag18; */
         $tagNombre= $tag18->tag;
         $id_tag18s=$tag18->id;
         $tagDescripcion= $tag18->descripcion;
         $user_id=auth()->user()->id;

       /*  $users = User::pluck('email','id'); */
        $sfallas = Sfalla::pluck('status_revison','id');

         return view('admin.fallas.show1', compact('sfallas', 'tagNombre','tagDescripcion','user_id','id_tag18s'));
    }

     public function show($id) //original
    {


    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Falla $falla)
    {
        /* $falla = Falla::find($id); */
        /*  $falla = Falla::all(); */
                    /*  return $falla; */

        $id_tag18 = $falla->id_tag18s;  /* busco el id del tag */
         $tag18Attributos =Tag18::find($id_tag18);

        $id_tag18s=$tag18Attributos->tag;
        $tagNombre=$tag18Attributos->descripcion;

         $sfallas = Sfalla::pluck('status_revison','id');

         /* enseguida llama el control */
              return view('admin.fallas.show', compact('falla','tagNombre','id_tag18s','sfallas' ));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,Falla $falla )
    {       /* return $request; */

        $request->validate([
            'id_tag18s' => 'required',
            'id_usuario' => 'required',
            'id_sfallas' => 'required',
            'descripcion_falla' => 'required',
            'turno' => 'required'
        ]);

        /* $falla = Falla::find($id); */
        $falla->id_tag18s = $request->id_tag18s;
        $falla->id_usuario = $request->id_usuario;
        $falla->id_sfallas = $request->id_sfallas;
        $falla->descripcion_falla = $request->descripcion_falla;
        $falla->turno = $request->turno;
        $falla->save();


             if($request->file('foto_falla')){
                $url = Storage::put('public/imagen', $request->file('foto_falla'));

                if($falla->foto_falla){
                    Storage::delete($falla->foto_falla);

                    $falla->update([
                        'foto_falla'=> $url
                    ]);
                }else{
                    $falla->create([
                        'foto_falla' => $url
                    ]);
                }
            }


            return redirect()->route('admin.fallas.index', $falla )->with('info', 'El Tag se actualizo con exito');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Falla $falla)
    {

        $falla->delete();

        return redirect()->route('admin.fallas.index', $falla)->with('info', 'El falla del Tag se elimino con exito');

    }
}
