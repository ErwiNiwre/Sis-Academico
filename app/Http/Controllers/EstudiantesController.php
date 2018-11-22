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
use Carbon\Carbon;
use phpDocumentor\Reflection\DocBlock\Tags\Return_;

class EstudiantesController extends Controller
{
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
        $niveles = Nivel::where('id', $cupoSisteM->nivel)->first();
        $paralelos = Paralelo::all();
        $aulasSis = Aula::where('carrera_id', 3)->get();

        

        // $cursos = new Curso;

        // return $cupoSisteM->paralelos_cant;

        $cupoAdminM = Cupo::where('carrera_id', 4)->where('turno_id', 1)->first();
        $cupoAdminN = Cupo::where('carrera_id', 4)->where('turno_id', 2)->first();

        $cupoComerM = Cupo::where('carrera_id', 5)->where('turno_id', 1)->first();
        $cupoComerN = Cupo::where('carrera_id', 5)->where('turno_id', 2)->first();

        $cupoLinguM = Cupo::where('carrera_id', 6)->where('turno_id', 1)->first();
        $cupoLinguN = Cupo::where('carrera_id', 6)->where('turno_id', 2)->first();

        // $users = User::all();
        // return $users;
        // $postulantesaproContaM = Postulante::where('carrera_id', $cupoContaM->carrera_id)->orderBy('nota', 'DESC')->get()->where('turno_id', $cupoContaM->turno_id)->take($cupoContaM->cantidad);
        // $postulantesaproContaN = Postulante::where('carrera_id', $cupoContaN->carrera_id)->orderBy('nota', 'DESC')->get()->where('turno_id', $cupoContaN->turno_id)->take($cupoContaN->cantidad);

        // $postulantesaproSecreM = Postulante::where('carrera_id', $cupoSecreM->carrera_id)->orderBy('nota', 'DESC')->get()->where('turno_id', $cupoSecreM->turno_id)->take($cupoSecreM->cantidad);
        // $postulantesaproSecreN = Postulante::where('carrera_id', $cupoSecreN->carrera_id)->orderBy('nota', 'DESC')->get()->where('turno_id', $cupoSecreN->turno_id)->take($cupoSecreN->cantidad);

        $postulantesaproSisteM = Postulante::where('carrera_id', $cupoSisteM->carrera_id)->orderBy('nota', 'DESC')->get()->where('turno_id', $cupoSisteM->turno_id)->take($cupoSisteM->cantidad);
        // $postulantesaproSisteN = Postulante::where('carrera_id', $cupoSisteN->carrera_id)->orderBy('nota', 'DESC')->get()->where('turno_id', $cupoSisteN->turno_id)->take($cupoSisteN->cantidad);

        // $postulantesaproAdminM = Postulante::where('carrera_id', $cupoAdminM->carrera_id)->orderBy('nota', 'DESC')->get()->where('turno_id', $cupoAdminM->turno_id)->take($cupoAdminM->cantidad);
        // $postulantesaproAdminN = Postulante::where('carrera_id', $cupoAdminN->carrera_id)->orderBy('nota', 'DESC')->get()->where('turno_id', $cupoAdminN->turno_id)->take($cupoAdminN->cantidad);

        // $postulantesaproComerM = Postulante::where('carrera_id', $cupoComerM->carrera_id)->orderBy('nota', 'DESC')->get()->where('turno_id', $cupoComerM->turno_id)->take($cupoComerM->cantidad);
        // $postulantesaproComerN = Postulante::where('carrera_id', $cupoComerN->carrera_id)->orderBy('nota', 'DESC')->get()->where('turno_id', $cupoComerN->turno_id)->take($cupoComerN->cantidad);

        // $postulantesaproLinguM = Postulante::where('carrera_id', $cupoLinguM->carrera_id)->orderBy('nota', 'DESC')->get()->where('turno_id', $cupoLinguM->turno_id)->take($cupoLinguM->cantidad);
        // $postulantesaproLinguN = Postulante::where('carrera_id', $cupoLinguN->carrera_id)->orderBy('nota', 'DESC')->get()->where('turno_id', $cupoLinguN->turno_id)->take($cupoLinguN->cantidad);

        // Contabilidad Mañana
        // foreach ($postulantesaproContaM as $contaM) {
        //     $userContaM = User::where('id', $contaM->usuario_id)->first();
        //     $userContaM->rol_id = 6;
        //     $userContaM->save();

        //     $estudiante = new Estudiante;
        //     // $estudiante->matricula
        //     $estudiante->ci = $contaM->ci;
        //     $estudiante->expedido = $contaM->expedido;
        //     $estudiante->aPaterno = $contaM->aPaterno;
        //     $estudiante->aMaterno = $contaM->aMaterno;
        //     $estudiante->nombre = $contaM->nombre;
        //     $estudiante->fechaNacimiento = $contaM->fechaNacimiento;
        //     $estudiante->genero = $contaM->genero;
        //     $estudiante->estadoCivil = $contaM->estadoCivil;
        //     $estudiante->correo = $contaM->correo;
        //     $estudiante->direccion = $contaM->direccion;
        //     $estudiante->telefono = $contaM->telefono;
        //     $estudiante->celular = $contaM->celular;
        //     $estudiante->pensum = "NUEVO";

        //     $usuario_id = User::where('usuario', '=', $contaM->ci)->first();
        //     $estudiante->usuario_id = $usuario_id->id;

        //     $estudiante->save();
        //     $estudiante->carreras()->sync(1);
        // }

        // // Contabilidad Noche
        // foreach ($postulantesaproContaN as $contaN) {
        //     $userContaN = User::where('id', $contaN->usuario_id)->first();
        //     $userContaN->rol_id = 6;
        //     $userContaN->save();

        //     $estudiante = new Estudiante;
        //     // $estudiante->matricula
        //     $estudiante->ci = $contaN->ci;
        //     $estudiante->expedido = $contaN->expedido;
        //     $estudiante->aPaterno = $contaN->aPaterno;
        //     $estudiante->aMaterno = $contaN->aMaterno;
        //     $estudiante->nombre = $contaN->nombre;
        //     $estudiante->fechaNacimiento = $contaN->fechaNacimiento;
        //     $estudiante->genero = $contaN->genero;
        //     $estudiante->estadoCivil = $contaN->estadoCivil;
        //     $estudiante->correo = $contaN->correo;
        //     $estudiante->direccion = $contaN->direccion;
        //     $estudiante->telefono = $contaN->telefono;
        //     $estudiante->celular = $contaN->celular;
        //     $estudiante->pensum = "NUEVO";

        //     $usuario_id = User::where('usuario', '=', $contaN->ci)->first();
        //     $estudiante->usuario_id = $usuario_id->id;

        //     $estudiante->save();
        //     $estudiante->carreras()->sync(1);
        // }

        // // Secretariado Mañana
        // foreach ($postulantesaproSecreM as $secreM) {
        //     $userSecreM = User::where('id', $secreM->usuario_id)->first();
        //     $userSecreM->rol_id = 6;
        //     $userSecreM->save();

        //     $estudiante = new Estudiante;
        //     // $estudiante->matricula
        //     $estudiante->ci = $secreM->ci;
        //     $estudiante->expedido = $secreM->expedido;
        //     $estudiante->aPaterno = $secreM->aPaterno;
        //     $estudiante->aMaterno = $secreM->aMaterno;
        //     $estudiante->nombre = $secreM->nombre;
        //     $estudiante->fechaNacimiento = $secreM->fechaNacimiento;
        //     $estudiante->genero = $secreM->genero;
        //     $estudiante->estadoCivil = $secreM->estadoCivil;
        //     $estudiante->correo = $secreM->correo;
        //     $estudiante->direccion = $secreM->direccion;
        //     $estudiante->telefono = $secreM->telefono;
        //     $estudiante->celular = $secreM->celular;
        //     $estudiante->pensum = "NUEVO";

        //     $usuario_id = User::where('usuario', '=', $secreM->ci)->first();
        //     $estudiante->usuario_id = $usuario_id->id;

        //     $estudiante->save();
        //     $estudiante->carreras()->sync(2);
        // }

        // // Secretariado Noche
        // foreach ($postulantesaproSecreN as $secreN) {
        //     $userSecreN = User::where('id', $secreN->usuario_id)->first();
        //     $userSecreN->rol_id = 6;
        //     $userSecreN->save();

        //     $estudiante = new Estudiante;
        //     // $estudiante->matricula
        //     $estudiante->ci = $secreN->ci;
        //     $estudiante->expedido = $secreN->expedido;
        //     $estudiante->aPaterno = $secreN->aPaterno;
        //     $estudiante->aMaterno = $secreN->aMaterno;
        //     $estudiante->nombre = $secreN->nombre;
        //     $estudiante->fechaNacimiento = $secreN->fechaNacimiento;
        //     $estudiante->genero = $secreN->genero;
        //     $estudiante->estadoCivil = $secreN->estadoCivil;
        //     $estudiante->correo = $secreN->correo;
        //     $estudiante->direccion = $secreN->direccion;
        //     $estudiante->telefono = $secreN->telefono;
        //     $estudiante->celular = $secreN->celular;
        //     $estudiante->pensum = "NUEVO";

        //     $usuario_id = User::where('usuario', '=', $secreN->ci)->first();
        //     $estudiante->usuario_id = $usuario_id->id;

        //     $estudiante->save();
        //     $estudiante->carreras()->sync(2);
        // }

        // Sistemas Mañana
        $sisM = 0;
        $swsisM = 0;
        foreach ($postulantesaproSisteM as $sisteM) {
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
            $estado=true;
            $fecha_ins=Carbon::now()->toDateString();
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
                    $estudiante->cursos()->attach($curso->id, ['fecha_ins'=>$fecha_ins, 'estado'=>$estado]);
                    $materiasSis=Materia::where('carrera_id', $cupoSisteM->carrera_id)->where('nivel_id', $cupoSisteM->nivel)->where('tipo', "BIMESTRE")->get();
                    foreach($materiasSis as $materia){
                        $aulas=Aula::where('id', $sisM)->first();
                        $aulas->materias()->attach($materia->id);
                    }
                } else {
                    $curso = Curso::where('paralelo_id', $sisM)->where('turno_id', 1)->where('carrera_id', 3)->first();
                    $estudiante->cursos()->attach($curso->id, ['fecha_ins'=>$fecha_ins, 'estado'=>$estado]);
                }
            } else {
                $sisM = 1;
                $swsisM = 1;
                $curso = Curso::where('paralelo_id', 1)->where('turno_id', 1)->where('carrera_id', 3)->first();
                $estudiante->cursos()->attach($curso->id, ['fecha_ins'=>$fecha_ins, 'estado'=>$estado]);
            }

        }
        
        return $curso;
        // Sistemas Noche
        // foreach ($postulantesaproSisteN as $sisteN) {
        //     $userSisteN = User::where('id', $sisteN->usuario_id)->first();
        //     $userSisteN->rol_id = 6;
        //     $userSisteN->save();

        //     $estudiante = new Estudiante;
        //     // $estudiante->matricula
        //     $estudiante->ci = $sisteN->ci;
        //     $estudiante->expedido = $sisteN->expedido;
        //     $estudiante->aPaterno = $sisteN->aPaterno;
        //     $estudiante->aMaterno = $sisteN->aMaterno;
        //     $estudiante->nombre = $sisteN->nombre;
        //     $estudiante->fechaNacimiento = $sisteN->fechaNacimiento;
        //     $estudiante->genero = $sisteN->genero;
        //     $estudiante->estadoCivil = $sisteN->estadoCivil;
        //     $estudiante->correo = $sisteN->correo;
        //     $estudiante->direccion = $sisteN->direccion;
        //     $estudiante->telefono = $sisteN->telefono;
        //     $estudiante->celular = $sisteN->celular;
        //     $estudiante->pensum = "NUEVO";

        //     $usuario_id = User::where('usuario', '=', $sisteN->ci)->first();
        //     $estudiante->usuario_id = $usuario_id->id;

        //     $estudiante->save();
        //     $estudiante->carreras()->sync(3);
        // }

        //  // Administracion Mañana
        // foreach ($postulantesaproAdminM as $adminM) {
        //     $userAdminM = User::where('id', $adminM->usuario_id)->first();
        //     $userAdminM->rol_id = 6;
        //     $userAdminM->save();

        //     $estudiante = new Estudiante;
        //     // $estudiante->matricula
        //     $estudiante->ci = $adminM->ci;
        //     $estudiante->expedido = $adminM->expedido;
        //     $estudiante->aPaterno = $adminM->aPaterno;
        //     $estudiante->aMaterno = $adminM->aMaterno;
        //     $estudiante->nombre = $adminM->nombre;
        //     $estudiante->fechaNacimiento = $adminM->fechaNacimiento;
        //     $estudiante->genero = $adminM->genero;
        //     $estudiante->estadoCivil = $adminM->estadoCivil;
        //     $estudiante->correo = $adminM->correo;
        //     $estudiante->direccion = $adminM->direccion;
        //     $estudiante->telefono = $adminM->telefono;
        //     $estudiante->celular = $adminM->celular;
        //     $estudiante->pensum = "NUEVO";

        //     $usuario_id = User::where('usuario', '=', $adminM->ci)->first();
        //     $estudiante->usuario_id = $usuario_id->id;

        //     $estudiante->save();
        //     $estudiante->carreras()->sync(4);
        // }

        // // Administracion Noche
        // foreach ($postulantesaproAdminN as $adminN) {
        //     $userAdminN = User::where('id', $adminN->usuario_id)->first();
        //     $userAdminN->rol_id = 6;
        //     $userAdminN->save();

        //     $estudiante = new Estudiante;
        //     // $estudiante->matricula
        //     $estudiante->ci = $adminN->ci;
        //     $estudiante->expedido = $adminN->expedido;
        //     $estudiante->aPaterno = $adminN->aPaterno;
        //     $estudiante->aMaterno = $adminN->aMaterno;
        //     $estudiante->nombre = $adminN->nombre;
        //     $estudiante->fechaNacimiento = $adminN->fechaNacimiento;
        //     $estudiante->genero = $adminN->genero;
        //     $estudiante->estadoCivil = $adminN->estadoCivil;
        //     $estudiante->correo = $adminN->correo;
        //     $estudiante->direccion = $adminN->direccion;
        //     $estudiante->telefono = $adminN->telefono;
        //     $estudiante->celular = $adminN->celular;
        //     $estudiante->pensum = "NUEVO";

        //     $usuario_id = User::where('usuario', '=', $adminN->ci)->first();
        //     $estudiante->usuario_id = $usuario_id->id;

        //     $estudiante->save();
        //     $estudiante->carreras()->sync(4);
             
        // }

        // // Comercio Mañana
        // foreach ($postulantesaproComerM as $comerM) {
        //     $userComerM = User::where('id', $comerM->usuario_id)->first();
        //     $userComerM->rol_id = 6;
        //     $userComerM->save();

        //     $estudiante = new Estudiante;
        //     // $estudiante->matricula
        //     $estudiante->ci = $comerM->ci;
        //     $estudiante->expedido = $comerM->expedido;
        //     $estudiante->aPaterno = $comerM->aPaterno;
        //     $estudiante->aMaterno = $comerM->aMaterno;
        //     $estudiante->nombre = $comerM->nombre;
        //     $estudiante->fechaNacimiento = $comerM->fechaNacimiento;
        //     $estudiante->genero = $comerM->genero;
        //     $estudiante->estadoCivil = $comerM->estadoCivil;
        //     $estudiante->correo = $comerM->correo;
        //     $estudiante->direccion = $comerM->direccion;
        //     $estudiante->telefono = $comerM->telefono;
        //     $estudiante->celular = $comerM->celular;
        //     $estudiante->pensum = "NUEVO";

        //     $usuario_id = User::where('usuario', '=', $comerM->ci)->first();
        //     $estudiante->usuario_id = $usuario_id->id;

        //     $estudiante->save();
        //     $estudiante->carreras()->sync(5);
        // }

        // // Comercio Noche
        // foreach ($postulantesaproComerN as $comerN) {
        //     $userComerN = User::where('id', $comerN->usuario_id)->first();
        //     $userComerN->rol_id = 6;
        //     $userComerN->save();

        //     $estudiante = new Estudiante;
        //     // $estudiante->matricula
        //     $estudiante->ci = $comerN->ci;
        //     $estudiante->expedido = $comerN->expedido;
        //     $estudiante->aPaterno = $comerN->aPaterno;
        //     $estudiante->aMaterno = $comerN->aMaterno;
        //     $estudiante->nombre = $comerN->nombre;
        //     $estudiante->fechaNacimiento = $comerN->fechaNacimiento;
        //     $estudiante->genero = $comerN->genero;
        //     $estudiante->estadoCivil = $comerN->estadoCivil;
        //     $estudiante->correo = $comerN->correo;
        //     $estudiante->direccion = $comerN->direccion;
        //     $estudiante->telefono = $comerN->telefono;
        //     $estudiante->celular = $comerN->celular;
        //     $estudiante->pensum = "NUEVO";

        //     $usuario_id = User::where('usuario', '=', $comerN->ci)->first();
        //     $estudiante->usuario_id = $usuario_id->id;

        //     $estudiante->save();
        //     $estudiante->carreras()->sync(5);
        // }

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

        return "holaaaaaaaaaaaaaaaaaaa";
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
