@extends('layouts.incos_inicio')

@section('content')
<center>
    <h1>PENSUM ACADEMICO</h1>
</center>

<div class="box-header with-border">
    <h3 class="box-title">Carrera: {{ $carreras->carrera }}</h3>
</div>

<div class="box-header with-border">
    <h3 class="box-title">Estudiante: {{ $estudiantes->aPaterno." ".$estudiantes->aMaterno." ".$estudiantes->nombre }}</h3>
</div>
<div class="row">
    <div class="col-md-12">
        <div class="box box-default">
            <div class="box-header with-border">
                <h3 class="box-title">PRIMER AÑO</h3>
            </div>
            <div class="box-body">
                <div class="box-body table-responsive">
                    <table class="table table-striped">
                        <thead class="bg-green-active">
                            <tr>
                                <th class="text-center">N°</th>
                                <th class="text-center">SIGLA</th>
                                <th class="text-center">MATERIA</th>
                                <th class="text-center">MODO</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($materias as $i => $materia)
                                @if ($materia->nivel_id==1 and $materia->tipo== 'BIMESTRE')
                                    <tr role="row" class="odd">
                                        <td>{{ $j = $j+1}}</td>
                                        <td>{{ $materia->sigla }}</td>
                                        <td>{{ $materia->materia }}</td>
                                        <td>{{ $materia->tipo }}</td>   
                                    </tr>
                                @else
                                     <?php $j = 0?>
                                @endif
                             @endforeach 
                        </tbody>
                    </table>
                </div>
            </div>
        </div>    
    </div>
</div>

<div class="row">
    <div class="col-md-12">
        <div class="box box-default">
            <div class="box-header with-border">
                <h3 class="box-title">SEGUNDO AÑO</h3>
            </div>
            <div class="box-body">
                <div class="box-body table-responsive">
                    <table class="table table-striped">
                        <thead class="bg-green-active">
                            <tr>
                                <th class="text-center">N°</th>
                                <th class="text-center">SIGLA</th>
                                <th class="text-center">MATERIA</th>
                                <th class="text-center">MODO</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($materias as $i => $materia)
                                @if ($materia->nivel_id==2 and $materia->tipo== 'BIMESTRE')
                                    <tr role="row" class="odd">
                                        <td>{{ $j = $j+1}}</td>
                                        <td>{{ $materia->sigla }}</td>
                                        <td>{{ $materia->materia }}</td>
                                        <td>{{ $materia->tipo }}</td>   
                                    </tr>
                                @else
                                     <?php $j = 0?>
                                @endif
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>    
    </div>
</div>

<div class="row">
    <div class="col-md-12">
        <div class="box box-default">
            <div class="box-header with-border">
                <h3 class="box-title">TERCER AÑO</h3>
            </div>
            <div class="box-body">
                <div class="box-body table-responsive">
                    <table class="table table-striped">
                        <thead class="bg-green-active">
                            <tr>
                                <th class="text-center">N°</th>
                                <th class="text-center">SIGLA</th>
                                <th class="text-center">MATERIA</th>
                                <th class="text-center">MODO</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($materias as $i => $materia)
                                @if ($materia->nivel_id==3 and $materia->tipo== 'TRIMESTRE')
                                    <tr role="row" class="odd">
                                        <td>{{ $j = $j+1}}</td>
                                        <td>{{ $materia->sigla }}</td>
                                        <td>{{ $materia->materia }}</td>
                                        <td>{{ $materia->tipo }}</td>   
                                    </tr>
                                @else
                                     <?php $j = 0?>
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