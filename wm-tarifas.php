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