@extends('impresion.impresion')

@section('content')

<table class="w-100 m-b-15">
    <tr>
        <th class="w-20 text-left no-padding no-margins align-middle">
            <div class="text-center">
                <img src="{{ asset('images/incos.png') }}" class="w-40">
            </div>
        </th>
        <th class="w-60 align-top">
            <span class="font-semibold uppercase leading-tight text-md" >
                DIRECCIÓN DEPARTAMENTAL DE EDUCACIÓN LA PAZ<br>
            </span>
            <span class="font-light leading-tight text-md h6">
                DIRECCIÓN DISTRITAL DE EDUCACIÓN EL ALTO - 3<br>
                UNIDAD EDUCATIVA AMERICA PANORAMICA<br>
                NOTAS CENTRALIZADAS PRIMER BIMESTRE
            </span>
        </th>
        <th class="w-20 text-left no-padding no-margins align-middle">
            <div class="text-center">
                <img src="{{ asset('images/incos.png') }}" class="w-40">
            </div>
        </th>
    </tr>
    <tr><td colspan="3"><hr></td></tr>
    <tr><td colspan="3"></td></tr>
    <tr><td colspan="3"></td></tr>
</table>
    
<br>
<div class="row">
    <div class="col">
        <div class="box box-default">
            <div class="box-body">
                <div class="box-body table-responsive">
                    <table class="table-info w-100 m-b-5" border="2">
                        <thead class="font-medium text-white text-sm font-bold bg-grey-darker">
                            <tr>
                                <th class="text-center" colspan="2">AÑO DE ESCOLARIDAD Y PARALELO</th>
                                <th class="text-center" colspan="5">COMUNIDAD Y SOCIEDAD</th>
                                <th class="text-center" colspan="2">CIENCIA Y TECNOLOGIA</th>
                                <th class="text-center" colspan="1">VIDA TIERRA</th>
                                <th class="text-center" colspan="1">COSMOS Y PENSAMIENTO</th>
                                <th class="text-center" rowspan="5">OBSERVACIÓN</th>
                            </tr>
                            <tr>
                                <th class="text-center" colspan="2">1ro.</th>
                                <th class="text-center" rowspan="4"><b class="text-vertical">COM</b></th>
                                <th class="text-center" rowspan="4"><b class="text-vertical">CIENCIA</b></th>
                                <th class="text-center" rowspan="4"><b class="text-vertical">EDU</b></th>
                                <th class="text-center" rowspan="4"><b class="text-vertical">MUSICA</b></th>
                                <th class="text-center" rowspan="4"><b class="text-vertical">ARTES</b></th>
                                <th class="text-center" rowspan="4"><b class="text-vertical">MATE</b></th>
                                <th class="text-center" rowspan="4"><b class="text-vertical">TECNICA</b></th>
                                <th class="text-center" rowspan="4"><b class="text-vertical">CIENCIAS NATU</b></th>
                                <th class="text-center" rowspan="4"><b class="text-vertical">VALORES</b></th>
                            </tr>
                            <tr>
                                <th colspan="2">MAESTRA/O ASESORA/O</th>
                            </tr>
                            <tr>
                                <th colspan="2">CARLOS</th>
                            </tr>
                            <tr>
                                <th>N°</th>
                                <th>NÓMINA DE ESTUDIANTES</th>
                            </tr>
                            
                        </thead>
                        <tbody>
                            {{--  aca ya usas el for o while para llenar tu tabla pero debes mantener la misma cantidad vale  --}}
                            <tr>
                                <th>1</th>
                                <th>A</th>
                                <th>0</th>
                                <th>0</th>
                                <th>0</th>
                                <th>0</th>
                                <th>0</th>
                                <th>0</th>
                                <th>0</th>
                                <th>0</th>
                                <th>0</th>
                                <th>0</th>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>    
    </div>
</div>

@endsection