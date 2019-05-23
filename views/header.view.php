<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>We Move</title>
	<!-- BS4 -->
	<link rel="stylesheet" href="<?php echo RUTA; ?>/css/bootstrap.min.css">

	<!-- Estilos -->
	<link rel="stylesheet" type="text/css" href="<?php echo RUTA; ?>/css/estilos.css">

	<!-- Tipografia -->
	<link rel="stylesheet" type="text/css" href="<?php echo RUTA; ?>/css/fuentes.css">

	<!-- Diseño adaptable -->
	<meta name="viewport" content="width=device-width, user-scalable=no,initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">

	<!-- Icono -->
	<link href="<?php echo RUTA;?>/imagenes/wheel.ico" rel="icon">
	
	<!-- Descripcion de la pagina -->
	<meta name="description" content=
	"Busca gente con destinos en común para viajar!">

	<!-- Palabras clave -->
	<meta name="keywords" content="Ruta compartida, UANL, We Move">
</head>
<body>

<header class="container">
	<div class="row menu_logo">
		<div class="col-12 mx-auto logo">
			<p class="mb-0">We M<img class="wheel" src="<?php echo RUTA;?>/imagenes/wheel.png">ve</p>
		</div>
	</div>

	<nav class="navbar navbar-expand-lg navbar-light">
		<div class="container">
			<a href="<?php echo RUTA;?>/wellcome.php" class="navbar-brand">Inicio</a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#menuNavegacion" aria-expanded="false" aria-label="Alternar Menu">
			<span class="navbar-toggler-icon"></span>
			</button>

			<div class="collapse navbar-collapse" id="menuNavegacion">
						<ul class="navbar-nav mr-auto">
							<li class="nav-item">
								<a href="<?php echo RUTA;?>/tus_viajes.php" class="nav-link">Tus viajes</a>
							</li>

							<!--BOTON DE DESPLIEGUE-->
							<li class="nav-item dropdown">
								<a href="" class="nav-link dropdown-toggle" id="navbarDropdown" data-toggle="dropdown">En trabajo</a>
								<div class="dropdown-menu" aria-labelledby="navbarDropdown">
									<a href="<?php echo RUTA;?>/#.php" class="dropdown-item">#</a>
									<a href="<?php echo RUTA;?>/#.php" class="dropdown-item">#</a>
								</div>
							</li>
							<!-- -- -->
							<li class="nav-item">
								<a href="<?php echo RUTA;?>/settings.php" class="nav-link">Configuración</a>
							</li>

							<li class="nav-item">
								<a href="<?php echo RUTA;?>/configuraciones/cerrar.php" class="nav-link">Cerrar Sesión</a>
							</li>
						</ul>
			<!--<form action="" class="form-inline my-2 my-lg-0">
			<input type="text" class="form-control mr-sm-2" type="search" placeholder="Proximamente">
			<button class="btn btn-dark my-2 my-sm-0 " type="submit">Buscar</button>
			</form>-->
			</div>
		</div>
	</nav>
</header>

<main><!-- Slide show con los mas vistos --></main>

<!-- BS4 -->
	<script src="<?php echo RUTA;?>/js/jquery-3.3.1.min.js"></script>
	<script src="<?php echo RUTA;?>/js/popper.min.js"></script>
	<script src="<?php echo RUTA;?>/js/bootstrap.min.js"></script>