<?php
// Protección del plugin
defined('ABSPATH') or die("Bye bye");

// Controlando que sólamente WordPress elimina todas las cosas
if ( !defined( 'WP_UNINSTALL_PLUGIN' ) )
{
	die;
}
else
{
	// Borrando las entradas creadas en las tablas
	delete_option('wm_db_panel_opciones');
	delete_site_option('wm_db_panel_opciones');
}

?>