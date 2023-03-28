@include('layout.scripts')
@include('layout.header_admin')
<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
        <meta name="generator" content="Hugo 0.84.0">
            <title>Plantas</title>
        <link rel="canonical" href="https://getbootstrap.com/docs/5.0/examples/dashboard/">
        <!-- Bootstrap core CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
            <style>
            .bd-placeholder-img {
                font-size: 1.125rem;
                text-anchor: middle;
                -webkit-user-select: none;
                -moz-user-select: none;
                user-select: none;
            }
            @media (min-width: 768px) {
                .bd-placeholder-img-lg {
                font-size: 3.5rem;
                }
            }
            </style>
        <!-- Custom styles for this template -->
        <link href="dashboard.css" rel="stylesheet">
    </head>
<body>
    <header class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-0 shadow">
    <a class="navbar-brand col-md-3 col-lg-2 me-0 px-3 text-success text-center"><h3>Administrativo</h3></a>
            <button class="navbar-toggler position-absolute d-md-none collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
                <input class="form-control form-control-dark w-100 bg-success text-white" type="text" placeholder="Buscar" aria-label="Search">
    </header>
<div class="container-fluid">
    <div class="row">
        <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-dark sidebar collapse">
            <div class="position-sticky pt-3 text-center">
            <ul class="nav flex-column">
                    <h4 class="sidebar-heading d-flex justify-content-between
                        align-items-center px-3 mb-1 text-success">
                            <span>Dashboards</span>
                    </h4>
                        <ul class="nav flex-column mb-2">
                            <li class="nav-item">
                                <a class="nav-link link-success" href="{{route('admin')}}">
                                <span data-feather="file-text"></span>
                                    Administrativo
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link active link-success" aria-current="page" href="{{route('iot')}}">
                                    <span data-feather="home"></span>
                                    IoT
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link link-success" href="{{route('usuario')}}">
                                <span data-feather="file-text"></span>
                                    Usuarios
                                </a>
                            </li>
                        </ul>
                    <h4 class="sidebar-heading d-flex justify-content-between
                        align-items-center px-3 mb-1 text-success">
                            <span>Tablas</span>
                    </h4>
                        <li class="nav-item">
                            <a class="nav-link link-success" href="{{route('tiposroles')}}">
                            <span data-feather="file"></span>
                            Tipos Roles
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link link-success" href="{{route('plantas')}}">
                            <span data-feather="shopping-cart"></span>
                            Plantas
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link link-success" href="{{route('sensores')}}">
                            <span data-feather="users"></span>
                            Sensores
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link link-success" href="{{route('mediciones')}}">
                            <span data-feather="users"></span>
                            Mediciones - Reportes
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link link-success" href="{{route('asignacion')}}">
                            <span data-feather="users"></span>
                            Asignacion
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link link-success" href="{{route('invernadero')}}">
                            <span data-feather="users"></span>
                            Invernadero
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link link-success" href="{{route('encargado')}}">
                            <span data-feather="users"></span>
                            Encargado
                            </a>
                        </li>
                </ul>
            </div>
        </nav>
        <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">

        <!-- Dependiendo de la tabla tendras su Grafica -->

            <h2>CRUD Plantas</h2>
                <div class="table-responsive border-dark">
                <a class="btn btn-dark col-md-6 my-2 offset-md-3 rounded-5 border-dark border-3 text-white bg-success" href="#">Crear</a>
                    <table class="table table-striped table-sm">
                        <thead class="table-success table-bordered border-success border-2 text-center">
                            <tr>
                                <th scope="col">ID_Plantas</th>
                                <th scope="col">Nombre Planta</th>
                                <th scope="col">Descripcion</th>
                                <th scope="col">Humedad de Planta</th>
                                <th scope="col">Temperatura de Planta</th>
                                <th scope="col">Fecha de Planta</th>
                                <th scope="col">Foto Planta</th>
                                <th scope="col">Tipo de Planta</th>
                                <th scope="col">Acciones</th>
                            </tr>
                        </thead>
                        <tbody class="text-center border-1">
                            <tr>
                                <th scope="row">1</th>
                                    <td>Papa</td>
                                    <td>Es un tubérculo comestible que crece bajo la tierra. Su principal función es almacenar o acumular nutrientes.</td>
                                    <td>90 a 95%</td>
                                    <td>7° C</td>
                                    <td>2023-03-24</td>
                                    <td>Papa.png</td>
                                    <td>Planta Herbácea</td>
                                        <td>
                                        <div class="btn-group text-center" role="group" aria-label="Basic mixed styles example">
                                            <a type="button" class="btn btn-success" href="#">Editar</a>
                                            <a type="button" class="btn btn-secondary" href="#">Vista</a>
                                            <button type="button" class="btn btn-danger" href="">Eliminar</button>
                                        </div>
                                        </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
        </main>
    </div>
</div>


        <script src="../assets/dist/js/bootstrap.bundle.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/feather-icons@4.28.0/dist/feather.min.js"
            integrity="sha384-uO3SXW5IuS1ZpFPKugNNWqTZRRglnUJK6UAZ/gxOX80nxEkN9NcGZTftn6RzhGWE"
            crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/chart.js@2.9.4/dist/Chart.min.js"
        integrity="sha384-zNy6FEbO50N+Cg5wap8IKA4M/ZnLJgzc6w2NqACZaK0u0FXfOWRRJOnQtpZun8ha"
        crossorigin="anonymous">
        </script>
        <script src="dashboard.js"></script>
    </body>
    </html>
    @include('layout.footer')