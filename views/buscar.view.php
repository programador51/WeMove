<?php require 'header.view.php';?>
<div class="container">
	<div class="row">
		<div class="col">
			<?php foreach($resultados as $resultado): ?>
				<p>Id: <?php echo $resultado['id'];?></p>
				<p>Destino: <?php echo $resultado['destino'];?></p>
				<p>Dia: <?php echo $resultado['dia'];?></p>
			<?php endforeach;?>
		</div>
	</div>
</div>