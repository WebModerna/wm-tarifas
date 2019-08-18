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
				<h3><?php _e('Agregar aquí los nombres de las temporadas ↓', 'text_domain');?></h3>
			</caption>
			<thead class="tabla_tarifas__encabezado">
				<tr class="tabla_tarifas__fila">
					<th class="tabla_tarifas__fila__encabezado">
						<h4><?php _e('Habitaciones o Cabañas ↓', 'text_domain');?></h4>
					</th>
					<th class="tabla_tarifas__fila__encabezado">
						<input class="tabla_tarifas__input deshabilitado" type="text" name="temp_1" id="temp_1" placeholder="<?php _e('Temporada AltÍSIMA', 'text_domain');?>" />
					</th>
					<th class="tabla_tarifas__fila__encabezado">
						<input class="tabla_tarifas__input deshabilitado" disabled type="text" name="temp_1" id="temp_1" placeholder="<?php _e('Temporada Alta', 'text_domain');?>" />
					</th>
					<th class="tabla_tarifas__fila__encabezado">
						<input class="tabla_tarifas__input deshabilitado" disabled type="text" name="temp_2" id="temp_2" placeholder="<?php _e('Temporada Media', 'text_domain');?>" />
					</th>
					<th class="tabla_tarifas__fila__encabezado">
						<input class="tabla_tarifas__input deshabilitado" disabled type="text" name="temp_3" id="temp_3" placeholder="<?php _e('Temporada Baja', 'text_domain');?>" />
					</th>
					<th class="tabla_tarifas__fila__encabezado">
						<div class="botones_edicion">
							<a href="#" class="tabla_tarifa__boton_editar_titulo"><span class="dashicons-before dashicons-edit"></span></a>
						</div>
					</th>
				</tr>
			</thead>

			<tbody class="tabla_tarifas__cuerpo">
				<tr class="tabla_tarifas__cuerpo__fila">
					<td>
						<input class="tabla_tarifas__campo__texto" type="text" min="0" value="" placeholder="Habitación xxx" name="titulo1" disabled id="titulo1" />
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
					<td><input class="tabla_tarifas__campo__numero" type="number" min="0" value="" placeholder="300" name="" id="" disabled /></td>
					<td><input class="tabla_tarifas__campo__numero" type="number" min="0" value="" placeholder="300" name="" id="" disabled /></td>
					<td><input class="tabla_tarifas__campo__numero" type="number" min="0" value="" placeholder="300" name="" id="" disabled /></td>
					<td><input class="tabla_tarifas__campo__numero" type="number" min="0" value="" placeholder="300" name="" id="" disabled /></td>
					<td>
						<div class="botones_edicion">
							<a href="#" class="tabla_tarifa__boton_agregar_fila"><span class="dashicons-before dashicons-plus"></span></a>
							<a href="#" class="tabla_tarifa__boton_editar_fila"><span class="dashicons-before dashicons-edit"></span></a>
							<a href="#" class="tabla_tarifa__boton_borrar_fila"><span class="dashicons-before dashicons-trash"></span></a>
						</div>
					</td>
				</tr>
				<tr class="tabla_tarifas__cuerpo__fila">
					<td>
						<input class="tabla_tarifas__campo__texto" disabled type="text" min="0" value="" placeholder="Habitación xxx" name="titulo1" id="titulo1" />
					</td>
					<td><input class="tabla_tarifas__campo__numero" type="number" min="0" value="" placeholder="300" name="" id="" disabled /></td>
					<td><input class="tabla_tarifas__campo__numero" type="number" min="0" value="" placeholder="300" name="" id="" disabled /></td>
					<td><input class="tabla_tarifas__campo__numero" type="number" min="0" value="" placeholder="300" name="" id="" disabled /></td>
					<td><input class="tabla_tarifas__campo__numero" type="number" min="0" value="" placeholder="300" name="" id="" disabled /></td>
					<td>
						<div class="botones_edicion">
							<a href="#" class="tabla_tarifa__boton_agregar_fila"><span class="dashicons-before dashicons-plus"></span></a>
							<a href="#" class="tabla_tarifa__boton_editar_fila"><span class="dashicons-before dashicons-edit"></span></a>
							<a href="#" class="tabla_tarifa__boton_borrar_fila"><span class="dashicons-before dashicons-trash"></span></a>
						</div>
					</td>
				</tr>
								<tr class="tabla_tarifas__cuerpo__fila">
					<td>
						<input class="tabla_tarifas__campo__texto" disabled type="text" min="0" value="" placeholder="Habitación xxx" name="titulo1" id="titulo1" />
					</td>
					<td><input class="tabla_tarifas__campo__numero" type="number" min="0" value="" placeholder="300" name="" id="" disabled /></td>
					<td><input class="tabla_tarifas__campo__numero" type="number" min="0" value="" placeholder="300" name="" id="" disabled /></td>
					<td><input class="tabla_tarifas__campo__numero" type="number" min="0" value="" placeholder="300" name="" id="" disabled /></td>
					<td><input class="tabla_tarifas__campo__numero" type="number" min="0" value="" placeholder="300" name="" id="" disabled /></td>
					<td>
						<div class="botones_edicion">
							<a href="#" class="tabla_tarifa__boton_agregar_fila"><span class="dashicons-before dashicons-plus"></span></a>
							<a href="#" class="tabla_tarifa__boton_editar_fila"><span class="dashicons-before dashicons-edit"></span></a>
							<a href="#" class="tabla_tarifa__boton_borrar_fila"><span class="dashicons-before dashicons-trash"></span></a>
						</div>
					</td>
				</tr>
			</tbody>
		</table>

		<div class="wrap">
		</div>

		<div>
			<hr />
			<input type="submit" name="enviar"  value="<?php _e("Guardar Opciones", "text-domain");?>" class="button-primary" id="submit" />
			<input type="reset" class="reset-button button-secondary" name="reset" value="<?php esc_attr_e( 'Restaurar valores por defecto', 'text_domain' ); ?>" onclick="return confirm( '<?php print esc_js( __( 'Click OK para resetear. Cualquier cambio hecho se perderá!', 'text_domain' ) ); ?>' );" />

			<a href="#" class="tabla_tarifa__boton_agregar_fila"><span class="dashicons-before dashicons-plus"></span></a>
			<a href="#" class="tabla_tarifa__boton_editar_fila"><span class="dashicons-before dashicons-edit"></span></a>
			<a href="#" class="tabla_tarifa__boton_borrar_fila"><span class="dashicons-before dashicons-trash"></span></a>
			<div class="clear"></div>
		</div>
	</form>
</div>