<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'usuario',
        'password',
        'rol_id'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function docentes()
    {
        return $this->hasMany('App\Docente');
    }

    public function administrativos()
    {
        return $this->hasMany('App\Administrativo');
    }

    public function estudiantes()
    {
        return $this->hasMany('App\Estudiante');
    }

    public function postulantes()
    {
        return $this->hasMany('App\Postulante');
    }

    public function roles()
    {
        return $this->belongsTo('App\Rol');
    }
}
