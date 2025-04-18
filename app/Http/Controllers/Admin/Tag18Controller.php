<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Categoria;
use App\Models\Centro;
use App\Models\Planta;
use App\Models\Seccion;
use App\Models\Stag;
use App\Models\Tag18;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

use App\Http\Requests\StoreTag18Request;



class Tag18Controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         $tag18s = Tag18::all();
         $tag18s = Tag18::paginate(20);

        /* $tag18s=Tag18::all(); */
        return view('admin.tag18s.index',compact('tag18s'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $centros = Centro::pluck('nombre_centro','id');
        $plantas = Planta::pluck('planta_id','id');
        $seccions = Seccion::pluck('descripcion_s','id');
        $categorias = Categoria::pluck('descripcion_c','id');
        $stags = Stag::pluck('desc_status','id');

        return view('admin.tag18s.create',compact('centros', 'plantas', 'seccions', 'categorias', 'stags'));
        /* return view('admin.posts.create', compact('categories','tags')); */
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    public function store(StoreTag18Request $request)
    {
        /* return " las validaciones pasaron con exito"; */
        /*   return $request;   */
       /*  return $request->all(); */

       /*  $Tag18 = Tag18::create($request->all());

        if($request->file('foto')){
           $foto = Storage::put('public/imagen', $request->file('foto'));

           $Tag18->foto()->create([
               'foto' =>$foto
           ]);
       }
 */




        /////////////////////
        /* $file = $request->file('foto');
		$fileName = time() . '.' . $file->getClientOriginalExtension(); */
		 $file2= Storage::put('public/imagen', $request->file('foto'));
        /* $file->storeAs('/public/imagen', $fileName); */


           $request->validate([
            'tag' => 'required',
            'descripcion' => 'required',
            'operacion' => 'required',
            'ubicacion' => 'required',
            'id_cen' => 'required',
            'id_planta' => 'required',
            'id_seccion' => 'required',
            'id_categoria' => 'required',
            'id_status' => 'required',
             'foto' => 'required'
        ]);


         $empData = ['tag' => $request->tag,
        'descripcion' => $request->descripcion,
        'operacion' => $request->operacion,
        'ubicacion' => $request->ubicacion,
        'id_cen' => $request->id_cen,
        'id_planta' => $request->id_planta,
        'id_seccion' => $request->id_seccion,
        'id_categoria' => $request->id_categoria,
        'id_status' => $request->id_status,
        'foto' => $file2];

        $tag18=Tag18::create($empData);


		 return redirect()->route('admin.tag18s.edit',compact('tag18'))->with('info', 'El post se actualizo con exito');
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
    public function edit(Tag18 $tag18)
    {
        /* return $tag18; */
        /* $this->authorize('author', $post);

        $categories = Category::pluck('name','id'); */
        $centros = Centro::pluck('nombre_centro','id');
        $plantas = Planta::pluck('planta_id','id');
        $seccions = Seccion::pluck('descripcion_s','id');
        $categorias = Categoria::pluck('descripcion_c','id');
        $stags = Stag::pluck('desc_status','id');


         return view('admin.tag18s.edit', compact('tag18','centros','plantas','seccions', 'categorias', 'stags'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id )
    {
         /*  return $request;  */

        $request->validate([
            'tag' => 'required',
            'descripcion' => 'required',
            'operacion' => 'required',
            'ubicacion' => 'required',
            'id_cen' => 'required',
            'id_planta' => 'required',
            'id_seccion' => 'required',
            'id_categoria' => 'required',
            'id_status' => 'required'
        ]);

        $tag18 = Tag18::find($id);
        $tag18->tag = $request->tag;
        $tag18->descripcion = $request->descripcion;
        $tag18->operacion = $request->operacion;
        $tag18->ubicacion = $request->ubicacion;
        $tag18->id_cen = $request->id_cen;
        $tag18->id_planta =$request->id_planta;
        $tag18->id_seccion = $request->id_seccion;
        $tag18->id_categoria = $request->id_categoria;
        $tag18->id_status = $request->id_status;
        $tag18->save();

         /* dd($request->file('foto'));  */

            if($request->file('foto')){
                $url = Storage::put('public/imagen', $request->file('foto'));
                /* dd($url); */
                if($tag18->foto){
                    Storage::delete($tag18->foto);

                    $tag18->update([
                        'foto'=> $url
                    ]);
                }else{
                    $tag18->create([
                        'foto' => $url
                    ]);
                }
            }


            return redirect()->route('admin.tag18s.edit', $tag18 )->with('info', 'El Tag se actualizo con exito');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Tag18 $tag18)
    {

        Storage::delete($tag18->foto);
        $tag18->delete();


        return redirect()->route('admin.tag18s.index', $tag18)->with('info', 'El Tag se elimino con exito');
    }
}
