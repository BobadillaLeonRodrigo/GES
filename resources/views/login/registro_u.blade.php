@include('layout.scripts')
@include('layout.header')
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Registro</title>
        <link href="{{ asset('css/styles.css') }}" rel="stylesheet" />
        <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
    </head>
    <body class="bg-success">
        <div id="layoutAuthentication">
            <div id="layoutAuthentication_content">
                <main>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-7">
                                <div class="card shadow-lg border-4 border-dark rounded-3 rounded-lg mt-3">
                                    <div class="card-header"><h3 class="text-center font-weight-light my-4">Crea un Cuenta</h3></div>
                                    <div class="card-body">
                                        <form class="row" method="POST" action="{{route('registro_usuarios')}}">
                                        {{csrf_field()}}
                                            <div class="row mb-4">
                                                <div class="col-md-4">
                                                    <div class="form-floating mb-3 mb-md-0">
                                                        <input
                                                            class="form-control"
                                                            id="nombre_u"
                                                            name="nombre_u"
                                                            type="name"
                                                            placeholder="Enter your first name"
                                                        />
                                                        @if($errors ->first('nombre_u'))
                                                            <p class='text-danger'>{{$errors->first('nombre_u')}} </p>
                                                        @endif
                                                        <label for="inputFirstName">Nombre</label>
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="form-floating">
                                                        <input
                                                            class="form-control"
                                                            id="app_u"
                                                            name="app_u"
                                                            type="name"
                                                            placeholder="Enter your last name"
                                                        />
                                                        @if($errors ->first('nombre_u'))
                                                            <p class='text-danger'>{{$errors->first('nombre_u')}} </p>
                                                        @endif
                                                        <label for="inputLastName">Apellido Paterno</label>
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="form-floating">
                                                        <input
                                                            class="form-control"
                                                            id="apm_u"
                                                            name="apm_u"
                                                            type="name"
                                                            placeholder="Enter your last name"
                                                        />
                                                        @if($errors ->first('nombre_u'))
                                                            <p class='text-danger'>{{$errors->first('nombre_u')}} </p>
                                                        @endif
                                                        <label for="inputLastName">Apellido Materno</label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-floating mb-3">
                                                <input
                                                    class="form-control"
                                                    id="email"
                                                    name="email"
                                                    type="email"
                                                    placeholder="name@example.com"
                                                />
                                                @if($errors ->first('email'))
                                                    <p class='text-danger'>{{$errors->first('email')}} </p>
                                                @endif
                                                <label for="inputEmail">Correo Electronico</label>
                                            </div>
                                            <div class="row mb-3">
                                                    <div class="form-floating mb-3">
                                                        <input
                                                            class="form-control"
                                                            id="passw"
                                                            name="passw"
                                                            type="password"
                                                            placeholder="Create a password"
                                                        />
                                                        @if($errors ->first('nombre_u'))
                                                            <p class='text-danger'>{{$errors->first('nombre_u')}} </p>
                                                        @endif
                                                        <label for="inputPassword">Contraseña</label>
                                                    </div>
                                            </div>
                                            <div class="mt-4 mb-0">
                                                <div class="d-grid"><button class="btn btn-success btn-block border border-dark" type="submit"><em>Crear Cuenta</em></button></div>
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
@include('layout.footer')