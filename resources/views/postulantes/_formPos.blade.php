<script type="text/javascript">
    function habilitacerti() {
        var certificado=document.getElementById("certificadoNacimiento");
        var cer=document.getElementById("cert");
        if(cer.checked)
        {
            certificado.disabled=false;
        }else{
            certificado.disabled=true;
        }
    }

    function habilitatitulo() {
        var titulo=document.getElementById("tituloBachiller");
        var tit=document.getElementById("tit");
        if(tit.checked)
        {
            titulo.disabled=false;
        }else{
            titulo.disabled=true;
        }
    }

    function habilitadeposito() {
        var deposito=document.getElementById("depositoBancario");
        var dep=document.getElementById("dep");
        if(dep.checked)
        {
            deposito.disabled=false;
        }else{
            deposito.disabled=true;
        }
    }
</script>
{{-- @if(count($errors) > 0)
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif --}}
<div class="row">
    <div class="col-md-6">
        <div class="box-header with-border">
            <h3 class="box-title">Documentos</h3>
        </div>
        @if (isset($postulantes))
        <div class="form-group col-md-12">
            <div class="col-md-12">
                <label>
                    <input type="checkbox" class="icheckbox_flat-green checked" checked disabled>
                    Cedula de Identidad
                </label>        
            </div>
        </div>
        <div class="form-group col-md-12">
            <div class="col-md-6">
                <label>
                    <input type="checkbox" class="icheckbox_flat-green checked" id="cert" name="cert" checked disabled>
                    Certificado de Nacimiento
                </label>        
            </div>
            <div class="col-md-6 form-group{{ $errors->has('certificadoNacimiento') ? ' has-error' : '' }}">
                <input type="text" class="form-control text-uppercase" id="certificadoNacimiento" name="certificadoNacimiento" placeholder="Folio No." value="{{ isset($documentos) ? $documentos->certificadoNacimiento : old('certificadoNacimiento') }}">
                @if ($errors->has('certificadoNacimiento'))
                    <span class="danger alert-danger">
                        {{ $errors->first('certificadoNacimiento') }}
                    </span>
                @endif
            </div>
        </div>
        <div class="form-group col-md-12">
            <div class="col-md-6">
                <label>
                    <input type="checkbox" class="icheckbox_flat-green checked" id="tit" name="tit" checked disabled>
                    Titulo de Bachiller
                </label>        
            </div>
            <div class="col-md-6">
                <input type="text" class="form-control text-uppercase" id="tituloBachiller" name="tituloBachiller" placeholder="N° Titulo de Bachiller" value="{{ isset($documentos) ? $documentos->tituloBachiller : old('tituloBachiller') }}">
                @if ($errors->has('tituloBachiller'))
                    <span class="danger alert-danger">
                        {{ $errors->first('tituloBachiller') }}
                    </span>
                @endif
            </div>
        </div>
        
        <div class="form-group col-md-12">
            <div class="col-md-6">
                <label>
                    <input type="checkbox" class="icheckbox_flat-green checked" checked disabled>
                    N° de Deposito Bancario
                </label>        
            </div>
            <div class="col-md-6">
                <input type="text" class="form-control" id="depositoBancario" name="depositoBancario" placeholder="N° Deposito" value="{{ isset($documentos) ? $documentos->depositoBancario : old('depositoBancario') }}">
                @if ($errors->has('depositoBancario'))
                    <span class="danger alert-danger">
                        {{ $errors->first('depositoBancario') }}
                    </span>
                @endif
            </div>
        </div>
            
        @else
        <div class="form-group col-md-12">
            <div class="col-md-12">
                <label>
                    <input type="checkbox" class="icheckbox_flat-green checked">
                    Cedula de Identidad
                </label>        
            </div>
        </div>
        <div class="form-group col-md-12">
            <div class="col-md-6">
                <label>
                    <input type="checkbox" class="icheckbox_flat-green checked" id="cert" name="cert" onclick="habilitacerti();">
                    Certificado de Nacimiento
                </label>        
            </div>
            <div class="col-md-6">
                <input type="text" class="form-control text-uppercase" id="certificadoNacimiento" name="certificadoNacimiento" placeholder="Folio No." value="{{ isset($documentos) ? $documentos->certificadoNacimiento : old('certificadoNacimiento') }}" disabled="disabled">
                @if ($errors->has('certificadoNacimiento'))
                    <span class="danger alert-danger">
                        {{ $errors->first('certificadoNacimiento') }}
                    </span>
                @endif
            </div>
        </div>
        <div class="form-group col-md-12">
            <div class="col-md-6">
                <label>
                    <input type="checkbox" class="icheckbox_flat-green checked" id="tit" name="tit" onclick="habilitatitulo();">
                    Titulo de Bachiller
                </label>        
            </div>
            <div class="col-md-6">
                <input type="text" class="form-control text-uppercase" id="tituloBachiller" name="tituloBachiller" placeholder="N° Titulo de Bachiller" value="{{ isset($documentos) ? $documentos->tituloBachiller : old('tituloBachiller') }}" disabled="disabled">
                @if ($errors->has('tituloBachiller'))
                    <span class="danger alert-danger">
                        {{ $errors->first('tituloBachiller') }}
                    </span>
                @endif
            </div>
        </div>
        
        <div class="form-group col-md-12">
            <div class="col-md-6">
                <label>
                    <input type="checkbox" class="icheckbox_flat-green checked" id="dep" name="dep" onclick="habilitadeposito();">
                    N° de Deposito Bancario
                </label>        
            </div>
            <div class="col-md-6">
                <input type="text" class="form-control" id="depositoBancario" name="depositoBancario" placeholder="N° Deposito" value="{{ isset($documentos) ? $documentos->depositoBancario : old('depositoBancario') }}" disabled="disabled">
                @if ($errors->has('depositoBancario'))
                    <span class="danger alert-danger">
                        {{ $errors->first('depositoBancario') }}
                    </span>
                @endif
            </div>
        </div>
            
        @endif
    </div>
    
    <div class="col-md-6">
        <div class="box-header with-border">
            <h3 class="box-title">Inscripción</h3>
        </div>
        <div class="form-group col-md-12">
            <label>Carrera</label>
                @if (isset($postulantes))
                    <select name="carrera" id="carrera" aria-controls="example1" class="form-control input-sm">
                        @foreach ($carreras as $carrera)
                            @if ($postulantes->carrera_id==$carrera->id)
                            <option value="{{ $carrera->id }}" selected>{{ $carrera->carrera }}</option> 
                            @else
                            <option value="{{ $carrera->id }}">{{ $carrera->carrera }}</option> 
                            @endif
                        @endforeach
                    </select> 
                @else
                    <select name="carrera" id="carrera" aria-controls="example1" class="form-control input-sm" value="{{ old('carrera') }}">
                        @foreach ($carreras as $carrera)
                            <option value="{{ $carrera->id }}">{{ $carrera->carrera }}</option> 
                        @endforeach
                    </select> 
                @endif
        </div>
        <div class="form-group col-md-12">
            <label>Turno</label>
            @if (isset($postulantes))
                <select name="turno" id="turno" aria-controls="example1" class="form-control input-sm">
                    @foreach ($turnos as $turno)
                        @if ($postulantes->turno_id==$turno->id)
                        <option value="{{ $turno->id }}" selected>{{ $turno->turno }}</option> 
                        @else
                        <option value="{{ $turno->id }}">{{ $turno->turno }}</option> 
                        @endif
                    @endforeach
                </select> 
            @else
                <select name="turno" id="turno" aria-controls="example1" class="form-control input-sm" value="{{ old('carrera') }}">
                    @foreach ($turnos as $turno)
                        <option value="{{ $turno->id }}">{{ $turno->turno }}</option> 
                    @endforeach
                </select> 
            @endif
        </div>
    </div>
    <div class="col-md-12">
        <div class="box-header with-border">
            <h3 class="box-title">Datos Personales</h3>
        </div>
        <div class="col-md-6">
            <div class="form-group">
                <div class="col-md-8">
                    <label>Cedula de Identidad</label>
                    <input type="text" class="form-control" id="ci" name="ci" placeholder="Cedula de Identidad" value="{{ isset($postulantes) ? $postulantes->ci : old('ci') }}">
                    @if ($errors->has('ci'))
                        <span class="danger alert-danger">
                            {{ $errors->first('ci') }}
                        </span>
                    @endif
                </div>
                <div class="col-md-4">
                    <label>Expedido</label>
                    @if (isset($postulantes))
                        <select name="expedido" id="expedido" aria-controls="example1" class="form-control input-sm">
                            @foreach ($departamentos as $departamento)
                                @if ($postulantes->expedido==$departamento->id)
                                <option value="{{ $departamento->id }}" selected>{{ $departamento->abreviatura }}</option> 
                                @else
                                <option value="{{ $departamento->id }}">{{ $departamento->abreviatura }}</option> 
                                @endif
                            @endforeach
                        </select> 
                    @else
                        <select name="expedido" id="expedido" aria-controls="example1" class="form-control input-sm" value="{{ old('carrera') }}">
                            @foreach ($departamentos as $departamento)
                                <option value="{{ $departamento->id }}">{{ $departamento->abreviatura }}</option> 
                            @endforeach
                        </select> 
                    @endif
                </div>
            </div>
            <div class="form-group">
                <div class="col-md-12">
                    <label>Nombre</label>
                    <input type="text" class="form-control text-uppercase" id="nombre" name="nombre" placeholder="Nombre Completo" value="{{ isset($postulantes) ? $postulantes->nombre : old('nombre') }}">
                    @if ($errors->has('nombre'))
                        <span class="danger alert-danger">
                            {{ $errors->first('nombre') }}
                        </span>
                    @endif
                </div>
            </div>
            <div class="form-group">
                <div class="col-md-12">
                    <label>Paterno</label>
                    <input type="text" class="form-control text-uppercase" id="aPaterno" name="aPaterno" placeholder="Apellido Paterno" value="{{ isset($postulantes) ? $postulantes->aPaterno : old('aPaterno') }}">
                    @if ($errors->has('aPaterno'))
                        <span class="danger alert-danger">
                            {{ $errors->first('aPaterno') }}
                        </span>
                    @endif
                </div>
            </div>
            <div class="form-group">
                <div class="col-md-12">
                    <label>Materno</label>
                    <input type="text" class="form-control text-uppercase" id="aMaterno" name="aMaterno" placeholder="Apellido Materno" value="{{ isset($postulantes) ? $postulantes->aMaterno : old('aMaterno') }}">
                    @if ($errors->has('aMaterno'))
                        <span class="danger alert-danger">
                            {{ $errors->first('aMaterno') }}
                        </span>
                    @endif
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group">
                <div class="col-md-12">
                    <label>Fecha Nacimiento</label>
                    <div class="input-group date">
                        <div class="input-group-addon">
                            <i class="fa fa-calendar"></i>
                        </div>
                        <input type="date" class="form-control" id="fechaNacimiento" name="fechaNacimiento" min="1980-01-01" value="{{ isset($postulantes) ? $postulantes->fechaNacimiento : old('fechaNacimiento') }}">
                    </div>
                    @if ($errors->has('fechaNacimiento'))
                        <span class="danger alert-danger">
                            {{ $errors->first('fechaNacimiento') }}
                        </span>
                    @endif
                </div>
            </div>
            <div class="form-group">
                <div class="col-md-6">
                    <label>Genero</label>
                    @if (isset($postulantes))
                        <select class="form-control" name="genero">
                            @if ($postulantes->genero=='M')
                                <option value="M" selected>MASCULINO</option>
                                <option value="F">FEMENINO</option>                    
                            @else
                                <option value="M">MASCULINO</option>
                                <option value="F" selected>FEMENINO</option> 
                            @endif
                        </select> 
                    @else
                    <select class="form-control" name="genero" value="{{ old('genero') }}">
                        <option value="M">MASCULINO</option>
                        <option value="F">FEMENINO</option>                    
                    </select>
                    @endif
                </div>
                <div class="col-md-6">
                    <label>Estado Civil</label>
                    @if (isset($postulantes))
                        <select class="form-control" name="estadoCivil">
                            @if ($postulantes->estadoCivil=='S')
                                <option value="S" selected>SOLTERO</option>
                                <option value="C">CASADO</option>
                                <option value="V">VIUDO</option>                    
                            @else
                                @if ($postulantes->estadoCivil=='C')
                                    <option value="S">SOLTERO</option>
                                    <option value="C" selected>CASADO</option>
                                    <option value="V">VIUDO</option>
                                @else
                                    <option value="S">SOLTERO</option>
                                    <option value="C">CASADO</option>
                                    <option value="V" selected>VIUDO</option>
                                @endif 
                            @endif
                        </select> 
                    @else
                    <select class="form-control" name="estadoCivil" value="{{ old('estadoCivil') }}">
                        <option value="S">SOLTERO</option>
                        <option value="C">CASADO</option>
                        <option value="V">VIUDO</option>                     
                    </select>
                    @endif
                </div>
            </div>
            
            <div class="form-group">
                <div class="col-md-12">
                    <label>Correo</label>
                    <input type="text" class="form-control" id="correo" name="correo" placeholder="Correo Electronico" value="{{ isset($postulantes) ? $postulantes->correo : old('correo') }}">
                    @if ($errors->has('correo'))
                        <span class="danger alert-danger">
                            {{ $errors->first('correo') }}
                        </span>
                    @endif
                </div>
            </div>
            <div class="form-group">
                <div class="col-md-12">
                    <label>Dirección</label>
                    <input type="text" class="form-control text-uppercase" id="direccion" name="direccion" placeholder="Dirección" value="{{ isset($postulantes) ? $postulantes->direccion : old('direccion') }}">
                    @if ($errors->has('direccion'))
                        <span class="danger alert-danger">
                            {{ $errors->first('direccion') }}
                        </span>
                    @endif
                </div>
            </div>
            <div class="form-group">
                <div class="col-md-6">
                    <label>Telefono</label>
                    <div class="input-group date">
                        <div class="input-group-addon">
                            <i class="fa fa-phone"></i>
                        </div>
                        <input type="text" class="form-control" id="telefono" name="telefono" value="{{ isset($postulantes) ? $postulantes->telefono : old('telefono') }}">
                    </div>
                    @if ($errors->has('telefono'))
                        <span class="danger alert-danger">
                            {{ $errors->first('telefono') }}
                        </span>
                    @endif
                </div>
                <div class="col-md-6">
                    <label>Celular</label>
                    <div class="input-group date">
                        <div class="input-group-addon">
                            <i class="fa fa-mobile-phone"></i>
                        </div>
                        <input type="text" class="form-control" id="celular" name="celular" value="{{ isset($postulantes) ? $postulantes->celular : old('celular') }}">
                    </div>
                    @if ($errors->has('celular'))
                        <span class="danger alert-danger">
                            {{ $errors->first('celular') }}
                        </span>
                    @endif
                </div>
            </div>
        </div>                
    </div>
</div>