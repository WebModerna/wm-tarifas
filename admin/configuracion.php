<?php
// Protección del plugin
defined('ABSPATH') or die("Bye bye");

// Protección con editores no autorizados.
if (! current_user_can ('manage_options')) wp_die (__ ('No tienes suficientes permisos para acceder a esta página.', 'text_domain'));

// Variables
/*$titulo_1 = $_POST['titulo_1'];
$tarifa_1 = $_POST['tarifa_1'];
$tarifa_2 = $_POST['tarifa_2'];
$tarifa_3 = $_POST['tarifa_3'];
$tarifa_4 = $_POST['tarifa_4'];*/

// Función que cargará los datos en la base de datos y chequeará si hay cargados.

// Este objeto global permite acceder a la base de datos de WP
global $wpdb;

// Si viene del formulario  graba en la base de datos
if (
		$_POST['titulo_1'] != ""
		AND $_POST['tarifa_1'] != ""
		AND $_POST['tarifa_2'] != ""
		AND $_POST['tarifa_3'] != ""
		AND $_POST['tarifa_4'] != ""
		AND wp_verify_nonce($_POST['wm_tarifazos_nonce'], 'graba_awm_tarifazos')
	)
{
	$table_name = $wpdb->prefix . 'tarifazos';
	$titulo_1 	= $_POST['titulo_1'];
	$tarifa_1 	= $_POST['tarifa_1'];
	$tarifa_2 	= $_POST['tarifa_2'];
	$tarifa_3 	= $_POST['tarifa_3'];
	$tarifa_4 	= $_POST['tarifa_4'];

	$wpdb->insert(
		$table_name,
		array(
			'habit' 		=> $titulo_1,
			'temp_altisima' => $tarifa_1,
			'temp_alta' 	=> $tarifa_2,
			'temp_media' 	=> $tarifa_3,
			'temp_baja' 	=> $tarifa_4
		)
	);
	echo "<p class='exito'><b>Tus datos han sido registrados</b>. Gracias por tu interés. En breve contactaré contigo.<p>";
}

/* Esta función de PHP activa el almacenamiento en búfer de salida (output buffer)
Cuando termine el formulario lo imprime con la función ob_get_clean */
// ob_start();

?>
<div class="wrap">
	<header class="primary">
		<h1><?php _e( 'Planilla de Tarifas y Temporadas', 'text_domain' ) ?></h1>
	</header>
	<form action="<?php get_the_permalink();?>" method="post" id="wm_tarifazos">
		<?php wp_nonce_field('graba_wm_tarifazos', 'wm_tarifazos_nonce'); ?>
		<table class="tabla_tarifas">
			<caption>
				<h3>
					<?php _e('Agregar aquí los nombres de las temporadas ↓', 'text_domain');?>
					<a href="#" class="tabla_tarifa__boton_editar_titulo button-primary">
						<?php _e("Editar", "text_domain");?>
						<span class="dashicons-before dashicons-edit"></span>
					</a>
				</h3>
			</caption>
			<thead class="tabla_tarifas__encabezado">
				<tr class="tabla_tarifas__fila">
					<th class="tabla_tarifas__fila__encabezado">
						<h4><?php _e('Habitaciones, Cabañas, personas ↓', 'text_domain');?></h4>
					</th>
					<th class="tabla_tarifas__fila__encabezado">
						<input class="tabla_tarifas__input" disabled type="text" name="temp_1" id="temp_1" placeholder="<?php _e('Temporada...', 'text_domain');?>" />
					</th>
					<th class="tabla_tarifas__fila__encabezado">
						<input class="tabla_tarifas__input" disabled type="text" name="temp_2" id="temp_2" placeholder="<?php _e('Temporada...', 'text_domain');?>" />
					</th>
					<th class="tabla_tarifas__fila__encabezado">
						<input class="tabla_tarifas__input" disabled type="text" name="temp_3" id="temp_3" placeholder="<?php _e('Temporada...', 'text_domain');?>" />
					</th>
					<th class="tabla_tarifas__fila__encabezado">
						<input class="tabla_tarifas__input" disabled type="text" name="temp_4" id="temp_4" placeholder="<?php _e('Temporada...', 'text_domain');?>" />
					</th>
				</tr>
			</thead>

			<tbody class="tabla_tarifas__cuerpo">
				<tr class="tabla_tarifas__cuerpo__fila" id="tabla_tarifas__cuerpo__fila_1">
					<td class="tabla_tarifas__cuerpo__habitacion">
						<input class="tabla_tarifas__campo__texto" type="text" min="0" value="" placeholder="..." name="titulo_1" disabled id="titulo_1" /> 
						<!-- <select name="page-dropdown">
							<option value=""> -->
								<?php // echo esc_attr( __( 'Seleccionar', 'text_domain' ) ); ?>
							<!-- </option> -->
							<?php							
							/*// Se listan las páginas para que se puedan seleccionar a cual le corresponde tal tarifa.
							
							$pages = get_pages(); 
							foreach ( $pages as $page )
							{
								$option = '<option value="' . get_page_link( $page->ID ) . '">';
								$option .= $page->post_title;
								$option .= '</option>';
								echo $option;
							}*/
							?>
						</select>
					</td>
					<td>
						<input class="tabla_tarifas__campo__numero" type="number" min="0" value="" placeholder="100" name="tarifa_1" id="tarifa_1" disabled value="" />
					</td>
					<td>
						<input class="tabla_tarifas__campo__numero" type="number" min="0" value="" placeholder="100" name="tarifa_2" id="tarifa_2" disabled />
					</td>
					<td>
						<input class="tabla_tarifas__campo__numero" type="number" min="0" value="" placeholder="100" name="tarifa_3" id="tarifa_3" disabled />
					</td>
					<td>
						<input class="tabla_tarifas__campo__numero" type="number" min="0" value="" placeholder="100" name="tarifa_4" id="tarifa_4" disabled />
					</td>
				</tr>
			</tbody>
		</table>

		<div class="clear"></div>

		<div class="wrap">
			<input type="submit" name="enviar"  value="<?php _e("Guardar Opciones", "text-domain");?>" class="button-primary" id="submit" />
			<input type="reset" class="reset-button button-secondary" name="reset" value="<?php esc_attr_e( 'Restaurar valores por defecto', 'text_domain' ); ?>" onclick="return confirm( '<?php print esc_js( __( 'Click OK para resetear. Cualquier cambio hecho se perderá!', 'text_domain' ) ); ?>' );" />
			<div class="clear"></div>
		</div>
	<?php
		// Devuelve el contenido del buffer de salida
		// return ob_get_clean();
	?>
	</form>
</div>