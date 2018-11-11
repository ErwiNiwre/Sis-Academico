<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreacionBaseDatos extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('roles', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('rol');
            $table->timestamps();
            $table->softDeletes();
        });

        Schema::create('departamentos', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('departamento');
            $table->string('abreviatura');
            $table->timestamps();
            $table->softDeletes();
        });

        Schema::create('carreras', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('carrera');
            $table->string('nivelAcademico');
            $table->timestamps();
            $table->softDeletes();
        });

        Schema::create('paralelos', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('paralelo');
            $table->timestamps();
            $table->softDeletes();
        });

        Schema::create('turnos', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('turno');
            $table->timestamps();
            $table->softDeletes();
        });

        // $table->enum('tipo', ['A.M.', 'P.M.'])->default('A.M.');

            Schema::create('horas', function (Blueprint $table) {
                $table->bigIncrements('id');
                $table->string('hora');
                $table->timestamps();
                $table->softDeletes();
            });

            Schema::create('niveles', function (Blueprint $table) {
                $table->bigIncrements('id');
                $table->string('numeral');
                $table->string('literal');
                $table->timestamps();
                $table->softDeletes();
            });

            Schema::create('aulas', function (Blueprint $table) {
                $table->bigIncrements('id');
                $table->string('aula');
                $table->string('ubicacion');
                $table->bigInteger('capacidad');
                $table->timestamps();
                $table->softDeletes();
            });

            Schema::create('cursos', function (Blueprint $table) {
                $table->bigIncrements('id');
                $table->bigInteger('aula_id')->unsigned();
                $table->bigInteger('paralelo_id')->unsigned();
                $table->bigInteger('nivel_id')->unsigned();
                $table->bigInteger('turno_id')->unsigned();
                $table->foreign('aula_id')->references('id')->on('aulas');
                $table->foreign('paralelo_id')->references('id')->on('paralelos');
                $table->foreign('nivel_id')->references('id')->on('niveles');
                $table->foreign('turno_id')->references('id')->on('turnos');
                $table->timestamps();
                $table->softDeletes();
            });

            Schema::create('horarios', function (Blueprint $table) {
                $table->bigIncrements('id');
                $table->bigInteger('aula_id')->unsigned();
                $table->bigInteger('hora_id')->unsigned();
                $table->bigInteger('curso_id')->unsigned();
                $table->boolean('estado')->default(false);
                $table->foreign('aula_id')->references('id')->on('aulas');
                $table->foreign('hora_id')->references('id')->on('horas');
                $table->foreign('curso_id')->references('id')->on('cursos');
                $table->timestamps();
                $table->softDeletes();
            });

            Schema::create('materias', function (Blueprint $table) {
                $table->bigIncrements('id');
                $table->string('materia');
                $table->string('sigla');
                $table->string('tipo');
                $table->bigInteger('carrera_id')->unsigned();
                $table->bigInteger('nivel_id')->unsigned();
                $table->boolean('estado')->default(false);
                $table->foreign('carrera_id')->references('id')->on('carreras');
                $table->foreign('nivel_id')->references('id')->on('niveles');
                $table->timestamps();
                $table->softDeletes();
            });

            Schema::create('aula_materia', function (Blueprint $table) {
                $table->bigIncrements('id');
                $table->bigInteger('aula_id')->unsigned();
                $table->bigInteger('materia_id')->unsigned();
                $table->foreign('aula_id')->references('id')->on('aulas');
                $table->foreign('materia_id')->references('id')->on('materias');
                $table->timestamps();
                $table->softDeletes();
            });

            // Schema::create('usuarios', function (Blueprint $table) {
            //     $table->bigIncrements('id');
            //     $table->string('usuario')->unique();
            //     $table->string('password');
            //     $table->bigInteger('rol_id')->unsigned();
            //     $table->foreign('rol_id')->references('id')->on('roles');
            //     $table->rememberToken();
            //     $table->timestamps();
            //     $table->softDeletes();
            // });
            Schema::create('users', function (Blueprint $table) {
                $table->bigIncrements('id');
                $table->string('usuario')->unique();
                $table->string('password');
                $table->bigInteger('rol_id')->unsigned();
                $table->foreign('rol_id')->references('id')->on('roles');
                $table->rememberToken();
                $table->timestamps();
            });

            Schema::create('docentes', function (Blueprint $table) {
                $table->bigIncrements('id');
                $table->bigInteger('item')->unsigned()->nullable(); //
                $table->string('ci')->nullable(); //identificación del ci
                $table->bigInteger('expedido')->unsigned();    //expedido
                $table->string('aPaterno')->nullable();
                $table->string('aMaterno')->nullable();
                $table->string('nombre')->nullable();
                $table->date('fechaNacimiento')->nullable();
                $table->enum('genero', ['M', 'F']);
                $table->enum('estadoCivil', ['S', 'C', 'V']);
                $table->date('fechaIngreso')->nullable();
                $table->string('correo')->unique()->nullable();
                $table->string('direccion')->nullable();
                $table->string('telefono')->nullable();
                $table->string('celular')->nullable();
                $table->bigInteger('usuario_id')->unsigned();
                $table->foreign('usuario_id')->references('id')->on('users');
                $table->foreign('expedido')->references('id')->on('departamentos');
                $table->rememberToken();
                $table->timestamps();
                $table->softDeletes();
            });

            Schema::create('curso_docente', function (Blueprint $table) {
                $table->bigIncrements('id');
                $table->bigInteger('curso_id')->unsigned();
                $table->bigInteger('docente_id')->unsigned();
                $table->bigInteger('materia_id')->unsigned()->nullable();
                $table->foreign('materia_id')->references('id')->on('materias');
                $table->foreign('curso_id')->references('id')->on('cursos');
                $table->foreign('docente_id')->references('id')->on('docentes');
                $table->timestamps();
                $table->softDeletes();
            });

            Schema::create('carrera_docente', function (Blueprint $table) {
                $table->bigIncrements('id');
                $table->bigInteger('carrera_id')->unsigned();
                $table->bigInteger('docente_id')->unsigned();
                $table->foreign('carrera_id')->references('id')->on('carreras');
                $table->foreign('docente_id')->references('id')->on('docentes');
                $table->timestamps();
                $table->softDeletes();
            });

            Schema::create('docente_materia', function (Blueprint $table) {
                $table->bigIncrements('id');
                $table->bigInteger('docente_id')->unsigned();
                $table->bigInteger('materia_id')->unsigned();
                $table->foreign('docente_id')->references('id')->on('docentes');
                $table->foreign('materia_id')->references('id')->on('materias');
                $table->timestamps();
                $table->softDeletes();
            });

            Schema::create('administrativos', function (Blueprint $table) {
                $table->bigIncrements('id');
                $table->bigInteger('item')->unsigned()->nullable(); //
                $table->string('ci')->nullable(); //identificación del ci
                $table->bigInteger('expedido')->unsigned();    //expedido
                $table->string('aPaterno')->nullable();
                $table->string('aMaterno')->nullable();
                $table->string('nombre')->nullable();
                $table->date('fechaNacimiento')->nullable();
                $table->enum('genero', ['M', 'F']);
                $table->enum('estadoCivil', ['S', 'C', 'V']);
                $table->date('fechaIngreso')->nullable();
                $table->string('correo')->unique()->nullable();
                $table->string('direccion')->nullable();
                $table->string('telefono')->nullable();
                $table->string('celular')->nullable();
                $table->bigInteger('usuario_id')->unsigned();
                $table->bigInteger('carrera_id')->unsigned();
                $table->foreign('usuario_id')->references('id')->on('users');
                $table->foreign('carrera_id')->references('id')->on('carreras');
                $table->foreign('expedido')->references('id')->on('departamentos');
                $table->rememberToken();
                $table->timestamps();
                $table->softDeletes();
            });

            Schema::create('estudiantes', function (Blueprint $table) {
                $table->bigIncrements('id');
                $table->bigInteger('matricula')->unsigned()->nullable(); //
                $table->string('ci')->nullable(); //identificación del ci
                $table->bigInteger('expedido')->unsigned();    //expedido
                $table->string('aPaterno')->nullable();
                $table->string('aMaterno')->nullable();
                $table->string('nombre')->nullable();
                $table->date('fechaNacimiento')->nullable();
                $table->enum('genero', ['M', 'F']);
                $table->enum('estadoCivil', ['S', 'C', 'V']);
                $table->string('correo')->unique()->nullable();
                $table->string('direccion')->nullable();
                $table->string('telefono')->nullable();
                $table->string('celular')->nullable();
                $table->enum('pensum', ['ANTIGUO', 'NUEVO'])->default('NUEVO');
                $table->bigInteger('usuario_id')->unsigned();
                $table->foreign('usuario_id')->references('id')->on('users');
                $table->foreign('expedido')->references('id')->on('departamentos');
                $table->rememberToken();
                $table->timestamps();
                $table->softDeletes();
            });

            Schema::create('carrera_estudiante', function (Blueprint $table) {
                $table->bigIncrements('id');
                $table->bigInteger('carrera_id')->unsigned();
                $table->bigInteger('estudiante_id')->unsigned();
                $table->foreign('carrera_id')->references('id')->on('carreras');
                $table->foreign('estudiante_id')->references('id')->on('estudiantes');
                $table->timestamps();
                $table->softDeletes();
            });

            Schema::create('periodos', function (Blueprint $table) {
                $table->bigIncrements('id');
                $table->string('numeral');
                $table->string('literal');
                $table->string('periodo');
                $table->timestamps();
                $table->softDeletes();
            });

            Schema::create('curso_estudiante', function (Blueprint $table) {
                $table->bigIncrements('id');
                $table->bigInteger('curso_id')->unsigned();
                $table->bigInteger('estudiante_id')->unsigned();
                $table->date('fecha_ins');
                $table->boolean('estado')->default(false);
                $table->foreign('curso_id')->references('id')->on('cursos');
                $table->foreign('estudiante_id')->references('id')->on('estudiantes');
                $table->timestamps();
                $table->softDeletes();
            });

            Schema::create('administrativo_turno', function (Blueprint $table) {
                $table->bigIncrements('id');
                $table->bigInteger('administrativo_id')->unsigned();
                $table->bigInteger('turno_id')->unsigned();
                $table->foreign('administrativo_id')->references('id')->on('administrativos');
                $table->foreign('turno_id')->references('id')->on('turnos');
                $table->timestamps();
                $table->softDeletes();
            });

            Schema::create('docente_turno', function (Blueprint $table) {
                $table->bigIncrements('id');
                $table->bigInteger('docente_id')->unsigned();
                $table->bigInteger('turno_id')->unsigned();
                $table->foreign('docente_id')->references('id')->on('docentes');
                $table->foreign('turno_id')->references('id')->on('turnos');
                $table->timestamps();
                $table->softDeletes();
            });

            Schema::create('tri_notas', function (Blueprint $table) {
                $table->bigIncrements('id');
                $table->Integer('asistencia')->nullable();
                $table->Integer('control_lectura')->nullable();
                $table->Integer('investigacion_productiva')->nullable();
                $table->Integer('participacion_constructiva')->nullable();
                $table->Integer('taller_laboratorios')->nullable();
                $table->Integer('evaluacion')->nullable();
                $table->Integer('puntaje_total')->nullable();
                $table->Integer('segundo_turno')->nullable();
                $table->string('observacion')->nullable();
                $table->bigInteger('estudiante_id')->unsigned();
                $table->bigInteger('materia_id')->unsigned();
                $table->bigInteger('periodo_id')->unsigned();
                $table->foreign('estudiante_id')->references('id')->on('estudiantes');
                $table->foreign('materia_id')->references('id')->on('materias');
                $table->foreign('periodo_id')->references('id')->on('periodos');
                $table->timestamps();
                $table->softDeletes();
            });

            Schema::create('bi_notas', function (Blueprint $table) {
                $table->bigIncrements('id');
                $table->Integer('asistencia')->nullable();
                $table->Integer('investigacion_productiva')->nullable();
                $table->Integer('participacion_constructiva')->nullable();
                $table->Integer('taller_laboratorios')->nullable();
                $table->Integer('evaluacion')->nullable();
                $table->Integer('puntaje_total')->nullable();
                $table->Integer('segundo_turno')->nullable();
                $table->string('observacion')->nullable();
                $table->bigInteger('estudiante_id')->unsigned();
                $table->bigInteger('materia_id')->unsigned();
                $table->bigInteger('periodo_id')->unsigned();
                $table->foreign('estudiante_id')->references('id')->on('estudiantes');
                $table->foreign('materia_id')->references('id')->on('materias');
                $table->foreign('periodo_id')->references('id')->on('periodos');
                $table->timestamps();
                $table->softDeletes();
            });

            Schema::create('postulantes', function (Blueprint $table) {
                $table->bigIncrements('id');
                $table->string('ci')->unique()->nullable(); //identificación del ci
                $table->bigInteger('expedido')->unsigned();    //expedido
                $table->string('aPaterno')->nullable();
                $table->string('aMaterno')->nullable();
                $table->string('nombre')->nullable();
                $table->date('fechaNacimiento')->nullable();
                $table->enum('genero', ['M', 'F']);
                $table->enum('estadoCivil', ['S', 'C', 'V']);
                $table->string('correo')->unique()->nullable();
                $table->string('direccion')->nullable();
                $table->string('telefono')->nullable();
                $table->string('celular')->nullable();
                $table->Integer('nota')->nullable();
                $table->bigInteger('usuario_id')->unsigned();
                $table->bigInteger('carrera_id')->unsigned();
                $table->bigInteger('turno_id')->unsigned();
                $table->foreign('usuario_id')->references('id')->on('users');
                $table->foreign('carrera_id')->references('id')->on('carreras');
                $table->foreign('turno_id')->references('id')->on('turnos');
                $table->foreign('expedido')->references('id')->on('departamentos');
                $table->rememberToken();
                $table->timestamps();
                $table->softDeletes();
            });
    
            Schema::create('documentos', function (Blueprint $table) {
                $table->bigIncrements('id');
                $table->string('documento_ci')->nullable();
                $table->string('certificadoNacimiento')->nullable();
                $table->string('tituloBachiller')->nullable();
                $table->string('depositoBancario')->nullable();
                $table->bigInteger('postulante_id')->unsigned();
                $table->foreign('postulante_id')->references('id')->on('postulantes');
                $table->timestamps();
                $table->softDeletes();
            });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
        Schema::drop('roles');
        Schema::drop('departamentos');
        Schema::drop('carreras');
        Schema::drop('paralelos');
        Schema::drop('turnos');
        Schema::drop('horas');
        Schema::drop('niveles');
        Schema::drop('aulas');
        Schema::drop('cursos');
        Schema::drop('horarios');
        Schema::drop('materias');
        Schema::drop('materia_aula');
        Schema::drop('users');
        Schema::drop('docentes');
        Schema::drop('docente_curso');
        Schema::drop('docente_carrera');
        Schema::drop('docente_materia');
        Schema::drop('administrativos');
        Schema::drop('estudiantes');
        Schema::drop('periodos');
        Schema::drop('curso_estudiante');
        Schema::drop('administrativo_turno');
        Schema::drop('docente_turno');
        Schema::drop('tri_notas');
        Schema::drop('bi_notas');
        Schema::drop('postulantes');
        Schema::drop('documentos');
    }
}
