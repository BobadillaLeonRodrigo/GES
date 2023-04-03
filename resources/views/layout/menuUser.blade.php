@include('layout.scripts')
<!--Inicio del Navbar lateral del menu-->
<head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
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
</head>
<div id="layoutSidenav">
            <div id="layoutSidenav_nav">
                <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                    <div class="sb-sidenav-menu">
                        <div class="nav">
                            <div class="sb-sidenav-menu-heading text-center text-success">Tipo de Usuario</div>
                            <a class="nav-link" href="{{route('usuario')}}">
                                <div class="sb-nav-link-icon"><i class="fa-solid fa-user" style="color: #32bd4e;"></i></div>
                                Usuario
                            </a>
                            <a class="nav-link" href="{{route('iot')}}">
                                <div class="sb-nav-link-icon"><i class="fa-solid fa-cloud-arrow-up" style="color: #32bd4e;"></i></div>
                                IoT
                            </a>
                            <div class="sb-sidenav-menu-heading text-center text-success">Interfaces</div>
                            <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseLayouts" aria-expanded="false" aria-controls="collapseLayouts">
                                <div class="sb-nav-link-icon"><i class="fas fa-columns" style="color: #32bd4e;"></i></div>
                                Datos
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="collapseLayouts" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav">
                                    <a class="nav-link" href="layout-static.html">Reportes</a>
                                </nav>
                            </div>
                        </div>
                    </div>
                    <div class="sb-sidenav-footer">
                        <div class="small">TechPlant</div>
                        México. EDOMEX
                    </div>
                </nav>
        </div>
@yield('menuUser')
<!--Fin del Navbar lateral menu-->