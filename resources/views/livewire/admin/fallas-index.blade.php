<div class="card">
    <div class="card-header">
        <a class="btn btn-secondary " href="{{route('admin.fallas.create')}}">Agregar Falla</a>
    </div>

     @if ($fallas->count())

    <div class="card-body" >
        <table class="table table-striped" id="show_all_fallas">
            <thead>
                <tr class="bg-gray-800 text-black">
                    <th style="display: none;">ID</th>
                    <th class="border px-4 py-2">TAG    </th>
                    <th class="border px-4 py-2">Desc_Falla</th>
                    <th class="border px-4 py-2">Status</th>
                    <th class="border px-4 py-2">Turno</th>
                    <th class="border px-4 py-2" >IMAGEN</th>
                    <th class="border px-4 py-2">ACCIONES</th>
                    {{-- <th colspan="2"></th> --}}
                </tr>
            </thead>

            <tbody>
                @foreach ($fallas as $falla)
                <tr>
                    <td style="display: none;">{{$falla->tagfallas->tag}}</td>
                    <td class="border px-4 py-2">{{$falla->tagfallas->tag}}</td>
                    <td class="border px-4 py-2">{{$falla->descripcion_falla}}</td>
                    <td class="border px-4 py-2">{{$falla->fllastatus->status_revison}}</td>
                    <td class="border px-4 py-2">{{$falla->turno}}</td>

                    <td class="border px-4 py-2" >
                        <img src="{{ Storage::url($falla->foto_falla) }}" width="10%">
                    </td>


                    <td>
                         <form action="{{ route('admin.fallas.destroy', $falla) }}" method="POST">
                            <a class="btn btn-primary btn-sm" href="{{route('admin.fallas.edit',$falla)}}">Editar</a>
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger btn-sm">Eliminar</button>
                        <a class="btn btn-primary btn-sm" href="{{route('admin.trabajos.edit',$falla)}}">Crear Trabajo</a>
                       </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>

        <script>
            $(document).ready(function() {
                $('#show_all_fallas').DataTable({
                    "lengthMenu": [[5,10, 50, -1], [5, 10, 50, "All"]]
                });
            } );
        </script>

    </div>

    <div class="card-footer">
        <!-- hacer la paginacion -->
        {!! $fallas->links() !!}
    </div>
   @else
        <div class="card-body">
            <strong>No hay ningún resgistro</strong>
        </div>
    @endif
</div>
