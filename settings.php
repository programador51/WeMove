<?php 
session_start();
require 'configuraciones/configuracion.php';
require 'funciones.php';

$conexion = conexion($bd_config);

if(!$conexion){
	header('Location: ../error.php');
}

comprobarSesion();
$matricula = $_SESSION['matricula'];
$matricula = intval($matricula);

if ($_SERVER['REQUEST_METHOD']=='POST') {
	$imagen_guardada = $_POST['imagen-guardada'];
	$imagen = $_FILES['imagen'];
	$telefono = $_POST['telefono'];
	$correo = $_POST['correo'];
	$tVisible = $_POST['tVisible'];
	$cVisible = $_POST['cVisible'];
	$notificaciones = $_POST['notificaciones'];
	$anticipacion = $_POST['anticipacion'];


	if (empty($imagen['name'])) {
		$imagen = $imagen_guardada;
	} else {
		$archivo_subido = $viaje_config['carpeta_imagenes'] . $_FILES['imagen']['name'];
		move_uploaded_file($_FILES['imagen']['tmp_name'], $archivo_subido);
		$imagen = $_FILES['imagen']['name'];
	}

	$statement = $conexion->prepare(
		'UPDATE usuarios SET telefono = :telefono, correo = :correo, imagen = :imagen WHERE matricula=:matricula');

	$statement->execute(array(
		':imagen'=>$imagen,
		':matricula'=>$matricula,
		':telefono' => $telefono,
		':correo' => $correo
	));
	/*
	$statement = $conexion->prepare(
		'UPDATE configs SET mail = :cVisible, notificaciones = :notificaciones, cancelar = :anticipacion, telefono =:tVisible WHERE usuario_configs=:matricula');

	$statement->execute(array(
		':cVisible'=>$cVisible,
		':notificaciones'=>$notificaciones,
		':anticipacion'=>$anticipacion,
		':tVisible'=>$tVisible
	));*/

	header('Location: ' . RUTA . '/wellcome.php');

}
else{
$datos = mostrarSettings($conexion,$matricula);
$datos = $datos[0];
}

require 'views/settings.view.php';?>