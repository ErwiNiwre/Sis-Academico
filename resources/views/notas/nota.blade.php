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


@endsection