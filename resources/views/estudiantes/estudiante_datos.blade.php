@extends('layouts.incos_inicio')

@section('titulo')
    ESTUDIANTE: {{ $estudiantes->nombre." ".$estudiantes->aPaterno." ".$estudiantes->aMaterno }}
@endsection
@section('content')

<div class="box box-default">
    <div class="box-header with-border">
        <h3 class="box-title">ESTUDIANTE</h3>
    </div>
    <div class="box-body">
        @include('estudiantes.index')
        <div class="col-md-12">
            <div class="form-group">
                <a class="btn btn-social-icon bg-green pull-right" href="{{ route('estudiantes.formulario', $estudiantes) }}">
                {{-- <i class="fa fa-edit"></i> --}}
                    <i class="fa fa-registered"></i>
                </a>
            </div>                
        </div>
    </div>
</div>

@endsection