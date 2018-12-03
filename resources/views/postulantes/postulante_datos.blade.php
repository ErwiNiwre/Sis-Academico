@extends('layouts.incos_inicio')

@section('titulo')
    POSTULANTE: {{ $postulantes->nombre." ".$postulantes->aPaterno." ".$postulantes->aMaterno }}
@endsection
@section('content')

<div class="box box-default">
    <div class="box-header with-border">
        <h3 class="box-title">POSTULANTE</h3>
        <a class="btn btn-file bg-green pull-right" href="{{ route('postulantes.formulario', $postulantes) }}">
            <i class="fa fa-print"> Formulario</i>
        </a>
    </div>
    <div class="box-body">
        @include('postulantes.index')
    </div>
</div>

@endsection