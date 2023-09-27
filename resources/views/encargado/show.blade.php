@include('layout.headerpanel')
@include('.layout.menuAdmin')
@include('layout.scripts')
<link href="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/style.min.css" rel="stylesheet" />
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
        <link href="{{ asset('css/styles.css') }}" rel="stylesheet" />
        <script src="{{ asset('js/scripts.js') }}"></script>
        <script src="{{asset('chart-area-demo.js')}}"></script>
        <script src="{{asset('chart-bar-demo.js')}}"></script>
        <script src="{{asset('datatables-simple-demo.js')}}"></script>
        <script src="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/umd/simple-datatables.min.js" crossorigin="anonymous"></script>
        <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>

<div class="card shadow-lg p-4 mb-3 bg-body rounded rounded-3 position-absolute top-50 start-50 translate-middle border-dark border border-3">
        <div class="card-header rounded-3">
                <h6 class="m-0 font-weight-bold text-success text-center">Informacion del Encargado</h6>
        </div>
        <div class="card-body">
                <h5 class="card-title">ID del encargado: {{ $encargado->id_encargado }}</h5>
                <h5 class="card-text">Nombre: {{ $encargado->nombre_en }}</h5>
                <h5 class="card-title">Apellido Paterno: {{ $encargado->app_en }}</h5>
                <h5 class="card-text">Apellido Materno: {{ $encargado->apm_en }}</h5>
                <h5 class="card-title">Entrada: {{ $encargado->entrada }}</h5>
                <h5 class="card-title">Salida: {{ $encargado->salida }}</h5>
                <h5 class="card-title">Dias: {{ $encargado->dias }}</h5>
                <a class="btn btn-outline-success" href="/encargado">Regresar</a>
        </div>
</div>