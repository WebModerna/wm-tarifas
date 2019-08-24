<?php 
/*
Plugin Name: Panel de Tarifas Hoteleras
Plugin URI: //webmoderna.com.ar/wp-tarifas
Description: Un intuitivo panel de control para colocar las tarifas hoteleras (o similares), temporadas, tipos de habitación o cabañas, etc... Ampliamente configurable.
Version: 1.1.1
Author: WebModerna
Author URI: //webmoderna.com.ar
License: GPL

Explicación:
Hay que hacer varias cosas y solucionar varios aspectos a tener en cuenta

1) Plugin
- Creación de la estructura del plugin.
- Creación del respositorio.

2) El look and feel
- La maquetación necesaria que haga que se vea y acomoden correctamente las cosas.
- Estilos que hagan una transición linda y buena vista de la tabla con datos.
- Cuidar una metodología BEM para esto.
- Los scripts necesarios que activen y desactiven la edición de datos en el panel de tarifas.
- Scripts necesarios que permiten agregar, editar y quitar filas de datos


3) Base de datos
- Conexión a la base de datos: creación y eliminación de la misma (logrado).
- Consultas que obtengan datos de la BD.
- Consultas que creen datos nuevos.
- Consultas que modifiquen y eliminen datos.
- Consultas que mediante bucles guarden en un arreglo o variable y modifiquen datos.

4) Formulario
- Que sea capaz de crear y replicar filas, como de eliminarlas.
- Que pueda mediante unos bucles se creen campos, con id, etc... todo lo necesario para que se pueda guardar los resultados.

*/

// Brindando seguridad al plugin
defined('ABSPATH') or die("Bye bye");
add_option( "jal_db_version", "1.0" );

/****************** Crear tabla con la clase wpdb *****************/
global $jal_db_version;
$jal_db_version = '1.0';

function jal_install()
{
	global $wpdb;
	global $jal_db_version;

	$table_name = $wpdb->prefix . 'tarifazos';
	
	$charset_collate = $wpdb->get_charset_collate();

	$sql = "CREATE TABLE $table_name (
		id mediumint(11) NOT NULL AUTO_INCREMENT,
		habit tinytext NOT NULL,
		temp_altisima tinytext NOT NULL,
		temp_alta tinytext NOT NULL,
		temp_media tinytext NOT NULL,
		temp_baja tinytext NOT NULL,
		PRIMARY KEY (id)
	) $charset_collate;";

	require_once( ABSPATH . 'wp-admin/includes/upgrade.php' );
	dbDelta( $sql );

	add_option( 'jal_db_version', $jal_db_version );
}

function jal_install_data()
{
	global $wpdb;
	$habitaciones 			= "Suite no tan Premium";
	$temporadas_altisimas 	= 9999;
	$temporadas_altas 		= 800;
	$temporadas_medias 		= 4.5;
	$temporadas_bajas 		= -1.3;
	
	$table_name = $wpdb->prefix . 'tarifazos';
	
	$wpdb->insert(
		$table_name,
		array(
			'habit' 		=> $habitaciones,
			'temp_altisima' => $temporadas_altisimas,
			'temp_alta' 	=> $temporadas_altas,
			'temp_media' 	=> $temporadas_medias,
			'temp_baja' 	=> $temporadas_bajas
		)
	);
}

register_activation_hook( __FILE__, 'jal_install' );
register_activation_hook( __FILE__, 'jal_install_data' );

// Registro de la variable con la ruta de los archivos
define( 'WM_RUTA', plugin_dir_path( __FILE__ ) );


// Incluyendo las funcionalidades
require_once( WM_RUTA . '/includes/funciones.php' );
require_once( WM_RUTA . '/includes/opciones.php' ) ;

?>