<?php

namespace App\Http\Controllers;

use App\Models\Invernadero;
use App\Models\Encargado;
use Session;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;

class InvernaderoController extends Controller {
    //Usar para el cada controlador
    public function index() {
        //Consula para desplegar los datos en el panelusuarios
        $consula = invernadero::withTrashed()->join('encargados','invernaderos.id_encargado','=','encargados.id_encargado')->
            SELECT('invernaderos.id_invernadero','invernaderos.nombre_i','invernaderos.lote','invernaderos.descripcion','invernaderos.deleted_at',
                    'encargados.nombre_en as encargado')->get();
        return view('invernadero.index')->with('consulta',$consula);
    }

    public function create() {
        $consula = invernadero::orderBy('id_invernadero','DESC')->take(1)->get();
            $cuantos = count($consula);
                if ($cuantos === 0) {
                    $idsiguiente = 1;
                } else {
                    $idsiguiente = $consula[0]->id_invernadero + 1;
                }
                        /* $TiposRoles = TiposRoles::orderBy('nombre_r')->get(); */
    //Asigna en que tipo de rol y Id del usuario se encuentra

    //Parte de la llave foranea dependiendo de la tabla
                    $encargado = encargado::all();
                        return view('invernadero.create')->with('idsiguiente',$idsiguiente)->with('encargados',$encargado);
    }


//  INICIO DE LA CREACION DE CRUDS DE USUARIO


    //Crea los usuarios
    public function store(Request $request) {
        $this->validate($request,[
            //Agrega las alertas si los campos no se han añadido
            'nombre_i'=>'required',
            'lote'=>'required',
            'descripcion'=>'required'
        ]);
        //Crea nuevos usuarios en la tabla de Usuarios y su rol asignado
        $invernadero = new invernadero;
            $invernadero -> id_invernadero = $request->id_invernadero;
            $invernadero -> nombre_i = $request->nombre_i;
            $invernadero -> lote = $request->lote;
            $invernadero -> descripcion = $request->descripcion;
            $invernadero -> id_encargado = $request->id_encargado;
                $invernadero -> save();
                    return redirect()->route('invernadero.index');
    }

    //Muestra la informacion por medio de un cady para la visualizacion del usuario (boton vista)

    public function show($id_invernadero) {
        $invernadero = invernadero::find($id_invernadero);
            return view('invernadero.show', compact('invernadero'));
    }

    //Modifica el usuario para la vista de edit con el boton Editar cambiar edit por Modificarusuario

    public function Modificarinvernadero($id_invernadero) {
        //lamar a la tabla que hereda la llave foranea
        $encargados = Encargado::all();
        $invernadero=invernadero::withTrashed()->join('Encargados','invernaderos.id_encargado','=','Encargados.id_encargado')
        ->select('invernaderos.id_invernadero','invernaderos.nombre_i','invernaderos.lote','invernaderos.descripcion'
        ,'Encargados.nombre_en as modifIn','Encargados.id_encargado')->where('id_invernadero',$id_invernadero)
        ->orderBy('encargados.nombre_en')->get();
                return view('invernadero.edit')->with('invernadero',$invernadero[0])->with('encargados',$encargados);
    }

    //modifica para el redirecion al admin, cambiar update por modificar

    public function modificar(Request $request) {
        $this->validate($request,[
            //Agrega las alertas si los campos no se han añadido
            'nombre_i'=>'required',
            'lote'=>'required',
            'descripcion'=>'required',
        ]);
        $invernadero = invernadero::all()->find($request->id_invernadero);
        $invernadero -> id_invernadero = $request->id_invernadero;
        $invernadero -> nombre_i = $request->nombre_i;
        $invernadero -> lote = $request->lote;
        $invernadero -> descripcion = $request->descripcion;
            $invernadero -> save();
                return redirect()->route('invernadero.index');
    }
    public function activarinvernadero($id_invernadero){
        invernadero::withTrashed()->where('id_invernadero',$id_invernadero)->restore();
            Session::flash('mensaje',"El invernadero ha sido activado correctamente");
                return redirect()->route('invernadero.index');
    }
    public function desactivainvernadero($id_invernadero){
        $invernadero=invernadero::find($id_invernadero);
            $invernadero->delete();
            Session::flash('mensaje',"El invernadero ha sido desactivado correctamente");
                return redirect()->route('invernadero.index');
    }
    public function borrarinvernadero($id_invernadero){
        $invernadero=invernadero::withTrashed()->find($id_invernadero)->forceDelete();
            return redirect()->route('invernadero.index');
    }

//fin de uso de cada controlador
}
