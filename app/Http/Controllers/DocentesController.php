<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// use Illuminate\Support\Facades\Request;
// use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Input;
use App\Bi_nota;
use App\Tri_nota;
use App\Docente;
use App\Estudiante;
use App\Turno;
use App\Carrera;
use App\Materia;
use App\Curso;
use App\Aula;
use \Storage;
use Excel;


class DocentesController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

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

    public function curso()
    {
        $docentes=Docente::findOrfail(1);
        $cursos=Curso::all();

        return $cursos->docentes;

    }

    public function form_cargar_nota()
    {
        $datos = array(
            // 'postulantes' => $postulantes,
            // 'usuario_id' => $usuario_id,
            // 'rol_id' => $rol_id,
            // 'carrera_id' => $carrera_id,
            // 'turno_id' => $turno_id,
            // 'documentos' => $documentos,
            // 'departamentos' => $departamentos
        );
        return view('notas.cargar_nota')->with($datos);
    }

    public function cargar_nota(Request $request)
    {
        $archivo = Input::file('archivo');
        $nombre_original = $archivo->getClientOriginalName();
        $archivo->move('archivos', $nombre_original);
        Excel::load("public/archivos/" . $nombre_original, function ($archi) {
            $resultado = $archi->get();
            foreach ($resultado as $key => $fila) {
                $bi_notas = Bi_nota::findOrfail($fila->id);
                $bi_notas->asistencia = $fila->asistencia;
                $bi_notas->investigacion_productiva = $fila->investigacion_productiva;
                $bi_notas->participacion_constructiva = $fila->participacion_constructiva;
                $bi_notas->taller_laboratorios = $fila->taller_laboratorios;
                $bi_notas->evaluacion = $fila->evaluacion;
                $bi_notas->puntaje_total = $fila->puntaje_total;
                $bi_notas->segundo_turno = $fila->segundo_turno;
                $bi_notas->observacion = $fila->observacion;
                $bi_notas->estudiante_id = $fila->estudiante_id;
                $bi_notas->materia_id = $fila->materia_id;
                $bi_notas->periodo_id = $fila->periodo_id;
                $bi_notas->save();
                // echo $value->id.'<br>';
            }
        })->get();
        // return 
    }
    
}
