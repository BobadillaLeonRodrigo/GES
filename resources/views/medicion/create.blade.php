@include('layout.headerpanel')
@include('layout.scripts')
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Registro de Mediciones</title>
        <link href="{{ asset('css/styles.css') }}" rel="stylesheet" />
        <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
    </head>
    <body class="bg-success">
        <div id="layoutAuthentication">
            <div id="layoutAuthentication_content">
                <main>
                    <div class="container-fluid">
                        <div class="row justify-content-center">
                            <div class="col-lg-12">
                                <div class="card shadow-lg border-4 border-dark rounded-3 rounded-lg mt-5">
                                    <div class="card-header"><h3 class="text-center font-weight-light my-4">Registro de Mediciones</h3></div>
                                    <div class="card-body">
                                        <form class="row g-1" method="POST" action="{{route('medicion.store')}}">
                                        {{csrf_field()}}
                                            <div class="row mb-4">
                                                <div class="col-md-3">
                                                    <div class="form-floating mb-3 mb-md-0">
                                                    <input
                                                        type="name"
                                                        class="form-control"
                                                        value="{{$idsiguiente}}"
                                                        placeholder="ID"
                                                        id="id_mediciones"
                                                        name="id_mediciones"
                                                        readOnly="readOnly">
                                                        <label for="inputFirstName">Id</label>
                                                    </div>
                                                </div>
                                                <div class="col-md-3">
                                                    <div class="form-floating mb-3 mb-md-0">
                                                        <input
                                                            class="form-control"
                                                            id="humedad_m"
                                                            name="humedad_m"
                                                            type="number"
                                                            placeholder="Humedad"
                                                        />
                                                        @if($errors ->first('humedad_m'))
                                                            <p class='text-danger'>{{$errors->first('humedad_m')}} </p>
                                                        @endif
                                                        <label for="inputFirstName">Humedad</label>
                                                    </div>
                                                </div>
                                                <div class="col-md-3">
                                                    <div class="form-floating">
                                                        <input
                                                            class="form-control"
                                                            id="temperatura_m"
                                                            name="temperatura_m"
                                                            type="number"
                                                            placeholder="Temperatura"
                                                        />
                                                        @if($errors ->first('temperatura_m'))
                                                            <p class='text-danger'>{{$errors->first('temperatura_m')}} </p>
                                                        @endif
                                                        <label for="inputLastName">Temperatura</label>
                                                    </div>
                                                </div>
                                                <div class="col-md-3">
                                                    <div class="form-floating">
                                                        <input
                                                            class="form-control"
                                                            id="medicion"
                                                            name="medicion"
                                                            type="text"
                                                            placeholder="Medicion(hora)"
                                                        />
                                                        @if($errors ->first('medicion'))
                                                            <p class='text-danger'>{{$errors->first('medicion')}} </p>
                                                        @endif
                                                        <label for="inputLastName">Medicion</label>
                                                    </div>
                                                </div>
                                                <div class="col-md-3">
                                                    <div class="form-floating">
                                                        <input
                                                            class="form-control"
                                                            id="fecha_m"
                                                            name="fecha_m"
                                                            type="date"
                                                            placeholder="Fecha"
                                                        />
                                                        @if($errors ->first('fecha_m'))
                                                            <p class='text-danger'>{{$errors->first('fecha_m')}} </p>
                                                        @endif
                                                        <label for="inputLastName">Fecha</label>
                                                    </div>
                                                </div>
                                                <div class="col-md-3">
                                                    <div class="form-floating">
                                                        <input
                                                            class="form-control"
                                                            id="hora_m"
                                                            name="hora_m"
                                                            type="time"
                                                            placeholder="Hora"
                                                        />
                                                        @if($errors ->first('hora_m'))
                                                            <p class='text-danger'>{{$errors->first('hora_m')}} </p>
                                                        @endif
                                                        <label for="inputLastName">Hora</label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-floating mb-3">
                                            <select
                                                type="name"
                                                class="form-select"
                                                aria-label="Default select example"
                                                id="id_sensor"
                                                name="id_sensor"
                                            >
                                                <option selected> Asignacion de Sensor </option>
                                                    @foreach($sensores as $sensor)
                                                        <option value="{{$sensor->id_sensor}}">{{$sensor->tiposensor}}</option>
                                                    @endforeach
                                            </select>
                                                <label for="inputEmail">Tipo de Sensor</label>
                                            </div>
                                            <div class="mt-2">
                                                    <button class="btn btn-success text-center border border-dark" type="submit"><em>Crear Medicion</em></button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </main>
            </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="{{ asset('js/scripts.js') }}"></script>
    </body>
</html>