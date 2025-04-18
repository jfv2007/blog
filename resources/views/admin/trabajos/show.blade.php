@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Crear show Falla</h1>
@stop

@section('content')
<div class="card">
    <div class="card-body">

       {!! Form::model($falla, ['route'=>['admin.trabajos.update', $falla],'autocomplete'=>'off', 'files'=>true, 'method' =>'PUT']) !!}

        @include('admin.trabajos.partials.form')

        {!! form::submit('Actualizar Trabajos', ['class'=>'btn btn-primary']) !!}

    {!! Form::close() !!}
    </div>
</div>
@stop

@section('css')
<style>
    .image-wrapper img{
        position: relative;
        padding-bottom: 50.25%;

    }
    .image-wrappe img{
        position: absolute;
        object-fit: cover;
        width: 50%;
        height:50%;
    }
</style>
@stop

@section('js')
<script>
    //cambiar imagen
    document.getElementById("foto_falla").addEventListener('change',cambiarImagen);

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
