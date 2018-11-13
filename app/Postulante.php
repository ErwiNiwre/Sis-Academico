<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Postulante extends Model
{
    //
    public function usuarios()
    {
        return $this->belongsTo('App\User');
    }

    public function carreras()
    {
        return $this->belongsTo('App\Carrera');
    }

    public function turnos()
    {
        return $this->belongsTo('App\Turno');
    }

    public function departamentos()
    {
        return $this->belongsTo('App\Departamento');
    }

    public function documentos()
    {
        return $this->hasMany('App\Documentos');
    }

    public function scopeSearch($query, $ci)
    {
        return $query->where('ci', 'LIKE', "%$ci%");
    }

    public function scopeListacarrera($query, $carrera_id)
    {
        return $query->where('carrera_id', $carrera_id);
    }
}
