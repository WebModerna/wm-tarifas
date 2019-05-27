<?php
// Protección del plugin
defined('ABSPATH') or die("Bye bye");

// Protección con editores no autorizados.
if (! current_user_can ('manage_options')) wp_die (__ ('No tienes suficientes permisos para acceder a esta página.', 'text_domain'));

?>
<div class="wrap">
	<header class="primary">
		<h1><?php _e( 'Planilla de Tarifas y Temporadas', 'text_domain' ) ?></h1>
	</header>
	<form action="opciones.php" method="post">
		<table class="wp-list-table widefat fixed striped media">
			<caption>
				<h3><?php _e('Colocar los títulos y tipos de Habitaciones', 'text_domain');?></h3>
			</caption>
			<thead>
				<tr>
					<th><?php _e( 'Habitaciones o Cabañas', 'text_domain' ); ?></th>
					<th><?php _e('Temporada Alta', 'text_domain') ?></th>
					<th><?php _e('Temporada Media', 'text_domain') ?></th>
					<th><?php _e('Temporada Baja', 'text_domain') ?></th>
					<th><?php _e('Promoción o finde largo', 'text_domain') ?></th>
				</tr>
			</thead>
			<tbody>
				<tr>
					<td>
						<select name="page-dropdown"> 
							<option value="">
								<?php echo esc_attr( __( 'Seleccionar', 'text_domain' ) ); ?>
							</option>
							<?php 
							$pages = get_pages(); 
							foreach ( $pages as $page )
							{
								$option = '<option value="' . get_page_link( $page->ID ) . '">';
								$option .= $page->post_title;
								$option .= '</option>';
								echo $option;
							}
							?>
						</select>
					</td>
					<td>$ <input type="number" min="0" value="" name="temporada_alta"></td>
					<td>$ <input type="number" min="0" value="" name="temporada_media"></td>
					<td>$ <input type="number" min="0" value="" name="temporada_baja"></td>
					<td>$ <input type="number" min="0" value="" name="temporada__"></td>
				</tr>
				<tr>
					<td><input type="number" min="0" value="" name="peronas"></td>
					<td>$ <input type="number" min="0" value="" name="temporada_alta"></td>
					<td>$ <input type="number" min="0" value="" name="temporada_media"></td>
					<td>$ <input type="number" min="0" value="" name="temporada_baja"></td>
					<td>$ <input type="number" min="0" value="" name="temporada__"></td>
				</tr>
			</tbody>
		</table>

		<div class="wrap">
		</div>

		<div>
			<hr />
			<input type="submit" class="button-primary" name="update" value="<?php esc_attr_e( 'Guardar Opciones', 'text_domain' ); ?>" />
			<input type="submit" class="reset-button button-secondary" name="reset" value="<?php esc_attr_e( 'Restaurar valores por defecto', 'text_domain' ); ?>" onclick="return confirm( '<?php print esc_js( __( 'Click OK para resetear. Cualquier cambio hecho se perderá!', 'text_domain' ) ); ?>' );" />
			<div class="clear"></div>
		</div>
	</form>
</div>