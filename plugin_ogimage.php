<?php
/*
Plugin Name: Introduce meta og:image
Plugin URI: https://www.flat101.es/
Description: Introduce la etiqueta og:image con un enlace a la imagen destacada
Version: 1.0
Author: Jaime Murillo Romero
Author URI: https://www.flat101.es/
License: GPLv2
*/

add_action('wp_head', 'hook_meta_og_image');

function hook_meta_og_image() {
	 if (is_single()){
  <meta property=”og:image” content=”LINK_FEATURED_IMAGE” />
	 }
}


?>