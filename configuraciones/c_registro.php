<?php

require '../funciones.php';
require 'configuracion.php';

$conexion = conexion($bd_config);

if (!$conexion) {
	header('Location: ../error.php');
}

if ($_SERVER['REQUEST_METHOD']=='POST') {
	$matricula = $_POST['matricula'];
	$ine = $_FILES['ine']['tmp_name'];
	$t_circulacion = $_FILES['t_circulacion']['tmp_name'];
	$licencia = $_FILES['licencia']['tmp_name'];
	$marca = $_POST['marca'];
	$modelo = $_POST['modelo'];
	$placas = $_POST['placas'];

	$ine = $_FILES['ine']['tmp_name'];
	$t_circulacion = $_FILES['t_circulacion']['tmp_name'];
	$licencia = $_FILES['licencia']['tmp_name'];

	$subir_ine = '../' . $viaje_config['carpeta_imagenes'] . $_FILES['ine']['name'];
	$subir_tcirculacion = '../' . $viaje_config['carpeta_imagenes'] . $_FILES['t_circulacion']['name'];
	$subir_licencia = '../' . $viaje_config['carpeta_imagenes'] . $_FILES['licencia']['name'];

	move_uploaded_file($ine, $subir_ine);
	move_uploaded_file($t_circulacion, $subir_tcirculacion);
	move_uploaded_file($licencia, $subir_licencia);

	$statement = $conexion->prepare(
		'INSERT INTO conductores (id,c_matricula,ine,t_circulacion,licencia,marca,modelo,placas) 
				VALUES (null,:matricula,:ine,:t_circulacion,:licencia,:marca,:modelo,:placas)');

	$statement->execute(array(
	':matricula'=>$matricula,
	':ine'=>$_FILES['ine']['name'],
	':t_circulacion'=>$_FILES['t_circulacion']['name'],
	':licencia'=>$_FILES['licencia']['name'],
	':marca'=>$marca,
	':modelo'=>$modelo,
	':placas'=>$placas
	));

	header('Location: '. RUTA . '/index.php');
}

require '../views/c_registro.view.php';

?>
