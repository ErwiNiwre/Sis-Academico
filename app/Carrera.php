<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Carrera extends Model
{
    //
    public function materias()
    {
        return $this->hasMany('App\Materia');
    }

    public function administrativos()
    {
        return $this->hasMany('App\Administrativo');
    }

    public function estudiantes()
    {
        return $this->belongsToMany('App\Estudiante','carrera_estudiante','carrera_id','estudiante_id')->withTimestamps();
    }

    public function docentes()
    {
        return $this->belongsToMany('App\Docente','carrera_docente','carrera_id','docente_id')->withTimestamps();;
    }

    public function postulantes()
    {
        return $this->hasMany('App\Postulante');
    }

    public function cupos()
    {
        return $this->hasMany('App\Cupo');
    }

    public function cursos()
    {
        return $this->hasMany('App\Curso');
    }

    public function aulas()
    {
        return $this->hasMany('App\Aula');
    }
}
