@extends('impresion.impresion')

@section('content')

<table class="table-info w-100 m-b-5" border="2">
    <thead>
        <tr>
            <th colspan="3" class="font-medium text-white text-sm font-bold bg-grey-darker">DATOS PERSONALES</th>
        </tr>
        <tr>
            <th>{{ $estudiantes->aPaterno }}</th>
            <th>{{ $estudiantes->aMaterno }}</th>
            <th>{{ $estudiantes->nombre }}</th>
        </tr>
        <tr>
            <th class="font-medium text-sm font-bold bg-grey-lightest">PATERNO</th>
            <th class="font-medium text-sm font-bold bg-grey-lightest">MATERNO</th>
            <th class="font-medium text-sm font-bold bg-grey-lightest">NOMBRES</th>
        </tr>
        <tr>
            <th>{{ $estudiantes->ci }}</th>
            <th>{{ $departamentos->departamento }}</th>
            <th>{{ $estudiantes->nombre }}</th>
        </tr>
        <tr>
            <th class="font-medium text-sm font-bold bg-grey-lightest">CEDULA IDENTIDAD</th>
            <th class="font-medium text-sm font-bold bg-grey-lightest">EXPEDIDO</th>
            <th class="font-medium text-sm font-bold bg-grey-lightest">NOMBRES</th>
        </tr>
    </thead>
</table>
{{-- <br> --}}
<table class="table-info w-100 m-b-5" border="2">
        <thead>
        <tr>
            <th colspan="3" class="font-medium text-white text-sm font-bold bg-grey-darker">DATOS INSCRIPCIÓN</th>
        </tr>
        <tr>
            <th colspan="2">
                @foreach ($estudiantes->carreras as $carrera)
                    {{ $carrera->carrera }}
                @endforeach
            </th>
            <th>
                @foreach ($estudiantes->carreras as $carrera)
                    {{ $carrera->nivelAcademico }}
                @endforeach
            </th>
        </tr>
        <tr>
            <th colspan="2" class="font-medium text-sm font-bold bg-grey-lightest">CARRERA</th>
            <th class="font-medium text-sm font-bold bg-grey-lightest">NIVEL</th>
        </tr>
        <tr>
            <th>
                @foreach ($estudiantes->cursos as $curso)
                    @foreach ($turnos as $turno)
                        @if ($curso->turno_id==$turno->id)
                            {{ $turno->turno }}
                        @endif    
                    @endforeach
                @endforeach
            </th>
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
            <th>
                @foreach ($estudiantes->cursos as $curso)
                    {{ date("Y", strtotime($curso->pivot->fecha_ins))   }}
                @endforeach
            </th>
        </tr>
        <tr>
            <th class="font-medium text-sm font-bold bg-grey-lightest">TURNO</th>
            <th class="font-medium text-sm font-bold bg-grey-lightest">NIVEL/PARALELO</th>
            <th class="font-medium text-sm font-bold bg-grey-lightest">GESTIÓN</th>
        </tr>
        <tr>
            <th colspan="1" class="font-medium text-sm font-bold bg-grey-lightest">SIGLAS</th>
            <th colspan="2" class="font-medium text-sm font-bold bg-grey-lightest">MATERIAS</th>
        </tr> 
        @foreach ($estudiantes->cursos as $curso)
            @foreach ($cursos as $cu)
                @if ($curso->pivot->curso_id==$cu->id)
                    @foreach ($aulas as $aula)
                        @if ($cu->aula_id==$aula->id)
                            @foreach ($aula->materias as $materia)
                                <tr>
                                    <th class="text-center"><strong>{{ $materia->sigla }}</strong></th>
                                    <th colspan="2" class="text-justify">{{ $materia->materia }}</th>
                                </tr>
                            @endforeach
                        @endif
                    @endforeach
                @endif    
            @endforeach
        @endforeach
    </thead>
</table>

<table class="table-info w-100 m-b-5" border="2">
    <thead>
        <tr>
            <th class="font-medium text-white text-sm font-bold bg-grey-darker">DECLARACION JURADA</th>
        </tr>
        <tr>
            <th class="text-justify">
                <p class="font-medium text-xs">
                    Yo, <strong>{{ $estudiantes->nombre." ".$estudiantes->aPaterno." ".$estudiantes->aMaterno }}</strong>, hábil por derecho, con Cédula de Identidad 
                    N° <strong>{{ $estudiantes->ci." ".$departamentos->abreviatura }}</strong>, de manera voluntaria
                    ACEPTO los términos y condiciones establecidos en la Convocatoria Pública N° 001/@foreach ($estudiantes->cursos as $curso)
                                                                                                        {{ date("Y", strtotime($curso->pivot->fecha_ins))   }}
                                                                                                     @endforeach de la Gestión @foreach ($estudiantes->cursos as $curso)
                                                                                                        {{ date("Y", strtotime($curso->pivot->fecha_ins))   }}
                                                                                                     @endforeach
                    así como el Reglamento para el Proceso de inscripción al Instituto Técnico Comercial "INCOS - EL ALTO". Asimismo, declaro en honor a la verdad, que cumplo
                    a cabalidad con los requisitos exigidos mediante Convocatoria, para ser inscrito, siendo que todos los datos proporcionados en el presente formulario son fidedignos y verídicos.<br>
                    
                    Además, otorgo Autorización expresa a la Institución para que la información proporcionada sea verificada y contrastada por el Ministerio de Educación y por 
                    el Instituto Técnico Comercial "INCOS - EL ALTO", comprometiendome a la presentación de la documentación original y fotocopia, si así lo requieren las autoridades pertinentes.<br>
                    También, indicar que es de mi absoluto conocimiento la prohibición de solicitud de cambioi de turno, así como de carrera luego de realizado el registro de inscripción.<br>
                    Como estudiante manifiesto mi aceptación en el estricto cumplimiento de los reglamentos, instructivos y comunicados de la institución.<br>
                    En caso de verificarse falsedad en la información y/o documentación proporcionada en este formulario de inscripción, el mismo quedara sin efecto y nulo automáticamente en cualquier
                    etapa de mi proceso formativo, para dar lugar a las acciones legales que puedan tomarse en contra mía por los daños y perjuicios ocacionados.
                </p>
            </th>
        </tr>
    </thead>
</table>
<br><br>
<table class="table-info w-100 m-b-5">
    <thead>
        <tr>
            <th style="width: 50px;">
                ____________________________________________<br>
                {{ $estudiantes->aPaterno." ".$estudiantes->aMaterno." ".$estudiantes->nombre }}<br>
                {{ $estudiantes->ci }}<strong>{{ $departamentos->abreviatura }}</strong>
            </th>
            <th style="width: 100px; height: 150px;" class="border"></th>
        </tr>
        <tr>
            <th></th>
            <th class="font-medium text-white text-sm font-bold bg-grey-darker border">SELLO</th>
        </tr>
    </thead>
</table>

@endsection