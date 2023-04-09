<?php

namespace App\Http\Controllers;

use App\Models\Usuarios;
use Illuminate\Http\Request;
use App\Models\Tiposroles;
use Illuminate\Support\Facades\Hash;
use Session;

class UsuariosController extends Controller {

//Usar para el cada controlador
    public function index() {
        //Consula para desplegar los datos en el panelusuarios
        $consula = usuarios::join('tiposroles','usuarios.id_roles','=','tiposroles.id_roles')->
            SELECT('usuarios.id_usuarios','usuarios.nombre_u','usuarios.app_u','usuarios.apm_u','usuarios.email','usuarios.passw',
                'tiposroles.nombre_r as roles')->get();
        return view('usuarios.index')->with('consulta',$consula);
    }

public function login() {
    return view('login.login');
}

    public function create() {
        $consula = usuarios::orderBy('id_usuarios','DESC')->take(1)->get();
            $cuantos = count($consula);
                if ($cuantos === 0) {
                    $idsiguiente = 1;
                } else {
                    $idsiguiente = $consula[0]->id_usuarios + 1;
                }
                        /* $TiposRoles = TiposRoles::orderBy('nombre_r')->get(); */
    //Asigna en que tipo de rol y Id del usuario se encuentra
                    $TiposRoles = TiposRoles::all();
                        return view('usuarios.create')->with('idsiguiente',$idsiguiente)->with('TiposRoles',$TiposRoles);
    }


//  INICIO DE LA CREACION DE CRUDS DE USUARIO


    //Crea los usuarios
    public function store(Request $request) {
        $this->validate($request,[
            //Agrega las alertas si los campos no se han añadido
            'nombre_u'=>'required',
            'app_u'=>'required',
            'apm_u'=>'required',
            'email'=>'required | email',
            'passw'=>'required'
        ]);
        //Crea nuevos usuarios en la tabla de Usuarios y su rol asignado
        $usuarios = new usuarios;
            $usuarios -> id_usuarios = $request->id_usuarios;
            $usuarios -> nombre_u = $request->nombre_u;
            $usuarios -> app_u = $request->app_u;
            $usuarios -> apm_u = $request->apm_u;
            $usuarios -> email = $request->email;
            $usuarios -> passw = Hash::make($request->passw);
            $usuarios -> id_roles = $request->id_roles;
                $usuarios -> save();
                    return redirect()->route('admin');
    }

    //Muestra la informacion por medio de un cady para la visualizacion del usuario (boton vista)

    public function show($id_usuarios) {
        $usuarios = usuarios::Select('usuarios.id_usuarios','usuarios.nombre_u','usuarios.app_u','usuarios.apm_u',
            'usuarios.email')->first();
                return view('usuarios.show')->with('usuarios',$usuarios);
    }
    public function detalle($id_usuarios) {
        $usuarios = usuarios::find($id_usuarios);
        return view("usuarios.show")->with(['detalle' => $usuarios]);
    }

    //Modifica el usuario para la vista de edit con el boton Editar cambiar edit por Modificarusuario

    public function Modificarusuario($id_usuarios) {
        $tiposroles = TiposRoles::all();
        $usuarios=Usuarios::withTrashed()->join('TiposRoles','Usuarios.id_roles','=','TiposRoles.id_roles')
        ->select('usuarios.id_usuarios','usuarios.nombre_u','usuarios.app_u','usuarios.apm_u','usuarios.email'
        ,'usuarios.passw'
        ,'TiposRoles.nombre_r as roles','usuarios.id_roles')->where('id_usuarios',$id_usuarios)
        ->orderBy('usuarios.nombre_u')->get();
                return view('usuarios.edit')->with('usuarios',$usuarios[0])->with('tiposroles',$tiposroles);
    }

    //modifica para el redirecion al admin, cambiar update por modificar

    public function modificar(Request $request) {
        $this->validate($request,[
            //Agrega las alertas si los campos no se han añadido
            'nombre_u'=>'required',
            'app_u'=>'required',
            'apm_u'=>'required',
            'email'=>'required | email',
            'passw'=>'required',
            'id_roles'=>''
        ]);
        $usuarios = usuarios::all()->find($request->id_usuarios);
        $usuarios -> id_usuarios = $request->id_usuarios;
        $usuarios -> nombre_u = $request->nombre_u;
        $usuarios -> app_u = $request->app_u;
        $usuarios -> apm_u = $request->apm_u;
        $usuarios -> email = $request->email;
        $usuarios -> passw = Hash::make($request->passw);
        $usuarios -> id_roles = $request->id_roles;
            $usuarios -> save();
                return redirect()->route('admin');
    }
    public function activarusuario($id_usuarios){
        usuarios::withTrashed()->where('id_usuarios',$id_usuarios)->restore();
            /*return view('formulario.alerta')->with('proceso',"Activar Empleados")
                ->with('mensaje',"El empleado ha sido activado correctamente")
                    ->with('error',1);*/
            Session::flash('mensaje',"El usuario ha sido activado correctamente");
                return redirect()->route('admin');
    }
    public function desactivausuario($id_usuarios){
        $usuarios=usuarios::find($id_usuarios);
            $usuarios->delete();
        /* return view('formulario.alerta')->with('proceso',"Desactivar Empleados")
        ->with('mensaje',"El empleado ha sido desactivado correctamente")
        ->with('error',1);*/
            Session::flash('mensaje',"El usuario ha sido desactivado correctamente");
                return redirect()->route('admin');
    }
    public function borrarusuario($id_usuarios){
        $usuarios=usuarios::withTrashed()->find($id_usuarios)->forceDelete();
            return redirect()->route('admin');
    }

//fin de uso de cada controlador

//  FIN DEL CODIGO DE USO DE CRUD DE USUARIOS


    //usuarios sin privilegios de admin y Iot unicamente se registran usuarios
    public function registro_u(){
        return view('login.registro_u');
    }

    //logica para poder registrar un usuario normal

    public function registro_usuarios(Request $request) {
        $this->validate($request,[
            //Agrega las alertas si los campos no se han añadido
            'nombre_u'=>'required',
            'app_u'=>'required',
            'apm_u'=>'required',
            'email'=>'required | email',
            'passw'=>'required'
        ]);
        //Crea nuevos usuarios en la tabla de Usuarios y su rol asignado
        $usuarios = new usuarios;
            $usuarios -> id_usuarios = $request->id_usuarios;
            $usuarios -> nombre_u = $request->nombre_u;
            $usuarios -> app_u = $request->app_u;
            $usuarios -> apm_u = $request->apm_u;
            $usuarios -> email = $request->email;
            $usuarios -> passw = Hash::make($request->passw);
            $usuarios -> id_roles = '3';
                $usuarios -> save();
                    return redirect()->route('login');
    }

    public function validar(Request $request){
        $this->validate($request,[
            'email' =>'required',
            'passw' =>'required',
                    ]);
                    $consulta = usuarios::where('email',$request->email)->get();
                    $cuantos=count($consulta);
                    if($cuantos==1 and hash::check($request->passw,$consulta[0]->passw))
                    {
                        Session::put('sessionusuario',$consulta[0]->nombre);
                        Session::put('sessionrol',$consulta[0]->id_roles);
                        Session::put('sessionid',$consulta[0]->id_usuarios);
                        return redirect()->route("principal");
                    }
                    else{
                        Session::flash('mensaje',"El Usuario y Password no son validos");
                        return redirect()->route('login');
                    };
/*         $passwordEncriptado = Hash::make($request->passw);
            return $passwordEncriptado; */
    }
//Detecta el tipo de rol del usuario para asignarlo en su vista correspondiente
    public function principal(){
        $sessionrol = session('sessionrol');
        if($sessionrol==1){
            //Redirecciona si el usuario es de tipo Administrativo
            return redirect()->route('admin');
        }
        elseif ($sessionrol==2) {
            //Redirecciona si el usuario es de tipo Administrativo
            return redirect()->route('iot');

        } elseif ($sessionrol==3) {
            return redirect()->route('usuario');
        }
        else{
            Session::flash('mensaje',"Inicia session para continuar");
            return redirect()->route('login');
        };
    }

    public function admin(){
        $consula = usuarios::withTrashed()->join('tiposroles','usuarios.id_roles','=','tiposroles.id_roles')->
            SELECT('usuarios.id_usuarios','usuarios.nombre_u','usuarios.app_u','usuarios.apm_u','usuarios.email','usuarios.passw','usuarios.deleted_at',
                'tiposroles.nombre_r as roles')->get();
        return view('roles.admin')->with('consulta',$consula);
    }
    public function iot(){
        return view('roles.iot');
    }
    public function usuario(){
        return view('roles.usuarios');
    }

    public function cerrarsesion(){
        session::forget('sessionusuario');
        session::forget('sessionrol');
        session::forget('sessionid');
        session::flush();
        Session::flash('mensaje',"La Sesion fue cerrada correctamente");
            return redirect()->route('login');
        }
}
