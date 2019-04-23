<?php
// Protección
defined('ABSPATH') or die("Bye bye");

// Configuración del menú de administración
function wm_menu_admin()
{
	add_menu_page(
		'Panel de Tarifas', // Nombre en el título
		'Panel de Tarifas', // Nombre en el panel
		'manage_options', // Capacidad de edición
		WM_RUTA . ('admin/configuracion.php'), // ruta al archivo de configuración
		'', // función opcional
		'dashicons-forms', // Icono de formularios a mostrar en el panel
		4 // Orden para mostarlo justo encima de las entradas
	);
}
add_action( 'admin_menu', 'wm_menu_admin' );

?>