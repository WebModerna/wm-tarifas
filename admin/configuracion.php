<?php
$constante = "casaflor";
?>
<div class="wrap">
	<header class="primary">
		<h1><?php _e( 'Planilla de Tarifas y Temporadas', $constante ) ?></h1>
	</header>
	<form action="options.php" method="post">
		<table class="wp-list-table widefat fixed striped media">
			<caption>
				<h3><?php _e('Colocar los títulos y tipos de Habitaciones', $constante);?></h3>
			</caption>
			<thead>
				<th>Habitaciones o Cabañas</th>
				<th>
					<label for="temporada_alta">Título</label>
				</th>
				<th>
					<label for="temporada_media">Título</label>
				</th>
				<th>
					<label for="temporada_baja">Título</label>
				</th>
				<th>
					<label for="temporada__">Título</label>
				</th>
				<th>
					<label for="temporada__">Título</label>
				</th>
				<th>
					<label for="temporada__">Título</label>
				</th>
				<th>
					<label for="temporada__">Título</label>
				</th>
				<th>
					<label for="temporada__">Título</label>
				</th>
				<th>
					<label for="temporada__">Título</label>
				</th>
			</thead>
			<tbody>
				<tr>
					<td>1 Persona</td>
					<td>$23</td>
					<td>$23</td>
					<td>$23</td>
					<td>$2387</td>
				</tr>
				<tr>
					<td>2 Personas</td>
					<td>$23</td>
					<td>$23</td>
					<td>$23</td>
					<td>$987</td>
				</tr>
			</tbody>
		</table>

		<div>
			<hr />
			<input type="submit" id="guardar" class="button button-primary" value="<?php esc_attr_e( 'Guardar', 'text_domain' ); ?>" />
			<button class="button button-primary" id="borrar" type="reset">
				<i class="dashicons-before dashicons-forms"></i>
				<?php esc_attr_e( 'Borrar', 'text_domain' ); ?>
			</button>
		</div>
	</form>
</div>