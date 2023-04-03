<div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Vista del Usuario: {{$usuarios->nombre_u}}</h6>
                </div>
                <div class="card-body">
                 <h5 class="card-title">ID_Usuario: {{ $usuarios->id_usuarios }}</h5>
                 <h5 class="card-text">Nombre: {{ $usuarios->nombre_u }}</h5>
                 <h5 class="card-title">Apellido Paterno: {{ $usuarios->app_u }}</h5>
                 <h5 class="card-text">Apellido Materno: {{ $usuarios->apm_u }}</h5>
                 <h5 class="card-title">Correo Electronico: {{ $usuarios->email }}</h5>
                 <a class="btn btn-outline-success m-3" href="/admin">Regresar</a>
                </div>
        </div>