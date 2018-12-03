@extends('layouts.incos_inicio')

@section('content')
<center>
    <h1>HISTORIAL ACADEMICO</h1>
</center>
<div class="row">
    <div class="col">
        <div class="box box-default">
            <div class="box-header with-border">
                <h3 class="box-title">
                    CARGAR NOTAS
                </h3>
            </div>
            <div class="box-body">
                <form class="form-horizontal" action="{{ route('docentes.cargar_nota') }}" method="POST" enctype="multipart/form-data">
                    {{ csrf_field() }}

                    <div class="box-body">
                            {{-- @include('postulantes._formPos') --}}
                        <input type="file" name="archivo" id="archivo" required>
                    </div>
                    <div class="form-group box-footer">
                        <button type="submit" class="btn btn-block btn-success btn-flat pull-right">Cargar Datos</button>
                    </div>
                </form>
            </div>
        </div>    
    </div>
    
    
</div>

@endsection