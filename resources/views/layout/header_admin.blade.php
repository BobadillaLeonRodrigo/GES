@include('layout.scripts')
<nav class="navbar navbar-expand-lg navbar navbar-dark bg-dark">
  <div class="container-fluid">
  <img src=" {{ asset('img/LTPN.png') }}" class="img-fluid" alt="Logo Empresa" width="50" height="30">
    <a class="navbar-brand "><em><strong><mark class="bg-success text-white">TechPlant</mark></strong></em></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active link-success" aria-current="page" href="{{route('login')}}">Inicio de Sesion</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active link-success" href="{{route('registro_u')}}">Registro de Usuarios</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle link-success" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Practicas
          </a>
          <ul class="dropdown-menu bg-dark" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item link-success" href="#">Practicas00</a></li>
              <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item link-success" href="#">Practica01</a></li>
              <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item link-success" href="#">Practica02</a></li>
              <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item link-success" href="#">Practica03</a></li>
              <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item link-success" href="#">Practica04</a></li>
              <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item link-success" href="#">Another action</a></li>
              <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item link-success" href="#">Something else here</a></li>
          </ul>
        </li>
      </ul>
    </div>
  </div>
  <div class="navbar-nav">
    <div class="nav-item text-nowrap">
      <a class="nav-link px-3 link-success" href="#">Cerrar Sesion</a>
    </div>
  </div>
</nav>
@yield('header-admin')