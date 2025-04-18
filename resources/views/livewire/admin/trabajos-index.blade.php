<div class="card">
    <div class="card-header">
        <a class="btn btn-secondary " href="{{route('admin.trabajos.create')}}">Agregar Trabajo</a>
    </div>

     @if ($trabajos->count())

    <div class="card-body" >
        <table class="table table-striped" id="show_all_trabajos">
            <thead>
                <tr class="bg-gray-800 text-black">
                    <th style="display: none;">ID</th>
                    <th class="border px-4 py-2">TAG</th>
                    <th class="border px-4 py-2">Desc_Tag</th>
                    <th class="border px-4 py-2">Status_Tag</th>
                    <th class="border px-4 py-2">descripcion Falla</th>
                    <th class="border px-4 py-2">descripcion TRABAJO</th>
                    <th class="border px-4 py-2">Status TRABAJO</th>
                    <th class="border px-4 py-2" >IMAGEN</th>
                    <th class="border px-4 py-2">ACCIONES</th>
                    {{-- <th colspan="2"></th> --}}
                </tr>
            </thead>

            <tbody>



                @foreach ($trabajos as $trabajo)
                <tr>
                    <td style="display: none;">{{$trabajo->id}}</td>
                    <td class="border px-4 py-2">{{$trabajo->fallatrabajos->tagfallas->tag}}</td>
                    <td class="border px-4 py-2">{{$trabajo->fallatrabajos->tagfallas->descripcion}}</td>
                    <td class="border px-4 py-2">{{$trabajo->fallatrabajos->tagfallas->tag18stags->desc_status}}</td>
                    <td class="border px-4 py-2">{{$trabajo->fallatrabajos->descripcion_falla}}</td>
                    <td class="border px-4 py-2">{{$trabajo->des_trabajo}}</td>
                    <td class="border px-4 py-2">{{$trabajo->statustraba->status_trabajos}}</td>
                    {{-- <td class="border px-4 py-2">{{$falla->descripcion_falla}}</td>
                    <td class="border px-4 py-2">{{$falla->fllastatus->status_revison}}</td>
                    <td class="border px-4 py-2">{{$falla->turno}}</td> --}}

                    <td class="border px-4 py-2" >
                        <img src="{{ Storage::url($trabajo->foto_trabajo) }}" width="10%">
                    </td>

                    <td>
                         <form action="{{ route('admin.trabajos.destroy', $trabajo) }}" method="POST">
                            <a class="btn btn-primary btn-sm" href="{{route('admin.etrabajos.edit',$trabajo)}}">Editar</a>
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger btn-sm">Eliminar</button>
                       </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>

        <script>
            $(document).ready(function() {
                $('#show_all_trabajos').DataTable({
                    "lengthMenu": [[5,10, 50, -1], [5, 10, 50, "All"]]
                });
            } );
        </script>

    </div>

    <div class="card-footer">
        <!-- hacer la paginacion -->
        {!! $trabajos->links() !!}
    </div>
   @else
        <div class="card-body">
            <strong>No hay ningún resgistro</strong>
        </div>
    @endif
</div>
