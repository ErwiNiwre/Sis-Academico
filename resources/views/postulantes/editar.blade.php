<form class="form-horizontal" action="{{ route('postulantes.update', $postulantes) }}" method="POST" role="form">
    {{ method_field('PATCH') }}
    {{ csrf_field() }}
    <div class="box box-default">
        <div class="box-header with-border">
            <h3 class="box-title">POSTULANTE</h3>
        </div>
        <div class="box-body">
            @include('postulantes._formPos')
            <div class="col-md-12">
                <div class="form-group box-footer">
                    <button type="submit" class="btn btn-block btn-success btn-flat pull-right">Guardar</button>
                </div>                
            </div>
        </div>
    </div>
</form>
{{-- @extends('layouts.incos_inicio')

@section('titulo')
    POSTULANTE: {{ $postulantes->nombre." ".$postulantes->aPaterno." ".$postulantes->aMaterno }}
@endsection
@section('content')

<section class="content">
    <div class="row">
        <div class="box box-danger">
            <div class="box-header with-border">
                    <h3 class="box-title">Datos</h3>
            </div>    
            <form class="form-horizontal" action="{{ route('postulantes.update', $postulantes) }}" method="POST" role="form">
                {{ method_field('PATCH') }}
                {{ csrf_field() }}
                

                @include('postulantes._formPos')
                <div class="box-footer">
                    <button type="submit" class="btn btn-info pull-right">Guardar</button>
                </div>
            </form>
        </div>
    </div>
</section>

@endsection --}}
    