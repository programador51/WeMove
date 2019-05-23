<?php require'header.view.php';?>
 <div class="container">
 	<div class="row">
 		<style>
      #right-panel {
        font-family: 'Roboto','sans-serif';
        line-height: 30px;
        padding-left: 10px;
      }

      #right-panel select, #right-panel input {
        font-size: 15px;
      }

      #right-panel select {
        width: 100%;
      }

      #right-panel i {
        font-size: 12px;
      }
      html, body {
        height: 100%;
        margin: 0;
        padding: 0;
      }
      #map {
        height: 100%;
        float: left;
        width: 63%;
        height: 100%;
      }
      #right-panel {
        float: right;
        width: 34%;
        height: 100%;
      }
      .panel {
        height: 100%;
        overflow: auto;
      }
    </style>
 			<div class="col-9 map mb-3" id="map1"></div>
 			<!--<div class="col-4" id="right-panel">
 				<p>Total Distance: <span id="total"></span></p>
 			</div>-->
      <div class="col-3">
      <h2>Viaje # <?php echo $viaje['viaje'];?></h2>
        <p id="destino" value="<?php echo htmlspecialchars($viaje['destino']);?>">Destino: <?php echo $viaje['destino'];?></p>
        <p>Día programado: <?php echo $viaje['dia'];?></p>
        <p>Hora de partida: <?php echo $viaje['h_salida'];?></p>
        <p>Hora de llegada: <?php echo $viaje['h_llegada'];?></p>
        <p value="<?php echo htmlspecialchars($viaje['latitud']);?>" id="latitude1" hidden></p>
        <p value="<?php echo htmlspecialchars($viaje['longitud']);?>" id="longitude1" hidden></p>
      </div>
 			<form class="col-3" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post" enctype="multipart/form-data">

 				<div class="row mb-2">
          <input class="col-12 form-control" type="number" step="any" name="latitude" id="latitude" required hidden>
        </div>
        <div class="row mb-2">
          <input class="col-12 form-control" type="number" step="any" name="longitude" id="longitude" required hidden>
        </div>
 			</form>
      
      <div class="col-3">
          <?php $conductor = mostrarInformacion($conexion,$viaje['conductor']);
          $conductor = $conductor[0];?>
          <div class="card">
            <div class="card-header">
                Conductor
            </div>
            <div class="card-body">
              <img class="perfil" src="<?php echo RUTA;?>/imagenes/<?php echo $conductor['imagen'];?>" class="card-img-top img-fluid" alt="foto_perfil">
                <h3 class="card-title"><?php echo ($conductor['nombre'].' '.$conductor['paterno'].' '.$conductor['materno']);?></h3>
                <p class="card-subtitle text-muted mb-2"><?php echo $conductor['matricula'];?></p>
                <p class="card-text">Edad: <?php
              $fecha = time() - strtotime($conductor['nacimiento']);
              echo($edad = floor($fecha / 31556926));?></p>
            </div>
          </div>
          <p hidden value="<?php echo $coordenada['latitud'];?>" id="lat<?php echo $i;?>"></p>
          <p hidden value="<?php echo $coordenada['longitud'];?>"id="lng<?php echo $i;?>"></p>
        </div>

      <?php $i=1;?>
      <?php foreach($coordenadas as $coordenada): ?>
        <div class="col-3">
          <?php $pasajero = mostrarInformacion($conexion,$coordenada['pasajero']);
          $pasajero = $pasajero[0];?>
          <div class="card">
            <div class="card-header">
                Pasajero
            </div>
            <div class="card-body">
              <img class="perfil" src="<?php echo RUTA;?>/imagenes/<?php echo $pasajero['imagen'];?>" class="card-img-top img-fluid" alt="foto_perfil">
                <h3 class="card-title"><?php echo ($pasajero['nombre'].' '.$pasajero['paterno'].' '.$pasajero['materno']);?></h3>
                <p class="card-subtitle text-muted mb-2"><?php echo $pasajero['matricula'];?><br>
                  Recoger a: <?php echo $coordenada['h_recogida'];?></p>
                <p class="card-text">Edad: <?php
              $fecha = time() - strtotime($pasajero['nacimiento']);
              echo($edad = floor($fecha / 31556926));?></p>
            </div>
          </div>
          <p hidden value="<?php echo $coordenada['latitud'];?>" id="lat<?php echo $i;?>"></p>
          <p hidden value="<?php echo $coordenada['longitud'];?>"id="lng<?php echo $i;?>"></p>
        </div>
      <?php $i++;?>
      <?php endforeach;?>
      <p hidden id="pasajeros" value="<?php echo htmlspecialchars($i);?>"></p>
      </div>
 	</div>
 </div>
 <p id="viajes" value="1>" hidden></p>
<script src="<?php echo RUTA;?>/js/aplicar.js"></script>

<script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDfcn-Kbqp_0sHdtpbBLCs3hY6pqtRQQOw&callback=initMap">
    </script>
