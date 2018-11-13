<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Materia extends Model
{
    //
    public function carreras()
    {
        return $this->belongsTo('App\Carrera');
    }

    public function niveles()
    {
        return $this->belongsTo('App\Nivel');
    }

    public function bi_notas()
    {
        return $this->hasMany('App\Bi_nota');
    }

    public function tri_notas()
    {
        return $this->hasMany('App\Tri_nota');
    }

    public function aulas()
    {
        return $this->belongsToMany('App\Aula','aula_materia','materia_id','aula_id');
    }

    public function docentes()
    {
        return $this->belongsToMany('App\Docente','docente_materia','docente_id','materia_id');
    }

    public function cursos()
    {
        return $this->belongsToMany('App\Curso','curso_docente','curso_id','materia_id');
    }
}
