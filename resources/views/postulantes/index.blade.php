<div class="pull-right">
    <div class="form-group">
        <div class="col-md-2">
            @if ($postulantes->nota!=null)
                <div class="col-md-2 pull-left form-group box-header with-border">
                    <table class="table table-row box-title">
                        <thead>
                            <tr class="text-center">
                                <th><h1>{{ $postulantes->nota }}</h1></thdth:>
                            </tr>
                            <tr>
                                <th><label>Nota</label></th>
                            </tr>
                        </thead>
                    </table>
                </div>
            @else
                <label>Pendiente</label>
            @endif
            
        </div>
    </div>
</div>
<div class="row">
    <div class="col-md-6">
        <div class="box-header with-border">
            <h3 class="box-title">DATOS PERSONALES</h3>
        </div>
        <div class="form-group">
            <div class="col-md-12">
                <label>Cedula de Identidad</label><br>
                {{ $postulantes->ci }}
                <strong>{{ $departamentos->abreviatura }}</strong>
            </div>
        </div>
        <div class="form-group">
            <div class="col-md-12">
                <label>Nombre</label>
                {{ $postulantes->nombre }}
            </div>
        </div>
        <div class="form-group">
            <div class="col-md-12">
                <label>Paterno</label>
                {{ $postulantes->aPaterno }}
            </div>
        </div>
        <div class="form-group">
            <div class="col-md-12">
                <label>Materno</label>
                {{ $postulantes->aMaterno }}
            </div>
        </div>
        <div class="form-group">
            <div class="col-md-12">
                <label>Fecha Nacimiento</label>
                {{ $postulantes->fechaNacimiento }}
            </div>
        </div>
        <div class="form-group">
            <div class="col-md-12">
                <label>Genero</label>
                    @if($postulantes->genero=='M')
                        MASCULINO
                    @else
                        FEMENINO
                    @endif
            </div>
        </div>
        <div class="form-group">
            <div class="col-md-12">
                <label>Estado Civil</label>
                    @if($postulantes->estadoCivil=='S')
                        SOLTERO
                    @else
                        @if ($postulantes->estadoCivil=='C')
                        CASADO    
                        @else
                            VIUDO
                        @endif
                    @endif
            </div>
        </div>
        <div class="form-group">
            <div class="col-md-12">
                <label>Correo</label>
                {{ $postulantes->correo }}
            </div>
        </div>
        <div class="form-group">
            <div class="col-md-12">
                <label>Direccion</label>
                {{ $postulantes->direccion }}
            </div>
        </div>
        <div class="form-group">
            <div class="col-md-12">
                <label>Telefono</label>
                {{ $postulantes->telefono }}
            </div>
        </div>
        <div class="form-group">
            <div class="col-md-12">
                <label>Celular</label>
                {{ $postulantes->celular }}
            </div>
        </div>
    </div>
    
    <div class="col-md-6">
        <div class="box-header with-border">
            <h3 class="box-title">INSCRIPCIÓN</h3>
        </div>
        <div class="form-group">
            <div class="col-md-12">
                <label>Carrera</label>
                {{ $carrera_id->carrera }}
            </div>
        </div>
        <div class="form-group">
            <div class="col-md-12">
                <label>Turno</label>
                {{ $turno_id->turno }}
            </div>
        </div>
    </div>
    
    <div class="col-md-6">
        <div class="box-header with-border">
            <h3 class="box-title">DOCUMENTOS</h3>
        </div>
        <div class="form-group">
            <div class="col-md-12">
                <label>Cedula de Identidad</label>
                {{ $documentos->documento_ci }}
            </div>
        </div>
        <div class="form-group">
            <div class="col-md-12">
                <label>Certificado de Nacimiento</label>
                {{ $documentos->certificadoNacimiento }}
            </div>
        </div>
        <div class="form-group">
            <div class="col-md-12">
                <label>Titulo de Bachiller</label>
                {{ $documentos->tituloBachiller }}        
            </div>
        </div>
        
        <div class="form-group">
            <div class="col-md-12">
                <label>N° de Deposito Bancario</label>
                {{ $documentos->depositoBancario }}        
            </div>
        </div>
    </div>
</div>