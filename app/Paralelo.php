<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Paralelo extends Model
{
    //
    public function cursos()
    {
        return $this->hasMany('App\Curso');
    }
}
