<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Periodo extends Model
{
    //
    public function bi_notas()
    {
        return $this->hasMany('App\Bi_nota');
    }

    public function tri_notas()
    {
        return $this->hasMany('App\Tri_nota');
    }
}
