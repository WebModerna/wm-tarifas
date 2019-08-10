<?php 
/*
Plugin Name: Panel de Tarifas Hoteleras
Plugin URI: //webmoderna.com.ar/wp-tarifas
Description: Un intuitivo panel de control para colocar las tarifas hoteleras (o similares), temporadas, tipos de habitación o cabañas, etc... Ampliamente configurable.
Version: 1.1.1
Author: WebModerna
Author URI: //webmoderna.com.ar
License: GPL
*/

// Brindando seguridad al plugin
defined('ABSPATH') or die("Bye bye");


/****************** Crear tabla con la clase wpdb *****************/
function crear_base()
{
	global $wpdb;

	// Con esto creamos el nombre de la tabla y nos aseguramos que se cree con el mismo prefijo que ya tienen las otras tablas creadas (wp_form).
	$table_name = $wpdb->prefix . 'tarifazos';

	// Declaramos la tabla que se creará de la forma común.
	$sql = "CREATE TABLE $table_name (
		`id` int(11) NOT NULL AUTO_INCREMENT,
		`habitaciones` varchar(255) NOT NULL,
		`temporada` varchar(255) NOT NULL,
		`tarifa` int(22) NOT NULL,
		UNIQUE KEY id (id)
	);";

	// upgrade contiene la función dbDelta la cuál revisará si existe la tabla.
	require_once( ABSPATH . 'wp-admin/includes/upgrade.php' );

	// Creamos la tabla
	dbDelta($sql);
}
// Ejecutamos nuestra funcion en WordPress
add_action('wp', 'crear_base');


// Registro de la variable con la ruta de los archivos
define( 'WM_RUTA', plugin_dir_path( __FILE__ ) );


// Incluyendo las funcionalidades
require_once( WM_RUTA . '/includes/funciones.php' );
require_once( WM_RUTA . '/includes/opciones.php' ) ;

?>