@include('layout.scripts')
@include('layout.headerpanel')
@include('layout.menuAdmin')
@include('layout.contentAdmin')
<script src="{{ asset('js/jquery-3.3.1.js') }}"></script>
<script>
    $(document).ready(function(){
        $("#busca").keyup(function(){
            $busca = $(this).val();
            $contar = $busca.length;
        //console.log($contar);
            if ($contar >= 3) {
                $("#resultado").load('js_buscar?busca=' + $busca);
            //console.log($busca);
            } else {
                $("#resultado").load('js_defecto');
            }
        });
    });
</script>
<div class="card mb-4">
    <div class="card-header">
        <i class="fas fa-table me-1"></i>
            Todos los Usuarios
                <a class="btn btn-info border border-dark border-3" href="{{ route('usuarios.create') }}">Crear Usuarios</a>
                    <input class="form-control mt-2" name="busca" id="busca" type="text" placeholder="Buscar">
    </div>
        <div class="card-body" id="resultado">
            <table id="datatablesSimple" class="table table-hover border border-2 border-dark rounded-2">
                <thead class="text-center table-dark text-success">
                    <tr>
                        <th>ID_Usuario</th>
                        <th>Nombre</th>
                        <th>Apellido Paterno</th>
                        <th>Apellido Materno</th>
                        <th>Correo</th>
                        <th>ID_Rol</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                    @foreach ( $consulta as $c )
                <tbody class="text-center">
                    <tr>
                        <th class="table-dark text-success">{{$c -> id_usuarios}}</th>
                            <td>{{$c -> nombre_u}}</td>
                            <td>{{$c -> app_u}}</td>
                            <td>{{$c -> apm_u}}</td>
                            <td>{{$c -> email}}</td>
                            <td>{{$c -> roles}}</td>
                            <td>
                                <a type="button" class="btn btn-success" href="{{route('Modificarusuario',['id_usuarios'=>$c->id_usuarios])}}">Editar</a>
                                <a type="button" class="btn btn-secondary" href="{{ route('detalle',['id_usuarios'=>$c->id_usuarios])}}">Vista</a>
                                    @if($c->deleted_at)
                                        <a href="{{route('activarusuario',['id_usuarios'=>$c->id_usuarios])}}">
                                            <button type="button" class="btn btn-warning">Reactivar</button>
                                                <a href="{{route('borrarusuario',['id_usuarios'=>$c->id_usuarios])}}">
                                            <button type="button" class="btn btn-danger">Eliminar</button>
                                                </a>
                                    @else
                                        <a href="{{route('desactivausuario',['id_usuarios'=>$c->id_usuarios])}}">
                                            <button type="button" class="btn btn-danger">Descativar</button>
                                    @endif
                            </td>
                        </tr>
                </tbody>
                    @endforeach
            </table>
        </div>
    </div>
<!--Fin del Crud de todos los usuarios en el administrador-->
</div>
