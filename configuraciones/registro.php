<?php

require '../funciones.php';
require 'configuracion.php';

$conexion = conexion($bd_config);

if (!$conexion) {
	header('Location: ../error.php');
}

if ($_SERVER['REQUEST_METHOD']=='POST') {
	$matricula = $_POST['matricula'];
	$nombre = $_POST['nombre'];
	$paterno = limpiarDatos($_POST['paterno']);
	$materno = limpiarDatos($_POST['materno']);
	$sexo = $_POST['sexo'];
	$telefono = $_POST['telefono'];
	$correo = $_POST['correo'];
	$password = $_POST['password'];
	$nacimiento = $_POST['nacimiento'];
	$imagen = $_FILES['imagen']['tmp_name'];

	$archivo_subido = '../' . $viaje_config['carpeta_imagenes'] . $_FILES['imagen']['name'];

	move_uploaded_file($imagen, $archivo_subido);

	$statement = $conexion->prepare(
		'INSERT INTO usuarios (matricula,nombre,paterno,materno,sexo,telefono,correo,password,nacimiento,imagen) 
				VALUES (:matricula,:nombre,:paterno,:materno,:sexo,:telefono,:correo,:password,:nacimiento,:imagen)');

	$statement->execute(array(
	':matricula'=>$matricula,
	':nombre'=>$nombre,
	':materno'=>$materno,
	':paterno'=>$paterno,
	':sexo'=>$sexo,
	':telefono'=>$telefono,
	':correo'=>$correo,
	':password'=>$password,
	':nacimiento'=>$nacimiento,
	':imagen'=>$_FILES['imagen']['name']));

	header('Location: '. RUTA . '/index.php');
}

require '../views/registro.view.php';

?>