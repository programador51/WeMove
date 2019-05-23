<?php 
session_start();
require 'configuraciones/configuracion.php';
require 'funciones.php';

$conexion = conexion($bd_config);
$matricula = $_SESSION['matricula'];
comprobarSesion();

require 'views/buscar.view.php';?>