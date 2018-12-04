@extends('layouts.incos_inicio')

@section('titulo')
    Lista de Postulantes - Carrera
@endsection
@section('content')

<script type="text/javascript">
  function ShowSelectedCarrera()
  {
    /* Para obtener el valor */
    var carrera_id = document.getElementById("carrera_id").value;
    alert(carrera_id);
    $(carrera).val(carrera_id);
    /* Para obtener el texto */
    /*var combo = document.getElementById("carrera_id");
    var selected = combo.options[combo.selectedIndex].text;
    alert(selected);*/
  }
  
  function ShowSelectedTurno()
  {
    /* Para obtener el valor */
    var turno_id = document.getElementById("turno_id").value;
    //alert(turno_id);
    $(turno).val(turno_id);
    
    /* Para obtener el texto */
    /*var combo = document.getElementById("turno_id");
    var selected = combo.options[combo.selectedIndex].text;
    alert(selected);*/
  }
</script>

<div class="box">
  <div class="box-header with-border">
    <h3 class="box-title">PRE-INSCRIPCIÓN DE POSTULANTES</h3>
  </div>
  <!-- /.box-header -->
  <div class="box-body">
    <div id="example1_wrapper" class="dataTables_wrapper form-inline dt-bootstrap">
      <div class="row">
        <div class="col-sm-6">
          <div class="form-group" id="example1_length">
            <label>CARRERAS: </label><br>
              <ul>
                <ol><strong>CONTADURÍA GENERAL:</strong>         {{ " ".$cont }}</ol>
                <ol><strong>SECRETARIADO EJECUTIVO:</strong>     {{ " ".$secr }}</ol>
                <ol><strong>SISTEMAS INFORMÁTICOS:</strong>      {{ " ".$sist }}</ol>
                <ol><strong>ADMINISTRACIÓN DE EMPRESAS:</strong> {{ " ".$admi }}</ol>
                <ol><strong>COMERCIO EXTERIOR:</strong>          {{ " ".$come }}</ol>
                <ol><strong>LINGÜÍSTICA:</strong>                {{ " ".$ling }}</ol>
              </ul>
              <label>Total: {{ $total }}</label>
          </div>
        </div>
        <div class="col-sm-6">
          <div class="form-group" id="example1_length">
              <label>TURNOS: </label><br>
              <ul>
                <ol><strong>MAÑANA:</strong>  {{ " ".$mañana }}</ol>
                <ol><strong>NOCHE:</strong>   {{ " ".$noche }}</ol>
              </ul>
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
            <a class="btn btn-social-icon bg-green" href="{{ route('postulantes.create') }}">
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
                    @if ($postulante->nota==0)
                        <label color="red">Aun no dio la Prueba</label>
                    @else
                      {{ $postulante->nota }}    
                    @endif
                  </td>
                      
                  <td class="text-center">
                    {{-- <a class="btn btn-social-icon" href="Docentes/{{ $docente['id'] }}/editar"> --}}
                    <a class="btn btn-social-icon bg-green" href="{{ route('postulantes.show', $postulante) }}">
                      {{-- <i class="fa fa-edit"></i> --}}
                      <i class="fa fa-file-text"></i>
                    </a>
                    <a class="btn btn-social-icon bg-green" href="{{ route('postulantes.edit', $postulante) }}">
                      {{-- <i class="fa fa-edit"></i> --}}
                      <i class="fa fa-edit"></i>
                    </a>
                    <a class="btn btn-social-icon bg-green" href="{{ route('postulantes.datosNota', $postulante) }}">
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
    @foreach ($cupos as $cupo)
        
    @endforeach
    <form class="form-horizontal" action="{{ route('postulantes.listacarrera') }}" method="GET">
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
        <button type="submit" class="btn btn-info pull-right">GENERAR</button>
      </div>
    </form>
    <a class="btn btn-file bg-green pull-right" href="{{ route('estudiantes.inscripcionPostulante') }}">
      {{-- <i class="fa fa-edit"></i> --}}
      <i class="fa fa-registered"> Registrar</i>
    </a>
  </div>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.4.0/Chart.min.js"></script>
  <div class="box-body">
    <div class="box-header with-border">
      <h3 class="box-title">Informes Estadisticos</h3>
    </div>
    <div style="width:50%;" class="center-block">
        {!! $chartjsca->render() !!}
    </div>
    <div style="width:50%;">
        {{-- {!! $chartjstu->render() !!} --}}
    </div>
  </div>
</div>

  {{--  {!! $chart->render() !!}  --}}


  {{--  {!! $pie_chart->script() !!}  --}}
@endsection