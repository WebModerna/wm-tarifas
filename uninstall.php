<?php
// Protección del plugin
defined('ABSPATH') or die("Bye bye");

// Controlando que sólamente WordPress elimina todas las cosas
if ( !defined( 'WP_UNINSTALL_PLUGIN' ) )
{
	die;
}

// Borrando las entradas creadas en las tablas
delete_option('wm_db_panel_opciones');
delete_site_option('wm_db_panel_opciones');

// Borrando la tabla
function wm_desinstala()
{
	global $wpdb; 
	$table_nombre	= $wpdb->prefix . "wm_tarifas";
	$sql 			= "DROP TABLE $table_nombre";
	$wpdb->query( $sql );
}
register_deactivation_hook( __FILE__, 'wm_desinstala');
?>