@include('layout.scripts')
@include('layout.headerpanel')
@include('layout.menuAdmin')
@include('layout.contentAdmin')
<div class="card mb-4">
                        <div class="card-header">
                            <i class="fas fa-table me-1"></i>
                                Todos los Encargados
                                <a class="btn btn-info border border-dark border-3" href="{{ route('encargado.create') }}">Crear Encargado</a>
                        </div>
                            <div class="card-body">
                                <table id="datatablesSimple" class="table table-hover border border-2 border-dark rounded-2">
                                    <thead class="text-center table-dark text-success">
                                        <tr>
                                            <th scope="col">ID_Encargado</th>
                                            <th scope="col">Nombre de Encargado</th>
                                            <th scope="col">Apellido Paterno</th>
                                            <th scope="col">Apellido Materno</th>
                                            <th scope="col">Entrada</th>
                                            <th scope="col">Salida</th>
                                            <th scope="col">Dias</th>
                                            <th scope="col">ID Usuario</th>
                                            <th scope="col">Acciones</th>
                                        </tr>
                                    </thead>
                                    @foreach ( $consulta as $c )
                                    <tbody class="text-center">
                                        <tr>
                                            <th class="table-dark text-success">{{$c -> id_encargado}}</th>
                                                <td>{{$c -> nombre_en}}</td>
                                                <td>{{$c -> app_en}}</td>
                                                <td>{{$c -> apm_en}}</td>
                                                <td>{{$c -> entrada}}</td>
                                                <td>{{$c -> salida}}</td>
                                                <td>{{$c -> dias}}</td>
                                                <td>{{$c -> usuario}}</td>
                                                <td>
                                                    <a type="button" class="btn btn-success" href="{{route('Modificarencargado',['id_encargado'=>$c->id_encargado])}}">Editar</a>
                                                    <a type="button" class="btn btn-secondary" href="{{ route('encargado.show',$c->id_encargado) }}">Vista</a>
                                                        @if($c->deleted_at)
                                                    <a href="{{route('activarencargado',['id_encargado'=>$c->id_encargado])}}">
                                                        <button type="button" class="btn btn-warning">Reactivar</button>
                                                    <a href="{{route('borrarencargado',['id_encargado'=>$c->id_encargado])}}">
                                                        <button type="button" class="btn btn-danger">Eliminar</button>
                                                    </a>
                                                </td>
                                                @else
                                                <a href="{{route('desactivaencargado',['id_encargado'=>$c->id_encargado])}}">
                                                <button type="button" class="btn btn-danger">Descativar</button>
                                                    @endif
                                            </tr>
                                    </tbody>
                                    @endforeach
                                </table>
                            </div>
                        </div>
                    </div>