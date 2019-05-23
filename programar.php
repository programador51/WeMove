<?php 
session_start();
require 'configuraciones/configuracion.php';
require 'funciones.php';

$conexion = conexion($bd_config);

if(!$conexion){
	header('Location: ../error.php');
}

if ($_SERVER['REQUEST_METHOD']=='POST') {
	$matricula = $_SESSION['matricula'];
	$destino = $_POST['destino'];
	$dia = $_POST['dia'];
	$h_salida = $_POST['h_salida'];
	$h_llegada = $_POST['h_llegada'];
	$latitud = $_POST['latitude'];
	$longitud = $_POST['longitude'];
	
	$statement = $conexion->prepare(
		'INSERT INTO viajes (viaje,conductor,destino,dia,h_salida,h_llegada,latitud,longitud) 
				VALUES (NULL,:conductor,:destino,:dia,:h_salida,:h_llegada,:latitud,:longitude)');

	$statement->execute(array(
	':conductor'=>$matricula,
	':destino'=>$destino,
	':dia'=>$dia,
	':h_salida'=>$h_salida,
	':h_llegada'=>$h_llegada,
	':latitud'=>$latitud,
	':longitude'=>$longitud));
	
	header('Location: '. RUTA . '/wellcome.php');
}
require 'views/programar.view.php';?>