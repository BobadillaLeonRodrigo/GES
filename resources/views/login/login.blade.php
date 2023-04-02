@include('layout.scripts')
@include('layout.header')

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta
            name="viewport"
            content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
        <meta name="description" content="" />
        <meta name="author" content="" />
            <title>Inicio de Sesión</title>
                <link href="{{ asset('css/styles.css') }}" rel="stylesheet" />
                    <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
    </head>
<body class="bg-success">
    <div id="layoutAuthentication">
        <div id="layoutAuthentication_content">
            <main>
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-6">
                            <div class="card shadow-lg border-dark border border-3 rounded-lg mt-5 rounded-3">
                                <div class="card-header">
                                    <h3 class="text-center font-weight-light my-4">Inicio de Sesión</h3>
                                </div>
                                    <div class="card-body">
                                        <form action="{{route('validar')}}" method="POST">
                                            {{csrf_field()}}
                                        <div class="form-floating mb-3">
                                            <input
                                                class="form-control"
                                                type="email"
                                                name="email"
                                                id="email"
                                                placeholder="name@example.com"
                                            />
                                            @if($errors ->first('email'))
                                                <p class='text-danger'>{{$errors->first('email')}} </p>
                                            @endif
                                            <label for="inputEmail">Correo Electronico</label>
                                        </div>
                                        <div class="form-floating mb-3">
                                            <input
                                                class="form-control"
                                                name="passw"
                                                id="passw"
                                                type="password"
                                                placeholder="Password"
                                            />
                                            @if($errors ->first('passw'))
                                                <p class='text-danger'>{{$errors->first('passw')}} </p>
                                            @endif
                                            <label for="inputPassword">Contraseña</label>
                                        </div>
                                            @if(Session::has('mensaje'))
                                                <div class="alert alert-success">{{Session::get('mensaje')}}</div>
                                            @endif
                                            <button class="btn btn-success text-center border border-dark" type="submit"><em>Ingresar</em></button>
                                    </div>
                                        </form>
                            </div>
                        </div>
                    </div>
                </div>
        </div>
            </main>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
    <script src="{{ asset('js/scripts.js') }}"></script>
</body>
</html>
@include('layout.footer')