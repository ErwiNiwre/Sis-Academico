@extends('impresion.impresion')

@section('content')

<table class="table-info w-100 m-b-5" border="2">
    <thead>
        <tr>
            <th colspan="3" class="font-medium text-white text-sm font-bold bg-grey-darker">DATOS PERSONALES</th>
        </tr>
        <tr>
            <th>{{ $postulantes->aPaterno }}</th>
            <th>{{ $postulantes->aMaterno }}</th>
            <th>{{ $postulantes->nombre }}</th>
        </tr>
        <tr>
            <th class="font-medium text-sm font-bold bg-grey-lightest">PATERNO</th>
            <th class="font-medium text-sm font-bold bg-grey-lightest">MATERNO</th>
            <th class="font-medium text-sm font-bold bg-grey-lightest">NOMBRES</th>
        </tr>
        <tr>
            <th>{{ $postulantes->ci }}</th>
            <th>{{ $departamentos->departamento }}</th>
            <th>{{ $documentos->depositoBancario }}</th>
        </tr>
        <tr>
            <th class="font-medium text-sm font-bold bg-grey-lightest">CEDULA IDENTIDAD</th>
            <th class="font-medium text-sm font-bold bg-grey-lightest">EXPEDIDO</th>
            <th class="font-medium text-sm font-bold bg-grey-lightest">DEPOSITO BANCARIO</th>
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
               {{ $carrera_id->carrera }}
            </th>
            <th>
               {{ $turno_id->turno }}
            </th>
        </tr>
        <tr>
            <th colspan="2" class="font-medium text-sm font-bold bg-grey-lightest">CARRERA</th>
            <th class="font-medium text-sm font-bold bg-grey-lightest">TURNO</th>
        </tr>
        <tr>
            <th class="font-medium text-sm font-bold bg-grey-lightest">N°</th>
            <th class="font-medium text-sm font-bold bg-grey-lightest">DOCUMENTOS</th>
            <th class="font-medium text-sm font-bold bg-grey-lightest">SI/NO</th>
        </tr> 
        <tr>
            <th>1</th>
            <th class="text-justify">CEDULA IDENTIDAD</th>
            <th>
                @if ($documentos->documento_ci != null)
                    SI
                @else
                    NO
                @endif
            </th>
        </tr>
        <tr>
            <th>2</th>
            <th class="text-justify">CERTIFICADO DE NACIMIENTO</th>
            <th>
                @if ($documentos->certificadoNacimiento != null)
                    SI
                @else
                    NO
                @endif
            </th>
        </tr>
        <tr>
            <th>1</th>
            <th class="text-justify">TITULO DE BACHILLER</th>
            <th>
                @if ($documentos->tituloBachiller != null)
                    SI
                @else
                    NO
                @endif
            </th>
        </tr>
        <tr>
            <th>1</th>
            <th class="text-justify">DEPOSITO BANCARIO</th>
            <th>
                @if ($documentos->depositoBancario != null)
                    SI
                @else
                    NO
                @endif
            </th>
        </tr> 
    
    </thead>
</table>

{{--  <table class="table-info w-100 m-b-5" border="2">
    <thead>
        <tr>
            <th class="font-medium text-white text-sm font-bold bg-grey-darker">DECLARACION JURADA</th>
        </tr>
        <tr>
            <th class="text-justify">
                <p class="font-medium text-xs">
                    Yo, <strong>{{ $postulantes->nombre." ".$postulantes->aPaterno." ".$postulantes->aMaterno }}</strong>, hábil por derecho, con Cédula de Identidad 
                    N° <strong>{{ $postulantes->ci." ".$departamentos->abreviatura }}</strong>, de manera voluntaria
                    ACEPTO los términos y condiciones establecidos en la Convocatoria Pública N° 001/

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
</table>  --}}
<br><br>
<table class="table-info w-100 m-b-5">
    <thead>
        <tr>
            <th style="width: 50px;">
                ____________________________________________<br>
                {{ $postulantes->aPaterno." ".$postulantes->aMaterno." ".$postulantes->nombre }}<br>
                {{ $postulantes->ci }}<strong>{{ $departamentos->abreviatura }}</strong>
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