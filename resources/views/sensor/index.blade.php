@include('layout.scripts')
@include('layout.headerpanel')
@include('layout.menuAdmin')
@include('layout.contentAdmin')
<div class="card mb-4">
                        <div class="card-header">
                            <i class="fas fa-table me-1"></i>
                                Todos los Sensores
                                <a class="btn btn-info border border-dark border-3" href="{{ route('sensor.create') }}">Crear Sensores</a>
                        </div>
                            <div class="card-body">
                                <table id="datatablesSimple" class="table table-hover border border-2 border-dark rounded-2">
                                    <thead class="text-center table-dark text-success">
                                        <tr>
                                            <th scope="col">ID_Sensor</th>
                                            <th scope="col">Tipo de Sensor</th>
                                            <th scope="col">Descripcion</th>
                                            <th scope="col">Estatus</th>
                                            <th scope="col">Acciones</th>
                                        </tr>
                                    </thead>
                                    @foreach ( $consulta as $c )
                                    <tbody class="text-center">
                                        <tr>
                                            <th class="table-dark text-success">{{$c -> id_sensor}}</th>
                                                <td>{{$c -> tiposensor}}</td>
                                                <td>{{$c -> descripcion}}</td>
                                                <td>{{$c -> estatus}}</td>
                                                <td>
                                                    <a type="button" class="btn btn-success" href="{{route('Modificarsensor',['id_sensor'=>$c->id_sensor])}}">Editar</a>
                                                    <a type="button" class="btn btn-secondary" href="{{ route('sensor.show',$c->id_sensor) }}">Vista</a>
                                                        @if($c->deleted_at)
                                                    <a href="{{route('activarsensor',['id_sensor'=>$c->id_sensor])}}">
                                                        <button type="button" class="btn btn-warning">Reactivar</button>
                                                    <a href="{{route('borrarsensor',['id_sensor'=>$c->id_sensor])}}">
                                                        <button type="button" class="btn btn-danger">Eliminar</button>
                                                    </a>
                                                </td>
                                                @else
                                                <a href="{{route('desactivasensor',['id_sensor'=>$c->id_sensor])}}">
                                                <button type="button" class="btn btn-danger">Descativar</button>
                                                    @endif
                                            </tr>
                                    </tbody>
                                    @endforeach
                                </table>
                            </div>
                        </div>
                    </div>