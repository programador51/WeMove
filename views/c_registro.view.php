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
			<form class="col-10 col-lg-6 mx-auto my-3" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>" method="post" enctype="multipart/form-data">

			<div class="col-12 mx-auto">
				<h1>Registro - Conductor</h1>
				<p>Completa este formulario para crear una cuenta en "We Move" y poder hacer uso de ella como pasajero. <br>
				<b>NOTA:</b> Antes de llenar los datos ya tienes que tener una cuenta registrada como pasajero.</p>
			</div>

			<div class="form-group row mb-2">
				<input class="col-12 form-control" type="number" placeholder="Matricula" name="matricula" id="matricula" required>
			</div>

			<div class="custom-file row my-4">
				<label class="custom-file-label" for="imagen">INE</label>
				<input class="custom-file-input" type="file" name="ine" id="ine">
			</div>

			<div class="custom-file row my-4">
				<label class="custom-file-label" for="imagen">Tarjeta de circulación</label>
				<input class="custom-file-input" type="file" name="t_circulacion" id="t_circulacion">
			</div>

			<div class="custom-file row my-4">
				<label class="custom-file-label" for="imagen">Licencia</label>
				<input class="custom-file-input" type="file" name="licencia" id="licencia">
			</div>

			<div class="row mb-2">
				<input class="col-12 form-control" type="text" placeholder="Marca" name="marca" id="marca" required>
			</div>

			<div class="row mb-2">
				<input class="col-12 form-control" type="text" placeholder="Modelo" name="modelo" id="modelo" required>
			</div>

			<div class="row mb-2">
				<input class="col-12 form-control" type="text" placeholder="Placas" name="placas" id="placas" required>
			</div>
			
			<div class="form-check">
				<label class="form-check-label" for="terminos">
					<input class="form-check-input" type="checkbox" name="terminos" required>
					Para poder registrarte debes aceptar los Términos y Condiciones, así que porfavor revisa detenidamente esta información del servicio We Move así como tambien los datos que estas registrando, ya que algunos no se podran cambiar (como las placas, modelo, marca).	
				</label>
			</div>

			<ol><br>
			<li>Permisos para: 
				<ol>
					<li>Utilizar el GPS y determinar su ubicacion.</li>
					<li>Mostrar información a los usuarios como las placas, modelo y marca.</li> 
				</ol>
			</li><br>
			<li>Responsabilidad</li>
				Nos hacemos responsables por la información registrada en nuestro sistema, no mostraremos ni haremos uso de esa información sin su autorización<br>

			<br><li>Recomendaciones</li>
				Al ser una aplicación destinada para estudiantes, pedimos que conductores y pasajeros tengan una identificacion que avale su pertenencia a la UANL. Esto es con el fin de generar "confianza y seguridad" al abordar una unidad de transporte. <br>
			
			<br><li>Costos</li>
				La tarifa es de $10 pero los pasajeros pueden ofrecer un pago más alto para incentar a los conductores en la aceptación del viaje. <br><br>
			</ol>
			
			<input type="submit" value="Enviar" class="btn btn-dark">

		</form>
		</div>
	</div>

</body>
</html>