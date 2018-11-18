<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cupo extends Model
{
    //
    public function carreras()
    {
        return $this->belongsTo('App\Carrera');
    }

    public function turnos()
    {
        return $this->belongsTo('App\Turno');
    }

}
