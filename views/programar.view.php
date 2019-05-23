<?php require 'header.view.php';?>
<div class="container">
	<div class="row">
		<div class="col">
			<div id="map" class="map"></div>
		</div>
	</div>
	<div class="row">
		<div class="col">
			<form class="col-6 mx-auto my-3" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>" method="post" enctype="multipart/form-data">
				<div class="row mb-2">
					<label class="col-lg-4" for="destino">Destino:</label>
					<select class="col-lg-8 form-control" name="destino" id="destino" required>
						<option value="Mederos">Mederos</option>
						<option value="CU">Ciudad Universitaria</option>
						<option value="Ciencias Agropecuarias">Ciencias Agropecuarias</option>
						<option value="Ciencias de la Salud">Ciencias de la Salud</option>
					</select>
				</div>
				<hr>
				<div class="row mb-2">
					<label class="col-12 col-lg-4" for="dia">Programar para:</label>
					<input class="col-12 col-lg-8 form-control" type="date" name="dia" id="dia" required>
				</div>

				<div class="row mb-2">
					<div class="col d-flex justify-content-center">
						<div class="col-12 col-lg-3">
							<label for="h_salida">Hora salida:</label>
							<input class="form-control" type="time" name="h_salida" id="h_salida" required>
						</div>

						<div class="col-12 col-lg-3">
							<label for="h_salida">Hora llegada:</label>
							<input class="form-control" type="time" name="h_llegada" id="h_llegada" required>
						</div>
					</div>				
				</div>

				<div class="row mb-2">
					<input class="col-12 form-control" type="number" step="any" name="latitude" id="latitude" required hidden>
				</div>
				<div class="row mb-2">
					<input class="col-12 form-control" type="number" step="any" name="longitude" id="longitude" required hidden>
				</div>
				<hr>
				<input type="submit" value="Programar" class="mb-6 btn btn-success btn-block"><br><br>
			</form>
		</div>
	</div>
</div>
<script src="js/ubicacion.js"></script>

<script async defer 
	src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAWPkghgrW6BN7lkNo3_m1OKjezlSdwd5U&callback=initMap">
 </script>
	</body>
</html>