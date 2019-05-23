<?php require'header.view.php';?>
<section class="container">
	<?php $i=0;?>
	<?php foreach($viajes as $viaje):?>
	<article class="row mt-3">
		<?php
			$map = "map";
			$i = $i+1;
			$map = "$map" . "$i";

			$latitude = "latitude";
			$longitude = "longitude";
			$latitude = "$latitude"."$i";
			$longitude = "$longitude"."$i";
		?>
		<div id="<?php echo htmlspecialchars($map);?>" class="map col-12 col-lg-9"></div>
		<div class="col-12 col-lg-3">
		<p class="col bg-light" id="viaje">Número de viaje: #<?php echo $viaje['viaje'];?></p>
		<p class="col">Dia: <?php echo $viaje['dia'];?></p>
		<p class="col">Hora partida: <?php echo $viaje['h_salida'];?></p>
		<p class="col">Hora estimada: <?php echo $viaje['h_llegada'];?></p>
		<p class="col">Destino: <?php echo $viaje['destino'];?></p>
		<div class="col d-flex justify-content-center">
		<button type="button" class="mr-3 btn btn-info">Ver mas detalles</button>
		<button type="button" class="btn btn-danger">Cancelar</button>
		</div>
		<p class="col" value="<?php echo htmlspecialchars($viaje['latitud']);?>" id="<?php echo htmlspecialchars($latitude);?>" hidden></p>
		<p class="col" value="<?php echo htmlspecialchars($viaje['longitud']);?>" id="<?php echo htmlspecialchars($longitude);?>" hidden></p>
		</div>
	</article>
	<?php endforeach; ?>
	<p id="viajes" value="<?php echo htmlspecialchars($i);?>" hidden></p>
</section>

<script src="js/tus_viajes.js"></script>

<script async defer 
	src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAWPkghgrW6BN7lkNo3_m1OKjezlSdwd5U&callback=initMap">
 </script>