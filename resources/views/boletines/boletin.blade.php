@extends('impresion.impresion')

@section('content')

<table class="table-info w-100 m-b-5" border="2">
    <thead>
        <tr>
            <th class="font-medium text-white text-sm font-bold bg-grey-darker">NOMBRE:</th>
            <th colspan="3">{{ $estudiantes->nombre." ".$estudiantes->aPaterno." ".$estudiantes->aMaterno }}</th>
            <th class="font-medium text-white text-sm font-bold bg-grey-darker">INSTITUCIÓN:</th>
            <th>"INCOS EL ALTO"</th>
        </tr>
        <tr>
            <th class="font-medium text-white text-sm font-bold bg-grey-darker">CARRERA:</th>
            <th colspan="3">
                @foreach ($estudiantes->carreras as $carrera)
                    {{ $carrera->carrera }}
                @endforeach
            </th>
            <th class="font-medium text-white text-sm font-bold bg-grey-darker">NIVEL:</th>
            <th>
                @foreach ($estudiantes->carreras as $carrera)
                    {{ $carrera->nivelAcademico }}
                @endforeach
            </th>
        </tr>
        <tr>
            <th class="font-medium text-white text-sm font-bold bg-grey-darker">CURSO</th>
            <th>
                @foreach ($estudiantes->cursos as $curso)
                    @foreach ($niveles as $nivel)
                        @if ($curso->nivel_id==$nivel->id)
                            {{ $nivel->literal }}
                        @endif    
                    @endforeach
                @endforeach
                @foreach ($estudiantes->cursos as $curso)
                    @foreach ($paralelos as $paralelo)
                        @if ($curso->paralelo_id==$paralelo->id)
                            {{ $paralelo->paralelo }}
                        @endif    
                    @endforeach
                @endforeach
            </th>
            <th class="font-medium text-white text-sm font-bold bg-grey-darker">TURNO:</th>
            <th>
                @foreach ($estudiantes->cursos as $curso)
                    @foreach ($turnos as $turno)
                        @if ($curso->turno_id==$turno->id)
                            {{ $turno->turno }}
                        @endif    
                    @endforeach
                @endforeach
            </th>
            <th class="font-medium text-white text-sm font-bold bg-grey-darker">GESTIÓN:</th>
            <th>
                @foreach ($estudiantes->cursos as $curso)
                    {{ date("Y", strtotime($curso->pivot->fecha_ins))   }}
                @endforeach
            </th>
        </tr>
            
    </thead>
</table>

<div class="row">
    <div class="col">
        <div class="box box-default">
            {{--  <div class="box-header with-border">
                <h3 class="box-title">PRIMER AÑO</h3>
            </div>  --}}
            <div class="box-body">
                <div class="box-body table-responsive">
                    <table class="table-info w-100 m-b-5">
                        <thead class="font-medium text-white text-sm font-bold bg-grey-darker">
                            <tr>
                                <th class="text-center" rowspan="2">N°</th>
                                <th class="text-center" rowspan="2">Sigla</th>
                                <th class="text-center" rowspan="2">Materia</th>
                                <th class="text-center" colspan="4">PROMEDIOS</th>
                                <th class="text-center" rowspan="2">PROM.<br>ANUAL</th>
                                <th class="text-center" rowspan="2">2do. TURNO</th>
                                <th class="text-center" rowspan="2">OBSERVACIÓN</th>
                            </tr>
                            <tr>
                                <th class="text-center">1ER</th>
                                <th class="text-center">2DO</th>
                                <th class="text-center">3ER</th>
                                <th class="text-center">4TO</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ( $estudiantes->cursos as $curso )
                                @if ($curso->nivel_id==1)
                                    @foreach($materias as $materia)
                                        @if ($materia->nivel_id==1 and $materia->tipo == 'BIMESTRE' and $curso->carrera_id==$materia->carrera_id)
                                            <tr>
                                                <td>{{ $j = $j+1 }}</td>
                                                <td>{{ $materia->sigla }}</td>
                                                <td>{{ $materia->materia }}</td>
                                                <td>
                                                    @foreach($bi_notas as $bi_nota)
                                                        @if ($bi_nota->periodo_id == 4)
                                                            @foreach ($materias as $mate)
                                                                @foreach ($periodos as $periodo)
                                                                    @if ($bi_nota->periodo_id == $periodo->id and $periodo->id==4 and $bi_nota->materia_id==$mate->id and $materia->id==$mate->id)
                                                                    {{ $a=$bi_nota->puntaje_total }}
                                                                    @endif
                                                                @endforeach
                                                            @endforeach
                                                        @endif
                                                    @endforeach
                                                </td>
                                                <td>
                                                    @foreach($bi_notas as $bi_nota)
                                                        @if ($bi_nota->periodo_id == 5)
                                                            @foreach ($materias as $mate)
                                                                @foreach ($periodos as $periodo)
                                                                    @if ($bi_nota->periodo_id == $periodo->id and $periodo->id==5 and $bi_nota->materia_id==$mate->id and $materia->id==$mate->id)
                                                                    {{ $b=$bi_nota->puntaje_total }}
                                                                    @endif
                                                                @endforeach
                                                            @endforeach
                                                        @endif
                                                    @endforeach
                                                </td>
                                                <td>
                                                    @foreach($bi_notas as $bi_nota)
                                                        @if ($bi_nota->periodo_id == 6)
                                                            @foreach ($materias as $mate)
                                                                @foreach ($periodos as $periodo)
                                                                    @if ($bi_nota->periodo_id == $periodo->id and $periodo->id==6 and $bi_nota->materia_id==$mate->id and $materia->id==$mate->id)
                                                                    {{ $c=$bi_nota->puntaje_total }}
                                                                    @endif
                                                                @endforeach
                                                            @endforeach
                                                        @endif
                                                    @endforeach
                                                </td>
                                                <td>
                                                    @foreach($bi_notas as $bi_nota)
                                                        @if ($bi_nota->periodo_id == 7)
                                                            @foreach ($materias as $mate)
                                                                @foreach ($periodos as $periodo)
                                                                    @if ($bi_nota->periodo_id == $periodo->id and $periodo->id==7 and $bi_nota->materia_id==$mate->id and $materia->id==$mate->id)
                                                                    {{ $d=$bi_nota->puntaje_total }}
                                                                    @endif
                                                                @endforeach
                                                            @endforeach
                                                        @endif
                                                    @endforeach
                                                </td>
                                                <td>{{ $a+$b+$c+$d }}</td>
                                                <td></td>
                                                <td></td>
                                            </tr>
                                        @else
                                            <?php $j = 0?>
                                        @endif
                                        <?php $a=0; $b=0; $c=0; $d=0;?>        
                                    @endforeach
                                @endif    
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>    
    </div>
</div>


@endsection