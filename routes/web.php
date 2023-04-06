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

/*
/-------------------------------------------------------------------------------------------------------------
/   COMENTARIOS GLOBALES EN BASE A RUTAS (ROUTE) Y ERRORES POSIBLES
/-------------------------------------------------------------------------------------------------------------
/
/   1.-Cada tabla con su respectivo controlador de detalle agregarle la letra MAYUSCULA DE CADA TABLA A LLAMAR
/   2.-El id de cada tabla llmarlo por medio de cada route el unico que no se agrega es la carpera
        a llamar en la primara ruta de cada carpeta (resoure)
/   3.-Copiar y pegar cada una de las rutas, cambiando el nombre a la ruta por la tabla a realizar
/   4.-Cuando sean tablas de tipo Administrador agregar el middleware 'admin' cuando sean de otro tipo de usuario
        cambiarlo por el de cada rol (iot o usuario) si da error revisar la carpeta middleware (App\Http\middleware)
/   5.-
/
/
/
*/

//Inicio de sesion con su validacion para cada rol dependiendo del usuario
Route::get('/',[UsuariosController::class,'login'])->name('login');
Route::post('validar',[UsuariosController::class,'validar'])->name('validar');
Route::get('principal',[UsuariosController::class,'principal'])->name('principal');

//Roles dependiendo del usuario  ->middleware('admin');
Route::get('admin',[UsuariosController::class,'admin'])->name('admin')->middleware('admin');
Route::get('iot',[UsuariosController::class,'iot'])->name('iot')->middleware('iot');
Route::get('usuario',[UsuariosController::class,'usuario'])->name('usuario')->middleware('usuario');

//Formulario para crea CRUD de puros usuarios globales
Route::resource('usuarios',UsuariosController::class);
Route::get('registro_u',[UsuariosController::class,'registro_u'])->name('registro_u');
Route::POST('registro_usuarios',[UsuariosController::class,'registro_usuarios'])->name('registro_usuarios');
Route::get('cerrarsesion',[UsuariosController::class,'cerrarsesion'])->name('cerrarsesion');

//Rutar para modificar diversor usuarios en el panel administrativo USANDO UNICAMENTE EL PANEL ADMINISTRATIVO
Route::get('Modificarusuario/{id_usuarios}',[UsuariosController::class,'Modificarusuario'])->name('Modificarusuario')->middleware('admin');
Route::POST('modificar',[UsuariosController::class,'modificar'])->name('modificar');
Route::get('desactivausuario/{id_usuarios}',[UsuariosController::class,'desactivausuario'])->name('desactivausuario')->middleware('admin');
Route::get('activarusuario/{id_usuarios}',[UsuariosController::class,'activarusuario'])->name('activarusuario')->middleware('admin');
Route::get('borrarusuario/{id_usuarios}',[UsuariosController::class,'borrarusuario'])->name('borrarusuario')->middleware('admin');
Route::name('detalle')->get('detalle/{id_usuarios}',[UsuariosController::class,'detalle'])->middleware('admin');

//Rutras de Engargado creados apartir del panel del administrador y redireccionando al mismo panel
Route::resource('encargado',EncargadoController::class);
Route::get('Modificarencargado/{id_encargado}',[EncargadoController::class,'Modificarencargado'])->name('Modificarencargado')->middleware('admin');
Route::POST('modificar',[EncargadoController::class,'modificar'])->name('modificar')->middleware('admin');
Route::get('desactivaencargado/{id_encargado}',[EncargadoController::class,'desactivaencargado'])->name('desactivaencargado')->middleware('admin');
Route::get('activarencargado/{id_encargado}',[EncargadoController::class,'activarencargado'])->name('activarencargado')->middleware('admin');
Route::get('borrarencargado/{id_encargado}',[EncargadoController::class,'borrarencargado'])->name('borrarencargado')->middleware('admin');
Route::name('detalleE')->get('detalleE/{id_encargado}',[EncargadoController::class,'detalleE'])->middleware('admin');

//Rutras de Invernadero creados apartir del panel del administrador y redireccionando al mismo panel
Route::resource('invernadero',InvernaderoController::class);
Route::get('Modificarinvernadero/{id_invernadero}',[InvernaderoController::class,'Modificarinvernadero'])->name('Modificarinvernadero')->middleware('admin');
Route::POST('modificar',[InvernaderoController::class,'modificar'])->name('modificar')->middleware('admin');
Route::get('desactivainvernadero/{id_invernadero}',[InvernaderoController::class,'desactivainvernadero'])->name('desactivainvernadero')->middleware('admin');
Route::get('activarinvernadero/{id_invernadero}',[InvernaderoController::class,'activarinvernadero'])->name('activarinvernadero')->middleware('admin');
Route::get('borrarinvernadero/{id_invernadero}',[InvernaderoController::class,'borrarinvernadero'])->name('borrarinvernadero')->middleware('admin');
Route::name('detalleI')->get('detalleI/{id_invernadero}',[InvernaderoController::class,'detalleI'])->middleware('admin');

//Rutras de Sensores creados apartir del panel del administrador y redireccionando al mismo panel
Route::resource('sensor',SensoresController::class);
Route::get('Modificarsensor/{id_sensor}',[SensoresController::class,'Modificarsensor'])->name('Modificarsensor')->middleware('admin');
Route::POST('modificar',[SensoresController::class,'modificar'])->name('modificar')->middleware('admin');
Route::get('desactivasensor/{id_sensor}',[SensoresController::class,'desactivasensor'])->name('desactivasensor')->middleware('admin');
Route::get('activarsensor/{id_sensor}',[SensoresController::class,'activarsensor'])->name('activarsensor')->middleware('admin');
Route::get('borrarsensor/{id_sensor}',[SensoresController::class,'borrarsensor'])->name('borrarsensor')->middleware('admin');
Route::name('detalleS')->get('detalleS/{id_sensor}',[SensoresController::class,'detalleS'])->middleware('admin');

//Rutras de Plantas creados apartir del panel del administrador y redireccionando al mismo panel
Route::resource('planta',PlantasController::class);
Route::get('Modificarplanta/{id_plantas}',[PlantasController::class,'Modificarplanta'])->name('Modificarplanta')->middleware('admin');
Route::POST('modificar',[PlantasController::class,'modificar'])->name('modificar')->middleware('admin');
Route::get('desactivaplanta/{id_plantas}',[PlantasController::class,'desactivaplanta'])->name('desactivaplanta')->middleware('admin');
Route::get('activarplanta/{id_plantas}',[PlantasController::class,'activarplanta'])->name('activarplanta')->middleware('admin');
Route::get('borrarplanta/{id_plantas}',[PlantasController::class,'borrarplanta'])->name('borrarplanta')->middleware('admin');
Route::name('detalleP')->get('detalleP/{id_plantas}',[PlantasController::class,'detalleP'])->middleware('admin');

//Rutras de Mediciones creados apartir del panel del administrador y redireccionando al mismo panel
Route::resource('medicion',MedicionesController::class);
Route::get('Modificarmedicion/{id_mediciones}',[MedicionesController::class,'Modificarmedicion'])->name('Modificarmedicion')->middleware('admin');
Route::POST('modificar',[MedicionesController::class,'modificar'])->name('modificar')->middleware('admin');
Route::get('desactivamedicion/{id_mediciones}',[MedicionesController::class,'desactivamedicion'])->name('desactivamedicion')->middleware('admin');
Route::get('activarmedicion/{id_mediciones}',[MedicionesController::class,'activarmedicion'])->name('activarmedicion')->middleware('admin');
Route::get('borrarmedicion/{id_mediciones}',[MedicionesController::class,'borrarmedicion'])->name('borrarmedicion')->middleware('admin');
Route::name('detalleM')->get('detalleM/{id_mediciones}',[MedicionesController::class,'detalleM'])->middleware('admin');
