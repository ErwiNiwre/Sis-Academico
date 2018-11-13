@extends('layouts.incos_inicio')

@section('titulo')
    Lista de Postulantes - Carrera
@endsection
@section('content')

<div class="box">
  <div class="box-header with-border">
    <h3 class="box-title">Postulantes Inscritos</h3>
  </div>
  <!-- /.box-header -->
  <div class="box-body">
    <div id="example1_wrapper" class="dataTables_wrapper form-inline dt-bootstrap">
      <div class="row">
        <div class="col-sm-6">
          <div class="form-group" id="example1_length">
            <label>Carreras: </label><br>
            CONTADURÍA GENERAL:         {{ $cont }}<br>
            SECRETARIADO EJECUTIVO:     {{ $secr }}<br>
            SISTEMAS INFORMÁTICOS:      {{ $sist }}<br>
            ADMINISTRACIÓN DE EMPRESAS: {{ $admi }}<br>
            COMERCIO EXTERIOR:          {{ $come }}<br>
            LINGÜÍSTICA:                {{ $ling }}<br>
          </div>
        </div>
        <div class="col-sm-6">
          {!! Form::open(['route' => 'postulantes.index', 'method'=>'GET', 'class'=>'pull-right']) !!}
            <div class="input-group">
              {!! Form::text('ci', null, ['class' => 'form-control', 'placeholder' => 'Buscar C.I.', 'aria-describedby' => 'search']) !!}
              <span class="input-group-addon" id="search">
                <span class="glyphicon glyphicon-search" aria-hidden="true"></span>
              </span>
            </div>
          {!! Form::close() !!}
          <br><br>
          <div class="dataTables_filter pull-right">
            {{-- <a class="btn btn-social-icon"> --}}
            {{-- <a class="btn btn-default btn-sm" href="{{ url('Docente/registro') }}"> --}}
            <a class="btn btn-social-icon" href="{{ route('postulantes.create') }}">
              <i class="fa fa-plus-square-o"></i>
            </a>
          </div>
        </div>
       
      </div>
      @include('flash::message')
      <div class="row">
        <div class="col-sm-12">
          <table class="table table-striped table-bordered table-hover display" width="100%" style="font-size: 10px">
          {{-- <table id="example1" class="table table-bordered table-striped dataTable table-responsive" role="grid" aria-describedby="example1_info"> --}}
            <thead>
              <tr class="text-center" role="row">
                <th style="width: 10px;">N°</th>
                <th style="width: 25px;">C.I.</th>
                <th style="width: 80px;">NOMBRES</th>
                <th style="width: 80px;">PATERNO</th>
                <th style="width: 80px;">MATERNO</th>
                <th style="width: 80px;">CARRERA</th>
                <th style="width: 80px;">TURNO</th>
                <th style="width: 80px;">NOTA</th>
                <th style="width: 150px;">OBSERVACIONES</th>
              </tr>
            </thead>
            <tbody>
              @if (isset($postulantes))
                @foreach($postulantes as $postulante)
                <tr role="row" class="odd">
                  <td>{{ $i =$i+1 }}</td>
                  <td>{{ $postulante->ci }}</td>
                  <td>{{ $postulante->nombre }}</td>
                  <td>{{ $postulante->aPaterno }}</td>
                  <td>{{ $postulante->aMaterno }}</td>
                  <td>
                    {{--  {{ $postulante->carreras->carrera }}  --}}
                    @foreach ($carreras as $carrera)
                      @if($postulante->carrera_id == $carrera->id)
                        {{ $carrera->carrera }}
                      @endif  
                    @endforeach
                  </td>
                  <td>
                    {{--  {{ $postulante->turnos->turno }}  --}}
                    @foreach ($turnos as $turno)
                      @if($postulante->turno_id == $turno->id)
                        {{ $turno->turno }}
                      @endif  
                    @endforeach
                  </td>

                  <td>
                    @if ($postulante->nota==null)
                        <label color="red">Aun no dio la Prueba</label>
                    @else
                      {{ $postulante->nota }}    
                    @endif
                  </td>
                      
                  <td class="text-center">
                    {{-- <a class="btn btn-social-icon" href="Docentes/{{ $docente['id'] }}/editar"> --}}
                    <a class="btn btn-social-icon" href="{{ route('postulantes.show', $postulante) }}">
                      {{-- <i class="fa fa-edit"></i> --}}
                      <i class="fa fa-file-text"></i>
                    </a>
                    <a class="btn btn-social-icon" href="{{ route('postulantes.datosNota', $postulante) }}">
                      {{-- <i class="fa fa-edit"></i> --}}
                      <i class="fa fa-arrow-up"></i>
                    </a>
                  </td>
                </tr>
                @endforeach 
              @else
                <tr role="row" class="odd">
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>    
                  <td></td>
                </tr>
              @endif  
            </tbody>
            <tfoot>
              <tr class="text-center">
                <th>N°</th>
                <th>C.I.</th>
                <th>NOMBRES</th>
                <th>PATERNO</th>
                <th>MATERNO</th>
                <th>CARRERA</th>
                <th>TURNO</th>
                <th>NOTA</th>
                <th>OBSERVACIONES</th>
              </tr>
            </tfoot>
          </table>
        </div>
      </div>
      <div class="row text-center">
        {{ $postulantes->render() }}
      </div>
    </div>
  </div>
  <!-- /.box-body -->
  <div class="box-body">
    <div class="box-header with-border">
      <h3 class="box-title">Informes</h3>
    </div>
    <form class="form-horizontal" action="" method="POST">
      <div class="col-sm-6">
        <div class="form-group" id="example1_length">
        {{-- {{ Form::select('carrera', $carrera, null, ['class' => 'form-control select2','placeholder' => 'Select a client...']) }} --}}
          <label>Carrera: 
            {{-- {{ $docentes }} --}}
            <select  class="form-control">
              @foreach ($carreras as $carrera)
                <option value="{{ $carrera->id }}">{{ $carrera->carrera }}</option>    
              @endforeach
            </select>  
          </label>
        </div>
      </div>
      <div class="col-sm-6">
        <div class="form-group" id="example1_length">
          {{-- {{ Form::select('carrera', $carrera, null, ['class' => 'form-control select2','placeholder' => 'Select a client...']) }} --}}
          <label>Turno: 
            {{-- {{ $docentes }} --}}
            <select  class="form-control">
              @foreach ($turnos as $turno)
                <option value="{{ $turno->id }}">{{ $turno->turno }}</option>    
              @endforeach
            </select>  
          </label>
        </div>
      </div>
      <div class="box-footer">
        <button type="submit" class="btn btn-info pull-right">GENERAR</button>
      </div>
    </form>
  </div>
</div>
@endsection