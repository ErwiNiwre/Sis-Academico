<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tri_nota extends Model
{
    //
    public function materias()
    {
        return $this->belongsTo('App\Materia');
    }

    public function estudiantes()
    {
        return $this->belongsTo('App\Estudiante');
    }

    public function periodos()
    {
        return $this->belongsTo('App\Periodo');
    }
}
