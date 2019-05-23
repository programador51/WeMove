<?php 
session_start();
require 'configuraciones/configuracion.php';
require 'funciones.php';

$conexion = conexion($bd_config);

if(!$conexion){
	header('Location: ../error.php');
}

if($_SERVER['REQUEST_METHOD']=='POST'){
	$statement = $conexion->prepare(
		'INSERT INTO grupos (id,titulo,link1,link2,link3,fotos,servidor1,servidor2,servidor3,peso,imagen,nombre,disponible) VALUES (null,:titulo,:link1,:link2,:link3,:fotos,:servidor1,:servidor2,:servidor3,:peso,:imagen,:nombre,:disponible)');
}

else{
	$id_viaje = id_viaje($_GET['id']);
	$viaje = id_mostrar_viaje($conexion,$id_viaje);
	$viaje = $viaje[0];
	$coordenadas = obtenerCoordenadas($conexion,$id_viaje);
}
require 'views/aplicar.view.php';?>