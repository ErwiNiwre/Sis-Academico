<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Hora extends Model
{
    //
    public function horarios()
    {
        return $this->hasMany('App\Horario');
    }
}
