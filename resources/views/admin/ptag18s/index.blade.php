@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Mostrar lista de  Tags</h1>
@stop

@section('content')

@section('content')
    @if (session('info'))
        <div class="alert alert-success">
            <strong>{{session('info')}}</strong>
        </div>
    @endif

    {{-- @livewire('admin.tag18s-index') --}}
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
                        <th class="border px-4 py-2">PTAG    </th>
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
                        <td class="border px-4 py-2">{{$tag18->tag18stags->desc_status}}</td>
                        <td class="border px-4 py-2" >
                            <!--Se crea en la carpeta public la imagen-->
                            {{-- {{ Storage::url($post->image->url) }} --}}
                            {{-- <img src="/imagen/{{$tag18->foto}}" width="10%"> --}}
                            <img src="{{ Storage::url($tag18->foto) }}" width="10%">
                        </td>

                        {{-- <td  width="10px">
                            <a class="btn btn-primary btn-sm" href="{{route('admin.tag18s.edit',$tag18)}}">Editar</a>
                        </td> --}}
                        <td>
                             <form action="{{ route('admin.tag18s.destroy', $tag18) }}" method="POST">
                                <a class="btn btn-primary btn-sm" href="{{route('admin.tag18s.edit',$tag18)}}">Editar</a>

                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm">Eliminar</button>
                                <a class="btn btn-primary btn-sm" href="{{route('admin.fallas1.edit', $tag18)}}">Crear falla</a>
                            </form>
                        </td>
    {{--                     <td>
                            <a class="btn btn-primary btn-sm" href="{{route('admin.fallas1.edit', $tag18)}}">Crear falla</a>
                        </td>
     --}}                </tr>
                    @endforeach
                </tbody>
            </table>


        </div>

     {{--   <div class="card-footer">
            <!-- hacer la paginacion -->
            {!! $tag18s->links() !!}
        </div> --}}

       {{--  @else
            <div class="card-body">
                <strong>No hay ningún resgistro</strong>
            </div>
        @endif
     --}}

    </div>

@stop

@section('css')
    {{-- <link rel="stylesheet" href="https://cdn.datatables.net/v/dt/dt-1.11.5/datatables.min.css"/> --}}

    <link rel="stylesheet" href="https://cdn.datatables.net/1.11.3/css/dataTables.bootstrap5.min.css">


@stop

@section('js')

{{--     <script type="text/javascript" src="https://cdn.datatables.net/v/dt/dt-1.11.5/datatables.min.js"></script> --}}

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.22/js/dataTables.bootstrap5.min.js"></script>

    <script>
        $(document).ready(function() {
            $('#show_all_tag18s').DataTable({
                 "lengthMenu": [[5,10, 50, -1], [5, 10, 50, "All"]],
                 "language":{
                 "search":      "Buscar",
                 "lenghtMenu":  "Mostrar _MENU_ registro por pagina",
                 "info":        "Mostrando pagina _PAGE_ de _PAGES_"

                }
            });
        } );
    </script>

@stop
