<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Administrativo extends Model
{
    //  
    public function carreras()
    {
        return $this->belongsTo('App\Carrera');
    }

    public function usuarios()
    {
        return $this->belongsTo('App\User');
    }

    public function departamentos()
    {
        return $this->belongsTo('App\Departamento');
    }

    public function turnos()
    {
        return $this->belongsToMany('App\Turno','administrativo_turno','administrativo_id','turno_id')->withTimestamps();;
    }
}
