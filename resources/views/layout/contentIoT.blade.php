@include('layout.scripts')
<head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Dashboard - IoT</title>
</head>
<div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4">
                        <h1 class="mt-4 text-center">Dashboard-IoT</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item active">Dashboard</li>
                        </ol>
                        <div class="row">
                            <div class="col-xl-6 col-md-6">
                                <div class="card bg-warning text-white mb-4">
                                    <div class="card-body text-center text-dark"><strong><em>Invernadero</em></strong></div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <a class="small text-white stretched-link text-decoration-none" href="#">Visualizar CRUD</a>
                                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-6 col-md-6">
                                <div class="card bg-success text-white mb-4">
                                    <div class="card-body text-center text-dark"><strong><em>Asignacion</em></strong></div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <a class="small text-white stretched-link text-decoration-none" href="#">Visualizar CRUD</a>
                                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xl-6 col-md-6">
                                <div class="card bg-danger text-white mb-4">
                                    <div class="card-body text-center text-dark"><strong><em>Mediciones</em></strong></div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <a class="small text-white stretched-link text-decoration-none" href="#">Visualizar CRUD</a>
                                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-6 col-md-6">
                                <div class="card bg-primary text-white mb-4">
                                    <div class="card-body text-center text-dark"><strong><em>Sensores</em></strong></div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <a class="small text-white stretched-link text-decoration-none" href="#">Visualizar CRUD</a>
                                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
@yield('contentIoT')