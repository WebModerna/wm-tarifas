<?php
defined('ABSPATH') or die("Bye bye");

// Aparición en el menú de administración
function wm_menu_admin()
{
	add_menu_page(
		'Panel de Tarifas',
		'Panel de Tarifas',
		'manage_options',
		WM_RUTA . ('admin/configuracion.php')
	);
}
add_action( 'admin_menu', 'wm_menu_admin' );

?>