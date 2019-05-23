<?php session_start();
require 'configuraciones/configuracion.php';
require 'funciones.php';
require 'views/index.view.php';

$host = "localhost";
$usuario = "root";
$clave = "";
$bd = "we_move";

$conexion = mysqli_connect($host,$usuario,$clave,$bd);

if($_SERVER['REQUEST_METHOD']=='POST'){

	$matricula = $_POST['matricula'];
	$password = $_POST['password'];

	$q = ("SELECT COUNT(*) as contar from usuarios where matricula='$matricula' and password='$password'");
	$consulta = mysqli_query($conexion,$q);
	$array = mysqli_fetch_array($consulta);

	if($array['contar']>0){
		header('Location: '.RUTA.'/wellcome.php');
		$_SESSION['matricula']=$matricula;
	}
}
?>