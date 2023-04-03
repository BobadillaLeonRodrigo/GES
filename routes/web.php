<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UsuariosController;
use App\Http\Controllers\TiposRolesController;
use App\Http\Controllers\SensoresController;
use App\Http\Controllers\PlantasController;
use App\Http\Controllers\MedicionesController;
use App\Http\Controllers\InvernaderoController;
use App\Http\Controllers\EncargadoController;
use App\Http\Controllers\AsignacionController;

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

/* Route::get('/', function () {
    return view('login.login');
}); */

//Inicio de sesion con su validacion para cada rol dependiendo del usuario
Route::get('/',[UsuariosController::class,'login'])->name('login');
Route::post('validar',[UsuariosController::class,'validar'])->name('validar');
Route::get('principal',[UsuariosController::class,'principal'])->name('principal');

//Roles dependiendo del usuario
Route::get('admin',[UsuariosController::class,'admin'])->name('admin');
Route::get('iot',[UsuariosController::class,'iot'])->name('iot');
Route::get('usuario',[UsuariosController::class,'usuario'])->name('usuario');

//Formulario para crea CRUD de puros usuarios
Route::resource('usuarios',UsuariosController::class);
Route::get('registro_u',[UsuariosController::class,'registro_u'])->name('registro_u');
Route::POST('registro_usuarios',[UsuariosController::class,'registro_usuarios'])->name('registro_usuarios');

//Rutar para modificar diversor usuarios en el panel administrativo
Route::get('Modificarusuario/{id_usuarios}',[UsuariosController::class,'Modificarusuario'])->name('Modificarusuario');
Route::POST('modificar',[UsuariosController::class,'modificar'])->name('modificar');

Route::get('desactivausuario/{id_usuarios}',[UsuariosController::class,'desactivausuario'])->name('desactivausuario');

Route::get('activarusuario/{id_usuarios}',[UsuariosController::class,'activarusuario'])->name('activarusuario');

Route::get('borrarusuario/{id_usuarios}',[UsuariosController::class,'borrarusuario'])->name('borrarusuario');




//Rutar para modificar sensores en el panel administrativo
Route::resource('sensores',SensoresController::class);

//Rutar para modificar plantas en el panel administrativo
Route::resource('plantas',PlantasController::class);

//Rutar para modificar mediciones en el panel administrativo
Route::resource('mediciones',MedicionesController::class);

//Rutar para modificar invernaderos en el panel administrativo
Route::resource('invernaderos',InvernaderoController::class);

//Rutar para modificar encargado en el panel administrativo
Route::resource('encargado',EncargadoController::class);

//Rutar para modificar asignacion en el panel administrativo
Route::resource('asignacion',AsignacionController::class);

Route::get('mediciones',[UsuariosController::class,'mediciones'])->name('mediciones');