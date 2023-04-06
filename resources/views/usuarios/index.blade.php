@include('layout.scripts')
@include('layout.header')
<div class="table-responsive">
<a class="btn btn-dark col-md-6 my-2 offset-md-3 rounded-5 border-dark border-3 text-white bg-success" href="{{ route('usuarios.create') }}"> Crear Usuarios de Diversos Roles </a>
    <table class="table border-dark">
        <thead class="table-success table-bordered border-success border-2 text-center">
            <tr>
                <th scope="col">ID_Usuario</th>
                <th scope="col">Nombre</th>
                <th scope="col">Apellido Paterno</th>
                <th scope="col">Apellido Materno</th>
                <th scope="col">Correo</th>
                <th scope="col">ID_Rol</th>
                <th scope="col">Acciones</th>
            </tr>
        </thead>
        @foreach ( $consulta as $c )
        <tbody class="text-center border-1">
            <tr>
            <th scope="row">{{$c -> id_usuarios}}</th>
                <td>{{$c -> nombre_u}}</td>
                <td>{{$c -> app_u}}</td>
                <td>{{$c -> apm_u}}</td>
                <td>{{$c -> email}}</td>
                <td>{{$c -> roles}}</td>
                <td>
                    <div class="btn-group" role="group" aria-label="Basic mixed styles example">
                    <a type="button" class="btn btn-success" href="{{route('Modificarusuario',['id_usuarios'=>$c->id_usuarios])}}">Editar</a>                        <a type="button" class="btn btn-secondary" href="{{ route('usuarios.show',$c->id_usuarios) }}">Vista</a>
                        <form action="usuarios/{{$c->id_usuarios}}" method="POST">
                                {!! csrf_field() !!}
                                @method("delete")
                                <button class="btn btn-danger m-3" type="submit">Eliminar</button>
                                </form>
                    </div>
                </td>
            </tr>
        </tbody>
        @endforeach
    </table>
</div>
@include('layout.footer')