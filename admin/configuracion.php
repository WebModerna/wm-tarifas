<?php
// Protección del plugin
defined('ABSPATH') or die("Bye bye");

// Protección con editores no autorizados.
if (! current_user_can ('manage_options')) wp_die (__ ('No tienes suficientes permisos para acceder a esta página.', 'text_domain'));


/*
En esta página se tiene que estructurar el look and feel como intuitivamente configurable.
Es una tabla bien activa en todos los sentidos. Debe tener transiciones suaves.
Poder agregar, editar y borrar columnas como filas. Siempre comenzando con 3 x 3 por defecto.
Deben tener los 3 botones: add, edit y delete.
Se debe poder editar los títulos como el contenido de las celdas. Todo será un formulario.
1. 
*/
?>
<div class="wrap">
	<header class="primary">
		<h1><?php _e( 'Planilla de Tarifas y Temporadas', 'text_domain' ) ?></h1>
	</header>
	<form action="opciones.php" method="post" id="wm_tarifazos">
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
						<h4><?php _e('Habitaciones o Cabañas ↓', 'text_domain');?></h4>
					</th>
					<th class="tabla_tarifas__fila__encabezado">
						<input class="tabla_tarifas__input" disabled type="text" name="temp_1" id="temp_1" placeholder="<?php _e('Temporada AltÍSIMA', 'text_domain');?>" />
					</th>
					<th class="tabla_tarifas__fila__encabezado">
						<input class="tabla_tarifas__input" disabled type="text" name="temp_2" id="temp_2" placeholder="<?php _e('Temporada Alta', 'text_domain');?>" />
					</th>
					<th class="tabla_tarifas__fila__encabezado">
						<input class="tabla_tarifas__input" disabled type="text" name="temp_3" id="temp_3" placeholder="<?php _e('Temporada Media', 'text_domain');?>" />
					</th>
					<th class="tabla_tarifas__fila__encabezado">
						<input class="tabla_tarifas__input" disabled type="text" name="temp_4" id="temp_4" placeholder="<?php _e('Temporada Baja', 'text_domain');?>" />
					</th>
					<th class="tabla_tarifas__fila__encabezado">
						
					</th>
				</tr>
			</thead>

			<tbody class="tabla_tarifas__cuerpo">
				<tr class="tabla_tarifas__cuerpo__fila" id="tabla_tarifas__cuerpo__fila_1">
					<td>
						<input class="tabla_tarifas__campo__texto" type="text" min="0" value="" placeholder="Habitación xxx" name="titulo2" disabled id="titulo2" />
						<!-- <select name="page-dropdown"> 
							<option value="">
								<?php //echo esc_attr( __( 'Seleccionar', 'text_domain' ) ); ?>
							</option>
							<?php
							
							// Se listan las páginas para que se puedan seleccionar a cual le corresponde tal tarifa.
							/*
							$pages = get_pages(); 
							foreach ( $pages as $page )
							{
								$option = '<option value="' . get_page_link( $page->ID ) . '">';
								$option .= $page->post_title;
								$option .= '</option>';
								echo $option;
							}
							*/
							?>
						</select> -->
					</td>
					<td><input class="tabla_tarifas__campo__numero" type="number" min="0" value="" placeholder="300" name="tarifa_1" id="tarifa_1" disabled /></td>
					<td><input class="tabla_tarifas__campo__numero" type="number" min="0" value="" placeholder="300" name="tarifa_2" id="tarifa_2" disabled /></td>
					<td><input class="tabla_tarifas__campo__numero" type="number" min="0" value="" placeholder="300" name="tarifa_3" id="tarifa_3" disabled /></td>
					<td><input class="tabla_tarifas__campo__numero" type="number" min="0" value="" placeholder="300" name="tarifa_4" id="tarifa_4" disabled /></td>
				</tr>
				<tr class="tabla_tarifas__cuerpo__fila" id="tabla_tarifas__cuerpo__fila_2">
					<td>
						<input class="tabla_tarifas__campo__texto" disabled type="text" min="0" value="" placeholder="Habitación xxx" name="titulo1" id="titulo1" />
					</td>
					<td><input class="tabla_tarifas__campo__numero" type="number" min="0" value="" placeholder="300" name="tarifa_5" id="tarifa_5" disabled /></td>
					<td><input class="tabla_tarifas__campo__numero" type="number" min="0" value="" placeholder="300" name="tarifa_6" id="tarifa_6" disabled /></td>
					<td><input class="tabla_tarifas__campo__numero" type="number" min="0" value="" placeholder="300" name="tarifa_7" id="tarifa_7" disabled /></td>
					<td><input class="tabla_tarifas__campo__numero" type="number" min="0" value="" placeholder="300" name="tarifa_8" id="tarifa_8" disabled /></td>
				</tr>
				<tr class="tabla_tarifas__cuerpo__fila" id="tabla_tarifas__cuerpo__fila_3">
					<td>
						<input class="tabla_tarifas__campo__texto" disabled type="text" min="0" value="" placeholder="Habitación xxx" name="titulo1" id="titulo1" />
					</td>
					<td><input class="tabla_tarifas__campo__numero" type="number" min="0" value="" placeholder="300" name="tarifa_9" id="tarifa_9" disabled /></td>
					<td><input class="tabla_tarifas__campo__numero" type="number" min="0" value="" placeholder="300" name="tarifa_10" id="tarifa_10" disabled /></td>
					<td><input class="tabla_tarifas__campo__numero" type="number" min="0" value="" placeholder="300" name="tarifa_11" id="tarifa_11" disabled /></td>
					<td><input class="tabla_tarifas__campo__numero" type="number" min="0" value="" placeholder="300" name="tarifa_12" id="tarifa_12" disabled /></td>
				</tr>
			</tbody>
		</table>

		<div class="wrap">
		</div>

		<div>
			<hr />
			<input type="submit" name="enviar"  value="<?php _e("Guardar Opciones", "text-domain");?>" class="button-primary" id="submit" />
			<input type="reset" class="reset-button button-secondary" name="reset" value="<?php esc_attr_e( 'Restaurar valores por defecto', 'text_domain' ); ?>" onclick="return confirm( '<?php print esc_js( __( 'Click OK para resetear. Cualquier cambio hecho se perderá!', 'text_domain' ) ); ?>' );" />
			<div class="clear"></div>
		</div>
	</form>
</div>