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
        <title>Registro de Sensores</title>
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
                                    <div class="card-header"><h3 class="text-center font-weight-light my-4">Registro de Sensores</h3></div>
                                    <div class="card-body">
                                        <form class="row g-1" method="POST" action="{{route('sensor.store')}}">
                                        {{csrf_field()}}
                                            <div class="row mb-4">
                                                <div class="col-md-3">
                                                    <div class="form-floating mb-3 mb-md-0">
                                                    <input
                                                        type="name"
                                                        class="form-control"
                                                        value="{{$idsiguiente}}"
                                                        placeholder="ID"
                                                        id="id_sensor"
                                                        name="id_sensor"
                                                        readOnly="readOnly">
                                                        <label for="inputFirstName">Id</label>
                                                    </div>
                                                </div>
                                                <div class="col-md-3">
                                                    <div class="form-floating mb-3 mb-md-0">
                                                        <input
                                                            class="form-control"
                                                            id="tiposensor"
                                                            name="tiposensor"
                                                            type="text"
                                                            placeholder="Tipo de Sensor"
                                                        />
                                                        @if($errors ->first('tiposensor'))
                                                            <p class='text-danger'>{{$errors->first('tiposensor')}} </p>
                                                        @endif
                                                        <label for="inputFirstName">Tipo de Sensor</label>
                                                    </div>
                                                </div>
                                                <div class="col-md-3">
                                                    <div class="form-floating">
                                                        <input
                                                            class="form-control"
                                                            id="descripcion"
                                                            name="descripcion"
                                                            type="text"
                                                            placeholder="Descripcion"
                                                        />
                                                        @if($errors ->first('descripcion'))
                                                            <p class='text-danger'>{{$errors->first('descripcion')}} </p>
                                                        @endif
                                                        <label for="inputLastName">Descripcion</label>
                                                    </div>
                                                </div>
                                                <div class="col-md-3">
                                                    <div class="form-floating">
                                                        <input
                                                            class="form-control"
                                                            id="estatus"
                                                            name="estatus"
                                                            type="text"
                                                            placeholder="Estatus"
                                                        />
                                                        @if($errors ->first('estatus'))
                                                            <p class='text-danger'>{{$errors->first('estatus')}} </p>
                                                        @endif
                                                        <label for="inputLastName">Estatus del Sensor</label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="mt-2">
                                                    <button class="btn btn-success text-center border border-dark" type="submit"><em>Crear Sensor</em></button>
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