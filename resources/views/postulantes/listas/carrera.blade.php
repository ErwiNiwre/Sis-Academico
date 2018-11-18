@extends('impresion.impresion')

@section('content')

<div class="row">
    <div class="col">
        <div class="box box-default">
            <div class="form-group with-border col-md-12">
                <div class="col-md-6">
                    <h3 class="box-title col-md-6">CARRERA: {{ $carreras }}</h3>
                    <h3 class="box-title col-md-6">TURNO: {{ $turnos }}</h3>
                </div>
                <div class="col-md-6">
                    <h3 class="box-title">CUPOS: {{ $cupos->cantidad }}</h3>
                </div>
            </div>
            <div class="box-body">
                <div class="box-body table-responsive">
                    <table class="table-info w-100 m-b-5" border="1">
                        <thead class="font-medium text-white text-sm font-bold bg-grey-darker">
                            <tr>
                                <th class="text-center">N°</th>
                                <th class="text-center">PATERNO</th>
                                <th class="text-center">MATERNO</th>
                                <th class="text-center">NOMBRE</th>
                                <th class="text-center">C.I.</th>
                                <th class="text-center">OBSERVACIÓN</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($postulantesapro as $postulante)
                                <tr role="row" class="odd">
                                    <td>{{ $i =$i+1 }}</td>
                                    <td>{{ $postulante->aPaterno }}</td>
                                    <td>{{ $postulante->aMaterno }}</td>
                                    <td>{{ $postulante->nombre }}</td>
                                    <td>{{ $postulante->ci }}</td>
                                    <td><strong>{{ $postulante->nota }}</strong></td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>    
    </div>
</div>
@endsection