@extends('layouts.incos_inicio')

@section('titulo')
    Lista de Postulantes - Carrera
@endsection
@section('content')
<div class="box">
  <div class="box-header with-border">
    <h3 class="box-title">INSCRIPCIÓN DE POSTULANTES</h3>
  </div>

  {{--  <div class="box-body">  --}}
    {{--  <div class="box-header with-border">
      <h3 class="box-title">Informes</h3>
    </div>  --}}
    <form class="form-horizontal" action="{{ route('postulantes.listacarrera', 1) }}" method="GET">
        {{-- ,['carrera'=>$carrera, 'turno'=>$turno] --}}
      <div class="col-sm-6">
        <div class="form-group">
          <label>Carrera:
            <select  class="form-control" name="carrera_id" id="carrera_id">
                <option>SELECCIONE CARRERA</option>
              @foreach ($carreras as $carrera)
                <option value="{{ $carrera->id }}">{{ $carrera->carrera }}</option>
              @endforeach  
            </select>
          </label>
        </div>
      </div>
      <div class="col-sm-6">
        <div class="form-group">
          <label>Turno:
            <select  class="form-control" name="turno_id" id="turno_id">
                <option>SELECCIONE TURNO</option>
              @foreach ($turnos as $turno)
                <option value="{{ $turno->id }}">{{ $turno->turno }}</option>    
              @endforeach
            </select>  
          </label>
        </div>
      </div>
      {{--  <a class="btn btn-info pull-right bg-green" href="{{ route('postulantes.listacarrera') }}">  --}}
          {{-- <i class="fa fa-edit"></i> --}}
          {{-- <i class="fa fa-arrow-up">GENERAR</i> --}}
        {{--  </a>     --}}
      <div class="box-footer">
        <button type="submit" class="btn btn-info pull-right">Inscripcion</button>
      </div>
    </form>
  {{--  </div>  --}}
</div>


@endsection