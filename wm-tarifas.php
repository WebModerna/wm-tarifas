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

// registración y activación del plugin
function ejemplo()
{
	add_option( 'mi_opcion', 255, '', 'yes' );
}
register_activation_hook( __FILE__, 'ejemplo' );

// Configuraciones importantes
define( 'WM_RUTA', plugin_dir_path(__FILE__) );
require_once( WM_RUTA . '/includes/funciones.php' );
require_once( WM_RUTA . '/includes/opciones.php' ) ;

?>