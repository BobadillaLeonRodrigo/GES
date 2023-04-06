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
        <title>Registro de Plantas</title>
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
                                    <div class="card-header"><h3 class="text-center font-weight-light my-4">Registro de Plantas</h3></div>
                                    <div class="card-body">
                                        <form class="row g-1" method="POST" action="{{route('planta.store')}}">
                                        {{csrf_field()}}
                                            <div class="row mb-4">
                                                <div class="col-md-3">
                                                    <div class="form-floating mb-3 mb-md-0">
                                                    <input
                                                        type="name"
                                                        class="form-control"
                                                        value="{{$idsiguiente}}"
                                                        placeholder="ID"
                                                        id="id_plantas"
                                                        name="id_plantas"
                                                        readOnly="readOnly">
                                                        <label for="inputFirstName">Id</label>
                                                    </div>
                                                </div>
                                                <div class="col-md-3">
                                                    <div class="form-floating mb-3 mb-md-0">
                                                        <input
                                                            class="form-control"
                                                            id="nombre_p"
                                                            name="nombre_p"
                                                            type="text"
                                                            placeholder="Tipo de Sensor"
                                                        />
                                                        @if($errors ->first('nombre_p'))
                                                            <p class='text-danger'>{{$errors->first('nombre_p')}} </p>
                                                        @endif
                                                        <label for="inputFirstName">Nombre de Planta</label>
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
                                                            id="humedad_p"
                                                            name="humedad_p"
                                                            type="text"
                                                            placeholder="Humedad"
                                                        />
                                                        @if($errors ->first('humedad_p'))
                                                            <p class='text-danger'>{{$errors->first('humedad_p')}} </p>
                                                        @endif
                                                        <label for="inputLastName">Humedad de Planta</label>
                                                    </div>
                                                </div>
                                                <div class="col-md-3">
                                                    <div class="form-floating">
                                                        <input
                                                            class="form-control"
                                                            id="temperatura_p"
                                                            name="temperatura_p"
                                                            type="text"
                                                            placeholder="Temperatura"
                                                        />
                                                        @if($errors ->first('temperatura_p'))
                                                            <p class='text-danger'>{{$errors->first('temperatura_p')}} </p>
                                                        @endif
                                                        <label for="inputLastName">Temperatura de Planta</label>
                                                    </div>
                                                </div>
                                                <div class="col-md-3">
                                                    <div class="form-floating">
                                                        <input
                                                            class="form-control"
                                                            id="foto_p"
                                                            name="foto_p"
                                                            type="text"
                                                            placeholder="Imagen de Planta"
                                                        />
                                                        @if($errors ->first('foto_p'))
                                                            <p class='text-danger'>{{$errors->first('foto_p')}} </p>
                                                        @endif
                                                        <label for="inputLastName">Foto Planta</label>
                                                    </div>
                                                </div>
                                                <div class="col-md-3">
                                                    <div class="form-floating">
                                                        <input
                                                            class="form-control"
                                                            id="tipoplanta"
                                                            name="tipoplanta"
                                                            type="text"
                                                            placeholder="Tipo de la Planta"
                                                        />
                                                        @if($errors ->first('tipoplanta'))
                                                            <p class='text-danger'>{{$errors->first('tipoplanta')}} </p>
                                                        @endif
                                                        <label for="inputLastName">Tipo de Planta</label>
                                                    </div>
                                                </div>
                                                <div class="col-md-3">
                                                    <div class="form-floating">
                                                        <input
                                                            class="form-control"
                                                            id="fecha"
                                                            name="fecha"
                                                            type="date"
                                                            placeholder="Fecha de planta"
                                                        />
                                                        @if($errors ->first('fecha'))
                                                            <p class='text-danger'>{{$errors->first('fecha')}} </p>
                                                        @endif
                                                        <label for="inputLastName">Fecha</label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="mt-2">
                                                    <button class="btn btn-success text-center border border-dark" type="submit"><em>Crear Planta</em></button>
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