<?php
if(paginacion()=='/we_move/nudes.php'){
	$numero_paginas = total_paginas('9',$conexion);
}
else{
	$numero_paginas = total_paginas($blog_config['packs_por_pagina'],$conexion);
}
?>

<div class="container">
	<div class="row my-5 paginacion d-flex flex-wrap">
			<!-- -- -->
			<div class="col-xs-12 col-md-12 col-lg-4 d-flex justify-content-between">
			<?php if(paginaActual()-5<=0): ?>
				<div class="disabled">-</div>
			<?php else: ?>
				<a href="<?php echo paginacion();?>?pagina=<?php echo paginaActual() -5;?>"><div><?php echo paginaActual()-5;?></div></a>
			<?php endif; ?>

			<?php if(paginaActual()-4<=0): ?>
				<div class="disabled">-</div>
			<?php else: ?>
				<a href="<?php echo paginacion();?>?pagina=<?php echo paginaActual() -4;?>"><div><?php echo paginaActual()-4;?></div></a>
			<?php endif; ?>

			<?php if(paginaActual()-3<=0): ?>
				<div class="disabled">-</div>
			<?php else: ?>
				<a href="<?php echo paginacion();?>?pagina=<?php echo paginaActual() -3;?>"><div><?php echo paginaActual()-3;?></div></a>
			<?php endif; ?>

			<?php if(paginaActual()-2<=0): ?>
				<div class="disabled">-</div>
			<?php else: ?>
				<a href="<?php echo paginacion();?>?pagina=<?php echo paginaActual() -2;?>"><div><?php echo paginaActual()-2;?></div></a>
			<?php endif; ?>

			<?php if(paginaActual()<=1): ?>
				<div class="disabled">-</div>
			<?php else: ?>
				<a href="<?php echo paginacion();?>?pagina=<?php echo paginaActual() -1;?>"><div><?php echo paginaActual()-1;?></div></a>
			<?php endif; ?>
			</div>

			<div class="col-md-12 col-lg-4 d-flex justify-content-between">
				<!-- Pagina Actual -->
				<a href="<?php echo paginacion();?>?pagina=1"><img src="<?php echo RUTA;?>/imagenes/iconos/fast-forward-arrows-left.png" alt=""></a>
				<?php if(paginaActual()===1):?>
					<div class="disabled">&laquo;</div>
				
				<?php else: ?>
					<a href="<?php echo paginacion();?>?pagina=<?php echo paginaActual() - 1;?>"><div>&laquo;</div></a>
				<?php endif;?>
				<a href="#"><div class="paginaActual"><?php echo paginaActual();?></div></a>
				<!--Este es el boton de SIGUIENTE-->
				<?php if(paginaActual()==$numero_paginas): ?>
					<div class="disabled">&raquo;</div>
				
				<?php else: ?>
					<a href="<?php echo paginacion();?>?pagina=<?php echo paginaActual()+1;?>"><div>&raquo;</div></a>
				
				<?php endif; ?>
				<a href="<?php echo paginacion();?>?pagina=<?php echo $numero_paginas;?>"><img src="<?php echo RUTA;?>/imagenes/iconos/fast-forward-arrows-right.png" alt=""></a>
			</div>

			<!-- -- -->
			<div class="col-md-12 col-lg-4 d-flex justify-content-between">
			<?php if(paginaActual()+1>$numero_paginas): ?>
				<div class="disabled">-</div>
			<?php else: ?>
				<a href="<?php echo paginacion();?>?pagina=<?php echo paginaActual() +1;?>"><div><?php echo paginaActual()+1;?></div></a>
			<?php endif; ?>
			
			<?php if(paginaActual()+2>$numero_paginas): ?>
				<div class="disabled">-</div>
			<?php else: ?>
				<a href="<?php echo paginacion();?>?pagina=<?php echo paginaActual() +2;?>"><div><?php echo paginaActual()+2;?></div></a>
			<?php endif; ?>
			
			<?php if(paginaActual()+3>$numero_paginas): ?>
				<div class="disabled">-</div>
			<?php else: ?>
				<a href="<?php echo paginacion();?>?pagina=<?php echo paginaActual() +3;?>"><div><?php echo paginaActual()+3;?></div></a>
			<?php endif; ?>
			
			<?php if(paginaActual()+4>$numero_paginas): ?>
				<div class="disabled">-</div>
			<?php else: ?>
				<a href="<?php echo paginacion();?>?pagina=<?php echo paginaActual() +4;?>"><div><?php echo paginaActual()+4;?></div></a>
			<?php endif; ?>
			
			<?php if(paginaActual()+5>$numero_paginas): ?>
				<div class="disabled">-</div>
				<?php else: ?>
				<a href="<?php echo paginacion();?>?pagina=<?php echo paginaActual() +5;?>"><div><?php echo paginaActual()+5;?></div></a>
			<?php endif; ?>
			</div>	
	</div>
</div>