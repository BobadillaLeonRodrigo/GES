<?php

namespace App\Http\Controllers;

use App\Models\Plantas;
use Illuminate\Http\Request;
use Session;

class PlantasController extends Controller {
    //Usar para el cada controlador
    public function index() {
        //Consula para desplegar los datos en el panelusuarios
        $consula = plantas::withTrashed()->SELECT('plantas.id_plantas','plantas.nombre_p','plantas.descripcion','plantas.humedad_p',
            'plantas.temperatura_p','plantas.foto_p','plantas.tipoplantas','plantas.fecha','plantas.deleted_at')->get();
            return view('planta.index')->with('consulta',$consula);
    }

    public function create() {
        $consula = plantas::orderBy('id_plantas','DESC')->take(1)->get();
            $cuantos = count($consula);
                if ($cuantos === 0) {
                    $idsiguiente = 1;
                } else {
                    $idsiguiente = $consula[0]->id_plantas + 1;
                }
                        /* $TiposRoles = TiposRoles::orderBy('nombre_r')->get(); */
    //Asigna en que tipo de rol y Id del usuario se encuentra

    //Parte de la llave foranea dependiendo de la tabla
                        return view('planta.create')->with('idsiguiente',$idsiguiente);
    }


//  INICIO DE LA CREACION DE CRUDS DE USUARIO


    //Crea los usuarios
    public function store(Request $request) {
        $this->validate($request,[
            //Agrega las alertas si los campos no se han añadido
            'nombre_p'=>'required',
            'descripcion'=>'required',
            'humedad_p'=>'required',
            'temperatura_p'=>'required',
            'foto_p'=>'required',
            'tipoplantas'=>'required',
            'fecha'=>'required',
        ]);
        //Crea nuevos usuarios en la tabla de Usuarios y su rol asignado
        $planta = new plantas;
            $planta -> id_plantas = $request->id_plantas;
            $planta -> nombre_p = $request->nombre_p;
            $planta -> descripcion = $request->descripcion;
            $planta -> humedad_p = $request->humedad_p;
            $planta -> temperatura_p = $request->temperatura_p;
            $planta -> foto_p = $request->foto_p;
            $planta -> tipoplantas = $request->tipoplantas;
            $planta -> fecha = $request->fecha;
                $planta -> save();
                    return redirect()->route('planta.index');
    }

    //Muestra la informacion por medio de un cady para la visualizacion del usuario (boton vista)

    public function show($id_plantas) {
        $planta = plantas::Select('plantas.id_plantas','plantas.nombre_p','plantas.descripcion','plantas.humendad_p',
            'plantas.temperatura_p','plantas.foto_p','plantas.tipoplantas','plantas.fecha')->first();
                return view('planta.show')->with('planta',$planta);
    }
    public function detalleP($id_plantas) {
        $detalle = plantas::find($id_plantas);
        return view("planta.show")->with(['detalle' => $detalle]);
    }

    //Modifica el usuario para la vista de edit con el boton Editar cambiar edit por Modificarusuario

    public function Modificarplanta($id_plantas) {
        //lamar a la tabla que hereda la llave foranea
        $planta=plantas::withTrashed()->select('plantas.id_plantas','plantas.nombre_p','plantas.descripcion','plantas.humedad_p',
            'plantas.temperatura_p','plantas.foto_p','plantas.tipoplantas','plantas.fecha')->where('id_plantas',$id_plantas)->get();
                return view('planta.edit')->with('planta',$planta[0]);
    }

    //modifica para el redirecion al admin, cambiar update por modificar

    public function modificar(Request $request) {
        $this->validate($request,[
            //Agrega las alertas si los campos no se han añadido
            'nombre_p'=>'required',
            'descripcion'=>'required',
            'humedad_p'=>'required',
            'temperatura_p'=>'required',
            'foto_p'=>'required',
            'tipoplantas'=>'required',
            'fecha'=>'required',
        ]);
        $planta = plantas::all()->find($request->id_plantas);
        $planta -> id_plantas = $request->id_plantas;
        $planta -> nombre_p = $request->nombre_p;
        $planta -> descripcion = $request->descripcion;
        $planta -> humedad_p = $request->humedad_p;
        $planta -> temperatura_p = $request->temperatura_p;
        $planta -> foto_p = $request->foto_p;
        $planta -> tipoplantas = $request->tipoplantas;
        $planta -> fecha = $request->fecha;
            $planta -> save();
                return redirect()->route('planta.index');
    }
    public function activarplanta($id_plantas){
        plantas::withTrashed()->where('id_plantas',$id_plantas)->restore();
            Session::flash('mensaje',"La planta ha sido activado correctamente");
                return redirect()->route('planta.index');
    }
    public function desactivaplanta($id_plantas){
        $planta=plantas::find($id_plantas);
            $planta->delete();
            Session::flash('mensaje',"La planta ha sido desactivado correctamente");
                return redirect()->route('planta.index');
    }
    public function borrarplanta($id_plantas){
        $planta=plantas::withTrashed()->find($id_plantas)->forceDelete();
            return redirect()->route('planta.index');
    }

//fin de uso de cada controlador
}
