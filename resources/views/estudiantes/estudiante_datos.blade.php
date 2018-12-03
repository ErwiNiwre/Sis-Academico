@extends('layouts.incos_inicio')

@section('titulo')
    ESTUDIANTE: {{ $estudiantes->nombre." ".$estudiantes->aPaterno." ".$estudiantes->aMaterno }}
@endsection
@section('content')

<div class="box box-default">
    <div class="box-header with-border">
        <h3 class="box-title">ESTUDIANTE</h3>
        <a class="btn btn-file bg-green pull-right" href="{{ route('estudiantes.formulario', $estudiantes) }}">
            <i class="fa fa-print"> Formulario</i>
        </a>
    </div>
    <div class="box-body">
        @include('estudiantes.index')
    </div>
</div>

@endsection