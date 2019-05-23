<?php require 'header.view.php';?>
<div class="container">
	<div class="row">
		<div class="col-sm-12 col-lg-6 mt-5">
				<img class="wellcome" src="<?php echo RUTA;?>/imagenes/iconos/car.png" alt="car.png">

			<div class="col-12 d-flex justify-content-center">
				<?php if($disponible==true):?>
				<a href="<?php echo RUTA;?>/programar.php"><button class="mr-1 btn btn-outline-dark">Programar</button></a>
				<?php elseif($disponible==false):?>
				<button class="mr-1 btn btn-outline-dark" disabled>Programar</button>
				<?php endif;?>
			</div>
		</div>

		<div class="col-sm-12 col-lg-6 mt-5">
			<img class="wellcome" src="<?php echo RUTA;?>/imagenes/iconos/user.png" alt="car.png">
			<form class="col-6 mx-auto my-3" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>" method="post" enctype="multipart/form-data">
				<div class="row mb-2 d-flex justify-content-center">
					<select class="col-lg-8 form-control" name="destino" id="destino">
						<option value="CU">Ciudad Universitaria</option>
						<option value="Mederos">Mederos</option>
						<option value="Ciencias Agropecuarias">Ciencias Agropecuarias</option>
						<option value="Ciencias de la Salud">Ciencias de la Salud</option>
					</select>
				</div>

				<div class="d-flex justify-content-center row mb-2">
					<input class="col-12 col-lg-8 form-control" value="2019-05-01" type="date" name="dia" id="dia">
				</div>
				<p hidden id="longitude"></p>
				<p hidden id="latitude"></p>
				<input type="submit" value="Buscar" class="d-flex justify-content-center mx-auto btn btn-outline-dark"><br><br>
			</form>
		</div>

			<?php $i=0;?>
			<?php foreach($resultados as $resultado): ?>
				<?php
					$map = "map";
					$i = $i+1;
					$map = "$map" . "$i";

					$latitude = "latitude";
					$longitude = "longitude";
					$latitude = "$latitude"."$i";
					$longitude = "$longitude"."$i";
				?>
				<div id="<?php echo htmlspecialchars($map);?>" class="map col-8"></div>
				<div class="col-4 info">
				<p >Numero de viaje: #<?php echo $resultado['viaje'];?></p>
				<p >Conductor: #<?php echo $resultado['conductor'];?></p>
				<p id="destino" value="<?php echo $resultado['destino'];?>">Destino: <?php echo $resultado['destino'];?></p>
				<p >Dia: <?php echo $resultado['dia'];?></p>
				<p >Hora de partida: <?php echo $resultado['h_salida'];?></p>
				<p >Hora de llegada: <?php echo $resultado['h_llegada'];?></p>
				<a href="<?php echo RUTA;?>/aplicar.php?id=<?php echo $resultado['viaje'];?>"><div class="btn btn-success d-flex justify-content-center mx-auto">Ver mas detalles</div></a><br>
				<a href="<?php echo RUTA;?>/solicitar.php?id=<?php echo $resultado['viaje'];?>"><div class="btn btn-success d-flex justify-content-center mx-auto">Aplicar para grupo</div></a>
				<p value="<?php echo htmlspecialchars($resultado['latitud']);?>" id="<?php echo htmlspecialchars($latitude);?>" hidden></p>
				<p value="<?php echo htmlspecialchars($resultado['longitud']);?>" id="<?php echo htmlspecialchars($longitude);?>" hidden></p>
				<div class="col-12 mx-auto d-flex justify-content-center">
				</div>
			<?php endforeach;?>
			<p id="viajes" value="<?php echo htmlspecialchars($i);?>" hidden></p>
<script src="js/tus_viajes.js"></script>

<script async defer 
	src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAWPkghgrW6BN7lkNo3_m1OKjezlSdwd5U&callback=initMap">
 </script>
	</div>
</div>
	</body>
</html>