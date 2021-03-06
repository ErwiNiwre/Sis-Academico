<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });
Auth::routes();

Route::get('/', function () {
    return view('layouts.incos_inicio');
});

//Usuarios
// Route::resource('usuarios','UsuariosController');
Route::get('login','Auth\LoginController@showLoginForm')->name('login');
Route::post('login','Auth\LoginController@login')->name('login');
Route::post('logout','Auth\LoginController@logout')->name('logout');

// Postulante
// Route::resource('postulantes','PostulantesController');
Route::get('postulantes','PostulantesController@index')->name('postulantes.index');
Route::get('postulantes/listacarrera','PostulantesController@listacarrera')->name('postulantes.listacarrera');                     //Muestra a todos los docentes
Route::get('postulantes/create','PostulantesController@create')->name('postulantes.create');             //Muestra el formulario para crear un nuevo docentes
Route::post('postulantes', 'PostulantesController@store')->name('postulantes.store');                   //Guarda un nuevo docentes
Route::get('postulantes/{postulante}','PostulantesController@show')->name('postulantes.show');             //Muestra a un docentes
Route::get('postulantes/{postulante}/edit','PostulantesController@edit')->name('postulantes.edit');      //Edita a uno de los docentes
Route::patch('postulantes/{postulante}','PostulantesController@update')->name('postulantes.update');       //Actualiza a uno de los docentes
Route::delete('postulantes/{postulante}','PostulantesController@destroy')->name('postulantes.destroy');    //Elimina a uno de los docentes
Route::get('postulantes/{postulante}/datosNota','PostulantesController@datosNota')->name('postulantes.datosNota');
Route::patch('postulantes/{postulante}/nota','PostulantesController@nota')->name('postulantes.nota');
Route::get('postulantes/{postulante}/formulario','PostulantesController@formulario')->name('postulantes.formulario');


// Estudiantes
// Route::resource('estudiantes','EstudiantesController');
// Route::get('estudiantes/prueba','EstudiantesController@prueba')->name('estudiantes.prueba');
Route::get('estudiantes','EstudiantesController@index')->name('estudiantes.index');
Route::get('estudiantes/inscribirPos','EstudiantesController@inscribirPos')->name('estudiantes.inscribirPos');
Route::get('estudiantes/inscripcionPostulante','EstudiantesController@inscripcionPostulante')->name('estudiantes.inscripcionPostulante');                     //Muestra a todos los docentes
Route::get('estudiantes/create','EstudiantesController@create')->name('estudiantes.create');             //Muestra el formulario para crear un nuevo docentes
Route::post('estudiantes', 'EstudiantesController@store')->name('estudiantes.store');                   //Guarda un nuevo docentes
Route::get('estudiantes/{estudiante}','EstudiantesController@show')->name('estudiantes.show');             //Muestra a un docentes
Route::get('estudiantes/{estudiante}/edit','EstudiantesController@edit')->name('estudiantes.edit');      //Edita a uno de los docentes
Route::patch('estudiantes/{estudiante}','EstudiantesController@update')->name('estudiantes.update');       //Actualiza a uno de los docentes
Route::delete('estudiantes/{estudiante}','EstudiantesController@destroy')->name('estudiantes.destroy');    //Elimina a uno de los docentes
Route::get('estudiantes/{estudiante}/formulario','EstudiantesController@formulario')->name('estudiantes.formulario');
Route::get('estudiantes/{estudiante}/pensum','EstudiantesController@pensum')->name('estudiantes.pensum');
Route::get('estudiantes/{estudiante}/boletin','EstudiantesController@boletin')->name('estudiantes.boletin');
Route::get('estudiantes/{estudiante}/historial','EstudiantesController@historial')->name('estudiantes.historial');

// Docente
Route::get('docentes','DocentesController@index')->name('docentes.index');
Route::get('docentes/curso','DocentesController@curso')->name('docentes.curso');
Route::get('docentes/form_cargar_nota','DocentesController@form_cargar_nota')->name('docentes.form_cargar_nota');
Route::post('docentes/cargar_nota', 'DocentesController@cargar_nota')->name('docentes.cargar_nota');
Route::get('docentes/create','DocentesController@create')->name('docentes.create');             //Muestra el formulario para crear un nuevo docentes
Route::post('docentes', 'DocentesController@store')->name('docentes.store');                   //Guarda un nuevo docentes
Route::get('docentes/{docente}','DocentesController@show')->name('docentes.show');             //Muestra a un docentes
Route::get('docentes/{docente}/edit','DocentesController@edit')->name('docentes.edit');      //Edita a uno de los docentes
Route::patch('docentes/{docente}','DocentesController@update')->name('docentes.update');       //Actualiza a uno de los docentes
Route::delete('docentes/{docente}','DocentesController@destroy')->name('docentes.destroy');    //Elimina a uno de los docentes



// Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');

// Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');

// Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');
