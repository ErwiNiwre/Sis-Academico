<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Carrera;
use App\Postulante;
use App\Departamento;
use App\Rol;
use App\Turno;
use App\Documento;
use App\User;
use App\Cupo;
use App\Http\Requests\PostulanteRequest;
// use Symfony\Component\HttpFoundation\Request;

class PostulantesController extends Controller
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
        $postulantes = Postulante::searchp($request->ci)->orderBy('aPaterno', 'ASC')->paginate(5);
        $postutodo = Postulante::all();
        $turnos = Turno::all();
        $i = 0;

        $total=Postulante::count();

        $cont = Postulante::where('carrera_id', '1')->count();
        $secr = Postulante::where('carrera_id', '2')->count();
        $sist = Postulante::where('carrera_id', '3')->count();
        $admi = Postulante::where('carrera_id', '4')->count();
        $come = Postulante::where('carrera_id', '5')->count();
        $ling = Postulante::where('carrera_id', '6')->count();

        $mañana = Postulante::where('turno_id', '1')->count();
        $noche = Postulante::where('turno_id', '2')->count();

        $cupos=Cupo::all();

        // $postulantes->each(function($postulantes){
        //     $postulantes->carreras;
        //     $postulantes->turnos;
        // });

        $datos = array(
            'carreras' => $carreras,
            'postulantes' => $postulantes,
            'turnos' => $turnos,
            'i' => $i,
            'cont' => $cont,
            'secr' => $secr,
            'sist' => $sist,
            'admi' => $admi,
            'come' => $come,
            'ling' => $ling,
            'mañana' => $mañana,
            'noche' => $noche,
            'cupos' => $cupos,
            'total' => $total
        );
        // return $mañana;
        // return $postulantes;
        return view('postulantes.postulante')->with($datos);
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
    public function store(PostulanteRequest $request)
    {

        $usuario = new User;
        $usuario->usuario = request()->ci;
        $usuario->password = bcrypt(request()->ci);
        $usuario->rol_id = 7;
        $usuario->save();
        // return $usuario_id;

        $postulante = new Postulante;
        $postulante->ci = request()->ci;
        $postulante->expedido = request()->expedido;
        $postulante->aPaterno = strtoupper(request()->aPaterno);
        $postulante->aMaterno = strtoupper(request()->aMaterno);
        $postulante->nombre = strtoupper(request()->nombre);
        $postulante->fechaNacimiento = request()->fechaNacimiento;
        $postulante->genero = request()->genero;
        $postulante->estadoCivil = request()->estadoCivil;
        $postulante->correo = request()->correo;
        $postulante->direccion = strtoupper(request()->direccion);
        $postulante->telefono = request()->telefono;
        $postulante->celular = request()->celular;
        $postulante->nota = 0;

        $carrera_id = Carrera::findOrfail($request->carrera);
        $turno_id = Turno::findOrfail($request->turno);
        $usuario_id = User::where('usuario', '=', $request->ci)->first();

        $postulante->usuario_id = $usuario_id->id;
        $postulante->carrera_id = $carrera_id->id;
        $postulante->turno_id = $turno_id->id;
        
        $postulante->save();

        $documento = new Documento;
        $documento->documento_ci = request()->ci;
        $documento->certificadoNacimiento = strtoupper(request()->certificadoNacimiento);
        $documento->tituloBachiller = strtoupper(request()->tituloBachiller);
        $documento->depositoBancario = request()->depositoBancario;

        $postulante_id = Postulante::where('ci','=', $request->ci)->first();

        $documento->postulante_id = $postulante_id->id;

        $documento->save();
        // return $postulante_id;
        // $estudiante->carreras(request()->carrera_id);
        // return back();
        \Flash::success('El postulante ' . $postulante->nombre . ' ' . $postulante->aPaterno . ' ' . $postulante->aMaterno . ' se creo con exito.');
        return redirect('/postulantes');
        // return "gggg";
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
        // $usuarios = Usuario::where('id', '=', $estudiante->usuario_id)->first();
        $postulantes = Postulante::findOrfail($id);
        $usuario_id = User::where('id', $postulantes->usuario_id)->first();
        $rol_id = Rol::where('id', $usuario_id->rol_id)->first();
        $carrera_id = Carrera::where('id', $postulantes->carrera_id)->first();
        $turno_id = Turno::where('id', $postulantes->turno_id)->first();
        $documentos = Documento::where('postulante_id', $postulantes->id)->first();
        $departamentos = Departamento::where('id', $postulantes->expedido)->first();
        
        // return $departamentos;

        $datos = array(
            'postulantes' => $postulantes,
            'usuario_id' => $usuario_id,
            'rol_id' => $rol_id,
            'carrera_id' => $carrera_id,
            'turno_id' => $turno_id,
            'documentos' => $documentos,
            'departamentos' => $departamentos
        );
        // return $usuarios;
        return view('postulantes.postulante_datos')->with($datos);
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
        $postulantes = Postulante::findOrfail($id);
        $carrera_id = Carrera::where('id', $postulantes->carrera_id)->first();
        $turno_id = Turno::where('id', $postulantes->turno_id)->first();
        $documentos = Documento::where('postulante_id', $postulantes->id)->first();
        // $departamentos = Departamento::where('id', $postulantes->expedido)->first();

        $departamentos = Departamento::all();
        $carreras = Carrera::all();
        $turnos = Turno::all();
        
        // return $departamentos;

        $datos = array(
            'postulantes' => $postulantes,
            // 'usuario_id'=>$usuario_id,
            // 'rol_id'=>$rol_id,
            'carreras' => $carreras,
            'turnos' => $turnos,
            'documentos' => $documentos,
            'departamentos' => $departamentos
        );
        // return $usuarios;
        return view('postulantes.postulante_editar')->with($datos);
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
        $postulante = Postulante::findOrfail($id);

        $usuario = new User;
        $usuario = User::where('id', $postulante->usuario_id)->first();
        $usuario->usuario = request()->ci;
        $usuario->password = bcrypt(request()->ci);
        // $usuario->rol_id = 7;
        $usuario->save();

        $postulante->ci = request()->ci;
        $postulante->expedido = request()->expedido;
        $postulante->aPaterno = strtoupper(request()->aPaterno);
        $postulante->aMaterno = strtoupper(request()->aMaterno);
        $postulante->nombre = strtoupper(request()->nombre);
        $postulante->fechaNacimiento = request()->fechaNacimiento;
        $postulante->genero = request()->genero;
        $postulante->estadoCivil = request()->estadoCivil;
        $postulante->correo = request()->correo;
        $postulante->direccion = strtoupper(request()->direccion);
        $postulante->telefono = request()->telefono;
        $postulante->celular = request()->celular;

        $carrera_id = Carrera::findOrfail($request->carrera);
        $turno_id = Turno::findOrfail($request->turno);

        $postulante->carrera_id = $carrera_id->id;
        $postulante->turno_id = $turno_id->id;
        $postulante->save();

        $documento = new Documento;
        $documento = Documento::where('postulante_id', $postulante->id)->first();
        $documento->documento_ci = request()->ci;
        $documento->certificadoNacimiento = strtoupper(request()->certificadoNacimiento);
        $documento->tituloBachiller = strtoupper(request()->tituloBachiller);
        $documento->depositoBancario = request()->depositoBancario;
        $documento->save();

        \Flash::success('El postulante ' . $postulante->nombre . ' ' . $postulante->aPaterno . ' ' . $postulante->aMaterno . ' se modifico con exito.');
        return redirect('/postulantes');
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

    public function datosNota($id)
    {
        
        $postulantes = Postulante::findOrfail($id);
        $departamentos = Departamento::where('id', $postulantes->expedido)->first();
        $datos = array(
            'postulantes' => $postulantes,
            'departamentos' => $departamentos
        );
        // return $postulantes;
        return view('postulantes.notas.notaPos')->with($datos);
    }

    public function nota(Request $request, $id)
    {
        $request->validate([
            'nota'=>'Integer|Min:0|Max:100'
        ]);
        $postulantes = Postulante::findOrfail($id);
        $postulantes->nota = request()->nota;
        
        $postulantes->save();
        return redirect('/postulantes');
    }

    public function listacarrera(Request $request, Cupo $cupo)
    {
        // $cupos=Cupo::all();
        // return $cupos;
        $carrera=Carrera::where('id', $request->carrera_id)->first();
        $turno=Turno::where('id', $request->turno_id)->first();
        // return $carrer;
        $cupos=Cupo::where('carrera_id', $carrera->id)->where('turno_id', $turno->id)->first();
        
        $postulantesapro=Postulante::where('carrera_id', $carrera->id)->orderBy('nota', 'DESC')->get()->where('turno_id', $turno->id)->take($cupos->cantidad);
        // return $postulantesapro;

        $carreras = $carrera->carrera;
        $turnos = $turno->turno; 
        
        $nombrepdf = "Lista de Estudiantes de la carrera.pdf";
        $i = 0;
        $titulo = "Lista de aprobados al examen de admisión";
        return \PDF::loadView(
            'postulantes.listas.carrera',
            compact(
                'postulantesapro',
                'carreras',
                'turnos',
                'cupos',
                // 'periodos',
                'i',
                'titulo'
            )
        )
            ->setPaper('letter')
            ->setOption('encoding', 'utf-8')
            ->setOption('footer-right', 'Pagina [page] de [toPage]')
            ->setOption('footer-left', 'INCOS EL ALTO - 2018')
            ->stream("$nombrepdf");
    }

    public function formulario($id)
    {
        $postulantes = Postulante::findOrfail($id);
        $usuario_id = User::where('id', $postulantes->usuario_id)->first();
        $rol_id = Rol::where('id', $usuario_id->rol_id)->first();
        $carrera_id = Carrera::where('id', $postulantes->carrera_id)->first();
        $turno_id = Turno::where('id', $postulantes->turno_id)->first();
        $documentos = Documento::where('postulante_id', $postulantes->id)->first();
        $departamentos = Departamento::where('id', $postulantes->expedido)->first();

        $nombrepdf = "Formulario de Inscripción.pdf";
        $i = 0;
        $titulo = "Formulario de Inscripción Postulante";
        return \PDF::loadView(
            'postulantes.formularios.formulario',
            compact(
                'postulantes',
                'carrera_id',
                'turno_id',
                'documentos',
                'departamentos',
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
