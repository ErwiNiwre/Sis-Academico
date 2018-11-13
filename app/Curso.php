<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Curso extends Model
{
    //
    public function horarios()
    {
        return $this->hasMany('App\Horario');
    }

    public function aulas()
    {
        return $this->belongsTo('App\Aula');
    }

    public function niveles()
    {
        return $this->belongsTo('App\Nivel');
    }

    public function paralelos()
    {
        return $this->belongsTo('App\Paralelo');
    }

    public function turnos()
    {
        return $this->belongsTo('App\Turno');
    }

    public function estudiantes()
    {
        return $this->belongsToMany('App\Estudiante','curso_estudiante','curso_id','estudiante_id');
    }

    public function docentes()
    {
        return $this->belongsToMany('App\Docente','curso_docente','curso_id','docente_id');
    }

    public function materias()
    {
        return $this->belongsToMany('App\Materia','curso_docente','curso_id','materia_id');
    }

    
}
