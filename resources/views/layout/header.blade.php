@include('layout.scripts')
<nav class="navbar navbar-expand-lg navbar navbar-dark bg-dark">
  <div class="container-fluid">
  <img src=" {{ asset('img/LTP.png') }}" class="img-fluid" alt="Logo Empresa" width="50" height="30">
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
          <a class="nav-link active link-success" href="{{route('registro_u')}}">Registrarme</a>
        </li>
      </ul>
    </div>
  </div>
</nav>
@yield('header')