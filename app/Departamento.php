<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Departamento extends Model
{
    //
    public function docentes()
    {
        return $this->hasMany('App\Docente');
    }

    public function estudiantes()
    {
        return $this->hasMany('App\Estudiante');
    }

    public function administrativos()
    {
        return $this->hasMany('App\Administrativo');
    }

    public function postulantes()
    {
        return $this->hasMany('App\Postulante');
    }
}
