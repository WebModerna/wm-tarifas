<?php 
defined('ABSPATH') or die("Bye bye");

// Controlando que sólamente WordPress elimina todas las cosas
if ( !defined( 'WP_UNINSTALL_PLUGIN' ) )
{
	die;
}

// Borrando las entradas creadas en las tablas
delete_option('mi_opcion');
delete_site_option('mi_opcion');
?>