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
        <h1 class="h3 mb-0 text-gray-800">Encargado Editar</h1>
    </div>
<!-- Content Row -->
        <div class="row">
<!-- Content Column -->
            <div class="col-lg-12 mb-4">
<!-- Project Card Example -->
                <div class="card shadow mb-4 py-3 border border-2 border-dark">
                    <div class="card-header py-3">
                        <h2 class="m-0 font-weight-bold text-success text-center">Editar Encargados</h2>
                    </div>
                    <div class="card-body">
                        <form action="{{route('modificar')}}" method="POST" >
                            {{csrf_field()}}
                            <label>ID de Encargado</label>
                                <input class="form-control" type="text" name="id_encargado" id="id_encargado"  value="{{$encargado->id_encargado}}" readonly='readonly' required >
                            @error('nombre_en')
                                <small class="form-text text-danger">{{$message}}</small>
                            @enderror
                            <label>Nombre del Encargado</label>
                                <input class="form-control" type="text" name="nombre_en" id="nombre_en"  value="{{$encargado->nombre_en}}" required >
                            @error('nombre_en')
                                <small class="form-text text-danger">{{$message}}</small>
                            @enderror
                            <label>Apellido Paterno</label>
                                <input class="form-control" type="text" name="app_en" id="app_en"  value="{{$encargado->app_en}}" required >
                            @error('app_en')
                                <small class="form-text text-danger">{{$message}}</small>
                            @enderror
                            <label>Apellido Materno</label>
                                <input class="form-control" type="text" name="apm_en" id="apm_en"  value="{{$encargado->apm_en}}" required >
                            @error('apm_en')
                                <small class="form-text text-danger">{{$message}}</small>
                            @enderror
                            <label>Entrada</label>
                                <input class="form-control" type="time" name="entrada" id="entrada" value="{{$encargado->entrada}}">
                            @error('entrada')
                                <small class="form-text text-danger">{{$message}}</small>
                            @enderror
                            <label>Salida</label>
                                <input class="form-control" type="time" name="salida" id="salida" value="{{$encargado->salida}}">
                            @error('salida')
                                <small class="form-text text-danger">{{$message}}</small>
                            @enderror
                            <label>Dias</label>
                                <input class="form-control" type="date" name="dias" id="dias" value="{{$encargado->dias}}">
                            @error('salida')
                                <small class="form-text text-danger">{{$message}}</small>
                            @enderror
                                <a class="btn btn-danger text-center border border-dark"  href="{{route('encargado.index')}}" >Cancelar</a>
                                <button type="submit" class="btn btn-success m-2 border border-dark" value="update">Aceptar</button>
                    </div>
                        </form>
                </div>
            </div>
        </div>
    </div>
</div>