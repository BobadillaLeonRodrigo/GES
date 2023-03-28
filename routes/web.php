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

Route::POST('modificar',[UsuariosController::class,'modificar'])->name('modificar');

//Vistas para el uso del Dashboards de administrador (Tablas visibles)
//Route::resource('admin_tablas',UsuariosController::class);
Route::resource('sensores',SensoresController::class);
Route::resource('plantas',PlantasController::class);
Route::resource('mediciones',MedicionesController::class);
Route::resource('invernaderos',InvernaderoController::class);
Route::resource('encargado',EncargadoController::class);
Route::resource('asignacion',AsignacionController::class);

