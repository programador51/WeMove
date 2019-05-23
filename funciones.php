<?php
#Funcion para establecer la conexion en la base de datos mediante PDO
function conexion($bd_config){
	try {
			$conexion = new PDO ('mysql:host=localhost;dbname='.$bd_config['bdnombre'],$bd_config['usuario'],$bd_config['contrasena']);
			return $conexion;
		} catch (PDOException $e) {
			echo "Error".$e->getMessage();
			return false;
		}	
}

#Con esta funcion pasaremos como parametros cualquier campo de texto, para asi evitar que alguien intente poner codigo html,js o php
function limpiarDatos($datos){
	$datos = trim($datos);
	$datos = htmlspecialchars($datos);
	$datos = stripslashes($datos);
	return $datos;
}

/*Necesitamos saber la pagina en la que nos encontramos, para asi poder tener una paginacion y mostrar los articulos correspondientes
Si tenemos seteada el valor de pagina por el metodo post, convertimos ese valor string a entero, sin embargo, si la variable pagina no esta seteada, significa que estamos en el index.php, es decir la primera pagina*/

function paginaActual(){
	return isset($_GET['pagina']) ? (int)($_GET['pagina']) : 1;
}

function paginacion(){
	$paginacion = $_SERVER['SCRIPT_NAME'];
	return $paginacion;
	}

function total_paginas($viajes_por_pagina,$conexion){
	$total_paginas = $conexion->prepare('SELECT FOUND_ROWS() as total');
	$total_paginas->execute();
	$total_paginas = $total_paginas->fetch()['total'];
	$total_paginas = ceil($total_paginas/$viajes_por_pagina);
	return $total_paginas;
}


function comprobarSesion(){
	if(!isset($_SESSION['matricula'])){
		return header('Location: '.RUTA.'/index.php');
	}
	else{
		return 0;
	}
}

function mostrarViajes($viajes_por_pagina,$conexion){
	$matricula = $_SESSION['matricula'];
	$inicio = (paginaActual()>1) ? paginaActual()*$viajes_por_pagina-$viajes_por_pagina : 0 ;
	$declaracion = $conexion->prepare("SELECT SQL_CALC_FOUND_ROWS * FROM viajes WHERE conductor = $matricula");
	$declaracion->execute();
	return $declaracion->fetchAll();
}

function mostrarSettings($conexion,$matricula){
	$resultado = $conexion->query("SELECT * FROM usuarios WHERE matricula=$matricula LIMIT 1 ");
	$resultado = $resultado->fetchAll();
	return ($resultado) ? $resultado : false;
}

function id_viaje($id){
	return (int)limpiarDatos($id);
}

function id_mostrar_viaje($conexion,$id){
	$matricula = $_SESSION['matricula'];
	$resultado = $conexion->query("SELECT * FROM viajes WHERE viaje=$id LIMIT 1 ");
	$resultado = $resultado->fetchAll();
	return ($resultado) ? $resultado : false;
}

function obtenerCoordenadas($conexion,$viaje){
	$matricula = $_SESSION['matricula'];
	$resultado = $conexion->query("SELECT SQL_CALC_FOUND_ROWS * FROM grupos WHERE viaje = $viaje");
	$resultado->execute();
	return $resultado->fetchAll();
}

function mostrarInformacion($conexion,$matricula){
	$resultado = $conexion->query("SELECT SQL_CALC_FOUND_ROWS * FROM usuarios WHERE matricula = $matricula");
	$resultado->execute();
	return $resultado->fetchAll();
}

?>