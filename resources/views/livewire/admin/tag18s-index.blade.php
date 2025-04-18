<div class="card">
    <div class="card-header">
        <a class="btn btn-secondary " href="{{route('admin.tag18s.create')}}">Agregar Tags</a>
    </div>

   {{--  @if ($tag18s->count()) --}}

    <div class="card-body" >
        <table class="table table-striped" id="show_all_tag18s">
            <thead>
                <tr class="bg-gray-800 text-black">
                    <th style="display: none;">ID</th>
                    <th class="border px-4 py-2">TAG    </th>
                    <th class="border px-4 py-2">Descripcion</th>
                    <th class="border px-4 py-2">Operacion</th>
                    <th class="border px-4 py-2">Ubicacion</th>
                    <th class="border px-4 py-2">status</th>
                    <th class="border px-4 py-2" >IMAGEN</th>
                    <th class="border px-4 py-3">ACCIONES</th>
                    {{-- <th class="border px-4 py-2" colspan="2">ACCIONES</th> --}}
                </tr>
            </thead>
           <tbody>
                @foreach ($tag18s as $tag18)
                <tr>
                    <td style="display: none;">{{$tag18->id}}</td>
                    <td class="border px-4 py-2">{{$tag18->tag}}</td>
                    <td class="border px-4 py-2">{{$tag18->descripcion}}</td>
                    <td class="border px-4 py-2">{{$tag18->operacion}}</td>
                    <td class="border px-4 py-2">{{$tag18->ubicacion}}</td>
                    <td class="border px-4 py-2">tag18Centro</td>
                    <td class="border px-4 py-2" >
                        <img src="{{ Storage::url($tag18->foto) }}" width="10%">
                    </td>


                    <td>
                         <form action="{{ route('admin.tag18s.destroy', $tag18) }}" method="POST">
                            <a class="btn btn-primary btn-sm" href="{{route('admin.tag18s.edit',$tag18)}}">Editar</a>

                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm">Eliminar</button>
                            <a class="btn btn-primary btn-sm" href="{{route('admin.fallas1.edit', $tag18)}}">Crear falla</a>
                        </form>
                    </td>
               </tr>
                @endforeach

            </tbody>
        </table>


    </div>

  {{-- <div class="card-footer">
        <!-- hacer la paginacion -->
        {!! $tag18s->links() !!}
    </div>

   {{--  @else
        <div class="card-body">
            <strong>No hay ningún resgistro</strong>
        </div>
    @endif
 --}}

</div>
