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
use App\Rol;
use App\Departamento;
use App\Materia;
use App\Curso;
use App\Nivel;
use App\Aula;
use App\Periodo;
use App\Bi_nota;
use Carbon\Carbon;
use phpDocumentor\Reflection\DocBlock\Tags\Return_;

class EstudiantesController extends Controller
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
    public function index(Request $request)
    {
        //
        $carreras = Carrera::all();
        $estudiantes = Estudiante::searche($request->ci)->orderBy('id', 'ASC')->paginate(5);
        $turnos = Turno::all();
        $i = 0;

        $total = Estudiante::count();

        // $cont = Estudiante::carreras()->where('id', '1')->count();
        // $secr = Estudiante::where('carrera_id', '2')->count();
        // $sist = Estudiante::where('carrera_id', '3')->count();
        // $admi = Estudiante::where('carrera_id', '4')->count();
        // $come = Estudiante::where('carrera_id', '5')->count();
        // $ling = Estudiante::where('carrera_id', '6')->count();

        // $mañana = Estudiante::where('turno_id', '1')->count();
        // $noche = Estudiante::where('turno_id', '2')->count();

        // $postulantes->each(function($postulantes){
        //     $postulantes->carreras;
        //     $postulantes->turnos;
        // });

        $datos = array(
            'carreras' => $carreras,
            'estudiantes' => $estudiantes,
            'turnos' => $turnos,
            'i' => $i,
            // 'cont' => $cont,
            // 'secr' => $secr,
            // 'sist' => $sist,
            // 'admi' => $admi,
            // 'come' => $come,
            // 'ling' => $ling,
            // 'mañana' => $mañana,
            // 'noche' => $noche,
            // 'cupos' => $cupos,
            'total' => $total
        );
        // return $mañana;
        // return $postulantes;
        return view('estudiantes.estudiante')->with($datos);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $roles = Rol::all();
        $departamentos = Departamento::all();
        $carreras = Carrera::all();
        $turnos = Turno::all();

        $datos = array(
            'departamentos' => $departamentos,
            'roles' => $roles,
            'carreras' => $carreras,
            'turnos' => $turnos
        );
        // return $datos;
        return view('postulantes.postulante_registro')->with($datos);
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
        $estudiantes = Estudiante::findOrfail($id);
        $departamentos = Departamento::where('id', $estudiantes->expedido)->first();
        $carreras = Carrera::all();
        $turnos = Turno::all();
        $paralelos = Paralelo::all();
        $cursos = Curso::all();
        $aulas = Aula::all();
        $materias = Materia::all();
        $niveles = Nivel::all();
        $sw = 0;
        $datos = array(
            'estudiantes' => $estudiantes,
            'turnos' => $turnos,
            'paralelos' => $paralelos,
            'cursos' => $cursos,
            'aulas' => $aulas,
            'materias' => $materias,
            'niveles' => $niveles,
            'departamentos' => $departamentos,
            'sw' => $sw
        );
        // return $usuarios;
        return view('estudiantes.estudiante_datos')->with($datos);
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
        $carreras = Carrera::all();
        $turnos = Turno::all();

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
        $cupoContaM = Cupo::where('carrera_id', 1)->where('turno_id', 1)->first();
        $cupoContaN = Cupo::where('carrera_id', 1)->where('turno_id', 2)->first();

        $cupoSecreM = Cupo::where('carrera_id', 2)->where('turno_id', 1)->first();
        $cupoSecreN = Cupo::where('carrera_id', 2)->where('turno_id', 2)->first();

        $cupoSisteM = Cupo::where('carrera_id', 3)->where('turno_id', 1)->first();
        $cupoSisteN = Cupo::where('carrera_id', 3)->where('turno_id', 2)->first();
        // $materiasSis = Materia::where('carrera_id', $cupoSisteM->carrera_id)->where('nivel_id', $cupoSisteM->nivel)->where('tipo', "BIMESTRE")->get();
        
        // $niveles = Nivel::where('id', $cupoSisteM->nivel)->first();
        // $paralelos = Paralelo::all();
        // $aulasSis = Aula::where('carrera_id', 3)->get();

        $cupoAdminM = Cupo::where('carrera_id', 4)->where('turno_id', 1)->first();
        $cupoAdminN = Cupo::where('carrera_id', 4)->where('turno_id', 2)->first();

        $cupoComerM = Cupo::where('carrera_id', 5)->where('turno_id', 1)->first();
        $cupoComerN = Cupo::where('carrera_id', 5)->where('turno_id', 2)->first();

        $cupoLinguM = Cupo::where('carrera_id', 6)->where('turno_id', 1)->first();
        $cupoLinguN = Cupo::where('carrera_id', 6)->where('turno_id', 2)->first();

        // $users = User::all();
        // return $users;
        $postulantesaproContaM = Postulante::where('carrera_id', $cupoContaM->carrera_id)->orderBy('nota', 'DESC')->get()->where('turno_id', $cupoContaM->turno_id)->where('estado', 'true')->take($cupoContaM->cantidad);
        $postulantesaproContaN = Postulante::where('carrera_id', $cupoContaN->carrera_id)->orderBy('nota', 'DESC')->get()->where('turno_id', $cupoContaN->turno_id)->where('estado', 'true')->take($cupoContaN->cantidad);

        $postulantesaproSecreM = Postulante::where('carrera_id', $cupoSecreM->carrera_id)->orderBy('nota', 'DESC')->get()->where('turno_id', $cupoSecreM->turno_id)->where('estado', 'true')->take($cupoSecreM->cantidad);
        $postulantesaproSecreN = Postulante::where('carrera_id', $cupoSecreN->carrera_id)->orderBy('nota', 'DESC')->get()->where('turno_id', $cupoSecreN->turno_id)->where('estado', 'true')->take($cupoSecreN->cantidad);

        $postulantesaproSisteM = Postulante::where('carrera_id', $cupoSisteM->carrera_id)->orderBy('nota', 'DESC')->get()->where('turno_id', $cupoSisteM->turno_id)->where('estado', 'true')->take($cupoSisteM->cantidad);
        $postulantesaproSisteN = Postulante::where('carrera_id', $cupoSisteN->carrera_id)->orderBy('nota', 'DESC')->get()->where('turno_id', $cupoSisteN->turno_id)->where('estado', 'true')->take($cupoSisteN->cantidad);

        $postulantesaproAdminM = Postulante::where('carrera_id', $cupoAdminM->carrera_id)->orderBy('nota', 'DESC')->get()->where('turno_id', $cupoAdminM->turno_id)->where('estado', 'true')->take($cupoAdminM->cantidad);
        $postulantesaproAdminN = Postulante::where('carrera_id', $cupoAdminN->carrera_id)->orderBy('nota', 'DESC')->get()->where('turno_id', $cupoAdminN->turno_id)->where('estado', 'true')->take($cupoAdminN->cantidad);

        $postulantesaproComerM = Postulante::where('carrera_id', $cupoComerM->carrera_id)->orderBy('nota', 'DESC')->get()->where('turno_id', $cupoComerM->turno_id)->where('estado', 'true')->take($cupoComerM->cantidad);
        $postulantesaproComerN = Postulante::where('carrera_id', $cupoComerN->carrera_id)->orderBy('nota', 'DESC')->get()->where('turno_id', $cupoComerN->turno_id)->where('estado', 'true')->take($cupoComerN->cantidad);

        $postulantesaproLinguM = Postulante::where('carrera_id', $cupoLinguM->carrera_id)->orderBy('nota', 'DESC')->get()->where('turno_id', $cupoLinguM->turno_id)->where('estado', 'true')->take($cupoLinguM->cantidad);
        $postulantesaproLinguN = Postulante::where('carrera_id', $cupoLinguN->carrera_id)->orderBy('nota', 'DESC')->get()->where('turno_id', $cupoLinguN->turno_id)->where('estado', 'true')->take($cupoLinguN->cantidad);

        // Contabilidad Mañana
        $conM = 0;
        $swconM = 0;
        foreach ($postulantesaproContaM as $contaM) {
            if ($contaM->estado) {
                $contaM->estado = false;
                $contaM->save();
                $userContaM = User::where('id', $contaM->usuario_id)->first();
                $userContaM->rol_id = 6;
                $userContaM->save();

                $estudiante = new Estudiante;
                // $estudiante->matricula
                $estudiante->ci = $contaM->ci;
                $estudiante->expedido = $contaM->expedido;
                $estudiante->aPaterno = $contaM->aPaterno;
                $estudiante->aMaterno = $contaM->aMaterno;
                $estudiante->nombre = $contaM->nombre;
                $estudiante->fechaNacimiento = $contaM->fechaNacimiento;
                $estudiante->genero = $contaM->genero;
                $estudiante->estadoCivil = $contaM->estadoCivil;
                $estudiante->correo = $contaM->correo;
                $estudiante->direccion = $contaM->direccion;
                $estudiante->telefono = $contaM->telefono;
                $estudiante->celular = $contaM->celular;
                $estudiante->pensum = "NUEVO";

                $usuario_id = User::where('usuario', '=', $contaM->ci)->first();
                $estudiante->usuario_id = $usuario_id->id;

                $estudiante->save();
                $estudiante->carreras()->sync(1);

                $conM = $conM + 1;
                $estado = true;
                $fecha_ins = Carbon::now()->toDateString();
                if ($conM <= $cupoContaM->paralelos_cant) {
                    if ($swconM == 0) {
                        $cursoCon = new Curso;
                        $cursoCon->aula_id = $conM;
                        $cursoCon->paralelo_id = $conM;
                        $cursoCon->nivel_id = $cupoContaM->nivel;
                        $cursoCon->turno_id = $cupoContaM->turno_id;
                        $cursoCon->carrera_id = $cupoContaM->carrera_id;

                        $cursoCon->save();

                        $curso = Curso::where('paralelo_id', $conM)->where('turno_id', 1)->where('carrera_id', 1)->first();
                        $estudiante->cursos()->attach($curso->id, ['fecha_ins' => $fecha_ins, 'estado' => $estado]);
                        $materiasCon = Materia::where('carrera_id', $cupoContaM->carrera_id)->where('nivel_id', $cupoContaM->nivel)->where('tipo', "BIMESTRE")->get();
                        foreach ($materiasCon as $materiacm) {
                            $aulas = Aula::where('id', $conM)->first();
                            $aulas->materias()->attach($materiacm->id);
                            // Primer Bimestre
                            $bi_notas1 = new Bi_nota;
                            $bi_notas1->asistencia = 0;
                            $bi_notas1->investigacion_productiva = 0;
                            $bi_notas1->participacion_constructiva = 0;
                            $bi_notas1->taller_laboratorios = 0;
                            $bi_notas1->evaluacion = 0;
                            $bi_notas1->puntaje_total = 0;
                            $bi_notas1->segundo_turno = 0;
                            // $bi_notas1->observacion=null;
                            $bi_notas1->estudiante_id = $estudiante->id;
                            $bi_notas1->materia_id = $materiacm->id;
                            $bi_notas1->periodo_id = 4;
                            $bi_notas1->save();

                            // Segundo Bimestre
                            $bi_notas2 = new Bi_nota;
                            $bi_notas2->asistencia = 0;
                            $bi_notas2->investigacion_productiva = 0;
                            $bi_notas2->participacion_constructiva = 0;
                            $bi_notas2->taller_laboratorios = 0;
                            $bi_notas2->evaluacion = 0;
                            $bi_notas2->puntaje_total = 0;
                            $bi_notas2->segundo_turno = 0;
                            // $bi_notas2->observacion=null;
                            $bi_notas2->estudiante_id = $estudiante->id;
                            $bi_notas2->materia_id = $materiacm->id;
                            $bi_notas2->periodo_id = 5;
                            $bi_notas2->save();

                            // Tercer Bimestre
                            $bi_notas3 = new Bi_nota;
                            $bi_notas3->asistencia = 0;
                            $bi_notas3->investigacion_productiva = 0;
                            $bi_notas3->participacion_constructiva = 0;
                            $bi_notas3->taller_laboratorios = 0;
                            $bi_notas3->evaluacion = 0;
                            $bi_notas3->puntaje_total = 0;
                            $bi_notas3->segundo_turno = 0;
                            // $bi_notas3->observacion=null;
                            $bi_notas3->estudiante_id = $estudiante->id;
                            $bi_notas3->materia_id = $materiacm->id;
                            $bi_notas3->periodo_id = 6;
                            $bi_notas3->save();

                            // Cuarto Bimestre
                            $bi_notas4 = new Bi_nota;
                            $bi_notas4->asistencia = 0;
                            $bi_notas4->investigacion_productiva = 0;
                            $bi_notas4->participacion_constructiva = 0;
                            $bi_notas4->taller_laboratorios = 0;
                            $bi_notas4->evaluacion = 0;
                            $bi_notas4->puntaje_total = 0;
                            $bi_notas4->segundo_turno = 0;
                            // $bi_notas4->observacion=null;
                            $bi_notas4->estudiante_id = $estudiante->id;
                            $bi_notas4->materia_id = $materiacm->id;
                            $bi_notas4->periodo_id = 7;
                            $bi_notas4->save();
                        }
                    } else {
                        $curso = Curso::where('paralelo_id', $conM)->where('turno_id', 1)->where('carrera_id', 1)->first();
                        $estudiante->cursos()->attach($curso->id, ['fecha_ins' => $fecha_ins, 'estado' => $estado]);
                    }
                } else {
                    $conM = 1;
                    $swconM = 1;
                    $curso = Curso::where('paralelo_id', 1)->where('turno_id', 1)->where('carrera_id', 1)->first();
                    $estudiante->cursos()->attach($curso->id, ['fecha_ins' => $fecha_ins, 'estado' => $estado]);
                }
            } else {
                return "ya fueron registrados";
            }
        }
        // return $materiacm;

        // Contabilidad Noche
        $conN = 0;
        $swconN = 0;
        foreach ($postulantesaproContaN as $contaN) {
            if ($contaN->estado) {
                $contaN->estado = false;
                $contaN->save();
                $userContaN = User::where('id', $contaN->usuario_id)->first();
                $userContaN->rol_id = 6;
                $userContaN->save();

                $estudiante = new Estudiante;
                // $estudiante->matricula
                $estudiante->ci = $contaN->ci;
                $estudiante->expedido = $contaN->expedido;
                $estudiante->aPaterno = $contaN->aPaterno;
                $estudiante->aMaterno = $contaN->aMaterno;
                $estudiante->nombre = $contaN->nombre;
                $estudiante->fechaNacimiento = $contaN->fechaNacimiento;
                $estudiante->genero = $contaN->genero;
                $estudiante->estadoCivil = $contaN->estadoCivil;
                $estudiante->correo = $contaN->correo;
                $estudiante->direccion = $contaN->direccion;
                $estudiante->telefono = $contaN->telefono;
                $estudiante->celular = $contaN->celular;
                $estudiante->pensum = "NUEVO";

                $usuario_id = User::where('usuario', '=', $contaN->ci)->first();
                $estudiante->usuario_id = $usuario_id->id;

                $estudiante->save();
                $estudiante->carreras()->sync(1);

                $conN = $conN + 1;
                $estado = true;
                $fecha_ins = Carbon::now()->toDateString();
                if ($conN <= $cupoContaN->paralelos_cant) {
                    if ($swconN == 0) {
                        $cursoCon = new Curso;
                        $cursoCon->aula_id = $conN;
                        $cursoCon->paralelo_id = $conN;
                        $cursoCon->nivel_id = $cupoContaN->nivel;
                        $cursoCon->turno_id = $cupoContaN->turno_id;
                        $cursoCon->carrera_id = $cupoContaN->carrera_id;

                        $cursoCon->save();

                        $curso = Curso::where('paralelo_id', $conN)->where('turno_id', 2)->where('carrera_id', 1)->first();
                        $estudiante->cursos()->attach($curso->id, ['fecha_ins' => $fecha_ins, 'estado' => $estado]);
                        $materiasCon = Materia::where('carrera_id', $cupoContaN->carrera_id)->where('nivel_id', $cupoContaN->nivel)->where('tipo', "BIMESTRE")->get();
                        foreach ($materiasCon as $materia) {
                            $aulas = Aula::where('id', $conN)->first();
                            $aulas->materias()->attach($materia->id);
                            // Primer Bimestre
                            $bi_notas1 = new Bi_nota;
                            $bi_notas1->asistencia = 0;
                            $bi_notas1->investigacion_productiva = 0;
                            $bi_notas1->participacion_constructiva = 0;
                            $bi_notas1->taller_laboratorios = 0;
                            $bi_notas1->evaluacion = 0;
                            $bi_notas1->puntaje_total = 0;
                            $bi_notas1->segundo_turno = 0;
                            // $bi_notas1->observacion=null;
                            $bi_notas1->estudiante_id = $estudiante->id;
                            $bi_notas1->materia_id = $materia->id;
                            $bi_notas1->periodo_id = 4;
                            $bi_notas1->save();

                            // Segundo Bimestre
                            $bi_notas2 = new Bi_nota;
                            $bi_notas2->asistencia = 0;
                            $bi_notas2->investigacion_productiva = 0;
                            $bi_notas2->participacion_constructiva = 0;
                            $bi_notas2->taller_laboratorios = 0;
                            $bi_notas2->evaluacion = 0;
                            $bi_notas2->puntaje_total = 0;
                            $bi_notas2->segundo_turno = 0;
                            // $bi_notas2->observacion=null;
                            $bi_notas2->estudiante_id = $estudiante->id;
                            $bi_notas2->materia_id = $materia->id;
                            $bi_notas2->periodo_id = 5;
                            $bi_notas2->save();

                            // Tercer Bimestre
                            $bi_notas3 = new Bi_nota;
                            $bi_notas3->asistencia = 0;
                            $bi_notas3->investigacion_productiva = 0;
                            $bi_notas3->participacion_constructiva = 0;
                            $bi_notas3->taller_laboratorios = 0;
                            $bi_notas3->evaluacion = 0;
                            $bi_notas3->puntaje_total = 0;
                            $bi_notas3->segundo_turno = 0;
                            // $bi_notas3->observacion=null;
                            $bi_notas3->estudiante_id = $estudiante->id;
                            $bi_notas3->materia_id = $materia->id;
                            $bi_notas3->periodo_id = 6;
                            $bi_notas3->save();

                            // Cuarto Bimestre
                            $bi_notas4 = new Bi_nota;
                            $bi_notas4->asistencia = 0;
                            $bi_notas4->investigacion_productiva = 0;
                            $bi_notas4->participacion_constructiva = 0;
                            $bi_notas4->taller_laboratorios = 0;
                            $bi_notas4->evaluacion = 0;
                            $bi_notas4->puntaje_total = 0;
                            $bi_notas4->segundo_turno = 0;
                            // $bi_notas4->observacion=null;
                            $bi_notas4->estudiante_id = $estudiante->id;
                            $bi_notas4->materia_id = $materia->id;
                            $bi_notas4->periodo_id = 7;
                            $bi_notas4->save();
                        }
                    } else {
                        $curso = Curso::where('paralelo_id', $conM)->where('turno_id', 2)->where('carrera_id', 1)->first();
                        $estudiante->cursos()->attach($curso->id, ['fecha_ins' => $fecha_ins, 'estado' => $estado]);
                    }
                } else {
                    $conN = 1;
                    $swconN = 1;
                    $curso = Curso::where('paralelo_id', 1)->where('turno_id', 2)->where('carrera_id', 1)->first();
                    $estudiante->cursos()->attach($curso->id, ['fecha_ins' => $fecha_ins, 'estado' => $estado]);
                }

            } else {
                return "ya fueron registrados";
            }
        }

        // Secretariado Mañana
        $secM = 0;
        $swsecM = 0;
        foreach ($postulantesaproSecreM as $secreM) {
            if ($secreM->estado) {
                $secreM->estado = false;
                $secreM->save();
                $userSecreM = User::where('id', $secreM->usuario_id)->first();
                $userSecreM->rol_id = 6;
                $userSecreM->save();

                $estudiante = new Estudiante;
                // $estudiante->matricula
                $estudiante->ci = $secreM->ci;
                $estudiante->expedido = $secreM->expedido;
                $estudiante->aPaterno = $secreM->aPaterno;
                $estudiante->aMaterno = $secreM->aMaterno;
                $estudiante->nombre = $secreM->nombre;
                $estudiante->fechaNacimiento = $secreM->fechaNacimiento;
                $estudiante->genero = $secreM->genero;
                $estudiante->estadoCivil = $secreM->estadoCivil;
                $estudiante->correo = $secreM->correo;
                $estudiante->direccion = $secreM->direccion;
                $estudiante->telefono = $secreM->telefono;
                $estudiante->celular = $secreM->celular;
                $estudiante->pensum = "NUEVO";

                $usuario_id = User::where('usuario', '=', $secreM->ci)->first();
                $estudiante->usuario_id = $usuario_id->id;

                $estudiante->save();
                $estudiante->carreras()->sync(2);

                $secM = $secM + 1;
                $estado = true;
                $fecha_ins = Carbon::now()->toDateString();
                if ($secM <= $cupoSecreM->paralelos_cant) {
                    if ($swsecM == 0) {
                        $cursoSec = new Curso;
                        $cursoSec->aula_id = $secM;
                        $cursoSec->paralelo_id = $secM;
                        $cursoSec->nivel_id = $cupoSecreM->nivel;
                        $cursoSec->turno_id = $cupoSecreM->turno_id;
                        $cursoSec->carrera_id = $cupoSecreM->carrera_id;

                        $cursoSec->save();

                        $curso = Curso::where('paralelo_id', $secM)->where('turno_id', 1)->where('carrera_id', 2)->first();
                        $estudiante->cursos()->attach($curso->id, ['fecha_ins' => $fecha_ins, 'estado' => $estado]);
                        $materiasSec = Materia::where('carrera_id', $cupoSecreM->carrera_id)->where('nivel_id', $cupoSecreM->nivel)->where('tipo', "BIMESTRE")->get();
                        foreach ($materiasSec as $materia) {
                            $aulas = Aula::where('id', $secM)->first();
                            $aulas->materias()->attach($materia->id);
                            // Primer Bimestre
                            $bi_notas1 = new Bi_nota;
                            $bi_notas1->asistencia = 0;
                            $bi_notas1->investigacion_productiva = 0;
                            $bi_notas1->participacion_constructiva = 0;
                            $bi_notas1->taller_laboratorios = 0;
                            $bi_notas1->evaluacion = 0;
                            $bi_notas1->puntaje_total = 0;
                            $bi_notas1->segundo_turno = 0;
                            // $bi_notas1->observacion=null;
                            $bi_notas1->estudiante_id = $estudiante->id;
                            $bi_notas1->materia_id = $materia->id;
                            $bi_notas1->periodo_id = 4;
                            $bi_notas1->save();

                            // Segundo Bimestre
                            $bi_notas2 = new Bi_nota;
                            $bi_notas2->asistencia = 0;
                            $bi_notas2->investigacion_productiva = 0;
                            $bi_notas2->participacion_constructiva = 0;
                            $bi_notas2->taller_laboratorios = 0;
                            $bi_notas2->evaluacion = 0;
                            $bi_notas2->puntaje_total = 0;
                            $bi_notas2->segundo_turno = 0;
                            // $bi_notas2->observacion=null;
                            $bi_notas2->estudiante_id = $estudiante->id;
                            $bi_notas2->materia_id = $materia->id;
                            $bi_notas2->periodo_id = 5;
                            $bi_notas2->save();

                            // Tercer Bimestre
                            $bi_notas3 = new Bi_nota;
                            $bi_notas3->asistencia = 0;
                            $bi_notas3->investigacion_productiva = 0;
                            $bi_notas3->participacion_constructiva = 0;
                            $bi_notas3->taller_laboratorios = 0;
                            $bi_notas3->evaluacion = 0;
                            $bi_notas3->puntaje_total = 0;
                            $bi_notas3->segundo_turno = 0;
                            // $bi_notas3->observacion=null;
                            $bi_notas3->estudiante_id = $estudiante->id;
                            $bi_notas3->materia_id = $materia->id;
                            $bi_notas3->periodo_id = 6;
                            $bi_notas3->save();

                            // Cuarto Bimestre
                            $bi_notas4 = new Bi_nota;
                            $bi_notas4->asistencia = 0;
                            $bi_notas4->investigacion_productiva = 0;
                            $bi_notas4->participacion_constructiva = 0;
                            $bi_notas4->taller_laboratorios = 0;
                            $bi_notas4->evaluacion = 0;
                            $bi_notas4->puntaje_total = 0;
                            $bi_notas4->segundo_turno = 0;
                            // $bi_notas4->observacion=null;
                            $bi_notas4->estudiante_id = $estudiante->id;
                            $bi_notas4->materia_id = $materia->id;
                            $bi_notas4->periodo_id = 7;
                            $bi_notas4->save();
                        }
                    } else {
                        $curso = Curso::where('paralelo_id', $secM)->where('turno_id', 1)->where('carrera_id', 2)->first();
                        $estudiante->cursos()->attach($curso->id, ['fecha_ins' => $fecha_ins, 'estado' => $estado]);
                    }
                } else {
                    $secM = 1;
                    $swsecM = 1;
                    $curso = Curso::where('paralelo_id', 1)->where('turno_id', 1)->where('carrera_id', 2)->first();
                    $estudiante->cursos()->attach($curso->id, ['fecha_ins' => $fecha_ins, 'estado' => $estado]);
                }
            } else {
                return "ya fueron registrados";
            }
        }

        // Secretariado Noche
        $secN = 0;
        $swsecN = 0;
        foreach ($postulantesaproSecreN as $secreN) {
            if ($secreN->estado) {
                $secreN->estado = false;
                $secreN->save();
                $userSecreN = User::where('id', $secreN->usuario_id)->first();
                $userSecreN->rol_id = 6;
                $userSecreN->save();

                $estudiante = new Estudiante;
                // $estudiante->matricula
                $estudiante->ci = $secreN->ci;
                $estudiante->expedido = $secreN->expedido;
                $estudiante->aPaterno = $secreN->aPaterno;
                $estudiante->aMaterno = $secreN->aMaterno;
                $estudiante->nombre = $secreN->nombre;
                $estudiante->fechaNacimiento = $secreN->fechaNacimiento;
                $estudiante->genero = $secreN->genero;
                $estudiante->estadoCivil = $secreN->estadoCivil;
                $estudiante->correo = $secreN->correo;
                $estudiante->direccion = $secreN->direccion;
                $estudiante->telefono = $secreN->telefono;
                $estudiante->celular = $secreN->celular;
                $estudiante->pensum = "NUEVO";

                $usuario_id = User::where('usuario', '=', $secreN->ci)->first();
                $estudiante->usuario_id = $usuario_id->id;

                $estudiante->save();
                $estudiante->carreras()->sync(1);

                $secN = $secN + 1;
                $estado = true;
                $fecha_ins = Carbon::now()->toDateString();
                if ($secN <= $cupoSecreN->paralelos_cant) {
                    if ($swsecN == 0) {
                        $cursoSec = new Curso;
                        $cursoSec->aula_id = $secN;
                        $cursoSec->paralelo_id = $secN;
                        $cursoSec->nivel_id = $cupoSecreN->nivel;
                        $cursoSec->turno_id = $cupoSecreN->turno_id;
                        $cursoSec->carrera_id = $cupoSecreN->carrera_id;

                        $cursoSec->save();

                        $curso = Curso::where('paralelo_id', $secN)->where('turno_id', 2)->where('carrera_id', 2)->first();
                        $estudiante->cursos()->attach($curso->id, ['fecha_ins' => $fecha_ins, 'estado' => $estado]);
                        $materiasSec = Materia::where('carrera_id', $cupoSecreN->carrera_id)->where('nivel_id', $cupoSecreN->nivel)->where('tipo', "BIMESTRE")->get();
                        foreach ($materiasSec as $materia) {
                            $aulas = Aula::where('id', $secN)->first();
                            $aulas->materias()->attach($materia->id);
                            // Primer Bimestre
                            $bi_notas1 = new Bi_nota;
                            $bi_notas1->asistencia = 0;
                            $bi_notas1->investigacion_productiva = 0;
                            $bi_notas1->participacion_constructiva = 0;
                            $bi_notas1->taller_laboratorios = 0;
                            $bi_notas1->evaluacion = 0;
                            $bi_notas1->puntaje_total = 0;
                            $bi_notas1->segundo_turno = 0;
                            // $bi_notas1->observacion=null;
                            $bi_notas1->estudiante_id = $estudiante->id;
                            $bi_notas1->materia_id = $materia->id;
                            $bi_notas1->periodo_id = 4;
                            $bi_notas1->save();

                            // Segundo Bimestre
                            $bi_notas2 = new Bi_nota;
                            $bi_notas2->asistencia = 0;
                            $bi_notas2->investigacion_productiva = 0;
                            $bi_notas2->participacion_constructiva = 0;
                            $bi_notas2->taller_laboratorios = 0;
                            $bi_notas2->evaluacion = 0;
                            $bi_notas2->puntaje_total = 0;
                            $bi_notas2->segundo_turno = 0;
                            // $bi_notas2->observacion=null;
                            $bi_notas2->estudiante_id = $estudiante->id;
                            $bi_notas2->materia_id = $materia->id;
                            $bi_notas2->periodo_id = 5;
                            $bi_notas2->save();

                            // Tercer Bimestre
                            $bi_notas3 = new Bi_nota;
                            $bi_notas3->asistencia = 0;
                            $bi_notas3->investigacion_productiva = 0;
                            $bi_notas3->participacion_constructiva = 0;
                            $bi_notas3->taller_laboratorios = 0;
                            $bi_notas3->evaluacion = 0;
                            $bi_notas3->puntaje_total = 0;
                            $bi_notas3->segundo_turno = 0;
                            // $bi_notas3->observacion=null;
                            $bi_notas3->estudiante_id = $estudiante->id;
                            $bi_notas3->materia_id = $materia->id;
                            $bi_notas3->periodo_id = 6;
                            $bi_notas3->save();

                            // Cuarto Bimestre
                            $bi_notas4 = new Bi_nota;
                            $bi_notas4->asistencia = 0;
                            $bi_notas4->investigacion_productiva = 0;
                            $bi_notas4->participacion_constructiva = 0;
                            $bi_notas4->taller_laboratorios = 0;
                            $bi_notas4->evaluacion = 0;
                            $bi_notas4->puntaje_total = 0;
                            $bi_notas4->segundo_turno = 0;
                            // $bi_notas4->observacion=null;
                            $bi_notas4->estudiante_id = $estudiante->id;
                            $bi_notas4->materia_id = $materia->id;
                            $bi_notas4->periodo_id = 7;
                            $bi_notas4->save();
                        }
                    } else {
                        $curso = Curso::where('paralelo_id', $secN)->where('turno_id', 2)->where('carrera_id', 2)->first();
                        $estudiante->cursos()->attach($curso->id, ['fecha_ins' => $fecha_ins, 'estado' => $estado]);
                    }
                } else {
                    $secN = 1;
                    $swsecN = 1;
                    $curso = Curso::where('paralelo_id', 1)->where('turno_id', 2)->where('carrera_id', 2)->first();
                    $estudiante->cursos()->attach($curso->id, ['fecha_ins' => $fecha_ins, 'estado' => $estado]);
                }

            } else {
                return "ya fueron registrados";
            }
        }
        
        // Sistemas Mañana
        $sisM = 0;
        $swsisM = 0;
        foreach ($postulantesaproSisteM as $sisteM) {
            if ($sisteM->estado) {
                $sisteM->estado = false;
                $sisteM->save();
                $userSisteM = User::where('id', $sisteM->usuario_id)->first();
                $userSisteM->rol_id = 6;
                $userSisteM->save();

                $estudiante = new Estudiante;
                // $estudiante->matricula
                $estudiante->ci = $sisteM->ci;
                $estudiante->expedido = $sisteM->expedido;
                $estudiante->aPaterno = $sisteM->aPaterno;
                $estudiante->aMaterno = $sisteM->aMaterno;
                $estudiante->nombre = $sisteM->nombre;
                $estudiante->fechaNacimiento = $sisteM->fechaNacimiento;
                $estudiante->genero = $sisteM->genero;
                $estudiante->estadoCivil = $sisteM->estadoCivil;
                $estudiante->correo = $sisteM->correo;
                $estudiante->direccion = $sisteM->direccion;
                $estudiante->telefono = $sisteM->telefono;
                $estudiante->celular = $sisteM->celular;
                $estudiante->pensum = "NUEVO";

                $usuario_id = User::where('usuario', '=', $sisteM->ci)->first();
                $estudiante->usuario_id = $usuario_id->id;

                $estudiante->save();
                $estudiante->carreras()->sync(3);

                $sisM = $sisM + 1;
                $estado = true;
                $fecha_ins = Carbon::now()->toDateString();
                if ($sisM <= $cupoSisteM->paralelos_cant) {
                    if ($swsisM == 0) {
                        $cursoSis = new Curso;
                        $cursoSis->aula_id = $sisM;
                        $cursoSis->paralelo_id = $sisM;
                        $cursoSis->nivel_id = $cupoSisteM->nivel;
                        $cursoSis->turno_id = $cupoSisteM->turno_id;
                        $cursoSis->carrera_id = $cupoSisteM->carrera_id;

                        $cursoSis->save();

                        $curso = Curso::where('paralelo_id', $sisM)->where('turno_id', 1)->where('carrera_id', 3)->first();
                        $estudiante->cursos()->attach($curso->id, ['fecha_ins' => $fecha_ins, 'estado' => $estado]);
                        $materiasSis = Materia::where('carrera_id', $cupoSisteM->carrera_id)->where('nivel_id', $cupoSisteM->nivel)->where('tipo', "BIMESTRE")->get();
                        foreach ($materiasSis as $materia) {
                            $aulas = Aula::where('id', $sisM)->first();
                            $aulas->materias()->attach($materia->id);
                            // Primer Bimestre
                            $bi_notas1 = new Bi_nota;
                            $bi_notas1->asistencia = 0;
                            $bi_notas1->investigacion_productiva = 0;
                            $bi_notas1->participacion_constructiva = 0;
                            $bi_notas1->taller_laboratorios = 0;
                            $bi_notas1->evaluacion = 0;
                            $bi_notas1->puntaje_total = 0;
                            $bi_notas1->segundo_turno = 0;
                            // $bi_notas1->observacion=null;
                            $bi_notas1->estudiante_id = $estudiante->id;
                            $bi_notas1->materia_id = $materia->id;
                            $bi_notas1->periodo_id = 4;
                            $bi_notas1->save();

                            // Segundo Bimestre
                            $bi_notas2 = new Bi_nota;
                            $bi_notas2->asistencia = 0;
                            $bi_notas2->investigacion_productiva = 0;
                            $bi_notas2->participacion_constructiva = 0;
                            $bi_notas2->taller_laboratorios = 0;
                            $bi_notas2->evaluacion = 0;
                            $bi_notas2->puntaje_total = 0;
                            $bi_notas2->segundo_turno = 0;
                            // $bi_notas2->observacion=null;
                            $bi_notas2->estudiante_id = $estudiante->id;
                            $bi_notas2->materia_id = $materia->id;
                            $bi_notas2->periodo_id = 5;
                            $bi_notas2->save();

                            // Tercer Bimestre
                            $bi_notas3 = new Bi_nota;
                            $bi_notas3->asistencia = 0;
                            $bi_notas3->investigacion_productiva = 0;
                            $bi_notas3->participacion_constructiva = 0;
                            $bi_notas3->taller_laboratorios = 0;
                            $bi_notas3->evaluacion = 0;
                            $bi_notas3->puntaje_total = 0;
                            $bi_notas3->segundo_turno = 0;
                            // $bi_notas3->observacion=null;
                            $bi_notas3->estudiante_id = $estudiante->id;
                            $bi_notas3->materia_id = $materia->id;
                            $bi_notas3->periodo_id = 6;
                            $bi_notas3->save();

                            // Cuarto Bimestre
                            $bi_notas4 = new Bi_nota;
                            $bi_notas4->asistencia = 0;
                            $bi_notas4->investigacion_productiva = 0;
                            $bi_notas4->participacion_constructiva = 0;
                            $bi_notas4->taller_laboratorios = 0;
                            $bi_notas4->evaluacion = 0;
                            $bi_notas4->puntaje_total = 0;
                            $bi_notas4->segundo_turno = 0;
                            // $bi_notas4->observacion=null;
                            $bi_notas4->estudiante_id = $estudiante->id;
                            $bi_notas4->materia_id = $materia->id;
                            $bi_notas4->periodo_id = 7;
                            $bi_notas4->save();
                        }
                    } else {
                        $curso = Curso::where('paralelo_id', $sisM)->where('turno_id', 1)->where('carrera_id', 3)->first();
                        $estudiante->cursos()->attach($curso->id, ['fecha_ins' => $fecha_ins, 'estado' => $estado]);
                    }
                } else {
                    $sisM = 1;
                    $swsisM = 1;
                    $curso = Curso::where('paralelo_id', 1)->where('turno_id', 1)->where('carrera_id', 3)->first();
                    $estudiante->cursos()->attach($curso->id, ['fecha_ins' => $fecha_ins, 'estado' => $estado]);
                }

            } else {
                return "ya fueron registrados";
            }
        }
        
        // Sistemas Noche
        $sisN = 0;
        $swsisN = 0;
        foreach ($postulantesaproSisteN as $sisteN) {
            if ($sisteN->estado) {
                $sisteN->estado = false;
                $sisteN->save();
                $userSisteN = User::where('id', $sisteN->usuario_id)->first();
                $userSisteN->rol_id = 6;
                $userSisteN->save();

                $estudiante = new Estudiante;
                // $estudiante->matricula
                $estudiante->ci = $sisteN->ci;
                $estudiante->expedido = $sisteN->expedido;
                $estudiante->aPaterno = $sisteN->aPaterno;
                $estudiante->aMaterno = $sisteN->aMaterno;
                $estudiante->nombre = $sisteN->nombre;
                $estudiante->fechaNacimiento = $sisteN->fechaNacimiento;
                $estudiante->genero = $sisteN->genero;
                $estudiante->estadoCivil = $sisteN->estadoCivil;
                $estudiante->correo = $sisteN->correo;
                $estudiante->direccion = $sisteN->direccion;
                $estudiante->telefono = $sisteN->telefono;
                $estudiante->celular = $sisteN->celular;
                $estudiante->pensum = "NUEVO";

                $usuario_id = User::where('usuario', '=', $sisteN->ci)->first();
                $estudiante->usuario_id = $usuario_id->id;

                $estudiante->save();
                $estudiante->carreras()->sync(3);

                $sisN = $sisN + 1;
                $estado = true;
                $fecha_ins = Carbon::now()->toDateString();
                if ($sisN <= $cupoSisteN->paralelos_cant) {
                    if ($swsisN == 0) {
                        $cursoSis = new Curso;
                        $cursoSis->aula_id = $sisN;
                        $cursoSis->paralelo_id = $sisN;
                        $cursoSis->nivel_id = $cupoSisteN->nivel;
                        $cursoSis->turno_id = $cupoSisteN->turno_id;
                        $cursoSis->carrera_id = $cupoSisteN->carrera_id;

                        $cursoSis->save();

                        $curso = Curso::where('paralelo_id', $sisN)->where('turno_id', 2)->where('carrera_id', 3)->first();
                        $estudiante->cursos()->attach($curso->id, ['fecha_ins' => $fecha_ins, 'estado' => $estado]);
                        $materiasSis = Materia::where('carrera_id', $cupoSisteN->carrera_id)->where('nivel_id', $cupoSisteN->nivel)->where('tipo', "BIMESTRE")->get();
                        foreach ($materiasSis as $materia) {
                            $aulas = Aula::where('id', $sisN)->first();
                            $aulas->materias()->attach($materia->id);
                            // Primer Bimestre
                            $bi_notas1 = new Bi_nota;
                            $bi_notas1->asistencia = 0;
                            $bi_notas1->investigacion_productiva = 0;
                            $bi_notas1->participacion_constructiva = 0;
                            $bi_notas1->taller_laboratorios = 0;
                            $bi_notas1->evaluacion = 0;
                            $bi_notas1->puntaje_total = 0;
                            $bi_notas1->segundo_turno = 0;
                            // $bi_notas1->observacion=null;
                            $bi_notas1->estudiante_id = $estudiante->id;
                            $bi_notas1->materia_id = $materia->id;
                            $bi_notas1->periodo_id = 4;
                            $bi_notas1->save();

                            // Segundo Bimestre
                            $bi_notas2 = new Bi_nota;
                            $bi_notas2->asistencia = 0;
                            $bi_notas2->investigacion_productiva = 0;
                            $bi_notas2->participacion_constructiva = 0;
                            $bi_notas2->taller_laboratorios = 0;
                            $bi_notas2->evaluacion = 0;
                            $bi_notas2->puntaje_total = 0;
                            $bi_notas2->segundo_turno = 0;
                            // $bi_notas2->observacion=null;
                            $bi_notas2->estudiante_id = $estudiante->id;
                            $bi_notas2->materia_id = $materia->id;
                            $bi_notas2->periodo_id = 5;
                            $bi_notas2->save();

                            // Tercer Bimestre
                            $bi_notas3 = new Bi_nota;
                            $bi_notas3->asistencia = 0;
                            $bi_notas3->investigacion_productiva = 0;
                            $bi_notas3->participacion_constructiva = 0;
                            $bi_notas3->taller_laboratorios = 0;
                            $bi_notas3->evaluacion = 0;
                            $bi_notas3->puntaje_total = 0;
                            $bi_notas3->segundo_turno = 0;
                            // $bi_notas3->observacion=null;
                            $bi_notas3->estudiante_id = $estudiante->id;
                            $bi_notas3->materia_id = $materia->id;
                            $bi_notas3->periodo_id = 6;
                            $bi_notas3->save();

                            // Cuarto Bimestre
                            $bi_notas4 = new Bi_nota;
                            $bi_notas4->asistencia = 0;
                            $bi_notas4->investigacion_productiva = 0;
                            $bi_notas4->participacion_constructiva = 0;
                            $bi_notas4->taller_laboratorios = 0;
                            $bi_notas4->evaluacion = 0;
                            $bi_notas4->puntaje_total = 0;
                            $bi_notas4->segundo_turno = 0;
                            // $bi_notas4->observacion=null;
                            $bi_notas4->estudiante_id = $estudiante->id;
                            $bi_notas4->materia_id = $materia->id;
                            $bi_notas4->periodo_id = 7;
                            $bi_notas4->save();
                        }
                    } else {
                        $curso = Curso::where('paralelo_id', $sisN)->where('turno_id', 2)->where('carrera_id', 3)->first();
                        $estudiante->cursos()->attach($curso->id, ['fecha_ins' => $fecha_ins, 'estado' => $estado]);
                    }
                } else {
                    $sisN = 1;
                    $swsisN = 1;
                    $curso = Curso::where('paralelo_id', 1)->where('turno_id', 2)->where('carrera_id', 3)->first();
                    $estudiante->cursos()->attach($curso->id, ['fecha_ins' => $fecha_ins, 'estado' => $estado]);
                }

            } else {
                return "ya fueron registrados";
            }
        }
        
         // Administracion Mañana
        $admM = 0;
        $swadmM = 0;
        foreach ($postulantesaproAdminM as $adminM) {
            if ($adminM->estado) {
                $adminM->estado = false;
                $adminM->save();
                $userAdminM = User::where('id', $adminM->usuario_id)->first();
                $userAdminM->rol_id = 6;
                $userAdminM->save();

                $estudiante = new Estudiante;
                 // $estudiante->matricula
                $estudiante->ci = $adminM->ci;
                $estudiante->expedido = $adminM->expedido;
                $estudiante->aPaterno = $adminM->aPaterno;
                $estudiante->aMaterno = $adminM->aMaterno;
                $estudiante->nombre = $adminM->nombre;
                $estudiante->fechaNacimiento = $adminM->fechaNacimiento;
                $estudiante->genero = $adminM->genero;
                $estudiante->estadoCivil = $adminM->estadoCivil;
                $estudiante->correo = $adminM->correo;
                $estudiante->direccion = $adminM->direccion;
                $estudiante->telefono = $adminM->telefono;
                $estudiante->celular = $adminM->celular;
                $estudiante->pensum = "NUEVO";

                $usuario_id = User::where('usuario', '=', $adminM->ci)->first();
                $estudiante->usuario_id = $usuario_id->id;

                $estudiante->save();
                $estudiante->carreras()->sync(4);

                $admM = $admM + 1;
                $estado = true;
                $fecha_ins = Carbon::now()->toDateString();
                if ($admM <= $cupoAdminM->paralelos_cant) {
                    if ($swadmM == 0) {
                        $cursoAdm = new Curso;
                        $cursoAdm->aula_id = $admM;
                        $cursoAdm->paralelo_id = $admM;
                        $cursoAdm->nivel_id = $cupoAdminM->nivel;
                        $cursoAdm->turno_id = $cupoAdminM->turno_id;
                        $cursoAdm->carrera_id = $cupoAdminM->carrera_id;

                        $cursoAdm->save();

                        $curso = Curso::where('paralelo_id', $admM)->where('turno_id', 1)->where('carrera_id', 4)->first();
                        $estudiante->cursos()->attach($curso->id, ['fecha_ins' => $fecha_ins, 'estado' => $estado]);
                        $materiasAdm = Materia::where('carrera_id', $cupoAdminM->carrera_id)->where('nivel_id', $cupoAdminM->nivel)->where('tipo', "BIMESTRE")->get();
                        foreach ($materiasAdm as $materia) {
                            $aulas = Aula::where('id', $admM)->first();
                            $aulas->materias()->attach($materia->id);
                             // Primer Bimestre
                            $bi_notas1 = new Bi_nota;
                            $bi_notas1->asistencia = 0;
                            $bi_notas1->investigacion_productiva = 0;
                            $bi_notas1->participacion_constructiva = 0;
                            $bi_notas1->taller_laboratorios = 0;
                            $bi_notas1->evaluacion = 0;
                            $bi_notas1->puntaje_total = 0;
                            $bi_notas1->segundo_turno = 0;
                             // $bi_notas1->observacion=null;
                            $bi_notas1->estudiante_id = $estudiante->id;
                            $bi_notas1->materia_id = $materia->id;
                            $bi_notas1->periodo_id = 4;
                            $bi_notas1->save();
 
                             // Segundo Bimestre
                            $bi_notas2 = new Bi_nota;
                            $bi_notas2->asistencia = 0;
                            $bi_notas2->investigacion_productiva = 0;
                            $bi_notas2->participacion_constructiva = 0;
                            $bi_notas2->taller_laboratorios = 0;
                            $bi_notas2->evaluacion = 0;
                            $bi_notas2->puntaje_total = 0;
                            $bi_notas2->segundo_turno = 0;
                             // $bi_notas2->observacion=null;
                            $bi_notas2->estudiante_id = $estudiante->id;
                            $bi_notas2->materia_id = $materia->id;
                            $bi_notas2->periodo_id = 5;
                            $bi_notas2->save();
 
                             // Tercer Bimestre
                            $bi_notas3 = new Bi_nota;
                            $bi_notas3->asistencia = 0;
                            $bi_notas3->investigacion_productiva = 0;
                            $bi_notas3->participacion_constructiva = 0;
                            $bi_notas3->taller_laboratorios = 0;
                            $bi_notas3->evaluacion = 0;
                            $bi_notas3->puntaje_total = 0;
                            $bi_notas3->segundo_turno = 0;
                             // $bi_notas3->observacion=null;
                            $bi_notas3->estudiante_id = $estudiante->id;
                            $bi_notas3->materia_id = $materia->id;
                            $bi_notas3->periodo_id = 6;
                            $bi_notas3->save();
 
                             // Cuarto Bimestre
                            $bi_notas4 = new Bi_nota;
                            $bi_notas4->asistencia = 0;
                            $bi_notas4->investigacion_productiva = 0;
                            $bi_notas4->participacion_constructiva = 0;
                            $bi_notas4->taller_laboratorios = 0;
                            $bi_notas4->evaluacion = 0;
                            $bi_notas4->puntaje_total = 0;
                            $bi_notas4->segundo_turno = 0;
                             // $bi_notas4->observacion=null;
                            $bi_notas4->estudiante_id = $estudiante->id;
                            $bi_notas4->materia_id = $materia->id;
                            $bi_notas4->periodo_id = 7;
                            $bi_notas4->save();
                        }
                    } else {
                        $curso = Curso::where('paralelo_id', $admM)->where('turno_id', 1)->where('carrera_id', 4)->first();
                        $estudiante->cursos()->attach($curso->id, ['fecha_ins' => $fecha_ins, 'estado' => $estado]);
                    }
                } else {
                    $admM = 1;
                    $swadmM = 1;
                    $curso = Curso::where('paralelo_id', 1)->where('turno_id', 1)->where('carrera_id', 4)->first();
                    $estudiante->cursos()->attach($curso->id, ['fecha_ins' => $fecha_ins, 'estado' => $estado]);
                }

            } else {
                return "ya fueron registrados";
            }
        }
        
        // Administracion Noche
        $admN = 0;
        $swadmN = 0;
        foreach ($postulantesaproAdminN as $adminN) {
            if ($adminN->estado) {
                $adminN->estado = false;
                $adminN->save();
                $userAdminN = User::where('id', $adminN->usuario_id)->first();
                $userAdminN->rol_id = 6;
                $userAdminN->save();

                $estudiante = new Estudiante;
                // $estudiante->matricula
                $estudiante->ci = $adminN->ci;
                $estudiante->expedido = $adminN->expedido;
                $estudiante->aPaterno = $adminN->aPaterno;
                $estudiante->aMaterno = $adminN->aMaterno;
                $estudiante->nombre = $adminN->nombre;
                $estudiante->fechaNacimiento = $adminN->fechaNacimiento;
                $estudiante->genero = $adminN->genero;
                $estudiante->estadoCivil = $adminN->estadoCivil;
                $estudiante->correo = $adminN->correo;
                $estudiante->direccion = $adminN->direccion;
                $estudiante->telefono = $adminN->telefono;
                $estudiante->celular = $adminN->celular;
                $estudiante->pensum = "NUEVO";

                $usuario_id = User::where('usuario', '=', $adminN->ci)->first();
                $estudiante->usuario_id = $usuario_id->id;

                $estudiante->save();
                $estudiante->carreras()->sync(4);

                $admN = $admN + 1;
                $estado = true;
                $fecha_ins = Carbon::now()->toDateString();
                if ($admN <= $cupoAdminN->paralelos_cant) {
                    if ($swadmN == 0) {
                        $cursoAdm = new Curso;
                        $cursoAdm->aula_id = $admN;
                        $cursoAdm->paralelo_id = $admN;
                        $cursoAdm->nivel_id = $cupoAdminN->nivel;
                        $cursoAdm->turno_id = $cupoAdminN->turno_id;
                        $cursoAdm->carrera_id = $cupoAdminN->carrera_id;

                        $cursoAdm->save();

                        $curso = Curso::where('paralelo_id', $admN)->where('turno_id', 2)->where('carrera_id', 4)->first();
                        $estudiante->cursos()->attach($curso->id, ['fecha_ins' => $fecha_ins, 'estado' => $estado]);
                        $materiasAdm = Materia::where('carrera_id', $cupoAdminN->carrera_id)->where('nivel_id', $cupoAdminN->nivel)->where('tipo', "BIMESTRE")->get();
                        foreach ($materiasAdm as $materia) {
                            $aulas = Aula::where('id', $admN)->first();
                            $aulas->materias()->attach($materia->id);
                            // Primer Bimestre
                            $bi_notas1 = new Bi_nota;
                            $bi_notas1->asistencia = 0;
                            $bi_notas1->investigacion_productiva = 0;
                            $bi_notas1->participacion_constructiva = 0;
                            $bi_notas1->taller_laboratorios = 0;
                            $bi_notas1->evaluacion = 0;
                            $bi_notas1->puntaje_total = 0;
                            $bi_notas1->segundo_turno = 0;
                            // $bi_notas1->observacion=null;
                            $bi_notas1->estudiante_id = $estudiante->id;
                            $bi_notas1->materia_id = $materia->id;
                            $bi_notas1->periodo_id = 4;
                            $bi_notas1->save();

                            // Segundo Bimestre
                            $bi_notas2 = new Bi_nota;
                            $bi_notas2->asistencia = 0;
                            $bi_notas2->investigacion_productiva = 0;
                            $bi_notas2->participacion_constructiva = 0;
                            $bi_notas2->taller_laboratorios = 0;
                            $bi_notas2->evaluacion = 0;
                            $bi_notas2->puntaje_total = 0;
                            $bi_notas2->segundo_turno = 0;
                            // $bi_notas2->observacion=null;
                            $bi_notas2->estudiante_id = $estudiante->id;
                            $bi_notas2->materia_id = $materia->id;
                            $bi_notas2->periodo_id = 5;
                            $bi_notas2->save();

                            // Tercer Bimestre
                            $bi_notas3 = new Bi_nota;
                            $bi_notas3->asistencia = 0;
                            $bi_notas3->investigacion_productiva = 0;
                            $bi_notas3->participacion_constructiva = 0;
                            $bi_notas3->taller_laboratorios = 0;
                            $bi_notas3->evaluacion = 0;
                            $bi_notas3->puntaje_total = 0;
                            $bi_notas3->segundo_turno = 0;
                            // $bi_notas3->observacion=null;
                            $bi_notas3->estudiante_id = $estudiante->id;
                            $bi_notas3->materia_id = $materia->id;
                            $bi_notas3->periodo_id = 6;
                            $bi_notas3->save();

                            // Cuarto Bimestre
                            $bi_notas4 = new Bi_nota;
                            $bi_notas4->asistencia = 0;
                            $bi_notas4->investigacion_productiva = 0;
                            $bi_notas4->participacion_constructiva = 0;
                            $bi_notas4->taller_laboratorios = 0;
                            $bi_notas4->evaluacion = 0;
                            $bi_notas4->puntaje_total = 0;
                            $bi_notas4->segundo_turno = 0;
                            // $bi_notas4->observacion=null;
                            $bi_notas4->estudiante_id = $estudiante->id;
                            $bi_notas4->materia_id = $materia->id;
                            $bi_notas4->periodo_id = 7;
                            $bi_notas4->save();
                        }
                    } else {
                        $curso = Curso::where('paralelo_id', $admN)->where('turno_id', 2)->where('carrera_id', 4)->first();
                        $estudiante->cursos()->attach($curso->id, ['fecha_ins' => $fecha_ins, 'estado' => $estado]);
                    }
                } else {
                    $admN = 1;
                    $swadmN = 1;
                    $curso = Curso::where('paralelo_id', 1)->where('turno_id', 2)->where('carrera_id', 4)->first();
                    $estudiante->cursos()->attach($curso->id, ['fecha_ins' => $fecha_ins, 'estado' => $estado]);
                }

            } else {
                return "ya fueron registrados";
            }
        }

        // Comercio Mañana
        $comM = 0;
        $swcomM = 0;
        foreach ($postulantesaproComerM as $comerM) {
            if ($comerM->estado) {
                $comerM->estado = false;
                $comerM->save();
                $userComerM = User::where('id', $comerM->usuario_id)->first();
                $userComerM->rol_id = 6;
                $userComerM->save();

                $estudiante = new Estudiante;
                 // $estudiante->matricula
                $estudiante->ci = $comerM->ci;
                $estudiante->expedido = $comerM->expedido;
                $estudiante->aPaterno = $comerM->aPaterno;
                $estudiante->aMaterno = $comerM->aMaterno;
                $estudiante->nombre = $comerM->nombre;
                $estudiante->fechaNacimiento = $comerM->fechaNacimiento;
                $estudiante->genero = $comerM->genero;
                $estudiante->estadoCivil = $comerM->estadoCivil;
                $estudiante->correo = $comerM->correo;
                $estudiante->direccion = $comerM->direccion;
                $estudiante->telefono = $comerM->telefono;
                $estudiante->celular = $comerM->celular;
                $estudiante->pensum = "NUEVO";

                $usuario_id = User::where('usuario', '=', $comerM->ci)->first();
                $estudiante->usuario_id = $usuario_id->id;

                $estudiante->save();
                $estudiante->carreras()->sync(5);

                $comM = $comM + 1;
                $estado = true;
                $fecha_ins = Carbon::now()->toDateString();
                if ($comM <= $cupoComerM->paralelos_cant) {
                    if ($swcomM == 0) {
                        $cursoCom = new Curso;
                        $cursoCom->aula_id = $comM;
                        $cursoCom->paralelo_id = $comM;
                        $cursoCom->nivel_id = $cupoComerM->nivel;
                        $cursoCom->turno_id = $cupoComerM->turno_id;
                        $cursoCom->carrera_id = $cupoComerM->carrera_id;

                        $cursoCom->save();

                        $curso = Curso::where('paralelo_id', $comM)->where('turno_id', 1)->where('carrera_id', 5)->first();
                        $estudiante->cursos()->attach($curso->id, ['fecha_ins' => $fecha_ins, 'estado' => $estado]);
                        $materiasCom = Materia::where('carrera_id', $cupoComerM->carrera_id)->where('nivel_id', $cupoComerM->nivel)->where('tipo', "BIMESTRE")->get();
                        foreach ($materiasCom as $materia) {
                            $aulas = Aula::where('id', $comM)->first();
                            $aulas->materias()->attach($materia->id);
                             // Primer Bimestre
                            $bi_notas1 = new Bi_nota;
                            $bi_notas1->asistencia = 0;
                            $bi_notas1->investigacion_productiva = 0;
                            $bi_notas1->participacion_constructiva = 0;
                            $bi_notas1->taller_laboratorios = 0;
                            $bi_notas1->evaluacion = 0;
                            $bi_notas1->puntaje_total = 0;
                            $bi_notas1->segundo_turno = 0;
                             // $bi_notas1->observacion=null;
                            $bi_notas1->estudiante_id = $estudiante->id;
                            $bi_notas1->materia_id = $materia->id;
                            $bi_notas1->periodo_id = 4;
                            $bi_notas1->save();
 
                             // Segundo Bimestre
                            $bi_notas2 = new Bi_nota;
                            $bi_notas2->asistencia = 0;
                            $bi_notas2->investigacion_productiva = 0;
                            $bi_notas2->participacion_constructiva = 0;
                            $bi_notas2->taller_laboratorios = 0;
                            $bi_notas2->evaluacion = 0;
                            $bi_notas2->puntaje_total = 0;
                            $bi_notas2->segundo_turno = 0;
                             // $bi_notas2->observacion=null;
                            $bi_notas2->estudiante_id = $estudiante->id;
                            $bi_notas2->materia_id = $materia->id;
                            $bi_notas2->periodo_id = 5;
                            $bi_notas2->save();
 
                             // Tercer Bimestre
                            $bi_notas3 = new Bi_nota;
                            $bi_notas3->asistencia = 0;
                            $bi_notas3->investigacion_productiva = 0;
                            $bi_notas3->participacion_constructiva = 0;
                            $bi_notas3->taller_laboratorios = 0;
                            $bi_notas3->evaluacion = 0;
                            $bi_notas3->puntaje_total = 0;
                            $bi_notas3->segundo_turno = 0;
                             // $bi_notas3->observacion=null;
                            $bi_notas3->estudiante_id = $estudiante->id;
                            $bi_notas3->materia_id = $materia->id;
                            $bi_notas3->periodo_id = 6;
                            $bi_notas3->save();
 
                             // Cuarto Bimestre
                            $bi_notas4 = new Bi_nota;
                            $bi_notas4->asistencia = 0;
                            $bi_notas4->investigacion_productiva = 0;
                            $bi_notas4->participacion_constructiva = 0;
                            $bi_notas4->taller_laboratorios = 0;
                            $bi_notas4->evaluacion = 0;
                            $bi_notas4->puntaje_total = 0;
                            $bi_notas4->segundo_turno = 0;
                             // $bi_notas4->observacion=null;
                            $bi_notas4->estudiante_id = $estudiante->id;
                            $bi_notas4->materia_id = $materia->id;
                            $bi_notas4->periodo_id = 7;
                            $bi_notas4->save();
                        }
                    } else {
                        $curso = Curso::where('paralelo_id', $comM)->where('turno_id', 1)->where('carrera_id', 5)->first();
                        $estudiante->cursos()->attach($curso->id, ['fecha_ins' => $fecha_ins, 'estado' => $estado]);
                    }
                } else {
                    $comM = 1;
                    $swcomM = 1;
                    $curso = Curso::where('paralelo_id', 1)->where('turno_id', 1)->where('carrera_id', 5)->first();
                    $estudiante->cursos()->attach($curso->id, ['fecha_ins' => $fecha_ins, 'estado' => $estado]);
                }

            } else {
                return "ya fueron registrados";
            }
        }
        
        // Comercio Noche
        $comN = 0;
        $swcomN = 0;
        foreach ($postulantesaproComerN as $comerN) {
            if ($comerN->estado) {
                $comerN->estado = false;
                $comerN->save();
                $userComerN = User::where('id', $comerN->usuario_id)->first();
                $userComerN->rol_id = 6;
                $userComerN->save();

                $estudiante = new Estudiante;
                // $estudiante->matricula
                $estudiante->ci = $comerN->ci;
                $estudiante->expedido = $comerN->expedido;
                $estudiante->aPaterno = $comerN->aPaterno;
                $estudiante->aMaterno = $comerN->aMaterno;
                $estudiante->nombre = $comerN->nombre;
                $estudiante->fechaNacimiento = $comerN->fechaNacimiento;
                $estudiante->genero = $comerN->genero;
                $estudiante->estadoCivil = $comerN->estadoCivil;
                $estudiante->correo = $comerN->correo;
                $estudiante->direccion = $comerN->direccion;
                $estudiante->telefono = $comerN->telefono;
                $estudiante->celular = $comerN->celular;
                $estudiante->pensum = "NUEVO";

                $usuario_id = User::where('usuario', '=', $comerN->ci)->first();
                $estudiante->usuario_id = $usuario_id->id;

                $estudiante->save();
                $estudiante->carreras()->sync(5);

                $comN = $comN + 1;
                $estado = true;
                $fecha_ins = Carbon::now()->toDateString();
                if ($comN <= $cupoComerN->paralelos_cant) {
                    if ($swcomN == 0) {
                        $cursoCom = new Curso;
                        $cursoCom->aula_id = $comN;
                        $cursoCom->paralelo_id = $comN;
                        $cursoCom->nivel_id = $cupoComerN->nivel;
                        $cursoCom->turno_id = $cupoComerN->turno_id;
                        $cursoCom->carrera_id = $cupoComerN->carrera_id;

                        $cursoCom->save();

                        $curso = Curso::where('paralelo_id', $comN)->where('turno_id', 2)->where('carrera_id', 5)->first();
                        $estudiante->cursos()->attach($curso->id, ['fecha_ins' => $fecha_ins, 'estado' => $estado]);
                        $materiasCom = Materia::where('carrera_id', $cupoComerN->carrera_id)->where('nivel_id', $cupoComerN->nivel)->where('tipo', "BIMESTRE")->get();
                        foreach ($materiasCom as $materia) {
                            $aulas = Aula::where('id', $comN)->first();
                            $aulas->materias()->attach($materia->id);
                            // Primer Bimestre
                            $bi_notas1 = new Bi_nota;
                            $bi_notas1->asistencia = 0;
                            $bi_notas1->investigacion_productiva = 0;
                            $bi_notas1->participacion_constructiva = 0;
                            $bi_notas1->taller_laboratorios = 0;
                            $bi_notas1->evaluacion = 0;
                            $bi_notas1->puntaje_total = 0;
                            $bi_notas1->segundo_turno = 0;
                            // $bi_notas1->observacion=null;
                            $bi_notas1->estudiante_id = $estudiante->id;
                            $bi_notas1->materia_id = $materia->id;
                            $bi_notas1->periodo_id = 4;
                            $bi_notas1->save();

                            // Segundo Bimestre
                            $bi_notas2 = new Bi_nota;
                            $bi_notas2->asistencia = 0;
                            $bi_notas2->investigacion_productiva = 0;
                            $bi_notas2->participacion_constructiva = 0;
                            $bi_notas2->taller_laboratorios = 0;
                            $bi_notas2->evaluacion = 0;
                            $bi_notas2->puntaje_total = 0;
                            $bi_notas2->segundo_turno = 0;
                            // $bi_notas2->observacion=null;
                            $bi_notas2->estudiante_id = $estudiante->id;
                            $bi_notas2->materia_id = $materia->id;
                            $bi_notas2->periodo_id = 5;
                            $bi_notas2->save();

                            // Tercer Bimestre
                            $bi_notas3 = new Bi_nota;
                            $bi_notas3->asistencia = 0;
                            $bi_notas3->investigacion_productiva = 0;
                            $bi_notas3->participacion_constructiva = 0;
                            $bi_notas3->taller_laboratorios = 0;
                            $bi_notas3->evaluacion = 0;
                            $bi_notas3->puntaje_total = 0;
                            $bi_notas3->segundo_turno = 0;
                            // $bi_notas3->observacion=null;
                            $bi_notas3->estudiante_id = $estudiante->id;
                            $bi_notas3->materia_id = $materia->id;
                            $bi_notas3->periodo_id = 6;
                            $bi_notas3->save();

                            // Cuarto Bimestre
                            $bi_notas4 = new Bi_nota;
                            $bi_notas4->asistencia = 0;
                            $bi_notas4->investigacion_productiva = 0;
                            $bi_notas4->participacion_constructiva = 0;
                            $bi_notas4->taller_laboratorios = 0;
                            $bi_notas4->evaluacion = 0;
                            $bi_notas4->puntaje_total = 0;
                            $bi_notas4->segundo_turno = 0;
                            // $bi_notas4->observacion=null;
                            $bi_notas4->estudiante_id = $estudiante->id;
                            $bi_notas4->materia_id = $materia->id;
                            $bi_notas4->periodo_id = 7;
                            $bi_notas4->save();
                        }
                    } else {
                        $curso = Curso::where('paralelo_id', $comN)->where('turno_id', 2)->where('carrera_id', 5)->first();
                        $estudiante->cursos()->attach($curso->id, ['fecha_ins' => $fecha_ins, 'estado' => $estado]);
                    }
                } else {
                    $comN = 1;
                    $swcomN = 1;
                    $curso = Curso::where('paralelo_id', 1)->where('turno_id', 2)->where('carrera_id', 5)->first();
                    $estudiante->cursos()->attach($curso->id, ['fecha_ins' => $fecha_ins, 'estado' => $estado]);
                }

            } else {
                return "ya fueron registrados";
            }
        }
        
        // // Linguistica Mañana
        // foreach ($postulantesaproLinguM as $linguM) {
        //     $userLinguM = User::where('id', $linguM->usuario_id)->first();
        //     $userLinguM->rol_id = 6;
        //     $userLinguM->save();

        //     $estudiante = new Estudiante;
        //     // $estudiante->matricula
        //     $estudiante->ci = $linguM->ci;
        //     $estudiante->expedido = $linguM->expedido;
        //     $estudiante->aPaterno = $linguM->aPaterno;
        //     $estudiante->aMaterno = $linguM->aMaterno;
        //     $estudiante->nombre = $linguM->nombre;
        //     $estudiante->fechaNacimiento = $linguM->fechaNacimiento;
        //     $estudiante->genero = $linguM->genero;
        //     $estudiante->estadoCivil = $linguM->estadoCivil;
        //     $estudiante->correo = $linguM->correo;
        //     $estudiante->direccion = $linguM->direccion;
        //     $estudiante->telefono = $linguM->telefono;
        //     $estudiante->celular = $linguM->celular;
        //     $estudiante->pensum = "NUEVO";

        //     $usuario_id = User::where('usuario', '=', $linguM->ci)->first();
        //     $estudiante->usuario_id = $usuario_id->id;

        //     $estudiante->save();
        //     $estudiante->carreras()->sync(6);
        // }

        // // Linguistica Noche
        // foreach ($postulantesaproLinguN as $linguN) {
        //     $userLinguN = User::where('id', $linguN->usuario_id)->first();
        //     $userLinguN->rol_id = 6;
        //     $userLinguN->save();

        //     $estudiante = new Estudiante;
        //     // $estudiante->matricula
        //     $estudiante->ci = $linguN->ci;
        //     $estudiante->expedido = $linguN->expedido;
        //     $estudiante->aPaterno = $linguN->aPaterno;
        //     $estudiante->aMaterno = $linguN->aMaterno;
        //     $estudiante->nombre = $linguN->nombre;
        //     $estudiante->fechaNacimiento = $linguN->fechaNacimiento;
        //     $estudiante->genero = $linguN->genero;
        //     $estudiante->estadoCivil = $linguN->estadoCivil;
        //     $estudiante->correo = $linguN->correo;
        //     $estudiante->direccion = $linguN->direccion;
        //     $estudiante->telefono = $linguN->telefono;
        //     $estudiante->celular = $linguN->celular;
        //     $estudiante->pensum = "NUEVO";

        //     $usuario_id = User::where('usuario', '=', $linguN->ci)->first();
        //     $estudiante->usuario_id = $usuario_id->id;

        //     $estudiante->save();
        //     $estudiante->carreras()->sync(6);
        // }

        return back();
    }

    public function formulario($id)
    {
        $estudiantes = Estudiante::findOrfail($id);
        $departamentos = Departamento::where('id', $estudiantes->expedido)->first();
        $carreras = Carrera::all();
        $turnos = Turno::all();
        $paralelos = Paralelo::all();
        $cursos = Curso::all();
        $aulas = Aula::all();
        $materias = Materia::all();
        $niveles = Nivel::all();
        $sw = 0;
        $nombrepdf = "Formulario de Inscripción.pdf";
        $i = 0;
        $titulo = "Formulario de Inscripción";
        return \PDF::loadView(
            'estudiantes.formularios.formulario',
            compact(
                'estudiantes',
                'turnos',
                'paralelos',
                'cursos',
                'aulas',
                'materias',
                'niveles',
                'departamentos',
                'sw',
                'titulo'
            )
        )
            ->setPaper('letter')
            ->setOption('encoding', 'utf-8')
            ->setOption('footer-right', 'Pagina [page] de [toPage]')
            ->setOption('footer-left', 'INCOS EL ALTO - 2018')
            ->stream("$nombrepdf");
    }

    public function pensum($id)
    {
        // $carreras = Carrera::all();
        $estudiantes = Estudiante::findOrfail($id);
        // $carreras = Carrera::where('id', $estudiantes->carreras;
        //return $estudiantes->carreras;
        foreach ($estudiantes->carreras as $carrera) {
            $carre = $carrera;
        }
        $materias = Materia::where('carrera_id', $carre->id)->get();
        $j = 0;
        $datos = array(
            'carreras' => $carre,
            'materias' => $materias,
            'estudiantes' => $estudiantes,
            'j' => $j
        );
        return view('pensums.pensum')->with($datos);
    }

    public function historial($id)
    {
        $estudiantes = Estudiante::findOrfail($id);
        foreach ($estudiantes->carreras as $carrera) {
            $carre = $carrera;
        }

        $bi_notas = Bi_nota::where('estudiante_id', $estudiantes->id)->get();
        $materias = Materia::all();
        $periodos = Periodo::all();
        $j = 0;
        $niveles = Nivel::all();
        // $a=0;
        // $b=0;
        // $c=0;
        // $d=0;
        // return $bi_notas;
        $datos = array(
            'carreras' => $carre,
            'materias' => $materias,
            'estudiantes' => $estudiantes,
            'periodos' => $periodos,
            'bi_notas' => $bi_notas,
            'niveles' => $niveles,
            'j' => $j
            // 'a'=>$a,
            // 'b'=>$b,
            // 'c'=>$c,
            // 'd'=>$d
        );
        // return $datos;
        return view('historiales.historial')->with($datos);
    }

    public function boletin($id)
    {
        $estudiantes = Estudiante::findOrfail($id);
        foreach ($estudiantes->carreras as $carrera) {
            $carre = $carrera;
        }
        $bi_notas = $estudiantes->bi_notas;
        $materias = Materia::all();
        $periodos = Periodo::all();
        $niveles = Nivel::all();
        $paralelos = Paralelo::all();
        $turnos = Turno::all();
        $nombrepdf = "Boletin";
        $j = 0;
        $titulo = "Boletin de Notas";
        return \PDF::loadView(
            'boletines.boletin',
            compact(
                'estudiantes',
                'carre',
                'bi_notas',
                'materias',
                'periodos',
                'j',
                'titulo',
                'niveles',
                'paralelos',
                'turnos'
            )
        )
            ->setPaper('letter')
            ->setOption('encoding', 'utf-8')
            ->setOption('footer-right', 'Pagina [page] de [toPage]')
            ->setOption('footer-left', 'INCOS EL ALTO - 2018')
            ->stream("$nombrepdf");
    }


    public function prueba()
    {

        $nombrepdf = "Lista de Estudiantes de la carrera.pdf";
        $i = 0;
        $titulo = "Lista de aprobados al examen de admisión";
        return \PDF::loadView(
            'postulantes.formularios.prueba',
            compact(
                // 'postulantesapro',
                // 'carreras',
                // 'turnos',
                // 'cupos',
                // 'periodos',
                // 'i',
                'titulo'
            )
        )
            ->setPaper('letter')
            ->setOption('encoding', 'utf-8')
            ->setOption('footer-right', 'Pagina [page] de [toPage]')
            ->setOption('footer-left', 'INCOS EL ALTO - 2018')
            ->stream("$nombrepdf");
    }
}
