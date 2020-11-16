<?php
/*
Plugin Name: Edita texto de título
Plugin URI: https://www.flat101.es/
Description: Edita el texto del título añadiento '-Flat101' al final del mismo
Version: 1.0
Author: Jaime Murillo Romero
Author URI: https://www.flat101.es/
License: GPLv2
*/
add_filter( ‘the_title’, añadir_texto_titulo );

function añadir_texto_titulo( $title ) {
	$contenido_nuevo = ‘ - Flat101’; //Contenido a añadir al titulo
	$title .= $contenido_nuevo; //Añadimos al titulo existente el contenido nuevo
	return $title; 
}


?>