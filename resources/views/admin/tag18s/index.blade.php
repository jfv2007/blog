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

    @livewire('admin.tag18s-index')

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
                "ajax": '../ajax/data/array.txt'
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
