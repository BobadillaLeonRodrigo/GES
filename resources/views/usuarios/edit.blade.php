@include('layout.scripts')
@include('layout.header')
<!-- Begin Page Content -->
<div class="container-fluid">
<!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">User Editar</h1>
</div>
<!-- Content Row -->
<div class="row">
<!-- Content Column -->
    <div class="col-lg-12 mb-4">
<!-- Project Card Example -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Editar Usuario</h6>
            </div>
            <div class="card-body">
                <form action="{{route('modificar')}}" method="post" >
                    {{csrf_field()}}
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
                        <select type="name" value="{{$usuarios->id_roles}}" class="form-select rounded-5 border-dark text-white bg-success" aria-label="Default select example" id="id_roles" name="id_roles">
                            <option selected> Tipos de Roles </option>
                        @foreach($tiposroles as $roles)
                            <option value="{{$roles->id_roles}}">{{$roles->nombre_r}}</option>
                        @endforeach
                        </select>
                        <div class="row">
                        <a class="btn btn-danger m-3"  href="/usuarios" >Cancelar</a>
                        <button type="submit" class="btn btn-primary m-3" value="update">Aceptar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
</div>
</div>
@include('layout.footer')