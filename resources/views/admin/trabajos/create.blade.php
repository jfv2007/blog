@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Crear el trabajo del tag</h1>
@stop

@section('content')
 <div class="card">
    <div class="card-body">


        {!! Form::open(['route'=>'admin.trabajos.store', 'autocomplete'=>'off' ,'files'=>true ])!!}

        @include('admin.trabajos.partials.form')

         {!! Form::submit('Crear trabajos de Tag',['class'=>'btn btn-primary']) !!}

        {!! Form::close()!!}
    </div>
</div>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
<script>
    //cambiar imagen
    document.getElementById("foto_trabajo").addEventListener('change',cambiarImagen);

    function cambiarImagen(event){
        var file = event.target.files[0];

        var reader = new FileReader();
        reader.onload =(event)=>{
            document.getElementById("picture").setAttribute('src', event.target.result);

        };

        reader.readAsDataURL(file);
    }

     </script>
@stop
