<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
// use Illuminate\Database\Eloquent\SoftDeletes;

class Estudiante extends Model
{
    //
    // use SoftDeletes;

    // protected $fillable = [
    //     'matricula',
    //     'ci',
    //     'aPaterno',
    //     'aMaterno',
    //     'nombre',
    //     'fechaNacimiento',
    //     'genero',
    //     'estadoCivil',
    //     'correo',
    //     'direccion',
    //     'telefono',
    //     'celular',
    //     'pensum',
    //     'usuario_id'
    // ];

    public function usuarios()
    {
        return $this->belongsTo('App\User');
    }

    public function departamentos()
    {
        return $this->belongsTo('App\Departamento');
    }

    public function bi_notas()
    {
        return $this->hasMany('App\Bi_nota');
    }

    public function tri_notas()
    {
        return $this->hasMany('App\Tri_nota');
    }

    public function cursos()
    {
        return $this->belongsToMany('App\Curso','curso_estudiante','estudiante_id','curso_id')->withPivot('fecha_ins', 'estado')->withTimestamps();
    }

    public function carreras()
    {
        return $this->belongsToMany('App\Carrera','carrera_estudiante','estudiante_id' ,'carrera_id')->withTimestamps();
    }

    public function scopeSearche($query, $ci)
    {
        return $query->where('ci', 'LIKE', "%$ci%");
    }
}
