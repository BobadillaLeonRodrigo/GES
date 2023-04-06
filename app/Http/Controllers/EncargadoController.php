<?php

namespace App\Http\Controllers;

use App\Models\Usuarios;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\Encargado;
use Session;

class EncargadoController extends Controller {
    //Usar para el cada controlador
    public function index() {
        //Consula para desplegar los datos en el panelusuarios
        $consula = encargado::withTrashed()->join('usuarios','encargados.id_usuarios','=','usuarios.id_usuarios')->
            SELECT('encargados.id_encargado','encargados.nombre_en','encargados.app_en','encargados.apm_en','encargados.entrada',
                    'encargados.salida','encargados.dias','encargados.deleted_at',
                        'usuarios.nombre_u as usuario')->get();
        return view('encargado.index')->with('consulta',$consula);
    }

    public function create() {
        $consula = encargado::orderBy('id_encargado','DESC')->take(1)->get();
            $cuantos = count($consula);
                if ($cuantos === 0) {
                    $idsiguiente = 1;
                } else {
                    $idsiguiente = $consula[0]->id_encargado + 1;
                }
                        /* $TiposRoles = TiposRoles::orderBy('nombre_r')->get(); */
    //Asigna en que tipo de rol y Id del usuario se encuentra

    //Parte de la llave foranea dependiendo de la tabla
                    $usuarios = usuarios::all();
                        return view('encargado.create')->with('idsiguiente',$idsiguiente)->with('usuarios',$usuarios);
    }


//  INICIO DE LA CREACION DE CRUDS DE USUARIO


    //Crea los usuarios
    public function store(Request $request) {
        $this->validate($request,[
            //Agrega las alertas si los campos no se han añadido
            'nombre_en'=>'required',
            'app_en'=>'required',
            'apm_en'=>'required',
            'entrada'=>'required',
            'salida'=>'required',
            'dias'=>'required'
        ]);
        //Crea nuevos usuarios en la tabla de Usuarios y su rol asignado
        $encargado = new encargado;
            $encargado -> id_encargado = $request->id_encargado;
            $encargado -> nombre_en = $request->nombre_en;
            $encargado -> app_en = $request->app_en;
            $encargado -> apm_en = $request->apm_en;
            $encargado -> entrada = $request->entrada;
            $encargado -> salida = $request->salida;
            $encargado -> dias = $request->dias;
            $encargado -> id_usuarios = $request->id_usuarios;
                $encargado -> save();
                    return redirect()->route('encargado.index');
    }

    //Muestra la informacion por medio de un cady para la visualizacion del usuario (boton vista)

    public function show($id_encargado) {
        $encargado = encargado::Select('encargados.id_encargado','encargados.nombre_en','encargados.app_en','encargados.apm_en',
            'encargados.entrada','encargados.salida','encargados.dias')->first();
                return view('encargado.show')->with('encargado',$encargado);
    }
    public function detalleE($id_encargado) {
        $detalle = encargado::find($id_encargado);
        return view("encargado.show")->with(['detalle' => $detalle]);
    }

    //Modifica el usuario para la vista de edit con el boton Editar cambiar edit por Modificarusuario

    public function Modificarencargado($id_encargado) {
        //lamar a la tabla que hereda la llave foranea
        $usuarios = Usuarios::all();
        $encargado=encargado::withTrashed()->join('Usuarios','encargados.id_usuarios','=','Usuarios.id_usuarios')
        ->select('encargados.id_encargado','encargados.nombre_en','encargados.app_en','encargados.apm_en','encargados.entrada'
        ,'encargados.salida','encargados.dias'
        ,'Usuarios.nombre_u as modifEn','Usuarios.id_usuarios')->where('id_encargado',$id_encargado)
        ->orderBy('usuarios.nombre_u')->get();
                return view('encargado.edit')->with('encargado',$encargado[0])->with('usuarios',$usuarios);
    }

    //modifica para el redirecion al admin, cambiar update por modificar

    public function modificar(Request $request) {
        $this->validate($request,[
            //Agrega las alertas si los campos no se han añadido
            'nombre_i'=>'required',
            'lote'=>'required',
            'descripcion'=>'required',
            'entrada'=>'required',
            'salida'=>'required',
            'dias'=>'required',
        ]);
        $encargado = encargado::all()->find($request->id_encargado);
        $encargado -> id_encargado = $request->id_encargado;
        $encargado -> nombre_en = $request->nombre_en;
        $encargado -> app_en = $request->app_en;
        $encargado -> apm_en = $request->apm_en;
        $encargado -> entrada = $request->entrada;
        $encargado -> salida = $request->salida;
        $encargado -> dias = $request->dias;
            $encargado -> save();
                return redirect()->route('encargado.index');
    }
    public function activarencargado($id_encargado){
        encargado::withTrashed()->where('id_encargado',$id_encargado)->restore();
            Session::flash('mensaje',"El encargado ha sido activado correctamente");
                return redirect()->route('encargado.index');
    }
    public function desactivaencargado($id_encargado){
        $encargado=encargado::find($id_encargado);
            $encargado->delete();
            Session::flash('mensaje',"El encagado ha sido desactivado correctamente");
                return redirect()->route('encargado.index');
    }
    public function borrarencargado($id_encargado){
        $encargado=encargado::withTrashed()->find($id_encargado)->forceDelete();
            return redirect()->route('encargado.index');
    }

//fin de uso de cada controlador
}
