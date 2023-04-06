@include('layout.scripts')
@include('layout.headerpanel')
@include('layout.menuAdmin')
@include('layout.contentAdmin')
<div class="card mb-4">
                        <div class="card-header">
                            <i class="fas fa-table me-1"></i>
                                Todos las Plantas
                                <a class="btn btn-info border border-dark border-3" href="{{ route('planta.create') }}">Crear Plantas</a>
                        </div>
                            <div class="card-body">
                                <table id="datatablesSimple" class="table table-hover border border-2 border-dark rounded-2">
                                    <thead class="text-center table-dark text-success">
                                        <tr>
                                            <th scope="col">ID_Plantas</th>
                                            <th scope="col">Nombre de Planta</th>
                                            <th scope="col">Descripcion</th>
                                            <th scope="col">Humedad de Planta</th>
                                            <th scope="col">Temperatura de Planta </th>
                                            <th scope="col">Fotografia</th>
                                            <th scope="col">Tipo de Planta</th>
                                            <th scope="col">Fecha</th>
                                            <th scope="col">Acciones</th>
                                        </tr>
                                    </thead>
                                    @foreach ( $consulta as $c )
                                    <tbody class="text-center">
                                        <tr>
                                            <th class="table-dark text-success">{{$c -> id_plantas}}</th>
                                                <td>{{$c -> nombre_p}}</td>
                                                <td>{{$c -> descripcion}}</td>
                                                <td>{{$c -> humedad_p}}</td>
                                                <td>{{$c -> temperatura_p}}</td>
                                                <td>{{$c -> foto_p}}</td>
                                                <td>{{$c -> tipoplantas}}</td>
                                                <td>{{$c -> fecha}}</td>
                                                <td>
                                                    <a type="button" class="btn btn-success" href="{{route('Modificarplanta',['id_plantas'=>$c->id_plantas])}}">Editar</a>
                                                    <a type="button" class="btn btn-secondary" href="{{ route('planta.show',$c->id_plantas) }}">Vista</a>
                                                        @if($c->deleted_at)
                                                    <a href="{{route('activarplanta',['id_plantas'=>$c->id_plantas])}}">
                                                        <button type="button" class="btn btn-warning">Reactivar</button>
                                                    <a href="{{route('borrarplanta',['id_plantas'=>$c->id_plantas])}}">
                                                        <button type="button" class="btn btn-danger">Eliminar</button>
                                                    </a>
                                                </td>
                                                @else
                                                <a href="{{route('desactivaplanta',['id_plantas'=>$c->id_plantas])}}">
                                                <button type="button" class="btn btn-danger">Descativar</button>
                                                    @endif
                                            </tr>
                                    </tbody>
                                    @endforeach
                                </table>
                            </div>
                        </div>
                    </div>