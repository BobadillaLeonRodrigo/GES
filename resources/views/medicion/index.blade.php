@include('layout.scripts')
@include('layout.headerpanel')
@include('layout.menuAdmin')
@include('layout.contentAdmin')
<div class="card mb-4">
                        <div class="card-header">
                            <i class="fas fa-table me-1"></i>
                                Mediciones
                                <a class="btn btn-info border border-dark border-3" href="{{ route('medicion.create') }}">Crear Medicion</a>
                        </div>
                            <div class="card-body">
                                <table id="datatablesSimple" class="table table-hover border border-2 border-dark rounded-2">
                                    <thead class="text-center table-dark text-success">
                                        <tr>
                                            <th scope="col">ID_Medicion</th>
                                            <th scope="col">Humedad de Medicion</th>
                                            <th scope="col">Temperatura de Medicion</th>
                                            <th scope="col">Medicion(hora)</th>
                                            <th scope="col">Fecha</th>
                                            <th scope="col">Hora</th>
                                            <th scope="col">Id de Sensor</th>
                                            <th scope="col">Acciones</th>
                                        </tr>
                                    </thead>
                                    @foreach ( $consulta as $c )
                                    <tbody class="text-center">
                                        <tr>
                                            <th class="table-dark text-success">{{$c -> id_mediciones}}</th>
                                                <td>{{$c -> humedad_m}}</td>
                                                <td>{{$c -> temperatura_m}}</td>
                                                <td>{{$c -> medicion}}</td>
                                                <td>{{$c -> fecha_m}}</td>
                                                <td>{{$c -> hora_m}}</td>
                                                <td>{{$c -> sensor}}</td>
                                                <td>
                                                    <a type="button" class="btn btn-success" href="{{route('Modificarmedicion',['id_mediciones'=>$c->id_mediciones])}}">Editar</a>
                                                    <a type="button" class="btn btn-secondary" href="{{ route('medicion.show',$c->id_mediciones) }}">Vista</a>
                                                        @if($c->deleted_at)
                                                    <a href="{{route('activarmedicion',['id_mediciones'=>$c->id_mediciones])}}">
                                                        <button type="button" class="btn btn-warning">Reactivar</button>
                                                    <a href="{{route('borrarmedicion',['id_mediciones'=>$c->id_mediciones])}}">
                                                        <button type="button" class="btn btn-danger">Eliminar</button>
                                                    </a>
                                                </td>
                                                @else
                                                <a href="{{route('desactivamedicion',['id_mediciones'=>$c->id_mediciones])}}">
                                                <button type="button" class="btn btn-danger">Descativar</button>
                                                    @endif
                                            </tr>
                                    </tbody>
                                    @endforeach
                                </table>
                            </div>
                        </div>
                    </div>