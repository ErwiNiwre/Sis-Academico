<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Horario extends Model
{
    //
    public function cursos()
    {
        return $this->belongsTo('App\Curso');
    }

    public function aulas()
    {
        return $this->belongsTo('App\Aula');
    }

    public function horas()
    {
        return $this->belongsTo('App\Hora');
    }
}
