@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Crear Falla</h1>
@stop

@section('content')
<div class="card">
    <div class="card-body">

        {!! Form::open($tag18,['route'=>['admin.fallas1.edit', $tag18], 'autocomplete'=>'off' ,'files'=>true,'method' =>'PUT' ])!!}

        @include('admin.fallas1.partials.form')

        {!! Form::submit('Crear falla',['class'=>'btn btn-primary']) !!}

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
    document.getElementById("foto").addEventListener('change',cambiarImagen);

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
