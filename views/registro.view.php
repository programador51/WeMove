<!DOCTYPE html>
<html lang="en">
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

	<div class="container">
		<div class="row">
			<form class="col-10 col-lg-5 mx-auto my-3" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>" method="post" enctype="multipart/form-data">

			<div class="col-12 mx-auto">
				<h1>Registro - Pasajeros</h1>
				<p>Completa este formulario para crear una cuenta en "We Move" y poder hacer uso de ella como pasajero. 
				Posteriormente, podras crear una cuenta como conductor si asi lo deseas.</p>
			</div>

			<div class="form-group row mb-2">
				<input class="col-12 form-control" type="number" placeholder="Matricula" name="matricula" id="matricula" required>
			</div>

			<div class="row mb-2">
				<input class="col-12 form-control" type="text" placeholder="Nombre" name="nombre" id="nombre" required>
			</div>

			<div class="row mb-2">
				<input class="col-12 form-control" type="text" placeholder="Apellido Paterno" name="paterno" id="paterno" required>
			</div>

			<div class="row mb-2">
				<input class="col-12 form-control" type="text" placeholder="Apellido Materno" name="materno" id="materno" required>
			</div>

			<div class="row mb-2">
					<select class="col-12 form-control" name="sexo" id="sexo" required>
						<option value="M">Masculino</option>
						<option value="F">Femenino</option>
					</select>
			</div>


			<div class="row mb-2">
				<input class="col-12 form-control" type="text" placeholder="Teléfono" name="telefono" id="telefono" required>
			</div>

			<div class="row mb-2">
				<input class="col-12 form-control" type="email" placeholder="Correo" name="correo" id="correo" required>
			</div>

			<div class="row mb-2">
				<input class="col-12 form-control" type="password" placeholder="Contraseña" name="password" id="password" required>
			</div>

			<div class="row mb-2">
				<label for="nacimiento">Cumpleaños</label>
				<input class="col-12 form-control" type="date" placeholder="Nacimiento" name="nacimiento" id="nacimiento" required>
			</div>

			<div class="custom-file row my-4">
				<label class="custom-file-label" for="imagen">Perfil</label>
				<input class="custom-file-input" type="file" name="imagen" id="imagen" required>
			</div>
			
			<div class="form-check">
				<label class="form-check-label" for="terminos">
				<input class="form-check-input" type="checkbox" name="terminos" required>
					Para poder registrarte debes aceptar los Términos y Condiciones, así que porfavor revisa detenidamente esta información del servicio We Move así como tambien los datos que estas registrando, ya que algunos no se podran cambiar (como el sexo, nombre, fecha de nacimiento).	
				</label>
			</div>
			<ol><br><br>
			<li>Permisos para: 
				<ol>
					<li>Utilizar el GPS y determinar su ubicacion.</li>
					<li>Mostrar información a los usuarios como el nombre, matricula, puntos de recogida, puntos finales.</li> 
				</ol>
			</li><br>
			<li>Responsabilidad</li>
				Nos hacemos responsables por la información registrada en nuestro sistema, no mostraremos ni haremos uso de esa información sin su autorización<br>

			<br><li>Recomendaciones</li>
				Al ser una aplicación destinada para estudiantes, pedimos que conductores y pasajeros tengan una identificacion que avale su pertenencia a la UANL. Esto es con el fin de generar "confianza y seguridad" al abordar una unidad de transporte. <br>
			
			<br><li>Costos</li>
				La tarifa es de $10 pero los pasajeros pueden ofrecer un pago más alto para incentar a los conductores en la aceptación del viaje.
			</ol>
			
			<input type="submit" value="Enviar" class="btn btn-dark">

		</form>
		</div>
	</div>

</body>
</html>