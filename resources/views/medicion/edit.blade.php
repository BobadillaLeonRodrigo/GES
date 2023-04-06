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
        <h1 class="h3 mb-0 text-gray-800">Medicion Editar</h1>
    </div>
<!-- Content Row -->
        <div class="row">
<!-- Content Column -->
            <div class="col-lg-12 mb-4">
<!-- Project Card Example -->
                <div class="card shadow mb-4 py-3 border border-2 border-dark">
                    <div class="card-header py-3">
                        <h2 class="m-0 font-weight-bold text-success text-center">Editar Mediciones</h2>
                    </div>
                    <div class="card-body">
                        <form action="{{route('modificar')}}" method="POST" >
                            {{csrf_field()}}
                            <label>ID de Medicion</label>
                                <input class="form-control" type="text" name="id_mediciones" id="id_mediciones"  value="{{$medicion->id_mediciones}}" readonly='readonly' required >
                            @error('humedad_m')
                                <small class="form-text text-danger">{{$message}}</small>
                            @enderror
                            <label>Humedad</label>
                                <input class="form-control" type="text" name="humedad_m" id="humedad_m"  value="{{$medicion->humedad_m}}" required >
                            @error('humedad_m')
                                <small class="form-text text-danger">{{$message}}</small>
                            @enderror
                            <label>Temperatura</label>
                                <input class="form-control" type="text" name="temperatura_m" id="temperatura_m"  value="{{$medicion->temperatura_m}}" required >
                            @error('temperatura_m')
                                <small class="form-text text-danger">{{$message}}</small>
                            @enderror
                            <label>Medicion</label>
                                <input class="form-control" type="text" name="medicion" id="medicion"  value="{{$medicion->medicion}}" required >
                            @error('medicion')
                                <small class="form-text text-danger">{{$message}}</small>
                            @enderror
                            <label>Fecha</label>
                                <input class="form-control" type="date" name="fecha_m" id="fecha_m"  value="{{$medicion->fecha_m}}" required >
                            @error('medicion')
                                <small class="form-text text-danger">{{$message}}</small>
                            @enderror
                            <label>Hora</label>
                                <input class="form-control" type="time" name="hora_m" id="hora_m"  value="{{$medicion->hora_m}}" required >
                            @error('hora_m')
                                <small class="form-text text-danger">{{$message}}</small>
                            @enderror
                                <a class="btn btn-danger text-center border border-dark"  href="{{route('medicion.index')}}" >Cancelar</a>
                                <button type="submit" class="btn btn-success m-2 border border-dark" value="update">Aceptar</button>
                    </div>
                        </form>
                </div>
            </div>
        </div>
    </div>
</div>