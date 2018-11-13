@extends('layouts.incos_inicio')

@section('titulo')
    POSTULANTE: {{ $postulantes->nombre." ".$postulantes->aPaterno." ".$postulantes->aMaterno }}
@endsection
@section('content')

<div class="box box-default">
    <div class="box-header with-border">
        <h3 class="box-title">NOTA DEL POSTULANTE: {{ $postulantes->nombre." ".$postulantes->aPaterno." ".$postulantes->aMaterno }}</h3>
    </div>
    <div class="box-body">
        <form class="form-horizontal" action="{{ route('postulantes.nota', $postulantes) }}" method="POST">
            {{ method_field('PATCH') }}    
            {{ csrf_field() }}
            
            <div class="row">
                @if (isset($postulantes))
                <div class="JustifyCenter"></div>
                <div class="col-md-6">
                    <div class="box-header with-border">
                        <h3 class="box-title">Notas</h3>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group col-md-12">
                            <label>Cedula de Identidad: </label><br>
                            <input type="text" class="form-control" placeholder="Colocar Nota" value="{{ $postulantes->ci.' '.$departamentos->abreviatura }}" disabled>
                            {{-- {{ $postulantes->ci.' '.$departamentos->abreviatura }} --}}
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group col-md-12">
                            <label>Nota</label>
                            @if ($postulantes->nota!=null)
                                <input type="text" class="form-control" id="nota" name="nota" placeholder="Colocar Nota">    
                            @else
                                <input type="text" class="form-control" id="nota" name="nota" value="{{ $postulantes->nota }}">
                            @endif
                            
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group">
                            <button type="submit" class="btn btn-block btn-success btn-flat pull-right">Guardar</button>
                        </div>                
                    </div>
                </div>
                @endif
            </div>
        </form>        
    </div>
</div>

@endsection
