@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Mostrar lista de falla de  Tags</h1>
@stop

@section('content')

@section('content')
    @if (session('info'))
        <div class="alert alert-success">
            <strong>{{session('info')}}</strong>
        </div>
    @endif

    @livewire('admin.fallas-index')

@stop

@section('css')

@stop

@section('js')

@stop
