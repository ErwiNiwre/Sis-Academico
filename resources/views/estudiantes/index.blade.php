<div class="row">
    <div class="col-md-6">
        <div class="box-header with-border">
            <h3 class="box-title">Datos Personales</h3>
        </div>
        <div class="col-md-6">
            <div class="form-group">
                <div class="col-md-12">
                    <label>Cedula de Identidad</label><br>
                    {{ $estudiantes->ci }}
                    <strong>{{ $departamentos->abreviatura }}</strong>
                </div>
            </div>
            <div class="form-group">
                <div class="col-md-12">
                    <label>Nombre</label>
                    {{ $estudiantes->nombre }}
                </div>
            </div>
            <div class="form-group">
                <div class="col-md-12">
                    <label>Paterno</label>
                    {{ $estudiantes->aPaterno }}
                </div>
            </div>
            <div class="form-group">
                <div class="col-md-12">
                    <label>Materno</label>
                    {{ $estudiantes->aMaterno }}
                </div>
            </div>
            <div class="form-group">
                <div class="col-md-12">
                    <label>Fecha Nacimiento</label>
                    {{ $estudiantes->fechaNacimiento }}
                </div>
            </div>
            <div class="form-group">
                <div class="col-md-12">
                    <label>Genero</label>
                        @if($estudiantes->genero=='M')
                            MASCULINO
                        @else
                            FEMENINO
                        @endif
                </div>
            </div>
            <div class="form-group">
                <div class="col-md-12">
                    <label>Estado Civil</label>
                        @if($estudiantes->estadoCivil=='S')
                            SOLTERO
                        @else
                            @if ($estudiantes->estadoCivil=='C')
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
                    {{ $estudiantes->correo }}
                </div>
            </div>
            <div class="form-group">
                <div class="col-md-12">
                    <label>Direccion</label>
                    {{ $estudiantes->direccion }}
                </div>
            </div>
            <div class="form-group">
                <div class="col-md-12">
                    <label>Telefono</label>
                    {{ $estudiantes->telefono }}
                </div>
            </div>
            <div class="form-group">
                <div class="col-md-12">
                    <label>Celular</label>
                    {{ $estudiantes->celular }}
                </div>
            </div>
        </div>                
    </div>
    
    <div class="col-md-6">
        <div class="box-header with-border">
            <h3 class="box-title">Inscripción</h3>
        </div>
        <div class="form-group">
            <div class="col-md-12">
                <label>Fecha Inscripción</label>
                @foreach ($estudiantes->cursos as $curso)
                    {{ $curso->pivot->fecha_ins }}
                @endforeach
            </div>
        </div>
        <div class="form-group">
            <div class="col-md-12">
                <label>Estado</label>
                @foreach ($estudiantes->cursos as $curso)
                    @if ($curso->pivot->estado)
                        Inscrito
                    @else
                        No Inscrito
                    @endif
                @endforeach
            </div>
        </div>
        <div class="form-group">
            <div class="col-md-12">
                <label>Carrera</label>
                @foreach ($estudiantes->carreras as $carrera)
                    {{ $carrera->carrera }}
                @endforeach
            </div>
        </div>
        <div class="form-group">
            <div class="col-md-12">
                <label>Turno</label>
                @foreach ($estudiantes->cursos as $curso)
                    @foreach ($turnos as $turno)
                        @if ($curso->turno_id==$turno->id)
                            {{ $turno->turno }}
                        @endif    
                    @endforeach
                @endforeach
            </div>
        </div>
        <div class="form-group">
            <div class="col-md-12">
                <label>Curso - Paralelo</label>
                {{-- curso --}}
                @foreach ($estudiantes->cursos as $curso)
                    @foreach ($niveles as $nivel)
                        @if ($curso->nivel_id==$nivel->id)
                            {{ $nivel->literal }}
                        @endif    
                    @endforeach
                @endforeach
                {{-- paralelo --}}
                @foreach ($estudiantes->cursos as $curso)
                    @foreach ($paralelos as $paralelo)
                        @if ($curso->paralelo_id==$paralelo->id)
                            {{ $paralelo->paralelo }}
                        @endif    
                    @endforeach
                @endforeach
            </div>
        </div>
        <div class="form-group">
            <div class="col-md-12">
                <label>Aula</label>
                @foreach ($estudiantes->cursos as $curso)
                    @foreach ($cursos as $cu)
                        @if ($curso->pivot->curso_id==$cu->id)
                            @foreach ($aulas as $aula)
                                @if ($cu->aula_id==$aula->id)
                                    {{ $aula->aula }} - {{ $aula->ubicacion }}
                                @endif
                            @endforeach
                        @endif    
                    @endforeach
                @endforeach
            </div>
        </div>
        <div class="form-group">
            <div class="col-md-12">
                <label>Tipo</label>
                @foreach ($estudiantes->cursos as $curso)
                    @foreach ($cursos as $cu)
                        @if ($curso->pivot->curso_id==$cu->id)
                            @foreach ($aulas as $aula)
                                @if ($cu->aula_id==$aula->id)
                                    @foreach ($aula->materias as $materia)
                                    {{-- {{ $materia->tipo }} --}}  
                                        @if ($materia->tipo=="BIMESTRE" AND $sw==0)
                                            BIMESTRAL
                                            <?php $sw="1"; ?>
                                        @endif
                                    @endforeach
                                    {{-- {{ $aula->materias }} --}}
                                    {{-- {{ $aula->aula }} --}}
                                @endif
                            @endforeach
                        @endif    
                    @endforeach
                @endforeach
            </div>
        </div>
        <div class="form-group">
            <div class="col-md-12">
                <label>Materias:</label><br>
                @foreach ($materias as $materia)
                    @foreach($estudiantes->carreras as $carrera)
                        @if ($materia->carrera_id==$carrera->id and $materia->nivel_id==1 and $materia->tipo=='BIMESTRE')
                            <div class="col-md-3"><strong>{{ $materia->sigla }}</strong></div> 
                            <div class="col-md-9">{{ $materia->materia }}</div>             
                        @endif
                    @endforeach
                @endforeach
            </div>
        </div>
    </div>
    
    {{-- <div class="col-md-6">
        <div class="box-header with-border">
            <h3 class="box-title">Documentos</h3>
        </div>
        <div class="form-group col-md-12">
            <div class="col-md-12">
                <label>Cedula de Identidad</label>
                {{ $documentos->documento_ci }}
            </div>
        </div>
        <div class="form-group col-md-12">
            <div class="col-md-6">
                <label>Certificado de Nacimiento</label>
                {{ $documentos->certificadoNacimiento }}
            </div>
        </div>
        <div class="form-group col-md-12">
            <div class="col-md-6">
                <label>Titulo de Bachiller</label>
                {{ $documentos->tituloBachiller }}        
            </div>
        </div>
        
        <div class="form-group col-md-12">
            <div class="col-md-6">
                <label>N° de Deposito Bancario</label>
                {{ $documentos->depositoBancario }}        
            </div>
        </div>
    </div> --}}
</div>