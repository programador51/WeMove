<?php 
#Con este if, definimos una constante que contiene la ruta de nuestros archivos raiz, de esta manera si movemos la direccion, podremos hacerlo desde aqui y evitamos modificar los demas
if (!defined('RUTA')) define('RUTA', 'http://localhost/we_move');

/* 
En este ARREGLO ASOCIATIVO estamos guardando informacion para las funciones, asi cualquier modificacion que se haga aqui, se vera reflejado a todo el proyecto
bdnombre --- nombre de la base de datos
usuario --- nombre de la cuenta a la que tenemos acceso a la bd
contrasena --- contrasena de la cuenta para acceder a la bd
Este arreglo es necesario para crear una conexion a la bd
*/
$bd_config = array(
	'bdnombre'=>'we_move',
	'usuario'=>'root',
	'contrasena'=>'');

/* Con este ARREGLO ASOCIATIVO guardaremos los valores de tipo string para saber cuantos post por pagina tendra el proyecto, asi como el destino de donde se guardaran las imagenes de los articulos subidos por el desarrollador y usuarios*/

$viaje_config = array(
	'viajes_por_pagina'=>'10',
	'carpeta_imagenes'=>'imagenes/');?>