<?php session_start();

require '../funciones.php';
require 'configuracion.php';

comprobarSesion();

$conexion = conexion($bd_config);

if (!$conexion) {
	header('Location: ../error.php');
}

$statement = $conexion->prepare(
		'INSERT INTO grupos (id,titulo,link1,link2,link3,fotos,servidor1,servidor2,servidor3,peso,imagen,nombre,disponible) VALUES (null,:titulo,:link1,:link2,:link3,:fotos,:servidor1,:servidor2,:servidor3,:peso,:imagen,:nombre,:disponible)');