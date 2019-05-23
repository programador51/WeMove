<?php 
session_start();
require 'configuraciones/configuracion.php';
require 'funciones.php';

$conexion = conexion($bd_config);

if(!$conexion){
	header('Location: ../error.php');
}

comprobarSesion();
$viajes = mostrarViajes($viaje_config['viajes_por_pagina'],$conexion);
/* */
require 'views/tus_viajes.view.php';?>