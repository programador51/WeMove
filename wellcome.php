<?php 
session_start();
require 'configuraciones/configuracion.php';
require 'funciones.php';

$host = "localhost";
$usuario = "root";
$clave = "";
$bd = "we_move";

$conexion = mysqli_connect($host,$usuario,$clave,$bd);
$matricula = $_SESSION['matricula'];
//var_dump($matricula);
//$matricula = intval($matricula);
//print_r($_SESSION['matricula']);

$q = ("SELECT COUNT(*) as contar from conductores where c_matricula='$matricula'");
$consulta = mysqli_query($conexion,$q);
$array = mysqli_fetch_array($consulta);

if($array['contar']>0){
	$disponible=true;
}

else{
	$disponible=false;
}

$resultados = array();
$conexionPDO = conexion($bd_config);

if ($_SERVER['REQUEST_METHOD']=='POST') {
	$dia = $_POST['dia'];
	$destino = $_POST['destino'];
	$statement = $conexionPDO->prepare(
		'SELECT * FROM viajes WHERE dia LIKE :dia and destino LIKE :destino');

	$statement->execute(array(':dia' => $dia,':destino'=>$destino));
	$resultados = $statement->fetchAll();
}

require 'views/wellcome.view.php';?>