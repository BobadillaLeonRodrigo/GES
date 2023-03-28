@include('layout.scripts')
@include('layout.header')
<section class="bg-success">
    <div class="container-fluid p-4">
        <div class="row justify-content-center align-items-center">
            <div class="col-xl-5 col-md-6 col-lg-3">
                <div class="card shadow-2-strong border-dark border-3 border rounded-5">
                    <!-- Parte del login card-body -->
                    <div class="card-body p-1 text-center bg-white rounded-5">
                        <h3 class="mb-5">Inicio de Sesion </h3>
                            <form action="{{route('validar')}}" method="POST">
                                {{csrf_field()}}
                                    <div class="form-outline mb-4">
                                        <label class="form-label" for="typeEmailX-2">Correo Electronico</label>
                                            <input  type="email" name="email" id="email"
                                                class="text-white form-control form-control-lg border-dark bg-success border-3 rounded-4"/>
                                        @if($errors ->first('email'))
                                        <p class='text-danger'>{{$errors->first('email')}} </p>
                                        @endif
                                    </div>
                                        <div class="form-outline mb-4">
                                            <label class="form-label" for="typePasswordX-2">Contraseña</label>
                                                <input type="password" name="passw" id="passw"
                                                    class="text-white form-control form-control-lg border-dark bg-success border-3 rounded-4"/>
                                            @if($errors ->first('passw'))
                                            <p class='text-danger'>{{$errors->first('passw')}} </p>
                                            @endif
                                        </div>
                                            @if(Session::has('mensaje'))
                                                <div class="alert alert-success">{{Session::get('mensaje')}}</div>
                                            @endif
                                                    <button class="btn btn-success border-dark border-3 btn-lg btn-block rounded-3"
                                                        type="submit">Ingresar</button>
                            </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@include('layout.footer')