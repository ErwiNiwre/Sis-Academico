<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Aula extends Model
{
    //
    public function cursos()
    {
        return $this->hasMany('App\Curso');
    }

    public function horarios()
    {
        return $this->hasMany('App\Horario');
    }

    public function materias()
    {
        return $this->belongsToMany('App\Materia','aula_materia','aula_id','materia_id');
    }
}
