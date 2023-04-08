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
        <h1 class="h3 mb-0 text-gray-800">Plantas Editar</h1>
    </div>
<!-- Content Row -->
        <div class="row">
<!-- Content Column -->
            <div class="col-lg-12 mb-4">
<!-- Project Card Example -->
                <div class="card shadow mb-4 py-3 border border-2 border-dark">
                    <div class="card-header py-3">
                        <h2 class="m-0 font-weight-bold text-success text-center">Editar Plantas</h2>
                    </div>
                    <div class="card-body">
                        <form action="{{route('modificar')}}" enctype='multipart/form-data' method="POST" >
                            {{csrf_field()}}
                            <label>ID de Planta</label>
                                <input class="form-control" type="text" name="id_plantas" id="id_plantas"  value="{{$planta->id_plantas}}" readonly='readonly' required >
                            @error('nombre_p')
                                <small class="form-text text-danger">{{$message}}</small>
                            @enderror
                            <label>Nombre de Planta</label>
                                <input class="form-control" type="text" name="nombre_p" id="nombre_p"  value="{{$planta->nombre_p}}" required >
                            @error('nombre_p')
                                <small class="form-text text-danger">{{$message}}</small>
                            @enderror
                            <label>Descripcion</label>
                                <input class="form-control" type="text" name="descripcion" id="descripcion"  value="{{$planta->descripcion}}" required >
                            @error('descripcion')
                                <small class="form-text text-danger">{{$message}}</small>
                            @enderror
                            <label>Humedad de Planta</label>
                                <input class="form-control" type="text" name="humedad_p" id="humedad_p"  value="{{$planta->humedad_p}}" required >
                            @error('humedad_p')
                                <small class="form-text text-danger">{{$message}}</small>
                            @enderror
                            <label>Temperatura de Planta</label>
                                <input class="form-control" type="text" name="temperatura_p" id="temperatura_p"  value="{{$planta->temperatura_p}}" required >
                            @error('temperatura_p')
                                <small class="form-text text-danger">{{$message}}</small>
                            @enderror
                            <label>Fotografia</label>
                                <input class="form-control" type="text" name="foto_p" id="foto_p"  value="{{$planta->foto_p}}" required >
                            @error('foto_p')
                                <small class="form-text text-danger">{{$message}}</small>
                            @enderror
                            <label>Tipo de Planta</label>
                                <input class="form-control" type="text" name="tipoplantas" id="tipoplantas"  value="{{$planta->tipoplantas}}" required >
                            @error('tipoplantas')
                                <small class="form-text text-danger">{{$message}}</small>
                            @enderror
                            <label>Fecha</label>
                                <input class="form-control" type="date" name="fecha" id="fecha"  value="{{$planta->fecha}}" required >
                            @error('fecha')
                                <small class="form-text text-danger">{{$message}}</small>
                            @enderror
                                <a class="btn btn-danger text-center border border-dark"  href="{{route('planta.index')}}" >Cancelar</a>
                                <button type="submit" class="btn btn-success m-2 border border-dark" value="update">Aceptar</button>
                    </div>
                        </form>
                </div>
            </div>
        </div>
    </div>
</div>