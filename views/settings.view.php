<?php require'header.view.php';?>
<div class="container">
	<div class="row d-flex flex-wrap align-items-center">			
			<form class="col-12" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post" enctype="multipart/form-data">
				
				<div class="row">
				<div class="col-12">
					<img class="perfil" src="<?php echo RUTA;?>/imagenes/<?php echo $datos['imagen'];?>" alt="<?php echo $datos['imagen'];?>">
				</div>
				<div class="col-6 col-lg-6 mx-auto">
					<div class="custom-file my-4">
						<label for="imagen" class="custom-file-label">Cambiar foto</label>
						<input type="file" name="imagen" id="imagen" class="custom-file-input">
					</div>
				</div>
				</div>


				<div class="row">
				<div class="col-7 mx-auto">
					
					<input type="hidden" name="imagen-guardada" value="<?php echo $datos['imagen']; ?>">

					<input class="col-2 form-control" value="<?php echo $datos['matricula'];?>" type="hidden" name="matricula" id="matricula" disabled>

					<div class="row mb-2">
						<label class="col-sm-12 col-lg-2 my-auto" for="titulo">Matricula:</label>
						<input class="col-sm-12 col-lg-10 form-control" value="<?php echo $datos['matricula'];?>" type="number" name="matricula" id="matricula" disabled>
					</div>

					<div class="row mb-2">
						<label class="col-sm-12 col-lg-2 my-auto" for="nombre">Nombre: </label>
						<input class="col-sm-12 col-lg-10 form-control" value="<?php echo $datos['nombre'].' '.$datos['paterno'].' '.$datos['materno'];?>" type="text" name="" id="" disabled>
					</div>
					
					<div class="row mb-2">
						<label class="col-sm-12 col-lg-2 my-auto" for="titulo">Teléfono +52:</label>
						<input class="col-sm-12 col-lg-10 form-control" value="<?php echo $datos['telefono'];?>" type="number" name="telefono" id="telefono" required>
					</div>

					<div class="row mb-2">
						<label class="col-sm-12 col-lg-2 my-auto" for="titulo">Correo: </label>
						<input class="col-sm-12 col-lg-10 form-control" value="<?php echo $datos['correo'];?>" type="email" name="correo" id="correo" required>
					</div>


					<?php if($datos['sexo']=="M"):?>
						<div class="row mb-2">
							<label class="col-sm-12 col-lg-2 my-auto" for="titulo">Sexo: </label>
							<input class="col-sm-12 col-lg-10 form-control" value="Masculino" type="text" disabled>
						</div>

					<?php else:?>
						<div class="row mb-2">
							<label class="col-sm-12 col-lg-2 my-auto" for="titulo">Sexo: </label>
							<input class="col-sm-12 col-lg-10 form-control" value="Femenino" type="text" disabled>
						</div>
					<?php endif;?>

					<div class="row mb-2">
						<label class="col-sm-12 col-lg-2 my-auto" for="titulo">Edad: </label>
						<input class="col-sm-12 col-lg-10 form-control" value="<?php
							$fecha = time() - strtotime($datos['nacimiento']);
							echo($edad = floor($fecha / 31556926));
						?>" type="number" disabled>
					</div>
				</div>

				<div class="col-7 mx-auto">
						<div class="form-check mb-3">
							<label class="form-check-label">
								<input type="checkbox" name="tVisible" id="tVisible" class="form-check-input mr-2">Teléfono visible a los demas usuarios
							</label>
						</div>


						<div class="form-check mb-3">
							<label class="form-check-label">
								<input type="checkbox" name="cVisible" id="cVisible" class="form-check-input mr-2">Correo visible a los demas usuarios
							</label>
						</div>

						<div class="form-check mb-3">
							<label class="form-check-label">
								<input type="checkbox" name="notificaciones" id="notificaciones" class="form-check-input mr-2">Notificar de los viajes aceptados
							</label>
						</div>
						<div class="row mb-2">
							<label class="col-sm-12 col-lg-6 my-auto" for="titulo">Si no se confirma un viaje en "x" horas, notificar y cancelarlo</label>
							<input class="col-sm-12 col-lg-6 form-control" type="number" name="anticipacion" id="anticipacion">
						</div>
						
						<div class="d-flex justify-content-center mb-4">
							<input type="submit" value="Aplicar cambios" class="btn btn-success">	
						</div>
							
				</div>
				</div>
			</div>
				
				
			</form>
	</div>
</div>