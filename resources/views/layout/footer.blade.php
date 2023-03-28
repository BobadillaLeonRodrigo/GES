<!doctype html>
<html lang="en">
	<head>
		<!-- Required meta tags -->
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<!-- Bootstrap CSS -->
        @include('layout.scripts')
	</head>
<body>
	<div class="conteiner-fluid">
		<div class="row p-2 bg-success text-white">
			<div class="col-xs-12 col-md-6 col-lg-3">
				<p class="h3 mb-3">TechPlant</p>
					<div class="mb-1">
						<a class="text-dark text-decoration-none"><strong>Misión:</strong> Satisfacer las necesidades de los agricultores y personas dedicadas a la siembra de cultivos. </a>
					</div>
					<div class="mb-1">
						<a class="text-dark text-decoration-none"><strong>Visión:</strong> Ser una empresa reconocida en todo el país que genere la automatización, cuidado y control de los cultivos generando una buena calidad de alimentos saludables.</a>
					</div>
			</div>
			<div class="col-xs-12 col-md-6 col-lg-3">
				<p class="h5 mb-3">Informacion</p>
					<div class="mb-1">
						<a class="text-dark text-decoration-none"><strong>Objetivos de la Organización:</strong> Principalmente tendemos a dirigir la empresa al sector agrícola y aplicado a la accesibilidad para todos y a su vez la calidad de nuestros productos.</a>
					</div>
					<div class="mb-1">
						<a class="text-dark text-decoration-none"><strong>Servicios Tecnológicos.</strong></a>
					</div>
			</div>
			<div class="col-xs-12 col-md-6 col-lg-3">
				<p class="h5 mb-3">Links</p>
					<div class="mb-1">
						<a href="{{route('login')}}" class="text-dark text-decoration-none">Inicio de sesión</a>
					</div>
					<div class="mb-1">
						<a href="{{route('registro_u')}}" class="text-dark text-decoration-none">Registrarme</a>
					</div>
			</div>
			<div class="col-xs-12 col-md-6 col-lg-3">
				<p class="h5 mb-3">Contactos</p>
					<div class="mb-1">
						<a href="https://github.com/BobadillaLeonRodrigo" class="text-dark text-decoration-none">GitHub BobadillaLeonRodrigo</a>
					</div>
					<div class="mb-1">
						<a href="https://github.com/MarianaRM2" class="text-dark text-decoration-none">GitHub MarianaRM2</a>
					</div>
			</div>
				<div class="col-xs-12">
					<p class="text-white text-center">Copyright - All rights reserved © 2023</p>
				</div>
		</div>
	</div>
</body>
</html>
@yield('footer')