<?php

namespace App\Http\Controllers;

use App\Models\Asignacion;
use App\Models\Mediciones;
use App\Models\Plantas;
use App\Models\Invernadero;
use Session;
use Illuminate\Http\Request;

class AsignacionController extends Controller
{
    //Usar para el cada controlador
    public function index() {
        //Consula para desplegar los datos en el panelusuarios
        $consula = asignacion::withTrashed()->
            join('mediciones','asignacion.id_mediciones','=','mediciones.id_mediciones',
                'plantas','asignacion.id_plantas','=','plantas.id_plantas',
                    'invernaderos','asignacion.id_invernadero','=','invernaderos.id_invernadero')->
                        SELECT('asignacion.id_asignacion',
                            'asignacion.id_mediciones','asignacion.id_plantas',
                                'asignacion.id_invernadero','mediciones.deleted_at',)->get();
        return view('asignacion.index')->with('consulta',$consula);
    }

    public function create() {
        $consula = asignacion::orderBy('id_asignacion','DESC')->take(1)->get();
            $cuantos = count($consula);
                if ($cuantos === 0) {
                    $idsiguiente = 1;
                } else {
                    $idsiguiente = $consula[0]->id_asignacion + 1;
                }
                        /* $TiposRoles = TiposRoles::orderBy('nombre_r')->get(); */
    //Asigna en que tipo de rol y Id del usuario se encuentra

    //Parte de la llave foranea dependiendo de la tabla
                    $sensor = sensores::all();
                        return view('medicion.create')->with('idsiguiente',$idsiguiente)->with('sensores',$sensor);
    }


//  INICIO DE LA CREACION DE CRUDS DE USUARIO


    //Crea los usuarios
    public function store(Request $request) {
        $this->validate($request,[
            //Agrega las alertas si los campos no se han añadido
            'humedad_m'=>'required',
            'temperatura_m'=>'required',
            'medicion'=>'required',
            'fecha_m'=>'required',
            'hora_m'=>'required',
        ]);
        //Crea nuevos usuarios en la tabla de Usuarios y su rol asignado
        $medicion = new mediciones;
            $medicion -> id_mediciones = $request->id_mediciones;
            $medicion -> humedad_m = $request->humedad_m;
            $medicion -> temperatura_m = $request->temperatura_m;
            $medicion -> medicion = $request->medicion;
            $medicion -> fecha_m = $request->fecha_m;
            $medicion -> hora_m = $request->hora_m;
            $medicion -> id_sensor = $request->id_sensor;
                $medicion -> save();
                    return redirect()->route('medicion.index');
    }

    //Muestra la informacion por medio de un cady para la visualizacion del usuario (boton vista)

    public function show($id_mediciones) {
        $medicion = mediciones::Select('mediciones.id_mediciones','mediciones.humedad_m',
        'mediciones.temperatura_m','mediciones.medicion','mediciones.fecha_m','mediciones.hora_m')->first();
            return view('medicion.show')->with('medicion',$medicion);
    }
    public function detalleM($id_mediciones) {
        $detalle = mediciones::find($id_mediciones);
        return view("medicion.show")->with(['detalle' => $detalle]);
    }

    //Modifica el usuario para la vista de edit con el boton Editar cambiar edit por Modificarusuario

    public function Modificarmedicion($id_mediciones) {
        //lamar a la tabla que hereda la llave foranea
        $sensor = sensores::all();
        $medicion=mediciones::withTrashed()->join('sensores','mediciones.id_sensor','=','sensores.id_sensor')
        ->select('mediciones.id_mediciones','mediciones.humedad_m','mediciones.temperatura_m','mediciones.medicion',
            'mediciones.fecha_m','mediciones.hora_m'
                ,'sensores.tiposensor as modifSen','sensores.id_sensor')->where('id_mediciones',$id_mediciones)
        ->orderBy('sensores.tiposensor')->get();
                return view('medicion.edit')->with('medicion',$medicion[0])->with('sensor',$sensor);
    }

    //modifica para el redirecion al admin, cambiar update por modificar

    public function modificar(Request $request) {
        $this->validate($request,[
            //Agrega las alertas si los campos no se han añadido
            'humedad_m'=>'required',
            'temperatura_m'=>'required',
            'medicion'=>'required',
            'fecha_m'=>'required',
            'hora_m'=>'required',
        ]);
        $medicion = mediciones::all()->find($request->id_mediciones);
        $medicion -> id_mediciones = $request->id_mediciones;
        $medicion -> humedad_m = $request->humedad_m;
        $medicion -> temperatura_m = $request->temperatura_m;
        $medicion -> medicion = $request->medicion;
        $medicion -> fecha_m = $request->fecha_m;
        $medicion -> hora_m = $request->hora_m;
            $medicion -> save();
                return redirect()->route('medicion.index');
    }
    public function activarmedicion($id_mediciones){
        mediciones::withTrashed()->where('id_mediciones',$id_mediciones)->restore();
            Session::flash('mensaje',"La medicion ha sido activado correctamente");
                return redirect()->route('medicion.index');
    }
    public function desactivamedicion($id_mediciones){
        $medicion=mediciones::find($id_mediciones);
            $medicion->delete();
            Session::flash('mensaje',"la medicion ha sido desactivado correctamente");
                return redirect()->route('medicion.index');
    }
    public function borrarmedicion($id_mediciones){
        $medicion=mediciones::withTrashed()->find($id_mediciones)->forceDelete();
            return redirect()->route('medicion.index');
    }

//fin de uso de cada controlador
}