@extends('layouts.incos_inicio')

@section('titulo')
    POSTULANTE: {{ $postulantes->nombre." ".$postulantes->aPaterno." ".$postulantes->aMaterno }}
@endsection
@section('content')

<div class="box box-default">
    <div class="box-header with-border">
        <h3 class="box-title">POSTULANTE</h3>
    </div>
    <div class="box-body">
        @include('postulantes.index')
        <div class="col-md-12">
            <div class="form-group">
                    <button type="submit" class="btn btn-block btn-success btn-flat pull-right">Guardar</button>
            </div>                
        </div>
    </div>
</div>

@endsection