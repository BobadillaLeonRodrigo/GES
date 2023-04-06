@include('layout.headerpanel')
@include('layout.scripts')
<link href="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/style.min.css" rel="stylesheet" />
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
        <link href="{{ asset('css/styles.css') }}" rel="stylesheet" />
        <script src="{{ asset('js/scripts.js') }}"></script>
        <script src="{{asset('js/chart-area-demo.js')}}"></script>
        <script src="{{asset('js/chart-bar-demo.js')}}"></script>
        <script src="{{asset('js/datatables-simple-demo.js')}}"></script>
        <script src="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/umd/simple-datatables.min.js" crossorigin="anonymous"></script>
        <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
<!-- Begin Page Content -->
<div class="container">
<!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">User Editar</h1>
    </div>
<!-- Content Row -->
        <div class="row">
<!-- Content Column -->
            <div class="col-lg-12 mb-4">
<!-- Project Card Example -->
                <div class="card shadow mb-4 py-3 border border-2 border-dark">
                    <div class="card-header py-3">
                        <h2 class="m-0 font-weight-bold text-success text-center">Editar Usuario</h2>
                    </div>
                    <div class="card-body">
                        <form action="{{route('modificar')}}" method="POST" >
                            {{csrf_field()}}
                            <label>ID del Usuario</label>
                                <input class="form-control" type="text" name="id_usuarios" id="id_usuarios"  value="{{$usuarios->id_usuarios}}" readonly='readonly' required >
                            @error('nombre_u')
                                <small class="form-text text-danger">{{$message}}</small>
                            @enderror
                            <label>Nombre de Usuario</label>
                                <input class="form-control" type="text" name="nombre_u" id="nombre_u"  value="{{$usuarios->nombre_u}}" required >
                            @error('nombre_u')
                                <small class="form-text text-danger">{{$message}}</small>
                            @enderror
                            <label>Apellido Paterno</label>
                                <input class="form-control" type="text" name="app_u" id="app_u"  value="{{$usuarios->app_u}}" required >
                            @error('app_u')
                                <small class="form-text text-danger">{{$message}}</small>
                            @enderror
                            <label>Apellido Materno</label>
                                <input class="form-control" type="text" name="apm_u" id="apm_u"  value="{{$usuarios->apm_u}}" required >
                            @error('apm_u')
                                <small class="form-text text-danger">{{$message}}</small>
                            @enderror
                            <label>Correo Electronico</label>
                                <input class="form-control" type="Email" name="email" id="email" value="{{$usuarios->email}}">
                            @error('email')
                                <small class="form-text text-danger">{{$message}}</small>
                            @enderror
                            <label>Contraseña</label>
                                <input class="form-control" type="Password" name="passw" id="passw" value="{{$usuarios->passw}}">
                            @error('passw')
                                <small class="form-text text-danger">{{$message}}</small>
                            @enderror
                                <label class="form-label">Selección de Roles</label>
                                    <select type="name" class="form-select" aria-label="Default select example"  name="id_roles">
                                        <option selected value="{{$usuarios->id_roles}}" > Tipos de Roles </option>
                            @foreach($tiposroles as $roles)
                                <option value="{{$roles->id_roles}}">{{$roles->nombre_r}}</option>
                            @endforeach
                                    </select>
                                        <a class="btn btn-danger text-center border border-dark"  href="{{route('admin')}}" >Cancelar</a>
                                            <button type="submit" class="btn btn-success m-2 border border-dark" value="update">Aceptar</button>
                    </div>
                        </form>
                </div>
            </div>
        </div>
    </div>
</div>