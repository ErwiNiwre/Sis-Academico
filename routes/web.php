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

Route::get('/', function () {
    return view('layouts.incos_inicio');
});

//Usuarios
Route::resource('usuarios','UsuariosController');
Route::get('login','Auth\LoginController@showLoginForm')->name('login');
Route::post('login','Auth\LoginController@login')->name('login');

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


// Estudiantes
// Route::resource('estudiantes','EstudiantesController');
Route::get('estudiantes','EstudiantesController@index')->name('estudiantes.index');
Route::get('estudiantes/inscribirPos','EstudiantesController@inscribirPos')->name('estudiantes.inscribirPos');
Route::get('estudiantes/inscripcionPostulante','EstudiantesController@inscripcionPostulante')->name('estudiantes.inscripcionPostulante');                     //Muestra a todos los docentes
Route::get('estudiantes/create','EstudiantesController@create')->name('estudiantes.create');             //Muestra el formulario para crear un nuevo docentes
Route::post('estudiantes', 'EstudiantesController@store')->name('estudiantes.store');                   //Guarda un nuevo docentes
Route::get('estudiantes/{estudiante}','EstudiantesController@show')->name('estudiantes.show');             //Muestra a un docentes
Route::get('estudiantes/{estudiante}/edit','EstudiantesController@edit')->name('estudiantes.edit');      //Edita a uno de los docentes
Route::patch('estudiantes/{estudiantes}','EstudiantesController@update')->name('estudiantes.update');       //Actualiza a uno de los docentes
Route::delete('estudiantes/{estudiantes}','EstudiantesController@destroy')->name('estudiantes.destroy');    //Elimina a uno de los docentes


