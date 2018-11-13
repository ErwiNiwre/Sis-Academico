@extends('impresion.impresion')

@section('content')

<div class="row">
    <div class="col">
        <div class="box box-default">
            <div class="box-header with-border col-md-12">
                <h3 class="box-title col-md-6">CARRERA: </h3>
                <h3 class="box-title col-md-6">TURNO: </h3>
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
                            <tr role="row" class="odd">
                                <th>N°</th>
                                <th>PATERNO</th>
                                <th>MATERNO</th>
                                <th>NOMBRE</th>
                                <th>C.I.</th>
                                <th>OBSERVACIÓN</th>
                            </tr>
                            
                            
                        </tbody>
                    </table>
                </div>
            </div>
        </div>    
    </div>
</div>
@endsection