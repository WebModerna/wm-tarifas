<?php
// Protección
defined('ABSPATH') or die("Bye bye");

// Configuración del menú de administración
function wm_menu_admin()
{
	add_menu_page(
		// Nombre en el título
		__('Panel de Tarifas', 'text_domain'),

		// Nombre en el panel
		__('Panel de Tarifas', 'text_domain'),

		// Capacidad de edición
		'manage_options',

		// ruta al archivo de configuración
		WM_RUTA . ('admin/configuracion.php'),
		
		// función opcional
		'',

		// Icono de formularios a mostrar en el panel
		'dashicons-forms',

		// Orden para mostarlo justo encima de las entradas
		4
	);
}
add_action( 'admin_menu', 'wm_menu_admin' );

?>