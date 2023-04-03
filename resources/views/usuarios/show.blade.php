<div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary"></h6>
                </div>
                <div class="card-body">
                    <h5 class="card-title">ID_Usuario: {{ $detalle->id_usuarios }}</h5>
                    <h5 class="card-text">Nombre: {{ $detalle->nombre_u }}</h5>
                    <h5 class="card-title">Apellido Paterno: {{ $detalle->app_u }}</h5>
                    <h5 class="card-text">Apellido Materno: {{ $detalle->apm_u }}</h5>
                    <h5 class="card-title">Correo Electronico: {{ $detalle->email }}</h5>
                    <a class="btn btn-outline-success m-3" href="/admin">Regresar</a>
                </div>
        </div>