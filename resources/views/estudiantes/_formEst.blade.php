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
<div class="row">
    <div class="col-md-6">
        <div class="box-header with-border">
            <h3 class="box-title">Documentos</h3>
        </div>
        @if (isset($estudiantes))
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
            <div class="col-md-6">
                    <input type="text" class="form-control text-uppercase" id="certificadoNacimiento" name="certificadoNacimiento" placeholder="Folio No." value="{{ isset($documentos) ? $documentos->certificadoNacimiento : old('certificadoNacimiento') }}">
                    {{ $errors->first('certificadoNacimiento') }}
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
                {{ $errors->first('tituloBachiller') }}
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
                {{ $errors->first('depositoBancario') }}
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
                    {{ $errors->first('certificadoNacimiento') }}
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
                {{ $errors->first('tituloBachiller') }}
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
                {{ $errors->first('depositoBancario') }}
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
                @if (isset($estudiantes))
                    <select name="carrera" id="carrera" aria-controls="example1" class="form-control input-sm">
                        @foreach ($carreras as $carrera)
                            @if ($estudiantes->carreras==$carrera->id)
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
                @if (isset($estudiantes))
                    <select name="turno" id="turno" aria-controls="example1" class="form-control input-sm">
                        @foreach ($turnos as $turno)
                            @if ($estudiantes->turno_id==$turno->id)
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
                    <input type="text" class="form-control" id="ci" name="ci" placeholder="Cedula de Identidad" value="{{ isset($estudiantes) ? $estudiantes->ci : old('ci') }}">
                    {{ $errors->first('ci') }}
                </div>
                <div class="col-md-4">
                    <label>Expedido</label>
                    @if (isset($estudiantes))
                        <select name="expedido" id="expedido" aria-controls="example1" class="form-control input-sm">
                            @foreach ($departamentos as $departamento)
                                @if ($estudiantes->expedido==$departamento->id)
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
                    <input type="text" class="form-control text-uppercase" id="nombre" name="nombre" placeholder="Nombre Completo" value="{{ isset($estudiantes) ? $estudiantes->nombre : old('nombre') }}">
                    {{ $errors->first('nombre') }}
                </div>
            </div>
            <div class="form-group">
                <div class="col-md-12">
                    <label>Paterno</label>
                    <input type="text" class="form-control text-uppercase" id="aPaterno" name="aPaterno" placeholder="Apellido Paterno" value="{{ isset($estudiantes) ? $estudiantes->aPaterno : old('aPaterno') }}">
                    {{ $errors->first('aPaterno') }}
                </div>
            </div>
            <div class="form-group">
                <div class="col-md-12">
                    <label>Materno</label>
                    <input type="text" class="form-control text-uppercase" id="aMaterno" name="aMaterno" placeholder="Apellido Materno" value="{{ isset($estudiantes) ? $estudiantes->aMaterno : old('aMaterno') }}">
                    {{ $errors->first('aMaterno') }}
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
                        <input type="date" class="form-control" id="fechaNacimiento" name="fechaNacimiento" min="1980-01-01" value="{{ isset($estudiantes) ? $estudiantes->fechaNacimiento : old('fechaNacimiento') }}">
                    </div>
                    {{ $errors->first('fechaNacimiento') }}
                </div>
            </div>
            <div class="form-group">
                <div class="col-md-6">
                    <label>Genero</label>
                    @if (isset($estudiantes))
                        <select class="form-control" name="genero">
                            @if ($estudiantes->genero=='M')
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
                    @if (isset($estudiantes))
                        <select class="form-control" name="estadoCivil">
                            @if ($estudiantes->estadoCivil=='S')
                                <option value="S" selected>SOLTERO</option>
                                <option value="C">CASADO</option>
                                <option value="V">VIUDO</option>                    
                            @else
                                @if ($estudiantes->estadoCivil=='C')
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
                    <input type="text" class="form-control" id="correo" name="correo" placeholder="Correo Electronico" value="{{ isset($estudiantes) ? $estudiantes->correo : old('correo') }}">
                    {{ $errors->first('correo') }}
                </div>
            </div>
            <div class="form-group">
                <div class="col-md-12">
                    <label>Dirección</label>
                    <input type="text" class="form-control text-uppercase" id="direccion" name="direccion" placeholder="Dirección" value="{{ isset($estudiantes) ? $estudiantes->direccion : old('direccion') }}">
                    {{ $errors->first('direccion') }}
                </div>
            </div>
            <div class="form-group">
                <div class="col-md-6">
                    <label>Telefono</label>
                    <div class="input-group date">
                        <div class="input-group-addon">
                            <i class="fa fa-phone"></i>
                        </div>
                        <input type="text" class="form-control" id="telefono" name="telefono" value="{{ isset($estudiantes) ? $estudiantes->telefono : old('telefono') }}">
                    </div>
                    {{ $errors->first('telefono') }}
                </div>
                <div class="col-md-6">
                    <label>Celular</label>
                    <div class="input-group date">
                        <div class="input-group-addon">
                            <i class="fa fa-mobile-phone"></i>
                        </div>
                        <input type="text" class="form-control" id="celular" name="celular" value="{{ isset($estudiantes) ? $estudiantes->celular : old('celular') }}">
                    </div>
                    {{ $errors->first('celular') }}
                </div>
            </div>
        </div>                
    </div>
</div>