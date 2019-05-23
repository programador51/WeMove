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
				<p>We M<img class="wheel" src="<?php echo RUTA;?>/imagenes/wheel.png">ve</p>
			</div>
		</div>
	</header>

	<div class="inicio container">
	<div class="row mt-3">
		<div class="col-6 mx-auto">
			<form method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>">
				<div class="form-group">
					<input type="text" class="form-control" placeholder="Matricula" name="matricula" id="matricula">
				</div>

				<div class="form-group">
					<input type="password" class="form-control" name="password" id="password" placeholder="Contraseña">
				</div>
				<input type="submit" value="Ingresar" class="btn btn-primary">
				</form>
		</div>
	</div>

	<div class="row mt-3">
		<div class="col-12 my-auto d-flex justify-content-center">
			<div class="registro">¿No tienes cuenta? <b>Registrate</b>
				<div class="d-flex justify-content-around">
					<a href="<?php echo RUTA;?>/configuraciones/c_registro.php"><img class="icono" src="<?php echo RUTA;?>/imagenes/iconos/car.png" alt="registro_conductor"></a>
					<a href="<?php echo RUTA;?>/configuraciones/registro.php"><img class="icono" src="<?php echo RUTA;?>/imagenes/iconos/user.png" alt="registro_conductor"></a>
				</div>
			</div>
		</div>
	</div>
	</div>

	<!-- BS4 -->
	<script src="<?php echo RUTA;?>/js/jquery-3.3.1.min.js"></script>
	<script src="<?php echo RUTA;?>/js/popper.min.js"></script>
	<script src="<?php echo RUTA;?>/js/bootstrap.min.js"></script>

</body>
</html>