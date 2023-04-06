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
        <title>Registro de Encargados</title>
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
                                    <div class="card-header"><h3 class="text-center font-weight-light my-4">Registro de Encargados</h3></div>
                                    <div class="card-body">
                                        <form class="row g-1" method="POST" action="{{route('encargado.store')}}">
                                        {{csrf_field()}}
                                            <div class="row mb-4">
                                                <div class="col-md-3">
                                                    <div class="form-floating mb-3 mb-md-0">
                                                    <input
                                                        type="name"
                                                        class="form-control"
                                                        value="{{$idsiguiente}}"
                                                        placeholder="Ingrese Su Nombre"
                                                        id="id_encargado"
                                                        name="id_encargado"
                                                        readOnly="readOnly">
                                                        <label for="inputFirstName">Id</label>
                                                    </div>
                                                </div>
                                                <div class="col-md-3">
                                                    <div class="form-floating mb-3 mb-md-0">
                                                        <input
                                                            class="form-control"
                                                            id="nombre_en"
                                                            name="nombre_en"
                                                            type="name"
                                                            placeholder="Enter your first name"
                                                        />
                                                        @if($errors ->first('nombre_en'))
                                                            <p class='text-danger'>{{$errors->first('nombre_en')}} </p>
                                                        @endif
                                                        <label for="inputFirstName">Nombre</label>
                                                    </div>
                                                </div>
                                                <div class="col-md-3">
                                                    <div class="form-floating">
                                                        <input
                                                            class="form-control"
                                                            id="app_en"
                                                            name="app_en"
                                                            type="name"
                                                            placeholder="Enter your last name"
                                                        />
                                                        @if($errors ->first('nombre_en'))
                                                            <p class='text-danger'>{{$errors->first('nombre_en')}} </p>
                                                        @endif
                                                        <label for="inputLastName">Apellido Paterno</label>
                                                    </div>
                                                </div>
                                                <div class="col-md-3">
                                                    <div class="form-floating">
                                                        <input
                                                            class="form-control"
                                                            id="apm_en"
                                                            name="apm_en"
                                                            type="name"
                                                            placeholder="Enter your last name"
                                                        />
                                                        @if($errors ->first('nombre_en'))
                                                            <p class='text-danger'>{{$errors->first('nombre_en')}} </p>
                                                        @endif
                                                        <label for="inputLastName">Apellido Materno</label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-floating mb-3">
                                                <input
                                                    class="form-control"
                                                    id="entrada"
                                                    name="entrada"
                                                    type="time"
                                                    placeholder="Hora de entrada"
                                                />
                                                @if($errors ->first('entrada'))
                                                    <p class='text-danger'>{{$errors->first('entrada')}} </p>
                                                @endif
                                                <label for="inputEmail">Entrada</label>
                                            </div>
                                            <div class="form-floating mb-3">
                                                <input
                                                    class="form-control"
                                                    id="salida"
                                                    name="salida"
                                                    type="time"
                                                    placeholder="Hora de Salida"
                                                />
                                                @if($errors ->first('salida'))
                                                    <p class='text-danger'>{{$errors->first('salida')}} </p>
                                                @endif
                                                <label for="inputEmail">Salida</label>
                                            </div>
                                            <div class="form-floating mb-3">
                                                <input
                                                    class="form-control"
                                                    id="dias"
                                                    name="dias"
                                                    type="date"
                                                    placeholder="Dias"
                                                />
                                                @if($errors ->first('dias'))
                                                    <p class='text-danger'>{{$errors->first('dias')}} </p>
                                                @endif
                                                <label for="inputEmail">Dias</label>
                                            </div>
                                            <div class="form-floating mb-3">
                                            <select
                                                type="name"
                                                class="form-select"
                                                aria-label="Default select example"
                                                id="id_usuarios"
                                                name="id_usuarios"
                                            >
                                                <option selected> Asignacion de Usuario </option>
                                                    @foreach($usuarios as $usuario)
                                                        <option value="{{$usuario->id_usuarios}}">{{$usuario->nombre_u}}</option>
                                                    @endforeach
                                            </select>
                                                <label for="inputEmail">Tipo de Usuario</label>
                                            </div>
                                            <div class="mt-2">
                                                    <button class="btn btn-success text-center border border-dark" type="submit"><em>Crear Encargado</em></button>
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