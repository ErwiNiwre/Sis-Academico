<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Carrera;
use App\Paralelo;
use App\User;
use App\Postulante;
use App\Cupo;
use App\Turno;
use App\Estudiante;
use phpDocumentor\Reflection\DocBlock\Tags\Return_;

class EstudiantesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return "fff";
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function inscribirPos()
    {
        $carreras=Carrera::all();
        $turnos=Turno::all();

        $datos = array(
            'carreras' => $carreras,
            // 'postulantes' => $postulantes,
            'turnos' => $turnos,
            // 'i' => $i,
            // 'cont' => $cont,
            // 'secr' => $secr,
            // 'sist' => $sist,
            // 'admi' => $admi,
            // 'come' => $come,
            // 'ling' => $ling,
            // 'mañana' => $mañana,
            // 'noche' => $noche,
            // 'cupos' => $cupos,
            // 'total' => $total
        );
        // return $mañana;
        // return $postulantes;
        return view('estudiantes.inscribirPost')->with($datos);
        // return "holaaaaaaaaa";
    }


     /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function inscripcionPostulante()
    {
        return "holaaaaaaaaaaaaaaaaaaa";
    }
}
