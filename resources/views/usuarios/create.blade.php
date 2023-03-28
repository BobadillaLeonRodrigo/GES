@include('layout.scripts')
@include('layout.header_admin')
<section class="bg-success p-4">
<div class="container col-md-5 bg-white border-dark border-4 border rounded-5">
<h3 class="text-center mb-3">Registros Administrativo</h3>
    <form class="row g-1" method="POST" action="{{route('usuarios.store')}}">
        {{csrf_field()}}
        <div class="col-md-8 offset-md-2">
            <label for="Nombre" class="form-label">Id</label>
            <input type="name" class="form-control rounded-5 border-dark text-white bg-success"  value="{{$idsiguiente}}" placeholder="Ingrese Su Nombre" id="id_usuarios" name="id_usuarios" readOnly="readOnly">
        </div>
        <div class="col-md-8 offset-md-2">
            <label for="Nombre" class="form-label">Nombre de Usuario</label>
            <input type="name" class="form-control rounded-5 border-dark text-white bg-success" placeholder="Ingrese Su Nombre" id="nombre_u" name="nombre_u">
            @if($errors ->first('nombre_u'))
                <p class='text-danger'>{{$errors->first('nombre_u')}} </p>
            @endif
        </div>
        <div class="col-md-8 offset-md-2">
            <label for="Nombre" class="form-label">Apellido Paterno del Usuario</label>
            <input type="name" class="form-control rounded-5 border-dark text-white bg-success" placeholder="Ingrese Su Nombre" id="app_u" name="app_u">
            @if($errors ->first('nombre_u'))
                <p class='text-danger'>{{$errors->first('nombre_u')}} </p>\usuarios\create
            @endif
        </div>
        <div class="col-md-8 offset-md-2" >
            <label for="Nombre" class="form-label">Apellido Materno del Usuario</label>
            <input type="name" class="form-control rounded-5 border-dark text-white bg-success" placeholder="Ingrese Su Nombre" id="apm_u" name="apm_u">
            @if($errors ->first('nombre_u'))
                <p class='text-danger'>{{$errors->first('nombre_u')}} </p>
            @endif
        </div>
        <div class="col-md-8 offset-md-2" >
            <label for="Email" class="form-label">Correo Electronico</label>
            <input type="text" class="form-control rounded-5 border-dark text-white bg-success" placeholder="Ingrese Correo Electronico" id="email" name="email">
            @if($errors ->first('email'))
                <p class='text-danger'>{{$errors->first('email')}} </p>
            @endif
            <label class="form-label">Selección de Roles</label>
                <select type="name" class="form-select rounded-5 border-dark text-white bg-success" aria-label="Default select example" id="id_roles" name="id_roles">
                    <option selected> Tipos de Roles </option>
                    @foreach($TiposRoles as $roles)
                    <option value="{{$roles->id_roles}}">{{$roles->nombre_r}}</option>
                    @endforeach
                </select>
        </div>
        <div class="col-md-8 offset-md-2">
            <label for="password" class="form-label">Contraseña</label>
            <input type="password" class="form-control rounded-5 border-dark text-white bg-success" id="passw" placeholder="Contraseña Max. 8 Digitos" name="passw">
            @if($errors ->first('nombre_u'))
                <p class='text-danger'>{{$errors->first('nombre_u')}} </p>
            @endif
        </div>
            <button class="btn btn-dark col-md-6 my-3 offset-md-3 rounded-5 border-dark text-white bg-success" type="submit">Registrarse</button>
    </form>
</div>
</section>
@include('layout.footer')