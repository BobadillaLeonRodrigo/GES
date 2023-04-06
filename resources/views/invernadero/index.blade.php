@include('layout.scripts')
@include('layout.headerpanel')
@include('layout.menuAdmin')
@include('layout.contentAdmin')
<div class="card mb-4">
                        <div class="card-header">
                            <i class="fas fa-table me-1"></i>
                                Todos los Invernaderos
                                <a class="btn btn-info border border-dark border-3" href="{{ route('invernadero.create') }}">Crear Encargado</a>
                        </div>
                            <div class="card-body">
                                <table id="datatablesSimple" class="table table-hover border border-2 border-dark rounded-2">
                                    <thead class="text-center table-dark text-success">
                                        <tr>
                                            <th scope="col">ID_invernadero</th>
                                            <th scope="col">Nombre de Invernadero</th>
                                            <th scope="col">Lote</th>
                                            <th scope="col">Descripcion</th>
                                            <th scope="col">ID Encargado</th>
                                            <th scope="col">Acciones</th>
                                        </tr>
                                    </thead>
                                    @foreach ( $consulta as $c )
                                    <tbody class="text-center">
                                        <tr>
                                            <th class="table-dark text-success">{{$c -> id_invernadero}}</th>
                                                <td>{{$c -> nombre_i}}</td>
                                                <td>{{$c -> lote}}</td>
                                                <td>{{$c -> descripcion}}</td>
                                                <td>{{$c -> encargado}}</td>
                                                <td>
                                                    <a type="button" class="btn btn-success" href="{{route('Modificarinvernadero',['id_invernadero'=>$c->id_invernadero])}}">Editar</a>
                                                    <a type="button" class="btn btn-secondary" href="{{ route('invernadero.show',$c->id_invernadero) }}">Vista</a>
                                                        @if($c->deleted_at)
                                                    <a href="{{route('activarinvernadero',['id_invernadero'=>$c->id_invernadero])}}">
                                                        <button type="button" class="btn btn-warning">Reactivar</button>
                                                    <a href="{{route('borrarinvernadero',['id_invernadero'=>$c->id_invernadero])}}">
                                                        <button type="button" class="btn btn-danger">Eliminar</button>
                                                    </a>
                                                </td>
                                                @else
                                                <a href="{{route('desactivainvernadero',['id_invernadero'=>$c->id_invernadero])}}">
                                                <button type="button" class="btn btn-danger">Descativar</button>
                                                    @endif
                                            </tr>
                                    </tbody>
                                    @endforeach
                                </table>
                            </div>
                        </div>
                    </div>