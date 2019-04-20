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

// Registración y activación del plugin
function wm_panel_de_tarifas()
{
	add_option( 'wm_db_panel_opciones', 255, '', 'yes' );
}
register_activation_hook( __FILE__, 'wm_db_panel_opciones' );

// Registro de la variable con la ruta de los archivos
define( 'WM_RUTA', plugin_dir_path(__FILE__) );

// Incluyendo las funcionalidades
require_once( WM_RUTA . '/includes/funciones.php' );
require_once( WM_RUTA . '/includes/opciones.php' ) ;

?>