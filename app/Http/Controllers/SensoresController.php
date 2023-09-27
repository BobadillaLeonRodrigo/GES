<?php

namespace App\Http\Controllers;

use App\Models\Sensores;
use Illuminate\Http\Request;
use Session;

class SensoresController extends Controller {
    //Usar para el cada controlador
    public function index() {
        //Consula para desplegar los datos en el panelusuarios
        $consula = sensores::withTrashed()->SELECT('sensores.id_sensor','sensores.tiposensor','sensores.descripcion','sensores.estatus','sensores.deleted_at')->get();
            return view('sensor.index')->with('consulta',$consula);
    }

    public function create() {
        $consula = sensores::orderBy('id_sensor','DESC')->take(1)->get();
            $cuantos = count($consula);
                if ($cuantos === 0) {
                    $idsiguiente = 1;
                } else {
                    $idsiguiente = $consula[0]->id_sensor + 1;
                }
                        /* $TiposRoles = TiposRoles::orderBy('nombre_r')->get(); */
    //Asigna en que tipo de rol y Id del usuario se encuentra

    //Parte de la llave foranea dependiendo de la tabla
                        return view('sensor.create')->with('idsiguiente',$idsiguiente);
    }


//  INICIO DE LA CREACION DE CRUDS DE USUARIO


    //Crea los usuarios
    public function store(Request $request) {
        $this->validate($request,[
            //Agrega las alertas si los campos no se han añadido
            'tiposensor'=>'required',
            'descripcion'=>'required',
            'estatus'=>'required',
        ]);
        //Crea nuevos usuarios en la tabla de Usuarios y su rol asignado
        $sensor = new sensores;
            $sensor -> id_sensor = $request->id_sensor;
            $sensor -> tiposensor = $request->tiposensor;
            $sensor -> descripcion = $request->descripcion;
            $sensor -> estatus = $request->estatus;
                $sensor -> save();
                    return redirect()->route('sensor.index');
    }

    //Muestra la informacion por medio de un cady para la visualizacion del usuario (boton vista)

    public function show($id_invernadero) {
        $sensor = sensores::find($id_invernadero);
            return view('sensor.show', compact('sensor'));
    }

    //Modifica el usuario para la vista de edit con el boton Editar cambiar edit por Modificarusuario

    public function Modificarsensor($id_sensor) {
        //lamar a la tabla que hereda la llave foranea
        $sensor=sensores::withTrashed()->select('sensores.id_sensor','sensores.tiposensor',
        'sensores.descripcion','sensores.estatus')->where('id_sensor',$id_sensor)->get();
                return view('sensor.edit')->with('sensor',$sensor[0]);
    }

    //modifica para el redirecion al admin, cambiar update por modificar

    public function modificar(Request $request) {
        $this->validate($request,[
            //Agrega las alertas si los campos no se han añadido
            'tiposensor'=>'required',
            'descripcion'=>'required',
            'estatus'=>'required',
        ]);
        $sensor = sensores::all()->find($request->id_sensor);
        $sensor -> id_sensor = $request->id_sensor;
        $sensor -> tiposensor = $request->tiposensor;
        $sensor -> descripcion = $request->descripcion;
        $sensor -> estatus = $request->estatus;
            $sensor -> save();
                return redirect()->route('sensor.index');
    }
    public function activarsensor($id_sensor){
        sensores::withTrashed()->where('id_sensor',$id_sensor)->restore();
            Session::flash('mensaje',"El sensor ha sido activado correctamente");
                return redirect()->route('sensor.index');
    }
    public function desactivasensor($id_sensor){
        $sensor=sensores::find($id_sensor);
            $sensor->delete();
            Session::flash('mensaje',"El sensor ha sido desactivado correctamente");
                return redirect()->route('sensor.index');
    }
    public function borrarsensor($id_sensor){
        $sensor=sensores::withTrashed()->find($id_sensor)->forceDelete();
            return redirect()->route('sensor.index');
    }

//fin de uso de cada controlador
}
