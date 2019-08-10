<?php
// Protección del plugin
defined('ABSPATH') or die("Bye bye");

function wm_tarifas_estilos_scripts()
{
	// Registrando los estilos personalizados
	wp_register_style( 'wm_tarifa_estilo', plugins_url( '../admin/css/admin-style.css', __FILE__ ), 'all', true );
	wp_enqueue_style( 'wm_tarifa_estilo' );
	
	// Registrando los scrips personalizados
	wp_register_script( 'wm_tarifa_script', plugins_url( '../admin/js/wm_admin.js', __FILE__ ), array('jquery'), 'wp_foot', false );
	wp_enqueue_script( 'wm_tarifa_script' );
}
add_action( 'admin_enqueue_scripts', 'wm_tarifas_estilos_scripts' );
?>
